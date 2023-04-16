<ul id="navMenu" class="mt-8 text-2xl font-medium text-gray-900 dark:text-white"
    style="display: flex;
justify-content: center; margin-bottom:10px">
    <li style=" display: inline;
    margin-left: 30px;"><a href="{{route('menuAlimentos')}}" > Alimentos</a> </li>
    <li style=" display: inline;
    margin-left: 30px;"><u><a href="{{route('menuBebidas')}}" style="color:#6A75ED;">Bebidas</a></u> </li>
    <li style=" display: inline;
    margin-left: 30px;"><a href="{{route('menuSnacks')}}">Snacks</a></li>
</ul>

{{-- Cards del menú --}}


<ul style="display: flex;
justify-content: center; margin-bottom: 35px
">

    <li style=" display: inline;
    margin-left: 30px;">
        <div class="cardsMenu" style="display: flex; justify-content: center;">
            <div class="tarjeta"
                style="display: flex;
        flex-direction: column;
        justify-content: space-between;
        width: 300px;
        
        border: 1px solid lightgray;
        box-shadow: 2px 2px 8px 4px #d3d3d3d1;
        border-radius: 15px;
        font-family: sans-serif;">
                <div class="titulo"
                    style="font-size: 24px;
            padding: 10px 10px 0 10px; background: #6A75ED;  border-radius:15px 15px 0 0; color:white; text-align:center">
                    Boing</div>
                <div class="cuerpo" style="display:flex; justify-content:center">
                    <img src="{{ asset('imgs/boing.jpg') }}" alt="muestra" style="width:350px; height:350px">

                </div>
                <div class="pie"
                    style="background: #6A75ED;
            border-radius:0 0 15px 15px;
            padding: 10px;
            text-align:center; color:white">
                    <a href="#">Comprar</a>
                </div>
            </div>
        </div>
    </li>


    <li style=" display: inline;
    margin-left: 30px;">
        <div class="cardsMenu" style="display: flex; justify-content: center;">
            <div class="tarjeta"
                style="display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 300px;
            
            border: 1px solid lightgray;
            box-shadow: 2px 2px 8px 4px #d3d3d3d1;
            border-radius: 15px;
            font-family: sans-serif;">
                <div class="titulo"
                    style="font-size: 24px;
                padding: 10px 10px 0 10px; background: #6A75ED;  border-radius:15px 15px 0 0; color:white; text-align:center">
                    Coca-Cola</div>
                <div class="cuerpo" style="display:flex; justify-content:center">
                    <img src="{{ asset('imgs/cocacola.jpg') }}" alt="muestra" style="width:350px; height:350px">

                </div>
                <div class="pie"
                    style="background: #6A75ED;
                border-radius:0 0 15px 15px;
                padding: 10px;
                text-align:center; color:white">
                    <a href="#">Comprar</a>
                </div>
            </div>
        </div>
    </li>
    <li style=" display: inline;
    margin-left: 30px;">
        <div class="cardsMenu" style="display: flex; justify-content: center;">
            <div class="tarjeta"
                style="display: flex;
            flex-direction: column;
            justify-content: space-between;
            width: 300px;
            
            border: 1px solid lightgray;
            box-shadow: 2px 2px 8px 4px #d3d3d3d1;
            border-radius: 15px;
            font-family: sans-serif;">
                <div class="titulo"
                    style="font-size: 24px;
                padding: 10px 10px 0 10px; background: #6A75ED;  border-radius:15px 15px 0 0; color:white; text-align:center">
                    Agua de Jamaica</div>
                <div class="cuerpo" style="display:flex; justify-content:center">
                    <img src="{{ asset('imgs/aguaJamaica.jpg') }}" alt="muestra" style="width:350px; height:350px">

                </div>
                <div class="pie"
                    style="background: #6A75ED;
                border-radius:0 0 15px 15px;
                padding: 10px;
                text-align:center; color:white">
                    <a href="#">Comprar</a>
                </div>
            </div>
        </div>
    </li>
</ul>
