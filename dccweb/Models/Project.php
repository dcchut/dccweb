<?php
namespace dccweb\Models;

class Project extends \ActiveRecord\Model {
    public static function getAllProjects() {
        return static::find('all', array('order' => 'o asc'));
    }
}