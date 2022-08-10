@extends('admin.master')
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
            <th>الوصف</th>
            <th>تاريخ النشر</th>
            <th>النهايه</th>
            <th>الحالة</th>
            <th>العمليات</th>
          </tr>
        </thead>
        <tbody>
       

          <tr>
            
            <td>Job Name</td>
            <td>
              <img class="img-fluid rounded" height="150px" width="150px" src="">
            </td>
            <td>description</td>
            <td>start</td>
            <td>end</td>
            <td>   
            <span class="badge bg-label-success me-1">مفعل</span>

             <!-- <span class="badge bg-label-danger me-1">موقف</span> -->
            </td>
            <td>
            <a href="/edit_books/" class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-edit-alt me-1"></i>
              </a>
              <button type="button" class="btn btn-icon btn-outline-dribbble">
                  <a href="/remove_books/?>" class="btn btn-icon btn-outline-dribbble">
                <i class="tf-icons bx bx-trash me-1"></i>
                  </a>
              </button>
              
              
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--/ Bordered Table -->
          </div>
          <!-- / Content -->




   @endsection
