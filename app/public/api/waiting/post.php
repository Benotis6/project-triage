<<<<<<< HEAD

<?php
// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();
// Step 2: Create & run the query
$stmt = $db->prepare(
'INSERT INTO PatientVisit
(patientGuid, visitDescription, priority)
VALUES ('.$POST['patientGuid']. ',?,?)' //Parameterized querry
=======
<?php

// Step 0: Validate the incoming data


// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$stmt = $db->prepare(
  'INSERT INTO PatientVisit (patientGuid, visitDescription, priority)
  VALUES (?, ?, ?)'
>>>>>>> b34d72773f8d293f6f3d82023f2916019ee98346
);

$stmt->execute([
  $_POST['patientGuid'],
  $_POST['visitDescription'],
<<<<<<< HEAD
  $_POST['Priority']
]);

//STEP 4: OUTPUT
HEADER('HTTP/1.1 303 SEE OTHER'); //WHEN I SEND YOU SOMEWHERE ELSE DO A GET IN THAT OTHE RPLACE
HEADER('Location: ../waiting/'); //here is where you go for your data
=======
  $_POST['priority']
]);

// Step 4: Output
header('HTTP/1.1 303 See Other');
header('Location: ../waiting/');
>>>>>>> b34d72773f8d293f6f3d82023f2916019ee98346
