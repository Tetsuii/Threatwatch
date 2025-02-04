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
        return view('crud');
    }

    public function createletd(Request $request)
    {
        $validated = $request->validate([
            "name" => "required",
            "description" => "required",
            "image" => "required|mimes:jpg,png,webp",
        ]);

        $file = $request->file("image");
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs("public", $fileName);
        $url = str_replace("public", "storage", $path);

        letd::create([
            "service_name" => $validated['name'],
            "service_description" => $validated['description'],
            "service_image" => $url,
        ]);

        return redirect("/services");
    }

    public function updateletd(Request $request)
    {
        $validated = $request->validate([
            "id" => "required",
            "name" => "required",
            "description" => "required",
            "image" => "required|mimes:jpg,png,webp",
        ]);

        $ITEMS = letd::find($validated['id']);

        $file = $request->file("image");
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs("public", $fileName);
        $url = str_replace("public", "storage", $path);

        $ITEMS->service_name = $validated['name'];
        $ITEMS->service_description = $validated['description'];
        $ITEMS->service_image = $url;
        $ITEMS->save();

        return redirect("/services");
    }

    public function deleteletd(Request $request)
    {
        $validated = $request->validate([
            "id" => "required",
        ]);

        $result = letd::where('id', $validated['id'])->delete();

        return redirect("/services");
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
        $url = str_replace("public", "storage", $path);

        tht::create([
            "service_name" => $validated['name'],
            "service_description" => $validated['description'],
            "service_image" => $url,
        ]);

        return redirect("/services");
    }

    public function updatetht(Request $request)
    {
        $validated = $request->validate([
            "id" => "required",
            "name" => "required",
            "description" => "required",
            "image" => "required|mimes:jpg,png,webp",
        ]);

        $ITEMS = tht::find($validated['id']);

        $file = $request->file("image");
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs("public", $fileName);
        $url = str_replace("public", "storage", $path);

        $ITEMS->service_name = $validated['name'];
        $ITEMS->service_description = $validated['description'];
        $ITEMS->service_image = $url;
        $ITEMS->save();

        return redirect("/services");
    }

    public function deletetht(Request $request)
    {
        $validated = $request->validate([
            "id" => "required",
        ]);

        $result = tht::where('id', $validated['id'])->delete();

        return redirect("/services");
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
        $url = str_replace("public", "storage", $path);

        enhance::create([
            "service_name" => $validated['name'],
            "service_description" => $validated['description'],
            "service_image" => $url,
        ]);

        return redirect("/services");
    }

    public function updateenhance(Request $request)
    {
        $validated = $request->validate([
            "id" => "required",
            "name" => "required",
            "description" => "required",
            "image" => "required|mimes:jpg,png,webp",
        ]);

        $ITEMS = enhance::find($validated['id']);

        $file = $request->file("image");
        $fileName = $file->getClientOriginalName();
        $path = $file->storeAs("public", $fileName);
        $url = str_replace("public", "storage", $path);

        $ITEMS->service_name = $validated['name'];
        $ITEMS->service_description = $validated['description'];
        $ITEMS->service_image = $url;
        $ITEMS->save();

        return redirect("/services");
    }

    public function deleteenhance(Request $request)
    {
        $validated = $request->validate([
            "id" => "required",
        ]);

        $result = enhance::where('id', $validated['id'])->delete();

        return redirect("/services");
    }
}
