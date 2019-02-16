<?php
        $con = mysqli_connect('suverum-mysqldbserver.mysql.database.azure.com', 'andywang@suverum-mysqldbserver', 'Lightpower1', 'suverumdatabase');
        $id = $_POST['id'];
        $sql = $con->query("SELECT * FROM comments WHERE post_id = $id ");
        if($sql->num_rows > 0){
            if($json = mysqli_fetch_all ($sql, MYSQLI_ASSOC)){

            }
        }
         echo json_encode($json);


?>
