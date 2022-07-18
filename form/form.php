<?php
    include_once "dbconnect.php" ;  

    if(isset($_POST["addproduct"])){
        $productname = $_POST["productname"] ;
        $price = $_POST["price"] ;
        $quantity = $_POST["quantity"] ;

        $image = $_FILES["image"]["name"] ;
        $temporary_dir = $_FILES["image"]["temporary_name"] ;
        $imageSize = $_FILES["image"]["size"] ;
        $imgExt = strtolower(pathinfo($image, PATHINFO_EXTENSION));
        $image = $image.".". $imgExt ;
        $upload_dir = 'images/' ;

        if($imageSize < 5000000){
            move_uploaded_file($temporary_dir, $upload_dir.$image) ;
        }

        $sql = "INSERT INTO product(productname, price, quantity, image)
        values('$productname', '$price', '$quantity', '$image')"  ;
    }
?>

































<!DOCTYPE html>
<html lang="en">

<head>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled">Disabled</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!--TRIGER BUTTON -->

    <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Add Product
    </button>



    <!-- MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <!-- FORM -->
                    <form method="post">
                        <div class="form-group">
                            <label>Product Name</label>
                            <input type="text" class="form-control" name="productname" />
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" min="0" name="price" />
                        </div>
                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" class="form-control" min="0" name="quantity" />
                        </div>
                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" class="form-control" name="image" />
                        </div>


                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="addproduct">Submit</button>
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </form>
                    <!-- FORM ENDS -->

                </div>
            </div>
        </div>
    </div>


    <!-- TABLE -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First</th>
                <th scope="col">Last</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td colspan="2">Larry the Bird</td>
                <td>@twitter</td>
            </tr>
        </tbody>
    </table>
</body>

</html>