<html>

<head>

    <title>Order Now</title>
    <link href="style order.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>

    <div class="hero">
        <div class="row">
            <div class="col">

                <div class="slider">
                    <div class="product">

                        <img src="images/pro1.png" alt="" onclick="clickme(this)">
                        <img src="images/pro2.png" alt="" onclick="clickme(this)">
                        <img src="images/pro3.png" alt="" onclick="clickme(this)">
                        <img src="images/pro4.png" alt="" onclick="clickme(this)">

                    </div>
                    <div class="preview">
                        <img src="images/pro1.png" id="imagebox" alt="">
                    </div>
                </div>

            </div>
            <div class="col">

                <div class="content">
                    <p class="brand">NIKE</p>
                    <h2>Nike Air Max Bolt</h2>
                    <p class="price">8,000 Rs</p>
                    <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                    </div>
                    <p class="price">Features</p>
                   
                          

                        
                    <p>Cushioned Comfort :- Visible Max Air cushioning under the heel helps dissipate force from impact to soften landings.</p>

                     <p>Durable Traction :- Aggressive herringbone traction helps control your movement and hold your ground.Diamond-shaped cut-outs expose the foam and help reduce weight.</p>

            
<p class="price">Order Now</p>

<div>

  <form action="connect order.php"  method="post">
  
    <label for="size">Size</label>
    <select id="size" name="size">
      <option value="7 Uk">7 Uk</option>
      <option value="8 Uk">8 Uk</option>
      <option value="9 Uk">9 Uk</option>
      <option value="10 Uk">10 Uk</option>
      <option value="11 Uk">11 Uk</option>
    </select>
    
    <label for="quantity">Quantity</label>
    <select id="quantity" name="quantity">
      <option value="1">1</option>
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
      <option value="5">5</option>
      
    </select>
    <br>
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" />

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" />
    <br>
    
    <label for="flatno">Flat No/Society</label>
    <input type="text" id="flatno" name="flatno" />

    <label for="area">Area</label>
    <input type="text" id="area" name="area" />
    <br>
    
    <label for="city">City</label>
    <input type="text" id="city" name="city" />

    <label for="state">State</label>
    <input type="text" id="state" name="state" />
    
    <label for="zip">Zip</label>
    <input type="text" id="zip" name="zip" />
    <br>
    
    <input type="submit" value="Submit">

   <a href="pay.php" target="_blank">Link For Payment</a>


            </div>
        </div>        
    </div>







    <script>
        function clickme(smallImg) {

            var fullImg = document.getElementById("imagebox");
            fullImg.src = smallImg.src;

        }

    </script>



</body>

</html>
