<?php 
function getProject() {
    
}
function addProject($db, $project, $lastID) {
    $request = $db->prepare("INSERT INTO Projects(Title, Content, Image_id) VALUES(:Title, :Content, :Image_id)");
    $result = $request->execute([
        "Title" => $project["Title"],
        "Content" => $project["Content"],
        "Image_id" => $lastID
    ]);
    $request->CloseCursor();
    return $result;
}

function updateProject($db, $project) {
    $request = $db->prepare("UPDATE Projects SET Title = :Title, Content = :Content");
    $result = $request->execute([
        "Title" => $project["Title"],
        "Content" => $project["Content"]
    ]);
    $request->CloseCursor();
    return $result;
}

function deleteProject($db, $id) {
    $request = $db->prepare("DELETE FROM Projects WHERE id = ?");
    $result = $request->execute([$id]);
    $request->CloseCursor();
    return $result;
}
?>