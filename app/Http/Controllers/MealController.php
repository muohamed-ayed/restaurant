<?php
namespace App\Http\Controllers;
use App\Models\Meal;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MealController extends Controller {
    public function index() {
        $meals = Meal::with('category')->latest()->get();
        $categories = Category::all();
        return view('meals.index', compact('meals', 'categories'));
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('meals', 'public');
        }

        Meal::create($data);
        return redirect()->route('meals.index')->with('success', 'Meal added successfully with image.');
    }

    public function edit(Meal $meal) {
        $categories = Category::all();
        return view('meals.edit', compact('meal', 'categories'));
    }

    public function update(Request $request, Meal $meal) {
        $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric',
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:5120'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($meal->image) {
                Storage::disk('public')->delete($meal->image);
            }
            $data['image'] = $request->file('image')->store('meals', 'public');
        }

        $meal->update($data);
        return redirect()->route('meals.index')->with('success', 'Meal updated successfully.');
    }

    public function destroy(Meal $meal) {
        if ($meal->image) {
            Storage::disk('public')->delete($meal->image);
        }
        $meal->delete();
        return redirect()->route('meals.index')->with('success', 'Meal deleted successfully.');
    }
}