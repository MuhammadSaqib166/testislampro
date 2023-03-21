<?php
include "../db_conn.php";
include ("admininclude/header.php");

if(isset($_POST['submit'])){


$title = $_POST['title'];
$duaarabic = $_POST['duaarabic'];
$translation = $_POST['translation'];
$cat_id = $_POST['cat_id'];

// Create a SQL statement to insert the new user's data into the users table
$sql = "INSERT INTO `duas`(`title`, `dua`, `translation`, `cat_id`) VALUES ('$title','$duaarabic','$translation','$cat_id')";

// Execute the SQL statement
if (mysqli_query($conn, $sql)) {
    // The new user has been added to the database successfully
    $msg = '<div class="alert alert-success col-sm-6 ml-5 mt-2">Dua Added successfully</div>';
} else {
    // There was an error adding the new user to the database
    $msg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2">Something Went Wrong</div>';
}
}


if (isset($_GET['category'])) {
    $category = $_GET['category'];

    // Check if category name exists in database
    $stmt = $db->prepare("SELECT * FROM duas WHERE category = :category");
    $stmt->execute(array(':category' => $category));
    $category = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($category) {
        // Category exists, fetch all data for that category
        $stmt = $db->prepare("SELECT * FROM duas WHERE category_id = :category_id");
        $stmt->execute(array(':category_id' => $category['id']));
        $duas = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // Output the data
        echo '<ul>';
        foreach ($duas as $dua) {
            echo '<li>' . $dua['title'] . '</li>';
        }
        echo '</ul>';
    } else {
        // Category does not exist
        echo 'Category not found.';
    }
}
?>

<div class="page-wrapper">
           
            <div class="container-fluid">
            
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Add Dua</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Add Dua</li>
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
                                            <input type="text" placeholder="Title of Dua" name="title"
                                            id="title" class="form-control form-control-line" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="duaarabic" class="col-md-12">Dua in Arabic</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Arabic "
                                                class="form-control form-control-line" name="duaarabic"
                                                id="duaarabic" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Translation</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="translation of dua"
                                            name="translation" id="translation" class="form-control
                                             form-control-line" required>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label class="col-sm-12">Select Categorie</label>
                                        <div class="col-sm-12">
                                            <select class="form-control form-control-line" name="cat_id"
                                            name="cat_id" id="cat_id">
                                            <option value="" disabled="" selected="">Select Category</option>
                                                <?php 
                                                    $sql = "SELECT * FROM categories";
                                                    if($result=$conn->query($sql))
                                                    {
                                                        if($result->num_rows > 0)
                                                        {
                                                            while ($row = $result->fetch_object())
                                                            {
                                                                ?>
                                                                <option value="<?php echo $row->cat_id;?>"><?php echo $row->categorie; ?></option>
                                                                <?php
                                                            }
                                                        }else{
                                                            echo "No Record Found";
                                                        }
                                                    }else{
                                                        echo "Error!".$mysqli->error;
                                                    }
                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button type="submit" name="submit" class="btn btn-success">
                                                Add Dua
                                            </button>
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
    include ("admininclude/footer.php")            
?>