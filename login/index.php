<?php
session_start();
if(!isset($_SESSION["username"])){
  header("Location: index.php");
  exit;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Rubik+Bubbles&family=VT323&display=swap" rel="stylesheet">
    
    <title>Discover Wollpaperz</title>
</head>
<body>


    <nav class="navbar">
        <div class="navbar-header"><a href="index.html">wollpaperz</a>

            <a href="#" class="toggle-button">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
           </a>
        </div>
        
        <div class="search-input">
            <input type="search" name="" placeholder="Search for images">
        </div>


        <div class="navbar-links">
            <ul>
                <li>
                    <a href="">
                    <?php echo $_SESSION["username"];?>
                    </a>
                <ul>
                    <li><a id="saved_image" href="">Saved Images</a></li>
                    <li><a id="logout" href="logout.php">Logout</a><li>
                </ul>  
                </li>
               
            </ul>
        </div>
    </nav>

    <div id="no_pics">No Pictures found</div>
    

    <div id="popup-image">
        <div id="white-background">
            <div class="pop-buttons">
                    <button id="download_button">
                        Download
                    </button>    
                    </a> 
                    <button id="save_image_button">Save Image</button>
            </div>
        </div>
        <button id="close_image"></button>
    </div>

    <div class="image-container">
       
    </div>


    <div id="page">
        <p class="page_number">Page 1</p>
        <button class="previous_page"><</button>
        <button class="next_page">></button>
    </div>
    <br>
    <footer>
        <span>
            API provided by <a href="https://www.pexels.com/">Pexels.com</a>
        </span>
    </footer>
    

</body>

<script src="../main.js"></script>
<script src="../toggleMenu.js"></script>
</html>