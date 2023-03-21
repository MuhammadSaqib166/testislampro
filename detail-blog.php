<?php 
    include ("admin/db_conn.php");
    $id=$_GET['id'];
 $sel="SELECT *FROM `blogs` WHERE id='$id'";
 $res=mysqli_query($conn,$sel);

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
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>

.container-blog{
    max-width: 1068px;
    margin: auto;
    width: 100%;
    margin-bottom: 50px;
}

.home-blog{
    width: 100%;
    height: 440px;
    background-size: cover;
    display: grid;
    justify-content: center;
    align-items: center;
}

.home-text{
    color: #1AA06F;
    text-align: center;
}

.home-text .header-img{
    width: 800px;
    height: auto;
    margin-top: 100px;
}


.post-filter{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 600px;
}
.post-filter h5{
  font-family: 'jost';
  font-weight: 600;
  font-size: 30px;
}



.post-box{
    height: auto;
    background: #f3f3f3;
    box-shadow: 0 4px 14px hsl(35deg 25% 15% / 10%);
    padding: 15px;
    border-radius: 0.5rem;
}



.post-title{
    font-size: 2.2rem;
    font-weight: 600;
    color: #000;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    padding-top: 10px; 
    text-decoration: none;
}

.post-description{
    font-size: 1.2rem;
    font-family: 'jost';
    font-weight: 400;
    color: #000;
    line-height: 2rem;
    margin: 5px 0 5px;
    overflow: hidden;
    padding-top: 10px; 
}



.share-button{
  width: 280px;
  height: 80px;
  background: #dfe6e9;
  border-radius: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  overflow: hidden;
  position: relative;
  cursor: pointer;
  transition: .3s linear;
  margin-top: 30px;
}

.share-button:hover{
  transform: scale(1.1);
}

.share-button span{
  position: absolute;
  width: 100%;
  height: 100%;
  background: #2d3436;
  color: #f1f1f1;
  text-align: center;
  line-height: 80px;
  z-index: 999;
  transition: .6s linear;
  border-radius: 10px;
  font-size: 25px;
}

.share-button:hover span{
  transform: translateX(-100%);
  transition-delay: .3s;
}

.share-button a{
  flex: 1;
  font-size: 26px;
  color: #2d3436;
  text-align: center;
  transform: translateX(-100%);
  opacity: 0;
  transition: 0.3s linear;
}

.share-button:hover a{
  opacity: 1;
  transform: translateX(0);
}

.share-button a:nth-of-type(1){
  transition-delay: 1s;
}

.share-button a:nth-of-type(2){
  transition-delay: 0.8s;
}

.share-button a:nth-of-type(3){
  transition-delay: 0.6s;
}

.share-button a:nth-of-type(4){
  transition-delay: 0.4s;
}


@media (max-width: 1000px){
    .home-text .header-img{
    width: 500px;
    height: auto;
  }  
}
@media (max-width: 420px){
    .home-text .header-img{
    width: 400px;
    height: auto;
  }  
}@media (max-width: 350px){
    .share-button{
        width: 200px;
  }  
}
</style>
</head>

<body>
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

    <!-- <section class="post-header">
        <div class="header-content post-container"> -->
            <!-- back to home -->
            <!-- <a href="index.php" class="back-home">Back to Home</a>
            <h1 class="header-title">The Title is Here</h1>
            <img src="images/cardimg1.jpg" alt="" class="header-img">
        </div>
    </section>

    <section class="post-content post-container">
        <h2 class="sub-heading">Title of dua</h2>
        <p class="post-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nesciunt accusamus optio voluptatum modi, rerum vitae voluptatem, ut, sunt pariatur eius animi voluptas architecto maiores deleniti tempora. Itaque, perspiciatis dolores!</p>
        <p class="post-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nesciunt accusamus optio voluptatum modi, rerum vitae voluptatem, ut, sunt pariatur eius animi voluptas architecto maiores deleniti tempora. Itaque, perspiciatis dolores!</p>
        <h2 class="sub-heading">Title of dua</h2>
        <p class="post-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nesciunt accusamus optio voluptatum modi, rerum vitae voluptatem, ut, sunt pariatur eius animi voluptas architecto maiores deleniti tempora. Itaque, perspiciatis dolores!</p>
        <p class="post-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nesciunt accusamus optio voluptatum modi, rerum vitae voluptatem, ut, sunt pariatur eius animi voluptas architecto maiores deleniti tempora. Itaque, perspiciatis dolores!</p>
        <p class="post-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate nesciunt accusamus optio voluptatum modi, rerum vitae voluptatem, ut, sunt pariatur eius animi voluptas architecto maiores deleniti tempora. Itaque, perspiciatis dolores!</p>
        
    </section> -->
    <?php
while ($row = mysqli_fetch_assoc($res)) {
    ?>

    <section class="home-blog" id="home">
        <div class="home-text container-blog">
        <!-- <img src="images/cardimg1.jpg" alt="" class="header-img"> -->
        <img src="admin/admin/<?php echo $row['image'] ?>" alt="blog image" class="header-img">
   
    </div>
    </section>

    

    <div class="post-filter container-blog">
        <h5>This Blog Says</h5>
    </div>
    <div class="post container-blog">
        <!-- Post 1 -->
        <div class="post-box">
    
    <a href="#" class="post-title">
    <?php echo $row['title'] ?>

    </a>
    <p class="post-description">
    <?php echo $row['description']?>
    </p>



    <div class="share">
        <div class="share-button">
      <span><i class='bx bxs-share-alt' >&nbsp;</i> Share!</span>
      <a href="#"><i class='bx bx-copy'></i></a>
      <a href="https://www.facebook.com"><i class='bx bxl-facebook' ></i></a>
      <a href="https://www.twitter.com"><i class='bx bxl-twitter' ></i></a>
      <a href="https://www.instagram.com"><i class='bx bxl-instagram' ></i></a>
      <a href="https://www.linkedin.com"><i class='bx bxl-linkedin-square' ></i></a>
        </div>
    </div>
  </div>
     <?php
}
?>

</div>

    </div>
</div>

<?php
    include("./includes/footer.php");
?>
    <!-- js file link -->

    <script src="https://unpkg.com/scrollreveal"></script>

    <script>
//Filter
$(document).ready(function () {
    $(".filter-item").click(function () {
        const value = $(this).attr("data-filter");
        if (value == "all"){
            $(".post-box").show("1000")
        } else{
            $(".post-box")
                .not("." + value)
                .hide(1000);
            $(".post-box")
            .filter("." + value)
            .show("1000")
        }
    });
    $(".filter-item").click(function () {
        $(this).addClass("active-filter").siblings().removeClass("active-filter")
    });
});



        ScrollReveal({
            distance: '50px',
            duration: '1500',
            reset: false
        });
        ScrollReveal().reveal('.hero-text', { delay: 200, origin: 'bottom' });
        ScrollReveal().reveal('.hero-img', { delay: 550, origin: 'right' });
        ScrollReveal().reveal('.top', { delay: 100, origin: 'top' });
        ScrollReveal().reveal('.topbuttons', { delay: 150, origin: 'top' });
        ScrollReveal().reveal('.card1', { delay: 150, origin: 'top', scale: 1.2, interval: 200 });


    const viewBtn = document.querySelector(".view-modal"),
    popup = document.querySelector(".popup"),
    close = popup.querySelector(".close"),
    field = popup.querySelector(".field"),
    input = field.querySelector("input"),
    copy = field.querySelector("button");
    viewBtn.onclick = ()=>{
      popup.classList.toggle("show");
    }
    close.onclick = ()=>{
      viewBtn.click();
    }
    copy.onclick = ()=>{
      input.select(); //select input value
      if(document.execCommand("copy")){ //if the selected text copy
        field.classList.add("active");
        copy.innerText = "Copied";
        setTimeout(()=>{
          window.getSelection().removeAllRanges(); //remove selection from document
          field.classList.remove("active");
          copy.innerText = "Copy";
        }, 3000);
      }
    }
  </script>
    </script>

    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>

</html>