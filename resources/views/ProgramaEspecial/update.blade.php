@extends('welcome')

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
                                    <li class="breadcrumb-item"><a href=" ">Actualizar</a>
                                    </li>                   
                                </ol>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>      
            <div class="content-body">
                <form action="{{ route('UpdateEspecial') }}" method="POST">
                    @csrf
                    <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Actualizar Programa de formacion especial</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-xl-4 col-md-6 col-12">
                                     <div class="mb-1">
                                         <input type="hidden" value="{{ $esp->id }}" name="id" id="id">
                                         <input type="hidden" value="{{ $esp->PROGE_URL }}" name="PROGE_URL" id="PROGE_URL">
                                
                                         <label class="form-label" for="basicInput">Ingrese nombre del Programa de Formacion:</label>
                                         <input type="text" class="form-control" value="{{ $esp->PROGE_Nombre }}" id="PROGE_Nombre" name="PROGE_Nombre" placeholder="Nombre" />
                                     </div>
                                 </div> 
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese modalidad de formacion:</label>
                                        <input type="text" class="form-control" value="{{ $esp->PROGE_Modalidad }}" id="PROGE_Modalidad" name="PROGE_Modalidad" placeholder="Modalidad" />
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Seleccione sector perteneciente:</label>
                                        <select class="form-select" aria-label="Default select example" name="id_sector" id="id_sector">
                                            @foreach ($sec as $item)
                                            <option value="{{ $item->id }}">{{$item->NombreSector}} </option>
                                            @endforeach
                                        </select>                             
                                    </div>
                                 </div>      
                             </div><br>
                             <button class="btn btn-primary" type="submit">Guardar</button>
                         </div>
                     </div>
                </form>
            </div>
        </div>
    </div>

@endsection