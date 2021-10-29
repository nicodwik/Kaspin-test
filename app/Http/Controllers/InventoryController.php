<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inventory;

class InventoryController extends Controller
{
    public function index()
    {
        $inventories = \DB::table('inventories as i')->whereNull('i.deleted_at')->select('i.id', 'c.name as category', 'i.name', 'i.merk', 'i.supplier', 'i.year', 'i.condition', 'i.amount', 'i.created_at', 'i.updated_at')
            ->join('categories as c', 'c.id', 'i.category_id')->get();

        return view('pages.inventory', compact('inventories'));
    }

    public function edit($id)
    {
        $inventory = \DB::table('inventories')->where('id', base64_decode($id))->first();
        $categories = \DB::table('categories')->get();

        return view('pages.inventory-edit', compact('inventory', 'categories'));
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        
        $inventory = Inventory::Create($data);

        if (env('FIREBASE_CREDENTIALS')) {
            $inventoryLog = app('firebase.firestore')->database()->collection('Log')->newDocument();
            $inventoryLog->set([
                'type' => 'create',
                'message' => 'Inventory ' . $inventory['name']. ' from ' . $inventory['supplier'] . ' has been created by ' . \Auth::user()->name . ' at ' . $inventory['created_at']
            ]);
        }
        
        return redirect()->route('inventory.index');
    }

    public function update(Request $request, $id)
    {
        $data = $request->except(['_token', '_method']);

        $inventory = Inventory::where('id', base64_decode($id))->updateOrCreate($data);
       
        if (env('FIREBASE_CREDENTIALS')) {
            $inventoryLog = app('firebase.firestore')->database()->collection('Log')->newDocument();
            $inventoryLog->set([
                'type' => 'update',
                'message' => 'Inventory ' . $inventory['name']. ' from ' . $inventory['supplier'] . ' has been updated by ' . \Auth::user()->name . ' at ' . $inventory['updated_at']
            ]);
        }
        
        return redirect()->route('inventory.index');
    }
    
    public function destroy($id)
    {
        $inventory = Inventory::where('id', base64_decode($id))->first();
        
        $inventory->update(['deleted_at' => now()]);
        
        $inventory = Inventory::where('id', base64_decode($id))->first();

        if (env('FIREBASE_CREDENTIALS')) {
            $inventoryLog = app('firebase.firestore')->database()->collection('Log')->newDocument();
            $inventoryLog->set([
                'type' => 'delete',
                'message' => 'Inventory ' . $inventory['name']. ' from ' . $inventory['supplier'] . ' has been deleted by ' . \Auth::user()->name . ' at ' . $inventory['deleted_at']
            ]);
        }

        return redirect()->route('inventory.index');
    }
}
