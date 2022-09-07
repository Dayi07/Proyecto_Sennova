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
                            <h2 class="content-header-title float-start mb-0">Pais</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb"> 
                                    <li class="breadcrumb-item"><a href="{{ route('ViewPais') }}">Listado</a>
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
                <form action="{{ route('UpdatePais') }}" method="POST">
                    @csrf
                    <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Actualizar Pais</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-xl-4 col-md-6 col-12">
                                     <div class="mb-1">
                                        <input type="hidden" value="{{ $pais->id}}" name="id" id="id">
 
                                        <label class="form-label" for="basicInput">Ingrese nombre del pais:</label>
                                        <input type="text" value="{{$pais->PAISC_Nombre}}" class="form-control" id="PAISC_Nombre" name="PAISC_Nombre" placeholder="Pais" />
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