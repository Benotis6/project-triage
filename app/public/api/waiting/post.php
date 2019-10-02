
<?php
// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();
// Step 2: Create & run the query
$stmt = $db->prepare(
'INSERT INTO PatientVisit
(patientGuid, visitDescription, priority)
VALUES ('.$POST['patientGuid']. ',?,?)' //Parameterized querry
);

$stmt->execute([
  $_POST['patientGuid'],
  $_POST['visitDescription'],
  $_POST['Priority']
]);

//STEP 4: OUTPUT
HEADER('HTTP/1.1 303 SEE OTHER'); //WHEN I SEND YOU SOMEWHERE ELSE DO A GET IN THAT OTHE RPLACE
HEADER('Location: ../waiting/'); //here is where you go for your data
