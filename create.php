<?php
  include 'database.php';

  $stmt = $db->prepare("INSERT INTO contacts
    (first, last, email, phone, active)
    VALUES
    (:first, :last, :email, :phone, :active)
  ");

  $stmt->execute(array(
    ':first' => $_POST['first'],
    ':last' => $_POST['last'],
    ':email' => $_POST['email'],
    ':phone' => $_POST['phone'],
    ':active' => $_POST['active'],
   
    ));
  $id = $db->lastInsertId();

  header('Location: http://localhost:8080/index.php?id=' . $id . '&created=true');
?>
