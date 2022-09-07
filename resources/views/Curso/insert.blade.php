@extends('layouts.app')

@section('content')
    
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div> 
    <div class="content-wrapper container-xxl p-0"> 
        <div class="content-header row">
            <div class="content-header-left col-md-9 col-12 mb-2">
                <div class="row breadcrumbs-top">
                    <div class="col-12">
                        <h2 class="content-header-title float-start mb-0">Curso</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('ViewCurso') }}">Listado</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('ViewInsertCurso') }}">Insertar</a>
                                </li> 
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                <div class="mb-1 breadcrumb-right">
                    <div class="dropdown">
                        <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                        <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#"><i class="me-1" data-feather="check-square"></i><span class="align-middle">Todo</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="message-square"></i><span class="align-middle">Chat</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="mail"></i><span class="align-middle">Email</span></a><a class="dropdown-item" href="#"><i class="me-1" data-feather="calendar"></i><span class="align-middle">Calendar</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<section id="basic-input" class="tootip-validations">        
    <div class="content-body">
        <form class="needs-validation" action="{{ route('InsertCurso') }}" method="POST" novalidate>
            @csrf
            <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Insertar Curso</h4>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-xl-4 col-md-6 col-12">
                             <div class="mb-1">
                                 <label class="form-label" for="CURSO_Numero">Ingrese numero del curso:</label>
                                 <input type="numbre" class="form-control" id="CURSO_Numero" name="CURSO_Numero" placeholder="Numero"  required/>
                                 <div class="invalid-tooltip">El numero es obligatorio.</div>
                             </div>
                         </div>  
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="CURSO_Nombre">Ingrese nombre del curso:</label>
                                <input type="text" class="form-control" id="CURSO_Nombre" name="CURSO_Nombre" placeholder="Curso"  required/>
                                <div class="invalid-tooltip">El nombre es obligatorio.</div>
                            </div>
                        </div> 
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="CURSO_Estado">Ingrese estado del curso:</label>
                                <input type="text" class="form-control" id="CURSO_Estado" name="CURSO_Estado" placeholder="Estado"  required/>
                                <div class="invalid-tooltip">El estado es obligatorio.</div>
                            </div>
                        </div> 
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="CURSO_Tipo">Ingrese tipo del curso:</label>
                                <input type="text" class="form-control" id="CURSO_Tipo" name="CURSO_Tipo" placeholder="Tipo"  required/>
                                <div class="invalid-tooltip">El tipo es obligatorio.</div>
                            </div>
                        </div> 

                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="id_jornada">Seleccione nombre del jornada:</label>
                                <select class="form-select" aria-label="Default select example" name="id_jornada" id="id_jornada" required>
                                    @foreach ($jor as $jornada)
                                    <option value="{{$jornada->id}}">{{ $jornada->JORNA_Nombre }}</option>
                                    @endforeach
                                </select>                             
                                <div class="invalid-tooltip">La jornada es obligatoria.</div>
                            </div>
                         </div> 
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="id_sector">Seleccione nombre del sector:</label>
                                <select class="form-select" aria-label="Default select example" name="id_sector" id="id_sector" required>
                                    @foreach ($sec as $sector)
                                    <option value="{{$sector->id}}">{{ $sector->SECTO_Nombre }}</option>
                                    @endforeach
                                </select>                             
                                <div class="invalid-tooltip">El sector es obligatorio.</div>
                            </div>
                         </div><div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="id_municipio">Seleccione nombre del municipio:</label>
                                <select class="form-select" aria-label="Default select example" name="id_municipio" id="id_municipio" required>
                                    @foreach ($mun as $municipio)           
                                    <option value="{{$municipio->id}}">{{$municipio->MUNIC_Nombre}}</option>
                                    @endforeach
                                </select>                             
                                <div class="invalid-tooltip">El municipio es obligatorio.</div>
                            </div>
                         </div>
                     </div>
                     <button class="btn btn-primary" type="submit">Guardar</button>
                 </div>
             </div>
        </form>
    </div>
</section>
</div>

@include('layouts.Footer')

@endsection