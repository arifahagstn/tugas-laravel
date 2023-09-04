<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function form()
    {
        return view('form');
    }

    public function welcome()
    {
        return view('welcome');
    }

    public function index()
    {
        return view('template.master');
    }

    public function anggota()
    {
        return view('template.perpus.anggota');
    }

    public function buku()
    {
        return view('template.perpus.buku');
    }

    public function petugas()
    {
        return view('template.perpus.petugas');
    }
}