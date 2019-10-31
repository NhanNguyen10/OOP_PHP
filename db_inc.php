<?php

/* Host name or the MySQL Server */
$host = 'localhost';

/* MySQL account username */
$user = 'root';

/* MySQL account password */
$passwd = NULL;

/* The schema you want to use */
$schema = 'ipos';

/* The PDO object */
$pdo = NULL;

/* Connection string, or "Data source name" */
$dsn = 'mysql:host=' . $host . ';dbname=' . $schema;

/* Connection inside a try/catch block */
try
{
    /* PDO object creation */
    $pdo = new PDO($dsn, $user, $passwd);

    /* Enable exceptions on errors */
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e)
{
    /* If there is an error an exception is thrown */
    echo 'Database connection failed.';
    die();
}
