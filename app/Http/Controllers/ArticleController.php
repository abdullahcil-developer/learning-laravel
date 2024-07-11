<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        dd("index listeleme işlemi");
    }

    public function create()
    {
        dd("makale oluşturma listeleme işlemi");
    }

    public function store()
    {
        dd("index listeleme işlemi");
    }

    public function show(string $id)
    {
        dd( "index '$id' listeleme işlemi");
    }

    public function edit(string $id = "0")
    {
        return view("admin.article.edit");
    }

    public function update(Request $request, string $id)
    {

    }

    public function destroy(string $id)
    {
        dd($id);
    }

}
