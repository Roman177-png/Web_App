@extends('trainerPanel.layouts.main')
@section('content')
<main class="m-8 ">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name client
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Surname client
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Descriptpion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (count($appointments) > 0)
                    @foreach($appointments as $index2 => $code)
                <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $flattened[$index2]->name}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $flattened[$index2]->surname}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $flattened[$index2]->description}}
                    </th>
                    <td class="px-6 py-4">
                        {{ $code->time}}
                    </td>
                    <td class="px-6 py-4">
                        {{$code->date}}
                    </td>
                </tr>   
                @endforeach  
                    @else
                    <td>No appointment to display</td>
                @endif
            </tbody>
        </table>
    </div>
</main>
@endsection