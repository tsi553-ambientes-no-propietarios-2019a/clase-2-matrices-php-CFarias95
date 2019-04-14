<?php

$Datos = array(
    array(
            'Nombre' => 'Carlos',
            'Apellido' => 'Farias',
            'Edad' => 21
    ),
    array(
            'Nombre' => 'Juan',
            'Apellido' => 'Mera',
            'Edad' => 22
    ),
    array(
            'Nombre' => 'Pamela',
            'Apellido' => 'Bueno',
            'Edad' => 22
    )
    );

echo'<center>'; 
echo'<h1>Deber</h1>';
echo'<h2>Tabla en PHP</h2>'; 
echo '<table width="50%" border="1">';
echo ' 
<thead>
    <tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Edad</th>                
    </tr>
</thead>';
foreach ( $Datos as $row ) {
        echo '<tr>';
        foreach ( $row as $key ) {
                echo '<td>'.$key.'</td>';
        }
        echo '</tr>';
}
echo '</table>';
echo'</center>';
