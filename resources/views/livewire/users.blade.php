<div>

    <h3>Kullanıcı Detayları:</h3>
    <livewire:user-list :user="$user" />

    <h3>Yapılacak Görevler</h3>
    @foreach($todo as $todos)
    <ul>
        <li>
            <livewire:todo-list :$todos :key="$todos->id" :content="$todos->content" />
        </li>
    </ul>

    @endforeach
    <p>Görev Ekle: </p>

    <livewire:todo-input wire:model="todoist" />
    <br><button wire:click="add">Add Todo</button>

</div>