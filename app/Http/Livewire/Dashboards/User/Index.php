<?php

namespace App\Http\Livewire\Dashboards\User;

use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Index extends Component
{
    public $user_id, $action;

    protected $listeners = [
        'select_modal',
        'reload',
        'edit_user',
        'delete_user'
    ];

    public function render()
    {
        return view('livewire.dashboards.user.index')
        ->layout('layouts.dashboards._master', [
            'title' => 'PinCazh | Pengguna'
        ]);
    }

    public function select_modal($user_id, $action)
    {
        $this->user_id = $user_id;
        if ($action == 'delete'){
            $this->dispatchBrowserEvent('openDeleteModal');
        }

    }

    public function edit_user($user_id)
    {
        $this->user_id = $user_id;
        return redirect()->route('user.edit', $user_id);  
    }

    public function delete_user()
    {
        $user = User::with('personal', 'employment', 'collateral', 'history')->findOrFail($this->user_id);
        if ($user->personal != null) {
            Storage::delete('media/user/'.$user->id.'/'.$user->personal->image_of_tax_registration);
            Storage::delete('media/user/'.$user->id.'/'.$user->personal->image_id);
            Storage::delete('media/user/'.$user->id.'/'.$user->personal->selfie_image);
        }
        if ($user->collateral != null){
            Storage::delete('media/user/'.$user->id.'/'.$user->collateral->pluck('image'));
        }
        $user->personal->delete();
        $user->employment->delete();
        $user->collateral->delete();
        $user->history->delete();
        $user->delete();
        session()->flash('success', 'User berhasil terhapus !');
        return redirect()->route('user');
    }
}
