<?php

namespace App\Http\Controllers\Admin\Market;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
return view('admin.market.category.index');
    }

    public function create()
    {
        return view('admin.market.category.create');
    }

    public function store(Request $request)
    {
    }

    public function show($id)
    {
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
    }

    public function destroy($id)
    {
    }
}
