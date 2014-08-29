<!-- password Form Input -->
<div class="form-group">
    {{ Form::label('password', 'Password :', ['class' => '']) }}
    <div class="">
        {{ Form::password('password', ['class' => 'form-control']) }}
    </div>
</div>
<!-- End password Form Input -->

<!-- confirm_password Form Input -->
<div class="form-group">
    {{ Form::label('confirm_password', 'Confirm Password :', ['class' => '']) }}
    <div class="">
        {{ Form::password('confirm_password', ['class' => 'form-control']) }}
    </div>
</div>
<!-- End confirm_password Form Input -->

