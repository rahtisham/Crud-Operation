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
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
              
                <div class="col-lg-3"></div> <!-- end col -->
                    <div class="col-lg-6">
                        <div class="card">
                            <!-- @if(count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif -->
                            @if(\Session::has('success'))
                                <div class="alert alert-success">
                                   <p>{{ \Session::get('success') }}</p>
                                </div>
                            @endif
                            <br><br>
                            <div class="card-body">
                               <h4 class="page-title">New Client</h4><br><br>
                                <form method="post" action="{{ route('add.clients.listening') }}">
                                    @csrf
                                    <h6 class="sub-title">Client Name</h6>
                                    <input type="text" class="form-control"  name="client_name"  />
                                    @error('client_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <h6 class="sub-title">Client Email</h6>
                                    <input type="email" class="form-control" name="client_email"  />
                                    @error('client_email')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <h6 class="sub-title">Client Project Name</h6>
                                    <input type="text" class="form-control" name="client_project_name"/>
                                    @error('client_project_name')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <h6 class="sub-title">Client Contact</h6>
                                    <input type="text" class="form-control" name="client_contact_number"  />
                                    @error('client_contact_number')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <h6 class="sub-title">Client Address</h6>
                                    <input type="text" class="form-control" name="client_address" />
                                    @error('client_address')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="m-t-20">
                                        <h6 class="sub-title"><b>Country</b></h6>
                                        <input type="text" name="client_country" class="form-control" />
                                    </div>
                                    @error('client_country')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="m-t-20">
                                        <h6 class="sub-title"><b>City</b></h6>
                                        <input type="text" class="form-control" name="client_city" />
                                    </div>
                                    @error('client_city')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="m-t-20">
                                        <h6 class="sub-title"><b>Client ID Card</b></h6>
                                        <input type="text" class="form-control" name="client_idCard" />
                                    </div>
                                    @error('client_idCard')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                    <div class="m-t-20">
                                        <h6 class="sub-title"><b>Client Information</b></h6>
                                        <textarea name="client_infromation" class="form-control" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                    </div>
                                    @error('client_infromation')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror

                                   <div class="m-t-20">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </form>            
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-3"></div> <!-- end col -->
                </div> <!-- end row -->     
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
</x-adminapp-layout>