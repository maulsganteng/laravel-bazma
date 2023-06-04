<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\categories;
use App\Models\CategoriesBooks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoriesController extends Controller
{
    public function index()
    {
        $data = CategoriesBooks::orderby('name','desc')->get();
        return view('pages.categories.index')->with('data',$data);
    }
    public function create()
    {
        return view("pages.categories.create");
    }
    public function store(Request $request)
    {
        Session::flash('name',$request->name);
        $request->validate([
            'name'=>'required|unique:categories_books,name',
        ],[
            'name.required'=>'name wajib diisi',
            'name.unique'=>'name wajib diisi',
        ]);
        $data = [
            'name'=>$request->name,
        ];
        CategoriesBooks::create($data);
        return redirect()->to('perpus/categories')->with('succes','berhasil menambahkan data');

    }
    public function show(Request $request, string $id)
    {
    }
    public function update(Request $request, string $id)
    {
    }
    public function destroy($id)
    {
    }
}
