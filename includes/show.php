<?php
                include("dbConn.php");

                $sql = "SELECT * FROM products2";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result) > 0) {
                    foreach($result as $row) {
                        if($row["productType"] == "DVD") {
                             ?>
                            <div class="wrapper">
                                <input class="delete-checkbox" type="checkbox" name="checkbox[]" value="<?=$row['productId'];?>" >
                                <div class="object">
                                    <label><?=$row['sku']?></label>
                                    <label><?=$row['name']?></label>
                                    <label><?=$row['price']?>$</label>
                                    <label>Size: <?=$row['size']?> MB</label>
                                </div>
                            </div>

                    <?php
                        } elseif($row["productType"] == "Book") {
                             ?>
                            <div class="wrapper">
                                <input class="delete-checkbox" type="checkbox" name="checkbox[]" value="<?=$row['productId'];?>" >
                                <div class="object">
                                    <label><?=$row['sku']?></label>
                                    <label><?=$row['name']?></label>
                                    <label><?=$row['price']?>$</label>
                                    <label>Weight: <?=$row['weight']?> KG</label>
                                </div>
                            </div>
                    <?php
                        } elseif($row["productType"] == "Furniture") {
                             ?>
                            <div class="wrapper">
                                <input class="delete-checkbox" type="checkbox" name="checkbox[]" value="<?=$row['productId'];?>" >
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