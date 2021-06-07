@extends('layouts.app')


@section('content')
<div class="container">

    <h2 class="text-white bg-dark text-uppercase p-2">LIST EMPLOYEES</h2>


    @if(Session::has('mensaje'))
    <div class="alert alert-success">
        {{Session::get('mensaje')}}
    </div>
    @endif

    <livewire:employees-datatable exportable/>
</div>



@endsection

