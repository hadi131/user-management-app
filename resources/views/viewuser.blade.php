<x-layout>
    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-3">Dashboard</h3>
                </div>
                <div class="ms-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                    <a href="#" class="btn btn-primary btn-round">Add Customer</a>
                </div>
            </div>



            <div class="row">
                <div class="container">
                    <div class="page-inner">
                      <div class="page-header">
                        <h3 class="fw-bold mb-3">User's Management</h3>
                        <ul class="breadcrumbs mb-3">
                          <li class="nav-home">
                            <a href="{{ route('employee.index') }}">
                              <i class="icon-home"></i>
                            </a>
                          </li>
                          <li class="separator">
                            <i class="icon-arrow-right"></i>
                          </li>


                          <li class="nav-item">
                            <a href="#">{{ $employees->id }}</a>
                          </li>
                        </ul>
                      </div>
                      <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header">
                              <h4 class="card-title">{{ $employees->name }}</h4>
                            </div>
                            <div class="card-body">
                              <div class="table-responsive">
                                <table
                                  id="basic-datatables"
                                  class="display table table-striped table-hover"
                                >
                                  <thead>
                                    <tr>
                                      <th>#ID</th>
                                      <th>Name</th>
                                      <th>Email</th>
                                      <th>City</th>

                                    </tr>
                                  </thead>

                                  <tbody>
                                    <tr>
                                      <td>{{ $employees->id }}</td>
                                      <td>{{ $employees->name }}</td>
                                      <td>{{ $employees->email }}</td>
                                      <td>{{ $employees->city }}</td>
                                      <div class="flex">


                                        <td>
                                            <form action="{{ route('employee.destroy', $employees->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <x-button name="Delete" color="danger" />

                                            </form>
                                        </td>
                                        <td>

                                            <x-link name="Update" color="warning" ref="{{ route('employee.edit', $employees->id) }}" />

                                        </td>

                                    </div>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
                        </div>


                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
    </x-layout>
