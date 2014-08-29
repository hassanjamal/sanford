@extends('admin.layouts.master')
@section('pageHeading')
{{ "Details for User having ID : ". $user->login_id }}
@stop
@section('content')
<div class="row">
    <div class="content">
        <div class="col-xs-8">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Tree Structure</h3>
                </div>
                <div class="panel-body">
                    <div id="infovis">
                    </div>
                </div>
                <div class="panel-footer">
                </div>
            </div>

        </div>
        <div class="col-xs-4">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">User Pair Details</h3>
                </div>
                <div class="panel-body">
                    <blockquote>
                        <h4>{{ 'First Leg :'}} {{ $childNode[0] or 0 }}</h4>
                    </blockquote>
                    <blockquote>
                        <h4>{{ 'Second Leg : '}} {{ $childNode[1] or 0 }}</h4>
                    </blockquote>
                </div>
                <div class="panel-footer">
                </div>
            </div>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">User Pair Payment Details</h3>
                </div>
                <div class="panel-body">

                    @if($payments)

                    @else
                    <blockquote>
                        <h4>{{ "No Payments Yet !!!  " }}</h4>
                    </blockquote>
                    <a href="" class="btn btn-success btn-block">Make Payment</a>
                    @endif
                    <a href="{{ route('admin.user.payment.index', $user->id) }}" class="btn btn-primary btn-block">All Payment</a>
                </div>
                <div class="panel-footer">
                </div>
            </div>
        </div>
    </div>
</div>
@stop
