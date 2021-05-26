<?php
    // curl -X POST http://localhost:8888 --data "lalala"
    $Input = @file_get_contents("php://input");
    echo $Input;
?>
