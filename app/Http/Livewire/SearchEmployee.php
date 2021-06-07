<?php

namespace App\Http\Livewire;

use App\Models\Empleado;
use Livewire\Component;

class SearchEmployee extends Component
{
    public $search = '';
    public $message = '';
  
    public function includeGroup($id, $proyect){
        $employee = Empleado::findOrFail($id);
        if($employee) {
            $employee->GroupProyect = $proyect;
            $employee->save();
            $this->message = "Employee " . $employee->Name . " has added to group ".$proyect;
            $this->emit('saved');
        }
    }

    public function render()
    {
        return view('livewire.search-employee', [
            'employees' =>  ($this->search == '')? Empleado::get(): Empleado::where('Name', $this->search)->get()->merge(Empleado::where('Surnames', $this->search)->get()),
            'employees1' => Empleado::where('GroupProyect', 1)->get(),
            'employees2' => Empleado::where('GroupProyect', 2)->get(),
            'employees3' => Empleado::where('GroupProyect', 3)->get()
        ]);
    }
}
