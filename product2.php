<?php
include('includes/checklogin.php');
check_login();
if(isset($_POST['save']))
{
  $category=$_POST['category'];
  $product=$_POST['product'];
  $price=$_POST['price'];
  $quantity=$_POST['quantity'];
  $image=$_FILES["productimage"]["name"];
  move_uploaded_file($_FILES["productimage"]["tmp_name"],"productimages/".$_FILES["productimage"]["name"]);
  $sql="insert into tblproducts(CategoryName,ProductName,ProductPrice,quantity,ProductImage)values(:category,:product,:price,:quantity,:image)";
  $query=$dbh->prepare($sql);
  $query->bindParam(':category',$category,PDO::PARAM_STR);
  $query->bindParam(':product',$product,PDO::PARAM_STR);
  $query->bindParam(':price',$price,PDO::PARAM_STR);
  $query->bindParam(':image',$image,PDO::PARAM_STR);
  $query->bindParam(':quantity',$quantity,PDO::PARAM_STR);
  $query->execute();
  $LastInsertId=$dbh->lastInsertId();
  if ($LastInsertId>0) 
  {
    echo '<script>alert("Item Added successfully")</script>';
    echo "<script>window.location.href ='product2fruite.php'</script>";
  }
  else
  {
    echo '<script>alert("Something Went Wrong. Please try again")</script>';
  }
}
if(isset($_GET['del'])){    
  $cmpid=$_GET['del'];
  $query=mysqli_query($con,"delete from tblproducts where id='$cmpid'");
  echo "<script>alert('Product record deleted.');</script>";   
  echo "<script>window.location.href='product2fruite.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<body>
  <div class="container-scroller" >
    <!-- partial:../../partials/_navbar.html -->

    <!-- partial -->
    <div class="container-fluid page-body-wrapper" >
      <!-- partial:../../partials/_sidebar.html -->
      <?php @include("includes/sidebar1.php");?>
      <!-- partial -->
      <div class="main-panel" Style="width:100%; background-color: #f2f2f2;">
        <div class="content-wrapper" Style="width:98%; margin-left:10px; background-color: #f2f2f2;">
          <div class="row" Style="width:98%; margin-left: 1%; margin-top:33px; " >
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
               <div class="modal-header">
                <h5 class="modal-title" style="float: left;">Register Product</h5>
              </div>
              <div class="col-md-12 mt-4">
                <form class="forms-sample" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <div class="row ">
                    <div class="form-group col-md-6 ">
                      <label for="exampleInputPassword1">Product Category</label>
                      <select  name="category"  class="form-control" required>
                        <option value="">Select Category</option>
                        <?php
                        $sql="SELECT * from  tblcategory";
                        $query = $dbh -> prepare($sql);
                        $query->execute();
                        $results=$query->fetchAll(PDO::FETCH_OBJ);
                        if($query->rowCount() > 0)
                        {
                          foreach($results as $row)
                          {
                            ?> 
                            <option value="<?php  echo $row->CategoryName;?>"><?php  echo $row->CategoryName;?></option>
                            <?php 
                          }
                        } ?>
                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputName1">Product Name </label>
                      <input type="text" name="product" class="form-control" value="" id="product" placeholder="Enter Product" required>
                    </div>
                  </div>
                  <div class="row ">
                    <div class="form-group col-md-6">
                      <label for="exampleInputName1">Product Price</label>
                      <input type="text" name="price" value="" placeholder="Enter Price" class="form-control" id="price"required>
                    </div>
                    <div class="form-group col-md-6">
                      <label for="exampleInputName1">Enter Quantity</label>
                      <input type="text" name="quantity" class="form-control" value="" id="" placeholder="Add Quantity" required>
                    </div>
                      </div>
                    <div class="form-group col-md-6 pl-md-0">
                      <label class="col-sm-12 pl-0 pr-0 ">Attach Product Photo</label>
                      <div class="col-sm-12 pl-0 pr-0">
                        <input type="file" name="productimage" class="file-upload-default">
                        <div class="input-group ">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" style="" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    
                  </div>
                  <button type="submit" style="float: left;" name="save" class="btn btn-primary  mr-2 mb-4">Save</button>
                </form>
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
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click','.edit_data4',function(){
      var edit_id4=$(this).attr('id');
      $.ajax({
        url:"edit_product.php",
        type:"post",
        data:{edit_id4:edit_id4},
        success:function(data){
          $("#info_update4").html(data);
          $("#editData4").modal('show');
        }
      });
    });
  });
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $(document).on('click','.edit_data5',function(){
      var edit_id5=$(this).attr('id');
      $.ajax({
        url:"view_product.php",
        type:"post",
        data:{edit_id5:edit_id5},
        success:function(data){
          $("#info_update5").html(data);
          $("#editData5").modal('show');
        }
      });
    });
  });
</script>

</body>
</html>