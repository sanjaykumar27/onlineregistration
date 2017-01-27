@include('layouts.head')
@extends('layouts.header')

@section('content')


<div class="container" style="background-color: #fff;border-radius: 20px;">
    <br>
    <h4 >Dear <b>{{$studentdetail->fatherfirstname }} </b>,

        please confirm all details provided are valid and correct before proceeding.</h4>
    {!! Form::open(['url' => 'store']) !!}
    <br>
    <hr class="style17"><br>

    <table class="table" border="2"  rules='all'>
        <tr>
            <td class="success h4" colspan="6"><b>General Details</b></td>
        </tr>

        <tr>
            <td>Student Name </td>
            <td><b>
            {{$studentdetail->firstname }} {{ $studentdetail->middlename }} {{ $studentdetail->lastname  }}</b>
            {{ Form::hidden('firstname',$studentdetail->firstname,['class' => 'form-control', 'id'=>'firstname', 
                                '' => 'true', 'placeholder'=>'']) }}
            {{ Form::hidden('middlename',$studentdetail->middlename,['class' => 'form-control', 'id'=>'firstname', 
                                '' => 'true', 'placeholder'=>'']) }}
            {{ Form::hidden('lastname',$studentdetail->lastname,['class' => 'form-control', 'id'=>'firstname', 
                                '' => 'true', 'placeholder'=>'']) }}
            </td>
            <td>Sibling Sch No </td>
            <td><b>{{$studentdetail->siblingscholarnumber }}</b>
            {{ Form::hidden('siblingscholarnumber',$studentdetail->siblingscholarnumber,['class' => 'form-control', 'id'=>'siblingscholarnumber', 
                                '' => 'true', 'placeholder'=>'']) }}
            </td>
            
            <td>Sibling Branch </td><td><b>{{$studentdetail->siblingbranch }}</b></td>
            {{ Form::hidden('siblingbranch',$studentdetail->siblingbranch,['class' => 'form-control', 'id'=>'siblingbranch', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>

        <tr>
            <td>Branch Opted </td><td><b>{{ $studentdetail->branchopted }}</b></td>
            {{ Form::hidden('branchopted',$studentdetail->branchopted,['class' => 'form-control', 'id'=>'branchopted', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Gender </td><td><b>{{ $studentdetail->gender }}</b></td>
            {{ Form::hidden('gender',$studentdetail->gender,['class' => 'form-control', 'id'=>'gender', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Class Opted </td><td><b>{{$studentdetail->classopted }}</b></td>
            {{ Form::hidden('classopted',$studentdetail->classopted,['class' => 'form-control', 'id'=>'classopted', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>

        <tr>
            <td>Passport No </td>
            <td><b>{{$studentdetail->passportno }}</b>
            {{ Form::hidden('passportno',$studentdetail->passportno,['class' => 'form-control', 'id'=>'passportno', 
                                '' => 'true', 'placeholder'=>'']) }}
</td>
            <td>Date of Birth </td><td><b>{{$studentdetail->dob }}</b></td>
            {{ Form::hidden('dob',$studentdetail->dob,['class' => 'form-control', 'id'=>'dob', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Category </td><td><b>{{$studentdetail->category }}</b></td>
            {{ Form::hidden('category',$studentdetail->category,['class' => 'form-control', 'id'=>'category', 
                                '' => 'true', 'placeholder'=>'']) }}


        </tr>
        <tr>
            <td>Religion </td><td><b>{{$studentdetail->religion }}</b></td>
            {{ Form::hidden('religion',$studentdetail->religion,['class' => 'form-control', 'id'=>'religion', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Primary Mobile </td><td><b>{{$studentdetail->studentmobile }}</b></td>
            {{ Form::hidden('studentmobile',$studentdetail->studentmobile,['class' => 'form-control', 'id'=>'studentmobile', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Conveyance Opted  </td><td><b>{{$studentdetail->conveyancerequired }}</b></td>
            {{ Form::hidden('conveyancerequired',$studentdetail->conveyancerequired,['class' => 'form-control', 'id'=>'conveyancerequired', 
                                '' => 'true', 'placeholder'=>'']) }}

        </tr>
        <tr>
            <td>Current School </td><td><b>{{$studentdetail->currentschoolname }}</b></td>
            {{ Form::hidden('currentschoolname',$studentdetail->currentschoolname,['class' => 'form-control', 'id'=>'currentschoolname', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Current Class </td><td><b>{{$studentdetail->currentclass }}</b></td>
            {{ Form::hidden('currentclass',$studentdetail->currentclass,['class' => 'form-control', 'id'=>'currentclass', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Current Result </td><td><b>{{$studentdetail->currentresult }}</b></td>
            {{ Form::hidden('currentresult',$studentdetail->currentresult,['class' => 'form-control', 'id'=>'currentresult', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>



        <tr>
            <td colspan="6"  class="info h4"><b>Father's Details</b></td>
        </tr>
        <tr>
            <td>Name </td><td><b>{{$studentdetail->fatherfirstname }} {{$studentdetail->fathermiddlename }} {{$studentdetail->fatherlastname }}</b></td>
            {{ Form::hidden('fatherfirstname',$studentdetail->fatherfirstname,['class' => 'form-control', 'id'=>'fatherfirstname', 
                                '' => 'true', 'placeholder'=>'']) }}
            {{ Form::hidden('fathermiddlename',$studentdetail->fathermiddlename,['class' => 'form-control', 'id'=>'fathermiddlename', 
                                '' => 'true', 'placeholder'=>'']) }}
            {{ Form::hidden('fatherlastname',$studentdetail->fatherlastname,['class' => 'form-control', 'id'=>'fatherlastname', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Email </td><td><b>{{$studentdetail->fatheremail }}</b></td>
            {{ Form::hidden('fatheremail',$studentdetail->fatheremail,['class' => 'form-control', 'id'=>'fatheremail', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Phone </td><td><b>{{$studentdetail->fatherphoneno }}</b></td>
            {{ Form::hidden('fatherphoneno',$studentdetail->fatherphoneno,['class' => 'form-control', 'id'=>'fatherphoneno', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>

        <tr>
            <td>Mobile </td><td><b>{{$studentdetail->fathermobilenumber }}</b></td>
            {{ Form::hidden('fathermobilenumber',$studentdetail->fathermobilenumber,['class' => 'form-control', 'id'=>'fathermobilenumber', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Qualification </td><td><b>{{$studentdetail->fatherqualification }}</b></td>
            {{ Form::hidden('fatherqualification',$studentdetail->fatherqualification,['class' => 'form-control', 'id'=>'fatherqualification', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Occupation </td><td><b>{{$studentdetail->fatheroccupation }}</b></td>
            {{ Form::hidden('fatheroccupation',$studentdetail->fatheroccupation,['class' => 'form-control', 'id'=>'fatheroccupation', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>
        <tr>
            <td>Business/Organisation Name</td><td><b>{{$studentdetail->fatherofficename }}</b></td>
            {{ Form::hidden('fatherofficename',$studentdetail->fatherofficename,['class' => 'form-control', 'id'=>'fatherofficename', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Designation </td><td><b>{{$studentdetail->fatherdesignation }}</b></td>
            {{ Form::hidden('fatherofficeno',$studentdetail->fatherdesignation,['class' => 'form-control', 'id'=>'fatherdesignation', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Office Phone No </td><td><b>{{$studentdetail->fatherofficeno }}</b></td>
            {{ Form::hidden('fatherofficeno',$studentdetail->fatherofficeno,['class' => 'form-control', 'id'=>'fatherofficeno', 
                                '' => 'true', 'placeholder'=>'']) }}


        </tr>
        <tr>
            <td>Office Address  </td><td colspan="5"><b>{{ $studentdetail->fatherofficeaddress }}</b></td>
            {{ Form::hidden('fatherofficeaddress',$studentdetail->fatherofficeaddress,['class' => 'form-control', 'id'=>'fatherofficeaddress', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>

        <tr>
            <td colspan="6"  class="info h4"><b>Mother's Details</b></td>
        </tr>
        <tr>
            <td>Name  </td><td><b>{{$studentdetail->motherfirstname }} {{$studentdetail->mothermiddlename }} {{$studentdetail->motherlastname }}</b></td>
            {{ Form::hidden('motherfirstname',$studentdetail->motherfirstname,['class' => 'form-control', 'id'=>'motherfirstname', 
                                '' => 'true', 'placeholder'=>'']) }}
            {{ Form::hidden('mothermiddlename',$studentdetail->mothermiddlename,['class' => 'form-control', 'id'=>'mothermiddlename', 
                                '' => 'true', 'placeholder'=>'']) }}
            {{ Form::hidden('motherlastname',$studentdetail->motherlastname,['class' => 'form-control', 'id'=>'motherlastname', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Email  </td><td><b>{{$studentdetail->motheremail }}</b></td>
            {{ Form::hidden('motheremail',$studentdetail->motheremail,['class' => 'form-control', 'id'=>'motheremail', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Phone </td><td><b>{{$studentdetail->motherphoneno }}</b></td>
            {{ Form::hidden('motherphoneno',$studentdetail->motherphoneno,['class' => 'form-control', 'id'=>'motherphoneno', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>

        <tr>
            <td>Mobile  </td><td><b>{{$studentdetail->mothermobilenumber }}</b></td>
            {{ Form::hidden('classopted',$studentdetail->classopted,['class' => 'form-control', 'id'=>'classopted', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Qualification  </td><td><b>{{$studentdetail->motherqualification }}</b></td>
            {{ Form::hidden('motherqualification',$studentdetail->motherqualification,['class' => 'form-control', 'id'=>'motherqualification', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Occupation  </td><td><b>{{$studentdetail->motheroccupation }}</b></td>
            {{ Form::hidden('motheroccupation',$studentdetail->motheroccupation,['class' => 'form-control', 'id'=>'motheroccupation', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>

        <tr>
            <td>Business/Organisation Name</td><td><b>{{$studentdetail->motherofficename }}</b></td>
            {{ Form::hidden('motherofficename',$studentdetail->motherofficename,['class' => 'form-control', 'id'=>'motherofficename', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Designation </td><td><b>{{$studentdetail->motherdesignation }}</b></td>
            {{ Form::hidden('motherdesignation',$studentdetail->motherdesignation,['class' => 'form-control', 'id'=>'motherdesignation', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Office Phone </td><td><b>{{ $studentdetail->motherofficeno }}</b></td>
            {{ Form::hidden('motherofficeno',$studentdetail->motherofficeno,['class' => 'form-control', 'id'=>'motherofficeno', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>
        <tr>
            <td>Office Address </td><td colspan="5"><b>{{ $studentdetail->motherofficeaddress }}</b></td>
            {{ Form::hidden('motherofficeaddress',$studentdetail->motherofficeaddress,['class' => 'form-control', 'id'=>'motherofficeaddress', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>
        <tr>
            <td colspan="6"  class="info h4"><b>Guardian Details</b></td>
        </tr>
        <tr>
            <td>Name  </td><td><b>{{$studentdetail->gurdianname }}</b></td>
            {{ Form::hidden('gurdianname',$studentdetail->gurdianname,['class' => 'form-control', 'id'=>'gurdianname', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Phone  </td><td><b>{{$studentdetail->guardianphoneno }}</b></td>
            {{ Form::hidden('guardianphoneno',$studentdetail->guardianphoneno,['class' => 'form-control', 'id'=>'guardianphoneno', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Mobile  </td><td><b>{{$studentdetail->guardianmobile }}</b></td>
            {{ Form::hidden('guardianmobile',$studentdetail->guardianmobile,['class' => 'form-control', 'id'=>'guardianmobile', 
                                '' => 'true', 'placeholder'=>'']) }}

        </tr>
        <tr>
            <td>Address  </td><td colspan="2"><b>{{$studentdetail->guardianaddress }}</b></td>
            {{ Form::hidden('guardianaddress',$studentdetail->guardianaddress,['class' => 'form-control', 'id'=>'guardianaddress', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Qualification </td><td  colspan="2"><b>{{$studentdetail->guardianqualification }}</b></td>
            {{ Form::hidden('guardianqualification',$studentdetail->guardianqualification,['class' => 'form-control', 'id'=>'guardianqualification', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>

        <tr>
            <td colspan="6"  class="info h4"><b>Current Address</b></td>
        </tr>
        <tr>
            <td>Address line 1  </td><td colspan="2"><b>{{$studentdetail->currentaddress1 }}</b></td>
            {{ Form::hidden('currentaddress1',$studentdetail->currentaddress1,['class' => 'form-control', 'id'=>'currentaddress1', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Address line 2  </td><td colspan="2"><b>{{$studentdetail->currentaddress2 }}</b></td>
            {{ Form::hidden('currentaddress2',$studentdetail->currentaddress2,['class' => 'form-control', 'id'=>'currentaddress2', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>
        <tr>
            <td>Suburb </td><td><b>{{$studentdetail->currentsuburb }}</b></td>
            {{ Form::hidden('currentsuburb',$studentdetail->currentsuburb,['class' => 'form-control', 'id'=>'currentsuburb', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Pincode </td><td><b>{{$studentdetail->currentpincode }}</b></td>
            {{ Form::hidden('currentpincode',$studentdetail->currentpincode,['class' => 'form-control', 'id'=>'currentpincode', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>City </td><td><b>{{$studentdetail->currentcity }}</b></td>
            {{ Form::hidden('currentcity',$studentdetail->currentcity,['class' => 'form-control', 'id'=>'currentcity', 
                                '' => 'true', 'placeholder'=>'']) }}

        </tr>
        <tr>
            <td>State </td><td><b>{{$studentdetail->currentstate }}</b></td>
            {{ Form::hidden('currentstate',$studentdetail->currentstate,['class' => 'form-control', 'id'=>'currentstate', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Country </td><td colspan="3"><b>{{$studentdetail->currentcountry }}</b></td>
            {{ Form::hidden('currentcountry',$studentdetail->currentcountry,['class' => 'form-control', 'id'=>'currentcountry', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>


        <tr>
            <td colspan="6"  class="info h4"><b>Permanent Address</b></td>
        </tr>
        <tr>
            <td>Address line 1 </td><td colspan="2"><b>{{$studentdetail->permaaddress1 }}</b></td>
            {{ Form::hidden('permaaddress1',$studentdetail->permaaddress1,['class' => 'form-control', 'id'=>'permaddress1', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Address line 2  </td><td colspan="2"><b>{{$studentdetail->permaaddress2 }}</b></td>
            {{ Form::hidden('permaaddress2',$studentdetail->permaaddress2,['class' => 'form-control', 'id'=>'permaddress2', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>
        <tr>
            <td>Suburb  </td><td><b>{{$studentdetail->permasuburb }}</b></td>
            {{ Form::hidden('permasuburb',$studentdetail->permasuburb,['class' => 'form-control', 'id'=>'permasuburb', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Pincode </td><td><b>{{$studentdetail->permapincode }}</b></td>
            {{ Form::hidden('permapincode',$studentdetail->permapincode,['class' => 'form-control', 'id'=>'permapincode', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>City  </td><td><b>{{$studentdetail->permacity }}</b></td>
            {{ Form::hidden('permacity',$studentdetail->permacity,['class' => 'form-control', 'id'=>'permacity', 
                                '' => 'true', 'placeholder'=>'']) }}

        </tr>
        <tr>
            <td>State </td><td><b>{{$studentdetail->permastate }}</b></td>
            {{ Form::hidden('permastate',$studentdetail->permastate,['class' => 'form-control', 'id'=>'permastate', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Country </td><td colspan="3"><b>{{$studentdetail->permacountry }}</b></td>
            {{ Form::hidden('permacountry',$studentdetail->permacountry,['class' => 'form-control', 'id'=>'permacountry', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>
        <tr>
            <td colspan="6"  class="info h4"><b>Details of two known local contacts </b></td>
        </tr>
        <tr>
            <td>Name </td><td><b>{{$studentdetail->person1name }}</b></td>
            {{ Form::hidden('person1name',$studentdetail->person1name,['class' => 'form-control', 'id'=>'person1name', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Contact No </td><td><b>{{$studentdetail->person1contactno }}</b></td>
            {{ Form::hidden('person1contactno',$studentdetail->person1contactno,['class' => 'form-control', 'id'=>'person1contactno', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Address </td><td><b>{{$studentdetail->person1address }}</b></td>
            {{ Form::hidden('person1address',$studentdetail->person1address,['class' => 'form-control', 'id'=>'person1address', 
                                '' => 'true', 'placeholder'=>'']) }}
        </tr>
        <tr>
            <td>Name </td><td><b>{{$studentdetail->person2name }}</b></td>
            {{ Form::hidden('person2name',$studentdetail->person2name,['class' => 'form-control', 'id'=>'person2name', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Contact No </td><td><b>{{$studentdetail->person2contactno }}</b></td>
            {{ Form::hidden('person2contactno',$studentdetail->person2contactno,['class' => 'form-control', 'id'=>'person2contactno', 
                                '' => 'true', 'placeholder'=>'']) }}

            <td>Address  </td><td><b>{{$studentdetail->person2address }}</b></td>
            {{ Form::hidden('person2address',$studentdetail->person2address,['class' => 'form-control', 'id'=>'person2address', 
                                '' => 'true', 'placeholder'=>'']) }}

        </tr>
        <tr>
            <td colspan="6">
                <h4><input type="checkbox" checked="true">
                    I confirm all inputs provided in the form are valid and correct,
                    to best of my knowledge.</h4>
            </td>
        </tr>
    </table>

    <div class="row">
        <div class="col-lg-6 col-lg-offset-5">
            <button name="edit_profile" onclick="history.go(-1);" class="btn btn-primary btn-lg" >Edit</button>
            <button name="save" class="btn btn-success btn-lg">Proceed</button>
        </div>
    </div>
    {!! Form::close() !!}
</div>

@include('layouts.footer')
@endsection