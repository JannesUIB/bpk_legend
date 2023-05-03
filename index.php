<?php
// session_start();


// if(!isset($_SESSION['login']))
// {
//     header("Location: login.php");
// }

// if(isset($_POST['btnlogout']))
// {
//     session_destroy();
//     echo "<script type='text/javascript'>alert('Berhasil Log Out'); window.location = 'login.php';</script>";
// }
?>

<html>
    <head>
    <title>Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
    body{
        background-color:white;
    }
    h1{
        font-size:2.1rem;
        Line-height:1.4;
        Letter-spacing: 0.5rem;
        text-align: center;
        color:black;
        margin-top:50px;
    }
    .slideshow{
        width: 70%;
        height: 400px;
        position: absolute;
        left: 50%;
        top: 48%;
        transform: translate(-50%, -40%);
        background-image: url(slidepic1.JPG);
        background-size: 100% 100%;
        box-shadow: 1px 2px 10px grey;
        animation:slider 9s infinite linear;
        animation-delay: 3s, 200ms;
    }

    @keyframes slider{
        0%{background-image: url(slidepic1.JPG);}
        33%{background-image: url(slidepic2.JPG);}
        66%{background-image: url(slidepic3.JPG);}
    }

    .linktop{
        position: absolute;
        top: 590px;
        left: 440px;
        letter-spacing: 2px;
    }
    .linkbot{
        position: absolute;
        top: 625px;
        left: 575px;
        letter-spacing: 2px;
    }
    
    tr.linktop td{
        border-top: 0px solid;
        border-bottom: 0px solid;
        border-right: 1px solid black;
        border-left: 1px solid black;
        padding-left: 4px;
        padding-right: 2px;
    }

    tr.linkbot td{
        border-top: 0px solid;
        border-bottom: 0px solid;
        border-right: 1px solid black;
        border-left: 1px solid black;
        padding-left: 4px;
        padding-right: 2px;
    }
     .navbar-brand {
        font-family: "Brush Script MT", cursive;
     }
    body{
        font-family: 'Inter', sans-serif;
     }
    </style>
    </head>
        <body>
            <nav class="navbar navbar-expand-lg p-2" style="font-size: 18px;">
                <a class="navbar-brand" href="#">
                    <img src="bpk_logo_2.png" style="width:120px;" alt="">
                </a>

                <div class="collapse navbar-collapse d-flex justify-content-around" id="navbarSupportedContent">
                    <div class="">
                        <a class="nav-link" href="index.php" style="color: black;">HOME<span class="sr-only">(current)</span></a>
                    </div>
                    <div class="">
                        <a class="nav-link" href="index.php" style="color: black;">ABOUT<span class="sr-only">(current)</span></a>
                    </div>
                    <div class="">
                        <a class="nav-link" href="index.php" style="color: black;">SHOP<span class="sr-only">(current)</span></a>
                    </div>
                    <div class="">
                    <a class="nav-link" href="index.php" style="color: black;">BLOG<span class="sr-only">(current)</span></a>
                    </div>
                    <div class="">
                        <a class="nav-link" href="index.php" style="color: black;">MENU<span class="sr-only">(current)</span></a>
                    </div>
                    <div class="">
                        <a class="nav-link" href="index.php" style="color: black;">ORDER ONLINE<span class="sr-only">(current)</span></a>
                    </div>
                    <div class="">
                        <a class="nav-link" href="index.php" style="color: black;"><img src="user_icon.png" style="width:30px;"></img><span style="margin-left: 30px;">LOG IN</span></a>
                    </div>
                </div>
            </nav>

            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <!-- <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="3"></li> -->
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="pp5.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="test_pic_1.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <!-- <div class="carousel-item">
                        <img src="pp5.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="pp5.jpg" class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div> -->
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col text-center" style="vertical-align:middle;">
                        <h1>Know More About Us!</h1>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row" style="margin-top: 30px; margin-bottom:10px;">
                    <div class="col text-center">
                        <div class="card rounded" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                            <div class="card-body rounded">
                                <div class="d-flex justify-content-around">
                                    <div class="text-center">
                                        <a class="nav-link rounded-circle" href="index.php" style="color: black; background-color: yellow;"><img class="img-fluid p-2" src="food_icon_no_bg.png" style="width:70px;" /></a>
                                        <span style="margin-top: 10px;"><b>Food</b></span>
                                    </div>
                                    <div class="">
                                        <a class="nav-link rounded-circle" href="index.php" style="color: black; background-color: black;"><img class="img-fluid p-2" src="food_icon_no_bg.png" style="width:70px;"/></a>
                                        <span style="margin-top: 10px;"><b>Bood</b></span>
                                    </div>
                                    <div class="">
                                        <a class="nav-link rounded-circle" href="index.php" style="color: black; background-color: salmon;"><img class="img-fluid p-2" src="food_icon_no_bg.png" style="width:70px;"/></a>
                                        <span style="margin-top: 10px;"><b>Good</b></span>
                                    </div>
                                    <div class="">
                                        <a class="nav-link rounded-circle" href="index.php" style="color: black; background-color: orange;"><img class="img-fluid p-2" src="food_icon_no_bg.png" style="width:70px;"/></a>
                                        <span style="margin-top: 10px;"><b>Boob</b></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" style="margin-bottom: 10px;">
                <h1 class="text-center">Take A Look At Our Best Seller!</h1>
                <div class="row d-flex justify-content-around">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="bpk_logo_2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="bpk_logo_2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="bpk_logo_2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div>
                    <!-- <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="bpk_logo_2.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                    </div> -->
                </div>
            </div>
            <footer class="p-4" style="background-color: black; height:300px">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">
                            <h1 style="color:white">BPK Legend</h1>
                            <p style="margin-top:10px;" class="d-flex justify-content-around">
                                <a style="color:#838585;"href="#">HOME</a>
                                <a style="color:#838585;"href="#">ABOUT</a>
                                <a style="color:#838585;"href="#">SHOP</a>
                                <a style="color:#838585;"href="#">BLOG</a>
                                <a style="color:#838585;"href="#">MENU</a>
                                <a style="color:#838585;"href="#">ORDER</a>
                            </p>
                            <!-- <p class="d-flex justify-content-center">
                                <a style="color:#838585;margin-right:5px;border-color:#Dcf3c6"href="#" class="border rounded-circle border-success p-1"><img src="gofood_icon.png" class="p-1" style="width:50px;" /></a>
                                <a style="color:#838585;margin-right:5px;border-color:#Dcf3c6"href="#" class="border rounded-circle border-success p-1"><img src="gofood_icon.png" class="p-1" style="width:50px;" /></a>
                                <a style="color:#838585;margin-right:5px;border-color:#Dcf3c6"href="#" class="border rounded-circle border-success p-1"><img src="gofood_icon.png" class="p-1" style="width:50px;" /></a>
                                <a style="color:#838585;margin-right:5px;border-color:#Dcf3c6"href="#" class="border rounded-circle border-success p-1"><img src="gofood_icon.png" class="p-1" style="width:50px;" /></a>
                                <a style="color:#838585;margin-right:5px;border-color:#Dcf3c6"href="#" class="border rounded-circle border-success p-1"><img src="gofood_icon.png" class="p-1" style="width:50px;" /></a>
                                <a style="color:#838585;margin-right:5px;border-color:#Dcf3c6"href="#" class="border rounded-circle border-success p-1"><img src="gofood_icon.png" class="p-1" style="width:50px;" /></a>
                            </p> -->
                        </div>
                    </div>
                </div>
            </footer>
            <!-- <div class="slideshow"></div> 
            <table>
                <tr class="linktop">
                    <td><a href="prosesentrimeja.php">Entri Meja</a></td>
                    <td><a href="prosesentribarang.php">Entri Barang</a></td>
                    <td><a href="prosesentriorder.php">Entri Order</a></td>
                    <td><a href="prosesentritransaksi.php">History Transaksi</a></td>
                </tr>
                <tr class="linkbot">
                    <td><a href="prosesgeneratelaporan.php">Generate Lapotan</a></td>
                </tr>
            </table> -->

            
        </body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>