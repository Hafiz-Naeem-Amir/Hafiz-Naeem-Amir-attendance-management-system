<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

   <div class="auto-form-wrapper text-center">

    <!-- Headings -->
    <h4 class="text-center">Attendance Management System</h4>
    <h6 class="font-weight-light text-center mb-4">Login to continue.</h6>

    <!-- Form -->
    <form method="POST" action="{{ route('login') }}" class="text-start">
        @csrf

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email"
                class="block mt-1 w-full"
                type="email"
                name="email"
                :value="old('email')"
                required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password"
                class="block mt-1 w-full"
                type="password"
                name="password"
                required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4 text-start">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                    name="remember">
                <span class="ms-2 text-sm text-gray-600">Remember Me</span>
            </label>
        </div>

        <div class="flex items-center justify-between mt-4">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-600 hover:text-gray-900"
                   href="{{ route('password.request') }}">
                    Forgot your password?
                </a>
            @endif

            <x-primary-button>
                Log in
            </x-primary-button>
        </div>
    </form>

</div>



</x-guest-layout>
