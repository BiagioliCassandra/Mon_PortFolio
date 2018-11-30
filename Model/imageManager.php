<?php 
//A function that adds a project to the database
function addImage($db, $image, $path) {
    $request = $db->prepare("INSERT INTO Images(Name, Path) VALUES(?, ?)");
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