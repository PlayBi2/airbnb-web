<x-layout>
    <div class="max-w-container mx-auto py-10 px-32">
        <h1 class="text-3xl font-semibold pb-5">Mật khẩu và bảo mật</h1>
        <form action="/user/change-password" method="post" class="block w-1/3">
            @csrf
            <div class="py-2">
                <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900">
                    Your current password
                </label>
                <input type="password" id="current-password" name="current-password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="Your current password">
                @error('currentPassword')
                    <p class="text-xs text-red-500 ">
                        {{ $message }}
                    <p>
                    @enderror
            </div>
            <div class="py-2">
                <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900">
                    Your new password
                </label>
                <input type="password" id="new-password" name="new-password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="Your new password">
                @error('new-password')
                    <p class="text-xs text-red-500 ">
                        {{ $message }}
                    <p>
                    @enderror
            </div>
            <div class="py-2">
                <label for="pre-password" class="block mb-2 text-sm font-medium text-gray-900">
                    Confirm new password
                </label>
                <input type="password" id="pre-password" name="confirm-password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 block w-full p-2.5"
                    placeholder="Confirm new password">
                @error('confirm-password')
                    <p class="text-xs text-red-500 ">
                        {{ $message }}
                    <p>
                    @enderror
            </div>
            <button type="submit"
                class="text-white mt-4 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                Submit
            </button>
        </form>
    </div>
<x-flash />
</x-layout>

