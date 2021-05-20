
<?php
    # curl -X POST http://localhost:8888 --data "arg=1"
    $arg = $_POST['arg'];
    if (isset($arg))
        echo "arg = $arg\n";
    else
        echo "not set arg\n";

?>
