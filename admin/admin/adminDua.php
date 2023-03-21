<?php
    include ("admininclude/header.php");
    include ("../db_conn.php"); 
?>
        
        
        <div class="page-wrapper">
           
            <div class="container-fluid">
            
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center ">
                        <a href="addDua.php" class="btn btn-primary">Add Dua</a>
                    </div>
                    
                </div>
                
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">All Dua's</h4>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Dua in Arabic</th>
                                                <th>Translation</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sql = "SELECT * FROM duas";
                                            $result = mysqli_query($conn, $sql);
                                            while($row = mysqli_fetch_assoc($result))
                                            {
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['title'] ?></td>
                                                <td><?php echo $row['dua'] ?></td>
                                                <td><?php echo $row['translation'] ?></td>
                                                <td>
                                                <a href="editDua.php?id=<?php echo $row['id'];?>"><button class="btn btn-primary">Edit</button></a>
                                                <a href="deleteDua.php?id=<?php echo $row['id'];?>"><button class="btn btn-danger">Delete</button></a>
                                                </td>
                                            </tr>
                                            <?php
                                            }
                                            ?>
                                            <!-- <tr>
                                                <td>2</td>
                                                <td>Deshmukh</td>
                                                <td>Gaylord</td>
                                                <td>@Ritesh</td>
                                                <td><span class="label label-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Sanghani</td>
                                                <td>Gusikowski</td>
                                                <td>@Govinda</td>
                                                <td><span class="label label-warning">developer</span> </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Roshan</td>
                                                <td>Rogahn</td>
                                                <td>@Hritik</td>
                                                <td><span class="label label-success">supporter</span> </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Joshi</td>
                                                <td>Hickle</td>
                                                <td>@Maruti</td>
                                                <td><span class="label label-info">member</span> </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Nigam</td>
                                                <td>Eichmann</td>
                                                <td>@Sonu</td>
                                                <td><span class="label label-success">supporter</span> </td>
                                            </tr> -->
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            
        </div>


       
<?php
    include ("admininclude/footer.php");
?>