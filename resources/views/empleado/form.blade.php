<h2 class="text-white bg-dark text-uppercase p-2">
    {{$mode}} EMPLOYEE</h2><br> @if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<br>

<div class="form-group row">
    <div class=" col-md-3 ">
        <label for="inputName">Name</label>
        <input type="text" class="form-control" name="Name" id="inputName" value="{{isset($employee->Name)?$employee->Name:old('Name')}}">
    </div>

    <div class="col">
        <label for="inputSurnames">Surnames</label>
        <input type="text" class="form-control" name="Surnames" id="inputSurnames" value="{{isset($employee->Surnames)?$employee->Surnames:old('Surnames')}}">
    </div>

    <div class="col-md-2">
        <label for="inputNIF">NIF</label>
        <input type="text" class="form-control" name="NIF" id="inputNIF" placeholder="NIF" value="{{isset($employee->NIF)?$employee->NIF:old('NIF')}}">
    </div>
</div>

<div class="form-group row">
    <div class="col">
        <label for="inputEmail">Email address</label>
        <input type="email" class="form-control" name="Email" id="inputEmail" value="{{isset($employee->Email)?$employee->Email:old('Email')}}" placeholder="name@example.com">
    </div>

    <div class="col">
        <label for="inputAddress">Address</label>
        <input type="text" class="form-control" name="Address" id="inputAddress" value="{{isset($employee->Address)?$employee->Address:old('Address')}}">
    </div>

    <div class="col-md-3">
        <label for="inputDateBirth">DateBirth</label>
        <input type="date" class="form-control" name="DateBirth" id="inputDateBirth" placeholder="" value="{{isset($employee->DateBirth)?$employee->DateBirth:old('DateBirth')}}">
    </div>
</div>

<div class="form-group">
    <label for="inputAdditionalInfo">Additional info</label>
    <textarea class="form-control" name="InfoAdd" id="inputAdditionalInfo" rows="3">{{isset($employee->InfoAdd)?$employee->InfoAdd:old('InfoAdd')}}</textarea>
</div>

<br>
<h4 class="text-white bg-dark text-uppercase p-2">EMPLOYEE EMPRISE INFO</h4> <br>
<div class="form-group row">
    <div class="col-md-3">
        <label for="inputDateEmprise">Date Start</label>
        <input type="date" class="form-control" name="DateEmployee" id="inputDateEmprise" placeholder="" value="{{isset($employee->DateEmployee)?$employee->DateEmployee:old('DateEmployee')}}">
    </div>

    <div class="col-md-3">
        <label class="my-1 mr-2" for="inputOcupation">Ocupation</label>
        <select class="custom-select my-1 mr-sm-2" name="Ocupation" id="inputOcupation">
                    <option value="Select" >Select</option>
                    <option value="Software" >Software Engineer</option>
                    <option value="Marketing">Marketing</option>
                    <option value="Web developer">Web Developer </option>
                </select>
    </div>


</div>
<div class="form-group row ">
    <div class="col-md-2">
        <label class="my-1 mr-2" for="inputGroup">Group Proyect</label>
        <select class="custom-select my-1 mr-sm-2" name="GroupProyect" id="inputGroup">
                <option value="Select" >Select</option>
                <option value="1" >One</option>
                <option  value="2">Two</option>
                <option value="3">Three</option>
            </select>
    </div>

    <div class="col-md-3">
        <label class="my-1 mr-2" for="inputRol">Rol</label>
        <select class="custom-select my-1 mr-sm-2" name="Rol" id="inputRol">
                <option value="Select" >Select</option>
                <option value="TM" >Team Member</option>
                <option value="PM">Project Manager</option>     
            </select>
    </div>

    <div class="col-md-3">
        <label for="inputSalary">Salary</label>
        <input type="text" class="form-control" name="Salary" id="inputSalary" placeholder="15000" value="{{isset($employee->Salary)?$employee->Salary:old('Salary')}}">
        <small>Annual salary</small>
    </div>
</div>

<br>
<h4 class="text-white bg-dark text-uppercase p-2">PHOTO</h4> <br>

<div class="form-group d-flex">
    @if(isset($employee->Photo))
    <img src="{{asset('storage').'/'.$employee->Photo}}" width="100px" alt=""> @endif
    <input class="mx-4 my-auto" type="file" class="form-control-file" name="Photo">
</div>

<input class="btn btn-dark text-center " type="submit" value="Save data"></input>