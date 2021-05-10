<?php 
require_once('DatabaseClass.php');

$db = new Config\DatabaseClass();

if (isset($_POST['task'])) {
    if ($_POST['task'] == 'register') {   
        $name       = $_POST["name"];    
        $bday       = $_POST["birthday"];
        $address    = $_POST["address"];
        $mobile_no  = $_POST["mobile_no"]; 

        $id = $db->insert("Insert into `users`(`name`,`birthday`,`address`,`mobile_no`) values ( :column1 , :column2 ,:column3 , :column4)", [
            'column1' => $name,
            'column2' => $bday,
            'column3' => $address,
            'column4' => $mobile_no
        ]);
    }   
}



?>
