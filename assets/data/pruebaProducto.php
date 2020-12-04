<?php
    include('conexion.php');
    
    $obj = new Conexion;

    $res = $obj->buscarProducto();
    /*print_r($res);
    echo '<br><br>';*/

echo '<table>
        <tr>
<th>ID</th>
<th>Nombre</th>
<th>Descripcion</th>
<th>Precio de Venta</th>
<th>Precio de Compra</th>
<th>Stock</th>
<th>URL de imagen</th>
        </tr>
        ';

    foreach($res as $filas){
        echo '<tr>';
        echo '<td>' . $filas['idPro'] . '</td>';
        echo '<td>' . $filas['nombre_producto'] . '</td>';
        echo '<td>' . $filas['descripcion_producto'] . '</td>';
        echo '<td>' . $filas['precio_venta'] . '</td>';
        echo '<td>' . $filas['precio_compra'] . '</td>';
        echo '<td>' . $filas['stock'] . '</td>';
        echo '<td>' . $filas['url_img'] . '</td>';
        echo '</td>';
    }
echo '</table>';
echo '<br><br><br>';

json_encode($res, JSON_FORCE_OBJECT);

print_r($res);
echo '<br><br><br>';
$temp = array();

$temp = $res;



print("idPro:  " . $temp[1]['nombre_producto'] . '<br>');
print("Nombre: " . $temp[1]['descripcion_producto'] . '<br>');
print("Precio_Venta: " . $temp[1]['precio_venta'] . '<br>');
print("url_img: " . $temp[1]['url_img'] . '<br>');


?>