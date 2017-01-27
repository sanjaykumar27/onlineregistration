<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testing;
use App\tblstudentregistration;
use App\tblstudentregistrationnumber;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;
use App\Mail\sendEmail;
use DB;
use PDF;

class onlineregistration extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function confirm(Request $request) {

        // get an uniue registation number from tblstudentregistration

        $permaddress1 = $request->get('permaaddress1');
        $permaddress2 = $request->get('permaaddress2');
        $permasuburb = $request->get('permasuburb');
        $permapincode = $request->get('permapincode');
        $permacity = $request->get('permacity');
        $permastate = $request->get('permastate');
        $permacountry = $request->get('permacountry');

        if (empty($request->get('permaaddress1'))) {
            $permaddress1 = $request->get('currentaddress1');
            $permaddress2 = $request->get('currentaddress2');
            $permasuburb = $request->get('currentsuburb');
            $permapincode = $request->get('currentpincode');
            $permacity = $request->get('currentcity');
            $permastate = $request->get('currentstate');
            $permacountry = $request->get('currentcountry');
        }
        //echo($request->get('person2name')); die;
        $studentdetail = new tblstudentregistration();
        $branchOpted = implode(", ", $request->get('branchopted'));
        $studentdetail->siblingscholarnumber = $request->get('siblingscholarnumber');
        $studentdetail->firstname = $request->get('firstname');
        $studentdetail->middlename = $request->get('middlename');
        $studentdetail->lastname = $request->get('lastname');
        $studentdetail->branchopted = $branchOpted;
        $studentdetail->gender = $request->get('gender');
        $studentdetail->classopted = $request->get('classopted');
        
        $studentdetail->dob = date("d-m-Y", strtotime($request->get('dob')));
        $studentdetail->category = $request->get('category');
        $studentdetail->religion = $request->get('religion');
        $studentdetail->studentmobile = $request->get('studentmobile');
        $studentdetail->passportno = $request->get('passportno');
        $studentdetail->conveyancerequired = $request->get('conveyancerequired');
        $studentdetail->currentschoolname = $request->get('currentschoolname');
        $studentdetail->currentclass = $request->get('currentclass');
        $studentdetail->currentresult = $request->get('currentresult');
        $studentdetail->currentaddress1 = $request->get('currentaddress1');
        $studentdetail->currentaddress2 = $request->get('currentaddress2');
        $studentdetail->currentsuburb = $request->get('currentsuburb');
        $studentdetail->currentpincode = $request->get('currentpincode');
        $studentdetail->currentcity = $request->get('currentcity');
        $studentdetail->currentstate = $request->get('currentstate');
        $studentdetail->currentcountry = $request->get('currentcountry');
        $studentdetail->permaaddress1 = $permaddress1;
        $studentdetail->permaaddress2 = $permaddress2;
        $studentdetail->permasuburb = $permasuburb;
        $studentdetail->permapincode = $permapincode;
        $studentdetail->permacity = $permacity;
        $studentdetail->permastate = $permastate;
        $studentdetail->permacountry = $permacountry;
        $studentdetail->fatherfirstname = $request->get('fatherfirstname');
        $studentdetail->fathermiddlename = $request->get('fathermiddlename');
        $studentdetail->fatherlastname = $request->get('fatherlastname');
        $studentdetail->fatheremail = $request->get('fatheremail');
        $studentdetail->fatherphoneno = $request->get('fatherphoneno');
        $studentdetail->fathermobilenumber = $request->get('fathermobilenumber');
        $studentdetail->fatherqualification = $request->get('fatherqualification');
        $studentdetail->fatheroccupation = $request->get('fatheroccupation');
        $studentdetail->fatherofficeno = $request->get('fatherofficeno');
        $studentdetail->fatherofficename = $request->get('fatherofficename');
        $studentdetail->fatherdesignation = $request->get('fatherdeignation');
        $studentdetail->fatherofficeaddress = $request->get('fatherofficeaddress');
        $studentdetail->motherfirstname = $request->get('motherfirstname');
        $studentdetail->mothermiddlename = $request->get('mothermiddlename');
        $studentdetail->motherlastname = $request->get('motherlastname');
        $studentdetail->motheremail = $request->get('motheremail');
        $studentdetail->motherphoneno = $request->get('motherphoneno');
        $studentdetail->mothermobilenumber = $request->get('mothermobilenumber');
        $studentdetail->motherqualification = $request->get('motherqualification');
        $studentdetail->motheroccupation = $request->get('motheroccupation');
        $studentdetail->motheremail = $request->get('motherofficeno');
        $studentdetail->motherofficeaddress = $request->get('motherofficeaddress');
        $studentdetail->motherofficename = $request->get('motherofficename');
        $studentdetail->motherdesignation = $request->get('motherdesignation');
        $studentdetail->siblingbranch = $request->get('siblingbranch');
        $studentdetail->person1name = $request->get('person1name');
        $studentdetail->person1contactno = $request->get('person1contactno');
        $studentdetail->person1address = $request->get('person1address');
        $studentdetail->person2name = $request->get('person2name');
        $studentdetail->person2contactno = $request->get('person2contactno');
        $studentdetail->person2address = $request->get('person2address');
        $studentdetail->gurdianname = $request->get('gurdianname');
        $studentdetail->guardianphoneno = $request->get('guardianphoneno');
        $studentdetail->guardianmobile = $request->get('guardianmobile');
        $studentdetail->guardianaddress = $request->get('guardianaddress');
        $studentdetail->guardianqualification = $request->get('guardianqualification');




        return view('files.student.registration.registrationConfirmation', compact('studentdetail'));
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {

        $studentdetail = new tblstudentregistration();
        $result = tblstudentregistrationnumber::select('code')
                ->where('status', "=", 0)
                ->take(1)
                ->get();

        foreach ($result as $value) {
            $registrationNo = $value->code;
        }

        // Updating the status to 1 of the registration number used 
        $cuurentDate = date("Y-m-d H:i:s");
        DB::table('tblstudentregistrationnumber')
                ->where('code', $registrationNo)
                ->update(['status' => 1, 'dateupdated' => $cuurentDate]);

        $studentdetail->registrationnumber = $registrationNo;
        $studentdetail->branchopted = $request->get('branchopted');
        $studentdetail->siblingscholarnumber = $request->get('siblingscholarnumber');
        $studentdetail->firstname = $request->get('firstname');
        $studentdetail->middlename = $request->get('middlename');
        $studentdetail->lastname = $request->get('lastname');
        $studentdetail->gender = $request->get('gender');
        $studentdetail->classopted = $request->get('classopted');
        $studentdetail->dob = date("d-m-Y", strtotime($request->get('dob')));
        $studentdetail->category = $request->get('category');
        $studentdetail->religion = $request->get('religion');
        $studentdetail->studentmobile = $request->get('studentmobile');
        $studentdetail->passportno = $request->get('passportno');
        $studentdetail->conveyancerequired = $request->get('conveyancerequired');
        $studentdetail->currentschoolname = $request->get('currentschoolname');
        $studentdetail->currentclass = $request->get('currentclass');
        $studentdetail->currentresult = $request->get('currentresult');
        $studentdetail->currentaddress1 = $request->get('currentaddress1');
        $studentdetail->currentaddress2 = $request->get('currentaddress2');
        $studentdetail->currentsuburb = $request->get('currentsuburb');
        $studentdetail->currentpincode = $request->get('currentpincode');
        $studentdetail->currentcity = $request->get('currentcity');
        $studentdetail->currentstate = $request->get('currentstate');
        $studentdetail->currentcountry = $request->get('currentcountry');

        $studentdetail->permaaddress1 = $request->get('permaaddress1');
        $studentdetail->permaaddress2 = $request->get('permaaddress2');
        $studentdetail->permasuburb = $request->get('permasuburb');
        $studentdetail->permapincode = $request->get('permapincode');
        $studentdetail->permacity = $request->get('permacity');
        $studentdetail->permastate = $request->get('permastate');
        $studentdetail->permacountry = $request->get('permacountry');
        $studentdetail->fatherfirstname = $request->get('fatherfirstname');
        $studentdetail->fathermiddlename = $request->get('fathermiddlename');
        $studentdetail->fatherlastname = $request->get('fatherlastname');
        $studentdetail->fatheremail = $request->get('fatheremail');
        $studentdetail->fatherphoneno = $request->get('fatherphoneno');
        $studentdetail->fathermobilenumber = $request->get('fathermobilenumber');
        $studentdetail->fatherqualification = $request->get('fatherqualification');
        $studentdetail->fatheroccupation = $request->get('fatheroccupation');
        $studentdetail->fatherofficeno = $request->get('fatherofficeno');
        $studentdetail->fatherofficename = $request->get('fatherofficename');
        $studentdetail->fatherdesignation = $request->get('fatherdeignation');
        $studentdetail->fatherofficeaddress = $request->get('fatherofficeaddress');
        $studentdetail->motherfirstname = $request->get('motherfirstname');
        $studentdetail->mothermiddlename = $request->get('mothermiddlename');
        $studentdetail->motherlastname = $request->get('motherlastname');
        $studentdetail->motheremail = $request->get('motheremail');
        $studentdetail->motherphoneno = $request->get('motherphoneno');
        $studentdetail->mothermobilenumber = $request->get('mothermobilenumber');
        $studentdetail->motherqualification = $request->get('motherqualification');
        $studentdetail->motheroccupation = $request->get('motheroccupation');
        $studentdetail->motheremail = $request->get('motherofficeno');
        $studentdetail->motherofficeaddress = $request->get('motherofficeaddress');
        $studentdetail->motherofficename = $request->get('motherofficename');
        $studentdetail->motherdesignation = $request->get('motherdesignation');
        $studentdetail->siblingbranch = $request->get('siblingbranch');
        $studentdetail->person1name = $request->get('person1name');
        $studentdetail->person1contactno = $request->get('person1contactno');
        $studentdetail->person1address = $request->get('person1address');
        $studentdetail->person2name = $request->get('person2name');
        $studentdetail->person2contactno = $request->get('person2contactno');
        $studentdetail->person2address = $request->get('person2address');
        $studentdetail->gurdianname = $request->get('gurdianname');
        $studentdetail->guardianphoneno = $request->get('guardianphoneno');
        $studentdetail->guardianmobile = $request->get('guardianmobile');
        $studentdetail->guardianaddress = $request->get('guardianaddress');
        $studentdetail->guardianqualification = $request->get('guardianqualification');

        $studentdetail->save();

        /*$mailsend = \Mail::raw("\'<h4>\'Hello $studentdetail->fatherfirstname, "
                        . "$studentdetail->firstname $studentdetail->middlename $studentdetail->lastname "
                        . "is successfully registered with Registration No: $registrationNo in our system. Our team"
                        . "will contact you shortly for other information. </h4>", function ($message) {
                    $message->to('schourasia@ebizneeds.com')
                            ->subject('subject');
                });*/
        
        $data = array(
            'studentname'=> $studentdetail->firstname.' '.$studentdetail->middlename.' '.$studentdetail->lastname,
            'fathername' => $studentdetail->fatherfirstname,
            'registrationno' => $registrationNo,
                'branchopted' => $studentdetail->branchopted,
            'fatheremail' =>  $studentdetail->fatheremail
            );
        
        
        if(empty($studentdetail->fatheremail)){
           $this->email = 'test@test.com';
        }
        else
        {
            $this->email = $studentdetail->fatheremail;
        }
        
        Mail::send('files.student.registration.email', $data, function($message) {
         $message->to($this->email, 'Student Registration')->subject
            ('Online Student Registration');
      });

        $pdf = PDF::loadView('files.student.registration.registrationform', compact('studentdetail'));
        //return $pdf->download('Registration_form.pdf');
        return $pdf->stream();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
