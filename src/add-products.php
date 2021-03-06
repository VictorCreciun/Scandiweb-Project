<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles/add-styles.css">
    <title>Add Product</title>
</head>
<body>

<?php include '../includes/warningsMess.php' ?>

   <!-- <form action="../includes/warningsURL.php" method="GET">  -->
    <form action="../includes/insert.php" method="POST" id="product_form">
            <header>
                <nav class="nav">
                    <h1 class="title">Add Product</h1>

                    <div class="nav-wrapper">
                        <button type="submit" class="butt" name="save">Save</button>
                        <button class="butt" name="cancel">Cancel</button>
                    </div>
                </nav>
            </header>

            <hr>

            <main id="add-item-form">
                <div class="sku_div">
                    <input class="input" type="text" id="sku" name="sku" placeholder="SKU">

                    <?php if(strpos($fullUrl, "sku=empty") == true) {
                            echo "<label class='error'>Please insert the SKU</label>";
                        } ?>
                </div>
                    
                <br>

                <div class="name-div">
                    <input class="input" type="text" id="name" name="name" placeholder="Name">

                    <?php if(strpos($fullUrl, "name=empty") == true) {
                            echo "<label class='error'>Please insert the Name</label>";
                        } ?>
                </div>
                    
                <br>

                <div class="price-div">
                    <input class="input" type="number" id="price" name="price" placeholder="Price($)">

                    <?php if(strpos($fullUrl, "price=empty") == true) {
                            echo "<label class='error'>Please insert the Price</label>";
                        } ?>
                </div>
                    
                <br>
                <div class="custom-select">
                    <select name="productType" id="productType">
                        <option>Type:</option>
                        <option name="DVD" value="DVD">DVD</option>
                        <option name="furniture" value="Furniture">Furniture</option>
                        <option name="book" value="Book">Book</option>
                    </select>
                    <?php if(strpos($fullUrl, "productType=empty") == true) {
                            echo "<label class='error'>Please select a Product Type</label>";
                        } else if(strpos($fullUrl, "size=empty") == true) {
                            echo "<label class='error'>Please insert the Size</label>";
                        } else if(strpos($fullUrl, "dimensions=empty") == true) {
                            echo "<label class='error'>Please insert the Dimensions</label>";
                        } else if(strpos($fullUrl, "weight=empty") == true) {
                            echo "<label class='error'>Please insert the Weight</label>";
                        }?>
                </div>
            </main>

            <div class="content">
                <div class="data" id="DVD">
                    <p>Size (MB)</p>
                    <input type="number" id="size" name="size">
                </div>

                <div id="Furniture" class="data2">
                        <div class="wrapper">
                            <p>Height (CM)</p>
                            <input type="number" id="height" name="height">
                        </div>
                        <div class="wrapper">
                            <p>Width (CM)</p>
                            <input type="number" id="width" name="width">
                        </div>
                        <div class="wrapper">
                            <p>Length (CM)</p>
                            <input type="number" id="length" name="length"> 
                        </div>
                </div>
                    

                <div id="Book" class="data">
                    <p>Weight (KG)</p>
                    <input type="number" id="weight" name="weight">
                </div>
            </div>
        </form> 
    <!-- </form> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
    <script src="actions.js"></script>

</body>
</html>