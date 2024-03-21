<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Payment</title>
	<link rel="stylesheet" href="pay styles.css">
</head>     
<body>

<div class="wrapper">
  <div class="container">
    <div class="title">Payment</div>
    <div class="heading">Nike Air Max Boult</div>
     <div class="heading">8,000 Rs</div>
    <form action="pay connect.php"  method="post">
    <div class="input-form">
      <div class="section-1">
        <div class="items">
          <label class="label">card number</label>
          <input type="text" class="input" data-mask="0000 0000 0000 0000" placeholder="1234 1234 1234 1234" name="cardnumber" />
        </div>
      </div>
      <div class="section-2">
        <div class="items">
          <label class="label">card holder</label>
          <input type="text" class="input" placeholder="Name" name="cardholder" />
        </div>
      </div>
      <div class="section-3">
        <div class="items">
          <label class="label">Expiry date</label>
          <input type="text" class="input" data-mask="00 / 00" placeholder="MM / YY" name="expirydate" />
        </div>
        <div class="items">
          <div class="cvc">
            <label class="label">cvv code</label>
            <div class="tooltip">?
              <div class="cvc-img"><img src="cvv.png" alt=""></div>
            </div>
          </div>
          <input type="text" class="input" data-mask="0000" placeholder="0000" name="cvvcode" />
        </div>
      </div>
    </div>

    
    <input type="submit" value="Submit">
  </form>
</div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js"></script>
</body>
</html>