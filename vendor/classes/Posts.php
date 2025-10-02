<?php

class Posts
{

  public $posts;

  public function __construct()
  {
    $this->loadPosts();
  }

  private function loadPosts()
  {
    $jsonFile = __DIR__ . '/../../vendor/posts.json';
    if (file_exists($jsonFile)) {
      $jsonData = file_get_contents($jsonFile);
      $this->posts = json_decode($jsonData, true);
    } else {
      $this->posts = [];
    }
  }

  public function showPosts()
  {
    if (!empty($this->posts['posts'])) {
      return $this->posts['posts'];
    }
    return [];
  }

  public function showPost($id)
  {
    if (!empty($this->posts['posts'])) {
      foreach ($this->posts['posts'] as $post) {
        if ($post['id'] == $id) {
          return $post;
        }
      }
    }
    return null;
  }
}
