<table>
    <tr>
        <th>ID</th>
        <th>Descripcion</th>
        <th>Precio de Venta</th>
        <th>Ingrediente Extra</th>
        <th>Disponibilidad</th>
    </tr>
    @foreach($consultaIngredientes as $ingrediente)
        <tr>
            <td>{{$ingrediente->id}}</td>
            <td>{{$ingrediente->descripcion}}</td>
            <td>{{$ingrediente->precioVenta}}</td>

            @if($ingrediente->ingredienteExtra == 1)
                <td>Si</td>
            @endif
            @if($ingrediente->ingredienteExtra == 0)
                <td>No</td>
            @endif
            @if($ingrediente->disponibilidad == 1)
            <td>Si</td>
        @endif
        @if($ingrediente->disponibilidad == 0)
            <td>No</td>
        @endif


        </tr>
    @endforeach



</table>
