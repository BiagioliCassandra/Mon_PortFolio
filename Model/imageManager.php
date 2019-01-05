<?php 
function getImages($db) {
    $request = $db->query("SELECT * FROM Images");
    $result = $request->fetchall(PDO::FETCH_ASSOC);
    $request->CloseCursor();
    return $result;
}
//A function that adds a project to the database
function addImage($db, $image, $path) {
    $request = $db->prepare("INSERT INTO Images(name, path) VALUES(?, ?)");
    $result = $request->execute([$image["name"], $path]);
    $request->CloseCursor();
    return $result;
}
function getLastImageID($db) {
    $request = $db->query("SELECT id FROM Images ORDER BY id DESC");
    $result = $request->fetch();
    $request->CloseCursor();
    return $result;
}
?>