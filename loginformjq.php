<?php
session_start();
$cap = 'notEq';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['captcha'] == $_SESSION['cap_code']) {
        // Captcha verification is Correct. Do something here!
        $cap = 'Eq';
    } else {
        // Captcha verification is wrong. Take other action
        $cap = '';
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
        
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
  <script src="jquery-3.1.1.min.js"></script>
  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
  <script src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js"></script>
  
<style type="text/css">
p1{
    color:orange;
}
p2{
    color:green;
}

 .thumb-image
 {
    float:left;
    width:50px;
    position:relative;
    padding:2px;
}

body{
                
                }
        
            #form label{
                font:bold 11px arial;
                color: #565656;
                padding-left: 1px;
            }
            #form label.mandat{color:red;}
            #form input[type="text"]{
                height: 30px;
                margin-bottom: 8px;
                padding: 5px;
                font: 12px arial;
                color: olive;
            }
            #form textarea{
                width: 340px;
                height: 80px;
                resize: none;
                margin: 0 0 8px 1px;
                padding: 5px;
                font: 12px arial;
                color: yellow;
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
            .error{
                border: 1px solid olive;
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


</style>
  
  <script>
  
   $.validator.addMethod("error1", function(value, element, error) {          
    return error.test(value);
});

   $.validator.addMethod("error2", function(value, element, error) {          
    return error.test(value);
});

 $.validator.addMethod("error3", function(value, element, error) {          
    return error.test(value);
}); 
$.validator.addMethod("error4", function(value, element, error) {
   return error.test(value);
});

    $.validator.addMethod("error5", function(value, element, error) {          
    return error.test(value);
}); 
  
$.validator.addMethod("error6", function(value, element, error) {          
    return error.test(value);
});

$.validator.addMethod("error7", function(value, element, error) {          
    return error.test(value);
});
$.validator.addMethod("error8", function(value, element, error) {          
    return error.test(value);
} );

$.validator.addMethod("error9", function(value, element, error) {          
    return error.test(value);
} );




  $(function() {
  
  
    $("#register-form").validate({
    
       
        rules: {
           
               firstname: {
                required: true,
                error1: /^[A-Za-z']+( [A-Za-z']+)*$/
                
            },
            lastname: {
                required: true,
                error2: /^[A-Za-z']+( [A-Za-z']+)*$/
              
            },
                address: {
                required: true,
                error3: /^[0-9,./\-_ a-zA-Z''\s a-zA-Z0-9]+$/
                
            },
            pincode: {
                required: true,
                error4: /^[1-9][0-9]{5}$/
                
            },


             city:  {
                required: true
            },


            dob:  {
                required: true
            },
            
           

            
              mobileno: {
                required: true,
                error5: /[7|8|9][0-9]{9}/,
                maxlength: 10
            },
            emailid: {
                required: true,
                error6: /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)+$/
                
            },

            
            
            password: {
                required: true,
                error7: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{6,16}$/
              
            },
            cpassword: {
                required: true,
                error8: /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{6,16}$/,
               equalTo: "#password"
               
            },
           
        pic: {
            required: true,
            error9: /(?=.(gif|png|jpg|jpeg))/

        },
        
        captcha:{
        required: true
      },


        },

        messages: {


          firstname: {
                required: "<p1>Please enter your first name</p1>",
               
                error1: "<p2>name must be content alphabet</p2>"
            }, 
            lastname: {
                required: "<p1>Please enter your last name</p1>",
                
                error2: "<p2>name must be content only alphabet</p2>"
            }, 




            address: {
                required: "<p1>Please enter address</p1>",
                
                error3: "<p2>name must be content alphabet with no</p2>"
            },   


            pincode: {
                required: "<p1>Please enter pincode</p1>",
                
                error4: "<p2>6 digit number only require</p2>"
            },

             city: {
            required: "<p1>Please choose city</p1>"
        },


          dob: {
            required: "<p1>Please enter date of birth</p1>"
        },


            mobileno: {
                required: "<p1>require contact no</p1>",
                
                error5: "<p2>no start with 7,8,9 with 10 digit</p2> "
            },



            emailid: {
                required: "<p1>require email </p1>",
                
                error6: "<p2>please enter email with @ and . </p2> "
            },




            password: {
                required: "<p1>Please provide a password",
                error7: "<p2> password require at least lower,upper,numeric,alphabet,special character</p2>"
            },
             cpassword: {
                required: "<p1>Please provide a password</p1>",
               error8: "<p2>password require at least lower,upper,numeric,alphabet,special character</p2>",
               equalTo: "<p1>Password not match</p1>"
            }, 

            
            
            pic: {
            required: "<p1>Please upload image</p1>",
            error9: "<p2> only accept jpg,gif,png</p2>"
        },

            captcha:{
              required:"<p1>Please fill code</p1>"
            },

        },
        
        submitHandler: function(form) {
            form.submit();
        }
    });

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
                        $('.cap_status').html("wrong enter captcha").addClass('cap_status_error').fadeIn('slow');
                    }
                }
                
                

            });
        </script>
</head>
<body>

 <div style='margin:0 auto'>

<form name= "" id="register-form" action="loginformjq.php"  method="post">
<div id="form">
<table  border="1" padding="2" cellpadding="2" width="20%" bgcolor="lightblue" align="center" cellspacing="2">

<tr>
<td colspan=2>
<center><font size=4><p style="color: purple"><marquee direction="left" behavior="alternate" style="border:solid olive">Student Registration Form</marquee></p></font></center>
</td>
</tr>

<tr>
<td><p style="color: yellow">Firstname</p></td>
<td><p class="error"><input type="text" name="firstname" id="firstname" size="20" value=""></p>
</td>
</tr>

<tr>
<td><p style="color: yellow">Lastname</p></td>
<td><p class="error"><input type="text" name="lastname" id="lastname" size="20" value=""></p>
</td>
</tr>



<tr>
<td><p style="color: yellow">Address</p></td>
<td><p class="error"><input type="text" name="address" id="address" size="20"></p>
</td>
</tr>

<tr>
<td><p style="color: yellow">Pincode</p></td>
<td><p class="error"><input type="text" name="pincode" id="pincode" size="20"></p>
</td>
</tr>



<tr>
<td><p style="color: yellow">City</td>
<td><select name="city">
<p1><option value="" selected>select city</option>
<option value="New Delhi">NEW DELHI</option>
<option value="Mumbai">MUMBAI</option>
<option value="Goa">GOA</option>
<option value="Patna">PATNA</option>
</select></p1>
</td>
</tr>





<tr>
<td><p style="color: yellow">DOB</p></td>
<td><p class="error"><input type="date" name="dob" id="dob" size="20"></p>
</td>
</tr>

<tr>
<td><p style="color: yellow">MobileNo</p></td>
<td><p class="error"><input type="text" name="mobileno" id="mobileno" size="20"></p>
</td>
</tr>



<tr>
<td><p style="color: yellow">EmailId</p></td>
<td><p class="error"><input type="text" name="emailid" id="emailid" size="20"></p>
</td>
</tr>



<tr>
<td><p style="color: yellow">password</p></td>
<td><p class="error"><input type="password" id="password" name="password" size="20"></p>
</td>
</tr>

<tr>
<td><p style="color: yellow">cpassword</p></td>
<td><p class="error"><input type="password" id="cpassword" name="cpassword" size="20"></p>
</td>
</tr>


    
            
              
                    
                    
<tr><p style="color: yellow"><td>
<p class="error">
     <input type="file" name="pic"  id="pic"></p><span id="image-holder"> </span>
     </p></td></tr>


                      <tr>
                        <td colspan="2"><label style="color:yellow">Enter the contents of image   </label></td>
                    </tr>
                    <tr>
                        <td width="60px">                           
                            <input type="text" name="captcha" id="captcha" maxlength="6" size="6"/></td>
                        <td><img src="captcha.php"/></td>
                    </tr>




<tr>
<p style="color: yellow"></p>
<td colspan="1"><input type="submit" value="submit"></td>

</tr>
</table>
</form>
  
</div>
        
        <div class="cap_status"></div>
        </div>
</body>
</html>

