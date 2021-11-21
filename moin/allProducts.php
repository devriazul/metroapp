<?php include_once ('../vendor/autoload.php'); 
$productObject = new Metro\Products\Batteries();
$getProducts = $productObject->getProductList();
?>
<?php require_once 'header.php'; ?>

<?php require_once 'sidebar.php'; ?>
<!-- /. NAV SIDE  -->
<div id="page-wrapper">
    <div class="header">
        <h1 class="page-header">
                            All Product List
                        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="allProducts.php">Products</a></li>
            <li class="active">All Product</li>
        </ol>

    </div>

    <div id="page-inner">

        <div class="row">
            <div class="col-md-12">
                <!-- Advanced Tables -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        All Product List
                    </div>
                    <div class="panel-body">
                    <?php if(!empty($getProducts)){ ?>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>SL</th>
                                        <th> Make</th>
                                        <th> Model</th>
                                        <th> Year</th>
                                        <th>Variant</th>
                                        <th>Type</th>
                                        <th>CCA Rating</th>
                                        <th>Part Number</th>
                                        <th>Warranty</th>
                                        <th>Price</th>
                                        <th>Comment</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php                                    
                                         $sl=1;
                                            foreach($getProducts as $getProduct) { ?>
                                        <tr class="odd gradeX">
                                            <td>
                                                <?php echo $sl;$sl++; ?>
                                            </td>
                                            <td>
                                                <?php echo ucfirst($getProduct["vehicleMake"]); ?>
                                            </td>
                                            <td>
                                                <?php echo $getProduct["vehicleModel"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $getProduct["vehicleYear"]; ?>
                                            </td>
                                            <td>
                                                <?php echo ucfirst($getProduct["vehicleVariant"]); ?>
                                            </td>
                                            <td>
                                                <?php echo ucfirst($getProduct["vehicleType"]); ?>
                                            </td>
                                            <td>
                                                <?php echo $getProduct["ccaRating"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $getProduct["partNumber"]; ?>
                                            </td>
                                            <td>
                                                <?php echo $getProduct["warranty"].' Year'; ?>
                                            </td>
                                            <td>
                                                <?php echo '$'.$getProduct["price"]; ?>
                                            </td>
                                            <td>
                                                <?php echo ucfirst($getProduct["comment"]); ?>
                                            </td>
                                            <td>
                                                <a href="#" title="Edit">Edit</a>
                                                <a href="#" title="Edit">Delete</a> 
                                            </td>
                                        </tr>
                                        <?php
                                          }
                                        ?>

                                </tbody>
                            </table>
                        </div>
                    <?php }else{ echo 'Product table empty <a href="createProduct.php" title="add product first">add product first</a>'; }?>

                    </div>
                </div>
                <!--End Advanced Tables -->
            </div>
        </div>
        <!-- /. ROW  -->

    </div>
        
<?php require_once 'footer.php'; ?>    