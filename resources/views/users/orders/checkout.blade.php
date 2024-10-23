<x-app-layout>
    <div class="container mx-auto py-12">
        <h1 class="text-3xl font-bold mb-6">Checkout</h1>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Course Name</th>
                        <th class="py-3 px-4 text-left">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-3 px-4">{{ $course->title }}</td>
                        <td class="py-3 px-4">{{ $course->price }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-6">
            <form action="{{ route('purchase') }}" method="POST">
                @csrf
                <input type="hidden" name="course_id" value="{{ $course->id }}">
                <input type="hidden" name="amount" value="{{ $course->price }}">
                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700">
                    Complete Purchase
                </button>
            </form>
        </div>
    </div>
</x-app-layout>