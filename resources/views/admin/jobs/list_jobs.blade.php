@extends('admin.layout.master')
@section('content')
    <!-- Content wrapper -->
    <div class="content-wrapper">

        <!-- Content -->

        <div class="container-xxl flex-grow-1 container-p-y">


            <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>




            <!-- Multi Column with Form Separator -->
            <!-- Bordered Table -->
            <div class="card">
                <h5 class="card-header">Bordered Table</h5>
                <div class="card-body">
                    <div class="table-responsive text-nowrap">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th> الاسم </th>
                                    <th>الصورة</th>
                                    {{-- <th>الوصف</th> --}}
                                    <th>تاريخ النشر</th>
                                    <th>النهايه</th>
                                    <th>الحالة</th>
                                    <th>العمليات</th>
                                </tr>
                            </thead>
                            <tbody>


                                @foreach ($jobs as $job)
                                    <tr>

                                        <td>{{ $job->name }}</td>
                                        <td>
                                            <img class="img-fluid rounded" height="150px" width="150px"
                                                src="{{ URL::asset('images/' . $job->image) }}">
                                        </td>
                                        <td>{{ $job->start }}</td>
                                        <td>{{ $job->end }}</td>
                                        <td>
                                            @if ($job->is_active == 1)
                                                <span class="badge bg-label-success me-1">مفعل</span>
                                            @else
                                                <span class="badge bg-label-danger me-1">موقف</span>
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('edit_Job', $job->id) }}"
                                                class="btn btn-icon btn-outline-dribbble">
                                                <i class="tf-icons bx bx-edit-alt me-1"></i>
                                            </a>
                                            <button type="button" class="btn btn-icon btn-outline-dribbble">
                                                <a href="{{ route('delete_Job', $job->id) }}"
                                                    class="btn btn-icon btn-outline-dribbble">
                                                    <!-- <i class="tf-icons bx bx-trash me-1"></i> -->
                                                    @if ($job->is_active == 1)
                                                        disable
                                                    @else
                                                        enable
                                                    @endif
                                                </a>
                                            </button>


                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/ Bordered Table -->
        </div>
        <!-- / Content -->
    @endsection
