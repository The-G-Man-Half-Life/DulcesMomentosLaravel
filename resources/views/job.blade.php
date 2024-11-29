<x-layout>
    <x-slot:heading>
        {{$job['title']}}
    </x-slot:heading>
    <h1>{{$job['title']}}</h1>
    <ul>
        <li>the salary of this job is: ${{$job['salary']}}</li>
    </ul>
</x-layout>
