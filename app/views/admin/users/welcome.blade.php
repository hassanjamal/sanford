<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,700' rel='stylesheet' type='text/css'>
<style>
body {
    height: 11.69in;
    overflow: hidden;
    width: 8.27in;
    font-family: 'Open Sans', sans-serif;
}

.main_content {
    height: 744px;
}

table.main {
    font-size: 75%;
    table-layout: fixed;
    width: 100%;
}

table.main {
    border-spacing: 0px;
}

table.main th, table.main td {
    padding: 0em;
    text-align: left;
}

hr {
    clear: both;
    margin: 0;
    border-top: 1px dotted #000 !important;
}

/* table */

table {
    font-size: 75%;
    table-layout: fixed;
    width: 100%;
}

table {
    border-collapse: separate;
    border-spacing: 1px;
}

th, td {
    border-width: 1px;
    padding: 0.5em;
    position: relative;
    text-align: left;
}

th {
    background: #EEE;
    border-color: #BBB;
}

td {
    border-color: #DDD;
}

table.welcome {
    margin-top: 12em;
}

table.welcome th {
    text-align: center;
    font-size: 90%
}

table.meta {
    margin-top: 2em;
    float: right;
    width: 36%;
}

table.meta th {
    width: 40%;
    border-bottom: 1px dashed darkgrey
}

table.meta td {
    width: 60%;
    border-bottom: 1px dashed darkgrey;
    padding-left: 1em;
}

table.maincontent {
    clear: both;
    float: left;
    width: 98%;

}

/* table meta */

table.meta th {
    width: 40%;
}

table.meta td {
    width: 60%;
}

table.maincontent th {
    height: 20px;
    width: 35%;
    text-align: right;
    background-color: transparent;
}

table.maincontent td {
    width: 65%;
    padding-left: 2em;
    font-size: 90%
}

table.meta:after, table.maincontent:after {
    clear: both;
    content: "";
    display: table;
}

table.signature {
    margin-top: 2em;
    clear: both;
    float: right;
    width: 40%;
}

table.signature strong, table.signature em {
}

table.signature td {
    text-align: center;
}

table.header {
    clear: both;
    width: 100%;
    position: fixed;
    height: 129px;
    background-color: lightblue;
    top: 0px;
    left: 0px;
    right: 0px;
    margin-bottom: 0px;
}

table.header th {
    width: 10%;
    padding-left: 20px;
    background-color: lightblue;
}

table.header td {
    padding-top: 5px;
    width: 90%;
    text-align: center;
    /*color: #f5f5f5;*/
    line-height: 16px;
}

table.footer {
    clear: both;
    width: 100%;
    position: fixed;
    height: 60px;
    background-color: lightblue;
    bottom: 0px;
    left: 0px;
    right: 0px;
    margin-bottom: 0px;
}

table.footer td {
    font-size: 60%;
    padding-left: 4em;
    /*color:lightgrey;*/
    font-style: italic;
    padding-bottom: 20px;
}

table.header h1 {
    font-family: 'Alegreya Sans SC', sans-serif;
    font-size: 28px;
    margin-bottom: 5px;
}

.pull-right {
    text-align: center;
    font-size: 90%;
}

.pull-right strong {
}

.pull-right em {
    color: grey
}

@page {
    margin: 0;
}

</style>
</head>
<body marginwidth="0" marginheight="0">
<table class="main">
    <tbody>
    <tr>
        <td>
            <table class="header">
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
        </td>
    </tr>
    <tr>
        <td>
            <table class="welcome">
                <tr>
                    <th>
                        WELCOME LETTER
                    </th>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="main_content">
            <address>
            </address>
            <table class="meta">
                <tr>
                    <th><span>Distributor ID : </span></th>
                    <td><span>{{ $user->login_id }}</span></td>
                </tr>
                <tr>
                    <th><span>Date</span></th>
                    <td><span>{{  date("d-M-Y") }}</span></td>
                </tr>
            </table>
            <table class="maincontent">
                <tr>
                    <td>
                        <p>Dear Mr/Mrs. <strong>{{ $user->first_name .' '. $user->last_name }}</strong>

                        <p>

                        <p>
                        <strong>Congratulations!!</strong> <br><br>
                        For having decided to be an <strong>SANFORD RETAIL PVT LTD.</strong> Marketing
                        partner. Your Distributor ID is <strong>{{$user->login_id }}</strong>.
                        </p>

                        <p>
                        Please find enclosed your Package Pack comprising the following :
                        <ol>
                            <li> {{$allPackage->description }}</li>
                            @foreach ($allPackage->packageitems as $packageitem)
                            <li>{{ $packageitem->description }}</li>
                            @endforeach

                        </ol>
                        </p>


                        <p>
                        SANFORD RETAIL PVT LTD. designed futuristic Career Plans for their valuable
                        Independent Marketing Distributors for their better life. Our Independent Marketing Distributors
                        are our True Family member &amp; Back bone of the Company .
                        </p>

                        <p>
                        From time to time we have proved ourselves to be the best in the industry and you will also
                        feel proud to be a part of our growing family.
                        </p>

                        <p>
                        We extend our best wishes for your Successful Future.
                        </p>

                        <p>
                        With wining regards,
                        </p>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td>
            <table class="signature">
                <tr>
                    <td class="pull-right">
                        <img src="" alt="signature">
                        <br>
                        concerned person 
                        <br>
                        <strong>Chief Operating Officier</strong>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <table class="footer">
            <tr>
                <td>
                    * Terms and condition apply <br>
                    * Please contact concerned branch for any query
                </td>
            </tr>
        </table>
    </tr>
    </tbody>
</table>
</body>

</html>
