@extends('receptionistPanel.layouts.main')
@section('content')
    <div class="w-full h-screen overflow-x-hidden border-t flex flex-col">
        <div class="flex items-center justify-center">
            <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
                <p class="text-xl pb-6 flex items-center">
                    <i class="fas fa-user mr-3"></i>Add Client 
                </p>
                <div class="leading-loose">
                    <form class="p-10 bg-white rounded shadow-xl" action="{{ route('receptionists.store') }}" method="post"
                    enctype="multipart/form-data">@csrf
                        <div class="">
                            <label class="block text-sm text-gray-600" for="name">Name</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="name" type="text" required="" placeholder="Your Name" aria-label="Name">
                        </div>
                        <div class="">
                            <label class="block text-sm text-gray-600" for="Surname">Surname</label>
                            <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="surname" name="surname" type="text" required="" placeholder="Your Surname" aria-label="Surname">
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="email">Email</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="email" name="email" type="text" required="" placeholder="Your Email" aria-label="Email">
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="password">password</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="password" name="password" type="password" required="" placeholder="Your password" aria-label="password">
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="phone_number">phone_number</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="phone_number" name="phone_number" type="phone_number" required="" placeholder="Your phone_number" aria-label="phone_number">
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="role">Role</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="role" name="role" type="role" placeholder="trainer" aria-label="role" value="0" readonly>
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="phone_number">Age</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="phone_number" name="age" type="text" required="" placeholder="Your age" aria-label="phone_number">
                        </div>
                        <div class="mt-2">
                            <label class="block text-sm text-gray-600" for="gender">Gender</label>
                            <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="gender" name="gender" type="text" required="" placeholder="Your gender" aria-label="gender">
                        </div>
                        {{-- <div class="mt-2">
                            <label class=" block text-sm text-gray-600" for="message">Note</label>
                            <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="message" name="message" rows="6" required="" placeholder="Your inquiry.." aria-label="Email"></textarea>
                        </div> --}}
                        <div class="flex justify-left">
                            <div class="mb-3 xl:w-96">
                              <label for="exampleFormControlTextarea1" class="form-label inline-block mb-2 text-gray-700"
                                >Description</label
                              >
                              <textarea
                                class="
                                  form-control
                                  block
                                  w-full
                                  px-3
                                  py-1.5
                                  text-base
                                  font-normal
                                  text-gray-700
                                  bg-white bg-clip-padding
                                  border border-solid border-gray-300
                                  rounded
                                  transition
                                  ease-in-out
                                  m-0
                                  focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none
                                "
                                id="exampleFormControlTextarea1"
                                rows="3"
                                placeholder="Your description"
                                 name="description"
                              ></textarea>
                            </div>
                          </div>
                        <div class="flex justify-left mt-8">
                            <div class="rounded-lg shadow-xl bg-gray-50 lg:w-1/2">
                                <div class="m-4">
                                    <label class="inline-block mb-2 text-gray-500">Upload
                                        Image(jpg,png,svg,jpeg)</label>
                                    <div class="flex items-center justify-center w-full">
                                        <label class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                            <div class="flex flex-col items-center justify-center pt-7">
                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                    class="w-12 h-12 text-gray-400 group-hover:text-gray-600" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                    Select a photo</p>
                                            </div>
                                            <input type="file" class="opacity-0" name="image"/>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-6">
                            <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Add Client</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>

@endsection