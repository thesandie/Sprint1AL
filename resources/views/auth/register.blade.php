<x-guest-layout>
    <!-- Outer div to apply background image to the whole screen -->
    <div class="min-h-screen flex items-center justify-center bg-cover bg-center" style="background-image: url('{{ asset('images/ChessHome.jpg') }}');">
        <!-- Container for the form (black background with opacity, proper size for the form) -->
        <div class="bg-black bg-opacity-60 p-8 w-full max-w-md lg:max-w-lg xl:max-w-xl rounded-lg shadow-lg opacity-90">
            <h1 class="text-center text-white text-2xl font-bold mb-6">Create an Account</h1>

            <!-- Displays validation errors if any -->
            @if ($errors->any())
                <div class="mb-4 text-red-500">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Username -->
                <div>
                    <label for="username" class="block text-gray-300 text-sm font-medium">Username</label>
                    <input id="username" name="name" type="text" required autofocus
                        class="block w-full mt-1 p-2 bg-gray-700 text-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>

                <!-- Email -->
                <div class="mt-4">
                    <label for="email" class="block text-gray-300 text-sm font-medium">E-mail</label>
                    <input id="email" name="email" type="email" required
                        class="block w-full mt-1 p-2 bg-gray-700 text-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <label for="password" class="block text-gray-300 text-sm font-medium">Password</label>
                    <input id="password" name="password" type="password" required
                        class="block w-full mt-1 p-2 bg-gray-700 text-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <label for="password_confirmation" class="block text-gray-300 text-sm font-medium">Confirm Password</label>
                    <input id="password_confirmation" name="password_confirmation" type="password" required
                        class="block w-full mt-1 p-2 bg-gray-700 text-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500">
                </div>

                <!-- Sports Interests -->
                <div class="mt-4">
                    <label for="sports_interests" class="block text-gray-300 text-sm font-medium">Choose your sports interests:</label>
                    <div class="flex flex-wrap gap-4 mt-2">
                        <div class="flex items-center">
                            <input type="checkbox" id="badminton" name="sports[]" value="Badminton"
                                class="h-4 w-4 text-red-500 focus:ring-2 focus:ring-red-500">
                            <label for="badminton" class="ml-2 text-gray-300 text-sm">Badminton</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="basketball" name="sports[]" value="Basketball"
                                class="h-4 w-4 text-red-500 focus:ring-2 focus:ring-red-500">
                            <label for="basketball" class="ml-2 text-gray-300 text-sm">Basketball</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="carrom" name="sports[]" value="Carrom"
                                class="h-4 w-4 text-red-500 focus:ring-2 focus:ring-red-500">
                            <label for="carrom" class="ml-2 text-gray-300 text-sm">Carrom</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="checkers" name="sports[]" value="Checkers"
                                class="h-4 w-4 text-red-500 focus:ring-2 focus:ring-red-500">
                            <label for="checkers" class="ml-2 text-gray-300 text-sm">Checkers</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="chess" name="sports[]" value="Chess"
                                class="h-4 w-4 text-red-500 focus:ring-2 focus:ring-red-500">
                            <label for="chess" class="ml-2 text-gray-300 text-sm">Chess</label>
                        </div>
                        <div class="flex items-center">
                            <input type="checkbox" id="netball" name="sports[]" value="Netball"
                                class="h-4 w-4 text-red-500 focus:ring-2 focus:ring-red-500">
                            <label for="netball" class="ml-2 text-gray-300 text-sm">Netball</label>
                        </div>
                    </div>
                </div>

                <div class="mt-6">
                    <button type="submit"
                        class="w-full py-2 bg-red-500 text-white rounded hover:bg-red-600 focus:outline-none focus:ring-2 focus:ring-red-500">
                        Sign Up
                    </button>
                </div>

                <p class="mt-4 text-center text-sm text-gray-300">
                    Already have an account? <a href="{{ route('login') }}" class="text-red-500 hover:underline">Sign in instead</a>
                </p>
            </form>
        </div>
    </div>
</x-guest-layout>
