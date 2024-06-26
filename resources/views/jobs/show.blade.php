<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <div class="space-y-2">
        <h2 class="font-bold text-lg"> {{ $job->title }} </h2>

        <p>This job pays {{ $job->salary }} </p>

        @can('edit', $job)
        <p class="mt-4">
            <x-button href="/jobs/{{ $job->id}}/edit">Edit Job</x-button>
        </p>
        @endcan

    </div>


</x-layout>
