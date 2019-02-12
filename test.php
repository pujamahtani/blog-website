<?php
include_once("classes/Database.class.php");
include_once("classes/Posts.class.php");
echo "hello";
$db = new Database();
$conn = $db->getConnection();
$post = new Posts($conn);
echo"hello";
$array = array("post_category_id"=>40, "post_title"=>"Some new post title","post_body"=>"<b>My contents!</b><b>addede new line</b>");
echo "hello";
$post->createPost($array);
$post->updatePost($array,"post_id=3");