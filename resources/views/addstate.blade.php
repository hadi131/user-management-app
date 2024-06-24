<x-layout>
    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-3">Dashboard</h3>
                </div>
                <div class="ms-md-auto py-2 py-md-0">
                    <a href="{{ route('state.index') }}" class="btn btn-primary btn-round">Back</a>
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
                                    <a href="#">Add New State</a>
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
                            <div class="card-title">Add new State</div>
                        </div>
                        <form action="{{ route('state.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6">
                                        <x-forms.input value="" label="Name" type="text"
                                            placeholder="Enter state" name="name" />
                                            <small class="text-danger">

                                            @error('name')
                                            {{ $message }}
                                        @enderror</small>
                                    </div>
                                    <div class="col-md-6 ">
                                        <select name="address_id"
                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                            id="address_id">
                                            @foreach ($country as $c)
                                                <option value="{{ $c->id }}">{{ $c->name }}</option>
                                            @endforeach
                                        </select>
                                        <small class="text-danger">

                                            @error('address_id')
                                                {{ $message }}
                                            @enderror
                                        </small>
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
