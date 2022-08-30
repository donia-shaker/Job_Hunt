@extends('admin.layout.master')
@section('content')

    @if ($do == 'Manage')
        <!-- Start Show Companies Content -->
        <x-table>
            <x-slot name='tableName'>شركائنا</x-slot>
            <x-slot name='button'>
                <a href="companies?do=Add">
                    <button type="button" class="btn text-white p-2 my-3 w-25"
                        style="background-color:rgb(5 44 101) !important;">
                        اضافه شركة
                    </button>
                </a>
            </x-slot>
            <x-slot name='tableHead'>
                <th> الاسم </th>
                <th>الصورة</th>
                <th>رقم الهاتف</th>
                <th>العنوان</th>
                <th>معلومات اخرى</th>
                <th>الحالة</th>
                <th>العمليات</th>
            </x-slot>
            <x-slot name='tableBody'>
                @foreach ($Companies as $company)
                    <tr>
                        <td>{{ $company->name }}</td>
                        <td>
                            <img class="img-fluid rounded" height="150px" width="150px"
                                src="{{ asset("images/$company->image") }}">
                        </td>
                        <td>{{ $company->phone }}</td>
                        <td>{{ $company->address }}</td>
                        <td>{{ $company->information }}</td>
                        <td>
                            @if ($company->is_active)
                                <span class="badge bg-label-info me-1">مفعل</span>
                            @else
                                <span class="badge bg-label-danger me-1">موقف</span>
                            @endif
                        </td>
                        <td>
                            @if ($company->is_active)
                                <a class="btn btn-icon text-info btn-outline-info mx-1 " data-bs-toggle="modal" data-bs-target="#activeModal{{$company->id}}">
                                    <i class="bx bx-show"></i>
                                </a>
                            @else
                                <a class="btn btn-icon btn-outline-secondary mx-1 " data-bs-toggle="modal" data-bs-target="#activeModal{{$company->id}}">
                                    <i class="bx bx-hide "></i>
                                </a>
                            @endif
                            <x-modal id='activeModal{{$company->id}}'>
                                <x-slot name='title'>حالة الشركة</x-slot>
                                <x-slot name='message'>هل انت متاكد انك تريد تغيير حالة الشركة</x-slot>
                                <x-slot name='link'>{{route('active_company',$company->id)}}</x-slot>
                                <x-slot name='action'>تغيير حالة الشركة</x-slot>
                            </x-modal>
                            <a href="companies?do=Edit&Id={{ $company->id }}"
                                class="btn btn-icon btn-outline-success mx-1">
                                <i class="tf-icons bx bx-edit-alt me-1"></i>
                            </a>
                                <a class="btn btn-icon btn-outline-dribbble text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$company->id}}">
                                    <i class="tf-icons bx bx-trash me-1"></i>
                                </a>
                            <x-modal id='deleteModal{{$company->id}}'>
                                <x-slot name='title'>حذف الشركة</x-slot>
                                <x-slot name='message'>هل انت متاكد انك تريد حذف بيانات الشركة</x-slot>
                                <x-slot name='link'>{{route('delete_company',$company->id)}}</x-slot>
                                <x-slot name='action'> حذف الشركة</x-slot>
                            </x-modal>
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-table>
        <!-- End Show Companies Content -->
    @elseif ($do == 'Add')
        {{-- Start Add Company --}}
        <x-form action="{{ route('add_company') }}">
            <x-slot name='title'> اضافه شركة جديدة</x-slot>
            <x-slot name='formInput'>
                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="multicol-username"> اسم الشركة (AR)</label>
                    <input name="nameAR" value="{{ old('nameAR') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('nameAR')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="multicol-username"> اسم الشركة (EN)</label>
                    <input name="nameEN" value="{{ old('nameER') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('nameEN')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="multicol-username"> العنوان (AR)</label>
                    <input name="addressAR" value="{{ old('addressAR') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('addressAR')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="multicol-username"> العنوان (EN)</label>
                    <input name="addressEN" value="{{ old('addressEN') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('addressEN')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="multicol-username"> رقم الهاتف</label>
                    <input name="phone" type="text"value="{{ old('phone') }}" id="multicol-username"
                        class="form-control" />
                    @error('phone')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-3">
                    <label class="form-label fs-6" for="multicol-email">صورة </label>
                    <div class="input-group input-group-merge">
                        <input name="image" value="{{ old('image') }}" type="file" class="form-control"
                            oninput="previewImage.src=window.URL.createObjectURL(this.files[0])"
                            aria-describedby="multicol-email2" />
                    </div>
                    @error('image')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                    <img id="previewImage" style="max-height: 100px;">
                </div>
            </x-slot>
            <x-slot name='action'>اضافة</x-slot>
        </x-form>
        {{-- End Add Company --}}
    @elseif ($do == 'Edit')
        {{-- Start Edit Company --}}
        <x-form action="{{ route('update_company',$company->id) }}">
            <x-slot name='title'> تعديل معلومات الشركة</x-slot>
            <x-slot name='formInput'>
                <div class="col-md-6 my-2">
                    <label class="form-label fs-6" for="multicol-username"> اسم الشركة (AR)</label>
                    <input name="nameAR" value="{{$company->getTranslation('name', 'ar')}}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('nameAR')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-md-6 my-2">
                    <label class="form-label fs-6" for="multicol-username"> اسم الشركة (EN)</label>
                    <input name="nameEN" value="{{ $company->getTranslation('name', 'en') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('nameEN')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-2">
                    <label class="form-label fs-6" for="multicol-username"> العنوان (AR)</label>
                    <input name="addressAR" value="{{ $company->getTranslation('address', 'ar') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('addressAR')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-2">
                    <label class="form-label fs-6" for="multicol-username"> العنوان (EN)</label>
                    <input name="addressEN" value="{{$company->getTranslation('address', 'en') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('addressEN')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-2">
                    <label class="form-label fs-6" for="multicol-username"> رقم الهاتف</label>
                    <input name="phone" type="text"value="{{ $company->phone }}" id="multicol-username"
                        class="form-control" />
                    @error('phone')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-2">
                    <label class="form-label fs-6" for="multicol-email">صورة </label>
                    <div class="input-group input-group-merge">
                        <input name="image" value="{{ $company->image}}" type="file" class="form-control"
                            oninput="previewImage.src=window.URL.createObjectURL(this.files[0])"
                            aria-describedby="multicol-email2" />
                    </div>
                    @error('image')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                    <img id="previewImage" style="max-height: 100px;">
                </div>
            </x-slot>
            <x-slot name='action'>تعديل</x-slot>
        </x-form>
        {{-- End Edit Company --}}
    @endif
@endsection
