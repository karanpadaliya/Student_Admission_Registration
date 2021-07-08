<!doctype html>
<html>

<head>
   
    <title>Admission Registration</title>
</head>

<fieldset>
<body>
    <div class="container-fluid  bg-dark text-light" style="background-color:rgb(212, 230, 241)">
        <h1><center>Admission Registration</center></h1>
    </div>
   <hr>
   <hr>
   <br>
    <center>
    <div class="container col-md-4 my-4">
        
        <form action="/PHPSEM5/registration.php" method="POST" style="background-color:rgb(212, 230, 241)">
        <fieldset>
        <table width="70%" style="float:left">
            <tr>
                <td>
                    <form>
		<legend><h2>Registration_form</h2></legend>
		
		<label class="form-label" style="color:black"><b>First Name:</b></label>
                <input type="text" maxlength="30px" placeholder="Enter First Name" class="form-control" id="fname" name="fname">
                <label class="form-label" style="color:black"><b>&nbsp;&nbsp;Middle Name:</b></label>
                <input type="text" class="form-control" placeholder="Enter Middle Name" id="mname" name="mname">
                <label class="form-label" style="color:black"><b>&nbsp;&nbsp;Surname: </b></label>
                <input type="text" class="form-control" placeholder="Enter Surname" id="sname" name="sname">
		<br>
		<br>
    
		<label class="form-label"><b>Course Name:</b></label>
                <input type="text" class="form-control" placeholder="Enter Course Name" id="cname" name="cname">
		<br>
		<br>
              
                <label class="form-label"><b>City:</b></label>
                <input type="text" class="form-control" placeholder="Enter City Name" id="city" name="city">
		<br>
		<br>
                
                <label class="form-label"><b>Phone No:</b></label>
                <input type="text" maxlength="10" class="form-control" placeholder="Enter Phone No" id="phone"
                    name="phone">
		<br>
		<br>
                
                <label class="form-label"><b>School Name:</b></label>
                <input type="text" class="form-control" id="school" placeholder="Enter School Name" name="school">
		<br>
		<br>
                
                <label class="form-label"><b>Birth date:</b></label>
                <input type="taxt" class="form-control" placeholder="Enter Birthdate"  id="bdate" name="bdate">
		<br>
		<br>
                
                <label class="form-label"><b>Aadhar No:</b></label>
                <input type="text" class="form-control" maxlength="16" placeholder="Enter Aadhar No" name="aadhar">
		<br>
		<br>
        
                <button type="submit" class="btn btn-primary"><b>Inquiry</b></div>
            </form>
            
        </td>
	</tr>
</fieldset>
    <table width="30%" style="float:center" >
        <tr>
            <td>
            <fieldset>
        <?php
    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $fname = $_POST['fname'];
        $mname = $_POST['mname'];
        $sname = $_POST['sname'];
        $course = $_POST['cname'];
        $city = $_POST['city'];
        $phone = $_POST['phone'];
        $school = $_POST['school'];
        $bdate = $_POST['bdate'];
        $date = date("d M Y", strtotime($bdate));
        $aadhar = $_POST['aadhar'];
  
   echo '
        <h3><b>Your Registration Detaild Saved..!</b></h3>
        <p><b>Full Name :</b> '.$fname.' '. $mname .' '. $sname .' </br>
            <b>Course Name :</b> '. $course .' <br><b>City :</b> '. $city .' </br>
            <b>Phone No. :</b> '. $phone .'<br> <b>School Name :</b> '. $school .' </br>
            <b>Birthdate :</b> '. $bdate .' <br><b>Aadhar No. :</b> '. $aadhar .'
        </p>
        <hr>';
}
    ?>
    </fieldset>
        </td>
        </tr>
    </table>
</table>
    
</body>

</html>
