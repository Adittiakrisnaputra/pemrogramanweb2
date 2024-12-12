<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('home');
    }

    public function chart()
    {
        return view('Chart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function search(){
        return view('search');
    }

    public function submit(){
        return view('submit');
    }

    public function dashboard(){
        return view('admin/dashboard');
    }

    public function pelanggan(){
        return view('admin/pelanggan');
    }

    public function databuku(){
        return view('admin/databuku');
    }

    public function transaksi(){
        return view('admin/transaksi');
    }
}
