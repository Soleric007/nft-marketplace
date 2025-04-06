<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NFT;
use Illuminate\Support\Facades\Auth;

class NFTController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'description' => 'nullable|string',
            'file' => 'required|file|mimes:jpg,jpeg,png,gif,webp,mp4|max:204800', // 200MB max
            'file_type' => 'required|string',
            'collection_name' => 'required|string',
            'royalties' => 'nullable|integer|min:0|max:70',
        ]);

        // File Upload Handling
        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('nfts', 'public');
        } else {
            return back()->with('error', 'File upload failed');
        }

        // Store NFT in database
        NFT::create([
            'user_id' => Auth::user()->id,
            'title' => $request->title,
            'price' => $request->price,
            'description' => $request->description,
            'file_path' => $filePath,
            'file_type' => $request->file_type,
            'collection_name' => $request->collection_name,
            'royalties' => $request->royalties ?? 0,
        ]);
        return redirect()->route('dashboard')->with('success', 'NFT Created Successfully');
    }
}
