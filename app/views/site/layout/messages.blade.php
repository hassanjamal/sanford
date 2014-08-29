@if ( Session::has('message') )
    <div class="alert alert-success alert-dismissable text-left">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>{{ Session::get('message') }}</p>
    </div>
@endif

@if ( Session::has('error') )
    <div class="alert alert-warning alert-dismissable text-left">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>{{ Session::get('error') }}</p>
    </div>
@endif

@if ( $errors->count() > 0 )
    <div class="alert alert-warning alert-dismissable text-left">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <p>The following errors have occurred:</p>

        <ul>
            @foreach( $errors->all() as $message )
                <li>{{ $message }}</li>
            @endforeach
        </ul>
    </div>
@endif