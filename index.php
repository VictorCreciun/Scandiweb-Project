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
                    <button class="butt" type="submit" name="add" value="ADD">ADD</button>                                                                                                                                  
                    <button class="butt" type="submit" name="delete" text="MASS DELETE">MASS DELETE</button>
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