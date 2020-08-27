<?php 
include("/var/www/html/getflix/scripts/connectdb.php");
?>
<!DOCTYPE html>
<html lang = "en">
   <head>
      <link href = "css/bootstrap.min.css" rel = "stylesheet">
      </head>
    <body>
    <?php
        $id =  htmlspecialchars($_GET["id"]);
        $req = $bdd->prepare('SELECT * FROM movies WHERE id = :id');
        $req->execute(array('id' => $id));
        $result = $req->fetch();
    ?>  
        <h2>User info</h2>
    <form action = "/getflix/dashboard/movies/movieseditscript.php" method = "post">
            <p><input type="hidden" id="id" name="id" value="<?php echo $result['id'];?>"></p>
            
            <p><label for="title">Title</label> </p>
            <p><input type="text" id="title" name="title" value="<?php echo $result['title'];?>" required></p>

            <p><label for="director">Director</label> </p>
            <p><input type="text" id="director" name="director" value="<?php echo $result['director'];?>" required></p>

            <p><label for="genre">Genre</label> </p>
            <p><input type="text" id="genre" name="genre" value="<?php echo $result['genre'];?>" required></p>

            <p><label for="year">Year</label> </p>
            <p><input type="text" id="year" name="year" value="<?php echo $result['year'];?>" required></p>

            <p><label for="length">Length</label> </p>
            <p><input type="text" id="length" name="length" value="<?php echo $result['length'];?>" required></p>

            <p><label for="synopsis">Synopsis</label> </p>
            <p><textarea rows="15" cols="40" id="synopsis" name="synopsis"  required><?php echo $result['synopsis'];?></textarea></p>

            <p><label for="rating">Rating</label> </p>
            <p><input type="number"  min="0" max="10" id="rating" name="rating" value="<?php echo $result['rating'];?>" required></p>
            
            <p><label for="trailer">Trailer</label> </p>
            <p><input type="text" id="trailer" name="trailer" value="<?php echo $result['trailer'];?>" required></p>
          </p>
            <p><input type="submit" value="Submit"></p>
        </form> 
    </body>
</html>


