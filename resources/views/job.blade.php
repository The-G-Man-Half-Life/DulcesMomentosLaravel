<x-layout>
    <x-slot:heading>
        {{$job['title']}}
    </x-slot:heading>
    <ul>
        <li>the salary of this job is: {{$job['salary']}}</li>
    </ul>
</x-layout>
