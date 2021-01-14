<?php

//make database connection
include_once('connection.php');

//SQL fetch all comments with id
function fetch_comment($comment_id)
{
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM comments_post WHERE post_id = ? ORDER BY id");
    $query->bindValue(1, $comment_id);
    $query->execute();

    return $query->fetchAll();
}

$id = $_GET["postid"];

$comments = fetch_comment($id);

?> <ul style="list-style-type:none"> <?php
foreach ($comments as $comment) { ?>
<li>
  <a href="user.php?id=<?php echo $comment['user'] ?>"><?php echo $comment['user'] ?></a>
   -
  <?php echo $comment['comment']; ?>
</li>
<?php }

?> </ul> <?php
?>
