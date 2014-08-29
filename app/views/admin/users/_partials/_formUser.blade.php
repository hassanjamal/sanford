<div id="userWizard">
            <div class="row">
                <div class="col-md-12">
                <ul class="nav nav-pills nav-justified thumbnail">
                    <li><a href="#tab-general" data-toggle="tab">General</a></li>
                    <li><a href="#tab-personal" data-toggle="tab">Personal</a></li>
                    <li><a href="#tab-bank" data-toggle="tab">Bank</a></li>
                    <li><a href="#tab-nominee" data-toggle="tab">Nominee</a></li>
                    @if($rootExist)
                    <li><a href="#tab-sponsor" data-toggle="tab">Sponsor</a></li>
                    @endif
                    <li><a href="#tab-payment" data-toggle="tab">Payment</a></li>
                </ul>
                </div>
            </div>
    <div class="tab-content">
        <div class="tab-pane" id="tab-general">
            <!-- package_id Form Input -->
            <div class="form-group">
                {{ Form::label('package_id', 'Package Name :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::select('package_id', $package,null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End package_id Form Input -->

            <!-- login_id Form Input -->
            <div class="form-group">
                {{ Form::label('login_id', 'ID :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9">
                    {{ Form::text('login_id',(isset($login_id)) ? $login_id : null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End login_id Form Input -->

            <!-- email Form Input -->
            <div class="form-group">
                {{ Form::label('email', 'Email :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9">
                    {{ Form::text('email',null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End email Form Input -->

            <!-- Password Form Input -->
            <div class="form-group">
                {{ Form::label('password', 'Password :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9">
                    {{ Form::password('password', ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End Password Form Input -->

            <!-- password_confirmation Form Input -->
            <div class="form-group">
                {{ Form::label('password_confirmation', 'Confirm Password :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9">
                    {{ Form::password('password_confirmation', ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End confirm_password Form Input -->
        </div>
        <div class="tab-pane" id="tab-personal">

            <!-- first_name Form Input -->
            <div class="form-group">
                {{ Form::label('first_name', 'First Name :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9">
                    {{ Form::text('first_name',null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End first_name Form Input -->

            <!-- last_name Form Input -->
            <div class="form-group">
                {{ Form::label('last_name', 'Last Name :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9">
                    {{ Form::text('last_name',null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End last_name Form Input -->

            <!-- mother_name Form Input -->
            <div class="form-group">
                {{ Form::label('mother_name', 'Mother Name :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('mother_name', null , ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End mother_name Form Input -->

            <!-- father_name Form Input -->
            <div class="form-group">
                {{ Form::label('father_name', 'Father Name :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('father_name', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End father_name Form Input -->

            <!-- date_of_birth Form Input -->
            <div class="form-group" id="dob">
                {{ Form::label('date_of_birth', 'Date Of Birth :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
            	    <div class='input-group date'>
            			<span class="input-group-addon">
            				<span class="glyphicon glyphicon-calendar"></span>
            			</span>
            		<input type='text' class="form-control" data-date-format="YYYY-MM-DD" name="date_of_birth" id="date_of_birth"/>
            	    </div>
            	</div>    
            </div>
            <!-- End date_of_birth Form Input -->

            <!-- nationality Form Input -->
            <div class="form-group">
                {{ Form::label('nationality', 'Nationality :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('nationality', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End nationality Form Input -->

            <!-- profession Form Input -->
            <div class="form-group">
                {{ Form::label('profession', 'Profession :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('profession', null , ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End profession Form Input -->

            <!-- address Form Input -->
            <div class="form-group">
                {{ Form::label('address', 'Address :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::textarea('address', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End address Form Input -->

            <!-- city Form Input -->
            <div class="form-group">
                {{ Form::label('city', 'City :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('city', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End city Form Input -->

            <!-- state Form Input -->
            <div class="form-group">
                {{ Form::label('state', 'State :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('state', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End state Form Input -->

            <!-- pincode Form Input -->
            <div class="form-group">
                {{ Form::label('pincode', 'Pincode :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('pincode', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End pincode Form Input -->
            
            <!-- std_code Form Input -->
            <div class="form-group">
                {{ Form::label('std_code', 'Std Code :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('std_code', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End std_code Form Input -->

            
            <!-- landline Form Input -->
            <div class="form-group">
                {{ Form::label('landline', 'Landline No :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('landline', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End landline Form Input -->

            <!-- mobile Form Input -->
            <div class="form-group">
                {{ Form::label('mobile', 'Mobile :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('mobile', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End mobile Form Input -->

            <!-- pan Form Input -->
            <div class="form-group">
                {{ Form::label('pan', 'Pan No :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('pan', null , ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End pan Form Input -->


        </div>


        {{-- End of General Deails --}}


        <div class="tab-pane" id="tab-bank">
            <!-- bank_name Form Input -->
            <div class="form-group">
                {{ Form::label('bank_name', 'Bank Name :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('bank_name', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End bank_name Form Input -->
            
            <!-- bank_branch Form Input -->
            <div class="form-group">
                {{ Form::label('bank_branch', 'Bank Branch :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('bank_branch', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End bank_branch Form Input -->
            
            <!-- bank_ifs_code Form Input -->
            <div class="form-group">
                {{ Form::label('bank_ifs_code', 'Bank IFS Code :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('bank_ifs_code', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End bank_ifs_code Form Input -->

            <!-- account_no Form Input -->
            <div class="form-group">
                {{ Form::label('account_no', 'Account No :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('account_no',null , ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End account_no Form Input -->
        </div>

        {{--End of Bank Details Tab--}}

        <div class="tab-pane" id="tab-nominee">

            <!-- nominee_name Form Input -->
            <div class="form-group">
                {{ Form::label('nominee_name', 'Nominee Name :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('nominee_name', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End nominee_name Form Input -->
            
            <!-- nominee_dob Form Input -->
            <div class="form-group">
                {{ Form::label('nominee_dob', 'Date Of Birth :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                        <div class='input-group date' >
            	    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
            		<input type='text' class="form-control" data-date-format="YYYY-MM-DD" id='nominee_dob' name="nominee_dob" />
            	    </div>
            	</div>    
            </div>
            <!-- End nominee_dob Form Input -->
            

            <!-- nominee_relation Form Input -->
            <div class="form-group">
                {{ Form::label('nominee_relation', 'Relation :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('nominee_relation', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End nominee_relation Form Input -->

        </div>

        {{--End Of Nominee Tab--}}

        @if($rootExist)
        <div class="tab-pane" id="tab-sponsor">
            <!-- parent_id Form Input -->
            <div class="form-group">
                {{ Form::label('parent_id', 'Parent Id :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9" id="remote">
                    {{ Form::text('parent_id',null , ['class' => 'form-control typeahead']) }}
                </div>
            </div>
            <!-- End parent_id Form Input -->

            <!-- sponsor_id Form Input -->
            <div class="form-group">
                {{ Form::label('sponsor_id', 'Sponsor Id :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9">
                    {{ Form::text('sponsor_id',null , ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End sponsor_id Form Input -->

        </div>
        @endif

        {{--End Of Sponsor Tab --}}

        <div class="tab-pane" id="tab-payment">
            <!-- amount Form Input -->
            <div class="form-group">
                {{ Form::label('amount', 'Amount :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('amount', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End amount Form Input -->

            <!-- dd_no Form Input -->
            <div class="form-group">
                {{ Form::label('dd_no', 'D.D. No :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('dd_no', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End dd_no_ Form Input -->

            <!-- dd_date Form Input -->
            <div class="form-group">
                {{ Form::label('dd_date', 'DD Date :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
            	    <div class='input-group date'>
            			<span class="input-group-addon">
            				<span class="glyphicon glyphicon-calendar"></span>
            			</span>
            			{{ Form::text('dd_date',null, ['class'=>'form-control', 'data-date-format'=>'YYYY-MM-DD']) }}
            	    </div>
            	</div>
            </div>
            <!-- End dd_date Form Input -->

            <!-- dd_drawn_date Form Input -->
            <div class="form-group">
                {{ Form::label('dd_drawn_date', 'Drawn Date :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
            	    <div class='input-group date'>
            			<span class="input-group-addon">
            				<span class="glyphicon glyphicon-calendar"></span>
            			</span>
            		{{ Form::text('dd_drawn_date',null, ['class'=>'form-control', 'data-date-format'=>'YYYY-MM-DD']) }}
            	    </div>
            	</div>
            </div>
            <!-- End dd_drawn_date Form Input -->


            <!-- insured_person Form Input -->
            <div class="form-group">
                {{ Form::label('insured_person', 'Insured Person :', ['class' => 'col-md-3 control-label ']) }}
                <div class="col-md-9 ">
                    {{ Form::text('insured_person', null, ['class' => 'form-control']) }}
                </div>
            </div>
            <!-- End insured_person Form Input -->

        </div>

        <ul class="pager wizard">
            <li class="previous"><a href="javascript:;">Previous</a></li>
            <li class="next"><a href="javascript:;">Next</a></li>
            {{--<li class="next finish" style="display:none;">{{ Form::submit('Submit', ['class' => 'btn btn-primary' , 'style' =>'float:right']) }}<li>--}}
            {{--<li class="next finish" style="display:none;"><a href="java">Finish</a></li>--}}
        </ul>
    </div>  
</div>
