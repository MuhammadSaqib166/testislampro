<?php 
    include('includes/header.php');
    include('./admin/db_conn.php');

    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `feedback`(`name`, `email`, `message`) VALUES ('$name','$email','$message')";
         mysqli_query($conn, $sql);
    }


?>
    <!-- hero section start -->
    <section class="hero-feedback">
        <div class="hero-text">
            <h1>Drop us a line</h1>
            <form method = "POST">
            <div class="form" >
                <div class="feedback-form">
                    <input type="text" class="feedback1" name="name" placeholder="Full Name">
                    <input type="text" class="feedback2" name="email" placeholder="Email Address">
                </div>
                <div class="feedback-form1">
                    
                    <textarea class="feedback" cols="30" rows="10" name="message" placeholder="Enter Your Message...."></textarea>
                </div>
                
            </div>
            <div class="submit">
                <button class="subbtn" type="submit" name="submit">Submit</button>
            </div>
</form>
        </div>
        <div class="hero-img">
            <img class="heroimg" src="images/feedbackimg.png">
        </div>
    </section>

    <!-- foote start -->
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
        ScrollReveal().reveal('.hero-text', { delay: 200, origin: 'bottom' });
        ScrollReveal().reveal('.hero-img', { delay: 550, origin: 'right' });
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