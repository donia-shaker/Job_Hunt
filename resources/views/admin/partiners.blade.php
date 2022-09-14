@extends('admin.layout.master')
@section('content')

    @if ($do == 'Manage')
        <!-- Start Show Companies Content -->
        <x-table>
            <x-slot name='tableName'>شركائنا</x-slot>
            <x-slot name='button'>
                <a href="partiners?do=Add">
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
                @foreach ($partiners as $partiner)
                    <tr>
                        <td>{{ $partiner->name }}</td>
                        <td>
                            <img class="img-fluid rounded" height="150px" width="150px"
                                src="{{ asset("images/$partiner->image") }}">
                        </td>
                        <td>{{ $partiner->phone }}</td>
                        <td>{{ $partiner->address }}</td>
                        <td><a href="{{route('partiner')}}" class="text-info">مزيد من المعلومات</a></td>
                        <td>
                            @if ($partiner->is_active)
                                <span class="badge bg-label-info me-1">مفعل</span>
                            @else
                                <span class="badge bg-label-danger me-1">موقف</span>
                            @endif
                        </td>
                        <td>
                            @if ($partiner->is_active)
                                <a class="btn btn-icon text-info btn-outline-info mx-1 " data-bs-toggle="modal" data-bs-target="#activeModal{{$partiner->id}}">
                                    <i class="bx bx-show"></i>
                                </a>
                            @else
                                <a class="btn btn-icon btn-outline-secondary mx-1 " data-bs-toggle="modal" data-bs-target="#activeModal{{$partiner->id}}">
                                    <i class="bx bx-hide "></i>
                                </a>
                            @endif
                            <x-modal id='activeModal{{$partiner->id}}'>
                                <x-slot name='title'>حالة الشركة</x-slot>
                                <x-slot name='message'>هل انت متاكد انك تريد تغيير حالة الشركة</x-slot>
                                <x-slot name='link'>{{route('active_partiner',$partiner->id)}}</x-slot>
                                <x-slot name='action'>
                                    <button type="button" class="btn btn-danger"> تغيير حالة الشركة</button>
                                </x-slot>
                            </x-modal>
                            <a href="partiners?do=Edit&Id={{ $partiner->id }}"
                                class="btn btn-icon btn-outline-success mx-1">
                                <i class="tf-icons bx bx-edit-alt me-1"></i>
                            </a>
                                <a class="btn btn-icon btn-outline-dribbble text-danger" data-bs-toggle="modal" data-bs-target="#deleteModal{{$partiner->id}}">
                                    <i class="tf-icons bx bx-trash me-1"></i>
                                </a>
                            <x-modal id='deleteModal{{$partiner->id}}'>
                                <x-slot name='title'>حذف الشركة</x-slot>
                                <x-slot name='message'>هل انت متاكد انك تريد حذف بيانات الشركة</x-slot>
                                <x-slot name='link'>{{route('delete_partiner',$partiner->id)}}</x-slot>
                                <x-slot name='action'>
                                    <button type="button" class="btn btn-danger"> حذف الشركة</button>
                                </x-slot>
                            </x-modal>
                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-table>
        <!-- End Show Partiners Content -->
    @elseif ($do == 'Add')
        {{-- Start Add Partiner --}}
        <x-form action="{{ route('add_partiner') }}">
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

                <div class="col-md-12 my-3">
                    <label class="form-label fs-6" for="multicol-username"> معلومات اضافية (AR)</label>
                    <textarea name="informationEN" id="multicol-username" cols="30" rows="10"
                        class="form-control" >{{ old('informationEN') }}</textarea>
                    @error('informationEN')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-12 my-3">
                    <label class="form-label fs-6" for="multicol-username"> معلومات اضافية (EN)</label>
                    <textarea name="informationEN" id="multicol-username" cols="30" rows="10"
                        class="form-control" >{{ old('informationEN') }}</textarea>
                    @error('informationEN')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

            </x-slot>
            <x-slot name='action'>اضافة</x-slot>
        </x-form>
        {{-- End Add partiner --}}
    @elseif ($do == 'Edit')
        {{-- Start Edit partiner --}}
        <x-form action="{{ route('update_partiner',$partiner->id) }}">
            <x-slot name='title'> تعديل معلومات الشركة</x-slot>
            <x-slot name='formInput'>
                <div class="col-md-6 my-2">
                    <label class="form-label fs-6" for="multicol-username"> اسم الشركة (AR)</label>
                    <input name="nameAR" value="{{$partiner->getTranslation('name', 'ar')}}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('nameAR')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>
                <div class="col-md-6 my-2">
                    <label class="form-label fs-6" for="multicol-username"> اسم الشركة (EN)</label>
                    <input name="nameEN" value="{{ $partiner->getTranslation('name', 'en') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('nameEN')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-2">
                    <label class="form-label fs-6" for="multicol-username"> العنوان (AR)</label>
                    <input name="addressAR" value="{{ $partiner->getTranslation('address', 'ar') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('addressAR')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-2">
                    <label class="form-label fs-6" for="multicol-username"> العنوان (EN)</label>
                    <input name="addressEN" value="{{$partiner->getTranslation('address', 'en') }}" type="text" id="multicol-username"
                        class="form-control" />
                    @error('addressEN')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-2">
                    <label class="form-label fs-6" for="multicol-username"> رقم الهاتف</label>
                    <input name="phone" type="text"value="{{ $partiner->phone }}" id="multicol-username"
                        class="form-control" />
                    @error('phone')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-6 my-2">
                    <label class="form-label fs-6" for="multicol-email">صورة </label>
                    <div class="input-group input-group-merge">
                        <input name="image" value="{{ $partiner->image}}" type="file" class="form-control"
                            oninput="previewImage.src=window.URL.createObjectURL(this.files[0])"
                            aria-describedby="multicol-email2" />
                    </div>
                    @error('image')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                    <img id="previewImage" style="max-height: 100px;">
                </div>
                <div class="col-md-12 my-3">
                    <label class="form-label fs-6" for="multicol-username"> معلومات اضافية (AR)</label>
                    <textarea name="informationAR" id="multicol-username" cols="30" rows="10"
                        class="form-control" >{{$partiner->getTranslation('information', 'ar') }}}</textarea>
                    @error('informationEN')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>

                <div class="col-md-12 my-3">
                    <label class="form-label fs-6" for="multicol-username"> معلومات اضافية (EN)</label>
                    <textarea name="informationEN" id="multicol-username" cols="30" rows="10"
                        class="form-control" >{{$partiner->getTranslation('information', 'en') }}</textarea>
                    @error('informationEN')
                        <span class="text-end text-danger">* {{ $message }} </span>
                    @enderror
                </div>
            </x-slot>
            <x-slot name='action'>تعديل</x-slot>
        </x-form>
        {{-- End Edit partiner --}}
    @endif
@endsection
