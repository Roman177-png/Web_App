@extends('trainerPanel.layouts.main')
@section('content')
<section class="text-gray-600 body-font overflow-hidden">
    @foreach($trainer as $tr)
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('images')}}/{{$tr->image}}">
        <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
          <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$tr->email}}</h2>
          <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$tr->name . ' ' . $tr->surname}}</h1>
          <div class="flex mb-4"> 
          </div>
          <p class="leading-relaxed">{{$tr->description}}</p>
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
            
        </div>
      </div>
    </div>
    @endforeach
  </section>
@endsection