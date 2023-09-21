<?php
 
namespace App\Livewire;
use Livewire\Attributes\Modelable;
use Livewire\Component;


 
class TodoInput extends Component
{
    #[Modelable] //ebeveyn tarafından belirtilen livewire:model özelliğinin hangi değere bağlanacağını belirtir.
    public $value='';
 
    public function render()
    {
        return view('livewire.todo-input');
    }
}