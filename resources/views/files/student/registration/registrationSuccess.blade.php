@include('layouts.head')
@extends('layouts.header')

@section('content')

<div class="container">
    <div class="row">
        <div class="panel panel-info">
            <div class="panel-body">
                <h3>Dear <b>{{ $studentdetail->fatherfirstname }}</b></h3>
                <p class="h4" style="line-height: 22px;"><b>{{ $studentdetail->firstname }}</b> is successfully registered in our system. 
                    Our admission team will contact you in next 24-36 hours. You do not need 
                    to submit this form again at any of our campus. Please keep the following 
                    details safe, however, an email with these would be sent to you shortly. </p>
            </div>
            <div class="panel-heading h4">Confirmation No: <b>{{ $studentdetail->registrationnumber }}</b></div>
            <table class="table" border="1" rules="all">
                <tr>
                    <td width="300">Student Name :</td>
                    <td><b>{{ $studentdetail->firstname }}</b></td>
                </tr>
                 <tr>
                    <td>Father's Name :</td>
                    <td><b>{{ $studentdetail->fatherfirstname }}</b></td>
                </tr>
                 <tr>
                    <td>Class :</td>
                    <td><b>{{$studentdetail->classopted }}</b></td>
                </tr>
                 <tr>
                    <td>Address :</td>
                    <td><b>{{$studentdetail->currentaddress1 }}, &nbsp; 
                    {{$studentdetail->currentsuburb }}, &nbsp;
                    {{$studentdetail->currentpincode }}, &nbsp;
                    {{$studentdetail->currentcity }}, &nbsp;
                    {{$studentdetail->currentstate }}, &nbsp;
                    {{$studentdetail->currentcountry }}</b>
                    </td>
                    {{ $studentdetail->siblingscholarnumber }}
                    
                </tr>
                 <tr>
                    <td>Campus(s) :</td>
                    <td><b>{{ $studentdetail->branchopted }}</b></td>
                </tr>
            </table>
        </div>
    </div>
</div>

@endsection