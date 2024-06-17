<div>

    <input type="text" wire:model="todo"> 
    <!-- wire::model todo es como se llama la variable en el modelo (prop) -->

    <button type="button" wire:click="add">Add</button>

    <ul>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach

    </ul>
</div>
