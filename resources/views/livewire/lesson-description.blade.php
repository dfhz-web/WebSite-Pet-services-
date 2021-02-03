<div>
    <article class="card" x-data="{open:false}">
        <div class="card-body bg-blue-100">
            <header>
                <h1 x-on:click="open=!open" class="cursor-pointer">Process' Description</h1>
            </header>
            <div x-show="open">
                <hr class="my-2">
                @if ($lesson->description)
                    <form wire:submit.prevent="update">
                     
                        <textarea wire:model="description.name" class="form-input w-full"></textarea>
                        @error('description.name')
                            <span class="text-1xl text-yellow-400">{{$message}}</span>
                        @enderror
 
                        <div class="flex justify-end">
                            <button wire:click="destroy" type="button" class="border border-red-500 text-red-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-red-600 focus:outline-none focus:shadow-outline">Delete</button>
                            <button type="submit" class="border border-yellow-500 text-yellow-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-yellow-600 focus:outline-none focus:shadow-outline">Update</button>
                            <button class="text-trasnsparent rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-trasnsparent focus:outline-none focus:shadow-outline"></button>
                     
                        </div>


                    </form>

                    @else

                                <div>
                                
                                    <textarea wire:model="name" class="form-input w-full" placeholder="Add description for the process..........."></textarea>
                                    @error('name')
                                        <span class="text-1xl text-yellow-400">{{$message}}</span>
                                    @enderror
            
                                    <div class="flex justify-end">
                                        <button wire:click="store" class="border border-yellow-500 text-yellow-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-yellow-600 focus:outline-none focus:shadow-outline">Add</button>
                                        <button class="text-trasnsparent rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-trasnsparent focus:outline-none focus:shadow-outline"></button>
                                
                                    </div>


                                </div>
                                
                @endif
            </div>

        </div>
    </article>
</div>
