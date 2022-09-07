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
                            <h2 class="content-header-title float-start mb-0">Ficha</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('ViewFicha') }}">Listado</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('ViewInsertFicha') }}">Insertar</a>
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
        <section id="basic-input" class="tootip-validations">            
            <div class="content-body">
                <form class="needs-validation" action="{{ route('InsertFicha') }}" method="POST" novalidate>
                    @csrf
                    <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Insertar Ficha</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-xl-4 col-md-6 col-12">
                                     <div class="mb-1">
                                         <label class="form-label" for="FICHA_Identificador_Unico">Ingrese numero unico de la ficha:</label>
                                         <input type="number" class="form-control" id="FICHA_Identificador_Unico" name="FICHA_Identificador_Unico" placeholder="Numero unico"  required/>
                                         <div class="invalid-tooltip">El numero es obligatorio.</div>
                                     </div>
                                 </div> 
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="FICHA_Fecha_Inicio">Ingrese fecha de inicio:</label>
                                        <input type="date" class="form-control" id="FICHA_Fecha_Inicio" name="FICHA_Fecha_Inicio" placeholder="Fecha inicio"  required/>
                                        <div class="invalid-tooltip">La fecha es obligatoria.</div>
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="FICHA_Fecha_Terminacion">Ingrese fecha de terminacion:</label>
                                        <input type="date" class="form-control" id="FICHA_Fecha_Terminacion" name="FICHA_Fecha_Terminacion" placeholder="Fecha terminacion"  required/>
                                        <div class="invalid-tooltip">La fecha es obligatoria.</div>
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="FICHA_Etapa">Ingrese etapa de la ficha:</label>
                                        <input type="text" class="form-control" id="FICHA_Etapa" name="FICHA_Etapa" placeholder="Etapa"  required/>
                                        <div class="invalid-tooltip">La etapa es obligatoria.</div>
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="FICHA_Nombre_Responsable">Ingrese nombre del responsable:</label>
                                        <input type="text" class="form-control" id="FICHA_Nombre_Responsable" name="FICHA_Nombre_Responsable" placeholder="Responsable"  required/>
                                        <div class="invalid-tooltip">El responsable es obligatorio.</div>
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="id_jornada">Seleccione jornada:</label>
                                        <select class="form-select" aria-label="Default select example" name="id_jornada" id="id_jornada" required>
                                            @foreach ($jor as $item)
                                            <option value="{{ $item->id }}">{{$item->JORNA_Nombre}} </option>
                                            @endforeach
                                        </select>                             
                                        <div class="invalid-tooltip">La jornada es obligatoria.</div>
                                    </div>
                                 </div>
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Seleccione programa de formacion:</label>
                                        <select class="form-select" aria-label="Default select example" name="id_programa_formacion" id="id_programa_formacion" required>
                                            @foreach ($prog as $item)
                                            <option value="{{ $item->id }}">{{$item->PROGR_Nombre}} </option>
                                            @endforeach
                                        </select>                             
                                        <div class="invalid-tooltip">El programaa es obligatorio.</div>
                                    </div>
                                 </div>
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Seleccione centro:</label>
                                        <select class="form-select" aria-label="Default select example" name="id_centro" id="id_centro" required>
                                            @foreach ($cen as $item)
                                            <option value="{{ $item->id }}">{{$item->CENTR_Nombre}} </option>
                                            @endforeach
                                        </select>                             
                                        <div class="invalid-tooltip">El centro es obligatorio.</div>
                                    </div>
                                 </div>
                             </div>
                             <button class="btn btn-primary" type="submit">Guardar</button>
                         </div>
                     </div>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.Footer')
 
@endsection