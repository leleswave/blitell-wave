<?php

use function Laravel\Folio\{middleware, name};

middleware('auth');
name('phonenumbers'); // A route name is recommended

?>



<x-layouts.app>
    <x-app.container class="lg:space-y-6">
        <x-app.heading title="Phone Numbers" description="Search and manage your phone numbers." />
		<div class="bg-gray-100 p-6">
        <!-- Search Criteria -->
        <div class="flex flex-col md:flex-row space-y-4 md:space-y-0 md:space-x-4 mb-6">
            <div class="flex-1">
                <label for="number" class="block text-sm font-medium text-gray-700">Number</label>
                <select id="number" name="number" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>Number</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="flex-1">
                <label for="search" class="block text-sm font-medium text-gray-700">Search by digits or phrases</label>
                <input type="text" id="search" name="search" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            </div>
            <div class="flex-1">
                <label for="match" class="block text-sm font-medium text-gray-700">Match to</label>
                <select id="match" name="match" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>First part of number</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <div class="flex items-end space-x-2">
                <button class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                    Search
                </button>
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">Reset filters</a>
            </div>
        </div>

        <!-- Advanced Search -->
        <div class="mb-6">
            <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">Advanced Search</a>
        </div>

        <!-- OTP or 2FA Info -->
        <div class="bg-white p-4 border border-blue-300 rounded-md mb-6">
            <div class="flex justify-between items-center">
                <div>
                    <h2 class="text-lg font-medium text-gray-900">Sending OTP or 2FA?</h2>
                    <p class="text-sm text-gray-500">Skip wait times, let us handle compliance, and launch globally on day 1 with Verify.</p>
                </div>
                <a href="#" class="text-sm font-medium text-blue-600 hover:text-blue-500">Learn more about Verify</a>
            </div>
        </div>

        <!-- Table of Phone Numbers -->
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Number</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Capabilities</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address Requirement</th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Monthly fee</th>
                        <th scope="col" class="relative px-6 py-3"></th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <span class="font-medium text-gray-900">+1 608 938 8459</span>
                                <span class="ml-2 text-sm text-gray-500">Monticello, WI US</span>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-gray-900">Local</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap space-x-2">
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Voice</span>
                            <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">SMS</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-gray-500">None</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="text-sm text-gray-900">$1.15</span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                            <a href="#" class="text-blue-600 hover:text-blue-500">Edit</a>
                        </td>
                    </tr>
                    <!-- More rows here -->
                </tbody>
            </table>
        </div>
    </div>
    </x-app.container>
</x-layouts.app>
