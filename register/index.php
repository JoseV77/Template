<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration

include '../includes/db.inc.html.php';

try
{
  $sql = 'SELECT * FROM registrations WHERE id=1';
  $result = $pdo->query($sql);
}
catch (PDOException $e)
{
  $error = 'Error fetching database: ' . $e->getMessage();
  include '../includes/error.html.php';
  exit();
}

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if ((isset($_POST['fullname'])) && (empty ($_POST['honeypot']))) {
      $name = $_POST['fullname'];
      $age = $_POST['age'];
      $role = $_POST['roles'];
      $email = $_POST['email'];
      $econtactname = $_POST['ename'];
      $econtactphone = $_POST['ephone'];
      $gender = $_POST['genders'];
      $saturdayevent = $_POST['eventsSaturday'];
      $sundayevent = $_POST['eventsSunday'];
      $accommodations = $_POST['accommodations'];

    try {
      $sql = 'INSERT INTO registrations SET
          name = :name,
          age = :age,
          role = :role,
          email = :email,
          econtactname = :econtactname,
          econtactphone = :econtactphone,
          gender = :gender,
          saturdayevent = :saturdayevent,
          sundayevent = :sundayevent,
          accommodations = :accommodations';
      $s = $pdo->prepare($sql);
      $s->bindValue(':name', $name);
      $s->bindValue(':age', $age);
      $s->bindValue(':role', $role);
      $s->bindValue(':email', $email);
      $s->bindValue(':econtactname', $econtactname);
      $s->bindValue(':econtactphone', $econtactphone);
      $s->bindValue(':gender', $gender);
      $s->bindValue(':saturdayevent', $saturdayevent);
      $s->bindValue(':sundayevent', $sundayevent);
      $s->bindValue(':accommodations', $accommodations);
      $s->execute();
    } catch (PDOException $e) {
      $error = 'Error fetching content: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }

    include 'success.html.php';

    } else {

          include 'register.html.php';
    }