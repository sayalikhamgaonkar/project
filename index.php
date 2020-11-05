<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="footer.css">
</head>
<body>

<div class="topnav" id="myTopnav">
    <nav role="navigation">
    <header role="banner">
        <!-- Nav Logo -->
        <a href="#"><img src="./Assets/Images/shop.png" alt="Logo" width="70" height="50"></a>   
    </header>

    <a href="#home" class="active">Home</a>

    <div class="dropdown">
        <button class="dropbtn flex">Men's 
            <span class="dropdown-icon"></span>
        </button>
    <div class="dropdown-content">
        <a href="#">Clothes</a>
        <a href="#">Shoes</a>
        <a href="#">Watches</a>
        <a href="#">Wallets</a> 
    </div>
</div> 
    
<div class="dropdown">
    <button class="dropbtn flex">Women's 
        <span class="dropdown-icon"></span>
    </button>
    <div class="dropdown-content">
        <a href="#">Clothes</a>
        <a href="#">Shoes</a>
        <a href="#">Watches</a>
        <a href="#">Cosmetics</a>
        <a href="#">Handbags</a>
    </div>
</div>
      
    <div class="dropdown">
        <button class="dropbtn flex">Electronics
            <span class="dropdown-icon"></span>
        </button>
        <div class="dropdown-content">
            <a href="#">Headphones</a>
            <a href="#">Camera</a>
            <a href="#">Speakers</a>
        </div>
    </div>
    <a href="#about">Pantry</a>
    <div class="dropdown">
        <button class="dropbtn flex">Customer Services
            <span class="dropdown-icon"></span>
        </button>
        <div class="dropdown-content">
            <a href="#">FAQ'S</a>
            <a href="#">Your Order</a>
            <a href="#">Contact Us</a>
        </div>
    </div>      
    <a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<!-- Advertisement Box -->
<div class="advert-box">
      <div class="left-arrow-box flex">
            <span class="left-arrow arrow"></span>
      </div>
      <div class="right-arrow-box flex">
            <span class="right-arrow arrow"></span>
      </div>
      <div class="advert flex">

      </div>  
</div>



<div>  
    <!-- <h2>Your Gadget Store</h2>
    <img src="./Assets/Images/cam1.png" width="250" height="300" hspace="30"> 
    <img src="./Assets/Images/cam2.jpeg" width="250" height="300" hspace="30">
    <img src="./Assets/Images/cam3.jpeg" width="250" height="300" hspace="30">
    <img src="./Assets/Images/cam5.jpeg" width="250" height="300" hspacce="30">

    <h2>Fashion House</h2>
    <img src="./Assets/Images/d1.jpeg" width="250" height="300" hspace="30">
    <img src="./Assets/Images/d2.jpeg" width="250" height="300" hspace="30">
    <img src="./Assets/Images/d5.jpeg" width="250" height="300" hspace="30">
    <img src="./Assets/Images/d6.jpeg" width="250" height="300" hspacce="30">

    <h2>Trending Shoes</h2>
    <img src="./Assets/Images/shoes1.jpeg" width="250" height="300" hspace="30">
    <img src="./Assets/Images/shoes2.jpeg" width="250" height="300" hspace="30">
    <img src="./Assets/Images/shoes3.jpeg" width="250" height="300" hspace="30">
    <img src="./Assets/Images/shoes4.jpeg" width="250" height="300" hspacce="30">

     -->
<!--Div Images -->
<div>


    <h2>Your Gadget Store</h2>

<div class="card"><!--Div card -->
    <div class="flex"><!--Div flex -->
        <div class="item1">
            <img src="./Assets/Images/cam1.png" width="200" height="200" hspace="30"> 
            <h1>Camera</h1>
            <p class="price">$19.99</p>
            <p>Smart Digital Camera.</p>
            <button>Add to Cart</button>
        </div><!--Div Item Close-->

        <div class="item 2"><!--Div Item -->
            <div class="card"><!--Div card -->
                <img src="./Assets/Images/cam2.jpeg" width="200" height="200" hspace="30">
                <h1>Camera</h1>
                <p class="price">$20.90</p>
                <p>Smart Digital Camera 2.</p>
                <button>Add to Cart</button>
            </div><!--Div card close -->
        </div ><!--Div Item close-->


        <div class="item3"><!--Div Item -->
            <div class="card"><!--Div card -->
                <img src="./Assets/Images/cam3.jpeg" width="200" height="200" hspace="30">
                <h1>Camera</h1>
                <p class="price">$20.90</p>
                <p>Smart Digital Camera 3.</p>
                <button>Add to Cart</button>
            </div><!--Div Item Close -->
        </div><!--Div Card Close -->




        <div class="item4"><!--Div Item -->
            <div class="card"><!--Div card -->
                <img src="./Assets/Images/cam5.jpeg" width="200" height="200" hspace="30">
                <h1>Camera</h1>
                <p class="price">$20.90</p>
                <p>Smart Digital Camera 4.</p>
                <button>Add to Cart</button>
            </div><!--Div Item close -->
        </div><!--Div Card close -->

    </div><!--Div gadget close -->
</div><!--Div flex close -->





<div>
<!-- Clothes -->
   <div>  <!--Div for Fashion Images -->
  <h2>Fashion House</h2>

<div class="card"><!--Div card -->     
<div class="flex"><!--Div Flex -->
  
<div class="item5"><!--Div Items -->
  <img src="./Assets/Images/d1.jpeg" width="200" height="200" hspace="30">
<h1>Dress</h1>
  <p class="price">$20.90</p>
  <p>Simple Dress.</p>
  <button>Add to Cart</button>
</div><!--Div Item Close -->


 <div class="item6"><!--Div Item -->
<div class="card"><!--Div card -->
  <img src="./Assets/Images/d2.jpeg" width="200" height="200" hspace="30">
<h1>Western</h1>
  <p class="price">$20.90</p>
  <p>Western Wear.</p>
  <button>Add to Cart</button>
</div><!--Div Item close  -->
</div><!--Div card close -->

<div class="item7"><!--Div Item -->
<div class="card"><!--Div card -->
  <img src="./Assets/Images/d5.jpeg" width="200" height="200" hspace="30">
<h1>Dress</h1>
  <p class="price">$20.90</p>
  <p>Dress</p>
  <button>Add to Cart</button>
</div><!--Div Item close  -->
</div><!--Div card close -->

<div class="item8"><!--Div Item -->
<div class="card"><!--Div card -->
  <img src="./Assets/Images/d6.jpeg" width="200" height="200" hspace="30">
<h1>Western</h1>
  <p>$20.90</p>
  <p>Saree.</p>
  <button>Add to Cart</button>
</div><!--Div Item close  -->
</div><!--Div card close -->
  </div><!--Div clothes close -->
</div>
</div>
</div>
 



<div><!--Div shoes-->
   <h2>Trending Shoes</h2>
<div class="card"><!--Div card -->
 <div class="flex"><!--Div Flex -->

  
<div class="item9"><!--Div Item -->
   <img src="./Assets/Images/shoes1.jpeg" width="200" height="200" hspace="30">
<h1>Shoes</h1>
  <p class="price">$27.90</p>
  <p>Brandy Shoes</p>
  <button>Add to Cart</button>
</div><!--Div Item Close-->



<div class="item10"><!--Div Item -->
<div class="card"><!--Div Card -->
   <img src="./Assets/Images/shoes2.jpeg" width="200" height="200" hspace="30">
<h1>Shoes</h1>
  <p class="price">$27.90</p>
  <p>Brandy Shoes</p>
  <button>Add to Cart</button>
</div><!--Div Item Close-->
</div><!--Div card close -->



<div class="item11"><!--Div Item -->
<div class="card"><!--Div Card -->
   <img src="./Assets/Images/shoes3.jpeg" width="200" height="200" hspace="30">
<h1>Shoes</h1>
  <p class="price">$27.90</p>
  <p>Brandy Shoes</p>
  <button>Add to Cart</button>
</div><!--Div Item close-->
</div><!--Div Card Close -->


<div class="item12"><!--Div Item -->
<div class="card"><!--Div Card -->
   <img src="./Assets/Images/shoes4.jpeg" width="200" height="200" hspace="30">
<h1>Shoes</h1>
  <p class="price">$27.90</p>
  <p>Brandy Shoes</p>
  <button>Add to Cart</button>
</div><!--Div Item Close -->
 </div><!--Div Card Close -->
</div><!--Div Shoes Close -->
</div><!--Div Flex Close -->
 
  


<div><!--Div Jwell -->
 <h2>Latest Jewellery</h2>

<div class="card"><!--Div Item -->
<div class="flex"><!--Div flex-->


<div class="item13"><!--Div Item-->
   <img src="./Assets/Images/j1.jpeg" width="200" height="200" hspace="30">
<h1>Jwellery</h1>
  <p class="price">$35.90</p>
  <p>Jwellery</p>
  <button>Add to Cart</button>
</div><!--Div Item Close-->


<div class="item14"><!--Div Item -->
<div class="card"><!--Div Card -->
   <img src="./Assets/Images/j2.jpeg" width="200" height="200" hspace="30">
<h1>Jwellery</h1>
  <p class="price">$35.90</p>
  <p>Jwellery</p>
  <button>Add to Cart</button>
</div><!--Div Item Close -->
</div><!--Div Card Close-->



<div class="item15"><!--Div Item -->
<div class="card"><!--Div Card -->
   <img src="./Assets/Images/j3.jpeg" width="200" height="200" hspace="30">
<h1>Jwellery</h1>
  <p class="price">$35.90</p>
  <p>Jwellery</p>
  <button>Add to Cart</button>
</div><!--Div Item close -->
</div><!--Div Card Close-->


<div class="item16"><!--Div Item -->
<div class="card"><!--Div Card -->
   <img src="./Assets/Images/j4.jpeg" width="200" height="200" hspace="30">
<h1>Jwellery</h1>
  <p class="price">$35.90</p>
  <p>Jwellery</p>
  <button>Add to Cart</button>
</div><!--Div Item close -->
</div><!--Div Card close -->
 </div><!--Div jwell -->
</div><!--Div flex -->
</div>



<!-- Footer -->
    <footer>
        <?php
            include 'footer.php';
        ?>
    </footer>
    <script src="script.js"></script>
</body>
</html>
