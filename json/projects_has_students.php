<?php

require '../config.php';


    $select = mysqli_query($mysqli, "SELECT * FROM projects_has_students");

    $json_array = array();

    while($data = mysqli_fetch_array($select))
    {
        $json_array[] = $data;
    }

    echo json_encode($json_array);


?>