@extends('customer.layout.master')
@section('content')
        <!-- start content -->
        <div class="col py-3">
          <div
            class="education d-flex justify-content-md-end align-items-center"
          >
            <div class="container">
              <table class="table shadow p-3 caption-top">
                <h1>Skills</h1>
                <thead>
                  <tr class="p-3">
                    <th scope="col">#</th>
                    <th scope="col">Skills</th>
                    <th scope="col">Updata</th>
                    <th scope="col">Delete</th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="p-5 my-3">
                    <th scope="row">1</th>
                    <td>JavaScript</td>

                    <td>
                      <a
                        href=""
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModalUpdate"
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
                  <tr>
                    <th scope="row">2</th>
                    <td>Php Language</td>

                    <td>
                      <a
                        href=""
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModalUpdate"
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
                  <tr>
                    <th scope="row">3</th>
                    <td>Database Analisize</td>

                    <td>
                      <a
                        href=""
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModalUpdate"
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
                </tbody>
              </table>
              <!-- Button trigger modal -->
              <button
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
              >
                Add Skill
              </button>
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
            <h5 class="modal-title" id="exampleModalLabel">Add Education</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="m-4">
              <form action="">
                <div class="mb-3">
                  <label class="form-label" for="inputName">Education</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputName"
                    placeholder="Education"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="inputEduStart">Start</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputEduStart"
                    placeholder="Start"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="inputEduEnd">End</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputName"
                    placeholder="End"
                    required
                  />
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
              Cencel
            </button>
            <button
              type="button"
              class="btn btn-primary"
              data-bs-dismiss="modal"
            >
              Save
            </button>
          </div>
        </div>
      </div>
    </div>

    <!-- Update Cources model-->
    <!-- model -->
    <div
      class="modal fade position-fixed"
      id="exampleModalUpdate"
      tabindex="-1"
      aria-labelledby="exampleModalUpdate"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabelUpdate">
              Add Education
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <div class="m-4">
              <form action="">
                <div class="mb-3">
                  <label class="form-label" for="inputName">Education</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputName"
                    placeholder="Education"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="inputEduStart1">Start</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputEduStart1"
                    placeholder="Start"
                    required
                  />
                </div>
                <div class="mb-3">
                  <label class="form-label" for="inputEduEnd2">End</label>
                  <input
                    type="text"
                    class="form-control"
                    id="inputEduEnd2"
                    placeholder="End"
                    required
                  />
                </div>
              </form>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-light" data-bs-dismiss="modal">
              Cencel
            </button>
            <button
              type="button"
              class="btn btn-primary"
              data-bs-dismiss="modal"
            >
              Save Update
            </button>
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
   @endsection
