@extends('receptionistPanel.layouts.main')
@section('content')
@foreach($receptionist as $rec)
<section class="text-gray-600 body-font overflow-hidden">
    <div class="container px-5 py-24 mx-auto">
      <div class="lg:w-4/5 mx-auto flex flex-wrap">
        <img alt="load" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="{{ asset('images/team_4.jpg') }}">
          <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
            <h2 class="text-sm title-font text-gray-500 tracking-widest">{{$rec->email}}</h2>
            <h1 class="text-gray-900 text-3xl title-font font-medium mb-1">{{$rec->name . ' ' . $rec->surname}}</h1>
            <h3 class="text-gray-900 text-3xl title-font font-medium mb-1">Experience:{{ $rec->experience}}</h3>
            <h3 class="text-gray-900 text-3xl title-font font-medium mb-1">Age:{{ $rec->age}}</h3>
            <h3 class="text-gray-900 text-3xl title-font font-medium mb-1">Mobile phone:{{ $rec->phone_number}}</h3>
            <div class="flex mb-4"> 
          </div>
          <p class="leading-relaxed">{{$rec->description}}</p>
          <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-100 mb-5">
        </div>
      </div>
    </div>
  </section>
  @endforeach
@endsection