<?php

require_once __DIR__ . '/../vendor/autoload.php';; 

use App\Database;
use App\TaskRepository;
use App\Task;
use App\DesignTask;
use App\DevTask;

$pdo = new Database();
$connect = $pdo->getConnection();

$repo = new TaskRepository($connect);

$tasks = $repo->getAll();

include __DIR__ . '/../views/dashboard.php';

