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
                        <h2 class="content-header-title float-start mb-0">Aprendiz</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('ViewAprendiz') }}">Listado</a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{ route('ViewInsertAprendiz') }}">Insertar</a>
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
        <form class="needs-validation" method="POST" action="{{ route('InsertAprendiz') }}" novalidate>
            @csrf
            <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Insertar Aprendiz</h4>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-xl-4 col-md-6 col-12">
                             <div class="mb-1">
                                 <label class="form-label" for="APREN_Nombre">Ingrese nombre del aprendiz:</label>
                                 <input type="text" class="form-control" id="APREN_Nombre" name="APREN_Nombre" placeholder="Nombre" required/>
                                 <div class="invalid-tooltip">El nombre es obligatorio.</div>
                             </div>
                         </div>
                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="APREN_Tipo_Documento">Ingrese tipo de identificacion:</label>
                                <select class="form-select" aria-label="Default select example" name="APREN_Tipo_Documento" id="APREN_Tipo_Documento" required>
                                    <option value="CC">CC</option>
                                    <option value="TI">TI</option>
                                    <option value="Pasaporte">Pasaporte</option>
                                    <option value="Otro">Otro</option>                        
                                </select>   
                                <div class="invalid-tooltip">El tipo es obligatorio.</div>                          
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="APREN_Documento">Ingrese numero de identificacion:</label>
                                <input type="text" class="form-control" id="APREN_Documento" name="APREN_Documento" placeholder="Documento"  required/>
                                <div class="invalid-tooltip">El documento es obligatorio.</div>
                            </div>
                        </div>  
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="APREN_Genero">Ingrese genero del aprendiz:</label>
                                <select class="form-select" aria-label="Default select example" name="APREN_Genero" id="APREN_Genero" required>
                                    <option value="Femenino">Femenino</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Otro">Otro</option>                        
                                </select> 
                                <div class="invalid-tooltip">El genero es obligatorio.</div>                            
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="APREN_Correo">Ingrese correo electronico:</label>
                                <input type="email" class="form-control" id="APREN_Correo" name="APREN_Correo" placeholder="Correo"  required/>
                                <div class="invalid-tooltip">El correo es obligatorio.</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="APREN_Telefono">Ingrese telefono de contacto:</label>
                                <input type="number" class="form-control" id="APREN_Telefono" name="APREN_Telefono" placeholder="Telefono"  required/>
                                <div class="invalid-tooltip">El telefono es obligatorio.</div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="APREN_Estado">Ingrese estado del aprendiz:</label>
                                <select class="form-select" aria-label="Default select example" name="APREN_Estado" id="APREN_Estado" required>
                                    <option value="Activo">Activo</option>
                                    <option value="Inactivo">Inactivo</option>
                                </select>
                                <div class="invalid-tooltip">El estado es obligatorio.</div>                             
                            </div>
                        </div>

                         <div class="col-xl-4 col-md-6 col-12">
                            <div class="mb-1">
                                <label class="form-label" for="id_ficha">Seleccione ficha:</label>
                                <select class="form-select" aria-label="Default select example" name="id_ficha" id="id_ficha" required>
                                    @foreach ($ficha as $item)
                                    <option value="{{$item->id}}">{{$item->FICHA_Identificador_Unico}}</option>
                                    @endforeach
                                </select>  
                                <div class="invalid-tooltip">La ficha es obligatoria.</div>                           
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