<?php


namespace App\Http\Controllers;

use App\Models\Expediente;
use App\Models\Paciente;
use App\Models\Establecimiento;
use Illuminate\Http\Request;

/**
 * Class ExpedienteController
 * @package App\Http\Controllers
 */
class ExpedienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expedientes = Expediente::paginate();

        return view('expediente.index', compact('expedientes'))
            ->with('i', (request()->input('page', 1) - 1) * $expedientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expediente = new Expediente();
        $establecimientos = Establecimiento::pluck('nombre_establecimiento','id');

        $pacientes = Paciente::select("id",Paciente::raw("CONCAT(primer_nombre,' ',primer_apellido) as Nombre"))->pluck('Nombre','id');

        return view('expediente.create', compact('expediente','pacientes','establecimientos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Expediente::$rules);

        $expediente = Expediente::create($request->all());

        return redirect()->route('expedientes.index')
            ->with('success', 'Expediente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $expediente = Expediente::find($id);

        return view('expediente.show', compact('expediente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expediente = Expediente::find($id);
        
        $establecimientos = Establecimiento::pluck('nombre_establecimiento','id');
        $pacientes = Paciente::select("id",Paciente::raw("CONCAT(primer_nombre,' ',primer_apellido) as Nombre"))->pluck('Nombre','id');
        return view('expediente.edit', compact('expediente','pacientes','establecimientos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Expediente $expediente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Expediente $expediente)
    {
        request()->validate(Expediente::$rules);

        $expediente->update($request->all());

        return redirect()->route('expedientes.index')
            ->with('success', 'Expediente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $expediente = Expediente::find($id)->delete();

        return redirect()->route('expedientes.index')
            ->with('success', 'Expediente deleted successfully');
    }
}
