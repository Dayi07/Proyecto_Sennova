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
                            <h2 class="content-header-title float-start mb-0">Programa de formacion</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('ViewPrograma') }}">Listado</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="{{ route('ViewInsertPrograma') }}">Insertar</a>
                                    </li>                   
                                </ol>
                            </div>
                        </div> 
                    </div>
                </div>
            </div> 
        <section id="basic-input" class="tootip-validations">                     
            <div class="content-body">
                <form class="needs-validation" action="{{ route('InsertProgramaFor') }}" method="POST" novalidate>
                    @csrf
                    <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Insertar Programa de formacion</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-xl-4 col-md-6 col-12">
                                     <div class="mb-1">
                                         <label class="form-label" for="PROGR_Nombre">Ingrese nombre del Programa de Formacion:</label>
                                         <input type="text" class="form-control" id="PROGR_Nombre" name="PROGR_Nombre" placeholder="Nombre"  required/>
                                         <div class="invalid-tooltip">El nombre es obligatorio.</div>
                                     </div>
                                 </div> 
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="PROGR_Modalidad">Ingrese modalidad de formacion:</label>
                                        <input type="text" class="form-control" id="PROGR_Modalidad" name="PROGR_Modalidad" placeholder="Modalidad"  required/>
                                        <div class="invalid-tooltip">La modalidad es obligatoria.</div>
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="PROGR_Tipo_Formacion">Ingrese tipo de formacion:</label>
                                        <input type="text" class="form-control" id="PROGR_Tipo_Formacion" name="PROGR_Tipo_Formacion" placeholder="Tipo"  required/>
                                        <div class="invalid-tooltip">El tipo es obligatorio.</div>
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="PROGR_Duracion">Ingrese duracion del programa:</label>
                                        <input type="text" class="form-control" id="PROGR_Duracion" name="PROGR_Duracion" placeholder="Duracion"  required/>
                                        <div class="invalid-tooltip">La duracion es obligatoria.</div>
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="PROGR_Version">Ingrese version del programa:</label>
                                        <input type="text" class="form-control" id="PROGR_Version" name="PROGR_Version" placeholder="Version"  required/>
                                        <div class="invalid-tooltip">La version es obligatoria.</div>
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="PROGR_Nivel">Ingrese nivel del programa:</label>
                                        <input type="text" class="form-control" id="PROGR_Nivel" name="PROGR_Nivel" placeholder="Nivel"  required/>
                                        <div class="invalid-tooltip">El nivel es obligatorio.</div>
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
                                    <label for="PROGR_URL" class="form-label">PDF del programa</label>
                                    <input class="form-control" type="file" name="PROGR_URL" id="PROGR_URL" accept=".pdf" required/>
                                    <div class="invalid-tooltip">El PDF es obligatorio.</div> 
                                </div>      
                             </div> 
                             <button class="btn btn-primary" type="submit">Guardar</button>
                         </div>
                     </div>
                </form>
            </div>
        </section>
        </div>
    </div>

@endsection