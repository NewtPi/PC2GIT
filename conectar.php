<?php
    //Get Heroku ClearDB connection information
    $cleardb_url = parse_url(getenv("mysql://bbe40a4158d781:bad350f8@us-cdbr-east-05.cleardb.net/heroku_05ba08bf857ea97?reconnect=true"));
    $cleardb_server = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db = substr($cleardb_url["path"],1);
    $active_group = 'default';
    $query_builder = TRUE;
    // Connect to DB
    $con = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);

    if($con){
        echo "SE CONECTOOOO";
        echo $cleardb_url;
        echo $cleardb_server;
        
    }



?>