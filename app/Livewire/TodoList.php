<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\todos;

class TodoList extends Component
{


    public $content;
    
    public function render()
    {
        
        return view('livewire.todo-list');
    }
}
