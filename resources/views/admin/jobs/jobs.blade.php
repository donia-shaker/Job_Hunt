@extends('admin.layout.dashboard')
@section('content')
        <!-- start content -->
        <div class="col py-3">
          <div
            class="education  align-items-center m-1 "
          >
            <div class="">
            <h1>All Jobs</h1>
              <!-- Button trigger modal -->
              <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
              >
                Add Job
              </button>
              <table class="table shadow p-3 caption-top">
                <thead>
                  <tr class="p-3">
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">image</th>
                    <th scope="col">Place</th>
                    <th scope="col">description</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Updata</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i=1 ; ?>
                @foreach ($jobs as $job)
                  <tr class="p-5 my-3">
                    <th scope="row">{{$i++}}</th>
                    <td>{{ $job->name }}</td>
                    <td>
                    <img  class="img-fluid rounded" height="150px" 
                          width="150px" src="{{ URL::asset('images/' . $job->image) }}">
                    </td>
                    <td>{{ $job->place }}</td>
                    <td>{{ $job->description }}</td>
                    <td>{{ $job->start_date }}</td>
                    <td>{{ $job->end_date }}</td>

                    <td>
                      <a
                        href=""
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModalUpdate"
                        data-id="{{ $job->id }}"
                        ><i class="fas fa-pen"></i
                      ></a>
                    </td>
                    <td>
                      <a
                        href=""
                        class="text-danger"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModalDelete"
                        ><i class="fas fa-trash-alt"></i
                      ></a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Add Modal -->
    <div
      class="modal fade position-fixed"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
      >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Job</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="m-4">
              <form 
              action="{{route('store_Job')}}" method="POST" enctype="multipart/form-data"
              >
              @csrf
                <div class="mb-3">
                  <label class="form-label" for="name">Job Name</label>
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Job Name"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="image">Job Image</label>
                  <input
                    type="file"
                    name="image"
                    class="form-control"
                    id="image"
                    oninput="previewImage.src=window.URL.createObjectURL(this.files[0])"
                    placeholder="Job image"
                    required
                  />
                  <div class="col-md-12 mb-2 my-2 m-auto">
                    <img id="previewImage" style="max-height: 100px;">
                  </div>
                </div> 
                <div class="mb-3">
                  <label class="form-label" for="place">Place</label>
                  <input
                    type="text"
                    name="place"
                    class="form-control"
                    id="inputName"
                    placeholder="Place"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="description">Job Description</label>
                  <input
                    type="text"
                    name="description"
                    class="form-control"
                    id="description"
                    placeholder="Description"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="end_date">End Date</label>
                  <input
                    type="date"
                    name="end_date"
                    class="form-control"
                    id="end_date"
                    placeholder="End Date"
                    required
                  />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                    Cencel
                  </button>
                  <button
                    type="submit"
                    class="btn btn-primary"
                    data-bs-dismiss="modal"
                  >
                    Save
                  </button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Update Cources model-->
    <!-- model -->
    <div
      class="modal fade position-fixed"
      id="exampleModalUpdate-{{$job->id}}"
      tabindex="-1"
      aria-labelledby="exampleModalUpdate"
      aria-hidden="true"
    >
    {{ $job->id = isset($_GET['$job->id']) && is_numeric($_GET['$job->id']) ? intval($_GET['$job->id']) : 0 }}
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalUpdate">Update Job</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="m-4">
              <form 
              action="{{route('update_Job',$job->id)}}" method="POST" enctype="multipart/form-data"
              >
              <input type="hidden" id="update_id" value=""> 
              @csrf
                <div class="mb-3">
                  <label class="form-label" for="name">Job Name</label>
                  <input
                    type="text"
                    name="name"
                    class="form-control"
                    id="name"
                    placeholder="Job Name"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="image">Job Image</label>
                  <input
                    type="file"
                    name="image"
                    class="form-control"
                    id="image"
                    oninput="previewImage.src=window.URL.createObjectURL(this.files[0])"
                    placeholder="Job image"
                    required
                  />
                  <div class="col-md-12 mb-2 my-2 m-auto">
                    <img id="previewImage" style="max-height: 100px;">
                  </div>
                </div> 
                <div class="mb-3">
                  <label class="form-label" for="place">Place</label>
                  <input
                    type="text"
                    name="place"
                    class="form-control"
                    id="inputName"
                    placeholder="Place"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="description">Job Description</label>
                  <input
                    type="text"
                    name="description"
                    class="form-control"
                    id="description"
                    placeholder="Description"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="end_date">End Date</label>
                  <input
                    type="date"
                    name="end_date"
                    class="form-control"
                    id="end_date"
                    placeholder="End Date"
                    required
                  />
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-light" data-bs-dismiss="modal">
                    Cencel
                  </button>
                  <button
                    type="submit"
                    class="btn btn-primary"
                    data-bs-dismiss="modal"
                  >
                    Save
                  </button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- End Update Cources model-->

    <!-- Update Cources model-->
    <!-- model -->
    <div
      class="modal fade position-fixed"
      id="exampleModalDelete"
      tabindex="-1"
      aria-labelledby="exampleModalDelete"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="m-4">
              <h3>Are You Sure You Want Delete</h3>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
              Cencel
            </button>
            <button
              type="button"
              class="btn btn-danger"
              data-bs-dismiss="modal"
            >
              Delete
            </button>
          </div>
        </div>
      </div>
    </div>
    <!-- End Update Cources model-->

    <script>
      function setEventId(event_id){
     let update_id = document.getElementById("update_id");
     update_id.setAttribute('value',event_id);
}
    </script>
   @endsection
