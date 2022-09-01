<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); 
});


Route::get('/c', function () {
    return view('content'); 
});

#region pais 
Route::get('Pais/insert', 'PaisController@ViewInsert')->name('ViewInsert');
Route::post('Pais/insert', 'PaisController@Insert')->name('Insert');
Route::get('Pais/view', 'PaisController@View')->name('ViewPais');
Route::get('Pais/delete/{id}', 'PaisController@DeletePais');
Route::get('Pais/update/{id}', 'PaisController@DatosUpdate')->name('ViewUpdate');
Route::post('Pais/update', 'PaisController@Update')->name('UpdatePais');
#endregion

#region municipio
Route::get('Municipio/insert', 'MunicipioController@ViewInsert')->name('ViewInsertMunicipio');
Route::post('Municipio/insert', 'MunicipioController@InsertMun')->name('InsertMunicipio');
Route::get('Municipio/view', 'MunicipioController@ViewMun')->name('ViewMunicipio');
Route::get('Municipio/delete/{id}', 'MunicipioController@DeleteMun');
Route::get('Municipio/update/{id}', 'MunicipioController@DatosUpdate')->name('DatosUpdateMun');
Route::post('Municipio/update', 'MunicipioController@Update')->name('UpdateMunicipio');
#endregion

#region departamento
Route::get('Departamento/insert', 'DepartamentoController@ViewInsert')->name('ViewInsertDepartamento');
Route::get('Departamento/view', 'DepartamentoController@ViewDepartamento')->name('ViewDepartamento');
Route::post('Departamento/insert', 'DepartamentoController@Insert')->name('InsertDepartamento');
Route::get('Departamento/delete/{id}', 'DepartamentoController@DeleteDep');
Route::get('Departamento/update/{id}', 'DepartamentoController@DatosUpdate')->name('DatosUpdate');
Route::post('Departamento/update', 'DepartamentoController@UpdateDep')->name('UpdateDep');
#endregion

#region jornada
Route::get('Jornada/insert', 'JornadaController@ViewInsert')->name('ViewInsertJornada');
Route::post('Jornada/insert', 'JornadaController@InsertJornada')->name('InsertJornada');
Route::get('Jornada/view', 'JornadaController@ViewJornada')->name('ViewJornada');
Route::get('Jornada/delete/{id}', 'JornadaController@DeleteJornada')->name('DeleteJornada');
Route::get('Jornada/update/{id}', 'JornadaController@DatosUpdate')->name('ViewUpdateJornada');
Route::post('Jornada/update', 'JornadaController@UpdateJornada')->name('UpdateJornada');
#endregion
 
#region sector
Route::get('Sector/insert', 'SectorController@ViewInsert')->name('ViewInsertSector');
Route::post('Sector/insert', 'SectorController@InsertSector')->name('InsertSector');
Route::get('Sector/view', 'SectorController@ViewSector')->name('ViewSector');
Route::get('Sector/delete/{id}', 'SectorController@DeleteSector')->name('DeleteSector');
Route::get('Sector/update/{id}', 'SectorController@DatosUpdate')->name('DatosUpdateSector');
Route::post('Sector/update', 'SectorController@UpdateSector')->name('SectorUpdateBD');
#endregion 

#region curso
Route::get('Curso/insert', 'CursoController@ViewInsert')->name('ViewInsertCurso');
Route::post('Curso/insert', 'CursoController@InsertCurso')->name('InsertCurso');
Route::get('Curso/view', 'CursoController@ViewCurso')->name('ViewCurso');
Route::get('Curso/delete/{id}', 'CursoController@DeleteCurso')->name('DeleteCurso');
Route::get('Curso/update/{id}', 'CursoController@DatosUpdate')->name('ViewUpdateCurso');
Route::post('Curso/update', 'CursoController@UpdateCurso')->name('UpdateCurso');
#endregion

#region empresa
Route::get('Empresa/insert', 'EmpresaController@ViewInsert')->name('ViewInsertEmpresa');
Route::post('Empresa/insert', 'EmpresaController@InsertEmpresa')->name('InsertEmpresa');
Route::get('Empresa/view', 'EmpresaController@ViewEmpresa')->name('ViewEmpresa');
Route::get('Empresa/delete/{id}', 'EmpresaController@DeleteEmpresa')->name('DeleteEmpresa');
Route::get('Empresa/update/{id}', 'EmpresaController@DatosUpdate')->name('ViewUpdateEmpresa');
Route::post('Empresa/update', 'EmpresaController@UpdateEmpresa')->name('UpdateEmpresas');
#endregion

#region convenio
Route::get('Convenio/insert', 'ConvenioController@ViewInsert')->name('ViewInsertConvenio');
Route::post('Convenio/insert', 'ConvenioController@InsertConvenio')->name('InsertConvenio');
Route::get('Convenio/view', 'ConvenioController@ViewConvenio')->name('ViewConvenio');
Route::get('Convenio/delete/{id}', 'ConvenioController@Deleteconvenio')->name('DeleteConvenio');
Route::get('Convenio/update/{id}', 'ConvenioController@DatosUpdate')->name('ViewUpdateConvenio');
Route::post('Convenio/update', 'ConvenioController@UpdateConvenio')->name('UpdateConvenio');
#endregion

#region programa de formacion
Route::get('ProgramaFormacion/insert', 'ProgramaFormController@ViewInsert')->name('ViewInsertPrograma');
Route::post('ProgramaFormacion/insert', 'ProgramaFormController@InsertPrograma')->name('InsertProgramaFor');
Route::get('ProgramaFormacion/view', 'ProgramaFormController@ViewPrograma')->name('ViewPrograma');
Route::get('ProgramaFormacion/delete/{id}', 'ProgramaFormController@DeletePrograma')->name('DeleteProgramaForm');
Route::get('ProgramaFormacion/update/{id}', 'ProgramaFormController@DatosUpdate')->name('ViewUpdateProgramaForm');
Route::post('ProgramaFormacion/update', 'ProgramaFormController@UpdatePrograma')->name('UpdateProgramaForm');
Route::get('ProgramaFormacion/updateFile/{id}', 'ProgramaFormController@ViewUpdateFile')->name('ViewUpdateFile');
Route::post('ProgramaFormacion/updateFile', 'ProgramaFormController@UpdateFile')->name('UpdateFilePrograma');
#endregion
 
#region programa especial
Route::get('ProgramaEspecial/insert', 'ProgramaEspController@ViewInsert')->name('ViewInsertEspecial');
Route::post('ProgramaEspecial/insert', 'ProgramaEspController@InsertEspecial')->name('InsertEspecial');
Route::get('ProgramaEspecial/view', 'ProgramaEspController@ViewEspecial')->name('ViewEspecial');
Route::get('ProgramaEspecial/delete/{id}', 'ProgramaEspController@DeleteEspecial')->name('DeleteEspecial');
Route::get('ProgramaEspecial/update/{id}', 'ProgramaEspController@ViewUpdate')->name('ViewUpdateEspecial');
Route::post('ProgramaEspecial/update', 'ProgramaEspController@UpdateEspecial')->name('UpdateEspecial');
#endregion

#region Regional
Route::get('Regional/insert', 'RegionalController@ViewInsert')->name('ViewInsertRegional');
Route::post('Regional/insert', 'RegionalController@InsertRegional')->name('InsertRegional');
Route::get('Regional/view', 'RegionalController@ViewRegional')->name('ViewRegional');
Route::get('Regional/delete/{id}', 'RegionalController@DeleteRegional')->name('DeleteRegional');
Route::get('Regional/update/{id}', 'RegionalController@ViewUpdate')->name('ViewUpdateRegional');
Route::post('Regional/update', 'RegionalController@UpdateRegional')->name('UpdateRegional');
#endregion

#region Centro
Route::get('Centro/insert', 'CentroController@ViewInsert')->name('ViewInsertCentro');
Route::post('Centro/insert', 'CentroController@InsertCentro')->name('InsertCentro');
Route::get('Centro/view', 'CentroController@ViewCentro')->name('ViewCentro');
Route::get('Centro/delete/{id}', 'CentroController@DeleteCentro')->name('DeleteCentro');
Route::get('Centro/update/{id}', 'CentroController@ViewUpdate')->name('ViewUpdateCentro');
Route::post('Centro/update', 'CentroController@UpdateCentro')->name('UpdateCentro');
#endregion

#region Ficha
Route::get('Ficha/insert', 'FichaController@ViewInsert')->name('ViewInsertFicha');
Route::post('Ficha/insert', 'FichaController@InsertFicha')->name('InsertFicha');
Route::get('Ficha/view', 'FichaController@ViewFicha')->name('ViewFicha');
Route::get('Ficha/delete/{id}', 'FichaController@DeleteFicha')->name('DeleteFicha');
Route::get('Ficha/update/{id}', 'FichaController@ViewUpdate')->name('ViewUpdateFicha');
Route::post('Ficha/update', 'FichaController@UpdateFicha')->name('UpdateFicha');
#endregion

#region Aprendiz
Route::get('Aprendiz/insert', 'AprendizController@ViewInsert')->name('ViewInsertAprendiz');
Route::post('Aprendiz/insert', 'AprendizController@InsertAprendiz')->name('InsertAprendiz');
Route::get('Aprendiz/view', 'AprendizController@ViewAprendiz')->name('ViewAprendiz');
Route::get('Aprendiz/delete/{id}', 'AprendizController@DeleteAprendiz')->name('DeleteAprendiz');
Route::get('Aprendiz/update/{id}', 'AprendizController@ViewUpdate')->name('ViewUpdateAprendiz');
Route::post('Aprendiz/update', 'AprendizController@UpdateAprendiz')->name('UpdateAprendiz');
#endregion

#region Ocupacion
Route::get('Ocupacion/insert', 'OcupacionController@ViewInsert')->name('ViewInsertOcupacion');
Route::post('Ocupacion/insert', 'OcupacionController@InsertOcupacion')->name('InsertOcupacion');
Route::get('Ocupacion/view', 'OcupacionController@ViewOcupacion')->name('ViewOcupacion');
Route::get('Ocupacion/delete/{id}', 'OcupacionController@DeleteOcupacion')->name('DeleteOcupacion');
Route::get('Ocupacion/update/{id}', 'OcupacionController@ViewUpdate')->name('ViewUpdateOcupacion');
Route::post('Ocupacion/update', 'OcupacionController@UpdateOcupacion')->name('UpdateOcupacion');
#endregion

#region Hora
Route::get('Hora/insert', 'HoraController@ViewInsert')->name('ViewInsertHora');
Route::post('Hora/insert', 'HoraController@InsertHora')->name('InsertHora');
Route::get('Hora/view', 'HoraController@ViewHora')->name('ViewHora');
Route::get('Hora/delete/{id}', 'HoraController@DeleteHora')->name('DeleteHora');
Route::get('Hora/update/{id}', 'HoraController@ViewUpdate')->name('ViewUpdateHora');
Route::post('Hora/update', 'HoraController@UpdateHora')->name('UpdateHora');
#endregion