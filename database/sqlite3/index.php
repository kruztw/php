<?php
    $db = new SQLite3("sqlite.db");
    if (!$db) {
        echo $db->lastErrorMsg();
    }


    $result = $db->querySingle("SELECT * FROM users", true);
    echo var_dump($result);

    $sql =<<<EOF
          INSERT INTO users (username, password)
          VALUES ("user", "pass")
    EOF;
   
    #$ret = $db->exec($sql);
    #if (!$ret)
    #    echo $db->lastErrorMsg();

    $results = $db->query("SELECT * FROM users");
    while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
        var_dump($row);
    }

    $db->close();
?>
