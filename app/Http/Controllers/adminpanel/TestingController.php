<?php

namespace App\Http\Controllers\adminpanel;

use App\Models\Testing;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class TestingController extends Controller
{
    public function listRecord()
    {

        $records = Testing::orderBy('id', 'desc')->paginate(5);

        return view('adminpanel.testing-curd-operation.list-record', compact('records'));
    }

    public function createRecord()
    {
        return view('adminpanel.testing-curd-operation.create-record');
    }

    public function storeTestingRecord(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'skill' => 'required|string',
            'currency' => 'required|string|max:20',
            'phone' => 'required|string|max:15',
        ]);

        $productImgPath = null;

            if ($request->hasFile('image')) {
                $productImg = $request->file('image');
                $productImgName = time() . '-' . $productImg->getClientOriginalName();
                $productImgPath = "testing-images/{$productImgName}";
                $productImg->move(public_path('testing-images/'), $productImgName);
            }

        Testing::create([
            'username' => $request->username,
            'email' => $request->email,
            'image' => $productImgPath,
            'skill' => $request->skill,
            'currency' => $request->currency,
            'phone' => $request->phone,
        ]);

        return redirect()->route('list-record')->with('success', 'Product updated successfully');
    }

    public function updateRecord($id)
    {
        $record = Testing::findOrFail($id);
        return view('adminpanel.testing-curd-operation.update-record', compact('record'));
    }


    public function updateRecordStore(Request $request, $id)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email',
            'skill' => 'required|string',
            'currency' => 'required|string',
            'phone' => 'required|string',
            'image' => 'nullable|image|max:2048',
        ]);
    
        $record = Testing::findOrFail($id);
        $record->username = $request->username;
        $record->email = $request->email;
        $record->skill = $request->skill;
        $record->currency = $request->currency;
        $record->phone = $request->phone;
    
        if ($request->hasFile('image')) {

            $img = $request->file('image');
            $img_name = time() . '-' . $img->getClientOriginalName();
            $image_path = "testing-images/{$img_name}";
            $img->move(public_path('testing-images/'), $img_name);
    
            if ($record->image && file_exists(public_path($record->image))) {
                unlink(public_path($record->image));
            }
    
            $record->image = $image_path;
        }
    
        $record->save();
    
        return redirect()->route('list-record')->with('success', 'Record updated successfully!');
    }
    
    public function deleteRecord($id)
    {
        $record = Testing::findOrFail($id);

        if ($record->image && $record->image !== 'testing-images') {
            $imagePath = public_path($record->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $record->delete();
        return redirect()->route('list-record')->with('error', 'Record are deleted!');
    }

}
