<?php 
function getBiographies($db) {
    $request = $db->query("SELECT * FROM Biographies");
    $result = $request->fetchall(PDO::FETCH_ASSOC);
    $request->CloseCursor();
    return $result;
}

function getBiography($db, $id) {
    $request = $db->prepare("SELECT * FROM Biographies WHERE id = ?");
    $request->execute([$id]);
    $result = $request->fetch(PDO::FETCH_ASSOC);
    $request->CloseCursor();
    return $result;
}

function addBiography($db, $form) {
    $request = $db->prepare("INSERT INTO Biographies(title_experience, experience) VALUES(?, ?)");
    $result = $request->execute([$form["title_experience"], $form["experience"]]);
    $request->CloseCursor();
    return $result;
}

function updateBiography($db, $form, $id) {
    $request = $db->prepare("UPDATE Biographies SET title_experience = :title_experience, experience = :experience WHERE id = :id");
    $result = $request->execute([
        "title_experience" => $form["title_experience"],
        "experience" => $form["experience"],
        "id" => $id
    ]);
    $request->CloseCursor();
    return $result;
}

function deleteBiography($db, $id) {
    $request = $db->prepare("DELETE FROM Biographies WHERE id = ?");
    $result = $request->execute([$id]);
    $request->CloseCursor();
    return $result;
}
?>
