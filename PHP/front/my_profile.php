<?php 
require('top.php');
if(!isset($_SESSION['CUSTOMER_LOGIN'])){
	?>
	<script>
	window.location.href='index.php';
	</script>
	<?php
}

?>

<div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(images/bg/big1.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                
            </div>
        </div>
        <!-- End Bradcaump area -->
        <!-- cart-main-area start -->
        <div class="wishlist-area ptb--100 bg__white">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="wishlist-content">
                            <form action="#">
                                <div class="wishlist-table table-responsive">
                                    <table>
                                            <?php
											$customer_id=$_SESSION['CUSTOMER_ID'];
											$res=mysqli_query($con,"select * from customer where customer_id='$customer_id'");											
											while($row=mysqli_fetch_assoc($res)){
											?>
                                            <tr>
                                                <th class="product-thumbnail">Name</th>
                                                <td class="product-name"><?php echo $row['customer_name']?></td>
                                            </tr>
                                            <tr>
                                                <th class="product-thumbnail">Gender</th>
                                                <td class="product-name"><?php echo $row['customer_gender']?></td>
                                            </tr>
                                            <tr>
                                                <th class="product-thumbnail">E-mail</th>
                                                <td class="product-name"><?php echo $row['customer_email']?></td>
                                            </tr>
                                            <tr>
                                                <th class="product-thumbnail">Address</th>
                                                <td class="product-name"><?php echo $row['customer_address']?></td>
                                            </tr>
                                            <tr>
                                                <th class="product-thumbnail">Pincode</th>
                                                <td class="product-name"><?php echo $row['customer_pincode']?></td>
                                            </tr>
                                            <tr>
                                                <th class="product-thumbnail">Contact No.</th>
                                                <td class="product-name"><?php echo $row['customer_contactno']?></td>
                                            </tr>
                                            <?php } ?>
                                    </table>
                                </div>  
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      
<style>
    .wishlist-table table {
      background: #fff none repeat scroll 0 0;
      border-color: #c1c1c1;
      border-radius: 0;
      border-style: solid;
      border-width: 1px 0 0 1px;
      width: 100%;
  }
  .wishlist-table table th {
      font-weight: 600;
  } 
  .wishlist-table table th {
      border-bottom: 1px solid #c1c1c1;
      border-right: 1px solid #c1c1c1;
      color: #000;
      font-family: Bookman Old Style;
      font-size: 16px;
      font-weight: 600;
      padding: 15px 10px;
      text-align: center;
  }
  .wishlist-table table td {
      border-bottom: 1px solid #c1c1c1;
      border-right: 1px solid #c1c1c1;
      color: #000;
      font-family: Cambria;
      font-size: 16px;
      font-weight: 600;
      padding: 15px 10px;
      text-align: center;
  }
  .wishlist-table table .product-remove {
      padding: 0 15px;
      width: 20px;
  }
  .wishlist-table table .product-remove > a, 
  .table-content table .product-remove > a {
      font-size: 25px;
  }
  .wishlist-table table .product-thumbnail {
      width: 150px;
  }
  .wishlist-table table td.product-price .amount {
      font-weight: 700;
  }
  .wishlist-table table .wishlist-in-stock {
      color: #444;
  }
  .wishlist-table table .product-add-to-cart > a {
      background: #252525 none repeat scroll 0 0;
      color: #fff;
      display: block;
      font-weight: 700;
      padding: 10px 56px;
      text-transform: uppercase;
      width: 260px;
  }
  .wishlist-table table .product-add-to-cart > a:hover{
      background: #A87C3C;
      color: #fff;
  }
  .wishlist-table table .product-add-to-cart {
      width: 240px;
  }
  .wishlist-share {
      margin-bottom: 35px;
      margin-top: 20px;
  }
  .wishlist-share ul li {
      display: inline-block;
      height: 21px;
      margin-left: 0;
      margin-right: 0;
  }
  .wishlist-share ul li a{background-position: left top;
      border: medium none;
      display: inline-block;
      height: 21px;
      width: 21px;
  }
  .wishlist-share ul li a:hover{
      background-position: left bottom;
  }
  .wishlist-share .social-icon ul {
      display: flex;
      justify-content: center;
      margin-top: 10px;
  }
  </style>
        						
<?php require('footer.php')?>        