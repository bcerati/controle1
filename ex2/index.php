<?php
require 'vendor/autoload.php';

use App\User\Admin;

$admin = new Admin();
$admin->setId(1);
$admin->setEmail('admin@univ-lorraine.fr');
$admin->setFullName('John Doe');
$admin->setRole('SUPER_ADMIN');

echo '<pre>';
print_r($admin);
