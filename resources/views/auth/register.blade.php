<x-guest-layout>

    <form method="POST" action="{{ route('register') }}" class="max-w-md mx-auto my-8">
        @csrf

        <!-- Name -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-black">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="mt-1 p-2 w-full border rounded-md text-black">
            @error('name')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-black">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="mt-1 p-2 w-full border rounded-md text-black">
            @error('email')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-black">Password</label>
            <input id="password" type="password" name="password" required autocomplete="new-password" class="mt-1 p-2 w-full border rounded-md text-black">
            @error('password')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-black">Confirm Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="mt-1 p-2 w-full border rounded-md text-black">
            @error('password_confirmation')
                <p class="text-sm text-red-500 mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="flex items-center justify-end mt-4">
            <a href="{{ route('login') }}" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Already registered?
            </a>
            <button type="submit" class="bg-indigo-500 text-white px-4 py-2 rounded-md ms-4">Register</button>
        </div>
    </form>

</x-guest-layout>
