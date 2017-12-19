<?php
    global $conn;

function getDynamicData($table, $column, $id){
    global $conn, $get_data;
    $query = "SELECT $column FROM $table WHERE id = $id";
    $get_data = mysqli_query($conn, $query);
    if (!$get_data) {
        echo 'MySQL Error: ' . mysqli_error($conn);
        exit;
    }
    $row = mysqli_fetch_assoc($get_data);
    return $row[$column];
}

function get_header($id){
    $dyndat = getDynamicData('posts', 'header', $id);
    echo '<br><div class="head">' . $dyndat . '</div>';
}

function get_post($id){
    $header = get_header($id);
    $dyndat = getDynamicData('posts', 'post', $id);
    echo $header . '<br><div class="post">' . $dyndat . '</div>';
}

?>
