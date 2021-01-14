<?php

//make database connection
include_once('connection.php');

//SQL fetch all comments with id
function fetch_comment($comment_id)
{
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM comments_video WHERE video_id = ? ORDER BY id");
    $query->bindValue(1, $comment_id);
    $query->execute();

    return $query->fetchAll();
}

$id = $_GET["postid"];

$comments = fetch_comment($id);

?> <ul style="list-style-type:none"> <?php
foreach ($comments as $comment) { ?>
<li style="word-break: normal;">
  <?php echo $comment['user']; ?> | <?php echo $comment['comment']; ?>
  <br>
</li>
<?php }

?> </ul> <?php
?>
