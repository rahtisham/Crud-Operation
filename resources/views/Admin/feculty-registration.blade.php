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
                            <h4 class="page-title">FECULTY REGISTRATION</h4>
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
                                    
                          <form method="post" action="{{ route('user.registered') }}">
                              @csrf
                            <div class="card-body">

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Category</label>
                                    <div class="col-sm-10">
                                       <select id="" name="category" class="form-control">
                                            <option>Select</option>
                                            <option value="Admin">Admin</option>
                                            <option value="Teacher">Teacher</option>
                                        </select>
                                        @error('category')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="name"  class="@error('name') is-invalid  @enderror">
                                        @error('name')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Contact</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="contact" id="example-email-input">
                                        @error('contact')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input"  class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" name="address" id="example-email-input">
                                        @error('address')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row" id="myDIV">
                                    <label for="example-email-input"  class="col-sm-2 col-form-label">CNIC</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="cnic" type="text" id="example-email-input">
                                        @error('cnic')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input"  class="col-sm-2 col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                       <select name="gender" class="form-control">
                                            <option>Select</option>
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
                                        <input class="form-control" name="DOB" type="date"  id="example-search-input">
                                        @error('DOB')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> 

                                <div class="form-group row">
                                    <label for="example-search-input"  class="col-sm-2 col-form-label">DOJ</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="DOJ" type="date"  id="example-search-input">
                                        @error('DOJ')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> 
                                
                                <div class="form-group row">
                                    <label for="example-search-input"  class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="email" type="email"  id="example-search-input">
                                        @error('email')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input"  class="col-sm-2 col-form-label">Password</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="password" type="password"  id="example-search-input">
                                        @error('password')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input"  class="col-sm-2 col-form-label">File</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" name="uploadedfile" type="file"  id="example-search-input">
                                        @error('uploadedfile')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <button  type="submit" class="btn btn-primary text-right">REGISTRATION FORM</button>
                            </div>
                            </form>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                            
              
            </div> <!-- end container -->
        </div>
</x-adminapp-layout>

<!-- <script>
$(document).ready(function(){
  $('#sel').change(function(){
    alert("The text has been changed.");
    $('#myDIV').hide();
  });
});
</script> -->
      <script>
          jQuery(function($) {
                $(document).on('change','#sel',function(){
     
                    var variationID = $(this).val();
                   

                    if(variationID == "Student")
                    {
                        $('#myDIV').hide();
                    }

                    else{
                        $('#myDIV').show();
                    }
                 
                });
            });
          </script>