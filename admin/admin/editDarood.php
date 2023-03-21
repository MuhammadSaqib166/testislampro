<?php
include "../db_conn.php";
include ("admininclude/header.php");
$id=$_GET['id'];
 $sel="SELECT *FROM `daroods` WHERE id='$id'";
 $res=mysqli_query($conn,$sel);
 $row=mysqli_fetch_array($res);
if(isset($_POST['submit'])){

$title = $_POST['title'];
$darood = $_POST['darood'];

// Create a SQL statement to insert the new user's data into the users table
$sql = "UPDATE `daroods` SET `title`='$title',`darood`= '$darood' WHERE id=$id";
$result = mysqli_query($conn, $sql);
// Execute the SQL statement    
if ($result) {
    // The new user has been added to the database successfully
    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Darood Updated successfully</div>';
} else {
    // There was an error adding the new user to the database
    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Something Went Wrong</div>';
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
                                <form method="post" class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12">Title</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Title of Dua" name="title" id="title"
                                            value="<?php echo $row['SVC_ID']?>"   class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="darood" class="col-md-12">Darood in Arabic</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Arabic " 
                                                class="form-control form-control-line" name="darood"value="<?php echo $row['darood']?>"
                                                id="darood">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" name="submit" class="btn btn-success">Add Darood</button>
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