<?php
session_start();
include_once ('../vendor/autoload.php'); 
$batteriesObject = new Metro\Products\Batteries();

?>



<!-- step 4 start -->
 <?php
    if(isset($_REQUEST['store_product'])){ //check if form was submitted ?>
    <div id="step4" class="col-md-9">
        <div class="vertical-tab-container" id="tabForm">
            <div class="vertical-tab">
                <!-- Tires section -->
                <div class="vertical-tab-content active">

                    <?php
                        require_once("../Src/debug.php");
                            $hasProduct = $batteriesObject->assign($_REQUEST)->hasProduct();
                            
                            if(!$hasProduct){
                                $storeData = $batteriesObject->assign($_REQUEST)->productStore();
                                if($storeData){ 
                                    $_SESSION['BatAddMsg'] = '<h3 style="color: green;">Successfully added a product.</h3>'; 
                                    header('Location: createProduct.php');
                                   }else{ 
                                    $_SESSION['BatAddMsg'] = '<h3 style="color: red;">Some Data is missing. Try again plz</h3>'; 
                                    header('Location: createProduct.php');
                             }
                                }else{
                                        $_SESSION['BatAddMsg'] = '<h3 style="color: red;">This product already added</h3>';
                                        header('Location: createProduct.php');
                                    }
                                    ?>
                </div>
            </div>
        </div>
    </div>
    <?php }else{
                    echo '<h3>404</h3>';
                    echo '<a href="createProduct.php">Go to Add Product Page</a>';
                } ?>

 <!-- step 4 end -->
