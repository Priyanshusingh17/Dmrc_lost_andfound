<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delhi Metro Lost & Found</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class='navbar'>
<a href='index.php'>Home</a>
<a href='report.php'>Report</a>
<a href='admin/login.php'>Admin</a>
</div>

    <!-- Header with Logo -->
    <header>
        <img src="assets/images/delhi_metro_logo.png" alt="Delhi Metro Logo">
        <h1>Delhi Metro Lost & Found</h1>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="card">
            <h2>Welcome to Lost & Found Portal</h2>
            <p>
                This platform helps Delhi Metro passengers to report lost items and check found reports. 
                Our aim is to return maximum items to their rightful owners.
            </p>
            <a href="report.php"><button class="btn">Report Lost Item</button></a>
            <a href="view_reports.php"><button class="btn">View Found Items</button></a>
        </div>

        <div class="card">
            <h2>How it Works?</h2>
            <p>👉 Passengers can report lost items with details and photos.<br>
               👉 Admin verifies reports before displaying them.<br>
               👉 Approved reports are shown in public listing.<br>
               👉 Users can claim items by contacting the authority.</p>
        </div>
    </div>
</body>
</html>