<?php 
session_start();
include_once ('../vendor/autoload.php'); 
$productObject = new Metro\Products\Batteries();
$getProducts = $productObject->getProductList();
?>
<?php require_once 'header.php'; ?>

<?php require_once 'sidebar.php'; ?>

<div id="page-wrapper">
    <div class="header">
        <h1 class="page-header">
                            Create New Product
                        </h1>
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="allProducts.php">Products</a></li>
            <li class="active">New Product</li>
        </ol>

    </div>

    <div id="page-inner">
        <div class="row">
            <div class="col-xs-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="card-title">
                            <div class="title">Now, You can add product/batteries here.</div>
                        </div>
                    </div>
                    <div class="panel-body">            
                    <form id="tab1-form" method="post" action="_store.php">
                    <?php if(isset($_SESSION['BatAddMsg']) && !empty($_SESSION['BatAddMsg'])){ 
                        echo $_SESSION['BatAddMsg']; unset($_SESSION['BatAddMsg']);} ?>
                        <div class="sub-title">Vehicle Make <span class="must">*</span></div>
                        <div>
                            <input name="vMake" type="text" class="form-control" placeholder="Vehicle Make" required>
                        </div>
                        <div class="sub-title">Vehicle Model <span class="must">*</span></div>
                        <div>
                            <input name="vModel" type="text" class="form-control" placeholder="Vehicle Model" required>
                        </div>
                        <div class="sub-title">Vehicle Year <span class="must">*</span></div>
                        <div>
                            <input name="vYear" type="text" class="form-control" placeholder="Vehicle Year" required>
                        </div>
                        <div class="sub-title">Vehicle Variant <span class="must">*</span></div>
                        <div>
                            <input name="vVariant" type="text" class="form-control" placeholder="Vehicle Variant" required>
                        </div>
                        <div class="sub-title">Vehicle Type <span class="must">*</span></div>
                        <div>
                            <select  name="vType" class="selectbox" required>
                                <option value="">Select Vehicle Type</option>
                                <option value="Extra Heavy Duty">Extra Heavy Duty</option>
                                <option value="Heavy Duty">Heavy Duty</option>
                                <option value="AGM">AGM</option>
                                <option value="Premium">Premium</option>
                            </select>
                        </div>    
                        <div class="sub-title">CCA Rating <span class="must">*</span></div>
                        <div>
                            <input name="ccaRating"  type="text" class="form-control" placeholder="CCA Rating">
                        </div>
                        <div class="sub-title">Part Number <span class="must">*</span></div>
                        <div>
                            <input name="partNumber" type="text" class="form-control" placeholder="Part Number">
                        </div>
                        <div class="sub-title">Warranty <span class="must">*</span></div>
                        <div>
                            <select class="selectbox" name="warranty" required>
                                    <option value="">Select Warranty</option>
                                    <option value="1">1 Year</option>
                                    <option value="2">2 Year</option>
                                    <option value="3">3 Year</option>
                                    <option value="4">4 Year</option>
                            </select>
                        </div>
                        <div class="sub-title">Price <span class="must">*</span></div>
                        <div>
                            <input name="price" type="text" class="form-control" placeholder="Price" required>
                        </div>
                        <div class="sub-title">Comments</div>
                        <div>
                            <textarea name="comment" class="form-control" rows="3"></textarea>
                        </div>
                        <div class="sub-title"></div>
                        <div>
                            <input type="submit" name="store_product"  class="btn btn-success"  value="Add Battery"/>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>            

<?php require_once 'footer.php'; ?>