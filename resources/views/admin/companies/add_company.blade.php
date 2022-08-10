@extends('admin.master')
@section('content')
      

      <!-- Content wrapper -->
      <div class="content-wrapper">

        <!-- Content -->
        
<div class="container-xxl flex-grow-1 container-p-y">
            
            
<h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Vertical Layouts</h4>




<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <h5 class="card-header">انشاء كتاب جديد</h5>
  <form class="card-body" action="/save_books" method="POST" enctype="multipart/form-data">
    
    <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">اسم الكتاب</label>
        <input name="title" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-6">
        <label class="form-label" for="multicol-email">صورة الكتاب</label>
        <div class="input-group input-group-merge">
          <input  name="image" type="file"  class="form-control"  aria-describedby="multicol-email2" />
          
        </div>
      </div>
      



          <div class="row g-3">
      <div class="col-md-6">
        <label class="form-label" for="multicol-username">وصف الكتاب</label>
        <input name="description" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
      <div class="col-md-2">
        <label class="form-label" for="multicol-username"> السعر</label>
        <input name="format" type="text" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
            <div class="col-md-2">
        <label class="form-label" for="multicol-username"> السعر</label>
        <input name="price" type="number" id="multicol-username" class="form-control" placeholder="john.doe" />
      </div>
            <div class="col-md-2">
        <label class="form-label" for="multicol-username">عدد الصفحات </label>
        <input name="pages_number" type="number" id="multicol-username" class="form-control" placeholder="john.doe" />
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
