<x-admin-layout>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">  Show Role</h4>
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

                          <h4 class="mt-0 header-title">Show Roles</h4>
                          <div class="form-group">
                            <label>Role Name:</label>
                                <span class="badge badge-success">{{  $role->name }}</span>
                          </div>                     

                    </div>
                </div>
            </div> <!-- end col -->


        </div> <!-- end row -->

    </div><!-- container fluid -->
</x-admin-layout>