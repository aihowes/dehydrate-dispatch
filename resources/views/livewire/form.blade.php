<div>
    <form wire:submit="submit">
        {{ $test }}
        <input type="text" wire:model="test">
        <button type="submit">Submit</button>
    </form>
</div>
