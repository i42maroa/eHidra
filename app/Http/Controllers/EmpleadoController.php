<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data['employees'] = Empleado::paginate(5);
        return view('empleado.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        $campos = [
            'NIF' => 'required|string|max:100',
            'Name' => 'required|string|max:100',
            'Surnames' => 'required|string|max:100',
            'Address' => 'required|string|max:100',
            'Email' => 'required|email',
            'DateBirth' => 'required|date',
            'Ocupation' => 'required|string|max:100',
            'GroupProyect' => 'required|string|max:100',
            'Rol' => 'required|string|max:100',
            'Salary' => 'required|string|max:100',
            'DateEmployee' => 'required|date',
            'InfoAdd' => 'required|string|max:500', 
            'Photo' => 'required|max:10000|mimes:jpeg,png,jpg',
        ];

        $mensaje = [
            'required' => ':attribute is required',
            'Photo.required' => 'Photo is required'
        ];

        $this->validate($request, $campos, $mensaje);

        //$datosEmpleado = request()->all();
        $datosEmpleado = request()->except('_token');

        if ($request->hasFile('Photo')) {
            $datosEmpleado['Photo'] = $request->file('Photo')->store('uploads', 'public');
        }

        Empleado::insert($datosEmpleado);
        return redirect('empleado')->with('mensaje', 'Employee added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $employee = Empleado::findOrFail($id);
        return view('empleado.employee', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $employee = Empleado::findOrFail($id);
        return view('empleado.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'NIF' => 'required|string|max:100',
            'Name' => 'required|string|max:100',
            'Surnames' => 'required|string|max:100',
            'Address' => 'required|string|max:100',
            'Email' => 'required|email',
            'DateBirth' => 'required|date',
            'Ocupation' => 'required|string|max:100',
            'GroupProyect' => 'required|string|max:100',
            'Rol' => 'required|string|max:100',
            'Salary' => 'required|string|max:100',
            'DateEmployee' => 'required|date',
            'InfoAdd' => 'string|max:500', 
        ];
             

        $mensaje = [
            'required' => ' :attribute is required',   
        ];

        if ($request->hasFile('Photo')) {
            $campos=['Photo' => 'required|max:10000|mimes:jpeg,png,jpg',];
            $mensaje=['Photo.required' => 'Photo is required'];
        }

        $this->validate($request, $campos, $mensaje);
        //
        $datosEmpleado = request()->except(['_token', '_method']);

        if ($request->hasFile('Photo')) {
            $employee = Empleado::findOrFail($id);
            Storage::delete('public/' . $employee->Photo);
            $datosEmpleado['Photo'] = $request->file('Photo')->store('uploads', 'public');
        }

        Empleado::where('id', '=', $id)->update($datosEmpleado);
        $employee = Empleado::findOrFail($id);
      
        
        return redirect('empleado')->with('mensaje','Employee modified');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $empleado = Empleado::findOrFail($id);

        if (Storage::delete('public/' . $empleado->Photo)) {
            Empleado::destroy($id);
        }

        return redirect('empleado')->with('mensaje', 'Employee deleted');
    }


    public function showGroup(){
        $data['employees'] = Empleado::get();
        return view('empleado.group', $data);
    }
}
