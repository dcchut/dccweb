<?php
namespace dccweb\Models;

class Post extends \ActiveRecord\Model {
    public static function getAllPosts() {
        return static::find('all', array('order' => 'o asc'));
    }
}