<x-layout>

    {{-- Main hero section --}}
    <x-hero />

    {{-- Training plans overview --}}
    <div class="grid md:grid-cols-2 py-24 bg-white md:mx-48 gap-[40px]">
        <div>
            <img src="{{asset("images/plans-banner.jpg")}}" alt="Women working out" />
        </div>
        <div class="grid items-center ">
            <div>
            <h2 class="text-5xl pb-6 font-bold text-[#0053c7]">Fun workouts with structured plans</h2>
            <p>You'll get a personalised workout plan, designed to improve fitness, strength and burn fat, with new workouts every four weeks to help you progress.</p>
            </div>
        </div>
    </div>

    {{-- Meal plans --}}
</x-layout>