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
                        <h2 class="content-header-title float-start mb-0">Horas</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('ViewHora') }}">Listado</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('ViewInsertHora') }}">Insertar</a>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
<section id="basic-input" class="tootip-validations">            
    <div class="content-body">
        <form class="needs-validation" action="{{ route('InsertHora') }}" method="POST" novalidate>
            @csrf
            <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Insertar Horas</h4>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-xl-4 col-md-6 col-12">
                             <div class="mb-1">
                                 <label class="form-label" for="HORAS_Monitores">Ingrese horas de monitores:</label>
                                 <input type="text" class="form-control" id="HORAS_Monitores" name="HORAS_Monitores" placeholder="Horas"  required/>
                                 <div class="invalid-tooltip">Las horas de monitores son obligatorias.</div>
                             </div>
                         </div>
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="HORAS_Inst_Empresa">Ingrese horas de empresa:</label>
                                <input type="number" class="form-control" id="HORAS_Inst_Empresa" name="HORAS_Inst_Empresa" placeholder="Horas"  required/>
                                <div class="invalid-tooltip">Las horas de empresa son obligatorias.</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="HORAS_Contratista_Externo">Ingrese horas de contratista externo:</label>
                                <input type="number" class="form-control" id="HORAS_Contratista_Externo" name="HORAS_Contratista_Externo" placeholder="Horas"  required/>
                                <div class="invalid-tooltip">Las horas de contratistas son obligatorias.</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="HORAS_Planta">Ingrese horas planta:</label>
                                <input type="number" class="form-control" id="HORAS_Planta" name="HORAS_Planta" placeholder="Horas"  required/>
                                <div class="invalid-tooltip">Las horas planta son obligatorias.</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="HORAS_Total">Ingrese total de horas:</label>
                                <input type="number" class="form-control" id="HORAS_Total" name="HORAS_Total" placeholder="Total"  required/>
                                <div class="invalid-tooltip">El total de horas son obligatorias.</div>
                            </div>
                        </div>
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="id_ocupacion">Seleccione ocupacion:</label>
                                <select class="form-select" aria-label="Default select example" name="id_ocupacion" id="id_ocupacion" required>
                                    @foreach ($ocu as $item)
                                    <option value="{{$item->id}}">{{$item->OCUPA_Nombre}}</option>
                                    @endforeach
                                </select>                             
                                <div class="invalid-tooltip">La ocupacion es obligatoria.</div>
                            </div>
                         </div> 
                     </div>
                     <button class="btn btn-primary" type="submit">Guardar</button>
                 </div>
             </div>
        </form>
    </div>
    
@endsection