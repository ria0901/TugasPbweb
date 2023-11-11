<?php

class judol_cuy extends koneksi {
    public function index() 
    {
        $this->view('forms/customer-profile');
    }

    public function dashboard() 
    {
        $this->view('shop/dashboard');
    }

    public function cart() 
    {
        $this->view('shop/cart');
    }

    public function item($id=[]) 
    {
        $data['id'] = $id; 
        $this->view('shop/item', $data);
    }

    public function contact() 
    {
        $this->view('shop/contact');
    }

    public function order($id=[]) 
    {
        $data['id'] = $id;
        $this->view('shop/order', $data);
    }

    public function admin() 
    {
        $this->view('admin-panel/admin-login');
    }

    public function login()
    {
        $this->view('forms/customer-login');
    }

    public function profile() 
    {
        $this->view('forms/customer-profile');
    }

    public function register() 
    {
        $this->view('forms/customer-register');
    }

    public function logout() {
        $this->view('forms/customer-login');
    }
}