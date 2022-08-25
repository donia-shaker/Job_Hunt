<!-- Add course Modal -->
<x-livewire_modal>
    <x-slot name='modal_id'>add_course</x-slot>
    <x-slot name='title'>Add Course</x-slot>
    <x-slot name='action'>save</x-slot>
    <x-slot name='modal_body'>
        <div class="m-4">
            <label class="mb-4">Course Name</label>
            <input type="text" wire:model="name" class="form-control">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="m-4">
            <label class="mb-4">Place</label>
            <input type="text" wire:model="place" class="form-control">
            @error('place')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="m-4">
            <label class="mb-4">Start Date</label>
            <input type="date" wire:model="start" class="form-control">
            @error('start')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="m-4">
            <label class="mb-4">End Date</label>
            <input type="date" wire:model="end" class="form-control">
            @error('end')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </x-slot>
    <x-slot name='button'>
        <button type="submit" class="btn btn-primary">Save</button>
    </x-slot>
</x-livewire_modal>

<!-- Delete course Modal -->
<x-livewire_modal>
    <x-slot name='modal_id'>delete_course</x-slot>
    <x-slot name='title'>Delete Course</x-slot>
    <x-slot name='action'>destroyCourse</x-slot>
    <x-slot name='modal_body'>
        <h5 class="p-4">Are you sure you want to delete this data ?</h5>
    </x-slot>
    <x-slot name='button'>        
        <button type="submit" class="btn btn-danger">Yes! Delete</button>
    </x-slot>
</x-livewire_modal>

<!-- Update course Modal -->
<x-livewire_modal>
    <x-slot name='modal_id'>update_course</x-slot>
    <x-slot name='title'>Update Course</x-slot>
    <x-slot name='action'>update</x-slot>
    <x-slot name='modal_body'>
        <div class="m-4">
            <label class="mb-4">Course Name</label>
            <input type="text" wire:model="name" class="form-control">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="m-4">
            <label class="mb-4">Place</label>
            <input type="text" wire:model="place" class="form-control">
            @error('place')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="m-4">
            <label class="mb-4">Start Date</label>
            <input type="text" wire:model="start" class="form-control">
            @error('start')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="m-4">
            <label class="mb-4">End Date</label>
            <input type="text" wire:model="end" class="form-control">
            @error('end')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </x-slot>
    <x-slot name='button'>        
        <button type="submit" class="btn btn-primary">Update</button>
    </x-slot>
</x-livewire_modal>