<?php
    include_once "./connection.php";
    $email = $_POST['email'];
    $sql = "INSERT INTO `subscription` (`email`) VALUES ('$email')";
    $conn->query($sql);

    ?>
    <script>
        window.location.href = "./index.php";
    </script>
    <?php

?>