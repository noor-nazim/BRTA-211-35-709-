<?php
    include_once "connection.php";
    $sql = "SELECT * FROM `applicants`" ;
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .sidebar {
            background-color: #343a40;
            color: #fff;
        }

        .sidebar a {
            color: #fff;
        }

        .content {
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 sidebar">
                <h3 class="text-center py-3">Admin Panel</h3>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="Admin.php">Applicants List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./logout.php">Logout</a>
                    </li>
                </ul>
            </div>

            <div class="col-md-9 content">
                <h2>Applicants List</h2>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td><?php echo $row["id"]?></td>
                            <td><?php echo $row["name"]?></td>
                            <td><?php echo $row["email"]?></td>
                            <td><a href="applicant_details.php?id=<?php echo $row["id"]?>">View Details</a></td>
                        </tr>

                    <?php 
                        }
                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>