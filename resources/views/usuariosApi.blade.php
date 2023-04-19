

<x-app-layout >
   

    <x-slot name="header" >
        <a href="{{route('agregarAlimento')}}" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Nuevo Alimento</a>
       
        
    </x-slot>

    
    <div class="py-12">
        
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                



                <div class="relative overflow-x-auto">
                    
       
          <a href="{{route('usuarios.export')}}" type="button" class="ml-3 focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Exportar PDF</a>

                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    ID
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nombre
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Usuario
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    E-mail
                                </th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($usuariosArray as $usuario)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">{{$usuario['id']}}</td>
                                    <th scope="row"
                                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{$usuario['name']}}
                                    </th>
                                    <td class="px-6 py-4">
                                        {{$usuario['username']}}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{$usuario['email']}}
                                    </td>
                                    
                                    

                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@if(session()->has('AlimentoAgregado'))
    @push('js')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script> Swal.fire(

        'Correcto!',
        'Alimento guardado',
        'success'  ) </script>
        @endpush
@endif

@if(session()->has('AlimentoEditado'))
    @push('js')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script> Swal.fire(

        'Correcto!',
        'Alimento editado',
        'success'  ) </script>
        @endpush
@endif

@if(session()->has('AlimentoEliminado'))
    @push('js')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script> Swal.fire(

        'Correcto!',
        'Alimento eliminado',
        'success'  ) </script>
        @endpush
@endif

</x-app-layout>
