<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{asset('vendor/fontawesome-free/css/all.min.css')}}">

        @livewireStyles

        <!-- Scripts -->
        <script src="{{ mix('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">

            {{-- @livewire('navigation') --}}
            @livewire('exploration-main')

           


            <div>
                <div class="container py-4 grid grid-cols-6">
                    <aside class="col-start-2 col-span-4 text-center">
                         
                         <h1 class="font-bold text-lg mb-4">Centro de información tributario</h1>
                           <div class="grid grid-cols-5">
                                                    {{-- <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4  @routeDetective('updates.goals',$module) border-blue-200 @else border-trasnparent @endif pl-2" href="{{route('updates.goals',$module)}}">Details</a></div>

                                                    <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4 @routeDetective('updates.edit',$module) border-blue-200 @else border-trasnparent @endif pl-2" href="{{route('updates.edit',$module)}}">Module's information</a></div>
                                                    <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4  @routeDetective('updates.exactly',$module) border-blue-200 @else border-trasnparent @endif pl-2" href="{{route('updates.exactly',$module)}}">Lessons</a></div>
                                                    <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4  @routeDetective('updates.beneficiaries',$module) border-blue-200 @else border-trasnparent @endif pl-2" href="{{route('updates.beneficiaries',$module)}}">Beneficiaries</a></div> --}}
                                                    <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4  @routeDetective('prueba.index') border-blue-200 @else border-trasnparent @endif pl-2" href="{{route('prueba.index')}}">Test</a></div> 
                                                    
                                                    <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4  @routeDetective('client.index') border-blue-200 @else border-trasnparent @endif pl-2" href="{{route('client.index')}}">Client</a></div> 
                                                    <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4">Departamento</a></div>
                                                    <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4">Detalle-factura</a></div>
                                                    <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4">Empresa</a></div>
                                                    <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4">Factura</a></div>
                                                    <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4">Municipio</a></div>
                                                    <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4">Pais</a></div>
                                                    <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4">Productos</a></div>
                                                    <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4">Tipo_documento</a></div>

                           
                           </div>
                    
                
           
                     </aside>
               
           

           
           
                    
                    <div class="col-start-1 col-span-6  card mt-9">



                     <main class="card-body text-gray-800">
                         {{$slot}}
                       
           
           
                     </main>
                     {{-- @livewire('mainfooter') --}}
           
                 </div>
              </div>
             </div>


        </div>

        
        
        {{-- <footer class="w-full text-center border-t border-grey p-4 pin-b bg-blue-dark">
            <p class="font-bold font-sans text-white">This is our footer</p>
        </footer> --}}

        @stack('modals')

        @livewireScripts
        
        @isset($Helperwithslugwithname)
        
           {{$Helperwithslugwithname}}
            
        @endisset



    </body>
</html>
