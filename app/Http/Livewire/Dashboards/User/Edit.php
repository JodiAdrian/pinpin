<?php

namespace App\Http\Livewire\Dashboards\User;

use App\Models\Personal;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Indonesia;

class Edit extends Component
{
    use WithFileUploads;

    public $name, $id_number, $tax_number, $account_number, $place_of_birth, $birth_date, $gender, $religion, $no_handphone, $image_id, $tax_image, $selfie_image;
    public $job_name, $office_name, $office_address, $length_of_work, $total_income, $total_expenditure, $net_income;
    public $address, $province_id, $city_id, $district_id, $postal_code;
    public $edit_personal, $edit_employment, $edit_account;
    public $current_password, $new_password, $confirm_password;
    public $temp_image_id, $temp_tax_image, $temp_selfie_image;
    public $section, $user;

    public function mount($id)
    {
        $this->section = 'personal';
        $user = User::with('personal', 'employment')->findOrFail($id);
        $this->user = $user;
        $this->name = $user->name;

        if ($user->personal != null){
            $this->id_number = $user->personal->id_number;
            $this->tax_number = $user->personal->tax_number;
            $this->gender = $user->personal->gender;
            $this->place_of_birth = $user->personal->place_of_birth;
            $this->birth_date = $user->personal->birth_date;
            $this->religion = $user->personal->religion;
            $this->address = $user->personal->address;
            $this->province_id = $user->personal->province;
            $this->city_id = $user->personal->city;
            $this->district_id = $user->personal->districts;
            $this->postal_code = $user->personal->postal_code;
            $this->temp_image_id = $user->personal->image_id; 
            $this->temp_tax_image = $user->personal->tax_image; 
            $this->temp_selfie_image = $user->personal->selfie_image;
        }
    }

    public function render()
    {
        $province_name = $this->province_id ? Indonesia::findProvince($this->province_id)->name : null;
        $city_name = $this->city_id ? Indonesia::findCity($this->city_id)->name : null;
        $district_name = $this->district_id ? Indonesia::findDistrict($this->district_id)->name : null;
        $provinces = Indonesia::allProvinces();
        return view('livewire.dashboards.user.edit', [
            'provinces' => $provinces,
            'cities' => $this->province_id ? Indonesia::findProvince($this->province_id, ['cities'])->cities : [],
            'districts' => $this->city_id ? Indonesia::findCity($this->city_id, ['districts'])->districts : [],
            'province_name' => $province_name,
            'city_name' => $city_name,
            'district_name' => $district_name,
        ])
        ->layout('layouts.dashboards._master', [
            'title' => 'PinCazh | Ubah Pengguna'
        ]);
    }

    public function sectionPersonal()
    {
        $this->section = 'personal';
    }

    public function sectionAddress()
    {
        $this->section = 'address';
    }
    
    public function sectionEmployment()
    {
        $this->section = 'employment';
    }

    public function cancelUpdatePersonal()
    {
        return redirect()->route('user');
    }

    public function savePersonal($id)
    {
        $personal = User::find($id)->personal;       
        dd($personal);
        // if ($personal == null){
        //     $this->newPersonal();
        // } else {
        //     $this->updatePersonal($id);
        // }
    }

    public function newPersonal()
    {
        // $this->validate($this->validationPersonal());
        // if($this->image_id == null){
        //     $file_image_id = auth()->user()->personal->image_id;
        // } else {
        //     $file_image_id = $this->image_id->store('/', 'media');
        // }
        // if($this->tax_image == null){
        //     $file_tax_image = auth()->user()->personal->tax_image;
        // } else {
        //     $file_tax_image = $this->tax_image->store('/', 'media');
        // }
        // if($this->selfie_image == null){
        //     $file_selfie_image = auth()->user()->personal->selfie_image;
        // } else {
        //     $file_selfie_image = $this->selfie_image->store('/', 'media');
        // }      
        // Personal::create([
        //     'user_id' => auth()->user()->id,
        //     'name' => $this->name,
        //     'gender' => $this->gender,
        //     'place_of_birth' => $this->place_of_birth,
        //     'birth_date' => $this->birth_date,
        //     'religion' => $this->religion,
        //     'id_number' => $this->id_number,
        //     'tax_number' => $this->tax_number,
        //     'image_id' => $file_image_id,
        //     'tax_image' => $file_tax_image,
        //     'selfie_image' => $file_selfie_image,
        // ]);
        // Personal::find($id)->user->update([
        //     'name' => $this->name,
        // ]);
        // session()->flash('success', 'Data pribadi berhasil di ubah !');
    }

    public function updatePersonal($id)
    {
        $user = User::find($id)->personal;
        $this->validate($this->validationPersonal($id));
        if($this->image_id == null){
            $file_image_id = $user->image_id;
        } else {
            $file_image_id = $this->image_id->store('/', 'media');
        }
        if($this->tax_image == null){
            $file_tax_image = $user->tax_image;
        } else {
            $file_tax_image = $this->tax_image->store('/', 'media');
        }
        if($this->selfie_image == null){
            $file_selfie_image = $user->selfie_image;
        } else {
            $file_selfie_image = $this->selfie_image->store('/', 'media');
        }      
        User::find($id)->personal->update([
            'name' => $this->name,
            'gender' => $this->gender,
            'place_of_birth' => $this->place_of_birth,
            'birth_date' => $this->birth_date,
            'religion' => $this->religion,
            'id_number' => $this->id_number,
            'tax_number' => $this->tax_number,
            'image_id' => $file_image_id,
            'tax_image' => $file_tax_image,
            'selfie_image' => $file_selfie_image,
        ]);
        User::find($id)->update([
            'name' => $this->name,
        ]);
        session()->flash('success', 'Data pribadi berhasil di ubah !');
    }

    public function saveAddress($id)
    {
        $personal = User::find($id);        
        dd($personal);
        // if ($personal == null){
        //     dd('Ini baru');
        //     // $this->newAddress();
        // } else {
        //     dd('Ini update');
        //     // $this->updateAddress($id);
        // }
    }

    public function newAddress()
    {
        # code...
    }

    public function updateAddress($id)
    {
        $a = User::find($id); 
        dd($a);
        // User::find($id)->personal->update([
        //     'province' => $this->province_id,
        //     'city' => $this->city_id,
        //     'districts' => $this->district_id,
        //     'postal_code' => $this->postal_code,
        //     'address' => $this->address,
        // ]);
        // session()->flash('success', 'Data pribadi berhasil di ubah !');
    }

    public function validationPersonal($id)
    {
        if (User::find($id)->personal != null){
            return [
                'name' => ['required'],
                'gender' => ['required'],
                'place_of_birth' => ['required'],
                'birth_date' => ['required', 'date'],
                'religion' => ['required'],
                'id_number' => ['required', 'numeric'],
                'tax_number' => ['required', 'numeric'],
            ];
        } else {
            return [
                'name' => ['required'],
                'gender' => ['required'],
                'place_of_birth' => ['required'],
                'birth_date' => ['required', 'date'],
                'religion' => ['required'],
                'id_number' => ['required', 'numeric'],
                'tax_number' => ['required', 'numeric'],
                'image_id' => ['required', 'image', 'max:5024'],
                'tax_image' => ['required', 'image', 'max:5024'],
                'selfie_image' => ['required', 'image', 'max:5024'],
            ];
        }
    }

    public function updatedSelfieImage($selfie_image)
    {
        $this->validate([
            'selfie_image' => 'required|image|max:5024'
        ]);
        $this->temp_selfie_image = $selfie_image->temporaryUrl();
    }

    public function updatedImageId($image_id)
    {
        $this->validate([
            'image_id' => 'required|image|max:5024'
        ]);
        $this->temp_image_id = $image_id->temporaryUrl();
    }

    public function updatedTaxImage($tax_image)
    {
        $this->validate([
            'tax_image' => 'required|image|max:5024'
        ]);
        $this->temp_tax_image = $tax_image->temporaryUrl();
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
        'tax_number.required' => 'No NPWP tidak boleh kosong',
        'tax_number.numeric' => 'No NPWP harus diisi nomor',
        'no_handphone.required' => 'Nomor handphone tidak boleh kosong',
        'no_handphone.numeric' => 'Nomor handphone harus diisi nomor',
        'account_number.required' => 'Nomor rekening tidak boleh kosong',
        'account_number.numeric' => 'Nomor rekening harus diisi nomor',
        'image_id.required' => 'Foto KTP tidak boleh kosong',
        'image_id.image' => 'Foto KTP harus berupa gambar: Jpg, Png, Jpeg ',
        'image_id.max' => 'Foto KTP maksimal 5mb',
        'tax_image.required' => 'Foto NPWP tidak boleh kosong',
        'tax_image.image' => 'Foto NPWP harus berupa gambar: Jpg, Png, Jpeg ',
        'tax_image.max' => 'Foto NPWP maksimal 5mb',
        'selfie_image.required' => 'Foto selfie KTP tidak boleh kosong',
        'selfie_image.image' => 'Foto selfie KTP harus berupa gambar: Jpg, Png, Jpeg ',
        'selfie_image.max' => 'Foto selfie KTP maksimal 5mb',

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
    ];
}
