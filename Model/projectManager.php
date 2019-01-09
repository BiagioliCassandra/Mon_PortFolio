<?php 
function getProjects($db) {
    $request = $db->query("SELECT p.*, i.path FROM Projects AS p LEFT JOIN Images AS i ON p.image_id = i.id");
    $result = $request->fetchall(PDO::FETCH_ASSOC);
    $request->CloseCursor();
    return $result;
}

function getProject($db, $id) {
    $request = $db->prepare("SELECT * FROM Projects WHERE id = ?");
    $request->execute([$id]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    $request->CloseCursor();
    return $result;
}

function addProject($db, $project, $lastID) {
    $request = $db->prepare("INSERT INTO Projects(title, content, github_link, image_id) VALUES(:title, :content, :github_link, :image_id)");
    $result = $request->execute([
        "title" => $project["title"],
        "content" => $project["content"],
        "github_link" => $project["github"],
        "image_id" => $lastID
    ]);
    $request->CloseCursor();
    return $result;
}
//Problème ici, souci avec le nom de l'image a enregistrer
function updateProject($db, $project, $id) {
    $request = $db->prepare("UPDATE Projects SET title = :title, content = :content, github_link = :github_link WHERE id = :id");
    $result = $request->execute([
        "title" => $project["title"],
        "content" => $project["content"],
        "github_link" => $project["github"],
        "id" => $id
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
