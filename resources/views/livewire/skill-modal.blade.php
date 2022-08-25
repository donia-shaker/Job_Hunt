<!-- Add skill Modal -->
<x-livewire_modal>
    <x-slot name='modal_id'>add_skill</x-slot>
    <x-slot name='title'>Add Skill</x-slot>
    <x-slot name='action'>save</x-slot>
    <x-slot name='modal_body'>
        <div class="m-4">
            <label class="mb-4">Skill Name</label>
            <input type="text" wire:model="name" class="form-control">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </x-slot>
    <x-slot name='button'>
        <button type="submit" class="btn btn-primary">Save</button>
    </x-slot>
</x-livewire_modal>

<!-- Delete skill Modal -->
<x-livewire_modal>
    <x-slot name='modal_id'>delete_skill</x-slot>
    <x-slot name='title'>Delete Skill</x-slot>
    <x-slot name='action'>destroySkill</x-slot>
    <x-slot name='modal_body'>
        <h5 class="p-4">Are you sure you want to delete this data ?</h5>
    </x-slot>
    <x-slot name='button'>        
        <button type="submit" class="btn btn-danger">Yes! Delete</button>
    </x-slot>
</x-livewire_modal>

<!-- Update skill Modal -->
<x-livewire_modal>
    <x-slot name='modal_id'>update_skill</x-slot>
    <x-slot name='title'>Update Skill</x-slot>
    <x-slot name='action'>update</x-slot>
    <x-slot name='modal_body'>
        <div class="m-4">
            <label class="mb-3">Skill Name</label>
            <input type="text" wire:model="name" class="form-control">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
    </x-slot>
    <x-slot name='button'>        
        <button type="submit" class="btn btn-primary">Update</button>
    </x-slot>
</x-livewire_modal>