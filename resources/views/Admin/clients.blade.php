<x-adminapp-layout>
           <div class="wrapper">
              <div class="container-fluid">
                <div class="row"> 
                    <a href="{{ route('add.clients') }}"><button type="button" class="btn btn-googleplus m-b-10 m-l-10 waves-effect waves-light">
                    <i class="fa fa-google-plus m-r-5"></i> Add Clients+
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
                                                <th data-priority="1">Name</th>
                                                <th data-priority="3">Project</th>
                                                <th data-priority="3">Email</th>
                                                <th data-priority="1">Contact</th>
                                                <th data-priority="3">Address</th>
                                                <th data-priority="3">Countory</th>
                                                <th data-priority="6">City</th>
                                                <th data-priority="6">Information</th>
                                                <th data-priority="6">ID Card</th>
                                                <th data-priority="6">Edit/Delete/Update</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($clients as $clientInformation)
                                                <tr>
                                                    <th>{{ $clientInformation->client_id }} <span class="co-name"></span></th>
                                                    <th>{{ $clientInformation->client_name }} <span class="co-name"></span></th>
                                                    <td>{{ $clientInformation->client_project_name }}</td>
                                                    <td>{{ $clientInformation->client_email }}</td>
                                                    <td>{{ $clientInformation->client_contact_number }}</td>
                                                    <td>{{ $clientInformation->client_address }}</td>
                                                    <td>{{ $clientInformation->client_country }}</td>
                                                    <td>{{ $clientInformation->client_city }}</td>
                                                    <td>{{ $clientInformation->client_infromation }}</td>
                                                    <td>{{ $clientInformation->client_idCard }}</td>
                                                    <td>
                                                        <a href="{{ route('client.edit.view' , ['id' => $clientInformation->client_id]) }}" type="button" class="tabledit-edit-button btn btn-sm btn-info" style="float: none; margin: 5px;"><span class="ti-pencil"></span></a>
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
              </div>
           </div>
</x-adminapp-layout>