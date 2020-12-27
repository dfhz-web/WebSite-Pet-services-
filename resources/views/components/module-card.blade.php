@props(['module'])

<article class="bg-white shadow-lg rounded overflow-hidden">
    <img class="h-36 w-full object-cover object-center" src="{{Storage::url($module->picture->url)}}" alt="">
    <div class="px-6 py-4">
          <h1 class="text-xl text-gray-700 mb-2 leading-6">
            {{Str::limit($module->title, 40)}}
          <h1>
            <p class="text-gray-500 text-sm mb-2">
              Managm: {{$module->managment->name}}
            </p>
          <div class="flex ">

            <p class="text-sm text-gray-500 mr-auto">
              <i class="fas fa-users"></i>
              ({{$module->beneficiaries_count}})
            </p>

            <ul class="flex text-sm">
              <li class="mr-1">
                <i class="fas fa-star text-{{$module->rating >= 1 ? 'yellow' : 'gray'}}-400">

                </i>
                
              </li>
              <li class="mr-1">
                <i class="fas fa-star text-{{$module->rating >= 2 ? 'yellow' : 'gray'}}-400 ">

                </i>
                
              </li>
              <li class="mr-1">
                <i class="fas fa-star text-{{$module->rating >= 3 ? 'yellow' : 'gray'}}-400">

                </i>
                
              </li>
              <li class="mr-1">
                <i class="fas fa-star text-{{$module->rating >= 4 ? 'yellow' : 'gray'}}-400">

                </i>
                
              </li>
              <li class="mr-1">
                <i class="fas fa-star text-{{$module->rating == 5 ? 'yellow' : 'gray'}}-400 ">

                </i>
                
              </li>
            </ul>

           
          </div>
          <a href="{{route('modules.show',$module)}}"
           class=" blok text-center w-full mt-5 inline-block px-6 py-2 text-xs font-medium leading-6 text-white uppercase transition bg-black rounded shadow ripple waves-light hover:shadow-lg focus:outline-none hover:bg-black">
            Get more information
        </a>

    </div>
  </article>