<div class="w-75">
    <!-- start content -->
    <x-client_table data-bs-target="#add_course">
        <x-slot name='header'>Courses</x-slot>
        <x-slot name='target'>add_course</x-slot>
        <x-slot name='add'>Add Course</x-slot>
        <x-slot name='thead'>
            <th scope="col">#</th>
            <th scope="col">Course Name</th>
            <th scope="col">Place</th>
            <th scope="col">Start Date</th>
            <th scope="col">End Date</th>
            <th scope="col">Updata</th>
            <th scope="col">Delete</th>
        </x-slot>
        <x-slot name='tbody'>
            <?php $i = 1; ?>
            @foreach ($courses as $course)
                <tr class="p-5 my-3">
                    <th scope="row">{{$i++}}</th>
                    <th>{{ $course->name }}</th>
                    <th>{{ $course->place }}</th>
                    <th>{{ $course->start }}</th>
                    <th>{{ $course->end }}</th>
                    <td>
                        <div>
                        <a data-bs-toggle="modal" class="edit" data-bs-target="#update_course" wire:click="edit({{$course->id}})">
                            <i class="fas fa-pen"></i></a>
                        </div>
                    </td>
                    <td>
                    <div><a class="text-danger" data-bs-toggle="modal" data-bs-target="#delete_course" wire:click="delete({{$course->id}})">
                        <i class="fas fa-trash-alt"></i></a></div>
                        
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-client_table>

    <div class="d-flex justify-content-center">
        {{ $courses->links() }}
    </div>
    
    @include('livewire.course-modal')
</div>
