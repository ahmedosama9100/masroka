<html lang = "en">
    <head>
    <meta charset ="utf-8">
    <title>Login</title>
    <link rel ="stylesheet" href ="CSS/Home.CSS">
</head>
<body>
    <div id="logo"><a href = "">
        </a>
    </div>
    <div class="header-control">
        <div class="image-control">
            <img src="Images/Logo.png">
        </div>
        <div class="login">
   <table >
        <tr>

            <td id="email">Email</td>
            <td id="password">Password</td>

        </tr>
        <tr>
<form action="" method="post">
            <td><input type="email" name="emaill" class="inputtext"/></td>
            <td><input type="password" name="password" class="inputtext"/></td>
            <td><input type="submit" name="login" class="button1" value="Log In"/></td>
</form>
<?php
include 'classes\User.php';
if(isset($_POST['login']))
{
$o=new UserServices;
$o->signin();
}
?>
        </tr>
    </table>
            </div>
        
        </div>
        
        
 <div class="signup">
       <div class="left">
     <p >We are trying to make your missing items find you. </p>
         <p></p>
     </div>
    <div class="right">
 <form method="post" action="">
        <h1>First Time to Use Masroka </h1>
        <p>Create your account here.</p>
     <table>
        <tr>

            <td><input type="text" name="fn" placeholder="First Name" class="firstRow"></td>
            <td><input type="text" name="ln" placeholder="Second Name" class="firstRow"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="text" name="email" placeholder="Email" class="secondRow"/></td>
        </tr>
        <tr>
            <td colspan="2"><input type="text" name="phone" placeholder="Phone" class ="thirdRow"></td>
         </tr>
        <tr>
            <td><input type="password" name="pass1" placeholder="Password" class="fourthRow"/></td>
             <td><input type="password" name="pass2" placeholder="Confirm Password" class="fourthRow"/></td>
        </tr>
            <tr>
            <td colspan="2"><input type="submit" name="signup" value="Sign up" class ="fifthRow"></td>
</form>  
<?php

if(isset($_POST['signup']))
{ 
 $t=new UserServices;
 $t->signup();
}
?>
</table>
         </tr> 

     </div>
    </div>




</body>
</html>


