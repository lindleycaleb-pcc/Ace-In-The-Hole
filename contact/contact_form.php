<?php

include '../includes/db.inc.html.php';

$users_name = $_POST['name'];
$users_email = $_POST['email'];
$users_party_affiliation = $_POST['party'];
$users_comment = $_POST['comment'];

$sql ="
  INSERT INTO `lindleyc_aith_project`.`contact` (`id`, `name`, `email`, `party`,
        `comment`, `time_stamp`) VALUES (NULL, '$users_name',
        '$users_email', '$users_party_affiliation', '$users_comment',
        CURRENT_TIMESTAMP);";

if ($conn->query($sql) === TRUE) {
    include 'mailer.php';
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>