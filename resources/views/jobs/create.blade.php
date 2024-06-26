<x-layout>
  <x-slot:heading>
    Create Job
  </x-slot:heading>

  <form method="POST" action="/jobs">
    @csrf
    <div class="space-y-12">
      <div class="border-b border-gray-900/10 pb-12">
        <h2 class="text-base font-semibold leading-7 text-gray-900">Create a New Job</h2>
        <p class="mt-1 text-sm leading-6 text-gray-600">We just need a handful of data fro you.</p>

        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
          <x-form-field>
            <x-form-label for="title">Job Title</x-form-label>
            <div class="mt-2">
                <x-form-input type="text" id="title" name="title" placeholder="Paralegal" required />
                <x-form-error name="title" />
            </div>
          </x-form-field>

          <x-form-field>
            <x-form-label for="salary">Salary</x-form-label>

            <div class="mt-2">
                <x-form-input type="text" id="salary" name="salary" placeholder="$50,000 per year" required />
                <x-form-error name="salary" />
            </div>
          </x-form-field>
        </div>

        {{-- <div class="mt-10">
            @if($errors->any())
            <ul>
                @foreach ($errors->all() as $error )
                    <li class="text-red-500">{{ $error }}</li>
                @endforeach
            </ul>
          @endif
        </div> --}}



        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Save</x-form-button>
        </div>
  </form>

</x-layout>
