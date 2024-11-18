<x-app-layout>

    <div class="py-12 bg-BLACK text-white">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-3xl font-bold mb-4">Sport Groups</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                        <div class="bg-gray-700 p-4 rounded-lg text-center">
                            <img src="/images/Badminton.png" alt="Badminton" class="mx-auto mb-2 w-full h-auto">
                            <p>Badminton</p>
                        </div>
                        <div class="bg-gray-700 p-4 rounded-lg text-center">
                            <img src="/images/Basketball.png" alt="Basketball" class="mx-auto mb-2 w-full h-auto">
                            <p>Basketball</p>
                        </div>
                        <div class="bg-gray-700 p-4 rounded-lg text-center">
                            <img src="/images/Carrom.png" alt="Carrom" class="mx-auto mb-2 w-full h-auto">
                            <p>Carrom</p>
                        </div>
                        <div class="bg-gray-700 p-4 rounded-lg text-center">
                            <img src="/images/Checkers.png" alt="Checkers" class="mx-auto mb-2 w-full h-auto">
                            <p>Checkers</p>
                        </div>
                        <div class="bg-gray-700 p-4 rounded-lg text-center">
                            <img src="/images/Chess.png" alt="Chess" class="mx-auto mb-2 w-full h-auto">
                            <p>Chess</p>
                        </div>
                        <div class="bg-gray-700 p-4 rounded-lg text-center">
                            <img src="/images/Netball.png" alt="Netball" class="mx-auto mb-2 w-full h-auto">
                            <p>Netball</p>
                        </div>
                    </div>
                </div>

                <div class="p-6 mt-8">
                    <h2 class="text-3xl font-bold mb-4">Training Videos</h2>
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                        <!-- Badminton Training Video -->
                        <div class="bg-gray-700 p-4 rounded-lg border-4 border-red-500">
                            <video width="100%" controls>
                                <source src="/images/Badminton.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <p class="mt-2 text-xl font-semibold">Master Your Badminton Skills</p>
                        </div>

                        <!-- Basketball Training Video -->
                        <div class="bg-gray-700 p-4 rounded-lg border-4 border-red-500">
                            <video width="100%" controls>
                                <source src="/images/Basketball.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <p class="mt-2 text-xl font-semibold">Essential Basketball Techniques</p>
                        </div>

                        <!-- Carrom Training Video -->
                        <div class="bg-gray-700 p-4 rounded-lg border-4 border-red-500">
                            <video width="100%" controls>
                                <source src="/images/Carrom.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <p class="mt-2 text-xl font-semibold">Carrom Strategies: Shots & Techniques</p>
                        </div>

                        <!-- Checkers Training Video -->
                        <div class="bg-gray-700 p-4 rounded-lg border-4 border-red-500">
                            <video width="100%" controls>
                                <source src="/images/Checkers.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <p class="mt-2 text-xl font-semibold">Winning Checkers Strategies</p>
                        </div>

                        <!-- Chess Training Video -->
                        <div class="bg-gray-700 p-4 rounded-lg border-4 border-red-500">
                            <video width="100%" controls>
                                <source src="/images/Chess.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <p class="mt-2 text-xl font-semibold">Chess Tactics: Opening to Endgame</p>
                        </div>

                        <!-- Netball Training Video -->
                        <div class="bg-gray-700 p-4 rounded-lg border-4 border-red-500">
                            <video width="100%" controls>
                                <source src="/images/Netball.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <p class="mt-2 text-xl font-semibold">Netball Skills: Passing, Shooting & Defense</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-gray-800 p-8 mt-8 rounded-lg">
                <h2 class="text-3xl font-bold mb-4">Personal Coaches</h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-8">
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <h3 class="text-2xl font-bold mb-2">John Doe</h3>
                        <p>Expert in Basketball and Netball. Available for individual and group coaching sessions.</p>
                        <p class="mt-2">+94 77 2468 101 | johndoe@gmail.com</p>
                    </div>
                    <div class="bg-gray-700 p-4 rounded-lg">
                        <h3 class="text-2xl font-bold mb-2">Jane Smith</h3>
                        <p>Specialized in Chess and Badminton. Offering personal training sessions for all levels.</p>
                        <p class="mt-2">+94 77 1234 567 | jane97@gmail.com</p>
                    </div>
                </div>
            </div>

            <div class="bg-gray-800 p-4 mt-8 flex flex-wrap justify-between gap-4 rounded-lg">
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full sm:w-auto">Complaint</button>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full sm:w-auto">Requests</button>
                <button class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full sm:w-auto">Feedback</button>
            </div>
        </div>
    </div>

</x-app-layout>
