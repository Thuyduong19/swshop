<?php

    include "connect.php";

    $this_id = $_GET['this_id'];

    echo $this_id;

    $sql = "DELETE from orderr where iddh =".$this_id;

    mysqLi_query($conn, $sql);
    
    header('location: orderr.php');I

?>
