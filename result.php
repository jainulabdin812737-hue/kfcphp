<?php include('header.php'); ?>

<?php
require 'config.php';  // DB connection

$phone = $conn->real_escape_string($_GET['phone']);
$email = $conn->real_escape_string($_GET['email']);

$sql = "SELECT * FROM applicants WHERE phone='$phone' AND email='$email' LIMIT 1";
$result = $conn->query($sql);
?>

<br/>
<br/>
<br/>
<br/>

<div class="container" style="margin-top:40px;">

<?php
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
?>



    <h2 style="text-align:center;">Application Details</h2>
    <table class="table table-bordered" style="margin-top:30px;">

        <tr><th>Name</th><td><?php echo $row['name']; ?></td></tr>
        <tr><th>Email</th><td><?php echo $row['email']; ?></td></tr>
        <tr><th>Phone</th><td><?php echo $row['phone']; ?></td></tr>
        <tr><th>Address</th><td><?php echo $row['address']; ?></td></tr>
        <tr><th>Experience</th><td><?php echo $row['experience']; ?></td></tr>
        <tr><th>Years in Business</th><td><?php echo $row['years']; ?></td></tr>
        <tr><th>State</th><td><?php echo $row['state']; ?></td></tr>
        <tr><th>City</th><td><?php echo $row['city']; ?></td></tr>
        <tr><th>District</th><td><?php echo $row['district']; ?></td></tr>
        <tr><th>Pincode</th><td><?php echo $row['pincode']; ?></td></tr>

    </table>

    <p style="text-align:center; font-size:18px; color:#d9534f; margin-top:10px;">
    Your application status is <strong>PENDING</strong>.
</p>

<?php
} else {
    echo "<h3 style='text-align:center;color:red;'>❌ No Record Found</h3>";
}
?>

</div><br/>
<br/>
<br/>

<?php include('footer.php'); ?>
