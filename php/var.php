<?php
    $password = 1234;
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    var_dump($hashed_password);

    echo nl2br("\n ------------------------------------------------------\n");
    if(password_verify($password, $hashed_password)){
        echo "password are matched";
    }else{
        echo "invalid password";
    }
    echo nl2br("\n -----------------------------------------------------\n");
    
    if(password_hash($password, PASSWORD_DEFAULT)){
        echo "password are safe";
    }
    echo nl2br("\n -----------------------------------------------------\n");
    $array = ['foysal', 2, 'ahammed'];
    var_dump($array);
    echo nl2br("\n");
    print_r($array);

?>