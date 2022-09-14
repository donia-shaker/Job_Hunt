@extends('admin.layout.master')
@section('content')

    @if ($do == 'Manage')
        <!-- Start Show jobs Content -->
        <x-table>
            <x-slot name='tableName'>الوظائف الحالية</x-slot>
            <x-slot name='button'>
                <a href="jobs?do=Add">
                    <button type="button" class="btn text-white p-2 my-3 w-25"
                        style="background-color:rgb(5 44 101) !important;">
                        اضافه وظيفة
                    </button>
                </a>
            </x-slot>
            <x-slot name='tableHead'>
                <th> الاسم </th>
                <th>  اسم الشركة</th>
                <th>  المدينة</th>
                <th>تاريخ النشر</th>
                <th> الموعد النهائي</th>
                <th>معلومات اخرى</th>
                <th> تفاصيل المتقدمين</th>
                <th>الحالة</th>
                <th>العمليات</th>
            </x-slot>
            <x-slot name='tableBody'>
                @foreach ($jobs as $job)
                    <tr>
                        <td>{{ $job->name }}</td>
                        <td>{{ $job->company->name }}</td>
                        <td>{{ $job->city->name}}</td>
                        <td>{{ $job->start_date }}</td>
                        <td>{{ $job->end_date }}</td>
                        <td><a href="{{route('job_details',$job->id)}}" class="text-info"> معلومات اخرى</a></td>
                        <td><a href="{{route('show_clients',$job->id)}}" class="text-info">  انقر لعرض تفاصيل المتقدم</a></td>
                        <td>
                            @if ($job->is_active)
                                <span class="badge bg-label-info me-1">مفعل</span>
                            @else
                                <span class="badge bg-label-danger me-1">موقف</span>
                            @endif
                        </td>
                        <td>
                            @if ($job->is_active)
                                <a class="btn btn-icon text-info btn-outline-info mx-1 " data-bs-toggle="modal" data-bs-target="#activeModal{{$job->id}}">
                                    <i class="bx bx-show"></i>
                                </a>
                            @else
                                <a class="btn btn-icon btn-outline-secondary mx-1 " data-bs-toggle="modal" data-bs-target="#activeModal{{$job->id}}">
                                    <i class="bx bx-hide "></i>
                                </a>
                            @endif
                            <x-modal id='activeModal{{$job->id}}'>
                                <x-slot name='title'>حالة الوظيفة</x-slot>
                                <x-slot name='message'>هل انت متاكد انك تريد تغيير حالة الوظيفة</x-slot>
                                <x-slot name='link'>{{route('active_job',$job->id)}}</x-slot>
                                <x-slot name='action'>
                                    <button type="button" class="btn btn-danger"> تغيير حالة الوظيفة</button>
                                </x-slot>
                            </x-modal>
                            <a href="jobs?do=Edit&Id={{ $job->id }}"
                                class="btn btn-icon btn-outline-success mx-1">
                                <i class="tf-icons bx bx-edit-alt me-1"></i>
                            </a>
                                <a class="btn btn-icon btn-outline-dribbble text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$job->id}}">
                                    <i class="tf-icons bx bx-trash me-1"></i>
                                </a>
                            <x-modal id='deleteModal{{$job->id}}'>
                                <x-slot name='title'>حذف الوظيفة</x-slot>
                                <x-slot name='message'>هل انت متاكد انك تريد حذف بيانات الوظيفة</x-slot>
                                <x-slot name='link'>{{route('delete_job',$job->id)}}</x-slot>
                                <x-slot name='action'>
                                    <button type="button" class="btn btn-danger"> حذف الوظيفة</button>
                                </x-slot>
                            </x-modal>
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-table>
        <!-- End Show jobs Content -->
    @elseif ($do == 'Add')
        {{-- Start Add job --}}
        <x-form action="{{ route('add_job') }}">
            <x-slot name='title'> اضافه وظيفة جديدة</x-slot>
            <x-slot name='formInput'>
                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="multicol-username"> اسم الوظيفة (AR)</label>
                    <input name="nameAR" value="{{ old('nameAR') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('nameAR')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="multicol-username"> اسم الوظيفة (EN)</label>
                    <input name="nameEN" value="{{ old('nameEN') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('nameEN')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="selectpickerBasic"> العنوان</label>
                        <select id="selectpickerBasic"  name="city" value='{{ old('city') }}' class="select2 form-select form-select-md" data-allow-clear="true" >
                            @foreach ($cities as $city)
                                <option value='{{$city->id}}'>{{$city->name}}</option>
                            @endforeach
                        </select>
                    @error('city')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="multicol-username">اسم الشركة</label>
                    <select id="selectpickerBasic" name="company" value='{{ old('company') }}' class="select2 form-select form-select-md" data-allow-clear="true" >
                        @foreach ($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                    @error('company')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="multicol-username"> الموعد النهائي </label>
                    <input class="form-control" name='end_date' type="date" value="2021-06-18" id="html5-date-input" />
                    @error('end_date')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-12 my-3">
                    <label for="defaultFormControlInput" class="form-label fs-6">  التفاصيل (AR) </label>
                    <textarea name="detailsAR" id="" cols="30" rows="10">{{ old('detailsAR') }}</textarea>
                    @error('detailsAR')
                        <span class="help-block text-danger">* {{ $message }} </span>
                    @enderror
                </div>
                
                <div class="col-md-12 my-3">
                    <label for="defaultFormControlInput" class="form-label fs-6"> التفاصيل (EN) </label>
                    <textarea name="detailsEN" id="" cols="30" rows="10">{{ old('detailsEN') }}</textarea>
                    @error('detailsEN')
                        <span class="help-block text-danger">* {{ $message }} </span>
                    @enderror
                </div>
            </x-slot>
            <x-slot name='action'>اضافة</x-slot>
        </x-form>
        {{-- End Add job --}}
    @elseif ($do == 'Edit')
        {{-- Start Edit Job --}}
        <x-form action="{{ route('update_job',$job->id) }}">
            <x-slot name='title'> تعديل معلومات الوظيفة</x-slot>
            <x-slot name='formInput'>
                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="multicol-username"> اسم الوظيفة (AR)</label>
                    <input name="nameAR" value="{{ $job->nameAR }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('nameAR')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="multicol-username"> اسم الوظيفة (EN)</label>
                    <input name="nameEN" value="{{ $job->nameER}}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('nameEN')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="selectpickerBasic"> العنوان</label>
                        <select id="selectpickerBasic"  name="city" value='{{ $job->city }}' class="select2 form-select form-select-md" data-allow-clear="true" >
                            @foreach ($cities as $city)
                                <option value='{{$city->id}}'>{{$city->name}}</option>
                            @endforeach
                        </select>
                    @error('city')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="multicol-username">اسم الشركة</label>
                    <select id="selectpickerBasic" name="company" value='{{ $job->company->name }}' class="select2 form-select form-select-md" data-allow-clear="true" >
                        @foreach ($companies as $company)
                            <option value="{{$company->id}}">{{$company->name}}</option>
                        @endforeach
                    </select>
                    @error('company')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="multicol-username"> الموعد النهائي </label>
                    <input class="form-control" name='end_date' type="date" value="2021-06-18" id="html5-date-input" />
                    @error('end_date')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-12 my-3">
                    <label for="defaultFormControlInput" class="form-label fs-6">  التفاصيل (AR) </label>
                    <textarea name="detailsAR" id="" cols="30" rows="10">{{ $job->detailsAR }}</textarea>
                    @error('detailsAR')
                        <span class="help-block text-danger">* {{ $message }} </span>
                    @enderror
                </div>
                
                <div class="col-md-12 my-3">
                    <label for="defaultFormControlInput" class="form-label fs-6"> التفاصيل (EN) </label>
                    <textarea name="detailsEN" id="" cols="30" rows="10">{{ $job->detailsEN }}</textarea>
                    @error('detailsEN')
                        <span class="help-block text-danger">* {{ $message }} </span>
                    @enderror
                </div>
            </x-slot>
            <x-slot name='action'>تعديل</x-slot>
        </x-form>
        {{-- End Edit job --}}
    @endif
@endsection
@section('javascript')
<script src="{{ asset('ckeditor/ckeditor.js') }}" type="text/javascript"></script>
    <script>
        CKEDITOR.replace('detailsAR');
        CKEDITOR.replace('detailsEN');
    </script>
@endsection