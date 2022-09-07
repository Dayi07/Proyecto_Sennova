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
                        <h2 class="content-header-title float-start mb-0">Aprendiz</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('ViewAprendiz') }}">Listado</a>
                                </li>
                                <li class="breadcrumb-item"><a href="">Actualizar</a>
                                </li> 
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content-body">
        <form action="{{ route('UpdateAprendiz') }}" method="POST">
            @csrf
            <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Actualizar Aprendiz</h4> 
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-xl-4 col-md-6 col-12">
                             <div class="mb-1">
                                 <input type="hidden" value="{{ $apr->id }}" name="id" id="id">

                                 <label class="form-label" for="basicInput">Ingrese nombre del aprendiz:</label>
                                 <input type="text" class="form-control" value="{{ $apr->APREN_Nombre }}" id="APREN_Nombre" name="APREN_Nombre" placeholder="Nombre" />
                             </div>
                         </div>
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese tipo de identificacion:</label>
                                <select class="form-select" aria-label="Default select example" name="APREN_Tipo_Documento" id="APREN_Tipo_Documento">
                                    <option value="{{ $apr->APREN_Tipo_Documento }}">Seleccione</option>
                                    <option value="CC">CC</option>
                                    <option value="TI">TI</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    <option value="Otro">Otro</option>                        
                                </select>                             
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese numero de identificacion:</label>
                                <input type="text" class="form-control" value="{{ $apr->APREN_Documento }}" id="APREN_Documento" name="APREN_Documento" placeholder="Documento" />
                            </div>
                        </div>  
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese genero del aprendiz:</label>
                                <select class="form-select" aria-label="Default select example" name="APREN_Genero" id="APREN_Genero">
                                    <option value="{{ $apr->APREN_Genero }}">Seleccione</option>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Otro">Otro</option>                        
                                </select>                             
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese correo electronico:</label>
                                <input type="email" class="form-control" value="{{ $apr->APREN_Correo }}" id="APREN_Correo" name="APREN_Correo" placeholder="Correo" />
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese telefono de contacto:</label>
                                <input type="number" class="form-control" value="{{ $apr->APREN_Telefono }}" id="APREN_Telefono" name="APREN_Telefono" placeholder="Telefono" />
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese estado del aprendiz:</label>
                                <select class="form-select" aria-label="Default select example" value="{{ $apr->APREN_Estado }}" name="APREN_Estado" id="APREN_Estado">
                                    <option value="{{ $apr->APREN_Estado }}">Seleccione</option>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>                             
                            </div>
                        </div>

                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Seleccione ficha:</label>
                                <select class="form-select" aria-label="Default select example" name="id_ficha" id="id_ficha">
                                   <option value="{{ $apr->id_ficha }}">Seleccione</option>
                                    @foreach ($ficha as $item)
                                    <option value="{{$item->id}}">{{$item->IdUnicoFicha}}</option>
                                    @endforeach
                                </select>                             
                            </div>
                         </div> 
                     </div>
                     <button class="btn btn-primary" type="submit">Guardar</button>
                 </div>
             </div>
        </form>
    </div>
    
@include('layouts.Footer')
   
@endsection