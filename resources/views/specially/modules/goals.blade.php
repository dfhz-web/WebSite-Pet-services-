<x-specially-layout>
    <x-slot name="module">
        {{$module->slug}}
      </x-slot>

      <div class="">
        @livewire('modules-goals', ['module' => $module], key('modules-goals' . $module->id))
      </div>

      <div class="">
        @livewire('modules-requirements', ['module' => $module], key('modules-requirements' . $module->id))
      </div>

  <br>
  <br>

  

      
</x-specially-layout>