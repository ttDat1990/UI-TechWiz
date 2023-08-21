<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use App\Models\Slide;

class ApiController extends Controller
{
    public function getProducts()
    {
        $products = Product::all();
        foreach ($products as $product) {
            $product->image_url = asset('images/' . $product->image);
        }
        return response()->json($products);
    }

    public function getProductsByCategory($categoryId)
    {
        $products = Product::where('category_id', $categoryId)->get();
        foreach ($products as $product) {
            $product->image_url = asset('images/' . $product->image);
        }
        return response()->json($products);
    }

    public function getCategories()
    {
        $categories = Category::all();


        foreach ($categories as $category) {
            $category->image_url = asset('images/' . $category->image);
        }
        return response()->json($categories);
    }

    public function getUsers()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function getSlides()
    {
        $slides = Slide::all();


        foreach ($slides as $slide) {
            $slide->image_url = asset('images/' . $slide->image);
        }
        return response()->json($slides);
    }
}