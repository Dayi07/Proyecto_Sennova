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
                        <h2 class="content-header-title float-start mb-0">Horas</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('ViewHora') }}">Listado</a>
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
        <form action="{{ route('UpdateHora') }}" method="POST">
            @csrf
            <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Actualizar Horas</h4>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-xl-4 col-md-6 col-12">
                             <div class="mb-1">
                                 <input type="hidden" value="{{ $hor->id }}" id="id" name="id">

                                 <label class="form-label" for="basicInput">Ingrese horas de monitores:</label>
                                 <input type="text" class="form-control" value="{{ $hor->HORAS_Monitores }}" id="HORAS_Monitores" name="HORAS_Monitores" placeholder="Horas" />
                             </div>
                         </div>
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese horas de empresa:</label>
                                <input type="number" class="form-control" value="{{ $hor->HORAS_Inst_Empresa }}" id="HORAS_Inst_Empresa" name="HORAS_Inst_Empresa" placeholder="Horas" />
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese horas de contratista externo:</label>
                                <input type="number" class="form-control" value="{{ $hor->HORAS_Contratista_Externo }}" id="HORAS_Contratista_Externo" name="HORAS_Contratista_Externo" placeholder="Horas" />
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese horas planta:</label>
                                <input type="number" class="form-control" value="{{ $hor->HORAS_Planta }}" id="HORAS_Planta" name="HORAS_Planta" placeholder="Horas" />
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Ingrese total de horas:</label>
                                <input type="number" class="form-control" value="{{ $hor->HORAS_Total }}" id="HORAS_Total" name="HORAS_Total" placeholder="Total" />
                            </div>
                        </div>
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="basicInput">Seleccione ocupacion:</label>
                                <select class="form-select" aria-label="Default select example" name="id_ocupacion" id="id_ocupacion">
                                    <option value="{{$hor->id_ocupacion}}">Seleccione</option>
                                    @foreach ($ocu as $item)
                                    <option value="{{$item->id}}">{{$item->OCUPA_Nombre}}</option>
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