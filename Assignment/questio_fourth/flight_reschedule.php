<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
</head>
<body>
<div class="container">
    <div class="card p-4 mt-5">
        <div class="row g-3">
            <div class="col-12 mb-4">
                <h4>Flight Booking</h4>
            </div>
            <div class="col-lg-6 col-md-12">
                <form method="POST" action="showingDetailes.php">
                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="FLYING FROM" value="Pune" name="flyingFrom">
                    <label>FLYING FROM</label>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="form-floating">
                    <input type="text" class="form-control" placeholder="FLYING TO" value="Chhatrapati Sambhajinagar"
                           name="flyingTo">
                    <label>FLYING TO</label>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="form-floating">
                    <input type="date" class="form-control" placeholder="DEPARTING" value="15/06/2023" name="date" required>
                    <label>DEPARTING</label>
                </div>
            </div>
            <div class="col-12 mt-4">
               <input type="submit" class="btn btn-primary text-uppercase" value="Update dates">
            </div>
            </form>
        </div>
    </div>
</div>
</form>
</body>
</html>
<?php

?>