@extends('clientPanel.layouts.main')
@section('content')
<main class="m-8 ">
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Name trainer
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Surname trainer
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Time
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                @if (count($appointments) > 0)
                    @foreach($appointments as $index => $code)
                <tr class="border-b bg-gray-50 dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $flattened[$index]->name}}
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{ $flattened[$index]->surname}}
                    </th>
                    <td class="px-6 py-4">
                        {{ $code->time}}
                    </td>
                    <td class="px-6 py-4">
                        {{$code->date}}
                    </td>
                    <td class="px-6 py-4">
                        <a href="{{ route('appointments.edit', [$code->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
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