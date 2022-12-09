<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/grocery.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/product_details.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/similar_product.css">
  </head>
  <body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "grocery";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error)
    {
    die("Connection failed: " . $conn->connect_error);
    }
    else
    {
    $sql = "SELECT * FROM product_list WHERE id =".$_GET['product_id'];
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
    // output data of each row
    while($pdata = $result->fetch_assoc())
    {
    $product_data = $pdata;
    }
    } else
    {
    echo "0 results";
    }
    }
    $conn->close();
    ?>
    
    <div class="add_to_wishlist">Added To Wishlist</div>

    <div class="navigation-bar">
      <?php
      include './navigation.php';
      ?>
    </div>
    <div class="product_container">
      <div id="wrapper">
        <div id="sticky">
          <div class="img_section">
            <div class="pics"></div>
            <div class="bigImg">
              <div class="wishlist">
                <img id="wishlist_icon" onclick="AddToWishlist()" src="./assets/img/heart.png" alt="">
              </div>
              <img id="bigImg" src="./assets/img/<?php echo $product_data['pimage1']; ?>" alt="">
            </div>
          </div>
          <div class="btns">
            <a id="add_to_cart" href="#"><img src="./assets/img/cart.png" alt="">ADD TO CART</a>
            <a id="buy_now" href="#"><img src="./assets/img/buy.png">BUY NOW</a>
          </div>
        </div>
        <div class="product_details">
          <div class="p_name"><?php echo $product_data['pname'];?></div>
          <div class="p_rating"><span><?php echo $product_data['prating'];?> ★</span>65,625 Ratings & 5,625 Reviews</div>
          <div class="extra_off">Special price</div>
          <div class="rate">
            ₹<?php echo $product_data['pprice'];?><span>21% off </span>
          </div>
          
          <div class="exp_date">
            <img src="./assets/img/clock.png" alt="">
            <div class="exp_mfg_date">
              Expiry Date <?php echo $product_data['pexpire'];?><br>
              Manufactured date <?php echo $product_data['p_mfg'];?>
            </div>
          </div>
          <div class="quantites">
            <div class="quantity_titile">Quantity</div>
            <div class="quantity_box">
              <select>
                <option>1kg</option>
                <option>2kg</option>
                <option selected>5kg</option>
                <option>10kg</option>
              </select>
            </div>
          </div>
          <div class="services">
            <div class="service_titile">Services</div>
            <div class="services_list">
              Easy Return and Replacement<br>
              Cash on Delivery available
            </div>
          </div>
          <div class="description">
            <div class="description_titile">Description</div>
            <div class="description_data">
              <?php echo $product_data['p_description'];?>
            </div>
          </div>
          <div class="specifications">Specifications</div>
          <div class="product_qty">
            In The Box
            <div class="pack_details">
              <div class="pack_of">Pack of</div>
              <div class="pack_of_qty"><?php echo $product_data['p_pack_of_qty'];?></div>
            </div>
          </div>
          
          <div class="general_details">General
            <table>
              <tr>
                <td>Brand</td>
                <td><?php echo $product_data['p_brand'];?></td>
              </tr>
              <tr>
                <td>Type</td>
                <td><?php echo $product_data['p_type'];?></td>
              </tr>
              <tr>
                <td>Quantity</td>
                <td><?php echo $product_data['p_quantity'];?> kg</td>
              </tr>
              <tr>
                <td>Maximum Shelf Life</td>
                <td><?php echo $product_data['p_maximum_shelf_life'];?></td>
              </tr>
              <tr>
                <td>Is Perishable</td>
                <td><?php echo $product_data['p_is_perishable'];?></td>
              </tr>
              <tr>
                <td>Organic</td>
                <td><?php echo $product_data['p_organic'];?></td>
              </tr>
              <tr>
                <td>Used For</td>
                <td><?php echo $product_data['p_used_for'];?></td>
              </tr>
              <tr>
                <td>Model Name</td>
                <td><?php echo $product_data['p_modal_name'];?></td>
              </tr>
              <tr>
                <td>Nutrient Content</td>
                <td><?php echo $product_data['nutrient_content'];?></td>
              </tr>
            </table>
          </div>
        </div>
        
      </div>
      <div class="similar_products_container">
        <h3>Similar Products</h3>
        <div class="similar_products">
          <?php
            include './similar_product.php';
          ?>
        </div>
      </div>
      <div class="footer">
      </div>
    </div>
    <script type="text/javascript" src="./assets/js/product_details.js"></script>
    <script>
      let imageAddress = ["<?php echo $product_data['pimage1']; ?>","<?php echo $product_data['pimage2']; ?>","<?php echo $product_data['pimage3']; ?>","<?php echo $product_data['pimage4']; ?>","<?php echo $product_data['pimage5']; ?>"];
      // let wishlist = document.getElementById('wishlist_icon');
      let bigImg = document.getElementById('bigImg');
      let pics = document.getElementsByClassName('pics')[0];
      let add_to_wishlist = document.getElementsByClassName('add_to_wishlist')[0];
      let isClicked = false;

      for(let i = 0; i<imageAddress.length;i++)
        {
          pics.innerHTML += '<div onmouseover="showImage('+i+')"><img src="./assets/img/'+imageAddress[i]+'" alt="p_image"></div>';
        }

      function showImage(index)
      {
        // console.log(index);
        bigImg.src = "./assets/img/"+imageAddress[index];
      }


      function AddToWishlist()
      {
        if (isClicked==false)
        {
         // $(this).src = "./assets/img/heartf.png";
         add_to_wishlist.style.display = "flex";
         hideWishlist();
         add_to_wishlist.innerText = "Added to wishlist";
         isClicked=true;
        }
        else
        {
          // $(this).src = "./assets/img/heart.png";
          hideWishlist();
          add_to_wishlist.style.display = "flex";
          add_to_wishlist.innerText = "Remove to wishlist";
          isClicked=false;
        }
      }

      function hideWishlist()
      {
        setTimeout(function(){
          add_to_wishlist.style.display = "none";
        },1000);
      }
    </script>
  </body>
</html>