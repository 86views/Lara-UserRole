<x-admin-layout>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">All Users</h4>
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
            <div class="col-12">
                <div class="card m-b-30">
                    <div class="card-body">
                        @can('user-create')
                        <a href="{{ route('users.create') }}" class="float-right btn btn-primary mb-2"><i
                                class="ti-plus mr-2"></i>Create User</a><br>
                         @endcan       
                       
                         
                        <h4 class="mt-0 header-title"> All users</h4>
                        {{-- <p class="text-muted m-b-30../plugins">The Buttons extension for DataTables
                        provides a common set of options, API methods and styling to display
                        buttons on a page that will interact with a DataTable. The core library
                        provides the based framework upon which plug-ins can built.
                    </p> --}}

                     
                        <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <th>Surname</th>
                                    <th>Other Name</th>
                                    <th>Staff Id</th>
                                    <th>School Name</th>
                                    <th>Dept Name</th>
                                     <th> Role </th>
                                    {{-- <th>Phone</th>
                            <th>Email</th> --}}
                                    {{-- <th>Date Created</th> --}}
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <td>#</td>
                                    <th>Surname</th>
                                    <th>Other Name</th>
                                    <th>Staff Id</th>
                                    <th>School Name</th>
                                    <th>Dept Name</th>
                                    <th> Role </th>
                                    {{-- <th>Phone</th>
                                <th>Email</th> --}}
                                    {{-- <th>Date Created</th> --}}
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td> {{ $user->id }}</td>
                                        <td>{{ $user->surname }}</td>
                                        <td>{{ $user->othernames }}</td>
                                        {{-- <td>{{ $user->staff_id }}</td>
                                        <td>{{ $user->office->officeName }}</td>
                                        <td>{{ $user->department->deptName }}</td> --}}

                                        {{-- <td> {{ $user->phone }}</td>
                                        <td> {{ $user->email }}</td> --}}

                                        
                                        <td>

                                         

                                        </td>
                                        

                                        {{-- <td>{{ $user->created_at->format(config('app.date_format')) }} </td> --}}
                                        <td>
                                            {{-- <a href="{{ route('users.show', $user->id) }}" class="btn btn-sm btn-info">
                                                Show </a>
                                              --}}
                                          
                                            {{-- <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-success">
                                                Edit
                                            </a> --}}
                                           
                                         
                                            {{-- {!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id], 'style' => 'display:inline']) !!}

                                            {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}

                                            {!! Form::close() !!}
                                           --}}
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>


                        </table>
                     

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div>
</x-admin-layout>
