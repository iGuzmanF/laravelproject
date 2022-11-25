<?php

namespace App\Http\Controllers;
use App\Models\Establecimiento;
use App\Models\Familiare;
use App\Models\Paciente;
use App\Models\Estadocivil;
use App\Models\Sexo;
use App\Models\Departamento;
use App\Models\Municipio;
use Illuminate\Http\Request;

/**
 * Class PacienteController
 * @package App\Http\Controllers
 */
class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::paginate();

        return view('paciente.index', compact('pacientes'))
            ->with('i', (request()->input('page', 1) - 1) * $pacientes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paciente = new Paciente();
        $establecimientos = Establecimiento::pluck('nombre_establecimiento','id');
        $familiares = Familiare::select("id",Familiare::raw("CONCAT(nombre,' ',apellido) as Nombre"))->pluck('Nombre','id');
        $sexos = Sexo::pluck('nombre_sexo','id');
        $estadocivils = Estadocivil::pluck('nombre_estado','id');
        $departamentos = Departamento::pluck('nombre_departamento','id');
        $municipios = Municipio::pluck('nombre_municipio','id');

        return view('paciente.create', compact('paciente','establecimientos','familiares','sexos','estadocivils','departamentos','municipios'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Paciente::$rules);

        $paciente = Paciente::create($request->all());

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $paciente = Paciente::find($id);

        return view('paciente.show', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $paciente = Paciente::find($id);

        $establecimientos = Establecimiento::pluck('nombre_establecimiento','id');
        $familiares = Familiare::select("id",Familiare::raw("CONCAT(nombre,' ',apellido) as Nombre"))->pluck('Nombre','id');
        $sexos = Sexo::pluck('nombre_sexo','id');
        $estadocivils = Estadocivil::pluck('nombre_estado','id');
        $departamentos = Departamento::pluck('nombre_departamento','id');
        $municipios = Municipio::pluck('nombre_municipio','id');


        return view('paciente.edit', compact('paciente','establecimientos','familiares','sexos','estadocivils','departamentos','municipios'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Paciente $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        request()->validate(Paciente::$rules);

        $paciente->update($request->all());

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $paciente = Paciente::find($id)->delete();

        return redirect()->route('pacientes.index')
            ->with('success', 'Paciente deleted successfully');
    }
}
