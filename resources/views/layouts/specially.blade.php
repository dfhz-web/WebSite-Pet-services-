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

            @livewire('navigation')
           


            <div>
                <div class="container py-4 grid grid-cols-6">
                    <aside class="col-start-2 col-span-4 text-center">
                         
                         <h1 class="font-bold text-lg mb-4">Edit module</h1>
                           <div class="grid grid-cols-4">
                             <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4 @routeDetective('updates.edit',$module) border-blue-200 @else border-trasnparent @endif pl-2" href="{{route('updates.edit',$module)}}">Module's information</a></div>
                             <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4  @routeDetective('updates.exactly',$module) border-blue-200 @else border-trasnparent @endif pl-2" href="{{route('updates.exactly',$module)}}">Lessons</a></div>
                             <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4 border-trasparent pl-2" href="">Goals</a></div>
                             <div class=""><a class="leading-8 mb-2 border-b-4 border-l-4 border-trasparent pl-2" href="">Beneficiaries</a></div>
                           </div>
                    
                
           
                     </aside>
               
           

           
           
                    
                    <div class="col-start-1 col-span-6  card mt-9">



                     <main class="card-body text-gray-800">
                         {{$slot}}
                       
           
           
                     </main>
           
                 </div>
              </div>
             </div>


        </div>

        @stack('modals')

        @livewireScripts
        
        @isset($Helperwithslugwithname)
        
           {{$Helperwithslugwithname}}
            
        @endisset

    </body>
</html>
