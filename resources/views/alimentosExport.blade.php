<table>
    <tr>
        <th>ID</th>
        <th>Descripcion</th>
        <th>Precio de Venta</th>
        <th>Tipo de Alimento</th>
    </tr>
    @foreach($consultaAlimentos as $alimento)
        <tr>
            <td>{{$alimento->id}}</td>
            <td>{{$alimento->descripcion}}</td>
            <td>{{$alimento->precioVenta}}</td>
            <td>{{$alimento->tipoAlimento}}</td>
        </tr>
    @endforeach



</table>
