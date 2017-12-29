<?php
    global $conn;

function getTableData($table){
    global $conn, $get_data, $row;
    $query = "SELECT * FROM $table";
    $get_data = mysqli_query($conn, $query);
    if (!$get_data) {
        echo 'MySQL Error: ' . mysqli_error($conn);
        exit;
    }
    $row=mysqli_fetch_assoc($get_data);
    return $get_data;
    return $row;
    ;
}

function getDynamicData($table, $column, $id){
    global $conn, $get_data, $row;
    $query = "SELECT $column FROM $table WHERE id = $id";
    $get_data = mysqli_query($conn, $query);
    if (!$get_data) {
        echo 'MySQL Error: ' . mysqli_error($conn);
        exit;
    }
    $row = mysqli_fetch_assoc($get_data);
    return $row[$column];
    global $column;
}

function get_header($id){
    $dyndat = getDynamicData('posts', 'header', $id);
    echo $dyndat; //'<br><div class="head">' . $dyndat . '</div>';
}

function get_post($id){
    $header = get_header($id);
    $dyndat = getDynamicData('posts', 'post', $id);
    echo $header . " " . $dyndat; //'<br><div class="post">' . $dyndat . '</div>';
}



?>
