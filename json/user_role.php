<?php

require '../config.php';


    $select = mysqli_query($mysqli, "SELECT * FROM user_role");

    $json_array = array();

    while($data = mysqli_fetch_array($select))
    {
        $json_array[] = $data;
    }

    echo json_encode($json_array);


?>