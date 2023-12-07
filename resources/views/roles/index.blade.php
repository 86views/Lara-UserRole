<x-admin-layout>
    <div class="container-fluid">

        <div class="row">
            <div class="col-sm-12">
                <div class="page-title-box">
                    <div class="row align-items-center">
                        <div class="col-md-8">
                            <h4 class="page-title m-0">Role Table</h4>
                        </div>
                       
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
    
                        <h4 class="mt-0 header-title">Role Management </h4>
                                <a href="{{ route('admin.roles.create') }}"  
                                class="float-right btn btn-primary mb-2"><i class="ti-user mr-2"></i>
                                Create new Roles</a>
                            
    
                                <table id="tech-companies-1" class="table  table-hover">
                                    <thead>
                                    <tr>
                                        <th>#</th>
    
                                        <th data-priority="1">Name</th>
                                        <th data-priority="1">Date Created</th>
                                        <th data-priority="1">Action</th>
                                      
                                       
                                    </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th data-priority="1">Name</th>
                                            <th data-priority="1">Date Posted</th>
                                            <th data-priority="1">Action</th>
                                          
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach ($roles as $role)
                                               
                                        <tr>
                                            <td>{{  $role->id }}</td>
                                            <td>{{  $role->name }}</td>
                                            <td>{{ $role->created_at->format(config('app.date_format')) }}</td> 
                                            <td>
    
                                                <a href="{{ route('admin.roles.show', $role->id) }}" 
                                                    class="btn btn-sm btn-info"> Show  </a>
                                                
                                                
                                                <a href="{{ route('admin.roles.edit', $role->id) }}" 
                                                    class="btn btn-sm btn-success"> Edit 
                                                 </a>


                                                 {{-- <form action="{{ route('admin.roles.destroy', $role->id) }}" 
                                                    method="POST"
                                                    onsubmit="return confirm('Are You Sure')">
                                                     @csrf
                                                     @method('delete')
                                                    <input type="submit" class="btn btn-sm btn-danger" value="Delete">        
                                              </form>
                                                 --}}

                                                 {!! Form::open(['method' => 'DELETE',
                                                   'route' => ['admin.roles.destroy', $role->id],'style'=>'display:inline']) !!}

                                                   {!! Form::submit('Delete', ['class' => 'btn btn-sm btn-danger']) !!}
                            
                                                 {!! Form::close() !!}
                                                 
                                                    
                                             
                                            </td>                                     
                                        </tr>    
                                           
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
    
                        </div>
    
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->            
    
    </div><!-- container fluid -->



</x-admin-layout>    
