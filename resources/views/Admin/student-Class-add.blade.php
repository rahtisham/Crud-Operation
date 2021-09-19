<x-adminapp-layout>
        <div class="wrapper">
            <div class="container-fluid">
<style>
    .ui-datepicker-calendar {
    display: none;
    }
</style>
<script>
          $('.date-own').datepicker({
         minViewMode: 2,
         format: 'yyyy'
       });
</script>
              <!-- Modal -->
              <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">ADD STUDENT'S CLASS</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="post" action="{{ route('student-class-add') }}">
                                @csrf
                                <div class="card-body">
                                    <div class="m-t-20">
                                       <select id="sel" name="studentID" class="form-control" required>
                                            @foreach($studentID as $studentIds)
                                            @if("")
                                            {{'<option>name</option>'}}
                                            @else
                                            <option value="{{ $studentIds->id }}">{{ $studentIds->id }}   {{  $studentIds->name  }}</option>
                                            @endif
                                            @endforeach
                                        </select>
                                    </div> 
                                    @foreach($studentID as $studentIds)
                                    <input type="hidden" name="studentName" value="{{ $studentIds->name }}" class="form-control">
                                    @endforeach

                                    <div class="m-t-20">
                                        <select id="sel" name="studentSection" class="form-control" required>
                                            <option>Section</option>
                                            <option value="A">A</option>
                                            <option value="B">B</option>
                                        </select>    
                                    </div> 

                                    <div class="m-t-20">
                                        <select id="sel" name="class" class="form-control" required>
                                            <option>Class</option>
                                            <option value="One">One</option>
                                            <option value="Two">Two</option>
                                            <option value="Three">Three</option>
                                            <option value="Four">Four</option>
                                            <option value="Five">Five</option>
                                            <option value="Six">Six</option>
                                            <option value="Seven">Seven</option>
                                            <option value="Eight">Eight</option>
                                            <option value="Nine">Nine</option>
                                            <option value="Ten">Ten</option>
                                        </select>
                                    </div>  

                                    <div class="m-t-20">
                                        <select id="sel" name="year" class="form-control" required>
                                            <option>Seclect Year</option>
                                            <option value="2010">2010</option>
                                            <option value="2011">2011</option>
                                            <option value="2012">2012</option>
                                            <option value="2013">2013</option>
                                            <option value="2014">2014</option>
                                            <option value="2015">2015</option>
                                            <option value="2016">2016</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                        </select>
                                    </div>  
<!--                                     
                                    <div class="m-t-20">
                                        <input class="date-own form-control" name="year" style="width: 100%;" type="date" required>
                                    </div>  -->
                                    
                                    <div class="m-t-20">
                                        <select id="sel" name="status" class="form-control" required>
                                            <option>Status</option>
                                            <option value="Active Now">Active</option>
                                        </select>    
                                    </div> 
                                    
                                    <br>
                                    <span class="input-group-append">
                                    <input type="submit" id="check-minutes" value="ADD STUDENT CLASS" class="btn btn-primary"></input>
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

                <div class="row ">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="page-title">
                                <i class="mdi mdi-calendar-today title_icon"></i> STUDENT CLASS ADD &nbsp;&nbsp;&nbsp;&nbsp; <button  type="button" class="btn btn-outline-primary btn-rounded alignToTitle" data-toggle="modal" data-target="#exampleModalCenter"> <i class="mdi mdi-plus"></i> Student Class Add</button>
                                </h4>
                            </div> <!-- end card body-->
                        </div> <!-- end card -->
                    </div><!-- end col-->
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card" data-select2-id="158"  style="padding-bottom: 30px;">
                           <form action="{{ route('student-class-add-view') }}">
                                <div class="row mt-3">
                                    <div class="col-md-1 mb-1"></div>
                                        <div class="col-md-4 mb-1" data-select2-id="157">
                                            <select name="class" id="class_id" class="form-control select2 select2-hidden-accessible form-label" data-toggle="select2" required="" onchange="classWiseSection(this.value)" data-select2-id="class_id" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="2">Select a class</option>
                                                    <option value="One" data-select2-id="162">One</option>
                                                    <option value="Two" data-select2-id="163">Two</option>
                                                    <option value="Three" data-select2-id="164">Three</option>
                                                    <option value="Four" data-select2-id="165">Four</option>
                                                    <option value="Five" data-select2-id="166">Five</option>
                                                    <option value="Six" data-select2-id="167">Six</option>
                                                    <option value="Seven" data-select2-id="168">Seven</option>
                                                    <option value="Eight" data-select2-id="169">Eight</option>
                                                    <option value="Nine" data-select2-id="170">Nine</option>
                                                    <option value="Ten" data-select2-id="171">Ten</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 mb-1" data-select2-id="174">
                                            <select name="section" id="section_id" class="form-control select2 select2-hidden-accessible form-label" data-toggle="select2" required=""  data-select2-id="section_id" tabindex="-1" aria-hidden="true">
                                                <option value="" data-select2-id="4">Select section</option>
                                                <option value="A" data-select2-id="4">A</option>
                                                <option value="B" data-select2-id="4">B</option>
                                            </select>
                                        </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-block btn-secondary" onclick="filter_class_routine()">Filter</button>
                                    </div>
                                    
                                </div>
                            </form>
                        </div>
                    </div>


                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body department_content">
                                <div id="basic-datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                    <div class="row">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="dataTables_length" id="basic-datatable_length"><label>Show <select name="basic-datatable_length" aria-controls="basic-datatable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div></div><div class="col-sm-12 col-md-6"><div id="basic-datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="basic-datatable"></label></div></div></div><div class="row"><div class="col-sm-12"><div style="position: absolute; height: 1px; width: 0px; overflow: hidden;"><input type="text" tabindex="0"></div><table id="basic-datatable" class="table table-striped dt-responsive dataTable no-footer dtr-inline" width="100%" role="grid" aria-describedby="basic-datatable_info" style="width: 100%; position: relative;">
                                        <thead>
                                            <tr style="background-color: #313a46; color: #ababab;" role="row"><th class="sorting_asc">ID</th>
                                            <th class="sorting" rowspan="1">Student Name</th>
                                            <th class="sorting" rowspan="2">RegID</th>
                                            <th class="sorting" rowspan="2">Year</th>
                                            <th class="sorting" rowspan="2">Class</th>
                                            <th class="sorting" rowspan="2">Status</th>
                                            <th class="sorting" rowspan="2">Options</th>
                                        </tr>

                                        
                                        </thead>
                                        <tbody>	
                                      
                                            @foreach($searchStudeent as $studentClassAddView)
                                                <tr role="row" class="odd">
                                                    <td tabindex="0" class="sorting_1">{{ $studentClassAddView->stduentClass_id }}</td>
                                                    <td tabindex="0" class="sorting_1">{{ $studentClassAddView->studentName }}</td>
                                                    <td tabindex="0" class="sorting_1">MAW{{ $studentClassAddView->studentId }}</td>
                                                    <td tabindex="0" class="sorting_1">{{ $studentClassAddView->year }}</td>
                                                    <td tabindex="0" class="sorting_1">{{ $studentClassAddView->class }}</td>
                                                    <td tabindex="0" class="sorting_1">{{ $studentClassAddView->status }}</td>
                                                    
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