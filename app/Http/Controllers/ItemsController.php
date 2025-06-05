<?php

namespace App\Http\Controllers;

use App\Models\RelevantStore;
use App\Models\IctCategory;
use App\Models\EquipmentType;
use App\Models\UnitOfIssue;

class ItemsController extends Controller
{
    public function create()
    {
        $relevantStores = RelevantStore::all();
        $ictCategories = IctCategory::all();
        $equipmentTypes = EquipmentType::all();
        $unitOfIssues = UnitOfIssue::all();

        return view('items.create', compact(
            'relevantStores',
            'ictCategories',
            'equipmentTypes',
            'unitOfIssues'
        ));
    }

    public function store()
    {
        // This is a tempory solution to avoid the error
        // Store method still have to complete 
        return redirect()->route('items.create')->with('success', 'Item created successfully.');
    }   
}
