<x-adminapp-layout>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container-fluid">
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Zoter</a></li>
                                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                    <li class="breadcrumb-item active">Datatable</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Designers</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row"> 
                    <a href="{{ route('registration') }}"><button type="button" class="btn btn-googleplus m-b-10 m-l-10 waves-effect waves-light">
                    <i class="fa fa-google-plus m-r-5"></i> Add Designers+
                    </button></a>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="mt-0 header-title">Example</h4>
                                <p class="text-muted mb-4 font-14">This is an experimental awesome solution for responsive tables with complex data.</p>

                                <div class="table-rep-plugin">
                                    <div class="table-responsive b-0" data-pattern="priority-columns">
                                        <table id="tech-companies-1" class="table  table-striped">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>email</th>
                                                <th>role</th>
                                                <th>created_at</th>
                                                <th>updated_at</th>
                                                <th>Edit/Delete/View</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($teacher as $row)
                                                <tr>
                                                <td>{{ $row->name }}</td>
                                                <td>{{ $row->email }}</td>
                                                <td>{{ $row->role }}</td>
                                                <td>{{ $row->created_at }}</td>
                                                <td>{{ $row->updated_at }}</td>
                                                <td>
                                                    <a href="{{ route('teacher.eidt.view' , ['id' => $row->id]) }}" type="button" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></a>
                                                    <a href="#" type="button" class="tabledit-edit-button btn btn-sm btn-danger" style="float: none; margin: 5px;"><span class="ti-trash"></span></a>
                                                    <form action="{{ route('teacher.delete' , ['id' => $row->id]) }}"
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