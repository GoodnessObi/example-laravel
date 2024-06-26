<x-layout>
  <x-slot:heading>
    Jobs
  </x-slot:heading>
  <div class="space-y-4">
    @foreach ($jobs as $job)
    <a href="/jobs/{{ $job["id"] }}" class="block rounded border border-gray-200 px-4 py-6">
      <div class="font-bold text-blue-500">{{ $job->employer->name }}</div>
      <div>
        <strong> {{ $job["title"] }}</strong>: pays {{ $job["salary"] }} per year
      </div>
    </a>
    @endforeach
  </div>

  <div>
    {{ $jobs->links() }}
  </div>

</x-layout>
