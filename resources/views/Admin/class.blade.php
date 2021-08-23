<x-adminapp-layout>
        <div class="wrapper">
            <div class="container-fluid">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                    <li class="breadcrumb-item active">Advanced</li>
                                </ol>
                            </div>
                            <h4 class="page-title">CLASS ++</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-lg-7">
                        <div class="card">
                            @if(\Session::has('success'))
                                <div class="alert alert-success">
                                   <p>{{ \Session::get('success') }}</p>
                                </div>
                            @endif
                              <form method="post" action="{{ route('add.class') }}">
                                  @csrf
                            <div class="card-body">
                                <h4 class="header-title mt-0">ADD CLASS</h4>
                                <p class="text-muted mb-4 font-14">Select2 is a jQuery based replacement for select boxes. 
                                    It supports searching, remote data sets, and infinite scrolling of results. </p>
                                <div class="m-t-20">
                                    <input type="text" class="form-control" placeholder="Add Class" maxlength="25" name="className" />
                                    @error('className')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>   <br>
                                <span class="input-group-append">
                                    <button type="submit" id="check-minutes" class="btn btn-primary">Class ++</button>
                                </span>   
                            </div> 
                              </form>   
                        </div> 
                    </div> <!-- end col -->

                    <div class="col-5">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Example</h4>
                                <p class="text-muted mb-4 font-14">This is an experimental awesome solution for responsive tables with complex data.</p>

                                <div class="table-rep-plugin">
                                    <div class="table-responsive b-0" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table  table-striped">
                                          <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Class</th>
                                                <th>Edit/Delete/View</th>
                                            </tr>
                                           </thead>
                                            <tbody>
                                                @foreach($classShow as $classView)
                                                    <tr>
                                                        <td>{{ $classView->class_id }}</td>
                                                        <td>{{ $classView->className }}</td>
                                                        <td>
                                                            <a href="#" type="button" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></a>
                                                            <a href="#" type="button" class="tabledit-edit-button btn btn-sm btn-danger" style="float: none; margin: 5px;"><span class="ti-trash"></span></a>
                                                            <form action=""
                                                                method="post" class="d-inline" onsubmit="return confirm('Are you sure! you want to delete this user')" >
                                                                @method('delete')
                                                                @csrf
                                                            <button type="button" class="tabledit-edit-button btn btn-sm btn-success" style="float: none; margin: 5px;"><span class="fa fa-eye-slash"></span></button>
                                                            </form>
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
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

</x-adminapp-layout>