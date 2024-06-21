    <x-layout>
        <div class="container">
            <div class="page-inner">
                <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                    <div>
                        <h3 class="fw-bold mb-3">Dashboard</h3>
                    </div>
                    <div class="ms-md-auto py-2 py-md-0">
                        <a href="{{ route('employee.index') }}" class="btn btn-primary btn-round">Back</a>
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
                                        <a href="#">Add New Users</a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">Add new User</div>
                            </div>
                            <form action="{{ route('employee.store') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <x-forms.input value="" label="Name" type="text"
                                                placeholder="Enter Your Full Name" name="name" />
                                                <small class="text-danger">

                                                @error('name')
                                                {{ $message }}
                                            @enderror</small>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <x-forms.input value="" label="Email" type="email" placeholder="Enter Your Email"
                                                name="email" />
                                                <small class="text-danger">

                                                @error('email')
                                                {{ $message }}
                                            @enderror</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <x-forms.input value="" label="Age" type="text" placeholder="Enter Your Age"
                                                name="age" />
                                                <small class="text-danger">
                                                @error('age')
                                                {{ $message }}
                                            @enderror</small>
                                        </div>
                                        <div class="col-md-6 col-lg-6">
                                            <x-forms.input value="" label="City" type="text" placeholder="Enter Your City"
                                                name="city" />
                                                <small class="text-danger">

                                                @error('city')
                                                {{ $message }}
                                            @enderror</small>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <x-button name="Add" color="primary" />

                                    </div>
                                </div>
                            </form>

                        </div>




                    </div>
                </div>
    </x-layout>
