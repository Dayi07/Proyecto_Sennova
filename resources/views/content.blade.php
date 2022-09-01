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
                        <h2 class="content-header-title float-start mb-0">Pais</h2>
                        <div class="breadcrumb-wrapper">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Listado</a>
                                </li>
                                
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">

            <section id="basic-input">
                <div class="row">
                    <div class="col-md-12">
                    <div class="card">
                         <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">First</th>
                                <th scope="col">Last</th>
                                <th scope="col">Handle</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <th scope="row">3</th>
                                <td colspan="2">Larry the Bird</td>
                                <td>@twitter</td>
                              </tr>
                            </tbody>
                          </table>
                     </div>
            </div>
        </div>
    </div>


    <div class="content-body">
        <form action="{{ route('Insert') }}" method="POST">
            @csrf
            <div class="card">
                 <div class="card-header">
                     <h4 class="card-title">Insertar Pais</h4>
                 </div>
                 <div class="card-body">
                     <div class="row">
                         <div class="col-xl-4 col-md-6 col-12">
                             <div class="mb-1">
                                 <label class="form-label" for="basicInput">Ingrese nombre del pais:</label>
                                 <input type="text" class="form-control" id="NombrePaisCurso" name="NombrePaisCurso" placeholder="Pais" />
                             </div>
                         </div>        
                     </div>
                     <button class="btn btn-primary" type="submit">Guardar</button>
                 </div>
             </div>
        </form>
    </div>
    
    @endsection