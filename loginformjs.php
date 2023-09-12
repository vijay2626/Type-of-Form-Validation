<head>
<link rel="stylesheet" type="text/css" href="css/cssapply.css">
<style type="text/css">


.error{
    color:darkgreen;} 
</style>
 
</head>
<body>
<form name="loginformjs" action="" onSubmit="return validate()" method="post">
<table  border="1" padding="2" cellpadding="2" width="20%" bgcolor="lightblue" align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><p style="color: darkorange"><marquee direction="left" behavior="alternate" style="border:solid olive">Student Registration Form</marquee></p></font></center>
</td>
</tr>

<tr>
<td><p style="color: yellow">Firstname</p></td>
<td><p class="error"><input type="text" name="firstname" id="textname" size="20" value=""></p>
<span id ="error_firstname" class="error"></span></td>
</tr>

<tr>
<td><p style="color: orange">Lastname<html>
me</p></td>
<td><p class="error"><input type="text" name="lastname" id="textname" size="20" value=""></p>
<span id ="error_lastname" class="error"></span></td>
</tr>
<tr>

<tr>
<td><p style="color: yellow">Address</p></td>
<td><p class="error"><input type="text" name="address"
id="address" size="20"></p>
<span id ="error_address" class="error"></span></td>
</tr>

<tr>
<td><p style="color: orange"> Gender</p></td>
<td><input type="radio" name="gender" value="male" size="10" checked="checked">Male
<input type="radio" name="gender" value="Female" size="10">Female
</td>
</tr>

<tr>
<td><p style="color: yellow">City</td>
<td><p class="error"><select name="city">
<option value="0" selected>select city</option>
<option value="New Delhi">NEW DELHI</option>
<option value="Mumbai">MUMBAI</option>
<option value="Goa">GOA</option>
<option value="Patna">PATNA</option>
</select></p>
<span id ="error_city" class="error"></span></td>
</tr>
<tr>
<td><p style="color: orange">State</p></td>
<td><p class="error"><select Name="state" >
<option value="0" selected><p style="color: green">select state</p></option>
<option value="New Delhi">NEW DELHI</option>
<option value="Mumbai">MUMBAI</option>
<option value="Goa">GOA</option>
<option value="Bihar">BIHAR</option>
</select></p>
<span id ="error_state" class="error"></span></td>
</tr>
<tr>
<td><p style="color: yellow">Course</p></td>
<td><p class="error"><select name="course">
<option value="0" selected><p style="color: green">select course</p></option>
<option value="B.Tech">B.E</option>
<option value="MCA">MCA</option>
<option value="MBA">MBA</option>
<option value="BCA">BCA</option>
</select></p>
<span id ="error_course" class="error"></span></td>
</tr>

<tr>
<td><p style="color: orange">PinCode</p></td>
<td><p class="error"><input type="text" name="pincode" id="pincode" size="20"></p>
<span id ="error_pincode" class="error"></span></td>
</tr>

<tr>
<td><p style="color: yellow">EmailId</p></td>
<td><p class="error"><input type="text" name="emailid" id="emailid" size="20"></p>
<span id ="error_emailid" class="error"></span></td>
</tr>

<tr>
<td><p style="color: orange">DOB</p></td>
<td><p class="error"><input type="text" name="dob" id="dob" size="20"></p>
<span id ="error_dob" class="error"></span></td>
</tr>

<tr>
<td><p style="color: yellow">MobileNo</p></td>
<td><p class="error"><input type="text" name="mobileno" id="mobileno" size="20"></p>
<span id ="error_mobileno" class="error"></span></td>
</tr>
<tr><p style="color: orange"><td>
<p class="error">
     <input type="file" name="pic" accept="image/*"></p>
     <span id ="error_pic" class="error"></span></p></td></tr>
<tr>

<td colspan="1"><input type="submit" value="Submit Form" color="red"></td>
<td><input type="reset"></td>
</tr>
</table>
</form>

</body>
</html>
  
<script type="text/javascript">

function validate() {
    
var err=0;

    var a = document.forms["loginformjs"]["firstname"].value;
    if (a == "") {
        //alert("please the enter firstname ");

        document.getElementById("error_firstname").innerHTML = "enter the firstname";
    err++;
    }
    else if(!/^[a-zA-Z]*$/g.test(document.loginformjs.firstname.value))
    {

        //alert("hello");
        document.getElementById('error_firstname').innerHTML="only alphanumeric character  required";
        document.loginformjs.firstname.focus();
        return false;
    }
else{
       document.getElementById("error_firstname").innerHTML = "";
    
    }

//alert("hello");
   var b = document.forms["loginformjs"]["lastname"].value;
    if (b == "") {
        //alert("please the enter lastname");
        document.getElementById("error_lastname").innerHTML = "enter the last name";
       err++;
      
    }

    else if(!/^[a-zA-Z]*$/g.test(document.loginformjs.lastname.value))
    {
        document.getElementById('error_lastname').innerHTML="only alphanumeric character  required";
        document.loginformjs.lastname.focus();
        return false;
    }

    else{
      document.getElementById("error_lastname").innerHTML = "";
    
    }

    var c = document.forms["loginformjs"]["address"].value;
    if (c == "") {
       // alert("please the enter address");
        document.getElementById("error_address").innerHTML = "enter the address";
        err++;
    }
    
       
    
    else if(!/^[0-9,./\-_ a-zA-Z''\s a-zA-Z0-9]*$/g.test(document.loginformjs.address.value))
    {
        document.getElementById('error_address').innerHTML="both digit and character required";
        document.loginformjs.address.focus();
        return false;
    }

    else{
      document.getElementById("error_address").innerHTML = "";
      
    }
   
  
    
    var e = document.forms["loginformjs"]["city"].value;
    if (e == "0") {
        //alert("please the city ");
        document.getElementById("error_city").innerHTML = "select city";
       err++;
    }
    

    else{
      document.getElementById("error_city").innerHTML = "";
      
    }
    var f = document.forms["loginformjs"]["state"].value;
    if (f == "0") {
        //alert("please the enter state ");
        document.getElementById("error_state").innerHTML = "select state";
        err++;

    }

    else
    {

      document.getElementById("error_state").innerHTML = "";
      
    }
    var g = document.forms["loginformjs"]["course"].value;
    if (g == "0") {
        //alert("please the enter course ");
        document.getElementById("error_course").innerHTML = "select course";
       err++;
    }

    else{
      document.getElementById("error_course").innerHTML = "";
      
    }
    var h = document.forms["loginformjs"]["pincode"].value;
    if (h == "") {
        //alert("please the enter pincode ");
        document.getElementById("error_pincode").innerHTML = "enter the   pincode";
        err++;
    }

    else if(!/^[1-9][0-9]{5}$/g.test(document.loginformjs.pincode.value))
    {
        document.getElementById('error_pincode').innerHTML="at least require six digit ";
        document.loginformjs.pincode.focus();
        return false;
    } 

    else{
      document.getElementById("error_pincode").innerHTML = "";
      
    }


    /*var i = document.forms["loginformjs"]["emailid"].value;
    if (i == "") {
        //alert("please the enter EmailId ");

        document.getElementById("error_emailid").innerHTML = "enter the emailid";
    err++;
    }
else if(!/^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}*$/g.test(document.loginformjs.emailid.value))
    document.getElementById('error_emailid').innerHTML="enter  the valid  emailid with @ and .";
        document.loginformjs.emailid.focus();
        return false;
    } 

    else{
       document.getElementById("error_emailid").innerHTML = "";
    } 

   */

    

 var j = document.forms["loginformjs"]["dob"].value;
    if (j == "") 
    {
        //alert("please the enter dob ");
        document.getElementById("error_dob").innerHTML = "enter your dob";
    err++;
    }
    else if(!/^(\d{1,2})-(\d{1,2})-(\d{4})$/g.test(document.loginformjs.dob.value))
    {
        document.getElementById('error_dob').innerHTML="enter valid dob with - format";
        document.loginformjs.dob.focus();
        return false;
    } 
    else
    {
      document.getElementById("error_dob").innerHTML = "";
      
    }

    var k = document.forms["loginformjs"]["mobileno"].value;
    if (k == "") {
        //alert("please the enter mobileno");
        document.getElementById("error_mobileno").innerHTML = "enter your mobileno";
         err++;
        
    }
else if(!/^([0|\+[0-9]{1,5})?([7-9][0-9]{9})$/g.test(document.loginformjs.mobileno.value))
    {
        document.getElementById('error_mobileno').innerHTML="no start with 7,8,9 must contain";
        document.loginformjs.mobileno.focus();
        return false;
    } 


    else{
      document.getElementById("error_mobileno").innerHTML = "";
    }
    

    var l = document.forms["loginformjs"]["pic"].value;
    if (l == "") {
        //alert("please the enter image");
        document.getElementById("error_pic").innerHTML = "enter the image";
        err++;
    } 
    else if(!/(\.(gif|jpg|jpeg|tiff|png))$/g.test(document.loginformjs.pic.value))
    {
        document.getElementById('error_pic').innerHTML="jpg,png,etc must contain";
        document.loginformjs.pic.focus();
        return false;
    } 


    else{
      document.getElementById("error_image").innerHTML = "";
      }
      
        

        if(err!=0){
           //alert(err);
        
        return false;
    }

    }

    </script>
        
