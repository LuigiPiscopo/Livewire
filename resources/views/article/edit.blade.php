<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Modifica articolo</h2>
            </div>
        </div>
    </div>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <livewire:edit-article :article="$article" />
            </div>
        </div>
    </div>

</x-layout>
