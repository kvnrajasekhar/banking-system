<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./nbibank.css">
    <title>NBI</title>
</head>

<body>
    <?php require_once './header.php' ?>
    <div class="carousel-main">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="https://www.indusind.com/content/dam/indusind-platform-images/carousal-banner-images/credit-card/b4/d-CC_Carousel-1920X450_4.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.indusind.com/content/dam/indusind-platform-images/carousal-banner-images/credit-card/b5/d-CC_Carousel-1920x450_5.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://www.indusind.com/content/dam/indusind-platform-images/carousal-banner-images/credit-card/b2/CC_Carousel_Banner_1920X450_2.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <div class="content1">
        <h1> Content 1</h1>
        <div class=" row others">
            <div class="  col-sm .col-6 .col-md-4 lorem-1">
                <p class=" content1-p">Contrary to popular belief, Lorem Ipsum is not simply random text.
                    It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.
                    Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,
                    looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage,
                    and going through the cites of the word in classical literature, discovered the undoubtable source.
                    Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum"
                    (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics,
                    very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..",
                    comes from a line in section 1.10.32.</p>
            </div>
            <div class=" img-content col-sm .col-6 .col-md-4">
                <img class="content1-img" src="https://assets.ncr.com/content/experience-fragments/ncr-carousels/digital-banking-carousel/_jcr_content/root/container_copy/carousel_copy_copy/item_1558030532791_c_874833597.coreimg.jpeg/1663230634546/blogs-banking-022422.jpeg" alt="">
            </div>
        </div>
    </div>
    <h1>Transaction and Customers details</h1>
    <div class="row">

        <div class="container content-btn-head col my-5">
            <p class="lead">Customers Details</p></br>
            <a href="customer.php" class=" content-btn"><button class="btn content-btn show-btn btn-danger" type="button">Show</button></a>
        </div>

        <div class="container content-btn-head col my-5">
            <p class="lead">Transaction History</p></br>
            <a href="transaction.php" class=" content-btn"><button class="btn show-btn btn-danger" type="button">Show</button></a>
        </div>
    </div>
    <div class="content1">
        <h1> Content 2</h1>
        <div class=" row others">
            <div class=" img-content col-sm .col-6 .col-md-4">
                <img class="content2-img" src="https://nmgprod.s3.amazonaws.com/media/files/f1/d0/f1d0a99cd1bb4c8a24c22748422b67d1/cover_image.jpg" alt="">
            </div>
            <div class="  col-sm .col-6 .col-md-4 lorem-1">
                <p class="content2-p">There are many variations of passages of Lorem Ipsum available,
                    but the majority have suffered alteration in some form, by injected humour,
                    or randomised words which don't look even slightly believable.
                    If you are going to use a passage of Lorem Ipsum,
                    you need to be sure there isn't anything embarrassing hidden in the middle of text.
                    All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary,
                    making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words,
                    combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.
                    The generated Lorem Ipsum is therefore always free from repetition, injected humour,
                    or non-characteristic words etc.</p>
            </div>
        </div>
    </div>
    <?php require_once './footer.php' ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>