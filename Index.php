<?php

session_start();

require './db_inc.php';
require './user_class.php';

$account  = new Account();

try
{
    $newId = $account->addUser('NhanNguyen', '0979222373', '12345678');
}
catch (Exceptiom $e)
{
    echo $e->getMessage();
    die();
}

echo 'The new account ID is: ' . $newId;

