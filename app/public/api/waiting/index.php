<<<<<<< HEAD

<?php
// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();
// Step 2: Create & run the query
$stmt = $db->prepare(
'SELECT *
FROM Patient p, PatientVisit pv
WHERE p.patientGuid = pv.patientGuid'
);
$stmt->execute();
$patients = $stmt->fetchAll();
// Step 3: Convert to JSON
$json = json_encode($patients, JSON_PRETTY_PRINT);
=======
<?php

// Step 1: Get a datase connection from our help class
$db = DbConnection::getConnection();

// Step 2: Create & run the query
$stmt = $db->prepare(
  'SELECT *
  FROM Patient p, PatientVisit pv
  WHERE p.patientGuid = pv.patientGuid'
);

// TODO: Implement triage sort

$stmt->execute();
$patients = $stmt->fetchAll();

// Step 3: Convert to JSON
$json = json_encode($patients, JSON_PRETTY_PRINT);

>>>>>>> b34d72773f8d293f6f3d82023f2916019ee98346
// Step 4: Output
header('Content-Type: application/json');
echo $json;
