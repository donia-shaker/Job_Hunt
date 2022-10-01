@extends('admin.layout.master')
@section('content')
    <!-- Start Show Companies Content -->
    <x-table>
        <x-slot name='tableName'>{{ $job->name }}</x-slot>
        <x-slot name='button'>
            <button  class="btn text-white p-2 my-3 w-25" style="background-color:rgb(5 44 101) !important;cursor: default;">
                عدد المتقدمين : {{ $count }}
            </button>
        </x-slot>
        <x-slot name='tableHead'>
            <th> الاسم </th>
            <th> CV </th>
        </x-slot>
        <x-slot name='tableBody'>
            @foreach ($information as $info)
                <tr>
                    <td>{{ $info->user->name }}</td>
                    <td><a href="{{ route('cv', $info->user_id) }}" class="text-info">عرض بيانات اضافيه عن المتقدم</a></td>
                </tr>
            @endforeach
        </x-slot>
    </x-table>
    <!-- End Show Companies Content -->
@endsection
