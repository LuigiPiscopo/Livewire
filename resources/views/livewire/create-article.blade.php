<div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form class=" shadow p-5" wire:submit="store">
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" wire:model.live="title">
        </div>
        <div class="mb-3">
            <label for="sutitle" class="form-label">Sottotitolo</label>
            <input type="text" class="form-control" id="sutitle" wire:model="subtitle">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Corpo del articolo</label>
            <textarea wire:model="body" id="body" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Inserisci</button>
    </form>
</div>
