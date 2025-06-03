<?php
include_once __DIR__ . './config/connector';
include_once __DIR__ . './config/helpers';

$user_conn = createConnection(
    "localhost",
    "admin",
    "qweaseq",
    "cvsunet_user_db"
);

if (!$user_conn) {
    die("Connection Failed to user data.");
}
