<?php
                include("dbConn.php");

                $sql = "SELECT * FROM products";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0) {
                    foreach($result as $row) {
                        if($row["product_type"] == "DVD") {
                             ?>
                            <div class="wrapper">
                                <input type="checkbox" name="checkbox[]" value="<?=$row['sku'];?>" class="delete-checkbox">
                                <div class="object">
                                    <label><?=$row['sku']?></label>
                                    <label><?=$row['name']?></label>
                                    <label><?=$row['price']?>$</label>
                                    <label>Size: <?=$row['size']?> MB</label>
                                </div>
                            </div>

                    <?php
                        } elseif($row["product_type"] == "Book") {
                             ?>
                            <div class="wrapper">
                                <input type="checkbox" name="checkbox[]" value="<?=$row['sku'];?>" class="delete-checkbox">
                                <div class="object">
                                    <label><?=$row['sku']?></label>
                                    <label><?=$row['name']?></label>
                                    <label><?=$row['price']?>$</label>
                                    <label>Weight: <?=$row['weight']?> KG</label>
                                </div>
                            </div>
                    <?php
                        } elseif($row["product_type"] == "Furniture") {
                             ?>
                            <div class="wrapper">
                                <input type="checkbox" name="checkbox[]" value="<?=$row['sku'];?>" class="delete-checkbox">
                                <div class="object">
                                    <label><?=$row['sku']?></label>
                                    <label><?=$row['name']?></label>
                                    <label><?=$row['price']?>$</label>
                                    <div class="dimensions">
                                        <label>Dimensions: <?=$row['height']?>x</label>
                                        <label><?=$row['width']?>x</label>
                                        <label><?=$row['length']?></label>
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                }
                else {
                    echo "No Results";
                }

                $conn->close();
                    ?>