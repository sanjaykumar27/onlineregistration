@include('layouts.head')
@extends('layouts.header')

@section('content')

<script>
    $(function () {
        $("#permaddrdetails").hide();
        $("#guardiandetails").hide();
        $('#detailsmatch').click(function () {
            $('#permaddrdetails').toggle();
        });

        $('#guardianinfo').click(function () {
            $('#guardiandetails').toggle();
        });

        $('#sibling').click(function () {
            $('#siblingscholarnumber').removeAttr('disabled');
        });
        $('#branchopted').multiselect();
    });
</script>

<div class='container'>

    {!! Form::open(['url' => 'confirm']) !!}
    <div class="panel panel-primary">
        <div class="panel-heading">Student Details</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-4">
                    <input type="checkbox" class="check" id="sibling" 
                           name="sibling"  tabindex="1" value ="1"> 
                    {{ Form::label('Any existing child studying?', '', ['class' => 'control-label small']) }}
                    {{ Form::text('siblingscholarnumber','',['class' => 'form-control', 'id'=>'siblingscholarnumber', 
                                'placeholder' =>'Enter Scholar Number','' => 'true', 'disabled'=>'disabled']) }}
                </div>

                <div class="col-lg-2">
                    <!-- sibling branch --> 
                    {{ Form::label('Sibling Branch', null, ['class' => 'control-label']) }}
                    {{ Form::select('siblingbranch', 
                          ['' => '-Select one -',
                            'CHB' => 'CHB',
                            'Shastri Nagar' => 'Shastri Nagar',
                            'Ratanada' => 'Ratanada',
                            'Paota' => 'Paota',
                            'Pal' => 'Pal',
                            'kudi' => 'Kudi',
                            'Pali' => 'Pali-Marwar'],null,['class'=>'form-control', 'id' =>'siblingbranch']) }}

                </div>

                <!--preferred branch --> 

                <div class="col-lg-2">
                    {{ Form::label('Prefered Branch*', null, ['class' => 'control-label']) }}<br>
                    {{ Form::select('branchopted[]', 
                          [ 'CHB' => 'CHB',
                            'Shastri Nagar' => 'Shastri Nagar',
                            'Ratanada' => 'Ratanada',
                            'Poata' => 'Paota',
                            'Pal' => 'Pal',
                            'Kudi' => 'Kudi',
                            'Pali' => 'Pali'],null,['class'=>'form-control', 'required' =>'true', 'id' =>'branchopted', 'multiple'=>"multiple"] ) }}
                </div>

                <!-- student mobile primary -->

                <div class="col-lg-4" >
                    {{ Form::label('Mobile* (Primary)', null, ['class' => 'control-label']) }}
                    {{ Form::text('studentmobile','',['class' => 'form-control', 'id'=>'studentmobile', 
                                '' => 'true', 'placeholder'=>'',"required" =>'true', "maxlength " =>"10"]) }}
                </div>      
            </div>
            <span class="clearfix"><br></span>

            <div class="row">      
                <!-- First Name --------------- -->

                <div class="col-lg-4">
                    {{ Form::label('First Name*', null, ['class' => 'control-label']) }}
                    {{ Form::text('firstname','',['class' => 'form-control', 'id'=>'firstname', 
                                '' => 'true', 'placeholder'=>'']) }}
                </div>    

                <!-- Middle Name --------------- -->

                <div class="col-lg-4">
                    {{ Form::label('Middle Name', null, ['class' => 'control-label']) }}
                    {{ Form::text('middlename','',['class' => 'form-control', 'id'=>'middlename', 
                                '' => 'true', 'placeholder'=>'']) }}
                </div>

                <!-- Last name --------------- -->

                <div class="col-lg-4">
                    {{ Form::label('Last Name', null, ['class' => 'control-label']) }}
                    {{ Form::text('lastname','',['class' => 'form-control', 'id'=>'lastname', 
                                '' => 'true', 'placeholder'=>'']) }}
                </div> 
            </div>

            <span class="clearfix"><br></span>

            <div class="row">
                <!-- admission sought --> 
                <div class="col-lg-4">
                    {{ Form::label('Admission sought in*', null, ['class' => 'control-label']) }}
                    {{ Form::select('classopted', 
                          ['' => '-Select one -', 'NR' => 'NR', 'KG' => 'KG', 'PR' => 'PR', 'I' => 'I',
                            'II' => 'II','III' => 'III','IV' => 'IV','V' => 'V','VI' => 'VI',
                            'VII' => 'VII', 'VIII' => 'VIII'
                        ],
                            null,['class'=>'form-control', "required" =>'true']) }}
                </div>

                <!-- gender --> 
                <div class="col-lg-4">
                    {{ Form::label('Gender*', null, ['class' => 'control-label']) }}
                    {{ Form::select('gender', 
                          ['' => '-Select one -', 'Male' => 'Male', 'Female' => 'Female'],
                            null,['class'=>'form-control', "required" =>'true']) }}
                </div>



                <div class="col-lg-4">
                    {{ Form::label('D.O.B*', null, ['class' => 'control-label']) }}
                    {{ Form:: date('dob', '', ['class' => 'form-control', 'id' => 'dob', "required" =>'true']) }}
                </div>
            </div>
            <span class="clearfix"><br></span>


            <div class="row">
                <div class="col-lg-4">
                    {{ Form::label('Category*', null, ['class' => 'control-label']) }}
                    {{ Form::select('category', 
                          ['' => '-Select one -', 'GEN' => 'GEN', 
                                                  'SC' => 'SC',
                                                  'ST' => 'ST',
                                                  'OBC' => 'OBC',
                                                  'Other' => 'Other'],
                            null,['class'=>'form-control', "required" =>'true']) }}
                </div>
                <div class="col-lg-4">
                    {{ Form::label('Religion*', null, ['class' => 'control-label']) }}
                    {{ Form::select('religion', 
                          ['' => '-Select one -', 'HINDU' => 'Hindu', 
                      'Muslim' => 'Muslim',
                      'SIKH' => 'Sikh', 
                      'Christian' => 'Christian', 
                      'Buddhism' => 'Buddhism'],
                            null,['class'=>'form-control', "required" =>'true']) }}
                </div>


                <div class="col-lg-4" >
                    {{ Form::label('Passport No', null, ['class' => 'control-label']) }}
                    {{ Form::text('passportno','',['class' => 'form-control', 'id'=>'passportno', 
                                '' => 'true', 'placeholder'=>'']) }}
                </div>


            </div>

            <span class="clearfix"><br></span>

            <div class="row">
                <div class="col-lg-4">
                    {{ Form::label('School Conveyance required? ', null, ['class' => 'control-label']) }}
                    {{ Form::text('conveyancerequired','',['class' => 'form-control', 'id'=>'conveyancerequired', 
                                '' => 'true', 'placeholder'=>'Nearest landmark. Ex : Shastri Circle']) }}
                                <small> If seeking school transport, enter nearest landmark</small>
                </div>
                <div class="col-lg-4">
                    {{ Form::label('Current School Name', null, ['class' => 'control-label']) }}
                    {{ Form::text('currentschoolname','',['class' => 'form-control', 'id'=>'currentschoolname', 
                                '' => 'true', 'placeholder'=>'']) }}
                                 <small> Leave empty if its child's First School </small>
                </div>  

                <div class="col-lg-2 ">
                    {{ Form::label('Current Class Attended', null, ['class' => 'control-label']) }}
                    {{ Form::select('currentclass', 
                          ['' => '-Select one -', 'NR' => 'NR', 'KG' => 'KG', 'PR' => 'PR', 'I' => 'I',
                            'II' => 'II','III' => 'III','IV' => 'IV','V' => 'V','VI' => 'VI',
                            'VII' => 'VII'
                        ],
                            null,['class'=>'form-control']) }}
                </div>

                <div class="col-lg-2 ">   
                    {{ Form::label('Current Result', null, ['class' => 'control-label']) }}
                    {{ Form::select('currentresult', 
                          ['' => '-Select one -', 'Promoted' => 'Promoted', 'Demoted' => 'Demoted'],
                            null,['class'=>'form-control']) }}
                </div>
            </div>

        </div>

        <br>
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-primary">
                    <div class="panel-heading">Father's Details</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6">
                                {{ Form::label('Firstname*', null, ['class' => 'control-label']) }}
                                {{ Form::text('fatherfirstname','',['class' => 'form-control', 'id'=>'fatherfirstname', 
                                '' => 'true', 'placeholder'=>'',"required" =>'true']) }}
                            </div>    

                            <!-- Middle Name --------------- -->
                            <div class="col-lg-6 ">
                                {{ Form::label('Middlename', null, ['class' => 'control-label']) }}
                                {{ Form::text('fathermiddlename','',['class' => 'form-control', 'id'=>'fathermiddlename', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>

                            <!-- Last name --------------- -->
                            
                        </div>
                        <span class="clearfix"><br></span>
                        <div class="row">
                            <div class="col-lg-6 ">
                                {{ Form::label('Lastname', null, ['class' => 'control-label']) }}
                                {{ Form::text('fatherlastname','',['class' => 'form-control', 
                                'id'=>'fatherlastname', 'placeholder'=>'']) }}
                            </div> 
                            <div class="col-lg-6 ">
                                {{ Form::label('Email', null, ['class' => 'control-label']) }}
                                {{ Form::email('fatheremail','',['class' => 'form-control', 'id'=>'fatheremail', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>
                        </div>     
                        <span class="clearfix"><br></span>
                        <div class='row'>
                            <div class="col-lg-6 " >
                                {{ Form::label('Mobile*', null, ['class' => 'control-label']) }}
                                {{ Form::text('fathermobilenumber','',['class' => 'form-control', 'id'=>'fathermobilenumber', 
                                '' => 'true', 'placeholder'=>'', "required" =>'true', "maxlength" => "10"]) }}
                            </div>
                            
                             <div class="col-lg-6 " >
                                {{ Form::label('Landline', null, ['class' => 'control-label']) }}
                                {{ Form::text('fatherphoneno','',['class' => 'form-control', 'id'=>'fatherphoneno', 
                                '' => 'true', 'placeholder'=>'', "maxlength" => "7"]) }}

                            </div>  
                        </div>

                        <span class="clearfix"><br></span>

                        <div class="row">
                            <div class="col-lg-6 ">
                                {{ Form::label('Qualification', null, ['class' => 'control-label']) }}
                                {{ Form::select('fatherqualification', 
                                ['' => '-Select one -', 
                                'None' => 'None',
                                'Secondary' => 'Secondary',
                                 'Higher Secondary' => 'Higher Secondary',
                                 'Graduate' => 'Graduate',
                                 'Post Graduate'=>'Post Graduate',
                                  'Doctorate'=>'Doctorate'],
                                  null,['class'=>'form-control',"required" =>'true']) }}
                            </div>



                            <div class="col-lg-6 ">
                                {{ Form::label('Occupation*', null, ['class' => 'control-label']) }}
                                {{ Form::select('fatheroccupation', 
                          ['' => '-Select one -',
                                 'Business ' => 'Business',
                                 'Government Service' => 'Government Service',
                                 'Service Men' => 'Service Men',
                                 'Private Service' => 'Private Service',
                                 'Housing Board Employee' => 'Housing Board Employee',
                                 'Engineer'=>'Engineer'],
                            null,['class'=>'form-control', "required" =>'true']) }}
                            </div>

                            

                        </div>

                        <span class="clearfix"><br></span>
                        <div class="row">
                            <div class="col-lg-6 " >
                                {{ Form::label('Business/Org. Name', null, ['class' => 'control-label']) }}
                                {{ Form::text('fatherofficename','',['class' => 'form-control', 'id'=>'fatherofficename', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>
                            <div class="col-lg-6 " >
                                {{ Form::label('Designation', null, ['class' => 'control-label']) }}
                                {{ Form::text('fatherdesignation','',['class' => 'form-control', 'id'=>'fatherdesignation', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>
                        </div>
                        
                         <span class="clearfix"><br></span>
                         
                        <div class="row">
                            <div class="col-lg-6 " >
                                {{ Form::label('Office No', null, ['class' => 'control-label']) }}
                                {{ Form::text('fatherofficeno','',['class' => 'form-control', 'id'=>'fatherofficeno', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>
                            <div class="col-lg-6 ">
                                {{ Form::label('Office Address', null, ['class' => 'control-label']) }}
                                {{ Form::text('fatherofficeaddress','',['class' => 'form-control', 'id'=>'fatherofficeaddress', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="panel panel-primary ">
                    <div class="panel-heading">Mother's Details</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 ">
                                {{ Form::label('Firstname*', null, ['class' => 'control-label']) }}
                                {{ Form::text('motherfirstname','',['class' => 'form-control', 'id'=>'motherfirstname', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>    

                            <!-- Middle Name --------------- -->

                            <div class="col-lg-6">
                                {{ Form::label('Middlename', null, ['class' => 'control-label']) }}
                                {{ Form::text('mothermiddlename','',['class' => 'form-control', 'id'=>'mothermiddlename', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>
                        </div>

                        <span class="clearfix"><br></span>

                        <div class="row">
                            <div class="col-lg-6">
                                {{ Form::label('Lastname', null, ['class' => 'control-label']) }}
                                {{ Form::text('motherlastname','',['class' => 'form-control', 'id'=>'motherlastname', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div> 
                            <div class="col-lg-6">
                                {{ Form::label('Email', null, ['class' => 'control-label']) }}
                                {{ Form::email('motheremail','',['class' => 'form-control', 'id'=>'motheremail', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>
                        </div>
                        <span class="clearfix"><br></span>
                        
                        <div class="row">
                            <div class="col-lg-6" >
                                {{ Form::label('Mobile', null, ['class' => 'control-label']) }}
                                {{ Form::text('mothermobilenumber','',['class' => 'form-control', 'id'=>'mothermobilenumber', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>
                            <div class="col-lg-6 " >
                                {{ Form::label('Phone', null, ['class' => 'control-label']) }}
                                {{ Form::text('motherphoneno','',['class' => 'form-control', 'id'=>'motherphoneno', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>  
                        </div>
                        <span class="clearfix"><br></span> 

                        <div class="row">
                            <div class="col-lg-6 ">
                                {{ Form::label('qualification', null, ['class' => 'control-label']) }}
                                {{ Form::select('motherqualification', 
                                 ['' => '-Select one -', 
                             'None' => 'None',
                                'Secondary' => 'Secondary',
                                 'Higher Secondary' => 'Higher Secondary',
                                 'Graduate' => 'Graduate',
                                 'Post Graduate'=>'Post Graduate',
                                  'Doctorate'=>'Doctorate'],
                                    
                                null,['class'=>'form-control']) }}
                            </div>

                            <div class="col-lg-6 ">
                                {{ Form::label('occupation', null, ['class' => 'control-label']) }}
                                {{ Form::select('motheroccupation', 
                          ['' => '-Select one -',
                                 'Business' => 'Business',
                                 'Government Service' => 'Government Service',
                                 'Service Woman' => 'Service Woman',
                                 'House Wife'=>'House Wife',
                                 'Private Service' => 'Private Service',
                                 'Housing Board Employee' => 'Housing Board Employee',
                                 'Engineer'=>'Engineer'],
                            null,['class'=>'form-control']) }}
                            </div>

                            

                        </div>

                        <span class="clearfix"><br></span>
                        <div class="row">
                            <div class="col-lg-6 " >
                                {{ Form::label('Business/Org. Name', null, ['class' => 'control-label']) }}
                                {{ Form::text('motherofficename','',['class' => 'form-control', 'id'=>'motherofficename', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>
                            <div class="col-lg-6 " >
                                {{ Form::label('Designation', null, ['class' => 'control-label']) }}
                                {{ Form::text('motherdesignation','',['class' => 'form-control', 'id'=>'motherdesignation', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>
                        </div>
                         <span class="clearfix"><br></span>
                        <div class="row">
                            <div class="col-lg-6 " >
                                {{ Form::label('Office No', null, ['class' => 'control-label']) }}
                                {{ Form::text('motherofficeno','',['class' => 'form-control', 'id'=>'motherofficeno', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>

                            <div class="col-lg-6 ">
                                {{ Form::label('Office Address', null, ['class' => 'control-label']) }}
                                {{ Form::text('motherofficeaddress','',['class' => 'form-control', 'id'=>'motherofficeaddress', 
                                '' => 'true', 'placeholder'=>'']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='col-lg-12' align='right'>
                <button type="button" class="btn btn-warning " name="guardianinfo" 
                        id="guardianinfo" >
                    Add local guardian's details
                </button>
            </div>
        </div>
        <br>
        <div class="row" id="guardiandetails">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Guardian Details </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 ">
                                {{ Form::label('Name', null, ['class' => 'control-label']) }}
                                {{ Form::text('gurdianname','',['class' => 'form-control', 'id'=>'gurdianname', 
                                        '' => 'true', 'placeholder'=>'']) }}
                            </div>  

                            <div class="col-lg-3 ">
                                {{ Form::label('Phone', null, ['class' => 'control-label']) }}
                                {{ Form::text('guardianphoneno','',['class' => 'form-control', 'id'=>'guardianphoneno', 
                                        '' => 'true', 'placeholder'=>'']) }}
                            </div>  

                            <div class="col-lg-3 ">
                                {{ Form::label('Mobile', null, ['class' => 'control-label']) }}
                                {{ Form::text('guardianmobile','',['class' => 'form-control', 'id'=>'guardianmobile', 
                                        '' => 'true', 'placeholder'=>'']) }}
                            </div>
                        </div>

                        <span class="clearfix">&nbsp;<br></span>

                        <div class="row">
                            <div class="col-lg-6">
                                {{ Form::label('Address*', null, ['class' => 'control-label']) }}
                                {{ Form::text('guardianaddress','',['class' => 'form-control', 'id'=>'guardianaddress', 
                                        '' => 'true', 'placeholder'=>'']) }}
                            </div>  


                            <div class="col-lg-6">
                                {{ Form::label('Qualification*', null, ['class' => 'control-label']) }}
                                {{ Form::select('guardianqualification', 
                                ['' => '-Select one -', 
                                'None' => 'None',
                                'Secondary' => 'Secondary',
                                 'Higher Secondary' => 'Higher Secondary',
                                 'Graduate' => 'Graduate',
                                 'Post Graduate'=>'Post Graduate',
                                  'Doctorate'=>'Doctorate'],
                                null,['class'=>'form-control']) }}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading" style="height: 50px; padding-top: 15px;">Current Address &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                        <button type="button" class="btn btn-warning btn-sm " name="detailsmatch" id="detailsmatch" >
                            Different Permanent Address?
                        </button>

                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 ">
                                {{ Form::label('Current Address 1*', null, ['class' => 'control-label']) }}
                                {{ Form::text('currentaddress1','',['class' => 'form-control', 'id'=>'currentaddress1', 
                                        '' => 'true', 'placeholder'=>'', "required" =>'true']) }}
                            </div>


                            <div class="col-lg-6 ">
                                {{ Form::label('Current Address 2*', null, ['class' => 'control-label']) }}
                                {{ Form::text('currentaddress2','',['class' => 'form-control', 'id'=>'currentaddress2', 
                                        '' => 'true', 'placeholder'=>'', "required" =>'true']) }}
                            </div>  
                        </div>

                        <span class="clearfix"><br></span>

                        <div class="row">
                            <div class="col-lg-3">
                                {{ Form::label('Current Suburb*', null, ['class' => 'control-label']) }}
                                {{ Form::text('currentsuburb','',['class' => 'form-control', 'id'=>'currentsuburb', 
                                        '' => 'true', 'placeholder'=>'', "required" =>'true']) }}
                            </div>  

                            <div class="col-lg-3">
                                {{ Form::label('Current Pincode*', null, ['class' => 'control-label']) }}
                                {{ Form::text('currentpincode','',['class' => 'form-control', 'id'=>'currentpincode', 
                                        '' => 'true', 'placeholder'=>'', "required" =>'true']) }}
                            </div>

                            <div class="col-lg-2">
                                {{ Form::label('Current City*', null, ['class' => 'control-label']) }}
                                {{ Form::select('currentcity', 
                                  ['' => '-Select one -', 'Jodhpur' => 'Jodhpur'],
                                    null,['class'=>'form-control', "required" =>'true']) }}
                            </div>  

                            <div class="col-lg-2">
                                {{ Form::label('Current State*', null, ['class' => 'control-label']) }}
                                {{ Form::select('currentstate', 
                                      ['' => '-Select one -', 'Rajasthan' => 'Rajasthan'],
                                        null,['class'=>'form-control', "required" =>'true']) }}

                            </div>

                            <div class="col-lg-2">
                                {{ Form::label('Current Country*', null, ['class' => 'control-label']) }}
                                {{ Form::select('currentcountry', 
                              ['' => '-Select one -', 'India' => 'India'],
                                null,['class'=>'form-control', "required" =>'true']) }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" id="permaddrdetails">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Permanent Address </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-lg-6 ">
                                {{ Form::label('Permanent Address 1', null, ['class' => 'control-label']) }}
                                {{ Form::text('permaaddress1','',['class' => 'form-control', 'id'=>'permaaddress1', 
                                        '' => 'true', 'placeholder'=>'']) }}
                            </div>  

                            <div class="col-lg-6 ">
                                {{ Form::label('Permanent Address 2', null, ['class' => 'control-label']) }}
                                {{ Form::text('permaaddress2','',['class' => 'form-control', 'id'=>'permaaddress2', 
                                        '' => 'true', 'placeholder'=>'']) }}
                            </div>  
                        </div>

                        <span class="clearfix">&nbsp;<br></span>

                        <div class="row">
                            <div class="col-lg-3">
                                {{ Form::label('Permanent Suburb*', null, ['class' => 'control-label']) }}
                                {{ Form::text('permasuburb','',['class' => 'form-control', 'id'=>'permasuburb', 
                                        '' => 'true', 'placeholder'=>'']) }}
                            </div>  


                            <div class="col-lg-3">
                                {{ Form::label('Permanent Pincode*', null, ['class' => 'control-label']) }}
                                {{ Form::text('permapincode','',['class' => 'form-control', 'id'=>'permapincode', 
                                        '' => 'true', 'placeholder'=>'']) }}
                            </div>

                            <div class="col-lg-2">
                                {{ Form::label('Permanent City*', null, ['class' => 'control-label']) }}
                                {{ Form::select('permacity', 
                              ['' => '-Select one -', 'Jodhpur' => 'Jodhpur'],
                                null,['class'=>'form-control']) }}
                            </div>  

                            <div class="col-lg-2">
                                {{ Form::label('Permanent State*', null, ['class' => 'control-label']) }}
                                {{ Form::select('permastate', 
                              ['' => '-Select one -', 'Rajasthan' => 'Rajasthan'],
                                null,['class'=>'form-control']) }}
                            </div>

                            <div class="col-lg-2">
                                {{ Form::label('Permanent Country*', null, ['class' => 'control-label']) }}
                                {{ Form::select('permacountry', 
                              ['' => '-Select one -', 'India' => 'India'],
                                null,['class'=>'form-control']) }}
                            </div>  
                        </div>
                    </div>

                </div>
            </div>
        </div> 


        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">Details of two known contacts (local) </div>
                    <div class="panel-body">
                        <div class="row">
                            <h4 class="text-info"><u>Person one</u></h4>
                            <div class="col-lg-4 ">
                                {{ Form::label('Name*', null, ['class' => 'control-label']) }}
                                {{ Form::text('person1name','',['class' => 'form-control', 'id'=>'person1name', 
                                        '' => 'true', 'placeholder'=>'', "required" =>'true']) }}
                            </div>  

                            <div class="col-lg-4 ">
                                {{ Form::label('Contact No*', null, ['class' => 'control-label']) }}
                                {{ Form::text('person1contactno','',['class' => 'form-control', 'id'=>'person1contactno', 
                                        '' => 'true', 'placeholder'=>'',"required" =>'true' ]) }}
                            </div>

                            <div class="col-lg-4 ">
                                {{ Form::label('Address*', null, ['class' => 'control-label']) }}
                                {{ Form::text('person1address','',['class' => 'form-control', 'id'=>'person1address', 
                                        '' => 'true', 'placeholder'=>'', "required" =>'true']) }}
                            </div>
                        </div>

                        <span class="clearfix">&nbsp;<br></span>

                        <div class="row">
                            <h4 class="text-info"><u>Person two</u></h4>
                            <div class="col-lg-4 ">
                                {{ Form::label('Name*', null, ['class' => 'control-label']) }}
                                {{ Form::text('person2name','',['class' => 'form-control', 'id'=>'person2name', 
                                        '' => 'true', 'placeholder'=>'', "required" =>'true']) }}
                            </div>  

                            <div class="col-lg-4 ">
                                {{ Form::label('Contact No*', null, ['class' => 'control-label']) }}
                                {{ Form::text('person2contactno','',['class' => 'form-control', 'id'=>'person2ontactno', 
                                        '' => 'true', 'placeholder'=>'', "required" =>'true']) }}
                            </div>

                            <div class="col-lg-4 ">
                                {{ Form::label('Address*', null, ['class' => 'control-label']) }}
                                {{ Form::text('person2address','',['class' => 'form-control', 'id'=>'person2address', 
                                        '' => 'true', 'placeholder'=>'', "required" =>'true']) }}
                            </div>
                        </div>
                        <span class="clearfix">&nbsp;<br></span>  
                    </div>
                </div>
            </div>
        </div> 

        <div class="row">
            <div class="col-lg-6 col-lg-offset-3" align="center">

                <input id="clearDiv" type="submit"  value="Cancel" style="width: 200px; height: 40px;" class="btn btn-default">
                <input type="submit" id="submit1"  name="submit" style="width: 200px; height: 40px;" value="SAVE" class="btn btn-primary" >

            </div>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@include('layouts.footer')
@endsection