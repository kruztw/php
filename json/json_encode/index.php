<?php
    header("Content-Type: application/json");
    echo json_encode(array(
                        "key1"=>"val1",
                        "key2"=>"val2"
                        )
                    );
    exit;
?>
