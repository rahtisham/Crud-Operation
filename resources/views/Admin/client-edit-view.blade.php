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
                                    <li class="breadcrumb-item active">Form Elements</li>
                                </ol>
                            </div>
                            <h4 class="page-title">Clients Edit View Form</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                               <form action="{{ route('update.client.listing' , ['id' => $clientEditView->client_id]) }}" method="post">
                               @csrf 
                                <h4 class="mt-0 header-title">Textual inputs</h4>
                                <p class="text-muted mb-4 font-14">Here are examples of <code
                                        class="highlighter-rouge">.form-control</code> applied to each
                                    textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                            class="highlighter-rouge">Name</code>.</p>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Text</label>
                                    <div class="col-sm-10">
                                        <input class="form-control"  value="{{ $clientEditView->client_name }}" type="text" class="@error('name') is-invalid  @enderror" id="example-text-input">
                                        <!-- @error('name')
                                        <span> {{ $message }}</span>
                                        @enderror -->
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search" value="{{ $clientEditView->client_email }}" id="example-search-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Contact</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" value="{{ $clientEditView->client_contact_number }}" id="example-email-input">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" value="{{ $clientEditView->client_address }}" id="example-email-input">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Project</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" value="{{ $clientEditView->client_project_name }}" id="example-email-input">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Country</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" value="{{ $clientEditView->client_country }}" id="example-email-input">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">City</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" value="{{ $clientEditView->client_city }}" id="example-email-input">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Information</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" value="{{ $clientEditView->client_infromation }}" id="example-email-input">
                                    </div>
                                </div>
                                
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">ID Card</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" value="{{ $clientEditView->client_idCard }}" id="example-email-input">
                                    </div>
                                </div>
                                <button  type="submit" class="btn btn-success ml-2 text-right">Sign in</button>
                              </form>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                            
              
            </div> <!-- end container -->
        </div>
</x-adminapp-layout>