<?php 
session_start();

?>  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--<link rel="stylesheet" href="/getflix/css/style.css" />-->
    <link rel="stylesheet" href="/getflix/css/styles.css" />
  <title>Document</title>
</head>
<body>
<?php
include('/var/www/html/getflix/home/navbar.php'); 
?>
<!-- Top content -->
<!--<div class="top-content">
    <div class="container-fluid">-->
        

            <?php
            /*function makeCarousel($nbrOfCover,$sort, $id) {
                include("/var/www/html/getflix/scripts/connectdb.php");
                $sql = 'SELECT id FROM movies ORDER BY '. $sort.' LIMIT '.$nbrOfCover;
                $req = $bdd->prepare($sql);
                $req->execute();
                $entryCarousel1=[];
                echo  "<div id=" . $id . " class='carousel slide' data-ride='carousel'>
                    <div class='carousel-inner row w-100 mx-auto' role='listbox'>";
                while ($result = $req->fetch()) {  
                    array_push($entryCarousel1,$result['id']);
                        if ($entryCarousel1[0]==$result['id']){
                            echo '<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                            <img src="/getflix/img/'.$result['id'].'.jpg" class="img-fluid mx-auto d-block coverCarousel" alt="img'.$result['id'].'">
                            </div>';
                        } else{
                            echo '<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                            <img src="/getflix/img/'.$result['id'].'.jpg" class="img-fluid mx-auto d-block coverCarousel" alt="img'.$result['id'].'">
                            </div>';}
                }
                $req->closeCursor();}
                echo             
                '</div>
                <a class="carousel-control-prev" href="#'.$id.'" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#'.$id.'" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>';
    
            makeCarousel(8,"year","id1"); 
            makeCarousel(8,"rating","id2");
            makeCarousel(8,"id","id3");*/
            ?>
    <!--</div>
</div>-->

<div id="carouselExampleControls" class="carousel slide" data-interval="false">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block coverCarousel" src="/getflix/img/1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block coverCarousel" src="/getflix/img/2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block coverCarousel" src="/getflix/img/3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
               
                <!--<div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3 active">
                    <img src="/getflix/img/2.jpg" class="img-fluid mx-auto d-block" alt="img2">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/getflix/img/3.jpg" class="img-fluid mx-auto d-block" alt="img3">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/getflix/img/4.jpg" class="img-fluid mx-auto d-block" alt="img4">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/getflix/img/5.jpg" class="img-fluid mx-auto d-block" alt="img5">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/getflix/img/6.jpg" class="img-fluid mx-auto d-block" alt="img6">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/getflix/img/7.jpg" class="img-fluid mx-auto d-block" alt="img7">
                </div>
                <div class="carousel-item col-12 col-sm-6 col-md-4 col-lg-3">
                    <img src="/getflix/img/8.jpg" class="img-fluid mx-auto d-block" alt="img8">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carousel-example" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>-->

</body>
<!--JS Scripts-->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="/getflix/scripts/carouselscript.js"></script>

</html> 
