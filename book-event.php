<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book Event</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

<section class="page-header">
  <h1>Book Your Tickets</h1>
  <p>Fill in your details to continue</p>
</section>

<section class="booking-section">
  <div class="container">
    <div class="booking-form">
        
<form action="submit-booking.php" method="POST">


        <div class="form-group">
          <label>Full Name</label>
          <input type="text" name="name" required>
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" required>
        </div>

        <div class="form-group">
          <label>Phone Number</label>
          <input type="tel" name="phone" required>
        </div>

        <div class="form-group">
          <label>Select Event</label>
          <select name="event" required>
            <option>Select Event</option>
            <option>Rock Revolution</option>
            <option>Electronic Nights</option>
            <option>Jazz & Soul Evening</option>
          </select>
        </div>

        <div class="form-group">
          <label>Number of Tickets</label>
          <select name="tickets" required>
            <option>Select</option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>

        <button type="submit" class="btn-submit">Confirm Booking</button>

      </form>
    </div>
  </div>
</section>

</body>
</html>
