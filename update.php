<?php
include 'database.php';

$stmt = $db->prepare('UPDATE contacts SET first = :first, last = :last, email = :email, phone = :phone, active = :active, WHERE id = :id');

$stmt->execute(array(
  ':id' => $_POST['id'],
  ':first' => $_POST['first'],
  ':last' => $_POST['last'],
  ':email' => $_POST['email'],
  ':phone' => $_POST['phone'],
  ':active' => $_POST['active'],
  
));

header('Location: http://localhost:8080/index.php?updated=true');
