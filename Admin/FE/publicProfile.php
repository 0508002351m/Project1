<?php

require '../helpers/dbConnection.php';
require '../helpers/functions.php';
require '../helpers/checkLogin.php';

$id=$_GET['user_id'];

$sql = "select users.Name ,users.Profile_Picture as image,
user_contacts.Youtube,user_contacts.Instagram,user_contacts.Facebook
from users inner join user_contacts on user_contacts.User_id=users.id
where users.id=$id";

// where users.id=$_SESSION['user']['id']
 
$op = mysqli_query($con, $sql);
$data = mysqli_fetch_assoc($op);

?>



                <!DOCTYPE html>
                <html>

                <head>
                    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                    <style>
                        .card {
                            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                            max-width: 300px;
                            margin: auto;
                            text-align: center;
                            font-family: arial;
                        }

                        .title {
                            color: grey;
                            font-size: 18px;
                        }

                        button {
                            border: none;
                            outline: 0;
                            display: inline-block;
                            padding: 8px;
                            color: white;
                            background-color: #000;
                            text-align: center;
                            cursor: pointer;
                            width: 100%;
                            font-size: 18px;
                        }

                        a {
                            text-decoration: none;
                            font-size: 22px;
                            color: black;
                        }

                        button:hover,
                        a:hover {
                            opacity: 0.7;
                        }
                    </style>
                </head>

                <body>

                    <h2 style="text-align:center">User Profile Card</h2>

                    <div class="card">
                    <img class="img-fluid h-100 w-100" src="../Users/uploads/<?php echo $data['image']; ?>" alt="" height="300px" width="300px">

                       
                        <h1><a href=""><?php echo $data['Name'] ?></a></h1>
                        <!-- <p class="title">CEO & Founder, Example</p>
                        <p>Harvard University</p> -->
                        <div style="margin: 24px 0;">
                           
                            <a href="<?php echo $data['Youtube'] ?>">
                            <img src="images/icons8-youtube-logo-48.png"></img>
                            
                            </a>
                            <a href="<?php echo $data['Instagram'] ?>">
                            <img src="images/icons8-instagram-logo-48.png"></img>
                            </a>
                            <a href=" <?php echo $data['Facebook'] ?>">
                            <img src="images/icons8-facebook-48.png"></img>
                        </a>
                        </div>
                        <p><button>Contact</button></p>
                    </div>

                </body>

                </html>
    
       



        <!-- footer........................ -->




      