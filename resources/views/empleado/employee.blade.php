@extends('layouts.app') @section('content')


<div class="container  d-flex justify-content-center">

    <div class="mx-6 my-auto">
        <img src="{{ asset('storage/'.$employee->Photo) }}" alt="Image employee" width="250px">
    </div>

    <div class="m-5 ">
        <div class="d-flex">
            <div class="">

                <h2 class="text-white bg-dark text-uppercase p-2">EMPLOYEE {{$employee->id}}</h2>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Name: </strong>{{$employee->Name}} {{$employee->Surnames}}</li>
                    <li class="list-group-item"><strong>Birthday: </strong> {{$employee->DateBirth}}</li>
                    <li class="list-group-item"><strong>NIF: </strong> {{$employee->NIF}}</li>
                </ul>
            </div>
            <div class="mx-4">
                <h3 class="text-white bg-dark text-uppercase  p-2">INFO ENTERPRISE</h3>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><strong>Date start: </strong> {{$employee->DateEmployee}}</li>
                    <li class="list-group-item"> <strong>Ocupation: </strong>{{$employee->Ocupation}}</li>
                    <li class="list-group-item"><strong>Group Project: </strong> {{$employee->GroupProyect}} <strong>Rol: </strong> {{$employee->Rol}}</li>
                </ul>
            </div>
        </div>

        <p class="mt-3"><strong> Additional info: </strong></p>
        <p>{{$employee->InfoAdd}}</p>

        <div class="d-flex mt-3">
            <button class="btn btn-dark mr-2">
                            <a class="text-light "  href="{{url('/empleado/'.$employee->id.'/edit')}}"> EDIT
                            </a>
                        </button>

            <form action="{{url('/empleado/'.$employee->id)}}" method="post">
                @csrf {{method_field('DELETE')}}

                <input class="btn btn-danger text-center" type="submit" onclick="return confirm('Do you want to remove employee?')" value="DELETE">
            </form>
        </div>
    </div>
</div>



@endsection