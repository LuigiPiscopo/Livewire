<div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form class=" shadow p-5" wire:submit="update">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" wire:model.live="title">
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sutitle" class="form-label">Sottotitolo</label>
            <input type="text" class="form-control" id="sutitle" wire:model.blur="subtitle">
            @error('subtitle')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo del articolo</label>
            <textarea wire:model.live.debounce.2000ms="body" id="body" class="form-control"></textarea>
            @error('body')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Inserisci modifica</button>
        <a wire:click="destroy" class="btn btn-danger">Elimina</a>
    </form>
</div>
