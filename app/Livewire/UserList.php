<?php

namespace App\Livewire;

use App\Models\todos;
use Livewire\Component;

class UserList extends Component
{
       
    public $user;
    public function render()
    {
        return view('livewire.user-list');
    }
}
