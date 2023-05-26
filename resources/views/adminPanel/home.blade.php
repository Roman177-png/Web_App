@extends('adminPanel.layouts.main')
@section('content')
    <div class="relative min-h-screen bg-gradient-to-r from-indigo-500 " >
        <div class='overflow-x-auto w-full'>
            <table class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                <thead class="bg-gray-900">
                    <tr class="text-white text-left">
                        <th class="font-semibold text-sm uppercase px-6 py-4"> Name </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4"> Surname </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4"> Age </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Gender </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4 text-center"> Phone number </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4"> </th>
                        <th class="font-semibold text-sm uppercase px-6 py-4"> </th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @if (count($users) > 0)
                    @foreach($users as $user)
                    <tr>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p>{{ $user->name}} </p>
                                    <p class="text-gray-500 text-sm font-semibold tracking-wide"> {{$user->email}} </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="flex items-center space-x-3">
                                <div>
                                    <p>{{ $user->surname}} </p>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4">
                            <p class="">{{$user->age}}</p>
                        </td>
                        <td class="px-6 py-4 text-center"> <span class="text-white text-sm w-1/3 pb-1 bg-red-600 font-semibold px-2 rounded-full"> {{ $user->gender}} </span> </td>
                        <td class="px-6 py-4 text-center"> {{$user->phone_number}} </td>
                        <td class="px-6 py-4 text-center"> <a href="{{ route('trainer.edit', [$user->id]) }}" class="text-purple-800 hover:underline">Edit</a> </td>
                        <td class="px-6 py-4 text-center"> 
                            <form action="{{ route('trainer.destroy', [$user->id]) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-purple-800 hover:underline">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    @else
                    <td>No user to display</td>
                @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
