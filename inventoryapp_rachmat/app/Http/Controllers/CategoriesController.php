<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Categories;

class CategoriesController extends Controller
{
    public function create()
    {
        return view('category.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
        'name' => 'required|in:Parfum Wanita,Parfum Pria,Parfum Unisex',
        'description' => 'required|min:10',
        ], [
            'name.required' => 'Silahkan pilih category',
            'name.in' => 'Category tidak valid',
            'description.required' => 'Harap isi deskripsi',
            'min' => 'Inputan minimal :min karakter'
        ]);

        $now = Carbon::now();

            DB::table('categories')->insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'created_at' => $now,
            'updated_at' => $now
        ]);

        return redirect('/category')->with('success', 'Category berhasil ditambahkan!!');
    }

    public function index()
    {
        $categories = DB::table('categories')->get(); 
        return view('category.index', ['categories' => $categories]);
    }

    public function show($id)
    {
        $category = Categories::find($id);
        return view('category.detail', ['category' => $category]);
    }

    public function edit($id)
    {
        $category = DB::table('categories')->find($id);
        return view('category.edit', ['category' => $category]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
        'name' => 'required|in:Parfum Wanita,Parfum Pria,Parfum Unisex',
        'description' => 'required|min:10',
        ], [
            'name.required' => 'Silahkan pilih category',
            'name.in' => 'Category tidak valid',
            'description.required' => 'Harap isi deskripsi',
            'min' => 'Inputan minimal :min karakter'
        ]);

        $now = Carbon::now();

        DB::table('categories')
            ->where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'created_at' => $now,
                'updated_at' => $now                
                ]);
            return redirect ('/category')->with('success', 'Category berhasil diubah!!');
    }
    public function destroy($id)
    {
        DB::table('categories')->where('id', $id)->delete();

        return redirect ('/category')->with('success', 'Category berhasil dihapus!!');
    }
}
