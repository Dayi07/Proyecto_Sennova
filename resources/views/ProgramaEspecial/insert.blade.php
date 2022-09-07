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
                            <h2 class="content-header-title float-start mb-0">Programa de formacion especial</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('ViewEspecial') }}">Listado</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('ViewInsertEspecial') }}">Insertar</a>
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
                <form class="needs-validation" action="{{ route('InsertEspecial') }}" method="POST" novalidate>
                    @csrf
                    <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Insertar Programa de formacion especial</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-xl-4 col-md-6 col-12">
                                     <div class="mb-1">
                                         <label class="form-label" for="PROGE_Nombre">Ingrese nombre del Programa de Formacion:</label>
                                         <input type="text" class="form-control" id="PROGE_Nombre" name="PROGE_Nombre" placeholder="Nombre"  required/>
                                         <div class="invalid-tooltip">El nombre es obligatorio.</div>
                                     </div>
                                 </div> 
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="PROGE_Modalidad">Ingrese modalidad de formacion:</label>
                                        <input type="text" class="form-control" id="PROGE_Modalidad" name="PROGE_Modalidad" placeholder="Modalidad"  required/>
                                        <div class="invalid-tooltip">La modalidad es obligatoria.</div>
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="id_sector">Seleccione sector perteneciente:</label>
                                        <select class="form-select" aria-label="Default select example" name="id_sector" id="id_sector" required>
                                            @foreach ($sec as $item)
                                            <option value="{{ $item->id }}">{{$item->SECTO_Nombre}} </option>
                                            @endforeach
                                        </select>                             
                                        <div class="invalid-tooltip">El sector es obligatorio.</div>
                                    </div>
                                 </div>
                                 <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                    <label for="PROGE_URL" class="form-label">PDF del programa</label>
                                    <input class="form-control" type="file" name="PROGE_URL" id="PROGE_URL" accept=".pdf" required/>
                                    <div class="invalid-tooltip">El PDF es obligatorio.</div>
                                </div>      
                             </div><br>
                             <button class="btn btn-primary" type="submit">Guardar</button>
                         </div>
                     </div>
                </form>
            </div>
        </section>
        </div>
    </div>
    @include('layouts.Footer')

@endsection