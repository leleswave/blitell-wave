<?php
    use function Laravel\Folio\{middleware, name};
    middleware('auth');
    name('callflows');
?>

<x-layouts.app>
    <x-app.container x-data class="lg:space-y-6" x-cloak>

        <x-app.alert id="dashboard_alert" class="hidden lg:flex">
            Manage your call flows. Add new flows or view and edit existing ones.
        </x-app.alert>

        <x-app.heading
            title="Call Flows"
            description="Create and manage call flows below."
            :border="false"
        />

        <!-- Add New Call Flow Button -->
        <div class="flex justify-end mb-5">
            <button
                class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                Add New Call Flow
            </button>
        </div>

        <!-- Call Flows List -->
        <div class="overflow-hidden bg-white rounded shadow">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 border-b">#</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 border-b">Call Flow Name</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 border-b">Status</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 border-b">1</td>
                        <td class="px-6 py-4 border-b">Support Line</td>
                        <td class="px-6 py-4 border-b">
                            <span class="px-2 py-1 text-sm font-medium text-white bg-green-500 rounded">
                                Active
                            </span>
                        </td>
                        <td class="px-6 py-4 border-b">
                            <button class="text-blue-600 hover:underline">Edit</button>
                            <button class="ml-2 text-red-600 hover:underline">Delete</button>
                        </td>
                    </tr>
                    <tr class="hover:bg-gray-100">
                        <td class="px-6 py-4 border-b">2</td>
                        <td class="px-6 py-4 border-b">Sales Inquiry</td>
                        <td class="px-6 py-4 border-b">
                            <span class="px-2 py-1 text-sm font-medium text-white bg-yellow-500 rounded">
                                Pending
                            </span>
                        </td>
                        <td class="px-6 py-4 border-b">
                            <button class="text-blue-600 hover:underline">Edit</button>
                            <button class="ml-2 text-red-600 hover:underline">Delete</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </x-app.container>
</x-layouts.app>