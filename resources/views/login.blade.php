<x-loginLayout>
    <div class="container">
        <div class="page-inner">




            <div class="d-flex justify-content-center">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="card-title">LogIn</div>
                            </div>
                            <form action="{{ route('loginMatch') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <div class="row">


                                        <div class="col-md-12 col-lg-12">
                                            <x-forms.input value="" label="Email" type="email"
                                                placeholder="Enter Your Email" name="email" />
                                            <small class="text-danger">

                                                @error('email')
                                                    {{ $message }}
                                                @enderror
                                            </small>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-12 col-lg-12">
                                            <x-forms.input value="" label="Password" type="password"
                                                placeholder="Enter Your Password" name="password" />
                                            <small class="text-danger">

                                                @error('password')
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
            </div>
</x-loginLayout>
