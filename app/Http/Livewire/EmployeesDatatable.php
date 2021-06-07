<?php

namespace App\Http\Livewire;

use App\Models\Empleado;
use App\Models\Ld;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\NumberColumn;
use Mediconesystems\LivewireDatatables\DateColumn;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class EmployeesDatatable extends LivewireDatatable
{
    public $model = Empleado::class;



    function columns()
    {
    	return [
    		NumberColumn::name('Id')
			->label('ID')
			->sortBy('id')
			->linkTo('employee', 3),

    		Column::name('Name')
			->label('Name')
			->filterable(),

			Column::name('Surnames')
			->label('Surnames')
			->filterable(),

    		Column::name('Email')
			->label('Email Address')
			->filterable(),

    		DateColumn::name('DateBirth')
			->label('BirthDay')
			->filterable(),

			Column::name('Address')
			->label('Address')
			->filterable(),

			Column::name('Ocupation')
			->label('Ocupation')
			->filterable(['Software Engineer','Marketing', 'Web Developer']),

			NumberColumn::name('GroupProyect')
			->label('GroupProyect')
			->filterable([1,2,3]),

			Column::name('Rol')
			->label('Rol')
			->filterable(['TM', 'PM']),

			NumberColumn::name('Salary')
			->label('Salary')
			->filterable(),

			DateColumn::name('DateEmployee')
			->label('DateEmployee')
			->filterable()
			,
    	];
    }
}