<x-layout>
    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-3">Dashboard</h3>
                </div>
                <div class="ms-md-auto py-2 py-md-0">
                    <a href="{{ route('state.create') }}" class="btn btn-primary btn-round">Add State</a>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-primary bubble-shadow-small">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Total States Registered</p>
                                        <h4 class="card-title">{{ $count }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="container">
                    <div class="page-inner">
                        <div class="page-header">
                            <h3 class="fw-bold mb-3">User's Management</h3>
                            <ul class="breadcrumbs mb-3">
                                <li class="nav-home">
                                    <a href="#">
                                        <i class="icon-home"></i>
                                    </a>
                                </li>
                                <li class="separator">
                                    <i class="icon-arrow-right"></i>
                                </li>


                                <li class="nav-item">
                                    <a href="#">All States</a>
                                </li>
                            </ul>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">All States</h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table id="basic-datatables"
                                                class="display table table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>#ID</th>

                                                        <th>State</th>
                                                        <th>Country</th>

                                                    </tr>
                                                </thead>

                                                <tbody>
                                                    @foreach ($states as $state)
                                                        <tr>
                                                            <td>{{ $state->id }}</td>
                                                            <td>{{ $state->name }}</td>
                                                            <td>{{ $state->country->name ?? '' }}</td>
                                                            <div class="flex">



                                                                <td>
                                                                    <form
                                                                        action="{{ route('state.destroy', $state->id) }}"
                                                                        method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <x-button name="Delete" color="danger" />

                                                                    </form>
                                                                </td>
                                                                {{-- <td>

                                                                    <x-link name="Update" color="warning"
                                                                        ref="{{ route('state.edit', $state->id) }}" />

                                                                </td> --}}

                                                            </div>
                                                        </tr>
                                                    @endforeach
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
