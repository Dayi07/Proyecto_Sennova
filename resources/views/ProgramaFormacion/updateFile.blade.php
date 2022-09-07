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
                            <h2 class="content-header-title float-start mb-0">Programa de formacion</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('ViewPrograma') }}">Listado</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href=" ">Actualizar PDF</a>
                                    </li>                   
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>      
            <div class="content-body">
                <form action="{{ route('UpdateFilePrograma') }}" method="POST">
                    @csrf
                    <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Actualizar PDF del programa de formacion</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-lg-6 col-md-12 mb-1 mb-sm-0">
                                    <input type="hidden" value="{{$pro->id}}" name="id" id="id">
                                    <label for="formFile" class="form-label">PDF del programa</label>
                                    <input class="form-control" type="file" name="PROGR_URL" id="PROGR_URL" accept=".pdf"/>
                                </div>      
                             </div><br>
                             <button class="btn btn-primary" type="submit">Guardar</button>
                         </div>
                     </div>
                </form>
            </div>
        </div>
    </div>
    @include('layouts.Footer')

@endsection