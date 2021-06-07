<div>
    <div class="alert alert-success text-center mb-5" x-data="{ show: false }" x-show.transition.opacity.out.duration.1500ms="show" x-init="@this.on('saved', () => { show = true; setTimeout(()=> { show = false; }, 2000) })" style="display: none">
        {{$message}}
    </div>

    <div class=" d-flex justify-content-center">
        <div class="mx-4">
            <h2 class="text-white bg-dark text-uppercase p-2 text-center"> GROUP 1</h2>
            <ul class="list-group">
                @foreach($employees1 as $employee)
                <li class="list-group-item">
                    <a href="/employee/{{ $employee->id }}">
                    {{$employee->Name}} {{ $employee->Surnames }} <strong>{{$employee->Rol}}</strong></a></li>
                @endforeach
            </ul>
        </div>
        <div class="mx-4">
            <h2 class="text-white bg-dark text-uppercase p-2 text-center">GROUP 2</h2>
            <ul class="list-group">
                @foreach($employees2 as $employee)
                <li class="list-group-item">
                    <a href="/employee/{{ $employee->id }}">
                    {{$employee->Name}} {{ $employee->Surnames }} <strong>{{$employee->Rol}}</strong></a></li>
                @endforeach
            </ul>
        </div>
        <div class="mx-4">
            <h2 class="text-white bg-dark text-uppercase p-2 text-center ">GROUP 3</h2>
            <ul class="list-group">
                @foreach($employees3 as $employee)
                <li class="list-group-item">
                    <a href="/employee/{{ $employee->id }}">
                    {{$employee->Name}} {{ $employee->Surnames }} <strong>{{$employee->Rol}}</strong></a></li>
                @endforeach
            </ul>
        </div>
    </div>


    <div class="d-flex flex-column m-0 row justify-content-center">

        <div class="col-md-3 mx-auto mt-5">
            <input class="form-control" wire:model="search" type="text" placeholder="Search users... " />
        </div>


        <ul class="mx-auto mt-3 ">
            <li>
                <p class="text-white bg-dark text-uppercase p-2">EMPLOYEES</p>
            </li>
            @foreach($employees as $employee)
            <li class="m-2 row">
                <div class="mx-1 col-4 ">
                    <a href="/employee/{{ $employee->id }}">{{ $employee->Name }} {{ $employee->Surnames }}</a>

                </div>
                <div class="mx-1 col">
                    <button class="btn btn-danger text-center " wire:click="includeGroup({{$employee->id}},1)"> Group 1</button>
                    <button class="btn btn-danger text-center" wire:click="includeGroup({{$employee->id}},2)"> Group2</button>
                    <button class="btn btn-danger text-center" wire:click="includeGroup({{$employee->id}},3)">Group3</button>
                </div>
            </li>
            @endforeach
        </ul>
    </div>
</div>