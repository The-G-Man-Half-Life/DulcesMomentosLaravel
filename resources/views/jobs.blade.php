<x-layout>
    <x-slot:heading>
        jobs page
    </x-slot:heading>
    <h1>These are all the jobs</h1>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}">
                    <strong>{{ $job['title'] }} </strong> has a salary of: {{ $job['salary'] }}
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
