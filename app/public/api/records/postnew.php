<?php
// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();
// Step 2: Create & run the query
$stmt = $db->prepare(
'INSERT INTO Patient
(patientGuid,firstName,lastName,dob,sexAtBirth)
VALUES ('?,?,?,?,?)' --//Parameterized querry
);
$guid=Uuid::uuid4()->toString();
$stmt->execute([
  $_POST['patientGuid'],
  $_POST['firstName'],
  $_POST['lastName'],
  $_POST['dob'],
  $_POST['sexAtBirth']
]);

//STEP 4: OUTPUT
HEADER('HTTP/1.1 303 SEE OTHER'); --//WHEN I SEND YOU SOMEWHERE ELSE DO A GET IN THAT OTHE RPLACE
HEADER('Location: ../records/'); --//here is where you go for your data
