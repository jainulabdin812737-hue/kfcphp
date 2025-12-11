<?php include('header.php'); ?>
<div class="container">
    <h2 style="text-align:center;margin-top:40px;">Search Application</h2>

    <form method="GET" action="result.php" style="max-width:500px;margin:auto;margin-top:30px;">
        <div class="form-group">
            <label>Enter Mobile Number</label>
            <input type="text" class="form-control" name="phone" required>
        </div>

        <div class="form-group">
            <label>Enter Email</label>
            <input type="text" class="form-control" name="email" required>
        </div>

        <br>
        <center><button type="submit" class="btn btn-primary">Search</button></center>
    </form>
</div>
<?php include('footer.php'); ?>
