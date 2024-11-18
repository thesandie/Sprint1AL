<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking  - APIIT Leisure</title>
    <link rel="icon" href="../images/logo.png">
    
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Alpine.js CDN -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    
</head>
<body class="bg-gray-900 text-white">
    <div class="container mx-auto p-8" x-data="bookingApp()">
        <nav class="bg-gray-800 p-4 shadow-lg">
            <div class="container mx-auto flex justify-between items-center">
                <!-- Logo -->
                <div>
                    <a href="dashboard" class="logo">
                        <img src="../images/logo.png" class="h-9 w-9">
                    </a>
                </div>
            <div class="container mx-auto flex justify-between items-center">
                <div class="flex-grow flex justify-center space-x-4">
                    <a href="dashboard" class="text-white underline decoration-blue-700">Dashboard</a>
                    <a href="#" class="text-white underline decoration-blue-700">News</a>
                    <a href="#" class="text-white underline decoration-blue-700">Calendar</a>
                    <a href="booking" class="text-white underline decoration-blue-700">Booking</a>
                </div>
            </div>
        </nav>
        <h1 class="text-4xl font-bold mb-8 text-center text-white-600">Book a Session</h1>

        <!-- Form Section -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-8">
            <!-- Personal Details -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold mb-4">Personal Details</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">First Name</label>
                        <input type="text" x-model="form.firstName" class="w-full bg-gray-700 text-white border-none rounded px-4 py-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Last Name</label>
                        <input type="text" x-model="form.lastName" class="w-full bg-gray-700 text-white border-none rounded px-4 py-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Mobile Number</label>
                        <input type="text" x-model="form.mobileNumber" class="w-full bg-gray-700 text-white border-none rounded px-4 py-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Email Address</label>
                        <input type="email" x-model="form.email" class="w-full bg-gray-700 text-white border-none rounded px-4 py-2" required>
                    </div>
                </div>
            </div>

            <!-- Session Details -->
            <div class="bg-gray-800 p-6 rounded-lg shadow-lg">
                <h3 class="text-2xl font-semibold mb-4">Session Details</h3>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium mb-1">Sport</label>
                        <select x-model="form.sport" class="w-full bg-gray-700 text-white border-none rounded px-4 py-2">
                            <option value="Football">Football</option>
                            <option value="Basketball">Basketball</option>
                            <option value="Tennis">Tennis</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">People</label>
                        <input type="number" x-model="form.people" class="w-full bg-gray-700 text-white border-none rounded px-4 py-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Date</label>
                        <input type="date" x-model="form.date" class="w-full bg-gray-700 text-white border-none rounded px-4 py-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Check-in Time</label>
                        <input type="time" x-model="form.checkInTime" class="w-full bg-gray-700 text-white border-none rounded px-4 py-2" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-1">Check-out Time</label>
                        <input type="time" x-model="form.checkOutTime" class="w-full bg-gray-700 text-white border-none rounded px-4 py-2" required>
                    </div>
                    <div class="flex items-center">
                        <input type="checkbox" x-model="form.borrowEquipment" class="mr-2">
                        <label class="text-sm">Borrow Company Equipment</label>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-center mb-8">
            <button @click="addBooking" class="bg-red-600 hover:bg-red-700 text-white font-semibold py-2 px-6 rounded-lg shadow-lg">Book Now</button>
        </div>

        <!-- Booking History -->
        <h3 class="text-2xl font-semibold mt-8 mb-4 text-center">Booking History</h3>
        <div class="overflow-x-auto">
            <table class="table-auto w-full text-left border-collapse border border-gray-600">
                <thead>
                    <tr class="bg-gray-700 text-white">
                        <th class="px-4 py-2 border border-gray-600">Sport</th>
                        <th class="px-4 py-2 border border-gray-600">Date</th>
                        <th class="px-4 py-2 border border-gray-600">People</th>
                        <th class="px-4 py-2 border border-gray-600">Check-in Time</th>
                        <th class="px-4 py-2 border border-gray-600">Check-out Time</th>
                    </tr>
                </thead>
                <tbody>
                    <template x-for="booking in bookings" :key="booking.id">
                        <tr class="hover:bg-gray-700">
                            <td class="px-4 py-2 border border-gray-600" x-text="booking.sport"></td>
                            <td class="px-4 py-2 border border-gray-600" x-text="booking.date"></td>
                            <td class="px-4 py-2 border border-gray-600" x-text="booking.people"></td>
                            <td class="px-4 py-2 border border-gray-600" x-text="booking.checkInTime"></td>
                            <td class="px-4 py-2 border border-gray-600" x-text="booking.checkOutTime"></td>
                        </tr>
                    </template>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        function bookingApp() {
            return {
                form: {
                    firstName: '',
                    lastName: '',
                    mobileNumber: '',
                    email: '',
                    sport: '',
                    people: '',
                    date: '',
                    checkInTime: '',
                    checkOutTime: '',
                    borrowEquipment: false
                },
                bookings: [],
                addBooking() {
                    this.bookings.push({ ...this.form, id: Date.now() });
                    this.resetForm();
                },
                resetForm() {
                    this.form = {
                        firstName: '',
                        lastName: '',
                        mobileNumber: '',
                        email: '',
                        sport: '',
                        people: '',
                        date: '',
                        checkInTime: '',
                        checkOutTime: '',
                        borrowEquipment: false
                    };
                }
            };
        }
    </script>
</body>
</html>
