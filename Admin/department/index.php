<?php
require '../helpers/dbConnection.php';
require '../helpers/functions.php';
require '../helpers/checkAdmin.php';


################################################################
# Fetch  User Data .......
$sql = 'select * from department';
$op = mysqli_query($con, $sql);
################################################################

require '../layouts/header.php';
require '../layouts/sideNav.php';
require '../layouts/nav.php';

?>

<main>
    <div class="container-fluid">
        <h1 class="mt-4">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard/Departments/display</li>
            <?php 
            echo '<br>';
           if(isset($_SESSION['Message'])){
             Messages($_SESSION['Message']);
          
              # Unset Session ... 
              unset($_SESSION['Message']);
              }
        
             ?>
        </ol>


        <div class="card mb-4">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>image</th>
                               
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Department_Name</th>
                                <th>image</th>
                        </tfoot>
                        <tbody>

                            <?php 
                                        # Fetch Data ...... 
                                        while($data = mysqli_fetch_assoc($op)){
                                      
                                    ?>

                            <tr>
                                <td><?php echo $data['id']; ?></td>
                                <td><?php echo $data['Name']; ?></td>
                                <td> <img src="./uploads/<?php echo $data['image']; ?>" height="40px" width="40px"> </td>
                            
                                <td>
                                    <a href='delete.php?id=<?php echo $data['id']; ?>'
                                        class='btn btn-danger m-r-1em'>Delete</a>
                                    <a href='edit.php?id=<?php echo $data['id']; ?>' class='btn btn-primary m-r-1em'>Edit</a>
                                </td>

                            </tr>

                            <?php 
                                        }
                                    ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>


<?php
require '../layouts/footer.php';
?>
