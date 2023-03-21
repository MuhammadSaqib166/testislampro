<?php 
    include ("admin/db_conn.php");
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
/* blog page design */

/* 
.home{
  width: 100%;
  height: 440px;
  background-color: #F3F3F3;
  display: grid;
  justify-content: center;
  align-items: center;
}
.home-text{
  color: #1AA06F;
  text-align: center;
}
.home-title{
  font-size: 3.5rem;
  font-family: 'jost', sans-serif;
  font-weight: 600;
}
.home-subtitle{
  font-size: 1rem;
  font-family: 'jost', sans-serif;
  font-weight: 400;
}
/* posts */
/* .post{
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(280ox, auto));
  justify-content: center;
  gap: 1.5rem;
}
.post .post-box img{
  width: 100px;
  height: 100px;
}  */

.container-blog{
    max-width: 1068px;
    margin: auto;
    width: 100%;
    margin-bottom: 50px;
}

.home-blog{
    width: 100%;
    height: 440px;
    background: url("images/heroback.png");
    background-size: cover;
    display: grid;
    justify-content: center;
    align-items: center;
}

.home-text{
    color: #1AA06F;
    text-align: center;
}

.home-title{
    font-size: 3.5rem;
    font-family: 'jost';
    font-weight: 600;
}

.home-subtitle{
    font-size: 1rem;
    font-weight: 400;
    font-family: 'jost';
}

.about-blog{
    position: relative;
    width: 100%;
    display: flex !important;
    justify-content: center;
    align-items: center;
}

.about-blog .contentBx{
    max-width: 50%;
    width: 50%;
    text-align: left;
    padding-right: 40px;
}

.titleText{
    font-weight: 600;
    color: #111;
    font-size: 2rem;
    margin-bottom: 10px;
}

.title-text{
    color: #111;
    font-size: 1em;
}

.about-blog .imgBx{
    position: relative;
    min-width: 50%;
    width: 50%;
    min-height: 500px;
}

.btn2{
    position: relative;
    display: inline-block;
    margin-top: 30px;
    padding: 10px 30px;
    background: #fff;
    border: .8px solid #111;
    color: #333;
    text-decoration: none;
    transition: 0.5s;
}

.btn2:hover{
    background-color: #1AA06F;
    border: none;
    color: #fff;
}

.post-filter{
    display: flex;
    justify-content: center;
    align-items: center;
    padding-top: 480px;
}
.post-filter h5{
  font-family: 'jost';
  font-weight: 600;
  font-size: 30px;
}

.post{
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 1.5rem;
    margin-top: 20px; 
}

.post-box{
    background: #f3f3f3;
    box-shadow: 0 4px 14px hsl(35deg 25% 15% / 10%);
    padding: 15px;
    border-radius: 0.5rem;
}

.post-img{
    width: 100%;
    height: 200px;
    object-fit: cover;
    object-position: center;
    border-radius: 0.5rem;
}

.category{
    font-size: 0.9rem;
    font-weight: 500;
    text-transform: uppercase;
    color: #1AA06F;
}

.post-title{
    font-size: 1.3rem;
    font-weight: 600;
    color: #000;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
    padding-top: 10px; 
}

.post-date{
    display: flex;
    font-size: 0.875rem;
    text-transform: uppercase;
    margin-top: 4px;
    font-weight: 400;
}

.post-description{
    font-size: 0.9rem;
    line-height: 1.5rem;
    margin: 5px 0 5px;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    -webkit-box-orient: vertical;
    overflow: hidden;
}

.profile{
    display: flex;
    align-items: center;
    gap: 10px;
}

.profile-img{
    width: 35px;
    height: 35px;
    border-radius: 50%;
    object-fit: cover;
    object-position: center;
    border: 2px solid #1AA06F;
}

.profile-name{
    font-size: .8rem;
    font-weight: 500;
}

@media (max-width: 980px){
  .post{
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 1.5rem;
    margin-top: 20px; 
  }
}
@media (max-width: 600px){
  .post{
    display: grid;
    grid-template-columns: repeat(1, 1fr);
    gap: 1.5rem;
    margin-top: 20px; 
  }
}
/* darkmode code  */
body.color .post-filter{
    color: #fff;
}
body.color .post-box{
    color: #212121;
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


    <section class="home-blog" id="home">
        <div class="home-text container-blog">
            <h2 class="home-title">Our Blogger</h2>
            <span class="home-subtitle">Your source of great content</span>
        </div>
    </section>

    

    <div class="post-filter container-blog">
        <h5>Some Awesome Blogs are here</h5>
    </div>
    <div class="post container-blog">
    <?php
    $sql = "SELECT * FROM blogs";
    $result =  mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
    ?>
        <!-- Post 1 -->
        <div class="post-box tech">
        <img src="admin/admin/<?php echo $row['image']?>" alt="Image" height="100px" width="100px" class="post-img">
            
        <a href="./detail-blog.php?id=<?php echo $row['id'];?>" class="post-title"><?php echo $row['title'];?></a>
        <span class="post-date"><?php echo date('d/m/Y', strtotime($row['created_at']));?></span>
        <p class="post-description"><?php echo $row['description'];?></p>
            
        </div>
        
    <?php
    }
       ?>

</div>



<!-- <div class="share">
        <div class="share-button">
      <span><i class='bx bxs-share-alt' >&nbsp;</i> Share!</span>
      <a href="#"><i class='bx bx-copy'></i></a>
      <a href="https://www.facebook.com"><i class='bx bxl-facebook' ></i></a>
      <a href="https://www.twitter.com"><i class='bx bxl-twitter' ></i></a>
      <a href="https://www.instagram.com"><i class='bx bxl-instagram' ></i></a>
      <a href="https://www.linkedin.com"><i class='bx bxl-linkedin-square' ></i></a>
    </div>
    </div> -->
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
        ScrollReveal().reveal('.post-box', { delay: 150, origin: 'top', scale: 1.2, interval: 200 });


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