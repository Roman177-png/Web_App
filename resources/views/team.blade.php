{{-- @extends('layouts.main')
@section('content')
<section class="text-gray-600 body-font">
<div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">OUR TEAM</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base"> Working out in a gym is not just about physical fitness, but also about mental wellbeing. Exercise has been shown to reduce stress, improve mood, and increase overall happiness. Going to the gym can be a great way to take a break from the stresses of daily life, clear your mind, and focus on yourself. Additionally, gym memberships often come with access to amenities like saunas, hot tubs, and pools, which can provide further relaxation and stress relief. So, whether you're a seasoned athlete or just starting your fitness journey, the gym can be a valuable tool in achieving not just physical, but also mental wellness.</p>
    </div>    
    <div class="flex flex-wrap -m-4">
        <div class="p-4 lg:w-1/4 md:w-1/2">
            <div class="h-full flex flex-col items-center text-center">
                <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="{{ asset('images/team_1.jpg') }}">
                <div class="w-full">
                    <h2 class="title-font font-medium text-lg text-gray-900">John Smith</h2>
                    <h3 class="text-gray-500 mb-3">trainer</h3>
                    <p class="mb-4">A gym trainer is a fitness professional who is responsible for guiding and motivating clients in their workout routines. They have a strong background in exercise science and are knowledgeable about the human body and its response to different types of exercise. The main role of a gym trainer is to create individualized workout plans for clients based on their fitness goals, abilities, and health conditions.</p>
                    <span class="inline-flex space-x-4">
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded " onclick="window.location.href='#';">
                            Book visit
                        </button>
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            View
                        </button>
                    </span>
                </div>
            </div>
        </div>
    </div> 
</div>
</section>
@stop --}}
@extends('layouts.main')
@section('content')
<section class="text-gray-600 body-font">
<div class="container px-5 py-24 mx-auto">
    <div class="flex flex-col text-center w-full mb-20">
        <h1 class="text-2xl font-medium title-font mb-4 text-gray-900">OUR TEAM</h1>
        <p class="lg:w-2/3 mx-auto leading-relaxed text-base"> Gym is a dynamic and inclusive fitness program offered by our gym, designed to foster teamwork, motivation, and camaraderie among participants. Our dedicated team of experienced trainers and coaches create a supportive environment where individuals come together to achieve their fitness goals collectively.</p>
    </div>
    
    <div class="flex flex-wrap -m-4">
        @foreach ($trainers as $train ) 
        <div class="p-4 lg:w-1/4 md:w-1/2">
            <div class="h-full flex flex-col items-center text-center">
                <img alt="team" class="flex-shrink-0 rounded-lg w-full h-56 object-cover object-center mb-4" src="{{ asset('images')}}/{{$train->image}}">
                <div class="w-full">
                    <h2 class="title-font font-medium text-lg text-gray-900">{{ $train->name . " " . $train->surname }}</h2>
                    <h3 class="text-gray-500 mb-3">{{ $train->speciality }}</h3>
                    <p class="mb-4">{{ $train->description }}</p>
                    <span class="inline-flex space-x-4">
                        <button class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded " onclick="window.location.href='{{ route('login') }}';">
                            Book visit
                        </button>
                        {{-- <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            View
                        </button> --}}
                    </span>
                </div>
            </div>
        </div>
        @endforeach
    </div> 
</div>
</section>
@stop