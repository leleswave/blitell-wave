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
            :border="false" />

        <!-- Filter Section -->
        <div class="flex justify-between mb-5">
            <div class="w-full max-w-xs">
                <label for="phone-filter" class="block text-sm font-medium text-gray-700">Phone Number Filter</label>
                <input type="text" id="phone-filter" name="phone-filter" placeholder="Enter phone number"
                    class="block w-full px-4 py-2 mt-1 text-gray-700 border rounded shadow-sm focus:ring focus:ring-blue-300">
            </div>
        </div>

        <section class="py-12 lg:py-24 bg-orange-50">
            <div class="container mx-auto px-4">
                <div class="flex mb-4 items-center">
                    <svg width="8" height="8" viewbox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="4" cy="4" r="4" fill="#BEF264"></circle>
                    </svg>
                    <span class="inline-block ml-2 text-sm font-medium text-teal-900">Solutions</span>
                </div>
                <div class="border-t pt-16">
                    <div>
                        <h1 class="font-heading text-5xl sm:text-6xl mb-24">Key to clean future</h1>
                        <div class="flex flex-wrap -mx-4">
                            <div class="w-full lg:w-1/2 px-4 mb-16 lg:mb-0">
                                <div class="max-w-lg">
                                    <h1 class="font-heading text-4xl sm:text-5xl mb-6">Solar Energy</h1>
                                    <p class="text-lg text-gray-700 mb-10">Solar panels convert sunlight into electricity. Photovoltaic (PV) cells on these panels capture the energy from the sun and convert it into electrical power.</p>
                                    <a href="#" class="inline-flex py-4 px-6 items-center justify-center text-lg font-medium text-black hover:text-white border border-black hover:bg-black rounded-full transition duration-200">Learn more</a>
                                </div>
                            </div>
                            <div class="w-full lg:w-1/2 px-4">
                                <img class="block w-full lg:w-116 lg:h-116 lg:ml-auto" src="flow-assets/features/image-right.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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