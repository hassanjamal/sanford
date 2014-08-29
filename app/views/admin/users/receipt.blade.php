<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
{{--<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>--}}
{{--<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,700' rel='stylesheet' type='text/css'>--}}
<style>

body {
    height: 11.69in;
    overflow: hidden;
    width: 8.27in;
    font-family: 'Open Sans', sans-serif;
}

.main_content {
    margin-top: 135px auto;
    padding: 10px;
    /*width: 8in;*/
}

.in_words {
    margin-bottom: 2em;
    font-size: 85%;
}
.vertical-top{
    display: inline-block;
    vertical-align: top;
}

table.header, table.content, table.middle_table, table.signature {
    width: 100%;
    margin-bottom: 2em;
}

table.pre_header {
    clear: both;
    width: 100%;
    position: fixed;
    height: 129px;
    background-color: lightblue;
    top: 0px;
    left: 0px;
    right: 0px;
    margin-bottom: 0px;
    font-size: 75%;
}

table.pre_header th {
    width: 10%;
    padding-left: 20px;
    background-color: lightblue;
}

table.pre_header td {
    padding-top: 5px;
    width: 90%;
    text-align: center;
    line-height: 16px;
}

table.pre_header h1 {
    font-family: 'Alegreya Sans SC', sans-serif;
    font-size: 28px;
    margin-bottom: 5px;
}

table.header {
    font-size: 85%;
    font-style: bold;
}


table.content {
    font-size: 85%;
}

table.content th {
    width: 40%;
    text-align: left;
    padding-top: .3em;
}

table.content td {
    width: 60%;
    border-bottom: 1px dashed darkgrey;
    padding-left: 1em;
    padding-top: .3em;
}

table.middle_table {
    font: 92%;
    border: 1px dotted grey;
    border-spacing: -1px;
}


table.signature th {
    width: 60%;
}

table.signature td {
    width: 40%;
    font-size: 80%;
    text-align: center;
}

table.middle_table th {
    border: 1px dotted grey;
    padding-top: 4px;
    padding-bottom: 5px;
}

table.middle_table td {
    border: 1px dotted grey;
    text-align: center;
    vertical-align: top;
}

table.footer {
    clear: both;
    width: 100%;
    position: fixed;
    height: 150px;
    background-color: lightblue;
    bottom: 0px;
    left: 0px;
    right: 0px;
    margin-bottom: 0px;
}

table.footer td {
    font-size: 75%;
    padding-left: 10px;
    /*color:lightgrey;*/
    font-style: italic;
    /*padding-bottom: 20px;*/
}

table td > div {
    overflow: hidden;
    height: 20px;
}
table.footer td .footer-content {
    display: inline-block;
    padding-left: 20px; 
}    

.pull-right {
    clear: left;
    display: block;
    float: right;
    text-align: center;
    font-size: 90%;
    margin-top: 6em;
}

.pull-right strong {
    font-weight: bold
}

.pull-right em {
    font-style: italic;
    color: grey
}


@page {
    margin: 0;
}

</style>
</head>
<body marginwidth="0" marginheight="0">
<table class="pre_header">
    <tr>
        <th>
            <img src="" alt="logo">
        </th>
        <td>
            <h1>SanFord Retail Private Limited</h1>

            <p><em>Sanford Group</em><br>
            <strong>
                Address<br>
                Address<br>
                Address<br>
            </strong>
            </p>

        </td>
    </tr>
</table>
<div class="main_content">
    <table class="header">
        <tbody>
        <tr>
            <td style="background-color:#eee;">Invoice No :-
                <strong>
                    {{--{{ "REC-".$associate->branch_id."-".$associate->id."-".date("y")}}--}}
                </strong>
            </td>
            <td style="text-align:right; background-color:#eee">Dated :- <strong>
                    {{ date("d-M-Y") }}
                </strong>
            </td>
        </tr>
        </tbody>
    </table>
    <table class="content">
        <tbody>
        <tr>
            <th>Seller Name :-</th>
            <td>
                {{"SanFord Retail Private Limited"}}
            </td>

            <th>Buyer Name :-</th>
            <td>
                {{ $user->first_name .' '. $user->last_name }}
            </td>
        </tr>
        <tr>

            <th>Address :-</th>
            <td>
                {{ "address"}}
            </td>

            <th>Address :-</th>
            <td>
                {{$user->address}}
            </td>

        </tr>
        <tr>
            <th></th>
            <td>
                <div>
                    {{ "Patna , Bihar"}}
                </div>
            </td>

            <th></th>
            <td>
                <div>
                    {{ $user->city . ' ,'. $user->state }}
                </div>
            </td>

        </tr>
        <tr>
            <th></th>
            <td>
                <div>
                    {{ "800001"}}
                </div>
            </td>
            <th></th>
            <td>
                <div>
                    @if($user->pincode == 0)
                    {{ ' ' }}
                    @else
                    {{ $user->pincode }}
                    @endif
                </div>
            </td>
        </tr>

        </tbody>
    </table>
    <table class="middle_table">
        <tbody>
        <tr>
            <th style="width: 5%">S.No</th>
            <th style="width: 45%">Description Of Good</th>
            <th style="width: 15%">Quantity</th>
            <th style="width: 15%">Rate</th>
            <th style="width: 5%">Per</th>
            <th style="width: 15%">Amount</th>
        </tr>
        <?php $counter = 1 ?>

        <tr>
            <td>
                    {{ "1"  }}
            </td>
            <td style="text-align: left">
                <strong>{{ $allPackage->description }}</strong><br>
                <strong>{{'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. "Complementory Items" }}</strong><br>
                @foreach($allPackage->packageitems as $packageItem)
                {{'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'.$counter.'- '. $packageItem->description}}
                {{ "<br>" }}
                <?php $counter++ ?>
                @endforeach
            </td>
            <td >
                {{ number_format($allPackage->quantity) }}
            </td>
            <td style="text-align: right">
                {{ number_format($allPackage->rate)}}
            </td>
            <td>
                {{ "No."}}
            </td>
            <td style="text-align: right">
                {{ number_format($allPackage->value)}}
            </td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: right"><strong>Total :-</strong></td>
            <td></td>
            <td></td>
            <td></td>
            <td style="text-align: right">{{ number_format($allPackage->value)}}</td>
        </tr>
        <tr>
        </tr>
        </tbody>
    </table>
    <div class="in_words">
        <span>Dear Mr/Mrs {{ $user->first_name.' '.$user->last_name }} . Thanks a lot for making  payment of Rs.
            {{ number_format($allPackage->value)}}
            <strong>
                {{ '( '.Str::title(apphelper::convert_number_to_words(round($allPackage->value))) . ' Only )' }}
                </strong>
                {{ ' in Words'}}
            </span>
    </div>
    <table class="signature">
        <tbody>
        <tr>
            <th></th>
            <td>
                <strong>Signature of Authority</strong>
                <br>
                <em>
                    {{ '( '.Sentry::getUser()->first_name . ' '. Sentry::getUser()->last_name.' )'}}
                </em>
                <br>
                For SANFORD RETAIL PVT LTD.
            </td>
        </tr>
        </tbody>
    </table>   
</div>
<table class="footer">
        <tbody>
        <tr>
            <td>
            <strong>DISCLAIMER :-</strong><br>
            <span>
            &nbsp;&nbsp;&nbsp;&nbsp;* We declare that this Invoice shows the actual price of the goods described and that all particulars are true and correct..</span>
            </td>
        </tr>
        <tr>
            <td>
                <strong>TERMS & CONDITIONS :-</strong><br>
                <span>
                &nbsp;&nbsp;&nbsp;&nbsp;* Terms and condition apply <br>
                &nbsp;&nbsp;&nbsp;&nbsp;* No guarantee of pilling <br>
                &nbsp;&nbsp;&nbsp;&nbsp;* Goods once sold will not be taken back <br>
                &nbsp;&nbsp;&nbsp;&nbsp;* Goods once sold will not be exchanged <br>
                &nbsp;&nbsp;&nbsp;&nbsp;* Goods once delivered from our office we will not be responsible for any damage</span>
            </td>
        </tr>
        </tbody>
    </table>
</body>

</html>




