<?php
    # NO SE DEBE HACER PERO LO HAREMOS A LO CHOLO XD#
    $response = array();
    if(isset($_GET['ACTUAL_WEIGHT']) && isset($_GET['CONTAINER_ID']) && isset($_GET['DISH_ID'])){
        $actualWeight = $_GET['ACTUAL_WEIGHT'];
        $containerId= $_GET['CONTAINER_ID'];
        $dishId= $_GET['DISH_ID'];

        $connection =  mysqli_connect('127.0.0.1','root','password','ecaptain');
        $query = 'INSERT INTO containers_status VALUES(0,?,?,?,NOW(),NOW());';
        $stmt = $connection->prepare($query);
        $stmt->bind_param('dii',$actualWeight,$containerId,$dishId);
        if ($stmt->execute()) {
            $response = array('STATUS'=> 0,'MESSAGE'=>'SUCCESS');
        } else {
            $response = array('STATUS'=> 2,'MESSAGE'=>'SOMETHING FAILS TRYING TO SAVE');
        }
    }else
        $response = array('STATUS'=> 1,'MESSAGE'=>'MISSING PARAMETERS');

    echo json_encode($response);
?>