<?php
include_once "connection.php";
if(isset($_GET["id"])){
    $id = $_GET["id"];
}
$sql = "SELECT * FROM `applicants` WHERE `id` = '$id' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<!-- User information div -->
<div class="container mt-4 d-flex justify-content-center">
    <div class="row">
        <div class="container mt-4 mx-auto text-center d-flex justify-content-center col-md-6">
            <div class="card ">
                <div class="card-header">
                    <h2 class="card-title"><?php echo $row["name"] ?></h2>
                </div>
                <div class="card-body">
                    <img src="<?php echo $row["profile_pic"] ?>" class="card-img-top" alt="User Image">
                    <p class="card-text"><b>NID No:</b> <?php echo $row["nid_no"] ?></p>
                    <p class="card-text"><b>Email:</b> <?php echo $row["email"] ?></p>
                    <p class="card-text"><b>Vehicle No:</b> <?php echo $row["vehicle_no"] ?></p>
                    <p class="card-text"><b>Chassis No:</b> <?php echo $row["vehicle_chassis_no"] ?></p>

                    <!-- Present Address -->
                    <div class="address">
                        <h3>Present Address</h3>
                        <p><?php echo $row["present_addr"] ?></p>
                    </div>

                    <!-- Permanent Address -->
                    <div class="address">
                        <h3>Permanent Address</h3>
                        <p><?php echo $row["permanent_addr"] ?></p>
                    </div>

                    <!-- File download link -->
                    <a href="<?php echo $row["nid_softcopy"] ?>" download class="btn btn-primary">Download NID Soft Copy</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>