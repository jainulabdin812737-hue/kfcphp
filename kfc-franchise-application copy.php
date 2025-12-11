<?php include('header.php'); ?>
<?php
// ================= FORM SUBMIT =================
$message = "";

if (isset($_POST['submit'])) {

    $name       = $conn->real_escape_string($_POST['name']);
    $email      = $conn->real_escape_string($_POST['email']);
    $phone      = $conn->real_escape_string($_POST['phone']);
    $address    = $conn->real_escape_string($_POST['address']);
    $experience = $conn->real_escape_string($_POST['pincode']);
    $years      = $conn->real_escape_string($_POST['password']);

    $state      = $conn->real_escape_string($_POST['code']);
    $city       = $conn->real_escape_string($_POST['Ccode']);
    $district   = $conn->real_escape_string($_POST['bank']);
    $pin        = $conn->real_escape_string($_POST['bankacc']);

    $sql = "INSERT INTO applicants 
    (name,email,phone,address,experience,years,state,city,district,pincode)
    VALUES ('$name','$email','$phone','$address','$experience','$years','$state','$city','$district','$pin')";

    if ($conn->query($sql)) {
        $message = "<div style='padding:12px;background:green;color:white;text-align:center;font-size:18px;border-radius:5px;'>✔ Application Submitted Successfully!</div>";
    } else {
        $message = "<div style='padding:12px;background:red;color:white;text-align:center;font-size:18px;border-radius:5px;'>❌ Error: ".$conn->error."</div>";
    }
}

?>

<style>
    .label-input1002 {
        display: block;
        width: 100%;
        background: transparent;
        font-family: Raleway-SemiBold;
        font-size: 18px;
        color: #333333;
        line-height: 1.2;
        padding: 0 25px;
        border: 1px solid;
    }

    .input100 {
        display: block;
        width: 100%;
        background: transparent;
        font-family: sans-serif;
        font-size: 18px;
        color: #333333;
        line-height: 1.2;
        padding: 0 25px;
        border: 1px solid;
    }

    .wrap-input1002 {
        width: 100%;
        position: relative;
        border: 1px solid #e6e6e6;
        border-radius: 2px;
        margin-bottom: 50px;
    }

    .dm1 {
        padding: 0px;
        margin: 0px auto;
        color: black;
        font-weight: bold;
        text-align: center;
        font-size: 18px;
        width: 100%;
        padding-bottom: 25px;
        text-decoration: underline red;
        text-shadow: 2px 2px 2px white;
    }

</style>
<div class="become-a-dealer">
<div class="container">
<div class="row">
<br>
<br>
<br>
<br>
<div class="wrap-contact100">
<h1 class="dm1">KFC Franchise Application 2025</h1>
<p>Yes, KFC franchise business is one of the undoubted profitable and rewarding options for people who are planning to start a retail-based food service KFC franchise opportunity in India. But before stepping in, just analyze and decide based on your skills, interest, experience, and knowledge whether this KFC franchise business opportunity fits you.</p>
<p> </p>
<form method="POST" action="">
<div class="contact100-form validate-form">
<label class="label-input100" for="firstname">Personal Information</label>
<div class="wrap-input100 rs1 validate-input">
<input id="name" class="input100" type="text" name="name" placeholder="Enter Your Name" required>
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 rs1 validate-input">
<input class="input100" type="text" name="email" placeholder="Enter Your Email" required>
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 rs1 validate-input">
<input id="mobileno" class="input100" type="text" name="phone" placeholder="Enter Your Mobile Number" required>
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 rs1 validate-input">
<input id="business" class="input100" type="text" name="address" placeholder="Current Business Name">
<span class="focus-input100"></span>
</div>
<div style="border:1px solid black;" class="wrap-input100 rs1 validate-input">
<select style="border:none; padding-top:16px;" class="input100" type="text" name="pincode">
<option value="#"></option>
<option value="#" select>Select Business Experience</option>
<option value="Hotel">Hotel</option>
<option value="Restaurant">Restaurant</option>
<option value="Others Non-Hotel/Restaurant">Others Non-Hotel/Restaurant</option>
<option value="None">None</option>
</select>
<span class="focus-input100"></span>
</div>
<div class="wrap-input100 rs1 validate-input">
<input class="input100" type="text" name="password" placeholder="Years In Business" required>
<span class="focus-input100"></span>
</div>
<label style="padding-left: 19px;" class="label-input100" for="area">Applying Area</label>
<div class="col-md-3">
<div style="width: 100%;
    position: relative;
    border: 1px solid #e6e6e6;
    border-radius: 2px;
    margin-bottom: 50px;" class="wrap-input102 rs1 validate-input">
<input class="input100" type="text" name="code" placeholder="State">
<span class="focus-input100"></span>
</div>
</div>
<div class="col-md-3">
<div style="width: 100%;
    position: relative;
    border: 1px solid #e6e6e6;
    border-radius: 2px;
    margin-bottom: 50px;" class="wrap-input102 rs1 validate-input">
<input class="input100" type="text" name="Ccode" placeholder="city">
<span class="focus-input100"></span>
</div>
</div>
<div class="col-md-3">
<div style="width: 100%;
    position: relative;
    border: 1px solid #e6e6e6;
    border-radius: 2px;
    margin-bottom: 50px;" class="wrap-input102 rs1 validate-input">
<input class="input100" type="text" name="bank" placeholder="district">
<span class="focus-input100"></span>
</div>
</div>
<div class="col-md-3">
<div style="width: 100%;
    position: relative;
    border: 1px solid #e6e6e6;
    border-radius: 2px;
    margin-bottom: 50px;" class="wrap-input102 rs1 validate-input">
<input class="input100" type="text" name="bankacc" placeholder="Pin Code">
<span class="focus-input100"></span>
</div>
</div>
<div class="container-contact100-form-btn">
                            <div class="col-sm-12" style="text-align:center;">
                                <input type="submit" name="submit" value="Submit" class="btn btn-default btn11a">
                            </div>
</div></div></form>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
$(document).ready(function () {

    $("form").on("submit", function (e) {
        e.preventDefault(); // Form submit ko stop karega

        // Form se values collect karna
        let data = {
            name: $("#name").val(),
            email: $("input[name='email']").val(),
            phone: $("#mobileno").val(),
            address: $("#business").val(),
            experience: $("select[name='pincode']").val(),
            years: $("input[name='password']").val(),
            state: $("input[name='code']").val(),
            city: $("input[name='Ccode']").val(),
            district: $("input[name='bank']").val(),
            pincode: $("input[name='bankacc']").val()
        };

        // AJAX Request
        $.ajax({
            url: "api.php",
            type: "POST",
            data: JSON.stringify(data),
            contentType: "application/json",
            success: function (response) {
                alert("Data Saved Successfully!");
                console.log(response);
            },
            error: function (xhr, status, error) {
                alert("Something went wrong!");
                console.log(error);
            }
        });

    });
});
</script>




</div>
</div>
<br>
<br>
<br>
<br>
</div>
</div>
<style>
    .btn11a {
        color: white;
        background: #ff6200;
        text-transform: uppercase;
    }

    .btn11a:hover {
        color: white;
        background: #bf825b;
    }

</style>

<section class="replacement_area">
<div class="container">
<div class="contactb">
<div class="row">
<div class="col-md-3">
<div class="con1">
<center><img src="img/about/call-logo.png" alt="kfc franchise"></center>
<center>
<h5 style="color: black;">Call Us At</h5>
</center>
</div>
</div>
<div class="col-md-5">
<div class="con2">
<center><img src="img/about/map-logo.png" alt="kfc franchise"></center>
<center>
<h5 style="color: black;">Our Address</h5>
</center>
<center>
<p style="font-size:15px;">702, Prism Towers, Link Road, Goregaon West (Behind Hypercity, Mindspace), Mumbai, Maharashtra, India , Pin Code –
400062.</p>
</center>
</div>
</div>
<div class="col-md-3">
<div class="con3">
<center><img src="img/about/email-logo.png" alt="kfc franchise"></center>
<center>
<h5 style="color: black;">Email</h5>
</center>
<center>
<p>info@kfcind.in</p>
</center>
</div>
</div>
</div>
</div>
</div>
</section>
 <?php include('footer.php'); ?>