<?php

include '../includes/db.inc.html.php';

$users_name = $_POST['name'];
$users_age = $_POST['age'];
$users_role = $_POST['role'];
$users_email = $_POST['email'];
$users_e_name = $_POST['e-name'];
$users_e_number = $_POST['e-number'];
$users_gi = $_POST['gi'];
$users_ep_saturday = $_POST['ep-saturday'];
$users_ep_sunday = $_POST['ep-sunday'];
$users_special = $_POST['special'];

$sql ="
  INSERT INTO `lindleyc_aith_project`.`register` (`id`, `name`, `age`, `role`, `email`,
        `e-name`, `e-number`, `gi`,`ep-saturday`,`ep-sunday`, `special`, `time_stamp`) VALUES (NULL, '$users_name',
        '$users_age','$users_role', '$users_email', '$users_e_name', '$users_e_number','$users_gi',  '$users_ep_saturday',
          '$users_ep_sunday', '$users_special',
        CURRENT_TIMESTAMP);";

if ($conn->query($sql) === TRUE) {
    include 'mailer.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
