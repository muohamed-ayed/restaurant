<?php
namespace App\Http\Controllers;
use App\Models\Meal;

class HomeController extends Controller {
    public function index() {
        $meals = Meal::with('category')->latest()->get();
        return view('home', compact('meals'));
    }
}