<x-app-layout>
    <div class="container mx-auto py-12">
        <h1 class="text-3xl font-bold mb-6">Checkout</h1>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full bg-white">
                <thead class="bg-indigo-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Course Name</th>
                        <th class="py-3 px-4 text-left">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-3 px-4">{{ $course->title }}</td>
                        <td class="py-3 px-4" id="course-price">{{ $course->price }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Donation -->
        <div class="mt-6">
            <form action="{{ route('purchase') }}" method="POST" id="checkout-form">
                @csrf
                <input type="hidden" name="course_id" value="{{ $course->id }}">
                <input type="hidden" name="amount" value="{{ $course->price }}" id="amount">

                <div class="mt-4">
                    <label for="donation" class="block text-sm font-medium text-gray-700">Donation Amount</label>
                    <input type="number" id="donation" name="donation" min="0" value="0" class="mt-1 p-2 border border-gray-300 rounded-md" oninput="updateTotal()">
                </div>

                <div class="mt-4">
                    <span class="text-lg font-bold">Total Amount: <span id="total-amount">{{ $course->price }}</span></span>
                </div>

                <button type="submit" class="mt-6 px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">
                    Complete Purchase
                </button>
            </form>
        </div>
        
    </div>

    <script>
        function updateTotal() {
            const coursePrice = parseFloat(document.getElementById('course-price').textContent);
            const donation = parseFloat(document.getElementById('donation').value) || 0;
            const totalAmount = coursePrice + donation;

            document.getElementById('total-amount').textContent = totalAmount.toFixed(2); // Format to 2 decimal places
            document.getElementById('amount').value = totalAmount.toFixed(2); // Update hidden input for form submission
        }
    </script>
</x-app-layout>