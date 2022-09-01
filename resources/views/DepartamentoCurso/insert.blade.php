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
                        <h2 class="content-header-title float-start mb-0">Departamento</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('ViewDepartamento') }}">Listado</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('ViewInsertDepartamento') }}">Insertar</a>
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
        <form class="needs-validation" action="{{ route('InsertDepartamento') }}" method="POST" novalidate>
            @csrf
            <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Insertar Departamento</h4>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-xl-4 col-md-6 col-12">
                             <div class="mb-1">
                                 <label class="form-label" for="DEPAR_Nombre">Ingrese nombre del Departamento:</label>
                                 <input type="text" class="form-control" id="DEPAR_Nombre" name="DEPAR_Nombre" placeholder="Departamento"  required/>
                                 <div class="invalid-tooltip">El nombre es obligatorio.</div>
                             </div>
                         </div>  

                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="id_pais">Seleccione nombre del pais:</label>
                                <select class="form-select" aria-label="Default select example" name="id_pais" id="id_pais" required>
                                   @foreach ($infopais as $item)
                                    <option value="{{ $item->id }}">{{$item->PAISC_Nombre}} </option>
                                @endforeach
                                </select>  
                                <div class="invalid-tooltip">El pais es obligatorio.</div>
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
    @endsection