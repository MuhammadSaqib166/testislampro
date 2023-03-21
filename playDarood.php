<?php 
    include('includes/header.php');
    include('admin/db_conn.php');
    $id=$_GET['id'];
 $sel="SELECT *FROM `daroods` WHERE id='$id'";
 $res=mysqli_query($conn,$sel);
 $row=mysqli_fetch_array($res);
?>
    <!-- Dua section -->

    <div class="wrapper-play">
        <div class="box">
            <div class="left">
                <button class="leftbtn">Al-Fatihah<i class='bx bx-chevron-down'></i></button>
            </div>
            <div class="content1">
                <div class="tp">
                    <button class="topbtn1">Surah</button>
                    <button class="topbtn2">Juz</button>
                </div>
                
                <div class="search1">
                    <i class='bx bx-search'></i>
                  <input spellcheck="false" type="text" placeholder="Search">
                </div>
                <ul class="options"></ul>
              </div>
            <div class="middle">
                <button class="middlebtn1">Normal</button>
                <button class="middlebtn2">Reading</button>
            </div>
            <div class="right-custom-btn">
                <button class="rightbtn">Settings<i class='bx bx-chevron-down'></i></button>
                <div class="content">
                    
                </div>
            </div>
        </div>
    </div>

    <div class="container-play">
        <div class="second-wrapper-play">
            <div class="top">
                <div class="left">
                    <img src="images/icon.png">
                    <div class="heading">
                        <h3>Al-Fatiah</h3>
                        <p>7 Verses</p>
                    </div>
                </div>
                <div class="right">
                    <h2>ةحتافلا</h2>
                </div>
            </div>
            <div class="middle">
                <h2>بِسۡمِ اللّٰہِ الرَّحۡمٰنِ الرَّحِیۡمِ</h2>
            </div>
            <div class="bottom">
                <div class="progress-controller">
                    <div class="progress-container">
                        <div class="control-buttons">
                            <i class='bx bx-rewind'></i>
                            <i class='bx bx-play'></i>
                            <i class='bx bx-fast-forward'></i>
                        </div>
                        <span>0:49</span>
                        <div class="progress-bar">
                            <div class="progress"></div>
                        </div>
                        <span>3:15</span>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php
     $sel="SELECT *FROM `daroods` WHERE id='$id'";
     $res=mysqli_query($conn,$sel);
     
    while ($row=mysqli_fetch_array($res)) {
        
    ?>
    <!-- Surah cards design -->
    <div class="surah-card">
        <h1>
            <?php echo $row['darood']; ?> 
        </h1>
    </div>
    <?php
    }
    ?>
    </div>

    <!-- footer start -->
    <footer>
        <div class="wrapper">
            <div class="wrapper1">
            <div class="footer-widget">
                <h3>NAVIGATE</h3>
                <ul class="links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Ramadan Dua</a></li>
                    <li><a href="#">Mobile App</a></li>
                    <li><a href="#">Developers</a></li>
                </ul>
            </div>
            <div class="footer-widget">
                <h3>SURAH LINK</h3>
                <ul class="links">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Ramadan Dua</a></li>
                    <li><a href="#">Mobile App</a></li>
                    <li><a href="#">Developers</a></li>
                </ul>
            </div>
            <div class="footer-widget">
                <h3>MOBILE APP</h3>
                <ul class="ulbox">
                    <li><a href="#">AAQR</a></li>
                    <h5>FOLLOW US</h5>
                    <div class="center">
                    <li><img src="images/icon.png" alt=""></li>
                    <li><img src="images/instagram.png" alt=""></li>
                    <li><img src="images/facebook.png" alt=""></li>
                    <li><img src="images/twitter.png" alt=""></li>
                </div>
                </ul>
            </div>
        </div>
        <div class="wrapper2">
            <div class="footer-widget">
                <h6>Islam Pro is a Sadaqah Jariyah. We hope to make it easy for everyone to read, study, and learn The
                    Noble Quran. The Noble Quran has many names including Al-Quran Al-Kareem, Al-Ketab, Al-Furqan,
                    Al-Maw'itha, Al-Thikr, Ayat-ul-Kursi, and Al-Noor.</h6>
            </div>
        </div>
        </div>
            <div class="footer-bottom">
                <p>Copyright &copy;Islampro2022. All rights reserved.</p>
            </div>
    </footer>


    <!-- js file link -->
    <script type="text/javascript" src="js/main.js"></script>

    <script src="https://unpkg.com/scrollreveal"></script>

    <script>
        ScrollReveal({
            distance: '50px',
            duration: '1500',
            reset: false
        });
        ScrollReveal().reveal('.box', { delay: 200, origin: 'top' });
        ScrollReveal().reveal('.second-wrapper-play', { delay: 550, origin: 'right' });
        ScrollReveal().reveal('.surah-card', { delay: 200, origin: 'bottom' });
    </script>

    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>

</html>