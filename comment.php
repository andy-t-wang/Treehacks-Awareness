<?php
$con = mysqli_connect('null', 'null', 'null', 'null');

    $comment = $con->prepare("INSERT INTO comments (post_id, Name, comment) VALUES (?,?,?)");
    $comment->bind_param("iss", $_POST['id'], $_POST['name'], $_POST['message']);
    $comment->execute();
    $con->close();

?>
