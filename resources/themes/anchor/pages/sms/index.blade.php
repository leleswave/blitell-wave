<?php
    use function Laravel\Folio\{middleware, name};
    middleware('auth');
    name('sms');
?>

<x-layouts.app>
    <x-app.container x-data class="lg:space-y-6" x-cloak>

        <x-app.alert id="dashboard_alert" class="hidden lg:flex">
            Manage your SMS messages. Filter by phone number and view conversation history.
        </x-app.alert>

        <x-app.heading
            title="SMS Management"
            description="Search, view, and respond to SMS conversations below."
            :border="false"
        />

        <!-- Filter Section -->
        <div class="flex justify-between mb-5">
            <div class="w-full max-w-xs">
                <label for="phone-filter" class="block text-sm font-medium text-gray-700">Phone Number Filter</label>
                <input type="text" id="phone-filter" name="phone-filter" placeholder="Enter phone number"
                    class="block w-full px-4 py-2 mt-1 text-gray-700 border rounded shadow-sm focus:ring focus:ring-blue-300">
            </div>
        </div>

        <!-- SMS Conversations -->
        <div class="grid grid-cols-3 gap-5">
            <!-- Conversations List -->
            <div class="col-span-1 bg-white rounded shadow">
                <h3 class="p-4 text-lg font-medium border-b">Conversations</h3>
                <ul class="divide-y">
                    <li class="p-4 hover:bg-gray-100 cursor-pointer">+1 123-456-7890</li>
                    <li class="p-4 hover:bg-gray-100 cursor-pointer">+1 987-654-3210</li>
                    <li class="p-4 hover:bg-gray-100 cursor-pointer">+1 555-000-1234</li>
                </ul>
            </div>

            <!-- Chat Window -->
            <div class="col-span-2 bg-white rounded shadow">
                <div class="flex flex-col h-full">
                    <div class="flex-1 p-4 overflow-y-auto">
                        <!-- Chat Messages -->
                        <div class="mb-4">
                            <div class="p-2 mb-2 text-sm bg-gray-200 rounded">Hello, how can I help you?</div>
                            <div class="p-2 text-sm text-white bg-blue-600 rounded self-end">I need support with my account.</div>
                        </div>
                    </div>
                    <!-- Message Input -->
                    <div class="flex p-4 border-t">
                        <input type="text" placeholder="Type your message..." 
                            class="flex-1 px-4 py-2 mr-2 text-gray-700 border rounded shadow-sm focus:ring focus:ring-blue-300">
                        <button class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">Send</button>
                    </div>
                </div>
            </div>
        </div>

    </x-app.container>
</x-layouts.app>
