<?php

namespace App\Http\Controllers;

use App\Models\letd;
use App\Models\enhance;
use App\Models\tht;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function showForm()
    {
        $letds = letd::all(); 
        $enhances = enhance::all(); 
        $thts = tht::all(); 

        return view('crud', compact('letds', 'enhances', 'thts'));
    }

    public function createLetd(Request $request) 
    {
        $validated = $request->validate([
            "name" => "required",
            "description" => "required",
            "image" => "required|mimes:jpg,png,webp",
        ]);
    
        $file = $request->file("image");
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs("public", $fileName);
        $url = str_replace("public", "images", $path);
            
        Letd::create([
            "service_name" => $validated['name'],
            "service_description" => $validated['description'],
            "service_image" => $url,
        ]);
    
        return redirect()->back()->with('success', 'Service created successfully!');
    }

    public function updateletd(Request $request, $id)
    {
        $validated = $request->validate([
                "name" => "required",
                "description" => "required",
                "image" => "required|mimes:jpg,png,webp",
                ]);
        
        $letd = letd::findOrFail($id);
        $file = $request->file("image");
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs("public", $fileName);
        $url = str_replace("public", "images", $path);

        $letd->service_name = $validated['name'];
        $letd->service_description = $validated['description'];
        $letd->service_image = $url;
        $letd->save();

        return redirect()->back()->with('success', 'Service updated successfully!');
    }

    public function deleteletd($id)
    {
        $letd = Letd::find($id);

        if ($letd) {
            $letd->delete();
            return redirect('/crud')->with('success', 'Service deleted successfully!');
        } else {
            return redirect('/crud')->with('error', 'Service not found.');
        }
    }

    public function createtht(Request $request) 
    {
        $validated = $request->validate([
            "name" => "required",
            "description" => "required",
            "image" => "required|mimes:jpg,png,webp",
        ]);
    
        $file = $request->file("image");
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs("public", $fileName);
        $url = str_replace("public", "images", $path);
            
        tht::create([
            "service_name" => $validated['name'],
            "service_description" => $validated['description'],
            "service_image" => $url,
        ]);
    
        return redirect()->back()->with('success', 'Service created successfully!');
    }

    public function updatetht(Request $request, $id)
    {
        $validated = $request->validate([
                "name" => "required",
                "description" => "required",
                "image" => "required|mimes:jpg,png,webp",
                ]);
        
        $tht = tht::findOrFail($id);
        $file = $request->file("image");
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs("public", $fileName);
        $url = str_replace("public", "images", $path);

        $tht->service_name = $validated['name'];
        $tht->service_description = $validated['description'];
        $tht->service_image = $url;
        $tht->save();

        return redirect()->back()->with('success', 'Service updated successfully!');
    }

    public function deletetht($id)
    {
        $tht = tht::find($id);

        if ($tht) {
            $tht->delete();
            return redirect('/crud')->with('success', 'Service deleted successfully!');
        } else {
            return redirect('/crud')->with('error', 'Service not found.');
        }
    }

    public function createenhance(Request $request) 
    {
        $validated = $request->validate([
            "name" => "required",
            "description" => "required",
            "image" => "required|mimes:jpg,png,webp",
        ]);
    
        $file = $request->file("image");
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs("public", $fileName);
        $url = str_replace("public", "images", $path);
            
        enhance::create([
            "service_name" => $validated['name'],
            "service_description" => $validated['description'],
            "service_image" => $url,
        ]);
    
        return redirect()->back()->with('success', 'Service created successfully!');
    }

    public function updateenhance(Request $request, $id)
    {
        $validated = $request->validate([
                "name" => "required",
                "description" => "required",
                "image" => "required|mimes:jpg,png,webp",
                ]);
        
        $enhance = enhance::findOrFail($id);
        $file = $request->file("image");
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs("public", $fileName);
        $url = str_replace("public", "images", $path);

        $enhance->service_name = $validated['name'];
        $enhance->service_description = $validated['description'];
        $enhance->service_image = $url;
        $enhance->save();

        return redirect()->back()->with('success', 'Service updated successfully!');
    }

    public function deleteenhance($id)
    {
        $enhance = enhance::find($id);

        if ($enhance) {
            $enhance->delete();
            return redirect('/crud')->with('success', 'Service deleted successfully!');
        } else {
            return redirect('/crud')->with('error', 'Service not found.');
        }
    }
}
