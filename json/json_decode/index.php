<?php
    // curl -X POST -H "Content-Type: application/json" --data '{"key":"val"}'   http://localhost:8888
    $Input = file_get_contents("php://input");
    $data = json_decode($Input, true);
    echo var_dump($data);
?>
