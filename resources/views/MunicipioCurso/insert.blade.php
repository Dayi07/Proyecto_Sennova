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
                        <h2 class="content-header-title float-start mb-0">Municipio</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('ViewMunicipio') }}">Listado</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('ViewInsertMunicipio') }}">Insertar</a>
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
        <form class="needs-validation" action="{{ route('InsertMunicipio') }}" method="POST" novalidate>
            @csrf
            <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Insertar Municipio</h4>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-xl-4 col-md-6 col-12">
                             <div class="mb-1">
                                 <label class="form-label" for="MUNIC_Nombre">Ingrese nombre del Municipio:</label>
                                 <input type="text" class="form-control" id="MUNIC_Nombre" name="MUNIC_Nombre" placeholder="Municipio"  required/>
                                 <div class="invalid-tooltip">El nombre es obligatorio.</div>
                             </div>
                         </div>  

                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="id_departamento">Seleccione nombre del departamento:</label>
                                <select class="form-select" aria-label="Default select example" name="id_departamento" id="id_departamento" required>
                                    @foreach ($infodep as $item)
                                    <option value="{{ $item->id }}">{{$item->DEPAR_Nombre}} </option>
                                    @endforeach
                                </select>                             
                                <div class="invalid-tooltip">El departamento es obligatorio.</div>
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