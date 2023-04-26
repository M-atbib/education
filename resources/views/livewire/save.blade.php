<div>
    <input type="text" wire:model="formation_id" name="formation_id" hidden readonly>
    @if ($save)
    <a wire:click="save"><i class="fa-regular fa-heart" style="font-weight: bold;"></i></a>
    @else
    <a wire:click="save"><i class="fa-regular fa-heart"></i></a>
    @endif
    
</div>
