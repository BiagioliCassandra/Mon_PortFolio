<?php 
function addMessageContact($db, $form) {
    $request = $db->prepare("INSERT INTO Contacts(name, firstname, message, mail, tel) VALUES(:name, :firstname, :message, :mail, :tel)");
    $result = $request->execute([
        "name" => $form["contact_name"],
        "firstname" => $form["contact_firstname"],
        "message" => $form["contact_message"],
        "mail" => $form["contact_mail"],
        "tel" => $form["contact_tel"]
        ]);
    $request->CloseCursor();
    return $result;
}
?>