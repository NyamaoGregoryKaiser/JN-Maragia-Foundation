<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Account Timeline</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['member']['photo'] ?>" />
                    
                   <li><h3><?php echo  $_SESSION["member"]["username"] ?></h3></li>
                    <p><?php echo $_SESSION["member"]["Memberid"] ?></p>
                    <p><?php echo $_SESSION["member"]["email"] ?></p>
                    <p><?php echo $_SESSION["member"]["ward"] ?></p>
                    <p><?php echo $_SESSION["member"]["village"] ?></p>
                    <p><?php echo $_SESSION["member"]["phone"] ?></p>

                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>

            
        </div>


        <div class="col-md-8">

            <form action="" method="post" />
                <div class="form-group">
                    <textarea class="form-control" placeholder="What are your thoughts?"></textarea>
                </div>
            </form>

            <?php for($i=0; $i < 1; $i++){ ?>
            <div class="card mb-3">
                <div class="card-body">
                Welcome to JN Maragia Foundation! We are thrilled to have you join our community. Together, we can make a positive impact on the lives of those in need. Your support and cooperation will play a significant role in achieving our mission. Thank you for being a part of our journey towards creating a better world for all. Let's make a difference together!
                </div>
            </div>
            <?php } ?>
            
        </div>
    
    </div>
</div>

</body>
</html>