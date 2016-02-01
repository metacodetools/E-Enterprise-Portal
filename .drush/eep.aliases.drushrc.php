<?php
$dev_root = '/var/www/html/drupal';
$aliases['dev'] = array(
    'uri' => 'ec2-52-3-175-225.compute-1.amazonaws.com',
    'root' => $dev_root,
    'remote-user' => 'bamboo',
    'remote-host' => 'ec2-52-3-175-225.compute-1.amazonaws.com',
    'path-aliases' => array(
        '%dump-dir' => '/var/www/dumps',
        '%files' => $dev_root . '/sites/default/files',
        '%test1' => $dev_root.'/test1/',
        '%test2' => $dev_root.'/test2',
     )
);
?>