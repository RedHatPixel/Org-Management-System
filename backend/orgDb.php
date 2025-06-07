<?php
include_once __DIR__ . '/config/connector.php';
include_once __DIR__ . '/config/helpers.php';

$org_conn = createConnection(
    "localhost",
    "admin",
    "Qa.TN3JnAl[-vRdz",
    "cvsunet_org_db"
);

if (!$org_conn) {
    redirect('/CvSUOrganizationNetwork/maintenance.html');
    exit;
}
