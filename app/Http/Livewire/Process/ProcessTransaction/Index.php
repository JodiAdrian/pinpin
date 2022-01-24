<?php

namespace App\Http\Livewire\Process\ProcessTransaction;

use App\Models\Collateral;
use App\Models\Employment;
use App\Models\Personal;
use App\Models\TransactionHistory;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Indonesia;

class Index extends Component
{
    use WithFileUploads;

    public $_id;
    // Biodata Form
    public $name, $gender, $place_of_birth, $birth_date,  $religion, $id_number, $number_of_tax_registration, $email, $no_handphone, $account_number, $photo_id, $tax_photo, $selfie_photo;
    // Address Form
    public $address, $province_id, $city_id, $district_id, $postal_code;
    // Employment
    public $job, $place_name, $office_address, $length_of_work, $total_income, $total_expenditure, $net_income;
    // Collateral
    public $type, $land_certificate_number, $land_size, $land_owner_name, $land_address, $land_phone, $vehicle_type, $vehicle_bpkb, $vehicle_stnk, $vehicle_owner_name, $vehicle_number, $vehicle_brand, $vehicle_year, $employee_certificate_number, $employee_owner_name, $employee_office, $employee_year, $valuation_price, $market_price, $notes, $image_collateral;
    public $section;
    public $temp_selfie, $temp_photo_id, $temp_tax_photo, $temp_image_collateral;

    protected $listeners = [
        'select_modal',
        'addTransaction'
    ];

    public function mount()
    {
        $this->section = 'biodata';
        if(auth()->user()->personal != null){
            $this->_id = auth()->user()->personal->id;
            $this->id_number = auth()->user()->personal->id_number;
            $this->place_of_birth = auth()->user()->personal->place_of_birth;
            $this->birth_date = auth()->user()->personal->birth_date;
            $this->religion = auth()->user()->personal->religion;
            $this->number_of_tax_registration = auth()->user()->personal->tax_number;
            $this->account_number = auth()->user()->personal->account_number;
            $this->no_handphone = auth()->user()->personal->no_handphone;
            $this->address = auth()->user()->personal->address;
            $this->province_id = auth()->user()->personal->province;
            $this->city_id = auth()->user()->personal->city;
            $this->district_id = auth()->user()->personal->districts;
            $this->postal_code = auth()->user()->personal->postal_code;
            $this->gender = auth()->user()->personal->gender;
            $this->temp_photo_id = auth()->user()->personal->image_id;
            $this->temp_tax_photo = auth()->user()->personal->tax_image;
            $this->temp_selfie = auth()->user()->personal->selfie_image;
        }
        if(auth()->user()->employment != null){
            $this->job = auth()->user()->employment->job_name;
            $this->place_name = auth()->user()->employment->office_name;
            $this->office_address = auth()->user()->employment->office_address;
            $this->length_of_work = auth()->user()->employment->length_of_work;
            $this->total_income = auth()->user()->employment->total_income;
            $this->total_expenditure = auth()->user()->employment->total_expenditure;
            $this->net_income = auth()->user()->employment->net_income;
        }
        $this->name = auth()->user()->name;
        $this->email = auth()->user()->email;
    }
    
    public function render()
    {
        $transaction = Http::withHeaders([
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
            'Core-Banking-Password' => "Cazh2021",
        ])
        ->post("https://staging-cbs.cazh.id/api/product/installment", [
            'amount' => 19000000,
            'tenor' => 12,
            'product_id' => 1,
        ]);
        $transaction_data = $transaction->json();
        $province_name = $this->province_id ? Indonesia::findProvince($this->province_id)->name : null;
        $city_name = $this->city_id ? Indonesia::findCity($this->city_id)->name : null;
        $district_name = $this->district_id ? Indonesia::findDistrict($this->district_id)->name : null;
        $provinces = Indonesia::allProvinces();
        return view('livewire.process.process-transaction.index',[
            'transaction_data' => $transaction_data,
            'provinces' => $provinces,
            'cities' => $this->province_id ? Indonesia::findProvince($this->province_id, ['cities'])->cities : [],
            'districts' => $this->city_id ? Indonesia::findCity($this->city_id, ['districts'])->districts : [],
            'province_name' => $province_name,
            'city_name' => $city_name,
            'district_name' => $district_name,
        ])
        ->layout('layouts.dashboards._master', [
            'title' => 'PinCazh'
        ]);
    }

    public function confirmTransaction($_id, $action)
    {
        $this->_id = $_id;
        if ($action == 'confirm'){
            $this->dispatchBrowserEvent('openConfirmModal');
        }

    }

    public function saveUser()
    {
        if(auth()->user()->personal == null){
            $this->saveNew();
        } else {
            $this->saveUpdate();
        }
    }

    public function saveNew()
    {
        $file_image_id = $this->photo_id->store('/', 'media');
        $file_tax_photo = $this->tax_photo->store('/', 'media');
        $file_selfie_photo = $this->selfie_photo->store('/', 'media');
        Personal::create([
            'user_id' => auth()->user()->id,
            'name' => $this->name,
            'gender' => $this->gender,
            'place_of_birth' => $this->place_of_birth,
            'birth_date' => $this->birth_date,
            'religion' => $this->religion,
            'id_number' => $this->id_number,
            'tax_number' => $this->number_of_tax_registration,
            'no_handphone' => $this->no_handphone,
            'account_number' => $this->account_number,
            'address' => $this->address,
            'province' => $this->province_id,
            'city' => $this->city_id,
            'districts' => $this->district_id,
            'postal_code' => $this->postal_code,
            'image_id' => $file_image_id,
            'tax_image' => $file_tax_photo,
            'selfie_image' => $file_selfie_photo,
        ]);

        Employment::create([
            'user_id' => auth()->user()->id,
            'job_name' => $this->job,
            'office_name' => $this->place_name,
            'office_address' => $this->office_address,
            'length_of_work' => $this->length_of_work,
            'total_income' => $this->total_income,
            'total_expenditure' => $this->total_expenditure,
            'net_income' => $this->net_income,
        ]);

        $file_collateral_image = $this->image_collateral->store('/', 'media');
        $collateral = new Collateral();
        $collateral->user_id = auth()->user()->id;
        $collateral->type = $this->type;
        $collateral->land_certificate_number = $this->land_certificate_number;
        $collateral->land_size = $this->land_size;
        $collateral->land_owner_name = $this->land_owner_name;
        $collateral->land_address = $this->land_address;
        $collateral->land_phone = $this->land_phone;
        $collateral->vehicle_type = $this->vehicle_type;
        $collateral->vehicle_bpkb = $this->vehicle_bpkb;
        $collateral->vehicle_stnk = $this->vehicle_stnk;
        $collateral->vehicle_owner_name = $this->vehicle_owner_name;
        $collateral->vehicle_number = $this->vehicle_number;
        $collateral->vehicle_brand = $this->vehicle_brand;
        $collateral->vehicle_year = $this->vehicle_year;
        $collateral->employee_certificate_number = $this->employee_certificate_number;
        $collateral->employee_owner_name = $this->employee_owner_name;
        $collateral->employee_office = $this->employee_office;
        $collateral->employee_year = $this->employee_year;
        $collateral->valuation_price = $this->valuation_price;
        $collateral->market_price = $this->market_price;
        $collateral->notes = $this->notes;
        if ($this->image_collateral == null){
            $collateral->image = null;
        } else {
            $collateral->image = $file_collateral_image;
        }
        $collateral->save();

        // Data masih dummy
       TransactionHistory::create([
            'user_id' => auth()->user()->id,
            'collateral_id' => $collateral->id,
            'city' => 'Purwokerto',
            'product' => 'Anuitas',
            'credit_amount' => $this->transaction_data['data']['loan']['amount'],
            'tenor' => $this->transaction_data['data']['loan']['tenor'],
            'type_tenor' => 'Bulan',
            'borrow_date' => now(),
            'approved_date' => null,
            'due_date' => null,
            'loan_interest' => 5,
            'status' => 'Waiting',
        ]);
    
        return redirect(route('dashboard'));
    }

    public function saveUpdate()
    {
        $personal = Personal::find(auth()->user()->personal->id);
        if($this->photo_id == null){
            $file_image_id = auth()->user()->personal->image_id;
        } else {
            Storage::delete('/media/user/'.auth()->user()->personal->image_id);
            $file_image_id = $this->photo_id->store('/', 'media');
        }
        if($this->tax_photo == null){
            $file_tax_photo = auth()->user()->personal->tax_image;
        } else {
            Storage::delete('/media/user/'.auth()->user()->personal->tax_image);
            $file_tax_photo = $this->tax_photo->store('/', 'media');
        }
        if($this->selfie_photo == null){
            $file_selfie_photo = auth()->user()->personal->selfie_image;
        } else {
            Storage::delete('/media/user/'.auth()->user()->personal->selfie_image);
            $file_selfie_photo = $this->selfie_photo->store('/', 'media');
        }       
        $personal->update([
            'religion' => $this->religion,
            'no_handphone' => $this->no_handphone,
            'account_number' => $this->account_number,
            'address' => $this->address,
            'province' => $this->province_id,
            'city' => $this->city_id,
            'districts' => $this->district_id,
            'postal_code' => $this->postal_code,
            'image_id' => $file_image_id,
            'tax_image' => $file_tax_photo,
            'selfie_image' => $file_selfie_photo,
        ]);

        $employment = Employment::find(auth()->user()->employment->id);
        $employment->update([
            'job_name' => $this->job,
            'office_name' => $this->place_name,
            'office_address' => $this->office_address,
            'length_of_work' => $this->length_of_work,
            'total_income' => $this->total_income,
            'total_expenditure' => $this->total_expenditure,
            'net_income' => $this->net_income,
        ]);

        $collateral = new Collateral();
        $collateral->user_id = auth()->user()->id;
        $collateral->type = $this->type;
        $collateral->land_certificate_number = $this->land_certificate_number;
        $collateral->land_size = $this->land_size;
        $collateral->land_owner_name = $this->land_owner_name;
        $collateral->land_address = $this->land_address;
        $collateral->land_phone = $this->land_phone;
        $collateral->vehicle_type = $this->vehicle_type;
        $collateral->vehicle_bpkb = $this->vehicle_bpkb;
        $collateral->vehicle_stnk = $this->vehicle_stnk;
        $collateral->vehicle_owner_name = $this->vehicle_owner_name;
        $collateral->vehicle_number = $this->vehicle_number;
        $collateral->vehicle_brand = $this->vehicle_brand;
        $collateral->vehicle_year = $this->vehicle_year;
        $collateral->employee_certificate_number = $this->employee_certificate_number;
        $collateral->employee_owner_name = $this->employee_owner_name;
        $collateral->employee_office = $this->employee_office;
        $collateral->employee_year = $this->employee_year;
        $collateral->valuation_price = $this->valuation_price;
        $collateral->market_price = $this->market_price;
        $collateral->notes = $this->notes;
        if ($this->image_collateral == null){
            $collateral->image = null;
        } else {
            $file_collateral_image = $this->image_collateral->store('/', 'media');
            $collateral->image = $file_collateral_image;
        }
        $collateral->save();

        // Data masih dummy
       TransactionHistory::create([
            'user_id' => auth()->user()->id,
            'collateral_id' => $collateral->id,
            'city' => 'Purwokerto',
            'product' => 'Anuitas',
            'credit_amount' => 25000000,
            'tenor' => 36,
            'type_tenor' => 'Bulan',
            'borrow_date' => now(),
            'approved_date' => null,
            'due_date' => null,
            'loan_interest' => 5,
            'status' => 'Menunggu',
        ]);
    
        return redirect(route('dashboard'));
    }

    public function stepValidation($section)
    {
        if ($section == 'biodata') {
            $this->validate($this->validationBiodata());
            $this->section = 'address';
        } else if ($section == 'address'){
            $this->validate($this->validationProvince());
            if($this->province_id != null){
                $this->validate($this->validationCity());
                if($this->city_id != null){
                    $this->validate($this->validationDistrict());
                    if($this->district_id != null){
                    $this->validate($this->validationPostalCode());
                        if($this->postal_code != null){
                        $this->validate($this->validationAddress());
                            if($this->address != null){
                            $this->section = 'occupation';
                            }
                        }
                    }
                }
            }
        } else if ($section == 'occupation') {
            $this->validate($this->validationOccupation());
            $this->section = 'loan';
        } else if ($section == 'loan') {
            $this->validate($this->validationLoan());
            if($this->type == 'no_collateral'){
                $this->section = 'confirm';
            } else if ($this->type == 'shm'){
                $this->validate($this->validationSHM());
                $this->section = 'confirm';
            } else if ($this->type == 'decree_empolyee'){
                $this->validate($this->validationDecreeEmployee());
                $this->section = 'confirm';
            } else if ($this->type == 'bpkb_vehicle'){
                $this->validate($this->validationBPKB());
                $this->section = 'confirm';
            }
        }
    }

    public function choose($type)
    {
        if($type == ''){
            $this->resetSHM();
            $this->resetDecreeEmployee();
            $this->resetBPKB();
        } elseif($type == 'no_collateral'){
            $this->resetSHM();
            $this->resetDecreeEmployee();
            $this->resetBPKB();
        } else if ($this->type == 'shm'){
            $this->resetDecreeEmployee();
            $this->resetBPKB();
        } else if ($this->type == 'decree_empolyee'){
            $this->resetSHM();
            $this->resetBPKB();
        } else if ($this->type == 'bpkb_vehicle'){
            $this->resetSHM();
            $this->resetDecreeEmployee();
        }
    }

    public function backStep($section)
    {
        if($section == 'confirm'){
            $this->section = 'loan';
        } else if ($section == 'loan') {
            $this->section = 'occupation';
        } else if ($section == 'occupation'){
            $this->section = 'address';
        } else if ($section == 'address'){
            $this->section = 'biodata';
        }
    }

    public function resetSHM()
    {
        $this->land_certificate_number = null;
        $this->land_size = null;
        $this->land_owner_name = null;
        $this->land_phone = null;
        $this->land_address = null;
        $this->valuation_price = null;
        $this->market_price = null;
        $this->image_collateral = null;
        $this->temp_image_collateral = null;
        $this->notes = null;
        $this->resetErrorBag();
    }

    public function resetDecreeEmployee()
    {
        $this->employee_certificate_number = null;
        $this->employee_office = null;
        $this->employee_owner_name = null;
        $this->employee_year = null;
        $this->resetErrorBag();
    }
    
    public function resetBPKB()
    {
        $this->vehicle_type = null;
        $this->vehicle_owner_name = null;
        $this->vehicle_bpkb = null;
        $this->vehicle_stnk = null;
        $this->vehicle_number = null;
        $this->vehicle_brand = null;
        $this->vehicle_year = null;
        $this->valuation_price = null;
        $this->market_price = null;
        $this->image_collateral = null;
        $this->temp_image_collateral = null;
        $this->notes = null;
        $this->resetErrorBag();   
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'province_id' => ['required'],
            'city_id' => ['required'],
            'district_id' => ['required'],
            'postal_code' => ['required', 'numeric'],
            'address' => ['required'],
        ]);
    }

    public function validationBiodata()
    {
        if (auth()->user()->personal != null){
            return [
                'name' => ['required'],
                'gender' => ['required'],
                'place_of_birth' => ['required'],
                'birth_date' => ['required', 'date'],
                'religion' => ['required'],
                'id_number' => ['required', 'numeric'],
                'number_of_tax_registration' => ['required', 'numeric'],
                'email' => ['required', 'email'],
                'no_handphone' => ['required', 'numeric'],
                'account_number' => ['required', 'numeric'],
            ];
        } else {
            return [
                'name' => ['required'],
                'gender' => ['required'],
                'place_of_birth' => ['required'],
                'birth_date' => ['required', 'date'],
                'religion' => ['required'],
                'id_number' => ['required', 'numeric'],
                'number_of_tax_registration' => ['required', 'numeric'],
                'email' => ['required', 'email'],
                'no_handphone' => ['required', 'numeric'],
                'account_number' => ['required', 'numeric'],
                'photo_id' => ['required', 'image', 'max:5024'],
                'tax_photo' => ['required', 'image', 'max:5024'],
                'selfie_photo' => ['required', 'image', 'max:5024'],
            ];
        }
    }

    public function validationProvince()
    {
        return [
            'province_id' => ['required'],
        ];
    }

    public function validationCity()
    {
        return [
            'city_id' => ['required'],
        ];
    }
    
    public function validationDistrict()
    {
        return [
            'district_id' => ['required'],            
        ];
    }

    public function validationPostalCode()
    {
        return [
            'postal_code' => ['required', 'numeric'],            
        ];
    }

    public function validationAddress()
    {
        return [
            'address' => ['required'],
        ];
    }

    public function validationOccupation()
    {
        return [
            'job' => ['required'],
            'place_name' => ['required'],
            'office_address' => ['required'],
            'length_of_work' => ['required'],
            'total_income' => ['required', 'numeric'],
            'total_expenditure' => ['required', 'numeric'],
            'net_income' => ['required', 'numeric'],
        ];
    }

    public function validationLoan()
    {
        return [
            'type' => ['required'],
        ];
    }

    public function validationSHM()
    {
        return [
            'land_certificate_number' => ['required'],
            'land_size' => ['required', 'numeric'],
            'land_owner_name' => ['required'],
            'land_phone' => ['required', 'numeric'],
            'land_address' => ['required'],
            'valuation_price' => ['required', 'numeric'],
            'market_price' => ['required', 'numeric'],
            'image_collateral' => ['required', 'image', 'max:5024'],
        ];
    }

    public function validationDecreeEmployee()
    {
        return [
            'employee_certificate_number' => ['required'],
            'employee_office' => ['required'],
            'employee_owner_name' => ['required'],
            'employee_year' => ['required', 'numeric'],
        ];
    }
    
    public function validationBPKB()
    {
        return [
            'vehicle_type' => ['required'],
            'vehicle_owner_name' => ['required'],
            'vehicle_bpkb' => ['required', 'numeric'],
            'vehicle_stnk' => ['required', 'numeric'],
            'vehicle_number' => ['required'],
            'vehicle_brand' => ['required'],
            'vehicle_year' => ['required'],
            'valuation_price' => ['required', 'numeric'],
            'market_price' => ['required', 'numeric'],
            'image_collateral' => ['required'],
        ];
    }
    

    public function updatedSelfiePhoto($selfie_photo)
    {
        $this->validate([
            'selfie_photo' => 'required|image|max:5024'
        ]);
        $this->temp_selfie = $selfie_photo->temporaryUrl();
    }

    public function updatedPhotoId($photo_id)
    {
        $this->validate([
            'photo_id' => 'required|image|max:5024'
        ]);
        $this->temp_photo_id = $photo_id->temporaryUrl();
    }

    public function updatedTaxPhoto($tax_photo)
    {
        $this->validate([
            'tax_photo' => 'required|image|max:5024'
        ]);
        $this->temp_tax_photo = $tax_photo->temporaryUrl();
    }

    public function updatedImageCollateral($image_collateral)
    {
        $this->validate([
            'image_collateral' => 'required|image|max:5024'
        ]);
        $this->temp_image_collateral = $image_collateral->temporaryUrl();
    }

    protected $messages = [
        // Personal Data
        'name.required' => 'Nama tidak boleh kosong',
        'gender.required' => 'Jenis Kelamin tidak boleh kosong',
        'place_of_bith.required' => 'Tempat Lahir tidak boleh kosong',
        'birth_date.required' => 'Tanggal Lahir tidak boleh kosong',
        'birth_date.date' => 'Tanggal Lahir harus tanggal',
        'religion.required' => 'Agama tidak boleh kosong',
        'id_number.required' => 'NIK tidak boleh kosong',
        'id_number.numeric' => 'NIK harus diisi nomor',
        'number_of_tax_registration.required' => 'No NPWP tidak boleh kosong',
        'number_of_tax_registration.numeric' => 'No NPWP harus diisi nomor',
        'email.required' => 'Email tidak boleh kosong.',
        'email.email' => 'Email harus sesuai format, Contoh : admin@gmail.com.',
        'no_handphone.required' => 'Nomor handphone tidak boleh kosong',
        'no_handphone.numeric' => 'Nomor handphone harus diisi nomor',
        'account_number.required' => 'Nomor rekening tidak boleh kosong',
        'account_number.numeric' => 'Nomor rekening harus diisi nomor',
        'photo_id.required' => 'Foto KTP tidak boleh kosong',
        'photo_id.image' => 'Foto KTP harus berupa gambar: Jpg, Png, Jpeg ',
        'photo_id.max' => 'Foto KTP maksimal 5mb',
        'tax_photo.required' => 'Foto NPWP tidak boleh kosong',
        'tax_photo.image' => 'Foto NPWP harus berupa gambar: Jpg, Png, Jpeg ',
        'tax_photo.max' => 'Foto NPWP maksimal 5mb',
        'selfie_photo.required' => 'Foto selfie KTP tidak boleh kosong',
        'selfie_photo.image' => 'Foto selfie KTP harus berupa gambar: Jpg, Png, Jpeg ',
        'selfie_photo.max' => 'Foto selfie KTP maksimal 5mb',

        // Address
        'address.required' => 'Alamat tidak boleh kosong',
        'province_id.required' => 'Provinsi tidak boleh kosong',
        'city_id.required' => 'Kota/Kabupaten tidak boleh kosong',
        'district_id.required' => 'Kecamatan tidak boleh kosong',
        'postal_code.required' => 'Kode Pos tidak boleh kosong',
        'postal_code.numeric' => 'Kode Pos hanya diisi oleh nomor',

        // Employment
        'job.required' => 'Pekerjaan tidak boleh kosong',
        'place_name.required' => 'Nama perusahaan tidak boleh kosong',
        'office_address.required' => 'Alamat tidak boleh kosong',
        'length_of_work.required' => 'Lama bekerja tidak boleh kosong',
        'total_income.required' => 'Pemasukan per bulan tidak boleh kosong',
        'total_income.numeric' => 'Pemasukan per bulan harus diisi nomor',
        'total_expenditure.required' => 'Pengeluaran per bulan tidak boleh kosong',
        'total_expenditure.numeric' => 'Pengeluaran per bulan harus diisi nomor',
        'net_income.required' => 'Pemasukan bersih tidak boleh kosong',
        'net_income.numeric' => 'Pemasukan bersih harus diisi nomor',

        // Loan
        'type.required' => 'Tipe Agunan Tidak Boleh Kosong',
        'land_certificate_number.required' => 'Nomor Sertifikat tidak boleh kosong',
        'land_size.required' => 'Luas tidak boleh kosong',
        'land_owner_name.required' => 'Kolom Atas Nama tidak boleh kosong',
        'land_address.required' => 'Kolom lokasi tidak boleh kosong',
        'land_phone.required' => 'Kolom nomor telepon tidak boleh kosong',
        'vehicle_type.required' => 'Kolom tipe kendaraan tidak boleh kosong',
        'vehicle_bpkb.required' => 'Kolom nomor BPKB tidak boleh kosong',
        'vehicle_stnk.required' => 'Kolom nomor STNK tidak boleh kosong',
        'vehicle_owner_name.required' => 'Kolom atas nama tidak boleh kosong',
        'vehicle_number.required' => 'Kolom nomor kendaraan tidak boleh kosong',
        'vehicle_brand.required' => 'Kolom merek tidak boleh kosong',
        'vehicle_year.required' => 'Kolom tahun kendaraan tidak boleh kosong',
        'employee_certificate_number.required' => 'Kolom sertifikat tidak boleh kosong',
        'employee_owner_name.required' => 'Kolom atas nama tidak boleh kosong',
        'employee_office.required' => 'Kolom lokasi tidak boleh kosong',
        'employee_year.required' => 'Kolom tahun tidak boleh kosong',
        'valuation_price.required' => 'Kolom harga penilaian tidak boleh kosong',
        'market_price.required' => 'Kolom harga pasar wajar tidak boleh kosong',
        'image_collateral.required' => 'Kolom gambar agunan tidak boleh kosong',
    ];
}
