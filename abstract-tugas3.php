<?php
require_once 'config/config.php';
require_once 'controller/functions.php';
require_once 'model/models.php';
require_once 'controller/student_controller.php';
require_once 'controller/role_controller.php';

abstract class Students_contoller {
    abstract static function select();
    abstract static function insert($id, $name, $email, $role_fk);
    abstract static function delete();
    abstract static function joinRoles($clauseAddition="");
    abstract static function fresh();
    abstract static function selectById($id);
    abstract static function selectWhere($clause);
    abstract static function updateById($id, $name, $email, $role_fk);
    abstract static function updateWhere($clause);
    abstract static function deleteById($id);
    abstract static function deleteWhere($clause);
}

interface CustomFunctions {
    static function purge();
    static function restore();
}