<?php

use function Laravel\Folio\{middleware, name};

middleware('auth');
name('sms');
?>

<x-layouts.app>
    <x-app.container x-data="{ success: false }" class="lg:space-y-6" x-cloak>
    <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
            <div class="flex flex-wrap justify-between gap-3 p-4">
              <div class="flex min-w-72 flex-col gap-3">
                <p class="text-[#1C160C] text-4xl font-black leading-tight tracking-[-0.033em]">Phone Numbers</p>
                <p class="text-[#000000] text-base font-normal leading-normal">Search and manage your phone numbers.</p>
              </div>
            </div>
            <div class="flex max-w-[480px] flex-wrap items-end gap-4 px-4 py-3">
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#1C160C] text-base font-medium leading-normal pb-2">Number</p>
                <input
                  placeholder="Number"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#1C160C] focus:outline-0 focus:ring-0 border border-[#E9DFCE] bg-[#FFFFFF] focus:border-[#E9DFCE] h-14 placeholder:text-[#A18249] p-[15px] text-base font-normal leading-normal"
                  value=""
                />
              </label>
              <label class="flex flex-col min-w-40 flex-1">
                <p class="text-[#1C160C] text-base font-medium leading-normal pb-2">Search by digits or phrases</p>
                <input
                  placeholder="Enter digits or phrases"
                  class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-xl text-[#1C160C] focus:outline-0 focus:ring-0 border border-[#E9DFCE] bg-[#FFFFFF] focus:border-[#E9DFCE] h-14 placeholder:text-[#A18249] p-[15px] text-base font-normal leading-normal"
                  value=""
                />
              </label>
            </div>
            <div class="flex px-4 py-3">
              <div class="flex h-10 flex-1 items-center justify-center rounded-full bg-[#F4EFE6] p-1">
                <label
                  class="flex cursor-pointer h-full grow items-center justify-center overflow-hidden rounded-full px-2 has-[:checked]:bg-[#FFFFFF] has-[:checked]:shadow-[0_0_4px_rgba(0,0,0,0.1)] has-[:checked]:text-[#1C160C] text-[#A18249] text-sm font-medium leading-normal"
                >
                  <span class="truncate">Match to</span>
                  <input type="radio" name="52eb9580-e37b-4733-a24a-74ebfe1ab24f" class="invisible w-0" value="Match to" />
                </label>
                <label
                  class="flex cursor-pointer h-full grow items-center justify-center overflow-hidden rounded-full px-2 has-[:checked]:bg-[#FFFFFF] has-[:checked]:shadow-[0_0_4px_rgba(0,0,0,0.1)] has-[:checked]:text-[#1C160C] text-[#A18249] text-sm font-medium leading-normal"
                >
                  <span class="truncate">First part of number</span>
                  <input type="radio" name="52eb9580-e37b-4733-a24a-74ebfe1ab24f" class="invisible w-0" value="First part of number" checked="" />
                </label>
                <label
                  class="flex cursor-pointer h-full grow items-center justify-center overflow-hidden rounded-full px-2 has-[:checked]:bg-[#FFFFFF] has-[:checked]:shadow-[0_0_4px_rgba(0,0,0,0.1)] has-[:checked]:text-[#1C160C] text-[#A18249] text-sm font-medium leading-normal"
                >
                  <span class="truncate">Search</span>
                  <input type="radio" name="52eb9580-e37b-4733-a24a-74ebfe1ab24f" class="invisible w-0" value="Search" />
                </label>
              </div>
            </div>
            <div class="flex px-4 py-3 justify-start">
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-[#019863] text-[#FFFFFF] gap-2 pl-4 text-sm font-bold leading-normal tracking-[0.015em]"
              >
                <div class="text-[#FFFFFF]" data-icon="MagnifyingGlass" data-size="20px" data-weight="regular">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                    <path
                      d="M229.66,218.34l-50.07-50.06a88.11,88.11,0,1,0-11.31,11.31l50.06,50.07a8,8,0,0,0,11.32-11.32ZM40,112a72,72,0,1,1,72,72A72.08,72.08,0,0,1,40,112Z"
                    ></path>
                  </svg>
                </div>
                <span class="truncate">Search</span>
              </button>
            </div>
            <p class="text-[#A18249] text-sm font-normal leading-normal pb-3 pt-1 px-4 underline">Advanced Search</p>
            <div class="p-4 @container">
              <div class="flex flex-1 flex-col items-start justify-between gap-4 rounded-xl border border-[#E9DFCE] bg-[#FFFFFF] p-5 @[480px]:flex-row @[480px]:items-center">
                <div class="flex flex-col gap-1">
                  <p class="text-[#1C160C] text-base font-bold leading-tight">Sending OTP or 2FA?</p>
                  <p class="text-[#A18249] text-base font-normal leading-normal">Skip wait times, let us handle compliance, and launch globally on day 1 with Verify.</p>
                </div>
                <a class="text-sm font-bold leading-normal tracking-[0.015em] flex gap-2 text-[#1C160C]" href="#">
                  Learn more about Verify
                  <div class="text-[#1C160C]" data-icon="ArrowRight" data-size="20px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" fill="currentColor" viewBox="0 0 256 256">
                      <path
                        d="M221.66,133.66l-72,72a8,8,0,0,1-11.32-11.32L196.69,136H40a8,8,0,0,1,0-16H196.69L138.34,61.66a8,8,0,0,1,11.32-11.32l72,72A8,8,0,0,1,221.66,133.66Z"
                      ></path>
                    </svg>
                  </div>
                </a>
              </div>
            </div>
            <div class="px-4 py-3 @container">
              <div class="flex overflow-hidden rounded-xl border border-[#E9DFCE] bg-[#FFFFFF]">
                <table class="flex-1">
                  <thead>
                    <tr class="bg-[#FFFFFF]">
                      <th class="table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-120 px-4 py-3 text-left text-[#1C160C] w-[400px] text-sm font-medium leading-normal">Number</th>
                      <th class="table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-240 px-4 py-3 text-left text-[#1C160C] w-60 text-sm font-medium leading-normal">Type</th>
                      <th class="table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-360 px-4 py-3 text-left text-[#1C160C] w-60 text-sm font-medium leading-normal">Capabilities</th>
                      <th class="table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-480 px-4 py-3 text-left text-[#1C160C] w-[400px] text-sm font-medium leading-normal">
                        Address Requirement
                      </th>
                      <th class="table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-600 px-4 py-3 text-left text-[#1C160C] w-[400px] text-sm font-medium leading-normal">
                        Monthly Fee
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="border-t border-t-[#E9DFCE]">
                      <td class="table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-120 h-[72px] px-4 py-2 w-[400px] text-[#1C160C] text-sm font-normal leading-normal">
                        +1 608 938 8459 Monticello, WI US
                      </td>
                      <td class="table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-240 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#F4EFE6] text-[#1C160C] text-sm font-medium leading-normal w-full"
                        >
                          <span class="truncate">Local</span>
                        </button>
                      </td>
                      <td class="table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-360 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                        <button
                          class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-8 px-4 bg-[#F4EFE6] text-[#1C160C] text-sm font-medium leading-normal w-full"
                        >
                          <span class="truncate">Voice, SMS</span>
                        </button>
                      </td>
                      <td class="table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-480 h-[72px] px-4 py-2 w-[400px] text-[#A18249] text-sm font-normal leading-normal">None</td>
                      <td class="table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-600 h-[72px] px-4 py-2 w-[400px] text-[#A18249] text-sm font-normal leading-normal">$1.15</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <style>
                          @container(max-width:120px){.table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-120{display: none;}}
                @container(max-width:240px){.table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-240{display: none;}}
                @container(max-width:360px){.table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-360{display: none;}}
                @container(max-width:480px){.table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-480{display: none;}}
                @container(max-width:600px){.table-2c64cbb0-08c2-4a0a-8e9b-be6d464bf427-column-600{display: none;}}
              </style>
            </div>
            <div class="flex px-4 py-3 justify-start">
              <button
                class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-full h-10 px-4 bg-transparent text-[#1C160C] text-sm font-bold leading-normal tracking-[0.015em]"
              >
                <span class="truncate">Edit</span>
              </button>
            </div>
          </div>
    </x-app.container>
</x-layouts.app>