

<style type="text/css">
    
    .spacing{
        white-space:pre; 
    }
    
    body p br { 
        font-family: Calibri, Candara, Segoe, "Segoe UI", Optima, Arial, sans-serif;
        font-size: 12px;
    }
    
    div.breakNow { 
        page-break-inside:avoid; page-break-after:always; 
    }
    li{
    margin-top: 10px;
}

    
</style>
<img src="images/school.png" height="100" alt="Central Academy" align="center"> &nbsp; &nbsp;
<img src="images/ca_academy.png" alt="Central Academy" width="580" height="55">
 
<table width="300" align="center" style="border:1px solid black;" cellpadding="2">
     <tr>
        <td>Your Registration no is: </td>
        <td><strong>{{ $studentdetail->registrationnumber }}</strong></td>
    </tr>
    <tr><td>Campus Preference: </td>
        <td> <strong> {{ $studentdetail->branchopted }}</strong></td>
    </tr>
    
</table>
<br>
&nbsp;<small><?php echo(date("F j, Y")) ?></small>
<br><br>
            Dear <b>{{ $studentdetail->fatherfirstname }}</b></p>
           
            <p><b>{{ $studentdetail->firstname.' '.$studentdetail->middlename.' '.$studentdetail->lastname }}</b>
            has been successfully registered. </p>
            
            <p>Please take the printed & signed form to the campus of your preference on nominated day. <p>
                You should have already received the email on <b>{{ $studentdetail->fatheremail }}</b>, please read it carefully. 
                Further instructions are provided in the email, including date & time, assessment criteria etc. <br>
            <p>
                <b>Thank you and Good luck! </b></p>
            <p><b>Central Academy Web Registration Team</b></p>
            <p>&nbsp;</p>

           

            <p>
                Please remember to bring all the documents required, here's a list for you reference: 
            </p>  
            <ul>
                <li>Birth Certificate (Self Attested)</li>
                <li>Passport Size photo <br>(<small>
                    Size of photo: 2 x 2 inch or 35 x 45 mm or 35 x 35 mm. Color of background: white or off-white.
                </small>)</li>
                <li>Marksheet / Report Card of previous School (if applicable).</li>
                <li>Transfer Certificate</li>
            </ul>
                     

<div class="breakNow"></div>

<div><small> Admitted to: ______________________ Admission No ___________________Date _____________</small></div>
<br>&nbsp;</br>

<img src="images/school.png" height="100" alt="Central Academy" align="center"> &nbsp; &nbsp;
<img src="images/CA_passport_photo_pdf_img.jpg" alt="Central Academy">

    <table border="1"  rules='all' cellpadding="8" align="center" style="width: 700px">
    <tr>
        <td class="h4" colspan="4" style="background-color: #ccc"><b>General Details</b></td>
    </tr>
     <tr>
        <td>Student Name: </td><td style="font-size: 14px"><b>{{ $studentdetail->firstname.' '.$studentdetail->middlename.' '.$studentdetail->lastname }}</b></td>
        <td>Gender: </td><td><b>{{ $studentdetail->gender }}</b></td>
    </tr>
    
    <tr>
        <td>Branch Opted: </td><td><b>{{ $studentdetail->branchopted }}</b></td>
        <td>Class Opted :</td><td><b>{{ $studentdetail->classopted }}</b></td>
    </tr>
   <tr>
        <td>Sibling Sch No: </td><td><b>{{ $studentdetail->siblingscholarnumber }}</b></td>
        <td>Sibling Branch:</td><td><b>{{ $studentdetail->siblingbranch }}</b></td>
    </tr>


    <tr>
        <td>Passport No :</td><td><b>{{ $studentdetail->passportno }}</b></td>
        <td>Date of Birth: </td><td><b>{{ $studentdetail->dob }}</b></td>

    </tr>
    <tr>
        <td>Category: </td><td><b>{{ $studentdetail->category }}</b></td>
        <td>Religion: </td><td><b>{{ $studentdetail->religion }}</b></td>

    </tr>
    <tr>
        <td>Primary Mobile : </td><td><b>{{ $studentdetail->studentmobile }}</b></td>
        <td>Conveyance Opted : </td><td><b>{{ $studentdetail->conveyancerequired }}</b></td>

    </tr>
    <tr>
        <td>Current School : </td><td><b>{{ $studentdetail->currentschoolname }}</b></td>
        <td>Current Class : </td><td><b>{{ $studentdetail->currentclass }}</b></td>

    </tr>
    <tr>
        <td>Current Result : </td><td colspan="3"><b>{{ $studentdetail->currentresult }}</b></td>
    </tr>

    <tr>
        <td colspan="4"  class="h4" style="background-color: #ccc"><b>Father's Details</b></td>
    </tr>
    <tr>
        <td>Name : </td><td style="font-size: 14px"><b>{{ $studentdetail->fatherfirstname.' '.$studentdetail->fathermiddlename.' '.$studentdetail->fatherlastname }}</b></td>
        <td>Email : </td><td><b>{{ $studentdetail->fatheremail }}</b></td>
    </tr>

    <tr>
        <td>Landline : </td><td><b>{{ $studentdetail->fatherphoneno }}</b></td>
        <td>Mobile : </td><td><b>{{ $studentdetail->fathermobilenumber }}</b></td>
    </tr>
    <tr>
        <td>Qualification : </td><td><b>{{ $studentdetail->fatherqualification }}</b></td>
        <td>Occupation : </td><td><b>{{ $studentdetail->fatheroccupation }}</b></td>
    </tr>

    <tr>
        <td>Business/Org. Name </td><td><b>{{ $studentdetail->fatherofficename }}</b></td>
        <td>Designation : </td><td><b>{{ $studentdetail->fatherdesignation }}</b></td>
    </tr>

    <tr>
        <td>Office Phone No : </td><td><b>{{ $studentdetail->fatherofficeno }}</b></td>
        <td>Office Address : </td><td><b>{{ $studentdetail->fatherofficeaddress }}</b></td>
    </tr>


    <tr>
        <td colspan="4" style="background-color: #ccc"><b>Mother's Details</b></td>
    </tr>
    <tr>
        <td>Name : </td><td style="font-size: 14px"><b>{{ $studentdetail->motherfirstname.' '.$studentdetail->mothermiddlename.' '.$studentdetail->motherlastname }}</b></td>
        <td>Email : </td><td><b>{{ $studentdetail->motheremail }}</b></td>

    </tr>

    <tr>
        <td>Landline : </td><td><b>{{ $studentdetail->motherphoneno }}</b></td>
        <td>Mobile : </td><td><b>{{ $studentdetail->mothermobilenumber }}</b></td>
    </tr>
    <tr>
        <td>Qualification : </td><td><b>{{ $studentdetail->motherqualification }}</b></td>
        <td>Occupation : </td><td><b>{{ $studentdetail->motheroccupation }}</b></td>
    </tr>

    <tr>
        <td>Business/Org. Name </td><td><b>{{ $studentdetail->motherofficename }}</b></td>
        <td>Designation : </td><td><b>{{ $studentdetail->motherdesignation }}</b></td>
    </tr>
    <tr>
        <td>Office Phone No : </td><td><b>{{ $studentdetail->motherofficeno }}</b></td>
        <td>Office Address : </td><td ><b>{{ $studentdetail->motherofficeaddress }}</b></td>
    </tr>

    <tr>
        <td colspan="4"  class="h4" style="background-color: #ccc"><b>Guardian's Detail</b></td>
    </tr>
    <tr>
        <td>Name : </td><td><b>{{ $studentdetail->gurdianname }}</b></td>
        <td>Phone : </td><td><b>{{ $studentdetail->guardianphoneno }}</b></td>
    </tr>
    <tr>
        <td>Mobile : </td><td><b>{{ $studentdetail->guardianmobile }}</b></td>
        <td>Qualification : </td><td ><b>{{ $studentdetail->guardianqualification }}</b></td>
    </tr>
    <tr>
        <td>Address : </td><td colspan="3"><b>{{ $studentdetail->guardianaddress }}</b></td>
    </tr>

    <tr>
        <td colspan="4"  class="h4" style="background-color: #ccc"><b>Current Address</b></td>
    </tr>
    <tr>
        <td>Address 1 : </td>
        <td colspan="3"><b>{{ $studentdetail->currentaddress1 }}</b></td>

    </tr>
    <tr>
        <td>Address 2 : </td>
        <td colspan="3"><b>{{ $studentdetail->currentaddress2 }}</b></td>
    </tr>
    <tr>
        <td>Suburb : </td><td><b>{{ $studentdetail->currentsuburb }}</b></td>
        <td>Pincode : </td><td><b>{{ $studentdetail->currentpincode }}</b></td>
    </tr>
    <tr>
        <td>City : </td><td><b>{{ $studentdetail->currentcity }}</b></td>
        <td>State : </td><td><b>{{ $studentdetail->currentstate }}</b></td>
    </tr>

    <tr>
        <td>Country: </td><td colspan="3"><b>{{ $studentdetail->currentcountry }}</b></td>
    </tr>


    <tr>
        <td colspan="4"  class="h4" style="background-color: #ccc"><b>Permanent Address</b></td>
    </tr>
    <tr>
        <td>Address 1 : </td>
        <td colspan="3"><b>{{ $studentdetail->permaaddress1 }}</b></td>
    </tr>
    <tr>
        <td>Address 2 : </td><td colspan="3"><b>{{ $studentdetail->permaaddress2 }}</b></td>
    </tr>
    <tr>
        <td>Suburb : </td><td><b>{{ $studentdetail->permasuburb }}</b></td>
        <td>Pincode : </td><td><b>{{ $studentdetail->permapincode }}</b></td>
    </tr>
    <tr>
        <td>City : </td><td><b>{{ $studentdetail->permacity }}</b></td>
        <td>State : </td><td><b>{{ $studentdetail->permastate }}</b></td>
    </tr>
    <tr>
        <td>Country: </td><td colspan="3"><b>{{ $studentdetail->permacountry }}</b></td>
    </tr>

    <tr>
        <td colspan="4"  class="h4" style="background-color: #ccc"><b>Details of two known local contacts</b></td>
    </tr>
    <tr>
        <td>Name : </td><td><b>{{ $studentdetail->person1name }}</b></td>
        <td>Contact No : </td><td><b>{{ $studentdetail->person1contactno }}</b></td>
    </tr>
    <tr>
        <td>Address : </td><td colspan="3"><b>{{ $studentdetail->person1address }}</b></td>
    </tr>
    
    <tr>
        <td>Name : </td><td><b>{{ $studentdetail->person2name }}</b></td>
        <td>Contact No : </td><td><b>{{ $studentdetail->person2contactno }}</b></td>
    </tr>
    <tr>
        <td>Address : </td><td colspan="3"><b>{{ $studentdetail->person2address }}</b></td>
    </tr>
</table>
<div class="breakNow"></div>
<br>
<h2 align="center">FOR OFFICE USE</h2>
<br>
<table>
    <tr>
        <td>Admitted to standard</td>
        <td>___________________</td>
        <td>Sec</td>
        <td>___________________</td>
        <td>Stream</td>
        <td>___________________</td>
    </tr>
</table><br>
<table>
    <tr>
        <td>Campus Offered</td>
        <td>_______________________________________________________________________</td>
    </tr>
</table>
<br>
<table>
    <tr>
        <td>Fee Reciept No</td>
        <td>_________________</td>
        <td>Dated</td>
        <td>_______________</td>
        <td>for Rs</td>
        <td>____________________________</td>
    </tr>
</table>
<br>
<p>issued to the Parents/Gaurdian and certified that the name has been entered
in the Class Attendance Register.</p>
<br><br>

<table>
    <tr>
        <td>________________</td>
        <td></td>
        <td>________________</td>
    </tr>
    <tr>
        <td>Accountant</td>
        <td width="330">&nbsp;</td>
        <td>Principal</td>
    </tr>
</table>