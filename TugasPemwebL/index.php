<!DOCTYPE html>
<html lang="en">
<head>
    <title>Scarlett Whitening</title>
    <link rel="stylesheet" href="style.css">
    <script src="bootstrap.js"></script>
    <style>
        body{
            background-color : #FEE3EC;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
                <a href="index.php" class="d-flex align-items-center text-dark text-decoration-none">
                    <span class="fs-4">Online Shoping Cart</span><br>
                </a>

                <nav class="d-inline-flex mt-md-0 ms-md-auto">
                    <a class="me-3 py-2 text-dark text-decoration-none btn btn-primary btn-sm" href="index.php">Home</a>
                    <a class="me-3 py-2 text-light text-decoration-none btn btn-primary btn-sm" href="viewCart.php">View Cart</a>
                </nav>
            </div>
        </header>
        <div class="row">
            <h1 class="text-center border-bottom pb-4 mb-4">New Products</h1>
            <?php
                if(isset($_GET['true']) == "created"){
            ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Successfully!</strong> Your product added to Cart.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                }
            ?>
        </div>
        <main>
            <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Acne Cream Day</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <img src="img/acnecreamday.png" alt="acnecreamday" style="width:200px;height:200px;">
                        <li>Price : Rp 75000</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Acne Cream Day">
                        <input type="hidden" name="price" value="75000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Acne Cream Night</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <img src="img/acnecreamnight.png" alt="acnecreamnight" style="width:200px;height:200px;">
                        <li>Price : Rp 75000</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Acne Cream Night">
                        <input type="hidden" name="price" value="75000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Acne Serum</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <img src="img/acneserum.png" alt="acneserum" style="width:200px;height:200px;">
                        <li>Price : Rp 75000</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Acne Serum">
                        <input type="hidden" name="price" value="75000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Essence Toner Acne</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <img src="img/essencetoneracne.png" alt="essencetoneracne" style="width:200px;height:200px;">
                        <li>Price : Rp 75000</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Essence Toner Acne">
                        <input type="hidden" name="price" value="75000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Herbalism Mugwort Mask</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <img src="img/herbalismmugwortmask.png" alt="herbalismmugwortmask" style="width:200px;height:200px;">
                        <li>Price : Rp 75000</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Herbalism Mugwort Mask">
                        <input type="hidden" name="price" value="75000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Sooting Gel Mask</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <img src="img/sooting&hydratinggelmask.png" alt="sooting&hydratinggelmask" style="width:200px;height:200px;">
                        <li>Price : Rp 75000</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Sooting Gel Mask">
                        <input type="hidden" name="price" value="75000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Brightening Facial Wash</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <img src="img/brighteningfacialwash.jpg" alt="brighteningfacialwash" style="width:200px;height:200px;">
                        <li>Price : Rp 75000</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Brightening Facial Wash">
                        <input type="hidden" name="price" value="75000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Glowtening Serum</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <img src="img/glowteningserum.png" alt="glowteningserum" style="width:200px;height:200px;">
                        <li>Price : Rp 75000</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Glowtening Serum">
                        <input type="hidden" name="price" value="75000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm">
                <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Essence Toner Brightly</h4>
                </div>
                <div class="card-body">
                    <ul class="list-unstyled mt-3 mb-4">
                        <img src="img/essencetonerbrightly.png" alt="essencetonerbrightly" style="width:200px;height:200px;">
                        <li>Price : Rp 75000</li>
                    </ul>
                    <form action="addCart.php" method="post">
                        <input type="hidden" name="name" value="Essence Toner Brightly">
                        <input type="hidden" name="price" value="75000">
                        <input type="text" name="qty" placeholder="Quantity" required class="form-control">
                        <input type="submit" class="btn btn-lg btn-primary" value="Add to Cart">
                    </form>
                </div>
                </div>
            </div>
            
            </div>
        </main>
    </div>
</body>
</html>