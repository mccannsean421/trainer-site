<x-layout>

    {{-- Main hero section --}}
    <x-hero />

    {{-- Training plans overview --}}
    <div class="py-24 bg-white md:mx-48 gap-[40px]">
        <div class="max-w-6xl grid md:grid-cols-2 mx-auto gap-[40px]">
            <div class="grid justify-items-end">
                <img src="{{asset("images/plans-banner.jpg")}}" alt="Women working out" class="max-w-[480px]"/>
            </div>
            <div class="grid items-center ">
                <div>
                <h2 class="text-3xl pb-6 font-bold text-[#0053c7]">Fun workouts with structured plans</h2>
                <p class="text-xl">You'll get a personalised workout plan, designed to improve fitness, strength and burn fat, with new workouts every four weeks to help you progress.</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Meal plans --}}
    <div class=" py-24 bg-[#c6fbff] md:px-48 gap-[40px] ">
        <div class="max-w-6xl grid md:grid-cols-2 mx-auto">
        <div class="grid items-center ">
            <div>
            <h2 class="text-3xl pb-6 font-bold text-[#0053c7]">Healthy and Delicious Meal Plans</h2>
            <p class="text-xl">You'll get a personalised workout plan, designed to improve fitness, strength and burn fat, with new workouts every four weeks to help you progress.</p>
            </div>
        </div>
        <div class="grid justify-items-start" >
            <img src="{{asset("images/meal-1.jpg")}}" alt="Women working out" class="max-w-[480px]"/>
        </div>
    </div>
    </div>
</x-layout>