<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <table border>
        <tr>
            <td><a href="{{ route('ViewInsert') }}"> Insertar Pais </a></td>
            <td><a href="{{ route('ViewInsertDepartamento') }}"> Insertar Departamento </a></td>
           <td><a href="{{ route('ViewInsertMunicipio') }}"> Insertar Municipio  </a></td>
            <td><a href="{{ route('ViewInsertJornada') }}"> Insertar Jornada </a></td>
            <td><a href="{{ route('ViewInsertSector') }}"> Insertar Sector </a></td>
            <td><a href="{{ route('ViewInsertCurso') }}"> Insertar Curso </a></td>            
            <td><a href="{{ route('ViewInsertEmpresa') }}">Insertar Empresa</a></td>
            <td><a href="{{route('ViewInsertConvenio')}}">Insertar Convenio</a></td>
            <td><a href="{{ route('ViewInsertPrograma') }}">Insertar Programa de Formacion</a></td>
            <td><a href="{{ route('ViewInsertEspecial') }}">Insertar Programa de Formacion Especial</a></td>
            <td><a href="{{ route('ViewInsertRegional') }}">Insertar Regional</a></td>
            <td><a href="{{ route('ViewInsertCentro') }}">Insertar Centro</a></td>
            <td><a href="{{ route('ViewInsertFicha') }}">Insertar Ficha</a></td>
            <td><a href="{{ route('ViewInsertAprendiz') }}">Insertar Aprendiz</a></td>
            <td><a href="{{ route('ViewInsertOcupacion') }}">Insertar Ocupacion</a></td>
            <td><a href="{{ route('ViewInsertHora') }}">Insertar Hora</a></td>
        </tr>
        <tr>
            <td><a href="{{ route('ViewMunicipio') }}">Ver Municipio</a></td>
            <td><a href="{{ route('ViewPais') }}">Ver Pais</a></td>
            <td><a href="{{ route('ViewDepartamento') }}">Ver Departamento</a></td>
            <td><a href="{{ route('ViewJornada') }}">Ver Jornada</a></td>
            <td><a href="{{ route('ViewSector') }}">Ver Sector</a></td>
            <td><a href="{{ route('ViewCurso') }}">Ver Curso</a></td>
            <td><a href="{{ route('ViewEmpresa') }}"> Ver Empresa</a></td>
            <td><a href="{{ route('ViewConvenio') }}"> Ver Convenio</a></td>
            <td><a href="{{ route('ViewPrograma') }}"> Ver Programa de Formacion</a></td>
            <td><a href="{{ route('ViewEspecial') }}">Ver Programa de Formacion Especial</a></td>
            <td><a href="{{ route('ViewRegional') }}">Ver Regional</a></td>
            <td><a href="{{ route('ViewCentro') }}">Ver Centro</a></td>
            <td><a href="{{ route('ViewFicha') }}">Ver Ficha</a></td>
            <td><a href="{{ route('ViewAprendiz') }}">Ver Aprendiz</a></td>
            <td><a href="{{ route('ViewOcupacion') }}">Ver Ocupacion</a></td>
            <td><a href="{{ route('ViewHora') }}">Ver Hora</a></td>
        </tr>
    </table> <br><br><br><br>
    

<body>

    @yield('form')


    <script type="text/javascript">
            
        function eliminar(id){
                
            swal({
                title: "¿Estas seguro de eliminar?",
                text: "Si eliminas este elemento no podra ser recuperado",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
                
            .then((willDelete) => {
                           
                if (willDelete) {
                    location.href = "delete/" + id + "/";
                
                    swal("Poof! El elemento fue eliminado!", {
                    icon: "success",
                    });    
                
                } else {
                    swal("El elemento no se elimino");
                }
            });     
        }
                
                
    </script>   

</body>
</html>