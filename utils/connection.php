<?php

$debug = true;

if ($debug) {
    /**
     * MYSQLI_REPORT_ERROR
     * MYSQLI_REPORT_OFF
     * MYSQLI_REPORT_STRICT
     * MYSQLI_REPORT_INDEX
     * MYSQLI_REPORT_ALL
     */
    mysqli_report(MYSQLI_REPORT_ERROR);
} else {
    mysqli_report(MYSQLI_REPORT_OFF);
}

$conn = new mysqli('localhost', 'root', '1234', 'php_mysql_avancando');

if ($conn->connect_errno) {
    die('Falhou em conectar: ' . $conn->connect_errno);
}

return $conn;
