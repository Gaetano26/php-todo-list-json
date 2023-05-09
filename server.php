<?php 

$testo = file_get_contents('./data.json');



$phpArray = json_decode($testo, true );

if(isset($_POST['text'])) {
    $todoItem = [
      'text' =>  $_POST['text'],
      'complete'  => false
    ];
    array_push($phpArray, $todoItem);

    file_put_contents('./data.json', json_encode($phpArray));

}elseif (isset($_POST['updateItem'])) {
       $index = $_POST['updateItem'];
       $phpArray[$index]['complete'] =  !$phpArray[$index]['complete'];
       file_put_contents('./data.json', json_encode($phpArray));

}elseif (isset($_POST['deleteItem'])) {
  $index = $_POST['deleteItem'];
  array_splice($phpArray, $index, 1);
  file_put_contents('./data.json', json_encode($phpArray));
} else {
  
}

header('Content-Type: application/json');


echo json_encode($phpArray);