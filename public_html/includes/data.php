<?php

class Post {

    //SQL fetch all posts in database
    public function fetch_all() {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM posts_new ORDER BY post_id");
        $query->execute();

        return $query->fetchAll();
    }

    //SQL fetch all posts with id
    public function fetch_data($post_id) {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM posts_new WHERE post_id = ?");
        $query->bindValue(1, $post_id);
        $query->execute();

        return $query->fetch();
    }

    //SQL fetch total posts
    public function fetch_length() {
      global $pdo;

      $query = $pdo->prepare("SELECT * FROM posts_new ORDER BY post_id DESC");
      $query->execute();

      return $query->rowCount();
    }

    //SQL fetch all posts from user
    public function fetchAllPosts($id) {
        global $pdo;

        $query = $pdo->prepare("SELECT * FROM posts_new WHERE user = ? ORDER BY post_id");
        $query->bindValue(1, $id);
        $query->execute();

        return $query->fetchAll();
    }
}

class Video {

  //SQL fetch all videos in database
  public function fetch_all() {
      global $pdo;

      $query = $pdo->prepare("SELECT * FROM videos_new ORDER BY video_id DESC");
      $query->execute();

      return $query->fetchAll();
  }

  //SQL fetch all videos with id
  public function fetch_data($video_id) {
      global $pdo;

      $query = $pdo->prepare("SELECT * FROM videos_new WHERE video_id = ?");
      $query->bindValue(1, $video_id);
      $query->execute();

      return $query->fetch();
  }

  //SQL fetch total videos
  public function fetch_length() {
    global $pdo;

    $query = $pdo->prepare("SELECT * FROM videos_new ORDER BY video_id DESC");
    $query->execute();

    return $query->rowCount();
  }
}

class User {

  //SQL check if user exists
  public function check_user($user) {
    global $pdo;

    $query = $pdo->prepare("SELECT CASE WHEN EXISTS (SELECT * FROM `users` WHERE `user` = ?) THEN 1 ELSE 0 END ");
    $query->bindValue(1, $user);
    $query->execute();

    return $query->fetch();
  }

  //SQL fetch all user info with name
  public function fetch_user($user) {
      global $pdo;

      $query = $pdo->prepare("SELECT * FROM users WHERE user = ?");
      $query->bindValue(1, $user);
      $query->execute();

      return $query->fetch();
  }

}

class Comment {

  //SQL fetch all videos in database
  public function fetch_all_comments() {
      global $pdo;

      $query = $pdo->prepare("SELECT * FROM comments ORDER BY id DESC");
      $query->execute();

      return $query->fetchAll();
  }

  //SQL fetch all comments with id
  public function fetch_comment($comment_id) {
      global $pdo;

      $query = $pdo->prepare("SELECT * FROM comments WHERE post_id = ? ORDER BY id DESC");
      $query->bindValue(1, $comment_id);
      $query->execute();

      return $query->fetchAll();
  }
}

class VidComment {

  //SQL fetch all videos in database
  public function fetch_all_comments() {
      global $pdo;

      $query = $pdo->prepare("SELECT * FROM video_comments ORDER BY id DESC");
      $query->execute();

      return $query->fetchAll();
  }
}

?>
