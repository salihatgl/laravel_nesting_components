<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\todos;

class TodoList extends Component
{
    public $todo;
    public function render()
    {
        $this->todo = todos::all();
        return view('livewire.todo-list');
    }
}
