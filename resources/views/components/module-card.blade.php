@props(['module'])

<article class="card flex flex-col">
    <img class="h-36 w-full object-cover object-center" src="{{Storage::url($module->picture->url)}}" alt="">
    
    
    <div class="card-body flex-1 flex flex-col">

          <h1 class="card-title cursor-default">
            {{Str::limit($module->title, 15)}}
          <h1>
            <p class="text-gray-500 text-sm mb-2 cursor-default mt-auto">
              Managm: {{$module->managment->name}}
            </p>
          <div class="flex ">

            <p class="text-sm text-gray-500 mr-auto cursor-default">
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

          @if ($module->price->value == 0)
          <p class="my-2 text-gray-700 font-bold">Free</p>
          @else
          <i class="fas fa-dollar-sign mt-3 font-bold  text-gray-700">{{$module->price->value}}</i>

              
          @endif
    



          <a href="{{route('modules.show',$module)}}"
           class=" blok text-center w-full mt-5 inline-block px-6 py-2 text-xs font-medium leading-6 text-white uppercase transition bg-black rounded shadow ripple waves-light hover:shadow-lg focus:outline-none hover:bg-black">
            Get more information
        </a>

    </div>
  </article>