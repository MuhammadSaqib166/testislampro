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
        <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<style>

.grid-container1 {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  grid-gap: 20px;
}


.grid-container1 .card-container-dua1 .column1 a {
  text-decoration: none;
}
.grid-container1 .card-container-dua1 .column1 a .card1-dua1 {
    margin-top: 30px;
    width: 350px;
    height: 70px;
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 5px 5px rgba(0, 0, 0, 0.1);
    display: flex;
    align-items: center;
  transition: all .30s ease-out;
}

.grid-container1 .card-container-dua1 .column1 a .card1-dua1 .card-text-dua1 {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}

.grid-container1 .card-container-dua1 .column1 a .card1-dua1 .card-text-dua1 img {
  width: 30px;
  height: 30px;
  transition: all .30s ease-out;
}

.grid-container1 .card-container-dua1 .column1 .card1-dua1 .card-text-dua1 h2 {
  font-size: 18px;
  color: #1AA06F;
  font-family: 'jost', sans-serif;
  font-weight: 800;
  cursor: pointer;
  transition: all .30s ease-out;
  margin-left: 40px;
  position: absolute;
  margin-top: 5px;
}

.grid-container1 .card-container-dua1 .column1 a .card1-dua1 .middle1 {
  position: relative;
  top: 26%;
  left: 8%;
  margin-left: 20px;
  font-size: 12px;
  font-family: 'poppins', sans-serif;
  transform: translate(-50%, -50%);
  color: #111;
}

.grid-container1 .card-container-dua1 .column1 {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100%;
}
.grid-container1 .card-container-dua1 .column1 a .card1-dua1:hover {
  background-color: #1AA06F;
  transition: all .30s ease;
}

.grid-container1 .card-container-dua1 .column1 a .card1-dua1:hover h2 {
  color: #fff;
  transition: all .30s ease;
} 
@media (max-width: 1200px) {
  .grid-container1 {
    grid-template-columns: repeat(2, 1fr);
}
}
@media (max-width: 800px) {
.grid-container1 {
  grid-template-columns: repeat(1, 1fr);
}
}
</style>
</head>


<?php
include ("admin/db_conn.php");

if (isset($_POST['request'])) {
  $request = $_POST['request'];
  // Prepare the SQL statement using a prepared statement
  $stmt = $conn->prepare("SELECT duas.*, categories.categorie
  FROM duas
  INNER JOIN categories ON duas.cat_id=categories.cat_id
  WHERE categories.categorie = ?
  ");
  
  
  $stmt->bind_param("s", $request);
  $stmt -> execute();
  $result = $stmt->get_result();
  if ($result->num_rows>0) {
    ?>
  
  <div class="grid-container1">
    <?php
    while ($row = $result->fetch_assoc()) {
      ?>
      <div class="card-container-dua1">
      <div class="column1">
      <a href="./playdua.php?id=<?php echo $row['id'];?>">
      <div class="card1-dua1">
      <p class="middle1"><?php echo $row['id'] ?></p>
      <div class="card-text-dua1">
      <img src="images/vector.png" alt="Image">
      <h2><?php echo $row['title'] ?></h2>
      </div>
      </div></a>
    </div>
    </div>
      <?php
    }
    ?>
    <?php
  } else {
    echo 'No duas found for the selected category.';
  }
  // $user = $result->fetch_assoc();




  // mysqli_stmt_execute($stmt);
  // $result = mysqli_stmt_get_result($stmt);
  
  // Check if any rows were returned
  
  // if ( mysqli_stmt_get_result($stmt) > 0) {
    // Fetch data and output it
    // while ($row = mysqli_stmt_get_result($stmt)) {
    //   echo '<div class="card1-dua">';
    //   echo '<div class="card-text-dua">';
    //   echo '<img src="images/vector.png" alt="Image">';
    //   echo '<h2>' . htmlspecialchars($row['title']) . '</h2>';
    //   echo '</div>';
    //   echo '</div>';
    // }
    
  // } else {
  //   echo 'No duas found for the selected category.';
  // }
  
  // Close database connection
  $stmt -> close();
  mysqli_close($conn);
}
?>