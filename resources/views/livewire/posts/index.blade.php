<div>
    @foreach ($posts as $post)
        <livewire:posts.lists :post="$post" wire:key="{{ $post->id }}" />
    @endforeach
</div>
