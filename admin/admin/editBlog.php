<?php
include "../db_conn.php";
include ("admininclude/header.php");

$id=$_GET['id'];
 $sel="SELECT *FROM `blogs` WHERE id='$id'";
 $res=mysqli_query($conn,$sel);
 $row=mysqli_fetch_array($res);
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $description = $_POST['description'];
    // Get the image data
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $type = $_FILES['image']['type'];
    
    // Check if the image file type is valid
    $valid_extensions = array('jpeg', 'jpg', 'png');
    $file_extension = strtolower(pathinfo($image, PATHINFO_EXTENSION));
    if (!in_array($file_extension, $valid_extensions)) {
      $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Invalid file type. Only JPEG, JPG, and PNG files are allowed.</div>';
    }
   
    
    // Upload the image file to a temporary directory
    $temp_dir = 'upload/';
    $image_path = $temp_dir . $image; 
    if (move_uploaded_file($tmp_name, $image_path)) {
      // Create a SQL statement to insert the new darood's data into the daroods table
      $title = $_POST['title'];
      $description = $_POST['description'];
      $sql = "UPDATE `blogs` SET `title`='$title',`description`= '$description',`image`= '$image_path', WHERE id=$id";
      
      // Execute the SQL statement
      if (mysqli_query($conn, $sql)) {
          // The new darood has been added to the database successfully
          $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Blog Updated successfully</div>';
      } else {
          // There was an error adding the new blog to the database
          $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Something went wrong</div>';
      }
    } else {
      // There was an error uploading the image file
      $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Something went a wrong</div>';
    }
  }
?>

<div class="page-wrapper">
           
            <div class="container-fluid">
            
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Add Darood</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Add Darood</li>
                            </ol>

                        </div>
                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Tab panes -->
                            <div class="card-body">
                            <form method="post" class="form-horizontal form-material" enctype='multipart/form-data'>
                                    <div class="form-group">
                                        <label class="col-md-12">Title</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Title of Blog" name="title" id="title"
                                             value="<?php echo $row['title']?>"   class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="description" class="col-md-12">Description</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Description "
                                                class="form-control form-control-line" name="description"
                                                id="description" value="<?php echo $row['description']?>">
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <label class="col-md-12">Image</label>
                                        <div class="col-md-12">
                                            <input type="file" name="image" id="image" class="form-control form-control-line" value="<?php echo $row['image']?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" name="submit" class="btn btn-success">Update Blog</button>
                                        </div>
                                    </div>
                                    <?php if(isset($msg)) {echo $msg;} ?>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
        </div>

        <?php
    include ("admininclude/footer.php");
?>