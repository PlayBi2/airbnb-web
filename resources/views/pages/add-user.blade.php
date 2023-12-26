<x-layout>
    <div class="max-w-container mx-auto py-10 px-32">
        <h1 class="text-3xl font-semibold pb-5">Thêm mới người dùng</h1>
        <form action="/admin/add-user" method="post" class="block w-1/2">
            @csrf
            <div class="mb-5">
                <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900">
                    Fullname
                </label>
                <input type="text" id="fullname" name="fullname"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Nguyen van A"    
                >
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">
                    Email
                </label>
                <input type="email" id="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="name@flowbite.com">
            </div>
            <div class="mb-5">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">
                    Phone number
                </label>
                <input type="tel" id="phone" name="phone"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="0123456789"    
                >
            </div>
            <div class="mb-5">
                <label for="address" class="block mb-2 text-sm font-medium text-gray-900">
                    Address
                </label>
                <input type="text" id="address" name="address"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Cau giay, Ha Noi"    
                >
            </div>
            <div class="mb-5">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                    Password
                </label>
                <input type="password" id="password" name="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Password"    
                >
            </div>
            <div class="mb-5">
                <label for="role" class="block mb-2 text-sm font-medium text-gray-900">
                    Select role user</label>
                <select id="role" name="roleUser"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="guest">Guest</option>
                    <option value="admin">Admin</option>
                </select>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </form>

    </div>
</x-layout>
