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
                            <h2 class="content-header-title float-start mb-0">Empresa</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('ViewEmpresa') }}">Listado</a>
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
                <form action="{{ route('UpdateEmpresas') }}" method="POST">
                    @csrf
                    <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Actualizar Empresa</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-xl-4 col-md-6 col-12">
                                     <div class="mb-1">
                                         <input type="hidden" value="{{$emp->id}}" name="id" id="id">

                                         <label class="form-label" for="basicInput">Ingrese nombre de la empresa:</label>
                                         <input type="text" class="form-control" value="{{$emp->EMPRE_Nombre}}" id="EMPRE_Nombre" name="EMPRE_Nombre" placeholder="Nombre" />
                                     </div>
                                 </div> 
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese tipo de identificacion:</label>
                                        <input type="text" class="form-control" value="{{$emp->EMPRE_Tipo_Identificacion}}" id="EMPRE_Tipo_Identificacion" name="EMPRE_Tipo_Identificacion" placeholder="Tipo Identificacion" />
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="basicInput">Ingrese identificacion de la empresa:</label>
                                        <input type="number" class="form-control" value="{{$emp->EMPRE_Id_Empresa}}" id="EMPRE_Id_Empresa" name="EMPRE_Id_Empresa" placeholder="Identificacion" />
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