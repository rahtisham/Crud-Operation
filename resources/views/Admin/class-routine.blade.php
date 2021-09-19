<x-adminapp-layout>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <div class="wrapper">
        <div class="container-fluid">
                   <!-- Page-Title -->
                <div class="row ">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="page-title">
                                <i class="mdi mdi-calendar-today title_icon"></i> CLASS ROUTINE &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <button  type="button" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-outline-primary btn-rounded alignToTitle" onclick="rightModal('https://demo.creativeitem.com/ekattor/modal/popup/routine/create', 'Create routine')"> <i class="mdi mdi-plus"></i> Add class Routine </button>
                                </h4>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <!-- end page title end breadcrumb -->

              <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">CLASS ROUTINE</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form>
                                
                                <div class="card-body">

                                    <div class="m-t-20">
                                        <select name="classSelect" id="classSelect" required="" class="select2 form-control mb-3 custom-select class" data-dependent="section">
                                        <option>Select Class</option>
                                        @foreach($classAssignToTeacher as $classAssignToTeacher)
                                        <option value="{{ $classAssignToTeacher->className }}">{{ $classAssignToTeacher->className }}</option>
                                        @endforeach
                                        </select> 
                                        <span id="classSelect"></span>
                                        @error('classSelect')
                                        <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                    </div>

                                    <input type="hidden" id="token" value="{{ csrf_token() }}">

                                    <div class="m-t-20">
                                        <select name="section" id="section" class="select2 form-control mb-3 custom-select dynamic" data-dependent="subject">
                                        <option>Section</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        </select> 
                                    </div>

                                    <div class="m-t-20">
                                        <select name="subject" id="subject" class="select2 form-control mb-3 custom-select dynamic" data-dependent="city">
                                        <option value="">Select Subject</option>
                                        </select> 
                                    </div>

                                    <div class="m-t-20">
                                        <select name="teacher" id="teacher" class="select2 form-control mb-3 custom-select">
                                        <option>Select Teacher</option>
                                        @foreach($TeacherClassAssign as $TeacherClassAssign)
                                        <option value="{{ $TeacherClassAssign->name }}">{{ $TeacherClassAssign->name }}</option>
                                        @endforeach
                                        </select> 
                                    </div>

                                    <div class="m-t-20">
                                        <select name="classroom" id="classroom" class="select2 form-control mb-3 custom-select">
                                        <option>Class Room</option>
                                        @foreach($classRoom as $classRooms)
                                        <option value="{{ $classRooms->classRoom }}">{{ $classRooms->classRoom }}</option>
                                        @endforeach
                                        </select> 
                                    </div>

                                    <div class="m-t-20">
                                        <select name="days" id="days" class="select2 form-control mb-3 custom-select">
                                        <option>Select a Day</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thusday">Thusday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                        </select> 
                                    </div>

                                    <div class="m-t-20">
                                        <select name="statingHour" id="statingHour" class="select2 form-control mb-3 custom-select">
                                        <option>Starting Hour</option>
                                        <option value="12 AM">12 AM</option>
                                        <option value="1 AM">1 AM</option>
                                        <option value="2 AM">2 AM</option>
                                        <option value="3 AM">3 AM</option>
                                        <option value="4 AM">4 AM</option>
                                        <option value="5 AM">5 AM</option>
                                        <option value="6 AM">6 AM</option>
                                        <option value="7 AM">7 AM</option>
                                        <option value="8 AM">8 AM</option>
                                        <option value="9 AM">9 AM</option>
                                        <option value="10 AM">10 AM</option>
                                        <option value="11 AM">11 AM</option>
                                        <option value="12 PM">12 PM</option>
                                        <option value="1 PM">1 PM</option>
                                        <option value="2 PM">2 PM</option>
                                        <option value="3 PM">3 PM</option>
                                        <option value="4 PM">4 PM</option>
                                        <option value="5 PM">5 PM</option>
                                        <option value="6 PM">6 PM</option>
                                        <option value="7 PM">7 PM</option>
                                        <option value="8 PM">8 PM</option>
                                        <option value="9 PM">9 PM</option>
                                        <option value="10 PM">10 PM</option>
                                        <option value="11 PM">11 PM</option>
                                        </select> 
                                    </div>

                                    <div class="m-t-20">
                                        <select name="startingMinut" id="startingMinut" class="select2 form-control mb-3 custom-select">
                                        <option>Ending Minuts</option>
                                        <option value="0">0</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="30">30</option>
                                        <option value="35">35</option>
                                        <option value="40">40</option>
                                        <option value="45">45</option>
                                        <option value="50">50</option>
                                        <option value="55">55</option>
                                        <option value="60">60</option>
                                        </select> 
                                    </div>

                                    <div class="m-t-20">
                                        <select name="endingHour" id="endingHour" class="select2 form-control mb-3 custom-select" required>
                                        <option>Ending Hour</option>
                                        <option value="12 AM">12 AM</option>
                                        <option value="1 AM">1 AM</option>
                                        <option value="2 AM">2 AM</option>
                                        <option value="3 AM">3 AM</option>
                                        <option value="4 AM">4 AM</option>
                                        <option value="5 AM">5 AM</option>
                                        <option value="6 AM">6 AM</option>
                                        <option value="7 AM">7 AM</option>
                                        <option value="8 AM">8 AM</option>
                                        <option value="9 AM">9 AM</option>
                                        <option value="10 AM">10 AM</option>
                                        <option value="11 AM">11 AM</option>
                                        <option value="12 PM">12 PM</option>
                                        <option value="1 PM">1 PM</option>
                                        <option value="2 PM">2 PM</option>
                                        <option value="3 PM">3 PM</option>
                                        <option value="4 PM">4 PM</option>
                                        <option value="5 PM">5 PM</option>
                                        <option value="6 PM">6 PM</option>
                                        <option value="7 PM">7 PM</option>
                                        <option value="8 PM">8 PM</option>
                                        <option value="9 PM">9 PM</option>
                                        <option value="10 PM">10 PM</option>
                                        <option value="11 PM">11 PM</option>
                                        </select> 
                                    </div>

                                    <div class="m-t-20">
                                        <select name="engdingMinut" id="engdingMinut" class="select2 form-control mb-3 custom-select">
                                        <option>Ending Minuts</option>
                                        <option value="0">0</option>
                                        <option value="5">5</option>
                                        <option value="10">10</option>
                                        <option value="15">15</option>
                                        <option value="20">20</option>
                                        <option value="25">25</option>
                                        <option value="30">30</option>
                                        <option value="35">35</option>
                                        <option value="40">40</option>
                                        <option value="45">45</option>
                                        <option value="50">50</option>
                                        <option value="55">55</option>
                                        <option value="60">60</option>
                                        </select> 
                                    </div>
                                    
                                    <br>
                                    <span class="input-group-append">
                                    <button type="submit" class="btn btn-block btn-secondary btn-classRoutin">CLASS ROUTINE</button>
                                    </span>   
                                </div> 
                            </form>   
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn-sm btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                                   @if(\Session::has('success'))
                                    <div class="alert alert-success">
                                    <p>{{ \Session::get('success') }}</p>
                                    </div>
                                    @endif
                            <div class="card-body department_content">
                                <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="basic-datatable_length"><label>Show <select name="basic-datatable_length" aria-controls="basic-datatable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="basic-datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="basic-datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text" tabindex="0"></div><table id="basic-datatable" class="table table-striped dt-responsive dataTable no-footer dtr-inline" width="100%" role="grid" aria-describedby="basic-datatable_info" style="width: 100%; position: relative;">
                                        <thead>
                                            <tr style="background-color: #313a46; color: #ababab; text-align: center;" role="row"><th class="sorting_asc">ID</th>
                                            <th class="sorting" rowspan="1">CLASS</th>
                                            <th class="sorting" rowspan="1">SUBJECT</th>
                                            <th class="sorting" rowspan="1">SECTION</th>
                                            <th class="sorting" rowspan="1">TEACHER</th>
                                            <th class="sorting" rowspan="1">ROOM NO</th>
                                            <th class="sorting" rowspan="1">DAYS</th>
                                            <th class="sorting" rowspan="1">STARTING HOURS</th>
                                            <th class="sorting" rowspan="1">STARTING MINUTS</th>
                                            <th class="sorting" rowspan="1">ENDING HOURS</th>
                                            <th class="sorting" rowspan="1">ENDING MINUTS</th>
                                            <th class="sorting" rowspan="1">Option</th>
                                        </tr>
                                        
                                        </thead>
                                        <tbody>	
                                            @foreach($classRoutine as $ViewclassRoutine)
                                                <tr role="row" class="odd" style="text-align: center;">
                                                    <td tabindex="0" class="sorting_1">{{ $ViewclassRoutine->classRoutine_id }}</td>
                                                    <td tabindex="0" class="sorting_1">{{ $ViewclassRoutine->class }}</td>
                                                    <td tabindex="0" class="sorting_1">{{ $ViewclassRoutine->subject }}</td>
                                                    <td tabindex="0" class="sorting_1">{{ $ViewclassRoutine->section }}</td>
                                                    <td tabindex="0" class="sorting_1">{{ $ViewclassRoutine->teacher }}</td>
                                                    <td tabindex="0" class="sorting_1">{{ $ViewclassRoutine->classRoom }}</td>
                                                    <td tabindex="0" class="sorting_1">{{ $ViewclassRoutine->days }}</td>
                                                    <td tabindex="0" class="sorting_1">{{ $ViewclassRoutine->statingHour }}</td>
                                                    <td tabindex="0" class="sorting_1">{{ $ViewclassRoutine->startingMinut }}</td>
                                                    <td tabindex="0" class="sorting_1">{{ $ViewclassRoutine->endingHour }}</td>
                                                    <td tabindex="0" class="sorting_1">{{ $ViewclassRoutine->endingMinut }}</td>
                                                    
                                                    <td>
                                                        <div class="dropdown text-center">
                                                            <button type="button" class="btn btn-sm btn-icon btn-rounded btn-outline-secondary dropdown-btn dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-vertical"></i></button>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <!-- item-->
                                                                <a href="javascript:void(0);" class="dropdown-item" onclick="rightModal('https://demo.creativeitem.com/ekattor/modal/popup/department/edit/10', 'Update department');">Edit</a>
                                                                <!-- item-->
                                                                <a href="javascript:void(0);" class="dropdown-item" onclick="confirmModal('https://demo.creativeitem.com/ekattor/admin/department/delete/10', showAllDepartments)">Delete</a>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                             @endforeach   
                                        </tbody>
                                    </table>
                                </div>
                             </div>
                              <div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="basic-datatable_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="basic-datatable_paginate"><ul class="pagination pagination-rounded"><li class="paginate_button page-item previous disabled" id="basic-datatable_previous"><a href="#" aria-controls="basic-datatable" data-dt-idx="0" tabindex="0" class="page-link"><i class="mdi mdi-chevron-left"></i></a></li><li class="paginate_button page-item active"><a href="#" aria-controls="basic-datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a></li><li class="paginate_button page-item next disabled" id="basic-datatable_next"><a href="#" aria-controls="basic-datatable" data-dt-idx="2" tabindex="0" class="page-link"><i class="mdi mdi-chevron-right"></i></a></li></ul></div></div></div></div>
                            </div>
                        </div>
                    </div>

                </div><!--end of row-->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

</x-adminapp-layout>

