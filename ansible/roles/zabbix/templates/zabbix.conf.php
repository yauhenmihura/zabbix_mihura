<?php
// Zabbix GUI configuration file
global $DB;

$DB['TYPE']     = 'MYSQL';
$DB['SERVER']   = '{{ db_host }}';
$DB['PORT']     = '0';
$DB['DATABASE'] = '{{ db_name }}';
$DB['USER']     = '{{ dbp_user }}';
$DB['PASSWORD'] = '{{ dbp_password }}';

// SCHEMA is relevant only for IBM_DB2 database
$DB['SCHEMA'] = '';

$ZBX_SERVER      = 'localhost';
$ZBX_SERVER_PORT = '10051';
$ZBX_SERVER_NAME = '';

$IMAGE_FORMAT_DEFAULT = IMAGE_FORMAT_PNG;
?>
