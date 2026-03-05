<?php @include("includes/head.php");?>
<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
if(!empty($_POST["fullname"])) {
  $fullname= $_POST["fullname"];
  
  $sql ="SELECT UserName FROM tbladmin WHERE UserName=:fullname";
  $query= $dbh -> prepare($sql);
  $query-> bindParam(':fullname', $fullname, PDO::PARAM_STR);
  $query-> execute();
  $results = $query -> fetchAll(PDO::FETCH_OBJ);
  $cnt=1;
  if($query -> rowCount() > 0)
  {
    echo "<script>alert('Username already exists. try another one');</script>";
} else{
    if(isset($_POST['signup']))
    { 
        $fname=$_POST['fullname'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $email=$_POST['emailid']; 
        
        $mobile=$_POST['mobileno'];
        $pattern = '/^[0-9]{10}$/';

        $dignity=$_POST['dignity']; 
        $password=md5($_POST['password']); 
        $sql="INSERT INTO  tbladmin(AdminName,UserName,FirstName,LastName,Email,MobileNumber,Password) VALUES(:dignity,:fname,:firstname,:lastname,:email,:mobile,:password)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':fname',$fname,PDO::PARAM_STR);
        $query->bindParam(':firstname',$firstname,PDO::PARAM_STR);
        $query->bindParam('lastname',$lastname,PDO::PARAM_STR);
        $query->bindParam(':email',$email,PDO::PARAM_STR);
        
        $query->bindParam(':dignity',$dignity,PDO::PARAM_STR);
        $query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
  
        $query->bindParam(':password',$password,PDO::PARAM_STR);
        $query->execute();
        $lastInsertId = $dbh->lastInsertId();
        if($lastInsertId)
        {
            echo "<script>alert('Registration successfull. Now you can login');</script>";
        }
        else 
        {
            echo "<script>alert('Something went wrong. Please try again');</script>";
        }
    }
}
}

?>
<script>
    function checkAvailability() 
    {
        $("#loaderIcon").show();
        jQuery.ajax(
        {
            url: "check_availability.php",
            data:'emailid='+$("#emailid").val(),
            type: "POST",
            success:function(data)
            {
                $("#user-availability-status").html(data);
                $("#loaderIcon").hide();
            },
            error:function (){}
        });
    }
</script>
<script>
    function checkAvailability5() 
    {
        $("#loaderIcon").show();
        jQuery.ajax(
        {
            url: "check_availability.php",
            data:'mobileno='+$("#mobileno").val(),
            type: "POST",
            success:function(data)
            {
                $("#user-availability-status3").html(data);
                $("#loaderIcon").hide();
            },
            error:function (){}
        });
    }
</script>
 
<script>
    function checkAvailability2() 
    {
        $("#loaderIcon").show();
        jQuery.ajax(
        {
            url: "check_availability.php",
            data:'fullname='+$("#fullname").val(),
            type: "POST",
            success:function(data)
            {
                $("#user-availability-status2").html(data);
                $("#loaderIcon").hide();
            },
            error:function (){}
        });
    }
</script>
<script type="text/javascript">
    function valid()
    {
        if(document.signup.password.value!= document.signup.confirmpassword.value)
        {
            alert("Password and Confirm Password Field do not match  !!");
            document.signup.confirmpassword.focus();
            return false;
        }
        return true;
    }
</script>
<head lang="en">
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="js/script.js"></script>
</head>
<div class="container-scroller" Style="width:100%;" >
 
            <div class="content-wrapper d-flex align-items-center auth " Style="width:100%;" >
                <div class="row flex-grow >
                    <div class="col-lg-4 mx-auto" Style="width:500px; margin-left:25%;" >
                        <div class="auth-form-light text-left p-5" >
                            <div class="brand-logo" align="center">
                                <img class="img-avatar" Style="width:250px;" src="images/Agrifriend-1 (2)1 (2).png" alt="">
                                <h6 class="font-weight-light" style="margin:10px;" >Signing up is easy. It only takes a few steps</h6>
                            </div>
                           
<div class="card-body " Style="width:100%;">
    <form  method="post" name="signup" onSubmit="return valid();">
       
    <div class="row">
            <div class="form-group col-md-6"  >
                <select class="form-control"   name="dignity"  id="dignity"  required>
                    <option value="">Select permisions</option>
                    <option value="User">User</option>
                </select>
            </div>
            <div class="form-group col-md-6" style="margin-bottom:12px; Width:100px;">
                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="User Name" onBlur="checkAvailability2()" required="required">
                <span id="user-availability-status2" style="font-size:12px;"></span>
            </div>
    </div>

            <div class="row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" name="firstname" placeholder="First Name" required="required">
            </div>
            <div class="form-group col-md-6" style="margin-bottom:12px; Width:100px;">
                <input type="text" class="form-control" name="lastname" placeholder="Last Name" required="required">
            </div>
            </div>

            <div class="row">
            <div class="form-group col-md-6" style="margin-bottom:12px; Width:100px;">
                <input type="text" class="form-control" name="mobileno" id="mobileno" placeholder="Mobile Number" onBlur="checkAvailability5()" maxlength="10" required="required" required pattern="[0-9]{10}">
                <span id="user-availability-status3" style="font-size:12px;"></span>
            </div>
            <div class="form-group col-md-6" style="margin-bottom:12px; Width:100px;">
                <input type="email" class="form-control" name="emailid" id="emailid" onBlur="checkAvailability()" placeholder="Email Address" required="required">
                <span id="user-availability-status" style="font-size:12px;"></span> 
            </div>
            </div>


            <div class="row">
            <div class="form-group col-md-6" style="margin-bottom:12px;">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
            </div>
            <div class="form-group col-md-6"  style="margin-bottom:12px;">
                <input type="password" class="form-control" name="confirmpassword" placeholder="Confirm Password" required="required">
            </div>
        </div>



</div>

<div class="row">
        <div class="form-group" style="margin-left:22%;">
            <input type="submit" value="REGISTER" name="signup" id="submit" class="btn btn-info">
        </div>
        <div class="form-group" style="margin-left:10%;">
        <a href="index1.php">
            <input type="button" value="LOGIN" class="btn btn-info">
</a>
        </div>
</div>
</div>
</div>

</div>


</div>
    </form>
</div>