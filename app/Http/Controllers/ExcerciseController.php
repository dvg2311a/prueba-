<?php

namespace App\Http\Controllers;

use App\Models\Excercise;
use Illuminate\Http\Request;

/**
 * Class ExcerciseController
 * @package App\Http\Controllers
 */
class ExcerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $excercises = Excercise::paginate();

        return view('excercise.index', compact('excercises'))
            ->with('i', (request()->input('page', 1) - 1) * $excercises->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $excercise = new Excercise();
        return view('excercise.create', compact('excercise'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Excercise::$rules);

        $excercise = Excercise::create($request->all());

        return redirect()->route('excercises.index')
            ->with('success', 'Ejercicio guardado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $excercise = Excercise::find($id);

        return view('excercise.show', compact('excercise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $excercise = Excercise::find($id);

        return view('excercise.edit', compact('excercise'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Excercise $excercise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Excercise $excercise)
    {
        request()->validate(Excercise::$rules);

        $excercise->update($request->all());

        return redirect()->route('excercises.index')
            ->with('success', 'Ejercicio actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $excercise = Excercise::find($id)->delete();

        return redirect()->route('excercises.index')
            ->with('success', 'Ejercicio eliminado');
    }
}
