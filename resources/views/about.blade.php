@extends('layouts.main')
@section('content')
<section class="text-gray-600 body-font">
  <div class="container px-5 py-24 mx-auto flex flex-wrap">
    <div class="flex w-full mb-20 flex-wrap">
      <h1 class="sm:text-3xl text-2xl font-medium title-font text-gray-900 lg:w-1/3 lg:mb-0 mb-4"> We take care of your physical form</h1>
      <p class="lg:pl-6 lg:w-2/3 mx-auto leading-relaxed text-base">Going to the gym is one of the best ways to take care of your physical form. Regular exercise has numerous benefits for the body, including improved cardiovascular health, increased muscle strength and endurance, better flexibility and mobility, and reduced risk of chronic diseases such as obesity, diabetes, and heart disease.

        At the gym, you have access to a wide range of equipment and training programs that can help you achieve your fitness goals, whether you want to lose weight, build muscle, or improve your overall health and well-being. In addition, working out at a gym can be a great way to socialize and meet new people who share your interests and passion for fitness.</p>
    </div>
    <div class="flex flex-wrap md:-m-2 -m-1">
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ asset('images/team_1.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ asset('images/team_2.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="{{ asset('images/team_4.jpg') }}">
        </div>
      </div>
      <div class="flex flex-wrap w-1/2">
        <div class="md:p-2 p-1 w-full">
          <img alt="gallery" class="w-full h-full object-cover object-center block" src="{{ asset('images/team_5.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ asset('images/team_3.jpg') }}">
        </div>
        <div class="md:p-2 p-1 w-1/2">
          <img alt="gallery" class="w-full object-cover h-full object-center block" src="{{ asset('images/trainer.jpg') }}">
        </div>
      </div>
    </div>
  </div>
</section>
  @stop