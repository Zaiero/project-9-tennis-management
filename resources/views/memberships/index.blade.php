<x-base-layout>
    <main class="container mx-auto my-12 px-4 sm:px-6 lg:px-12">
        <div class="bg-white p-6 sm:p-8 rounded-xl shadow-lg">
            <div class="max-w-6xl mx-auto space-y-6">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                    <h2 class="text-2xl sm:text-3xl font-bold text-gray-800">🏅 Memberships</h2>
                    <a href="{{ route('memberships.create') }}"
                       class="bg-indigo-600 hover:bg-indigo-700 text-white font-semibold py-2 px-4 rounded-xl shadow-lg transition duration-300 transform hover:scale-105 hover:shadow-2xl">
                        ➕ Create Membership
                    </a>
                </div>

                @foreach ($memberships as $membership)
                    <div class="bg-indigo-50 shadow-lg rounded-2xl p-6 hover:shadow-2xl transition duration-300">
                        <div class="flex flex-col h-full">
                            <div class="space-y-2 mb-4">
                                <p class="text-lg font-semibold text-gray-800">
                                    {{ $membership->user->firstname }} {{ $membership->user->lastname }} – 
                                    <span class="text-indigo-600">{{ $membership->membershipLevel->name }}</span>
                                </p>
                                <p class="text-sm text-gray-600"><strong>Start Date:</strong> {{ $membership->start_date }}</p>
                                <p class="text-sm text-gray-600"><strong>End Date:</strong> {{ $membership->end_date }}</p>
                                <p class="text-sm text-gray-600"><strong>Active:</strong> {{ $membership->active ? 'Yes' : 'No' }}</p>
                                <p class="text-sm text-gray-600"><strong>Balance:</strong> ${{ $membership->balance }}</p>
                            </div>

                            <div class="mt-auto pt-4 flex flex-wrap gap-2 border-t border-indigo-100">
                                <a href="{{ route('memberships.show', $membership->id) }}"
                                   class="bg-blue-500 hover:bg-blue-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                    <i class="fas fa-eye text-sm"></i> <span class="text-sm">View</span>
                                </a>
                                <a href="{{ route('memberships.edit', $membership->id) }}"
                                   class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                    <i class="fas fa-pencil-alt text-sm"></i> <span class="text-sm">Edit</span>
                                </a>
                                <form action="{{ route('memberships.destroy', $membership->id) }}" method="POST"
                                      onsubmit="return confirm('Are you sure?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                            class="bg-red-500 hover:bg-red-600 text-white px-3 py-2 rounded-md shadow-md flex items-center space-x-1 transition duration-200">
                                        <i class="fas fa-trash-alt text-sm"></i> <span class="text-sm">Delete</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
</x-base-layout>