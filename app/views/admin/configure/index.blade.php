@extends('account.master')

@section('content')

    <div class="layout layout-main-right layout-stack-sm">
        <div class="col-md-3 col-sm-4 layout-sidebar">
            <div class="nav-layout-sidebar-skip">
                <strong>Tab Navigation</strong> / <a href="#settings-content">Skip to Content</a>
            </div>

            <ul id="myTab" class="nav nav-layout-sidebar nav-stacked">
                <li class="active">
                    <a href="#category-tab" data-toggle="tab">
                        <i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Category
                    </a>
                </li>
                <li>
                    <a href="#category-extra-tab" data-toggle="tab">
                        <i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Category Extra
                    </a>
                </li>
                <li>
                    <a href="#category-group-extra-tab" data-toggle="tab">
                        <i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Category Extra Group
                    </a>
                </li>
                <li>
                    <a href="#construction-tab" data-toggle="tab">
                        <i class="fa fa-chevron-right"></i>&nbsp;&nbsp;Construction
                    </a>
                </li>
            </ul>
        </div> <!-- /.col -->


        <div class="col-md-9 col-sm-8 layout-main">
            @if(Session::has('success'))
            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert">&times;</a>
                <span class="lead">Success! {{ Session::get('success') }}</span>
            </div>
            @endif
            <div id="settings-content" class="tab-content stacked-content">
                <div class="tab-pane fade in active" id="category-tab">
                    <h3 class="content-title"><u>Category</u></h3>
                    @include('layouts.messages')
                    <form action="{{ route('category') }}" method="POST" class="form-horizontal" id="form-category">
                        {{ Form::token() }}
                        <hr>
                        <div class="form-group">
                            <label class="col-md-3">Category</label>
                            <div class="col-md-7">
                                <input type="text" name="category" value="" class="form-control" placeholder="Enter Category" />
                            </div> <!-- /.col -->
                        </div>

                        
                        
                        <div class="form-group">
                            <div class="col-md-7 col-md-push-3">
                                <button type="reset" id="resetBtn" class="btn btn-info">Reset</button>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </div> <!-- /.col -->
                        </div>

                    </form>
                </div> <!-- /.tab-pane -->


                <div class="tab-pane fade" id="category-extra-tab">
                    <h3 class="content-title"><u>Category Extra</u></h3>
                    @include('layouts.messages')
                    {{--@if($categories >0) --}}
                    <form action="{{ route('category-extra') }}" method="POST" class="form-horizontal" > 
                        {{-- {{ Form::token() }} --}}
                        <div id="extra_category">
                                <!-- Form template-->
                                <div id="extra_category_template" class="form-group">
                                    <label for="extra_category_#index#_category" class="col-md-3">Extra <span id="extra_category_label"></span></label>
                                    <div class="col-md-7">
                                        <input id="extra_category_#index#_category" name="category_extra[#index#][category]" type="text" size="15" maxlength="100" class="form-control" placeholder="Enter Extra Details " />
                                    </div>
                                    <div class="col-md-2">
                                        <h3 class="text-danger"><i id="extra_category_remove_current" class="fa fa-minus-square"></i></h3>
                                    </div>
                                </div>
                                <!-- /Form template-->
                                <!-- No forms template -->
                                <div id="extra_category_noforms_template">No Extra</div>
                                <!-- /No forms template-->
                                <!-- Controls -->
                                <div id="extra_category_controls" class="form-group">
                                    <div class="col-md-7 col-md-push-3">
                                        <button  id="extra_category_add" class="btn btn-info"><i class="fa fa-plus"></i> Add Extra</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                                <!-- /Controls -->
                        </div>
                        
                    </form>
                    {{--@else
                    <div class="alert alert-warning">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <span class="lead">Please enter Category first</span>
                    </div>
                    @endif --}}
                </div>





                <div class="tab-pane fade" id="category-group-extra-tab">
                    <h3 class="content-title"><u>Category Group Extra</u></h3>
                    @include('layouts.messages')
                    {{--@if($categories >0) --}}
                    <form action="{{ route('category-group-extra') }}" method="POST" class="form-horizontal"> 
                        {{-- {{ Form::token() }} --}}
                        <div id="group_extra_category">
                                <!-- Form template-->
                                <div id="group_extra_category_template" class="form-group">
                                    <label for="group_extra_category_#index#_category" class="col-md-3">Group Extra <span id="group_extra_category_label"></span></label>
                                    <div class="col-md-7">
                                        <input id="group_extra_category_#index#_category" name="category_group_extra[#index#][category]" type="text" size="15" maxlength="100" class="form-control" />
                                    </div>
                                    <div class="col-md-2">
                                        <h3 class="text-danger"><i id="group_extra_category_remove_current" class="fa fa-minus-square"></i></h3>
                                    </div>
                                </div>
                                <!-- /Form template-->
                                <!-- No forms template -->
                                <div id="group_extra_category_noforms_template">No Extra</div>
                                <!-- /No forms template-->
                                <!-- Controls -->
                                <div id="group_extra_category_controls" class="form-group">
                                    <div class="col-md-7 col-md-push-3">
                                        <button  id="group_extra_category_add" class="btn btn-info"><i class="fa fa-plus"></i> Add Extra</button>
                                        <button type="submit" class="btn btn-primary">Save Changes</button>
                                    </div>
                                </div>
                                <!-- /Controls -->
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-7 col-md-push-3">
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->
                    </form>
                    {{--@else
                    <div class="alert alert-warning">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <span class="lead">Please enter Category first</span>
                    </div>
                    @endif --}}
                </div>


                <div class="tab-pane fade" id="construction-tab">
                    <h3 class="content-title"><u>Construction / Style</u></h3>
                    @include('layouts.messages')
                    @if($categories >0)
                    <form action="{{ route('construction') }}" method="POST" class="form-horizontal" id="form-construction"> 
                        {{ Form::token() }}
                        <hr>
                        <div class="form-group">
                            <label class="col-md-3">Category</label>
                            <div class="col-md-7">
                                <input type="text" name="category" value="" class="form-control" placeholder="Enter Category" />
                            </div> <!-- /.col -->
                        </div>

                        <div class="form-group">
                            <label class="col-md-3">Construction</label>
                            <div class="col-md-7">
                                <input type="text" name="construction" value="" class="form-control" placeholder="Enter Construction" />
                            </div> <!-- /.col -->
                        </div>
                        <div class="form-group">
                            <div class="col-md-7 col-md-push-3">
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                                <button type="reset" id="resetBtn" class="btn btn-warning">Reset</button>
                            </div> <!-- /.col -->
                        </div> <!-- /.form-group -->
                    </form>
                    @else
                    <div class="alert alert-warning">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <span class="lead">Please enter Category first</span>
                    </div>
                    @endif
                </div> <!-- /.tab-pane -->
            </div> <!-- /.tab-content -->
        </div> <!-- /.col -->
    </div> <!-- /.row -->
@stop

@section('foot')
    <!--[if lt IE 9]>
        <script src="./js/libs/excanvas.compiled.js"></script>
    <![endif]-->
    <!-- App JS -->
    <script src="{{ asset('assets/js/bootstrapValidator.min.js') }}"></script>
    <script src="{{ asset('assets/js/category_validator.js') }}"></script>
    <script src="{{ asset('assets/js/construction_validator.js') }}"></script>
    <!--  jquery for dynamic form -->
    <script src="{{ asset('assets/js/jquery.sheepItPlugin.js') }}"></script>
    <script src="{{ asset('assets/js/dynamic_input.js') }}"></script>
@stop
