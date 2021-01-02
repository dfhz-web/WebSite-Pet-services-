
  <div>
     <section class="mt-1 bg-gray-700 py-0 text-center text-7xl">
        <div class="text-5xl font-extrabold ...">
            <span class="text-center text-4xl bg-clip-text text-transparent 
            bg-gradient-to-r from-purple-400 to-blue-500">
                {{$module->title}}
            </span>
         </div>
 
      </section>

      <div class="mt-5">
          <div class="container grid grid-cols-3 gap-7">
              <div class="card">
                  <div class="card-body">
                      <div class="flex items-center">
                          <figure>
                              <img src="{{$module->managment->profile_photo_url}}" alt="">
                          </figure>
                          <div>
                              <p>{{$module->managment->name}}</p>
                <a class="text-blue-500" href="">{{'@' . Str::slug($module->managment->name,' ')}}
                            </a>
                          </div>

                      </div>

                      <ul>
                          @foreach ($module->sections as $section)
                              <li>
                                  <a class="font-bold" href="">{{$section->name}}</a>
                                  <ul>
                                      @foreach ($section->lessons as $lesson)
                                        <li>
                                            <a class="cursor-pointer" wire:click="lessonchange({{$lesson}})">
                                                {{$lesson->id}} 
                                                @if($lesson->complete)
                                                (completed)
                                            @endif</a>
                                        </li>
                                      @endforeach
                                  </ul>
                              </li>
                          @endforeach
                      </ul>
                  </div>

              </div>
               <div class="col-span-2">

                <div class="fix-responsive">
                      {!!$currently->iframe!!}

                </div>





                
                 {{$currently->name}}
                 <p>Index: {{$this->index}}</p>
                 <p>Previous: @if ($this->previous)
                 {{$this->previous->id}}
                 @endif</p>

                 <p>Next: @if ($this->next)
                 {{$this->next->id}}
                 @endif</p>
              </div>
            </div>
      </div>


  </div>
