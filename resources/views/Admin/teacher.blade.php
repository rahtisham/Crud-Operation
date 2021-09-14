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
                            <h4 class="page-title">TEACHERS ROLES</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->

                <div class="row"> 
                    <a href="{{ route('feculty-registration') }}"><button type="button" class="btn btn-googleplus m-b-10 m-l-10 waves-effect waves-light">
                    <i class="fa fa-google-plus m-r-5"></i> ADD TEACHERS +
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
                                                <th>ID</th>
                                                <th>NAME</th>
                                                <th>IMAGES</th>
                                                <th>EMAIL</th>
                                                <th>CONTACT</th>
                                                <th>ADDRESS</th>
                                                <th>CNIC</th>
                                                <th>GENDER</th>
                                                <th>DOB</th>
                                                <th>STATUS</th>
                                                <th>Edit/Delete/View</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                                @foreach($teacher as $row)
                                                <tr>
                                                       <td>{{ $row->id }}</td>
                                                       <td><img src="/storage/studentImages/{{ $row->profile_photo_path }}" style="width:40px; height:40px; border-radius: 100px;"></td>
                                                        <td>{{ $row->name }}</td>
                                                        <td>{{ $row->email }}</td>
                                                        <td>{{ $row->contact }}</td>
                                                        <td>{{ $row->address }}</td>
                                                        <td>{{ $row->cnic }}</td>
                                                        <td>{{ $row->gender }}</td>
                                                        <td>{{ $row->DOB }}</td>
                                                        <td>
                                                            <button type="button" class="btn btn-primary btn-sm">{{ $row->status }}</button>
                                                        </td>
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