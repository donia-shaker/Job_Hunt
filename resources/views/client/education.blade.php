@extends('client.layout.master')
@section('content')
    <!-- start content -->
    <x-client_table data-bs-target="#add_education">
        <x-slot name='header'>Education</x-slot>
        <x-slot name='target'>add_education</x-slot>
        <x-slot name='add'>Add Education</x-slot>
        <x-slot name='thead'>
            <th scope="col">#</th>
            <th scope="col">Education Name</th>
            <th scope="col">Place</th>
            <th scope="col">Start</th>
            <th scope="col">End</th>
            <th scope="col">Updata</th>
            <th scope="col">Delete</th>
        </x-slot>
        <x-slot name='tbody'>
        </x-slot>
    </x-client_table>

    <!-- Add Modal -->
    <x-client_modal  id="add_education" >
        <x-slot name='title'>Add Education</x-slot>
        <x-slot name='body'>
            <div class="m-4">
                <form id="add_form">
                    <input type="hidden"  id="user_id" value="{{ Auth::user()->id }}">
                    <div class="mb-3">
                        <label class="form-label" for="add_name">Education</label>
                        <input type="text" class="form-control" id="add_name" placeholder="Education"/>
                        <span data-error="name" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="place">Place</label>
                        <input type="text" class="form-control"  id="add_place" placeholder="Place"  />
                        <span data-error="place" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="add_start_date">Start</label>
                        <input type="date" class="form-control" id="add_start_date" placeholder="Start"/>
                        <span data-error="startDate" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="add_end_date">End</label>
                        <input type="date" class="form-control" id="add_end_date" placeholder="End"/>
                        <span data-error="endDate" class="text-danger"></span>
                    </div>
                </form>
            </div>
        </x-slot>
        <x-slot name='submit'>
            <button type="button" class="btn btn-primary"  id="add">Save</button>
        </x-slot>
    </x-client_modal>

    <!-- Update Cources model-->
    <x-client_modal  id="update_education">
        <x-slot name='title'>Update Education</x-slot>
        <x-slot name='body'>
            <div class="m-4">
                <form id="update_form">
                    <input type="hidden"  id="update_user_id" value="{{ Auth::user()->id }}">
                    <input type="hidden" id="update_education_id">
                    <div class="mb-3">
                        <label class="form-label" for="update_name">Education</label>
                        <input type="text" class="form-control" id="update_name" placeholder="Education"/>
                        <span data-error="name" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="update_place">Place</label>
                        <input type="text" class="form-control" id="update_place" placeholder="Place"  />
                        <span data-error="place" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="update_start_date">Start</label>
                        <input type="date" class="form-control" id="update_start_date" placeholder="Start"/>
                        <span data-error="startDate" class="text-danger"></span>
                    </div>
                    <div class="mb-3">
                        <label class="form-label" for="update_end_date">End</label>
                        <input type="date" class="form-control" id="update_end_date" placeholder="End"/>
                        <span data-error="endDate" class="text-danger"></span>
                    </div>
                </form>
            </div>
        </x-slot>
        <x-slot name='submit'>
            <button type="button" class="btn btn-primary" id="update">Update</button>
        </x-slot>
    </x-client_modal>
    <!-- End Update Cources model-->

    <!-- Delete Cources model-->
    <x-client_modal  id="delete_education">
        <x-slot name='title'>Delete Education</x-slot>
        <x-slot name='body'>
            <div class="m-4">
                <h3>Are You Sure You Want Delete</h3>
            </div>
        </x-slot>
        <x-slot name='submit'>
            <button type="button" class="btn btn-danger" id="delete">Delete</button>
        </x-slot>
    </x-client_modal>
    <!-- End Update Cources model-->
@endsection
@section('javaScript')
<script src="{{asset('js/api/education.js')}}"></script>
@endsection
