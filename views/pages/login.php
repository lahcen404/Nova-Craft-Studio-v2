<div class="max-w-md mx-auto mt-10 bg-white p-8 rounded-lg shadow-md border border-gray-100">
    <h2 class="text-2xl font-bold mb-6 text-center text-gray-800">Login to NovaCraft</h2>


    <form action="/login" method="POST" class="space-y-4">
        <div>
            <label class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" required 
                   class="w-full mt-1 p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" required 
                   class="w-full mt-1 p-2 border border-gray-300 rounded focus:ring-blue-500 focus:border-blue-500">
        </div>

        <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded font-bold hover:bg-blue-700 transition">
            Sign In
        </button>
    </form>
    
    <p class="mt-4 text-center text-sm text-gray-600">
        Don't have an account? <a href="/register" class="text-blue-600 hover:underline">Register here</a>
    </p>
</div>