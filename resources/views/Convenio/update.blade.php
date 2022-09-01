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
                            <h2 class="content-header-title float-start mb-0">Convenios</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <<li class="breadcrumb-item"><a href="{{ route('ViewConvenio') }}">Listado</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="">Actualizar</a>
                                    </li>                    
                                </ol>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>      
            <div class="content-body">
                <form action="{{ route('UpdateConvenio') }}" method="POST">
                    @csrf
                    <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Actualizar Convenio</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-xl-4 col-md-6 col-12">
                                     <div class="mb-1">
                                         <input type="hidden" value="{{$con->id}}" name="id" id="id">

                                         <label class="form-label" for="basicInput">Ingrese nombre del convenio:</label>
                                         <input type="text" class="form-control" value="{{ $con->CONVE_Nombre }}" id="CONVE_Nombre" name="CONVE_Nombre" placeholder="Nombre" />
                                     </div>
                                 </div> 
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese cobertura:</label>
                                        <input type="text" class="form-control" value="{{ $con->CONVE_Ampliacion_Covertura }}" id="CONVE_Ampliacion_Covertura" name="CONVE_Ampliacion_Covertura" placeholder="Covertura" />
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Seleccione sector al que apoya:</label>
                                        <select class="form-select" aria-label="Default select example" name="id_sector" id="id_sector">
                                            <option value="{{ $con->id_sector }}"> Seleccione </option>
                                            @foreach ($sec as $item)
                                            <option value="{{ $item->id }}">{{$item->SECTO_Nombre}} </option>
                                            @endforeach
                                        </select>                             
                                    </div>
                                 </div>
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Seleccione empresa patrocinadora:</label>
                                        <select class="form-select" aria-label="Default select example" name="id_empresa" id="id_empresa">
                                            <option value="{{ $con->id_empresa }}"> Seleccione </option>
                                            @foreach ($emp as $item)
                                            <option value="{{ $item->id }}">{{$item->EMPRE_Nombre}} </option>
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
        </div>
    </div>

@endsection