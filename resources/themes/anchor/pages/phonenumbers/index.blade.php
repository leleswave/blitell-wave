<?php
    use function Laravel\Folio\{middleware, name};
    middleware('auth');
    name('phonenumbers');
?>

<x-layouts.app>
    <x-app.container x-data class="lg:space-y-6" x-cloak>

        <x-app.alert id="dashboard_alert" class="hidden lg:flex">
            Manage your phone numbers. Add new numbers or view your existing ones.
        </x-app.alert>

        <x-app.heading
            title="Phone Numbers"
            description="Manage your phone numbers below."
            :border="false"
        />

        <!-- Add New Phone Number Button -->
        <div class="flex justify-end mb-5">
            <a href="{{ route('phonenumbers.create') }}"
               class="px-4 py-2 text-white bg-blue-600 rounded hover:bg-blue-700">
                Add New Number
            </a>
        </div>

        <!-- Phone Numbers List -->
        <div class="overflow-hidden bg-white rounded shadow">
            <table class="min-w-full bg-white">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 border-b">#</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 border-b">Phone Number</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 border-b">Status</th>
                        <th class="px-6 py-3 text-left text-sm font-medium text-gray-500 border-b">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($phoneNumbers as $index => $phoneNumber)
                        <tr class="hover:bg-gray-100">
                            <td class="px-6 py-4 border-b">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 border-b">{{ $phoneNumber->number }}</td>
                            <td class="px-6 py-4 border-b">
                                <span class="px-2 py-1 text-sm font-medium text-white bg-green-500 rounded">
                                    {{ $phoneNumber->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 border-b">
                                <a href="{{ route('phonenumbers.edit', $phoneNumber->id) }}"
                                   class="text-blue-600 hover:underline">Edit</a>
                                <form action="{{ route('phonenumbers.destroy', $phoneNumber->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ml-2 text-red-600 hover:underline">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-6 py-4 text-center text-gray-500 border-b">
                                No phone numbers found.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </x-app.container>
</x-layouts.app>
