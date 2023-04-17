<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Nuevo Ingrediente') }}
        </h2>
    </x-slot>


    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                {{-- Formulario nuevo alimento --}}
                <form action="{{route('ingrediente.store')}}" method="post">
                    @csrf
                    <div class="mb-6">
                        <label for="Nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                          Descripción:  </label>
                        <input type="text" id="Nombre" name="descripcion"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required>
                    </div>
                    <div class="mb-6">
                        <label for="precioVenta" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                          Precio de venta:  </label>
                        <input type="text" id="precioVenta" name="precioVenta"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                            placeholder="" required>
                    </div>

                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <input type="hidden" name="ingredienteExtra" value="0"/>

                            <input  id="checkbox-1" type="checkbox" name="ingredienteExtra" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
                            <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Ingrediente Extra</label>
                        </div>
                    </div>
                    
                    <div class="mb-6">
                        <div class="flex items-center mb-4">
                            <input type="hidden" name="disponible" value="0"/>

                            <input  id="checkbox-1" type="checkbox" name="disponible" value="1" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600" >
                            <label for="checkbox-1" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Disponible</label>
                        </div>
                    </div>
                    
                    <button type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Agregar</button>
                </form>


            </div>
        </div>
    </div>
</x-app-layout>
