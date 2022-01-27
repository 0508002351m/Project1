<?php
require '../helpers/dbConnection.php';
require '../helpers/functions.php';
require '../helpers/checkLogin.php';

$sql = "select * from department";
$op = mysqli_query($con, $sql);

require './layout/header.php';
?>

  <body>
      <br><br>
   <div class="fs-1 text-danger" style="text-align: center;"><b>Departments</b></div> 
    <br><br>


 <!--blog start-->
<br><br><br>
                    <?php
                    // Fetch data .... 
                    while ($data = mysqli_fetch_assoc($op)) {

                    ?>

                        <section class="">
                        <div class="sec1 row justify-content-center">
                                <div class="col-10 se1 text-center fs-3">
                                    <img class="img-fluid" src="../department/uploads/<?php echo $data['image']; ?>" alt="" width="80%" style="max-height: 400px;"><br>
                                    <div class="dept_name">
                                    <h3><a href="<?php echo $data['Name'].'.php'; ?>"
                                    style="text-decoration: none; color:red"><?php echo $data['Name']; ?></a></h3>
                                </div>
                                <br><br>
                                </div>
                            </div>
                        </section>

                    <?php } ?>
       
<br><br><br>
<br><br><br>

<!-- <div class="fs-1 text-danger ps-5 " style="text-align: center;"><b>Best talent works</b>
   <div class="row justify-content-end"> <button type="button" style=""
    class="btn btn-outline-danger col-2 me-2">Best Seller</button>
    <button type="button" class="btn btn-outline-danger col-2 me-5 ">Sort by</button></div> 
<div class="container sec2"  style="height: 200px;text-align: center;">
</div>
    <div class="row flex-wrap justify-content-center">









      <div class="col-12 col-md-6 col-lg-4 se4 fs-4 text-dark text-center"><img src="images/s1.jpg" width="100%" height="400px"></div>






       <div class="col-12 col-md-6 col-lg-4 se5 fs-4 text-dark text-center"><img src="images/s5.jpg" width="100%" height="400px"> <del>700 L.E</del><b class="fs-3 text-danger">
        460 L.E</b></div>
        <div class="col-12 col-md-6 col-lg-4 se6 fs-4 text-dark text-center"><img src="images/s4.jpg" width="100%" height="400px"> <del>570 L.E</del><b class="fs-3 text-danger">
            410 L.E</b></div>
            <div class="col-12 col-md-6 col-lg-4 se4 fs-4 text-dark text-center"><img src="images/s3.jpg" width="100%" height="400px"> <del>500 L.E</del><b class="fs-1 text-danger">
                340 L.E</b></div>
                <div class="col-12 col-md-6 col-lg-4 se4 fs-4 text-dark text-center"><img src="images/4.jpg" width="100%" height="400px"> <del>1000 L.E</del><b class="fs-1 text-danger">
                    740 L.E</b></div>
                    <div class="col-12 col-lg-4 se4 fs-4 text-dark text-center"><img src="images/5.jpg" width="100%" height="400px"> <del>800 L.E</del><b class="fs-1 text-danger">
                        620 L.E</b></div>

    </div><br><br>


</div>
<button type="button" class="btn btn-outline-danger d-block mx-auto">Load More</button>
<br><br> -->
</body>


<?php
require './layout/footer.php';
?>