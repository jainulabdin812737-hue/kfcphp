<?php
// ================== DATABASE CONNECTION ==================
$host = "sql100.infinityfree.com";
$user = "if0_40637241";
$pass = "Laljigst77";
$db   = "if0_40637241_kfc";

$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die("DB Connection Failed: " . $conn->connect_error);
}

// ================== FORM SUBMIT ==================
$message = "";

if (isset($_POST['submit'])) {

    $name       = $conn->real_escape_string($_POST['name']);
    $email      = $conn->real_escape_string($_POST['email']);
    $phone      = $conn->real_escape_string($_POST['phone']);
    $address    = $conn->real_escape_string($_POST['address']);
    $experience = $conn->real_escape_string($_POST['experience']);
    $years      = intval($_POST['years']);
    $state      = $conn->real_escape_string($_POST['state']);
    $city       = $conn->real_escape_string($_POST['city']);
    $district   = $conn->real_escape_string($_POST['district']);
    $pincode    = $conn->real_escape_string($_POST['pincode']);

    $sql = "INSERT INTO applicants
    (name, email, phone, address, experience, years, state, city, district, pincode)
    VALUES ('$name', '$email', '$phone', '$address', '$experience', '$years', '$state', '$city', '$district', '$pincode')";

    if ($conn->query($sql)) {
        $message = "✔ Application Submitted Successfully!";
    } else {
        $message = "❌ Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>KFC Franchise Application</title>
<style>
body{
    font-family: Arial;
    background:#f3f3f3;
    padding:20px;
}
form{
    background:white;
    padding:20px;
    width:400px;
    margin:auto;
    border-radius:10px;
}
input,select{
    width:100%;
    padding:10px;
    margin-bottom:15px;
    border:1px solid grey;
    border-radius:5px;
}
button,input[type=submit]{
    background:red;
    color:white;
    padding:12px;
    border:none;
    width:100%;
    cursor:pointer;
}
.success{color:green;font-weight:bold;text-align:center;}
.error{color:red;font-weight:bold;text-align:center;}
</style>
</head>
<body>

<h2 style="text-align:center;">KFC Franchise Application</h2>

<?php if ($message != ""): ?>
    <p class="<?php echo (strpos($message,'✔')!==false)?'success':'error'; ?>">
        <?php echo $message; ?>
    </p>
<?php endif; ?>

<form method="POST">

    <input type="text" name="name" placeholder="Enter Your Name" required>
    <input type="email" name="email" placeholder="Enter Your Email" required>
    <input type="text" name="phone" placeholder="Enter Your Mobile Number" required>
    <input type="text" name="address" placeholder="Current Business Name">

    <select name="experience" required>
        <option value="">Select Business Experience</option>
        <option value="Hotel">Hotel</option>
        <option value="Restaurant">Restaurant</option>
        <option value="Others Non-Hotel/Restaurant">Others Non-Hotel/Restaurant</option>
        <option value="None">None</option>
    </select>

    <input type="number" name="years" placeholder="Years in Business" required>

    <input type="text" name="state" placeholder="State" required>
    <input type="text" name="city" placeholder="City" required>
    <input type="text" name="district" placeholder="District" required>
    <input type="text" name="pincode" placeholder="Pin Code" required>

    <input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
