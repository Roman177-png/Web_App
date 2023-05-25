@extends('adminPanel.layouts.main')
@section('content')
<main class="m-8 ">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Surname
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Age
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Gender
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Phone number
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (count($users) > 0)
                @foreach($users as $user)    
                <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $user->name}}
                    </th>
                    <td class="px-6 py-4">
                        {{ $user->surname}}
                    </td>
                    <td class="px-6 py-4">
                        {{$user->age}}
                    </td>
                    <td class="px-6 py-4">
                        {{ $user->gender}}
                    </td>
                    <td class="px-6 py-4">
                        {{$user->phone_number}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('trainer.edit', [$user->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        {{-- <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</a>--}}
                        <form action="{{ route('trainer.destroy', [$user->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Delete</button>
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
</main>
@endsection