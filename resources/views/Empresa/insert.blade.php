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
                                    <li class="breadcrumb-item"><a href="{{ route('ViewInsertEmpresa') }}">Insertar</a>
                                    </li>                   
                                </ol>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>    
        <section id="basic-input" class="tootip-validations">          
            <div class="content-body">
                <form class="needs-validation" action="{{ route('InsertEmpresa') }}" method="POST" novalidate>
                    @csrf
                    <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Insertar Empresa</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                 <div class="col-xl-4 col-md-6 col-12">
                                     <div class="mb-1">
                                         <label class="form-label" for="EMPRE_Nombre">Ingrese nombre de la empresa:</label>
                                         <input type="text" class="form-control" id="EMPRE_Nombre" name="EMPRE_Nombre" placeholder="Nombre" required/>
                                         <div class="invalid-tooltip">El nombre es obligatorio.</div>
                                     </div>
                                 </div> 
                                 <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="EMPRE_Tipo_Identificacion">Ingrese tipo de identificacion:</label>
                                        <input type="text" class="form-control" id="EMPRE_Tipo_Identificacion" name="EMPRE_Tipo_Identificacion" placeholder="Tipo Identificacion" required/>
                                        <div class="invalid-tooltip">El tipo es obligatorio.</div>
                                    </div>
                                </div> 
                                <div class="col-xl-4 col-md-6 col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="EMPRE_Id_Empresa">Ingrese identificacion de la empresa:</label>
                                        <input type="number" class="form-control" id="EMPRE_Id_Empresa" name="EMPRE_Id_Empresa" placeholder="Identificacion" required/>
                                        <div class="invalid-tooltip">La identificacion es obligatoria.</div>
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
    </div>

@endsection