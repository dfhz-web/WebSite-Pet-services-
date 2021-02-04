<x-app-layout>

    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8 py-12">
        <h1 class="text-gray-600  text-3xl font-bold">Details of payment</h1>

        <div class="card">
            <div class="card-body">
                <article class="flex items-center">
                     <img class="x-12 w-12 object-cover" src="{{Storage::url($module->picture->url)}}" alt="">
                       <h1 class="text-g ml-2">{{$module->title}}</h1>
                       <p class="text-xl font-bold ml-auto">$USD {{$module->price->value}}</p>
                </article>

               

                <hr class="m-5">
                <p class="text-sm mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis fugit ratione amet dolore porro quidem mollitia ullam animi eaque quia molestias rem, repellat eius obcaecati dignissimos aliquam, tenetur, neque fuga?
                    <a class="text-green-500 font-bold" href="">Terms and conditions</a>
                </p>


                <div class="flex justify-center mt-3 mb-4">
                    <a href="{{route('pay.pay',$module)}}" class="border border-yellow-500 text-yellow-500 rounded-md px-4 py-2 m-2 transition duration-500 ease select-none hover:text-white hover:bg-yellow-600 focus:outline-none focus:shadow-outline">Buy!</a>


               </div>

            </div>

        </div>

    </div>

</x-app-layout>