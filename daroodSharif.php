<?php 
    include('includes/header.php');    
    include ("admin/db_conn.php");
?>
    <!-- Dua section -->

    <div class="container-darood">
        <div class="wrapper-darood">
            <h2>Darood Sharif of the day</h2>
            <h3>رَبَّنَا وَاجْعَلْنَا مُسْلِمَيْنِ لَكَ وَمِن ذُرِّيَّتِنَا أُمَّةً مُّسْلِمَةً لَّكَ وَأَرِنَا مَنَاسِكَنَا وَتُبْ عَلَيْنَآ إِنَّكَ أَنتَ التَّوَّابُ الرَّحِيمُ
            </h3>
            </div>
    </div>

    <div class="container-darood-bottom">
        <div class="section-about">
            <div class="top-about">
                <h4>A List of Darood Sharif</h4>
                <div class="search">
                    <input type="text" class="searchtext" name="" placeholder="Search with chapter name or no">
                    <a href="#" class="searchicon"> <i class='bx bx-search'></i> </a>
                </div>
            </div>
            <div class="grid-container3">
<?php
    $sql = "SELECT * FROM daroods";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
?>
    <div class="column2">
        <a href="./playdua.php?id=<?php echo $row['id'];?>">
            <div class="card1-darood1">
                <img src="images/icon.png" alt="Image">
                <div class="card-text-darood1">
                    <h2><?php echo $row['title'];?></h2>
                </div>
            </div>
        </a>
    </div> 
<?php
    }
?>
</div>
                   
            <div class="showbtn">
                <button class="show" type="submit">Show all</button>
            </div>
        </div>
    </div>


    <?php
    include ('./includes/footer.php');
    ?>
    <!-- js file link -->
    
    <script src="https://unpkg.com/scrollreveal"></script>

    <script>
        ScrollReveal({
            distance: '50px',
            duration: '1500',
            reset: false
        });
        ScrollReveal().reveal('.wrapper-darood', { delay: 200, origin: 'bottom' });
        ScrollReveal().reveal('.top-about', { delay: 550, origin: 'right' });
        ScrollReveal().reveal('.card1-dua', { delay: 150, origin: 'top' });
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