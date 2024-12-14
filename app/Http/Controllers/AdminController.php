<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $title = 'Dashboard';
        return view('admin.dashboard', compact('title'));
    }

    public function product(Request $request)
    {
        $title = 'Data Product';
        $search = '';
        $queryProduct = ProductModel::query();

        if ($request->has('searchProduct')) {
            $search = $request->input('searchProduct');
            $queryProduct->where('name', 'like', "%{$search}%")
                        ->orWhere('category', 'like', "%{$search}%");
        }

        $dataProduct = $queryProduct->paginate(10);
        return view('admin.product', compact('title', 'dataProduct','search'));
    }

    public function addProduct(){
        $title = 'Create New Product';
        return view('admin.add_product', compact('title'));
    }
}
