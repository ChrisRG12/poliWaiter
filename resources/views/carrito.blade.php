<!DOCTYPE html>
<html>
<head>
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Carrito de Compras</h1>
    
    @if (count($productos) > 0)
        <table>
            <thead>
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($productos as $producto)
                    <tr>
                        <td>{{ $producto['nombre'] }}</td>
                        <td>{{ $producto['precio'] }}</td>
                        <td>{{ $producto['cantidad'] }}</td>
                        <td>{{ $producto['subtotal'] }}</td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3">Total</td>
                    <td>{{ $total }}</td>
                </tr>
            </tfoot>
        </table>
    @else
        <p>No hay productos en el carrito.</p>
    @endif
    
    <a href="/productos">Seguir comprando</a>
    <a href="/checkout">Ir al checkout</a>
</body>
</html>

