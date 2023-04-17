<ul id="navMenu" class="mt-8 text-2xl font-medium text-gray-900 dark:text-white"
    style="display: flex;
justify-content: center; margin-bottom:10px">
    <li style=" display: inline;
    margin-left: 30px;"><u><a href="{{route('menuAlimentos')}}" style="color:#6A75ED;"> Alimentos</a> </u> </li>
    <li style=" display: inline;
    margin-left: 30px;"> <a href="{{route('menuBebidas')}}">Bebidas</a></li>
    <li style=" display: inline;
    margin-left: 30px;"><a href="{{route('menuSnacks')}}">Snacks</a></li>
</ul>


<div class="relative overflow-x-auto">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ID
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripción
                </th>
                <th scope="col" class="px-6 py-3">
                    Precio de Venta
                </th>
                <th scope="col" class="px-6 py-3">
                    Tipo de Alimento
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($consultaAlimentos as $Alimento)
                        <tr>
                            <td>{{$Alimento->id}}</td>
                            <td>{{ $Alimento->descripcion }}</td>
                            <td>${{ $Alimento->precioVenta }}</td>
                            @if ($Alimento->tipoAlimento == 1)
                                <td class="" style="color:">Comida</td>
                            @endif
                            @if ($Alimento->tipoAlimento == 2)
                                <td class="" style="color:">Bebida</td>
                            @endif
                            @if ($Alimento->tipoAlimento == 3)
                                <td class="" style="color:">Snack</td>
                            @endif
                            <td>
                                <div class="btn-group" role="group" aria-label="Basic outlined example">
                                    
                                    <a href="" class="btn btn-outline-warning" type="button">Actualizar</a>
                                    

                                    <a href="" type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#eliminarAlimento{{$Alimento->id}}"> Eliminar Ingrediente </a>

                                </div>
                            </td>

                        </tr>
                        
            @endforeach
            
        </tbody>
    </table>
</div>


