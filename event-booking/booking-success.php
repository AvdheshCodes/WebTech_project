<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Booking Successful</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<section class="page-header">
  <h1>🎉 Booking Confirmed!</h1>

</section>

<section class="container success-box">

  <?php
    $name = $_GET['name'];
    $event = $_GET['event'];
    $tickets = $_GET['tickets'];
  ?>
    <p>Your tickets are reserved.</p>
  <h2>Thank you, <?php echo $name; ?>!</h2>
    <img src="images/gallery4.jpg" class="details-banner" height="300px">

  <p>You have successfully booked <strong><?php echo $tickets; ?> ticket(s)</strong> for:</p>
  <h3><?php echo $event; ?></h3>

<button class="btn-primary" onclick="location.href='index.html'">
  Return Home
</button>

</section>

</body>
</html>
