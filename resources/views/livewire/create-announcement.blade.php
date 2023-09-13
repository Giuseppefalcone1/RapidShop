<form class="container w-50 my-5" wire:submit.prevent="store">
    <div class="mb-3">
        <label class="form-label">Nome prodotto</label>
        <input wire:model="name" type="text" class="form-control">
        <div class="text-danger">@error('name') {{ $message }} @enderror</div>
    </div>
    <div class="mb-3">
        <label class="form-label">Descrizione</label>
        <textarea wire:model="description" class="form-control" name="description" cols="30" rows="5"></textarea>
        <div class="text-danger">@error('description') {{ $message }} @enderror</div>
    </div>
    <div class="mb-3">
        <label class="form-label">Categoria</label>
        <select wire:model="category_id" class="form-select">
            <option value="">-- seleziona una categoria --</option>
            @foreach($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        <div class="text-danger">@error('category_id') {{ $message }} @enderror</div>

    </div>
    <div class="mb-3">
        <label class="form-label">Prezzo</label>
        <input wire:model="price" type="number" class="form-control">
        <div class="text-danger">@error('price') {{ $message }} @enderror</div>
    </div>
    <button type="submit" class="btn btn-primary">Aggiungi</button>
</form>