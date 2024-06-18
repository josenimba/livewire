<div>
    <form wire:submit="add">

        <!-- con el wire:model.change se actualiza cuando cambias el foco o mueves algo -->
        <input type="text" wire:model.change="todo">

        <!-- con el debounce se actualiza cuando dejas de escribir -->
        <!-- <input type="text" wire:model.live.bounce="todo"> -->

        <!-- wire:model.live actualiza cada vez que escribes algo(fetch) -->
        <!-- <input type="text" wire:model.live="todo"> -->

        <!-- wire::model todo es como se llama la variable en el modelo (prop) -->
        <button type="submit">Add</button>
        <br>
        <span>Current todo: {{ $todo }}</span>

        <!-- Con el boton de abajo no se borra el input-->
        <!-- <button type="button" wire:click="add">Add</button> -->
         
    </form>
    <ul>
        @foreach ($todos as $todo)
        <li>{{ $todo }}</li>
        @endforeach

    </ul>
</div>