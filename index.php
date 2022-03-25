<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
    <title>Product List</title>
</head>
<body>

    <form action="includes/delete.php" method="POST">
        <header>
            <nav class="nav">
                <h1 class="title">Product List</h1>

                <div class="nav-wrapper">
                    <button class="butt" name="add" text="ADD">Add</button>                                                                                                                                  
                    <button type="submit" name="delete" class="butt" id="delete-product-btn" text="MASS DEELTE">Mass Delete</button>
                </div>
            </nav>
        </header>

        <hr>

        <main>
            <?php include("includes/show.php")?>
        </main>
    </form>

</body>
</html>