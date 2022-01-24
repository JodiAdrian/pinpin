<?php

namespace App\Http\Livewire\Dashboards\Profile;

use App\Models\Employment;
use App\Models\Personal;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Indonesia;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    use WithFileUploads;

    public $name, $id_number, $tax_number, $account_number, $place_of_birth, $birth_date, $gender, $religion, $no_handphone, $image_id, $tax_image, $selfie_image;
    public $job_name, $office_name, $office_address, $length_of_work, $total_income, $total_expenditure, $net_income;
    public $address, $province_id, $city_id, $district_id, $postal_code;
    public $section;
    public $edit_personal, $edit_employment, $edit_account;
    public $current_password, $new_password, $confirm_password;
    public $temp_image_id, $temp_tax_image, $temp_selfie_image;

    protected $listeners = [
        'refreshPage' => '$refresh'
    ];

    public function mount()
    {
        $this->section = 'personal';
        $this->edit_personal = false;
        $this->edit_employment = false;
        $this->edit_account = false;

        $this->name = auth()->user()->name;
        // Personal Data
        if(auth()->user()->personal != null){
            $this->id_number = auth()->user()->personal->id_number;
            $this->place_of_birth = auth()->user()->personal->place_of_birth;
            $this->birth_date = auth()->user()->personal->birth_date;
            $this->religion = auth()->user()->personal->religion;
            $this->tax_number = auth()->user()->personal->tax_number;
            $this->account_number = auth()->user()->personal->account_number;
            $this->no_handphone = auth()->user()->personal->no_handphone;
            $this->address = auth()->user()->personal->address;
            $this->province_id = auth()->user()->personal->province;
            $this->city_id = auth()->user()->personal->city;
            $this->district_id = auth()->user()->personal->districts;
            $this->postal_code = auth()->user()->personal->postal_code;
            $this->gender = auth()->user()->personal->gender;
            $this->temp_image_id = auth()->user()->personal->image_id;
            $this->temp_tax_image = auth()->user()->personal->tax_image;
            $this->temp_selfie_image = auth()->user()->personal->selfie_image;
        }

        // Employment Data
        if(auth()->user()->employment != null){
            $this->job_name = auth()->user()->employment->job_name;
            $this->office_name = auth()->user()->employment->office_name;
            $this->office_address = auth()->user()->employment->office_address;
            $this->length_of_work = auth()->user()->employment->length_of_work;
            $this->total_income = auth()->user()->employment->total_income;
            $this->total_expenditure = auth()->user()->employment->total_expenditure;
            $this->net_income = auth()->user()->employment->net_income;
        }
    }

    public function render()
    {
        $province_name = $this->province_id ? Indonesia::findProvince($this->province_id)->name : null;
        $city_name = $this->city_id ? Indonesia::findCity($this->city_id)->name : null;
        $district_name = $this->district_id ? Indonesia::findDistrict($this->district_id)->name : null;
        $provinces = Indonesia::allProvinces();
        return view('livewire.dashboards.profile.index', [
            'provinces' => $provinces,
            'cities' => $this->province_id ? Indonesia::findProvince($this->province_id, ['cities'])->cities : [],
            'districts' => $this->city_id ? Indonesia::findCity($this->city_id, ['districts'])->districts : [],
            'province_name' => $province_name,
            'city_name' => $city_name,
            'district_name' => $district_name,
        ])
        ->layout('layouts.dashboards._master', [
            'title' => 'PinCazh | Profile'
        ]);
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, [
            'current_password' => ['required', 'string', 'min:8', 'max:16'],
            'new_password' => ['required', 'string', 'min:8', 'max:16'],
            'confirm_password' => ['required', 'string', 'min:8', 'max:16', 'same:new_password', 'different:curent_password'],
        ]);
    }

    public function sectionPersonal()
    {
        $this->section = 'personal';
        $this->edit_employment = false;
        $this->edit_account = false;
    }

    public function sectionEmployment()
    {
        $this->section = 'employment';
        $this->edit_personal = false;
        $this->edit_account = false;
    }
    
    public function sectionInformation()
    {
        $this->section = 'information';
        $this->edit_personal = false;
        $this->edit_employment = false;
    }

    public function sectionChangePassword()
    {
        $this->section = 'change_password';
        $this->edit_personal = false;
        $this->edit_employment = false;
        $this->edit_account = false;
    }

    public function savePersonal()
    {
        if (auth()->user()->personal == null){
            $this->newPersonal();
        } else {
            $this->updatePersonal();
        }
    }

    public function newPersonal()
    {
        $this->validate($this->validationPersonal());
        if($this->image_id == null){
            $file_image_id = auth()->user()->personal->image_id;
        } else {
            $file_image_id = $this->image_id->store('/', 'media');
        }
        if($this->tax_image == null){
            $file_tax_image = auth()->user()->personal->tax_image;
        } else {
            $file_tax_image = $this->tax_image->store('/', 'media');
        }
        if($this->selfie_image == null){
            $file_selfie_image = auth()->user()->personal->selfie_image;
        } else {
            $file_selfie_image = $this->selfie_image->store('/', 'media');
        }      
        Personal::create([
            'user_id' => auth()->user()->id,
            'name' => $this->name,
            'gender' => $this->gender,
            'place_of_birth' => $this->place_of_birth,
            'birth_date' => $this->birth_date,
            'religion' => $this->religion,
            'id_number' => $this->id_number,
            'tax_number' => $this->tax_number,
            'address' => $this->address,
            'province' => $this->province_id,
            'city' => $this->city_id,
            'districts' => $this->district_id,
            'postal_code' => $this->postal_code,
            'image_id' => $file_image_id,
            'tax_image' => $file_tax_image,
            'selfie_image' => $file_selfie_image,
        ]);
        User::find(auth()->user()->id)->update([
            'name' => $this->name
        ]);
        $this->emit('refreshPage');
        $this->edit_personal = false;
        session()->flash('success', 'Data pribadi berhasil di ubah !');
    }

    public function updatePersonal()
    {
        $this->validate($this->validationPersonal());
        if($this->image_id == null){
            $file_image_id = auth()->user()->personal->image_id;
        } else {
            // Storage::delete('/media/user/'.auth()->user()->personal->image_id);
            $file_image_id = $this->image_id->store('/', 'media');
        }
        if($this->tax_image == null){
            $file_tax_image = auth()->user()->personal->tax_image;
        } else {
            // Storage::delete('/media/user/'.auth()->user()->personal->tax_image);
            $file_tax_image = $this->tax_image->store('/', 'media');
        }
        if($this->selfie_image == null){
            $file_selfie_image = auth()->user()->personal->selfie_image;
        } else {
            // Storage::delete('/media/user/'.auth()->user()->personal->selfie_image);
            $file_selfie_image = $this->selfie_image->store('/', 'media');
        }      
        Personal::find(auth()->user()->personal->id)->update([
            'name' => $this->name,
            'gender' => $this->gender,
            'place_of_birth' => $this->place_of_birth,
            'birth_date' => $this->birth_date,
            'religion' => $this->religion,
            'id_number' => $this->id_number,
            'tax_number' => $this->tax_number,
            'address' => $this->address,
            'province' => $this->province_id,
            'city' => $this->city_id,
            'districts' => $this->district_id,
            'postal_code' => $this->postal_code,
            'image_id' => $file_image_id,
            'tax_image' => $file_tax_image,
            'selfie_image' => $file_selfie_image,
        ]);
        User::find(auth()->user()->id)->update([
            'name' => $this->name
        ]);
        $this->emit('refreshPage');
        $this->edit_personal = false;
        session()->flash('success', 'Data pribadi berhasil di ubah !');
    }

    public function cancelUpdatePersonal()
    {
        if (auth()->user()->personal == null){
            $this->name = auth()->user()->name;
            $this->id_number = null;
            $this->place_of_birth = null;
            $this->birth_date = null;
            $this->religion = null;
            $this->tax_number = null;
            $this->address = null;
            $this->province_id = null;
            $this->city_id = null;
            $this->district_id = null;
            $this->postal_code = null;
            $this->gender = null;
            $this->temp_image_id = null;
            $this->temp_tax_image = null;
            $this->temp_selfie_image = null;
            $this->resetErrorBag();
            session()->flash('warning', 'Anda membatalkan pengubahan data pribadi.');
            $this->edit_personal = false;
        } else {
            $this->name = auth()->user()->name;
            $this->id_number = auth()->user()->personal->id_number;
            $this->place_of_birth = auth()->user()->personal->place_of_birth;
            $this->birth_date = auth()->user()->personal->birth_date;
            $this->religion = auth()->user()->personal->religion;
            $this->tax_number = auth()->user()->personal->tax_number;
            $this->address = auth()->user()->personal->address;
            $this->province_id = auth()->user()->personal->province;
            $this->city_id = auth()->user()->personal->city;
            $this->district_id = auth()->user()->personal->districts;
            $this->postal_code = auth()->user()->personal->postal_code;
            $this->gender = auth()->user()->personal->gender;
            $this->temp_image_id = auth()->user()->personal->image_id;
            $this->temp_tax_image = auth()->user()->personal->tax_image;
            $this->temp_selfie_image = auth()->user()->personal->selfie_image;
            $this->resetErrorBag();
            session()->flash('warning', 'Anda membatalkan pengubahan data pribadi.');
            $this->edit_personal = false;
        }
    }

    public function saveEmployment()
    {
        if (auth()->user()->employment == null){
            $this->newEmployment();
        } else {
            $this->updateEmployment();
        }
    }

    public function newEmployment()
    {
        $this->validate($this->validationEmployment());
        Employment::create([
            'user_id' => auth()->user()->id,
            'job_name' => $this->job_name,
            'office_name' => $this->office_name,
            'office_address' => $this->office_address,
            'length_of_work' => $this->length_of_work,
            'total_income' => $this->total_income,
            'total_expenditure' => $this->total_expenditure,
            'net_income' => $this->net_income,
        ]);
        session()->flash('success', 'Data pekerjaan berhasil di ubah !');
        $this->edit_employment = false;
    }

    public function updateEmployment()
    {
        $this->validate($this->validationEmployment());
        Employment::find(auth()->user()->employment->id)->update([
            'job_name' => $this->job_name,
            'office_name' => $this->office_name,
            'office_address' => $this->office_address,
            'length_of_work' => $this->length_of_work,
            'total_income' => $this->total_income,
            'total_expenditure' => $this->total_expenditure,
            'net_income' => $this->net_income,
        ]);
        session()->flash('success', 'Data pekerjaan berhasil di ubah !');
        $this->edit_employment = false;
    }

    public function cancelUpdateEmployment()
    {
        if (auth()->user()->employment == null){
            $this->job_name = null;
            $this->office_name = null;
            $this->office_address = null;
            $this->length_of_work = null;
            $this->total_income = null;
            $this->total_expenditure = null;
            $this->net_income = null;
            $this->resetErrorBag();
            session()->flash('warning', 'Anda membatalkan pengubahan data pekerjaan.');
            $this->edit_employment = false;
        } else {
            $this->job_name = auth()->user()->employment->job_name;
            $this->office_name = auth()->user()->employment->office_name;
            $this->office_address = auth()->user()->employment->office_address;
            $this->length_of_work = auth()->user()->employment->length_of_work;
            $this->total_income = auth()->user()->employment->total_income;
            $this->total_expenditure = auth()->user()->employment->total_expenditure;
            $this->net_income = auth()->user()->employment->net_income;
            $this->resetErrorBag();
            session()->flash('warning', 'Anda membatalkan pengubahan data pekerjaan.');
            $this->edit_employment = false;
        }
    }

    public function saveAccount()
    {
        if (auth()->user()->personal == null){
            $this->newAccount();
        } else {
            $this->updateAccount();
        }
    }

    public function newAccount()
    {
        $this->validate([
            'account_number' => ['required', 'numeric'],
            'no_handphone' => ['required', 'numeric']
            
        ]);
        Personal::create([
            'user_id' => auth()->user()->id,
            'account_number' => $this->account_number,
            'no_handphone' => $this->no_handphone
        ]);
        session()->flash('success', 'Informasi akun berhasil di ubah !');
        $this->edit_account = false;
    }

    public function updateAccount()
    {
        $this->validate([
            'account_number' => ['required', 'numeric'],
            'no_handphone' => ['required', 'numeric']
            
        ]);
        Personal::find(auth()->user()->personal->id)->update([
            'account_number' => $this->account_number,
            'no_handphone' => $this->no_handphone
        ]);
        session()->flash('success', 'Informasi akun berhasil di ubah !');
        $this->edit_account = false;
    }

    public function cancelUpdateAccount()
    {
        if (auth()->user()->personal == null){
            $this->account_number = null;
            $this->no_handphone = null;
            $this->resetErrorBag();
            session()->flash('warning', 'Anda membatalkan pengubahan informasi akun.');
            $this->edit_account = false;
        } else {
            $this->account_number = auth()->user()->personal->account_number;
            $this->no_handphone = auth()->user()->personal->no_handphone;
            $this->resetErrorBag();
            session()->flash('warning', 'Anda membatalkan pengubahan informasi akun.');
            $this->edit_account = false;
        }
    }

    public function changePassword()
    {
        $this->validate($this->validationPassword());
        if (Hash::check($this->current_password, auth()->user()->password)){
            User::find(auth()->user()->id)->update([
                'password' => Hash::make($this->new_password)
            ]);
            Auth::logout();
            session()->flash('message', 'Anda telah berhasil mengganti kata sandi dan keluar otomatis');
            return redirect()->route('login');
        } else {
            session()->flash('error', 'Kata sandi lama tidak sama !');
            $this->resetForm();
        }
    }

    public function validationPersonal()
    {
        if (auth()->user()->personal != null){
            return [
                'name' => ['required'],
                'gender' => ['required'],
                'place_of_birth' => ['required'],
                'birth_date' => ['required', 'date'],
                'religion' => ['required'],
                'id_number' => ['required', 'numeric'],
                'tax_number' => ['required', 'numeric'],
                'address' => ['required'],
                'province_id' => ['required'],
                'city_id' => ['required'],
                'district_id' => ['required'],
                'postal_code' => ['required', 'numeric'],
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
                'address' => ['required'],
                'province_id' => ['required'],
                'city_id' => ['required'],
                'district_id' => ['required'],
                'postal_code' => ['required', 'numeric'],
                'image_id' => ['required', 'image', 'max:5024'],
                'tax_image' => ['required', 'image', 'max:5024'],
                'selfie_image' => ['required', 'image', 'max:5024'],
            ];
        }
    }

    public function validationEmployment()
    {
        return [
            'job_name' => ['required'],
            'office_name' => ['required'],
            'office_address' => ['required'],
            'length_of_work' => ['required', 'numeric'],
            'total_income' => ['required', 'numeric'],
            'total_expenditure' => ['required', 'numeric'],
            'net_income' => ['required', 'numeric'],
        ];
    }

    public function validationPassword()
    {
        return [
            'current_password' => ['required', 'string', 'min:8', 'max:16'],
            'new_password' => ['required', 'string', 'min:8', 'max:16'],
            'confirm_password' => ['required', 'string', 'min:8', 'max:16', 'same:new_password', 'different:curent_password'],
        ];
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

    public function updatedSelfieImage($selfie_image)
    {
        $this->validate([
            'selfie_image' => 'required|image|max:5024'
        ]);
        $this->temp_selfie_image = $selfie_image->temporaryUrl();
    }

    public function resetForm()
    {
        $this->current_password = null;
        $this->new_password = null;
        $this->confirm_password = null;
        $this->resetErrorBag();
    }

    protected $messages = [
        'current_password.required' => 'Kata sandi lama tidak boleh kosong',
        'current_password.min' => 'Kata sandi lama minimal 8 huruf',
        'current_password.max' => 'Kata sandi lama maksimal 16 huruf',
        'new_password.required' => 'Kata sandi baru tidak boleh kosong',
        'new_password.min' => 'Kata sandi baru minimal 8 huruf',
        'new_password.max' => 'Kata sandi baru maksimal 16 huruf',
        'confirm_password.required' => 'Konfirmasi kata sandi tidak boleh kosong',
        'confirm_password.min' => 'Konfirmasi kata sandi minimal 8 huruf',
        'confirm_password.max' => 'Konfirmasi kata sandi maksimal 16 huruf',
        'confirm_password.same' => 'Konfirmasi kata sandi tidak sama dengan kata sandi baru',
    ];
}
