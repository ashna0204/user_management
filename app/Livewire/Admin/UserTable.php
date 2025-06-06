<?php

namespace App\Livewire\Admin;
use App\Models\User;

use Livewire\Component;

class UserTable extends Component
{
    public $users;

    public function mount()
    {
        $this->users = User::where('role', '!=', 'admin')->get();
    }

    public function delete($id)
    {
        User::find($id)->delete();
        $this->users = User::all(); 
    }

    public function render()
    {
        return view('livewire.admin.user-table');
    }
}
