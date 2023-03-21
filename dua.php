<?php 
    include "admin/db_conn.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IslamPro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@200;400;500&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Cinzel+Decorative:wght@400;700&family=Cinzel:wght@600&family=Jost:wght@200;400;500&display=swap"
        rel="stylesheet">
        <link rel="stylesheet" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>

<body>
    <div class="dua-body">
    <!-- header start -->
    <header>
        <a href="index.php" class="navlogo"> <img style="width: 80px; height: 80px;" src="images/islampro.png" /> </a>
        <ul class="cnavbar">
            <li><a href="index.php">Home</a></li>
            <li><a href="dua.php" >Dua</a></li>
            <li><a href="daroodSharif.php">Darood Sharif</a></li>
            <li><a href="about.php">About Us</a></li>
            <li><a href="mobileApp.php">Mobile App</a></li>
            <!-- <li><a href="developer.php">Developer</a></li> -->
            <li><a href="blog.php">Blog</a></li>
            <li><a href="feedback.php">Feedback</a></li>
        </ul>
        <div class="main">
            <a href="#"><img src="images/icon.png" alt=""></a>
            <a href="#"><img src="images/facebook.png" alt=""></a>
            <a href="#"><img src="images/twitter.png" alt=""></a>
            <a href="#"><img src="images/instagram.png" alt=""></a>
            <span class="line"></span>
            <i id="darkmode" class=" bx bx-moon"></i>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div>
    </header>
    <!-- header end -->

    <!-- Dua section -->

    <div class="container-about">
        <div class="wrapper-about">
            <h2>Dua of the day</h2>
            <h3>رَبَّنَا وَاجْعَلْنَا مُسْلِمَيْنِ لَكَ وَمِن ذُرِّيَّتِنَا أُمَّةً مُّسْلِمَةً لَّكَ وَأَرِنَا مَنَاسِكَنَا وَتُبْ عَلَيْنَآ إِنَّكَ أَنتَ التَّوَّابُ الرَّحِيمُ</h3>
            <p>Our Lord! Make of us Muslims, bowing to Thy (Will), and of our progeny a people Muslim, bowing to Thy (will); and show us our place for the celebration of (due) rites; and turn unto us (in Mercy); for Thou art the Oft-Returning, Most Merciful.</p>
        </div>
    </div>

    <div class="container-about-bottom">
        <div class="section-about">
            <div class="top-about">
                <h4>A List of Powerful Duas</h4>
                <div class="search">
                    <input type="text" class="searchtext" name="" placeholder="Search with chapter name or no">
                    <a href="#" class="searchicon"> <i class='bx bx-search'></i> </a>
                </div>
            </div>
            <?php
                    
            
            ?>
            <div class="buttons-about">
                <a class="btn active" data-value="All duas">All Duas</a>
                <a class="btn" data-value="Quran duas">Quran duas</a>
                <a class="btn" data-value="All Time">All Time</a>
                <a class="btn" data-value="Mosque">Mosque</a>
                <a class="btn" data-value="Ablution">Ablution</a>
                <a class="btn" data-value="Prayer">Prayer</a>
                <a class="btn" data-value="Eat/Drink">Eat/Drink</a>
                <a class="btn" data-value="Forgiveness">Forgiveness</a>
                <a class="btn" data-value="Praise Allah">Praise Allah</a>
                <a class="btn" data-value="AfterPrayer">AfterPrayer</a>
                <a class="btn" data-value="Protection">Protection</a>
                <a class="btn" data-value="dressinDressingg">Dressing</a>
                <a class="btn" data-value="Morning/Evening">Morning/Evening</a>
                <a class="btn" data-value="Health/Sick">Health/Sick</a>
                <a class="btn" data-value="Guidance">Guidance</a>
                <a class="btn" data-value="Blessings">Blessings</a>
                <a class="btn" data-value="40 Rabbana">40 Rabbana</a>
                <a class="btn" data-value="Family">Family</a>
                <a class="btn" data-value="Rain">Rain</a>
                <a class="btn" data-value="Fasting">Fasting</a>
                <a class="btn" data-value="6 kalma/imae mufassal & mujmal">6 kalma/imae mufassal & mujmal</a>
                <a class="btn" data-value="Marriage">Marriage</a>
                <a class="btn" data-value="Toilet">Toilet</a>
                <a class="btn" data-value="Funeral/grave">Funeral/grave</a>
                <a class="btn" data-value="Hajj & Umrah">Hajj & Umrah</a>
                <a class="btn" data-value="Rizq">Rizq</a>
                <a class="btn" data-value="Travelling">Travelling</a>
            </div>
            
                <div class="card-container-dua" id="card-container-dua">
                           
                           </div>
       
            </div>
            <div class="showbtn">
                <button class="show" type="submit">Show all</button>
            </div>
    </div>
    <?php
   include ('includes/footer.php');

   ?>

</div>
<script src="./js/main.js"></script>
    <!-- js file link -->

    <script>

$(document).ready(function() {

    var category = "All duas";
    $.ajax({
      url: './search.php',
      type: 'post',
      data: {
        'request': category,
    },
      success:function(data){
        $("#card-container-dua").html(data);
      }
    });


  $('.buttons-about a').on('click', function(event) {
    event.preventDefault();
    var category = $(this).data('value');
    $.ajax({
      url: './search.php',
      type: 'post',
      data: {
        'request': category,
    },
      success:function(data){
        $("#card-container-dua").html(data);
      }
    });
  });
});
        ScrollReveal({
            distance: '50px',
            duration: '1500',
            reset: false
        });
        ScrollReveal().reveal('.wrapper-about', { delay: 200, origin: 'bottom' });
        ScrollReveal().reveal('.top-about', { delay: 550, origin: 'right' });
        ScrollReveal().reveal('.buttons-about', { delay: 150, origin: 'top' });
        ScrollReveal().reveal('.card1-dua', { delay: 150, origin: 'top' });
    </script>
    
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>