<?php
include_once __DIR__ . './config/connector';
include_once __DIR__ . './config/helpers';

$org_conn = createConnection(
    "localhost",
    "admin",
    "Qa.TN3JnAl[-vRdz",
    "cvsunet_org_db"
);

if (!$org_conn) {
    die("Connection Failed to org data.");
}
