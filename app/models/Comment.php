<?php
/**
 * Created by PhpStorm.
 * User: Yaroslav
 * Date: 03.07.2018
 * Time: 22:09
 */

namespace app\models;

use app\Db;

class Comment
{

    public $name;
    public $text;
    public $created;

    public static function findAll()
    {
        $db = new Db();

        $sql = 'SELECT * FROM comments ORDER BY created DESC';
        return $db->query(
            $sql,
            [],
            static::class
        );
    }

    public function add()
    {
        $sql = 'INSERT INTO comments (name, text, created) VALUES (:name, :text, :date)';
        $param = [':name' => $this->name, ':text' => $this->text, ':date' => date('Y-m-j H:i:s')];

        $db = new Db();
        $db->execute($sql, $param);
    }

    public function draw()
    {
        $change_date = date_create_from_format('Y-m-j H:i:s', $this->created);

        echo '<div class="comment">';
        echo '<div class="name">' . $this->name . '</div>';
        echo '<div class="created">' . date_format($change_date, "H:i:s m.d.Y") . '</div>';
        echo '<p class="text">' . $this->text . '</p>';
        echo '</div>';
    }
}