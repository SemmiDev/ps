<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    @if (session('status'))
        <div class="mb-4">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="max-w-md mx-auto my-8">
        @csrf

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-black">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                autocomplete="username" class="mt-1 p-2 w-full border rounded-md text-black">
            @error('email')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-black">Password</label>
            <input id="password" type="password" name="password" required autocomplete="current-password"
                class="mt-1 p-2 w-full border rounded-md text-black">
            @error('password')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Remember Me -->
        <div class="flex justify-between items-center mb-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" name="remember"
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500">
                <span class="ms-2 text-sm text-black">Remember me</span>
            </label>
            <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md ms-3">Log in</button>
        </div>

    </form>

</x-guest-layout>
