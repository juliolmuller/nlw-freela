<div class="container">
    <input autofocus type="search" wire:model.live="search" />

    <ul>
        @foreach ($users as $user)
            <li>{{$user->name}}</li>
        @endforeach
    </ul>
</div class="container">
