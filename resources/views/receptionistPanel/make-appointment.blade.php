@extends('receptionistPanel.layouts.main')
@section('content')
<div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
    <div class="flex items-center justify-center">
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-user mr-3"></i>Make appointment 
            </p>
            <div class="leading-loose">
                <form class="p-10 bg-white rounded shadow-xl" action="{{ route('appointment.store') }}" method="post"
                enctype="multipart/form-data">@csrf
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Trainer
                      </label>
                      <div class="relative">
                            <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="trainerId">
                                @foreach ($trainers as $trainer)
                                <option>{{ $trainer->name }}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-wrap -mx-3 mb-2">
                    <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                      <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-state">
                        Client
                      </label>
                      <div class="relative">
                        <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state" name="clientId">
                            @foreach ($clients as $client)
                            <option>{{ $client->name }}</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                          <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                        </div>
                      </div>
                    </div>
                  </div>
                </br>
                  <div class="relative max-w-sm">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                      <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path></svg>
                    </div>
                    <input datepicker datepicker-autohide type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" name="date">
                  </div>
                <div class="flex justify-left">
                    <div class="mt-2 p-5 w-40 bg-white rounded-lg shadow-xl">
                      <div class="flex">
                        <select
                          name="time[]"
                          class="bg-transparent text-xl appearance-none outline-none"
                        >
                          <option value="1." >1</option>
                          <option value="2.">2</option>
                          <option value="3.">3</option>
                          <option value="4.">4</option>
                          <option value="5.">5</option>
                          <option value="6.">6</option>
                          <option value="7.">7</option>
                          <option value="8.">8</option>
                          <option value="9.">9</option>
                          <option value="10.">10</option>
                          <option value="11.">11</option>
                          <option value="12.">12</option>
                        </select>
                        <span class="text-xl mr-3">:</span>
                        <select
                          name="time[]"
                          class="bg-transparent text-xl appearance-none outline-none mr-4"
                        >
                          <option value="0">00</option>
                          <option value="30">30</option>
                        </select>
                        <select
                          name="time[]"
                          class="bg-transparent text-xl appearance-none outline-none"
                        >
                          <option value="am">AM</option>
                          <option value="pm">PM</option>
                        </select>
                      </div>
                    </div>
                    </div>
                </br>
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 border border-blue-700 rounded">
                        Submit
                    </button>
                  
                </form>
            </div>
        </div>
    </div>
</div>
@endsection