<?php
if ($_POST['Submit']) {
    $Name = $_POST['name'];
    $Age = $_POST['age'];
    $Address = $_POST['adr'];
    $Number = $_POST['num'];
    $conn = mysqli_connect('localhost', 'root', '', 'gym_db');
    $query = "INSERT INTO gym1 (Name, Age, Address, Number)
                VALUES ('$Name', '$Age', '$Address', '$Number')";

    $data = mysqli_query($conn, $query);
    if ($data) {
        echo "<script>alert('Data Inserted Succesfully')</script>";
        ?>

        <meta http-equiv="refresh" content="0; URL=http://localhost/PhpProject1/Gym_Website1/gym.html" />
        
        <?php
    } else {
        echo "<script>alert('Something Wrong')</script>";
    }
} else {
    echo "<script>alert('Something Wrong')</script>";
}
?>




