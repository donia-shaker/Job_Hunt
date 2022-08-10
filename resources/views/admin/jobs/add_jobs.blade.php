@extends('admin.layout.master')
@section('content')
      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>




<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <h5 class="card-header">  Add Job</h5>
  <form class="card-body" action="{{route('store_Job')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">Job Name </label>
        <input name="name" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-email"> Image</label>
        <div class="input-group input-group-merge">
          <input type="file" name="image" id="image" oninput="previewImage.src=window.URL.createObjectURL(this.files[0])"  class="form-control"  aria-describedby="multicol-email2" />
        </div>
        <div class="col-md-12 mb-2 my-2 m-auto">
          <img id="previewImage" style="max-height: 100px;">
        </div>
      </div>
      



          <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">وصف </label>
        <input name="place" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-2">
        <label class="form-label" for="multicol-username"> Start</label>
        <input name="start" type="date" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
            <div class="col-md-2">
        <label class="form-label" for="multicol-username"> End</label>
        <input name="end" type="date" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
 
 
      

      <div class="col-md-6">
        <div class="form-password-toggle">
          <label class="form-label" for="multicol-confirm-password">تفعيل الكتاب</label>
          <div class="input-group input-group-merge">
          <label class="switch">
              <input name="is_active" value=1 type="checkbox" checked class="switch-input" />
              <span class="switch-toggle-slider">
                <span class="switch-on"></span>
                <span class="switch-off"></span>
              </span>
              <span class="switch-label">is active</span>
            </label>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="pt-4">
      <button type="submit" class="btn btn-primary me-sm-3 me-1">Submit</button>
      <button type="reset" class="btn btn-label-secondary">Cancel</button>
    </div>
  </form>
</div>
          
</div>
<!-- / Content -->

          
          

   @endsection
