<?php
// // get the form data
// $serviceType = $_POST['serviceType'];
// $branchOffice = $_POST['branchOffice'];

// // create an associative array with the form data
// $data = array(
//   'serviceType' => $serviceType,
//   'branchOffice' => $branchOffice
// );

// // read the existing JSON data from the file
// $jsonData = file_get_contents('./get-data.json');
// $existingData = json_decode($jsonData, true);

// // add the new data to the existing data
// $existingData[] = $data;

// // convert the updated data to JSON
// $newJsonData = json_encode($existingData, JSON_PRETTY_PRINT);

// // write the updated JSON data back to the file
// file_put_contents('./get-data.json', $newJsonData);

// // mod1
// $formData = $_POST;
// $selectedServiceTypes = isset($_POST['serviceType']) ? (array) $_POST['serviceType'] : array();
// $selectedBranchOffices = isset($_POST['branchOffice']) ? (array) $_POST['branchOffice'] : array();

// // Combine the selected checkboxes into a single array
// $selectedCheckboxes = array_merge($selectedServiceTypes, $selectedBranchOffices);

// // Read the existing JSON data from the file
// $jsonData = file_get_contents('./get-data.json');
// $existingData = json_decode($jsonData, true);

// // Add the new form data to the existing data
// $formData['selectedCheckboxes'] = $selectedCheckboxes;
// $existingData[] = $formData;

// // Convert the updated data to JSON
// $newJsonData = json_encode($existingData, JSON_PRETTY_PRINT);

// // Write the updated JSON data back to the file
// file_put_contents('./get-data.json', $newJsonData);

// mod2
$formData = $_POST;

// Read the existing JSON data from the file
$jsonData = file_get_contents('./get-data.json');
$existingData = json_decode($jsonData, true);

// Store the selected checkboxes in the form data
$selectedServiceTypes = isset($_POST['serviceType']) ? $_POST['serviceType'] : array();
$selectedBranchOffices = isset($_POST['branchOffice']) ? $_POST['branchOffice'] : array();

$formData['selectedServiceTypes'] = $selectedServiceTypes;
$formData['selectedBranchOffices'] = $selectedBranchOffices;

// Add the new form data to the existing data
$existingData[] = $formData;

// Convert the updated data to JSON
$newJsonData = json_encode($existingData, JSON_PRETTY_PRINT);

// Write the updated JSON data back to the file
file_put_contents('./get-data.json', $newJsonData);
