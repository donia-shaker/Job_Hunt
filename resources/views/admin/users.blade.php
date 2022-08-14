@extends('admin.layout.master')
@section('content')
    <x-table>
        <x-slot name='tableName'>المستخدمين</x-slot>
        <x-slot name='button'>
                <button type="button" class="btn text-white p-2 my-3 w-25" style="background-color:rgb(5 44 101) !important;">
                    عدد  المستخدمين : {{ $count }}
                </button>
        </x-slot>
        <x-slot name='tableHead'>
            <th> الاسم </th>
            <th>الايميل</th>
            <th>معلومات اخرى</th>
            <th>الحالة</th>
            <th>العمليات</th>
        </x-slot>
        <x-slot name='tableBody'>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td><a href="" class="text-info">انقر لعرض المزيد</a></td>
                    <td>
                        @if ($user->is_active)
                            <span class="badge bg-label-info me-1">مفعل</span>
                        @else
                            <span class="badge bg-label-danger me-1">موقف</span>
                        @endif
                    </td>
                    <td>
                        @if ($user->is_active)
                            <a class="btn btn-icon text-info btn-outline-info mx-1 " data-bs-toggle="modal"
                                data-bs-target="#activeModal{{$user->id}}">
                                <i class="bx bx-show"></i>
                            </a>
                        @else
                            <a class="btn btn-icon btn-outline-secondary mx-1 " data-bs-toggle="modal"
                                data-bs-target="#activeModal{{$user->id}}">
                                <i class="bx bx-hide "></i>
                            </a>
                        @endif
                        <x-modal id='activeModal{{$user->id}}'>
                            <x-slot name='title'>حالة المستخدم</x-slot>
                            <x-slot name='message'>هل انت متاكد انك تريد تغيير حالة المستخدم</x-slot>
                            <x-slot name='link'>{{ route('active_user', $user->id) }}</x-slot>
                            <x-slot name='action'>تغيير حالة المستخدم</x-slot>
                        </x-modal>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-table>
@endsection
