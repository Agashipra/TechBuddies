<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Online Payment</title>
  <link rel="stylesheet" href="pay.css">
</head>
<body>
  <div class="container">
    <!-- Header Section -->
    <header class="header">
      <div class="logo">TechBuddies</div>
      <h1>Secure Online Payment</h1>
      <p>Your information is protected with advanced encryption.</p>
    </header>

    <!-- Main Form Area -->
    <form class="payment-form" action="#" method="POST">
      <!-- Form Fields -->
      <div class="form-group">
        <label for="name">Full Name</label>
        <input type="text" id="name" placeholder="John Doe" name="name" required>
      </div>

      <div class="form-group">
        <label for="mobile">Mobile Number</label>
        <div class="mobile-input">
          <select id="country-code">
            <option value="+91">+91</option>
            <option value="+1">+1</option>
            <option value="+44">+44</option>
            <option value="+01">+01</option>
            <option value="+11">+11</option>
          </select>
          <input type="tel" id="mobile" placeholder="9876543210" name="mobile" required>
        </div>
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email" placeholder="youremail@example.com" name="email" required>
      </div>

      <div class="form-group">
        <label for="amount">Payment Amount (₹)</label>
        <input type="number" id="amount" placeholder="1000.00" name="payment" required>
      </div>

      <div class="form-group">
        <label for="notes">Additional Notes (Optional)</label>
        <textarea id="notes" placeholder="This payment is for..."></textarea>
      </div>

      <!-- Payment Options -->
      <h2>Choose Payment Method</h2>
      <div class="payment-options">
        <select name="paymentoptions">
          <option>UPI</option>
          <option>Debit/Credit Card</option>
          <option>NET BANKING</option>
          <option>WALLETS</option>
        </select>
      </div>

      <!-- Summary and CTA -->
      <div class="summary">
        <p><strong>Summary:</strong> Ensure all details are correct before proceeding.</p>
      </div>
      <div class="cta-button">
      <button type="submit" name="pay" class="cta-button">
       <span class="lock-icon">🔒</span> Proceed to Pay
      </button>
  </div>

   </form>

    <!-- Footer Section -->
    <footer class="footer">
      <p>All transactions are secured and encrypted. For support, contact <a href="mailto:support@example.com">techbuddies@gmail.com</a>.</p>
    </footer>
  </div>
</body>
</html>

<?php

include("connection.php");

if(isset($_POST['pay']))
{
   $fname=$_POST['name'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $pay=$_POST['payment'];
    $payoption=$_POST['paymentoptions'];

  $query="INSERT INTO paymentinfo values('$fname', '$mobile', '$email', '$pay', '$payoption')";
    $data=mysqli_query($conn,$query);

    if($data)
    {
        echo"data inserted successfully";
    }
    else{
        echo"data not inserted";
    }
  }
?>
