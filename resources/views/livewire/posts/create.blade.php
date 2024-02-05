<div>
    <x-flash-message/>
    <form wire:submit="save">
        <div class="mb-2">
            <label for="title" class="form-label">Title</label>
            <div class="input-group">
                <input wire:model="form.title" type="text" name="title" id="title" class="form-control">
            </div>
            @error('form.title')
                <small class="text-danger d-block mt-1">{{ $message }}</small>
            @enderror
        </div>
        <div class="mb-4">
            <label for="body" class="form-label">Body</label>
            <textarea wire:model="form.body" class="form-control" id="body"></textarea>
            @error('form.body')
                <small class="text-danger d-block mt-1">{{ $message }}</small>
            @enderror
        </div>
        <div class="flex justify-content-end">
            <button class="btn btn-primary">Save</button>
        </div>
    </form>

</div>
