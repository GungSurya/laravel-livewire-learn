<div>
    @foreach ($posts as $index => $post)
        <livewire:posts.lists :post="$post" wire:key="{{ $post->id }}" />
    @endforeach
</div>
