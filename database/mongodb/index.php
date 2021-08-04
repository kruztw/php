<!--
    sudo apt install php-mongo-all-dev
-->

<?php 
    $conn = new MongoDB\Driver\Manager("mongodb://localhost:27017");

    # add data
    $bulk = new MongoDB\Driver\BulkWrite();
    $id1 = $bulk->insert([
        'account'        => 'user1',
        'password'       => 'user1_pw',
    ]);

    $id2 = $bulk->insert([
        'account'        => 'user2',
        'password'       => 'user2_pw',
    ]);

    try {
        $result = $conn->executeBulkWrite('my_db.my_collection', $bulk);
        var_dump($result->getInsertedCount());
    } catch (MongoDB\Driver\Exception\BulkWriteException $e) {
        var_dump($e->getWriteResult()->getWriteErrors());
    }

    # find data
    $filter = ['account' => ['$eq' => 'user1'], 'password' => 'user1_pw'];
    $options = [];

    $query = new MongoDB\Driver\Query($filter, $options);
    $cursor = $conn->executeQuery('my_db.my_collection', $query);
    foreach ($cursor as $document)
        print_r($document);

    # update data
    $bulk = new MongoDB\Driver\BulkWrite();
    $filters = ['account' => 'user1'];
    $sets = ['$set' => ['password' => 'user1_new_pw']];
    $updateOptions = [];
    $bulk->update($filters, $sets, $updateOptions);
    $result = $conn->executeBulkWrite('my_db.my_collection', $bulk);


    # delete data
    $bulk = new MongoDB\Driver\BulkWrite();
    $filters = ['account' => 'user2'];
    $bulk->delete($filters);
    $result = $conn->executeBulkWrite('my_db.my_collection', $bulk);
?> 
