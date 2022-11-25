<?php

namespace App\Http\Controllers;

use App\Models\Familiare;
use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Http\Request;

/**
 * Class FamiliareController
 * @package App\Http\Controllers
 */
class FamiliareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $familiares = Familiare::paginate();

        return view('familiare.index', compact('familiares'))
            ->with('i', (request()->input('page', 1) - 1) * $familiares->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $familiare = new Familiare();
        $departamentos = Departamento::pluck('nombre_departamento','id');
        $municipios = Municipio::pluck('nombre_municipio','id');

        return view('familiare.create', compact('familiare','departamentos','municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Familiare::$rules);

        $familiare = Familiare::create($request->all());

        return redirect()->route('familiares.index')
            ->with('success', 'Familiare created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $familiare = Familiare::find($id);

        return view('familiare.show', compact('familiare'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $familiare = Familiare::find($id);

        $departamentos = Departamento::pluck('nombre_departamento','id');
        $municipios = Municipio::pluck('nombre_municipio','id');

        return view('familiare.edit', compact('familiare','departamentos','municipios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Familiare $familiare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Familiare $familiare)
    {
        request()->validate(Familiare::$rules);

        $familiare->update($request->all());

        return redirect()->route('familiares.index')
            ->with('success', 'Familiare updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $familiare = Familiare::find($id)->delete();

        return redirect()->route('familiares.index')
            ->with('success', 'Familiare deleted successfully');
    }
}
