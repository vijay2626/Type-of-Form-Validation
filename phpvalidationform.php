<?php session_start();


$firstnameErr = $lastnameErr = $addressErr = $mobilenoErr = $emailErr = $cityErr = $pincodeErr = $genderErr = $passwordErr = $cpasswordErr = $picErr = $captchaErr = "";
$firstname = $lastname = $address = $mobileno = $email = $city = $pincode = $gender = $password = $cpassword = $pic = $captcha = "";



  if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if (empty($_POST["firstname"])) {
    $firstnameErr = "firstname is required";
  } else {
    $firstname = test_input($_POST["firstname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[A-Za-z']+( [A-Za-z']+)*$/",$firstname)) {
      $firstnameErr = "Only character  allowed"; 
    }
  }
  

  


  if (empty($_POST["lastname"])) {
    $lastnameErr = "lastname is required";
  } else {
    $lastname = test_input($_POST["lastname"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[A-Za-z']+( [A-Za-z']+)*$/",$lastname)) {
      $lastnameErr = "Only letters and white space allowed"; 
    }
  }
  

if (empty($_POST["address"])) {
    $addressErr = "address is required";
  } else {
    $address = test_input($_POST["address"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z0-9-\/] ?([a-zA-Z0-9-\/]|[a-zA-Z0-9-\/] )*[a-zA-Z0-9-\/]$/",$address)) {
      $addressErr = "address with no "; 
    }
  } 

if (empty($_POST["mobileno"])) {
    $mobilenoErr = "mobileno is required";
  } else {
    $mobileno = test_input($_POST["mobileno"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[7|8|9][0-9]{9}$/",$mobileno)) {
      $mobilenoErr = "no start with 7,8,9 with 10 digit "; 
    }
  }


  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "require @ and .domain"; 
    }
  }



    if (empty($_POST["city"])) {
    $cityErr = "please choose city";
  } else {
   $city = test_input($_POST["city"]);
 }



  if (empty($_POST["pincode"])) {
    $pincodeErr = "pincode is required";
  } else {
    $pincode = test_input($_POST["pincode"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[1-9][0-9]{5}$/",$pincode)) {
      $pincodeErr = "at least 6 digit require";
    
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }



if (empty($_POST["password"])) {
    $passwordErr = "password is required";
  } else {
    $password = test_input($_POST["password"]);
    
    if (!preg_match("/^(?=.*[A-Za-z])(?=.*[a-zA-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{5,15}$/",$password)) {
      $passwordErr = "require upper,lower,no,alphabets"; 
    }
    }
  
if (empty($_POST["cpassword"])) {
    $cpasswordErr = "confirm password is required";
  } else {
    $cpassword = test_input($_POST["cpassword"]);
    }

if ($_POST["password"]!= $_POST["cpassword"])
 {
     $cpasswordErr = "enter the same password";
 }

if (empty($_POST["pic"])) {
    $picErr = "image is required";
  } else {
    $pic = test_input($_POST["pic"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/(?=.(gif|png|jpg|jpeg))/",$pic)) {
      $picErr = "only accept jpg,gif,png";
    
    }
  }
 
 if (empty($_POST["captcha"])) {
    $captchaErr = "image is required";
   }else  {
    $captcha = test_input($_POST["captcha"]);
   
      $captchaErr = "enter the valid code";
   }
    $cap = 'notEq';
     if ($_POST['captcha'] == $_SESSION['cap_code']) {
        // Captcha verification is Correct. Do something here!
        $cap = 'Eq';
    } else {
        // Captcha verification is wrong. Take other action
        $cap = '';
    }
}



function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


<html>
<head>
<style>
.error {color: #FF0000;}
<style>
body{
                
                }
                #form img{
                margin-bottom: 8px;
            }
            #form input[type="submit"]{
                background-color: #0064aa;
                border: none;
                color: #fff;
                padding: 5px 8px;
                cursor: pointer;
                font:bold 12px arial;
            }
            
            }
            .cap_status{
                width: 350px;
                padding: 10px;
                font: 14px arial;
                color: #fff;
                background-color: #10853f;
                display: none;
            }
            .cap_status_error{
                background-color: #bd0808;                
            }
.error {color: #FF0000;}
.thumb-image
 {
    float:left;
    width:50px;
    position:relative;
    padding:2px;
}
</style>


</style>
</head>
<body>  


<p><span class="error"></span></p>
<form name="" action="phpvalidationform.php"  method="post" id="register-form">

<div id="form">
<table  border="1" padding="2" cellpadding="2" width="20%" bgcolor="lightblue" align="center"
cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><p style="color: darkorange"><marquee direction="left" behavior="alternate" style="border:solid olive">Student Registration Form</marquee></p></font></center>
</td>
</tr>

<tr>
<td><p style="color: yellow">Firstname</p></td>
<td><input type="text" name="firstname" id="firstname" size="20" value="<?php echo $firstname;?>" placeholder="first name">
<span class="error"> <?php echo $firstnameErr;?></span>
</tr>

<tr>
<td><p style="color: yellow">lastname</p></td>
<td><input type="text" name="lastname" id="lastname" size="20" value="<?php echo $lastname;?>" placeholder="lastname">
<span class="error"> <?php echo $lastnameErr;?></span></td>
</tr>



<tr>
<td><p style="color: yellow">Address</p></td>
<td><input type="text" name="address" value="<?php echo $address;?>"
 id="address" size="20">
<span class="error"> <?php echo $addressErr;?></span></td>
</tr>

<tr>
<td><p style="color: yellow">MobileNo</p></td>
<td><p class="error"><input type="text" name="mobileno" value="<?php echo $mobileno;?>" id="mobileno" size="20"></p><span class="error"> <?php echo $mobilenoErr;?></span>
</td>
</tr> 

<tr>
<td><p style="color: yellow">Email</p></td>
<td><input type="text" name="email" id="email" size="20" value="<?php echo $email;?>" placeholder="email@.domain">
<span class="error"> <?php echo $emailErr;?></span>
</td>
</tr>


<tr>
<td><p style="color: yellow">City</td>
<td><select name="city">
<option value="<?php echo $city?>"><?php echo $city?></option>
<option value="New Delhi">NEW DELHI</option>
<option value="Mumbai">MUMBAI</option>
<option value="Goa">GOA</option>
<option value="Patna">PATNA</option>
</select><span class="error"> <?php echo $cityErr;?></span>
</td>
</tr>




<tr>
<td><p style="color: yellow">PinCode</p></td>
<td><input type="text" name="pincode" id="pincode" size="20"  value="<?php echo $pincode;?>">
<span class="error" > <?php echo $pincodeErr;?></span></td>
</tr>



<tr>
<td><p style="color: yellow"> Gender</p></td>
<td><input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <span class="error"> <?php echo $genderErr;?></span>
</td>
</tr>


<tr>
<td><p style="color: yellow">password</p></td>
<td><input type="text" id="password" name="password" size="20" value="<?php echo $password;?>"> <span class="error"> <?php echo $passwordErr;?> </span></td>
</tr>

<tr>
<td><p style="color: yellow">cpassword</p></td>
<td><input type="text" id="cpassword" name="cpassword" size="20" value="<?php echo $cpassword;?>">
<span class="error"><?php echo $cpasswordErr;?></span></td>
</tr>
 

 <tr><p style="color: yellow"><td>

     <input type="file" name="pic" value="<?php echo $pic;?>"  id="pic">
     <span class="error" id="image-holder"> <?php echo $picErr;?></span></tr>

     <tr>
                        <td colspan="2"><label style="color:yellow">Enter the contents of image</label><label class="mandat"></label></td>
                    </tr>
                    <tr>
                        <td width="60px">                           
                            <input type="text" name="captcha" id="captcha" maxlength="6" size="6" value="<?php echo $captcha;?>"><span class="error"> <?php echo $captchaErr;?></span></td>
                        <td><img src="captcha.php"/></td>
                    </tr>







<td colspan="1"><input type="submit" value="submit"></td>
</tr>
</table>
</div>
</form>
</div>
        
        <div class="cap_status"></div>
        </div>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
 <script type="text/javascript">
            $(document).ready(function(){
                $('#submit').click(function(){
                   
                    var captcha = $('#captcha').val();
                    
                    
                    if( captcha.length == 0){
                        $('#captcha').addClass('error');
                    }
                    else{
                        $('#captcha').removeClass('error');
                    }
                    
                    if(captcha.length != 0){
                        return true;
                    }
                    return false;
                });

                var capch = '<?php echo $cap; ?>';
                if(capch != 'notEq'){
                    if(capch == 'Eq'){
                        $('.cap_status').html("Your form is successfully Submitted ").fadeIn('slow').delay(3000).fadeOut('slow');
                    }else{
                        $('.cap_status').html("wrong enter captcha").addClass('cap_status_error').fadeIn('slow').delay(3000).fadeOut('slow');
                    }
                }
                
                

            });
        </script>
        <script>
$(document).ready(function() {
        $("#pic").on('change', function() {
          //Get count of selected files
          var countFiles = $(this)[0].files.length;
          var imgPath = $(this)[0].value;
          var extn = imgPath.substring(imgPath.lastIndexOf('.') + 1).toLowerCase();
          var image_holder = $("#image-holder");
          image_holder.empty();
          if (extn == "gif" || extn == "png" || extn == "jpg" || extn == "jpeg") {
            if (typeof(FileReader) != "undefined") {
              //loop for each file selected for uploaded.
              for (var i = 0; i < countFiles; i++) 
              {
                var reader = new FileReader();
                reader.onload = function(e) {
                  $("<img />", {
                    "src": e.target.result,
                    "class": "thumb-image"
                  }).appendTo(image_holder);
                }
                image_holder.show();
                reader.readAsDataURL($(this)[0].files[i]);
              }
            } else {
              echo (image_holder);
            }
          } else {
            //alert ("Pls select only images");
          }
        });
      });
</script>