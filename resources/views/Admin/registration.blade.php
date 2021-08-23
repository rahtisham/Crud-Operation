<x-adminapp-layout>
    
   
<div class="wrapper">
            <div class="container-fluid">
            <!-- <button onclick="myFunction()">Try it</button>

<script>
function myFunction() {
  alert("Hello! I am an alert box!");
}
</script> -->
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-title-box">
                            <div class="btn-group pull-right">
                                <ol class="breadcrumb hide-phone p-0 m-0">
                                    <li class="breadcrumb-item"><a href="#">Out Origin</a></li>
                                    <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                    <li class="breadcrumb-item active">Registration</li>
                                </ol>
                            </div>
                            <h4 class="page-title">USERS REGISTRATION</h4>
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                          <form action="index.php">
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Role</label>
                                    <div class="col-sm-10">
                                       <select class="form-control">
                                            <option>Select</option>
                                            <option>Teacher</option>
                                            <option id="sel">Student</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text"  class="@error('name') is-invalid  @enderror" id="example-text-input" value="">
                                        @error('name')
                                        <span> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Contact</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" id="example-email-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" id="example-email-input">
                                    </div>
                                </div>
                                <div class="form-group row" id="myDIV">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">CNIC</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" id="example-email-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                       <select class="form-control">
                                            <option>Select</option>
                                            <option>Male</option>
                                            <option>Female</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search"  id="example-search-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search"  id="example-search-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Confirm Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search"  id="example-search-input">
                                    </div>
                                </div>
                                <button  type="submit" class="btn btn-success ml-2 text-right">Sign in</button>
                            </div>
                            </form>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                            
              
            </div> <!-- end container -->
        </div>
</x-adminapp-layout>

<script>
$(document).ready(function(){
  $('#sel').change(function(){
    alert("The text has been changed.");
  });
});
</script>