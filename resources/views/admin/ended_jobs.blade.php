@extends('admin.layout.master')
@section('content')
    <x-table>
        <x-slot name='tableName'>الوظائف المنتهية</x-slot>
        <x-slot name='button'>
            <button type="button" class="btn text-white p-2 my-3 w-25" style="background-color:rgb(5 44 101) !important;">
                عدد الوظائف المنتهية : {{ $count_ended_jobs }}
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
            <th>تعيين كمكتملة</th>
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
                    <td>
                        <a class="btn text-info" data-bs-toggle="modal"
                            data-bs-target="#changeStatusModal{{$job->id}}">
                            <button type="button" class="btn text-white p-2 my-3 " style="background-color:rgb(5 44 101) !important;">
                                تعيين كمكتملة
                            </button>
                        </a>
                        <x-modal id='changeStatusModal{{$job->id}}'>
                            <x-slot name='title'> تعيين الوظيفة كمكتملة</x-slot>
                            <x-slot name='message'>هل انت متاكد انك تريد نقل الوظيفة الى الوظائف المكتملة</x-slot>
                            <x-slot name='link'>{{ route('status_job', $job->id) }}</x-slot>
                            <x-slot name='action'>
                                <button type="button" class="btn btn-primary" style="background-color: rgb(5 44 101) !important;">
                                    نقل الوظيفة
                                </button>
                            </x-slot>
                        </x-modal>
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-table>
@endsection
