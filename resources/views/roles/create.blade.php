<x-admin-layout>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">Create New Role</h4>
                        </div>
                        <div class="col-md-4">
                            <div class="float-right d-none d-md-block">
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="ti-settings mr-1"></i> Settings
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Separated link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end page-title-box -->
            </div>
        </div>
        <!-- end page title -->

        <div class="row">
            <div class="col-lg-12">
                <div class="card m-b-30">

                    <div class="card-body">
                        <a href="{{ route('admin.roles.index') }}" class="float-right btn btn-primary mb-2"><i
                                class="ti-eye mr-2"></i>View all Roles</a>

                        <h4 class="mt-0 header-title">Create Roles</h4>


                        <form method="POST" action="{{ route('admin.roles.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Role Name</label>
                                {!! Form::text('name', null, array('placeholder' => 'Role Name','class' => 'form-control')) !!}
                                {{-- <input id="name" type="text"
                                    class="form-control @error('name') is-invalid @enderror" name="name"
                                    value="{{ old('name') }}" placeholder="Role Name" required autocomplete="name"
                                    autofocus> --}}

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                                   <div class="form-group">
                                <div>
                                    <button type="submit" class="btn btn-primary waves-effect waves-light">
                                        <i class="ti-save-alt mr-2"></i>
                                        Create Roles
                                    </button>

                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div> <!-- end col -->


        </div> <!-- end row -->

    </div><!-- container fluid -->


</x-admin-layout>    
