@extends('clientPanel.layouts.main')

@section('content')
<form class="w-full max-w-lg ml-64 mt-16" method="POST" action="{{ route('appointments.update', [$appointment->id]) }}"  
    enctype="multipart/form-data">
  @csrf
  @method('PUT')
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-first-name">
          Time
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" id="grid-first-name" type="text" name="time" value="{{ $appointment->time }}" >
      </div>
    </div>
  <div class="relative max-w-sm">
    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
    </div>
    <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="date" value={{ $appointment->data }}>
  </div>
</br>
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
        Submit
    </button>
</form>
@endsection
