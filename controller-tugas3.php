<?php
require_once 'controller/controllers.php';
class RoleController{
    static function index() {
        view('subview/roles', [
            'roles' => Roles::select(),
            'header' => titleheader('Read data scr AJAX dgn jQuery', 'h1', 'text-center mb-3')
        ]);
    }

    static function getRoles($id) {
        view('subview/roles', [
            'roles' => Roles::selectbyid($id)
        ]);
    } # Ditugaskan
}