@extends('admin.layout.master')
@section('content')

    @if ($do == 'Manage')
        <!-- Start Show Companies Content -->
        <x-table>
            <x-slot name='tableName'>المدن</x-slot>
            <x-slot name='button'>
                <a href="cities?do=Add">
                    <button type="button" class="btn text-white p-2 my-3 w-25"
                        style="background-color:rgb(5 44 101) !important;">
                        اضافه مدينة
                    </button>
                </a>
            </x-slot>
            <x-slot name='tableHead'>
                <th> الاسم </th>
                <th>الحالة</th>
                <th>العمليات</th>
            </x-slot>
            <x-slot name='tableBody'>
                @foreach ($cities as $city)
                    <tr>
                        <td>{{ $city->name }}</td>
                        <td>
                            @if ($city->is_active)
                                <span class="badge bg-label-info me-1">مفعل</span>
                            @else
                                <span class="badge bg-label-danger me-1">موقف</span>
                            @endif
                        </td>
                        <td>
                            @if ($city->is_active)
                                <a class="btn btn-icon text-info btn-outline-info mx-1 " data-bs-toggle="modal" data-bs-target="#activeModal{{$city->id}}">
                                    <i class="bx bx-show"></i>
                                </a>
                            @else
                                <a class="btn btn-icon btn-outline-secondary mx-1 " data-bs-toggle="modal" data-bs-target="#activeModal{{$city->id}}">
                                    <i class="bx bx-hide "></i>
                                </a>
                            @endif
                            <x-modal id='activeModal{{$city->id}}'>
                                <x-slot name='title'>حالة المدينة</x-slot>
                                <x-slot name='message'>هل انت متاكد انك تريد تغيير حالة المدينة</x-slot>
                                <x-slot name='link'>{{route('active_city',$city->id)}}</x-slot>
                                <x-slot name='action'>تغيير حالة المدينة</x-slot>
                                <x-slot name='action'>
                                    <button type="button" class="btn btn-danger"> تغيير حالة المدينة</button>
                                </x-slot>
                            </x-modal>
                            <a href="cities?do=Edit&Id={{ $city->id }}"
                                class="btn btn-icon btn-outline-success mx-1">
                                <i class="tf-icons bx bx-edit-alt me-1"></i>
                            </a>
                                <a class="btn btn-icon btn-outline-dribbble text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$city->id}}">
                                    <i class="tf-icons bx bx-trash me-1"></i>
                                </a>
                            <x-modal id='deleteModal{{$city->id}}'>
                                <x-slot name='title'>حذف المدينة</x-slot>
                                <x-slot name='message'>هل انت متاكد انك تريد حذف بيانات المدينة</x-slot>
                                <x-slot name='link'>{{route('delete_city',$city->id)}}</x-slot>
                                <x-slot name='action'>
                                    <button type="button" class="btn btn-danger"> حذف المدينة</button>
                                </x-slot>
                            </x-modal>
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-table>
        <!-- End Show Companies Content -->
    @elseif ($do == 'Add')
        {{-- Start Add city --}}
        <x-form action="{{ route('add_city') }}">
            <x-slot name='title'> اضافه مدينة جديدة</x-slot>
            <x-slot name='formInput'>
                <div class="col-md-6 my-4">
                    <label class="form-label fs-6" for="multicol-username"> اسم المدينة (AR)</label>
                    <input name="nameAR" value="{{ old('nameAR') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('nameAR')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-md-6 my-4">
                    <label class="form-label fs-6" for="multicol-username"> اسم المدينة (EN)</label>
                    <input name="nameEN" value="{{ old('nameER') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('nameEN')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>
            </x-slot>
            <x-slot name='action'>اضافة</x-slot>
        </x-form>
        {{-- End Add city --}}
    @elseif ($do == 'Edit')
        {{-- Start Edit city --}}
        <x-form action="{{ route('update_city',$city->id) }}">
            <x-slot name='title'> تعديل معلومات المدينة</x-slot>
            <x-slot name='formInput'>
                <div class="col-md-6 my-2">
                    <label class="form-label fs-6" for="multicol-username"> اسم المدينة (AR)</label>
                    <input name="nameAR" value="{{$city->getTranslation('name', 'ar')}}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('nameAR')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-md-6 my-2">
                    <label class="form-label fs-6" for="multicol-username"> اسم المدينة (EN)</label>
                    <input name="nameEN" value="{{ $city->getTranslation('name', 'en') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('nameEN')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>
            </x-slot>
            <x-slot name='action'>تعديل</x-slot>
        </x-form>
        {{-- End Edit city --}}
    @endif
@endsection
