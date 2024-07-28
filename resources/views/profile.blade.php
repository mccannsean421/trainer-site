<x-layout>
    <div class="container max-w-[780px] mx-auto">
        
        <div class="grid my-12 grid-cols-2">
            {{-- User info --}}
            <div class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
                <h1 class="text-5xl pb-3">{{$user->first_name}} {{$user->last_name}}</h1>
                <div class="pb-3">
                <div class="text-gray-500">Email Address</div>
                <div>{{$user->email}}</div>
                </div>
                <div class="text-gray-500">Phone Number</div>
                <div>{{$user->phone_number}}</div>
            </div>


            {{-- User options --}}
            <div>
                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                    <li>
                        <a href="/my-workouts" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Workouts</a>
                    </li>
                    <li>
                        <a href="/my-meal-plans" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Meal plans</a>
                    </li>
                </ul>
            </div>
        </div>

    </div>
    
</x-layout>