<?php 

$dbInfo = require_once 'config/config.php';
$query = "select * from posts where id = :id";

$conn = new Database($dbInfo['database'],);
$posts = $conn->query($query, [ 

    'id' => $_GET['id']
    
    ])->fetchOrFail();

$pageName;
$currentUserId = 2;

foreach($posts as $post){
    $pageName = $post['body'];
}
auth($post['user_id'] != $currentUserId);

// if($post['user_id'] != $currentUserId){
//     abort(Responce::FORBIDDEN);
// }

require_once 'views/notes/show.view.php';