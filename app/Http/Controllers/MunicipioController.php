<?php

namespace App\Http\Controllers;

use App\Models\Municipio;
use App\Models\Departamento;
use Illuminate\Http\Request;

/**
 * Class MunicipioController
 * @package App\Http\Controllers
 */
class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios = Municipio::paginate();

        return view('municipio.index', compact('municipios'))
            ->with('i', (request()->input('page', 1) - 1) * $municipios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $municipio = new Municipio();
        $departamentos = Departamento::pluck('nombre_departamento','id');
        return view('municipio.create', compact('municipio','departamentos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Municipio::$rules);

        $municipio = Municipio::create($request->all());

        return redirect()->route('municipios.index')
            ->with('success', 'Municipio created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $municipio = Municipio::find($id);

        return view('municipio.show', compact('municipio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $municipio = Municipio::find($id);

        $departamentos = Departamento::pluck('nombre_departamento','id');
        return view('municipio.edit', compact('municipio','departamentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Municipio $municipio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipio $municipio)
    {
        request()->validate(Municipio::$rules);

        $municipio->update($request->all());

        return redirect()->route('municipios.index')
            ->with('success', 'Municipio updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $municipio = Municipio::find($id)->delete();

        return redirect()->route('municipios.index')
            ->with('success', 'Municipio deleted successfully');
    }
}
