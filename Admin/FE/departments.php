<?php
require '../helpers/dbConnection.php';
require '../helpers/functions.php';
require '../helpers/checkLogin.php';

$sql = "select * from department";
$op = mysqli_query($con, $sql);

require './layout/header.php';

?>



<body style="background:url(images/susan-wilkinson-K9scvXSS4z4-unsplash.jpg) no-repeat center/cover">


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
                        <h3><a href="<?php echo $data['Name'] . '.php'; ?>" style="text-decoration: none; color:red"><?php echo $data['Name']; ?></a></h3>
                    </div>
                    <br><br>
                </div>
            </div>
        </section>

    <?php } ?>

    <br><br><br>
    <br><br><br>

</body>
<?php
require './layout/footer.php';
?>

</html>