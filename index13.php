<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DataTable</title>
    <link rel="stylesheet" href = "https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
</head>
<body>
    <h1> titulosformativos</h1>
    <table id="titulosformativos">
    <thead>
        <tr>
            <th>id_titulosformativos</th>
            <th>nombre_titulo</th>
           
            
       </tr>
       </thead>
       <tbody>
        <?php 
        $mysqli = new mysqli("localhost", "root","", "yamilka");
        $consulta = "SELECT * FROM titulosformativos";
        if($resultado = $mysqli->query($consulta)){
            while($datos = $resultado->fetch_object()){
       ?>
       
        <tr>
            <td><?php printf($datos-> id_titulosformativos);?></td>
            <td><?php printf($datos-> nombre_titulo);?></td>
            
        </tr>
        <?php } $resultado->close(); }?>
        </tbody>
        </table>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script>let table = new DataTable('#titulosformativos');</script>



