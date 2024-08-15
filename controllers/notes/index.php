<?php 


$pageName = "My Notes";

// $id = $_GET['user_id'];
$dbInfo = require_once 'config/config.php';
$query = "select * from posts where user_id = ?";

$conn = new Database($dbInfo['database'],);
$posts = $conn->query($query, [2])->find();

require_once 'views/notes/index.view.php';