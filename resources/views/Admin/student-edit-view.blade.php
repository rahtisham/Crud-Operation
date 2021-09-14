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
                            <h4 class="page-title">Form Elements</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">

                                @if(\Session::has('success'))
                                 <div class="alert alert-success">
                                    <p><b>{{ \Session::get('success') }}</b></p>
                                 </div>
                                 @endif
                               
                                    
                        <form method="post" action="{{ route('update.student.listing' , ['id' => $developerEditView->id]) }}">
                              @csrf
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                       <select id="" name="category" class="form-control">
                                            <option value="{{ $developerEditView->category }}">{{ $developerEditView->category }}</option>
                                        </select>
                                        @error('cateory')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name" value="{{ $developerEditView->name }}"  class="@error('name') is-invalid  @enderror">
                                        @error('name')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Contact</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $developerEditView->contact }}" name="contact" id="example-email-input">
                                        @error('contact')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input"  class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="{{ $developerEditView->address }}" name="address" id="example-email-input">
                                        @error('address')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input"  class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                       <select name="gender" class="form-control">
                                            <option value="{{ $developerEditView->gender }}">{{ $developerEditView->gender }}</option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                        @error('gender')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="example-search-input"  class="col-sm-2 col-form-label">DOB</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="DOB" type="date"  value="{{ $developerEditView->DOB }}"  id="example-search-input">
                                        @error('DOB')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label for="example-search-input"  class="col-sm-2 col-form-label">DOJ</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="DOJ" type="date" value="{{ $developerEditView->DOJ }}"  id="example-search-input">
                                        @error('DOJ')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> 
                               
                                <button  type="submit" class="btn btn-primary text-right">UPDATE REGISTRATION FORM</button>
                            </div>
                        </form>

                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                            
              
            </div> <!-- end container -->
        </div>
</x-adminapp-layout>