<?php 
//The function allowing us to search all users in the database
function getUser($db) {
    $request = $db->query("SELECT * FROM User");
    $user = $request->fetch();
    return $user;
}
?>