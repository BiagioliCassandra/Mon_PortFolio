<?php 
function getProjects($db) {
    $request = $db->query("SELECT * FROM Projects");
    $result = $request->fetchall(PDO::FETCH_ASSOC);
    $request->CloseCursor();
    return $result;
}

function getProject($db, $id) {
    $request = $db->prepare("SELECT * FROM Projects WHERE id = ?");
    $result = $request->execute([$id]);
    $request->CloseCursor();
    return $result;
}

function addProject($db, $project, $lastID) {
    $request = $db->prepare("INSERT INTO Projects(Title, Content, Github_link, Image_id) VALUES(:Title, :Content, :Github_link, :Image_id)");
    $result = $request->execute([
        "Title" => $project["Title"],
        "Content" => $project["Content"],
        "Github_link" => $project["Github"],
        "Image_id" => $lastID
    ]);
    $request->CloseCursor();
    return $result;
}

function updateProject($db, $project) {
    $request = $db->prepare("UPDATE Projects SET Title = :Title, Content = :Content, Github_link = :Github_link");
    $result = $request->execute([
        "Title" => $project["Title"],
        "Content" => $project["Content"],
        "Github_link" => $project["Github"],
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