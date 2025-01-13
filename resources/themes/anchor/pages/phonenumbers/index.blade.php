<?php

use function Laravel\Folio\{middleware, name};

middleware('auth');
name('phonenumbers'); // A route name is recommended

?>

<x-layouts.app>
    <x-app.container class="lg:space-y-6">
        <x-app.heading title="Phone Numbers" description="Search and manage your phone numbers." />

        <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="p-4 space-y-4">
                <div class="flex flex-col md:flex-row md:items-center md:space-x-4 space-y-2 md:space-y-0">
                  <div class="w-full md:w-1/2">
                      <label for="search" class="sr-only">Search</label>
                      <div class="relative w-full">
                          <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                              <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                  <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                              </svg>
                          </div>
                          <input type="text" id="search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Search by digits or phrases">
                      </div>
                  </div>
                  <button type="button" class="text-white bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-primary-600 dark:hover:bg-primary-700 focus:outline-none dark:focus:ring-primary-800">Search</button>
                    <button type="button" class="text-gray-900 bg-white border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:bg-gray-600 focus:outline-none dark:focus:ring-primary-800">Reset filters</button>
                </div>

                <div class="p-4 bg-blue-50 dark:bg-blue-900 rounded-lg text-blue-800 dark:text-blue-300 flex items-center justify-between">
                    <span>Sending OTP or 2FA? Skip wait times, let us handle compliance, and launch globally on day 1 with Verify.</span>
                    <a href="#" class="text-blue-600 dark:text-blue-400 underline hover:no-underline">Learn more about Verify →</a>
                </div>

                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-4 py-3">Number</th>
                                <th scope="col" class="px-4 py-3">Type</th>
                                <th scope="col" class="px-4 py-3">Capabilities</th>
                                <th scope="col" class="px-4 py-3">Address Requirement</th>
                                <th scope="col" class="px-4 py-3">Monthly fee</th>
                                <th scope="col" class="px-4 py-3"></th>
                            </tr>
                        </thead>
                        <tbody>
                          @foreach ($phoneNumbers as $phoneNumber)
                            <tr class="border-b dark:border-gray-700">
                                <td class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">{{ $phoneNumber['number'] }}</td>
                                <td class="px-4 py-3">{{ $phoneNumber['type'] }}</td>
                                <td class="px-4 py-3">
                                    @if ($phoneNumber['voice'])
                                        <x-icons.phone class="h-5 w-5 text-green-500 inline-block"/>
                                    @endif
                                    @if ($phoneNumber['sms'])
                                        <x-icons.sms class="h-5 w-5 text-green-500 inline-block"/>
                                    @endif
                                    @if ($phoneNumber['mms'])
                                        <x-icons.mms class="h-5 w-5 text-green-500 inline-block"/>
                                    @endif
                                    @if ($phoneNumber['fax'])
                                        <x-icons.fax class="h-5 w-5 text-green-500 inline-block"/>
                                    @endif
                                </td>
                                <td class="px-4 py-3">{{ $phoneNumber['address_requirement'] }}</td>
                                <td class="px-4 py-3">${{ $phoneNumber['monthly_fee'] }}</td>
                                <td class="px-4 py-3 text-right">
                                  <button class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Buy</button>
                                </td>
                            </tr>
                          @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-app.container>
</x-layouts.app>