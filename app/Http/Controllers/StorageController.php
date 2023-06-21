<?php

namespace App\Http\Controllers;

use App\Models\Storage;
use Illuminate\Http\Request;

/**
 * Class StorageController
 * @package App\Http\Controllers
 */
class StorageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $storages = Storage::paginate();

        return view('storage.index', compact('storages'))
            ->with('i', (request()->input('page', 1) - 1) * $storages->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $storage = new Storage();
        return view('storage.create', compact('storage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Storage::$rules);

        $storage = Storage::create($request->all());

        return redirect()->route('storages.index')
            ->with('success', 'Storage created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $storage = Storage::find($id);

        return view('storage.show', compact('storage'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $storage = Storage::find($id);

        return view('storage.edit', compact('storage'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Storage $storage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Storage $storage)
    {
        request()->validate(Storage::$rules);

        $storage->update($request->all());

        return redirect()->route('storages.index')
            ->with('success', 'Storage updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $storage = Storage::find($id)->delete();

        return redirect()->route('storages.index')
            ->with('success', 'Storage deleted successfully');
    }
}
