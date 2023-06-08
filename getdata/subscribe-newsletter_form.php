<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // get form data
  $name = $_POST['name'];
  $email = $_POST['email'];

  // create an associative arr with form data
  $data = array(
    'name' => $name,
    'email' => $email
  );

  // encode the data as json
  $encode_data = json_encode($data);

  // specify file path
  $path = './get-data.json';
  $exist = file_get_contents($path);

  // decode the existing data
  $exist_data_array = json_decode($exist, true);

  // add new data to existing arr
  $exist_data_array[] = $data;

  // encode the updated data as json
  $update = json_encode($exist_data_array);

  // write into the file
  file_put_contents($path, $update, LOCK_EX);

  // redirect to another page
  // header('Location: ');

  exit();
};
