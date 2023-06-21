<?php

namespace App\Http\Controllers;

use App\Models\Mediafile;
use Illuminate\Http\Request;

/**
 * Class MediafileController
 * @package App\Http\Controllers
 */
class MediafileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mediafiles = Mediafile::paginate();

        return view('mediafile.index', compact('mediafiles'))
            ->with('i', (request()->input('page', 1) - 1) * $mediafiles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mediafile = new Mediafile();
        return view('mediafile.create', compact('mediafile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mediafile::$rules);

        $mediafile = Mediafile::create($request->all());

        return redirect()->route('mediafiles.index')
            ->with('success', 'Archivos guardados');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mediafile = Mediafile::find($id);

        return view('mediafile.show', compact('mediafile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mediafile = Mediafile::find($id);

        return view('mediafile.edit', compact('mediafile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mediafile $mediafile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mediafile $mediafile)
    {
        request()->validate(Mediafile::$rules);

        $mediafile->update($request->all());

        return redirect()->route('mediafiles.index')
            ->with('success', 'Archivos actualizadoso.');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mediafile = Mediafile::find($id)->delete();

        return redirect()->route('mediafiles.index')
            ->with('success', 'Archivos eliminados');
    }
}
