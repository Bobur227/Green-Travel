<?php

namespace App\Http\Controllers;

use App\Memory;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Location;

class MemoryController extends Controller
{
    public function shopList()
    {
        $locations = Memory::all();
        return view('dashboard', [
            'locations' => $locations,
        ]);
    }
}
