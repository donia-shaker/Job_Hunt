<div class="w-75">
    <!-- start content -->
    <x-client_table data-bs-target="#add_skill">
        <x-slot name='header'>Skills</x-slot>
        <x-slot name='target'>add_skill</x-slot>
        <x-slot name='add'>Add Skill</x-slot>
        <x-slot name='thead'>
            <th scope="col">#</th>
            <th scope="col">Skill Name</th>
            <th scope="col">Updata</th>
            <th scope="col">Delete</th>
        </x-slot>
        <x-slot name='tbody'>
            <?php $i = 1; ?>
            @foreach ($skills as $skill)
                <tr class="p-5 my-3">
                    <th scope="row">{{$i++}}</th>
                    <th>{{ $skill->name }}</th>
                    <td>
                        <div>
                        <a data-bs-toggle="modal" class="edit" data-bs-target="#update_skill" wire:click="edit({{$skill->id}})">
                            <i class="fas fa-pen"></i></a>
                        </div>
                    </td>
                    <td>
                    <div><a class="text-danger" data-bs-toggle="modal" data-bs-target="#delete_skill" wire:click="delete({{$skill->id}})">
                        <i class="fas fa-trash-alt"></i></a></div>
                        
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-client_table>

    <div class="d-flex justify-content-center">
        {{ $skills->links() }}
    </div>
    
    @include('livewire.skill-modal')
</div>
