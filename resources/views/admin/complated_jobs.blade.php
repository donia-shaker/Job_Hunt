@extends('admin.layout.master')
@section('content')
    <x-table>
        <x-slot name='tableName'>الوظائف المكتملة</x-slot>
        <x-slot name='button'>
            <button type="button" class="btn text-white p-2 my-3 w-25" style="background-color:rgb(5 44 101) !important;">
                عدد الوظائف المكتملة : {{ $count_complated_jobs }}
            </button>
        </x-slot>
        <x-slot name='tableHead'>
            <th> الاسم </th>
            <th> اسم الشركة</th>
            <th> المدينة</th>
            <th>تاريخ النشر</th>
            <th> الموعد النهائي</th>
            <th>معلومات اخرى</th>
            <th> تفاصيل المتقدمين</th>
        </x-slot>
        <x-slot name='tableBody'>
            @foreach ($jobs as $job)
                <tr>
                    <td>{{ $job->name }}</td>
                    <td>{{ $job->company->name }}</td>
                    <td>{{ $job->city->name }}</td>
                    <td>{{ $job->start_date }}</td>
                    <td>{{ $job->end_date }}</td>
                    <td><a href="{{route('job_details',$job->id)}}" class="text-info"> معلومات اخرى</a></td>
                    <td><a href="{{ route('show_clients', $job->id) }}" class="text-info"> انقر لعرض تفاصيل المتقدمين</a></td>
                </tr>
            @endforeach
        </x-slot>
    </x-table>
@endsection
