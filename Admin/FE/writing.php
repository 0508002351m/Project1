<?php

require '../helpers/dbConnection.php';
require '../helpers/functions.php';
require '../helpers/checkLogin.php';

$sql = "select talent_work.Image ,talent_work.Name,users.Name as user_name ,
users.id as user_id,
category.Name as category_name ,department.Name as department from 
 talent_work inner join category on talent_work.Cat_id = category.id
 inner join users  on  talent_work.User_id = users.id 
 inner join  department on department.Id=category.Dep_id 
 where department.Id=12 ";
$op = mysqli_query($con, $sql);

require './layout/header.php';

?>

<br><br><br>
<body style="background-color:rgb(150,150,200);">

    <!-- body......................... -->

    <!--blog start-->
 <?php
 // Fetch data .... 
 while ($data = mysqli_fetch_assoc($op)) {

 ?>


<section class="">
            <div class="sec1 row justify-content-center">
                <div class="col-10 se1 text-center fs-3">

                <img class="img-fluid" src="../Works/uploads/<?php echo $data['Image']; ?>" alt="" width="50%" style="max-height: 350px;"><br>

                <div class="talent_name">
                                        <h5><a href='publicProfile.php?user_id=<?php echo $data['user_id']; ?>'><?php echo $data['user_name'] ; ?></a></h5>
                                    </div>
                                    
                <div class="post-desc">

<div class="post-title">
        <h2><a href="blog-details.html"><?php echo $data['Name'] ; ?></a></h2>
    </div>
        <div> <span><?php echo $data['category_name']; ?></span></div>
        <div> <span><?php echo $data['department']; ?></span> </div>
        <br><br><br>

</div>

    </div>

    </div>
 </section>
<?php } ?>



</body>
<?php
require './layout/footer.php';
?>
