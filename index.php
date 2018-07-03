<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 03.07.2018
 * Time: 21:43
 */

require_once 'autoload.php';


if (!empty($_POST)) {
    $comment = new \app\models\Comment();
    $comment->name = $_POST['name'];
    $comment->text = $_POST['text'];
    $comment->add();
}

$all_comments = \app\models\Comment::findAll();

include 'app/templates/index.php';