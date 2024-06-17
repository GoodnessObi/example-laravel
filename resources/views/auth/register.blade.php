<x-layout>
    <x-slot:heading>
      Register
    </x-slot:heading>

    <form method="POST" action="/register">
      @csrf
      <div class="space-y-12">
        <div class="border-b border-gray-900/10 pb-12">
          <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
            <x-form-field>
              <x-form-label for="name">Full Name</x-form-label>
              <div class="mt-2">
                  <x-form-input type="text" id="name" name="name" placeholder="John Doe" required />
                  <x-form-error name="name" />
              </div>
            </x-form-field>

            <x-form-field>
              <x-form-label for="email">Email</x-form-label>

              <div class="mt-2">
                  <x-form-input type="email" id="email" name="email"  required />
                  <x-form-error name="email" />
              </div>
            </x-form-field>


            <x-form-field>
            <x-form-label for="password">Password</x-form-label>

            <div class="mt-2">
                <x-form-input type="password" id="password" name="password"  required />
                <x-form-error name="password" />
            </div>
            </x-form-field>

                <x-form-field>
                    <x-form-label for="password_confrimation">Confirm Password</x-form-label>

                    <div class="mt-2">
                        <x-form-input type="password" id="password_confrimation" name="password_confrimation"  required />
                        <x-form-error name="password_confrimation" />
                    </div>
                </x-form-field>
          </div>

          <div class="mt-6 flex items-center justify-end gap-x-6">
              <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
              <x-form-button>Register</x-form-button>
          </div>
    </form>

  </x-layout>
