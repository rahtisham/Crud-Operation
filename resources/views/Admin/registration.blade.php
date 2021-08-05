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
                            <div class="card-body">
                            <h4 class="page-title">User Registration</h4>

                                <!-- <p class="text-muted mb-4 font-14">This plugin integrates by default with
                                    Twitter bootstrap using badges to display the maximum lenght of the
                                    field where the user is inserting text. </p> -->

                                <h6 class="sub-title">Name</h6>
                                <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />

                                <h6 class="sub-title">Email</h6>
                                <input type="email" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />

                                <h6 class="sub-title">Contact</h6>
                                <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />

                                <h6 class="sub-title">Address</h6>
                                <input type="text" class="form-control" maxlength="25" name="defaultconfig" id="defaultconfig" />

                                <div class="m-t-20">
                                    <h6 class="sub-title"><b>Designation</b></h6>
                                    <input type="text" maxlength="25" name="thresholdconfig" class="form-control" id="thresholdconfig" />
                                </div>

                                <div class="m-t-20">
                                  <h6 class="sub-title"><b>Shift</b></h6>
                                      <select class="form-control">
                                        <option>Select</option>
                                        <option>Morning</option>
                                        <option>Night</option>
                                     </select>
                                 </div>

                                 <div class="m-t-20">
                                  <h6 class="sub-title"><b>Departement</b></h6>
                                      <select class="form-control">
                                        <option>Select</option>
                                        <option>Admin</option>
                                        <option>Developer</option>
                                        <option>Designer</option>
                                     </select>
                                 </div>
        
                                <div class="m-t-20">
                                    <h6 class="sub-title"><b>Password</b></h6>
                                    <input type="text" class="form-control" maxlength="25" name="alloptions" id="alloptions" />
                                </div>

                                <div class="m-t-20">
                                    <h6 class="sub-title"><b>Confirm Password</b></h6>
                                    <input type="text" class="form-control" maxlength="25" name="placement" id="placement" />
                                </div>

                                <div class="m-t-20">
                                    <h6 class="sub-title"><b>textareas</b></h6>
                                    <textarea id="textarea" class="form-control" maxlength="225" rows="3" placeholder="This textarea has a limit of 225 chars."></textarea>
                                </div>            
                            </div>
                        </div>
                    </div> <!-- end col -->

                    <div class="col-lg-3"></div> <!-- end col -->
                </div> <!-- end row -->     
            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->
</x-adminapp-layout>