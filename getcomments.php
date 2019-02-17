<?php
$con = mysqli_connect('null', 'null', 'null', 'null');
        $id = $_POST['id'];
        $sql = $con->query("SELECT * FROM comments WHERE post_id = $id ");
        if($sql->num_rows > 0){
            if($json = mysqli_fetch_all ($sql, MYSQLI_ASSOC)){

            }
        }
         echo json_encode($json);


?>
