<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
//code for Cart
$v1=$_POST['v'];
echo $v1;
$current_quantity=$_POST['value1'];
$pid=$_GET["pid"];
$quantity1=$_POST['quantity'];
$purchase_quantity=$quantity1;

echo $current_quantity;

echo $quantity1;
$purchase_quantity=$quantity1;
$remaining_quantity = $current_quantity - $purchase_quantity;
echo $remaining_quantity;
$pid=$_GET["pid"];

if(!empty($_GET["action"])) {
  switch($_GET["action"]) {
//code for adding product in cart

case "add":

    if(!empty($_POST["quantity"])&&$current_quantity>=$purchase_quantity){
      $pid=$_GET["pid"];
      $result=mysqli_query($con,"SELECT * FROM tblproducts WHERE id='$pid'");
      while($productByCode=mysqli_fetch_array($result)){
        $itemArray = array($productByCode["id"]=>array('catname'=>$productByCode["CategoryName"], 'compname'=>$productByCode["CompanyName"], 'quantity'=>$_POST["quantity"], 'pname'=>$productByCode["ProductName"],'image'=>$productByCode["ProductImage"], 'price'=>$productByCode["ProductPrice"],'code'=>$productByCode["id"]));
        if(!empty($_SESSION["cart_item"])) {
          if(in_array($productByCode["id"],array_keys($_SESSION["cart_item"]))) {
            foreach($_SESSION["cart_item"] as $k => $v) {
              if($productByCode["id"] == $k) {
                if(empty($_SESSION["cart_item"][$k]["quantity"])) {
                  $_SESSION["cart_item"][$k]["quantity"] = 0;
                }
                $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
              }
            }
          } else {
            $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
          }
        }  else {
          $_SESSION["cart_item"] = $itemArray;
        }
    }
  }
  else{

$i="Insuficient quantity!";
 }
  break;
  

    // code for removing product from cart
    case "remove":
    if(!empty($_SESSION["cart_item"])) {
      foreach($_SESSION["cart_item"] as $k => $v) {
        if($_GET["code"] == $k)
          unset($_SESSION["cart_item"][$k]);              
        if(empty($_SESSION["cart_item"]))
          unset($_SESSION["cart_item"]);
      }
    }
    break;
    // code for if cart is empty
    case "empty":
    unset($_SESSION["cart_item"]);
    break;  
  }
}

//Code for Checkout
if(isset($_POST['checkout'])){
  $invoiceno= mt_rand(100000000, 999999999);
  $pid=$_SESSION['productid'];
  $quantity=$_POST['quantity'];
  $cname=$_POST['customername'];
  $cmobileno=$_POST['mobileno'];
  $pmode=$_POST['paymentmode'];
  $value=array_combine($pid,$quantity);
  foreach($value as $pdid=> $qty){
    $query=mysqli_query($con,"insert into tblorders(ProductId,Quantity,InvoiceNumber,CustomerName,CustomerContactNo,PaymentMode) values('$pdid','$qty','$invoiceno','$cname','$cmobileno','$pmode')") ; 
  }
  echo '<script>alert("Invoice generated successfully. Invoice number is "+"'.$invoiceno.'")</script>';  
  unset($_SESSION["cart_item"]);
  $_SESSION['invoice']=$invoiceno;
  echo "<script>window.location.href='invoice.php'</script>";

}

?>
<!DOCTYPE html>
<html lang="en">
<style>
  /* Popup styling */
  .popup {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    background-color: rgba(0,0,0,0.5); /* Black with opacity */
    justify-content: center;
    align-items: center;
  }
  
  /* Popup content */
  .popup-content {
    background-color: #fefefe;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
    width: 500px;
    text-align: center;
  }
  
  /* Close button */
  .close {
    color: #aaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
    cursor: pointer;
  }
  
  .close:hover,
  .close:focus {
    color: black;
    text-decoration: none;
  }
</style>
<div id="popup" class="popup">
  <!-- Popup Content -->
  <div class="popup-content">
    <span class="close" onclick="closePopup()">&times;</span>
    <p>Insufficient quantity!</p>
    <button onclick="closePopup()">OK</button>
  </div>
</div>
<body>

<script>
  // Function to open the popup
  function openPopup() {
    document.getElementById("popup").style.display = "flex";
  }

  // Function to close the popup
  function closePopup() {
    document.getElementById("popup").style.display = "none";
  }

</script>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->

      <!-- partial -->
      <div class="main-panel" Style="width:97%; background-color: #f2f2f2; ">
        <div class="content-wrapper" Style="width:95%; margin-left:4%; background-color: #f2f2f2;">
          <div class="row" Style="width:95%; margin-left: 3%; " >
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="table-responsive p-3">
                  <table id="datable_1" class="table table-hover w-100 display pb-30">
                    <thead>
                      <tr>
                        <th>#</th>
                        <th>Product image</th>
                        <th>Product Name</th>
                        <th>Product Category</th>
                        <th>Pricing</th>
                        <th>Quantity</th>
                        <th>Action</th>

                      </tr>
                    </thead>
                    <tbody>
               
                    <?php
                     // Check if the value is set in the URL
                      if(isset($_GET['value'])){
                     // Retrieve the value
                     global $v1;
                     $Categry = $_GET['value'];
                      // Output the value
                     
                      $v1=$Categry;
                      

                     } else {
                     // If the value is not set, show a default message
                       }
                    ?>
                      <?php
                      $query=mysqli_query($con,"select * from tblproducts WHERE CategoryName = '$v1'");
                      
                      $cnt=1;
                      while($row=mysqli_fetch_array($query))
                      {    

                    
                        ?>
                        <form method="post"  action="product1vegetable.php?action=add&pid=<?php echo $row["id"]; ?>">                                                  
                          <tr>
                            <td><?php echo $cnt;?></td>
                            <td> <img src="productimages/<?php  echo $row['ProductImage'];?>" class="mr-0" Style="border-radius:0px; width:150px; height:90px; " alt="image"></td>
                            <td><?php echo $row['ProductName'];?></td>
                            <td><?php echo $row['CategoryName'];?></td>
                            <td class="mr-0"><?php echo $row['ProductPrice'];?></td>
                            <td>Avaliable:  <input type="text" class="product-quantity" name="quantity"  size="3"  placeholder="<?php echo $row['quantity']; ?>" />
                            <input type="hidden" id="value1" name="value1" value="<?php echo $row['quantity']; ?>">
                            <input type="hidden" id="v" name="v" value="<?php echo $Categry; ?>">
                            </td>
                            <td>
                              <?php
                        
                       
                            
                            
                          
                               ?>
                             <input type="submit"   value="Add to Cart"  class="btnAddAction" />
                            </td>
                          </tr>
                        </form>
                        <?php 
                        $cnt++;
                      } ?>
                        <?php 
                 
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="table-responsive p-3">
                  <form class="needs-validation" method="post">
                  <h4 style="color:red;"><?php echo "$i";?></h4>
                   <h4>Shopping Cart</h4>
                   <hr />
                <a id="btnEmpty" href="product1vegetable.php?action=empty" >Empty Cart</a>
                   <?php
                   if(isset($_SESSION["cart_item"])){
                    $total_quantity = 0;
                    $total_price = 0;
                    ?>  
                  
                    <table class="table align-items-center table-bordered" >
                      <tbody>
                        <tr>
                          <th >Product Name</th>
                          <th>Category</th>
                          <th>Company</th>
                          <th >Quantity</th>
                          <th >Unit Price</th>
                          <th >Price</th>
                          <th >Remove</th>
                        </tr>   
                        <?php 
                        $productid=array();      
                        foreach ($_SESSION["cart_item"] as $item){
                          $item_price = $item["quantity"]*$item["price"];
                          array_push($productid,$item['code']);

                          ?>
                          <input type="hidden" value="<?php echo $item['quantity']; ?>" name="quantity[<?php echo $item['code']; ?>]">
                          
                          <tr>
                            <td><img src="productimages/<?php  echo  $item["image"];?>" class="mr-2" alt="image"><?php echo $item["pname"]; ?></td>
                            <td><?php echo $item["catname"]; ?></td>
                            <td><?php echo $item["compname"]; ?></td>
                            <td><?php echo $item["quantity"]; ?></td>
                            <td><?php echo $item["price"]; ?></td>
                            <td><?php echo number_format($item_price,2); ?></td>
                            <td><a href="product1vegetable.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"> <i class="mdi mdi-close-circle" style="font-size: 25px;"></i> </a></td>
                            </tr>
                          <?php
                          $total_quantity += $item["quantity"];
                          $total_price += ($item["price"]*$item["quantity"]);
                        }
                        $_SESSION['productid']=$productid;
                        ?>

                        <tr>
                          <td colspan="3" align="right">Total:</td>
                          <td colspan="2"><?php echo $total_quantity; ?></td>
                          <td colspan=><strong><?php echo number_format($total_price, 2); ?></strong></td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table> 
                    <div class="form-row">
                      <div class="col-md-6 mb-10">
                        <label for="validationCustom03">Customer Name</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="Customer Name" name="customername" required>
                        <div class="invalid-feedback">Please provide a valid customer name.</div>
                      </div>
                      <div class="col-md-6 mb-10">
                        <label for="validationCustom03">Customer Mobile Number</label>
                        <input type="text" class="form-control" id="validationCustom03" placeholder="Mobile Number" name="mobileno" required>
                        <div class="invalid-feedback">Please provide a valid mobile number.</div>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="col-md-6 mb-10">
                        <label for="validationCustom03">Payment Mode</label>
                        <div class="custom-control custom-radio mb-10">
                          <input type="radio" class="custom-control-input" id="customControlValidation2" name="paymentmode" value="cash" required>
                          <label class="custom-control-label" for="customControlValidation2">Cash</label>
                        </div>
                        <div class="custom-control custom-radio mb-10">
                          <input type="radio" class="custom-control-input" id="customControlValidation3" name="paymentmode" value="card" required>
                          <label class="custom-control-label" for="customControlValidation3">Card</label>
                        </div>
                      </div>
                      <div class="col-md-6 mb-4 ">
                        <button class="btn btn-primary mt-6" type="submit" name="checkout">Checkout</button>
                      </div>
                    </div>
                  </form>
                  <?php
                } else {
                  ?>
                  <div style="color:red; margin-left:100px;" >Your Cart is Empty</div>
                  <?php 
                }
                ?>

              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
      <!-- partial:../../partials/_footer.html -->
      <?php @include("includes/footer.php");?>
      <!-- partial -->
    </div>
    <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<?php @include("includes/foot.php");?>
<!-- End custom js for this page -->
<style type="text/css">
  #btnEmpty {
    background-color: #ffffff;
    border: #d00000 1px solid;
    padding: 5px 10px;
    color: #d00000;
    float: right;
    text-decoration: none;
    border-radius: 3px;
    margin: 10px 0px;
  }

</style>
<script type="text/javascript">
  /*Validation Init*/

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
</body>
</html>