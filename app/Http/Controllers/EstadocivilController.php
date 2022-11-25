<?php

namespace App\Http\Controllers;

use App\Models\Estadocivil;
use Illuminate\Http\Request;

/**
 * Class EstadocivilController
 * @package App\Http\Controllers
 */
class EstadocivilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadocivils = Estadocivil::paginate();

        return view('estadocivil.index', compact('estadocivils'))
            ->with('i', (request()->input('page', 1) - 1) * $estadocivils->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estadocivil = new Estadocivil();
        return view('estadocivil.create', compact('estadocivil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Estadocivil::$rules);

        $estadocivil = Estadocivil::create($request->all());

        return redirect()->route('estadocivils.index')
            ->with('success', 'Estadocivil created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadocivil = Estadocivil::find($id);

        return view('estadocivil.show', compact('estadocivil'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estadocivil = Estadocivil::find($id);

        return view('estadocivil.edit', compact('estadocivil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Estadocivil $estadocivil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estadocivil $estadocivil)
    {
        request()->validate(Estadocivil::$rules);

        $estadocivil->update($request->all());

        return redirect()->route('estadocivils.index')
            ->with('success', 'Estadocivil updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $estadocivil = Estadocivil::find($id)->delete();

        return redirect()->route('estadocivils.index')
            ->with('success', 'Estadocivil deleted successfully');
    }
}
