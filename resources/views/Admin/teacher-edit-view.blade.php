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
                          
                        </div>
                    </div>
                </div>
                <!-- end page title end breadcrumb -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">

                                <h4 class="page-title">Designers</h4>
                                <p class="text-muted mb-4 font-14">Here are examples of <code
                                        class="highlighter-rouge">.form-control</code> applied to each
                                    textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                            class="highlighter-rouge">type</code>.</p>

                                <div class="form-group row">
                                    <label for="example-text-input" class="col-sm-2 col-form-label">Text</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="text" value="Artisanal kale" class="@error('name') is-invalid  @enderror" id="example-text-input" value="">
                                        @error('name')
                                        <span> {{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-search-input" class="col-sm-2 col-form-label">Search</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="example-email-input" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
                                    </div>
                                </div>
                                <button  type="submit" class="btn btn-success ml-2 text-right">Sign in</button>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div> <!-- end row -->
                            
              
            </div> <!-- end container -->
        </div>
</x-adminapp-layout>