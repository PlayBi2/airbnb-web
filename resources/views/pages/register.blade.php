<x-layout>
    <div class="w-2/5 mx-auto py-10">
        <h2 class="text-center font-medium text-2xl uppercase">Đăng ký</h2>
        <p class="text-center text-red-300 text-sm font-medium">Chào mừng bạn đến với Airbnb!</p>
        <form action="/register" method="post" class="block py-5">
            @csrf
            <div class="my-4">
                <input type="email" name="email" id="" placeholder="Email..."
                    class="block w-full border-[1px] border-solid border-[#dddddd] outline-none text-base px-4 py-2 rounded-full focus:border-red-500"
                    value="{{ old('email') }}"    
                >
                @error('email')
                    <p class="text-red-500 text-xs leading-6 ml-2">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <input type="text" name="fullname" id="" placeholder="Fullname..."
                    class="block w-full border-[1px] border-solid border-[#dddddd] outline-none text-base px-4 py-2 rounded-full focus:border-red-500"
                    value="{{ old('fullname') }}"    
                >
                @error('fullname')
                    <p class="text-red-500 text-xs leading-6 ml-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-4">
                <input type="tel" name="phone" id="" placeholder="Phone..."
                    class="block w-full border-[1px] border-solid border-[#dddddd] outline-none text-base px-4 py-2 rounded-full focus:border-red-500"
                    value="{{ old('phone') }}"    
                >
                @error('phone')
                    <p class="text-red-500 text-xs leading-6 ml-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-4">
                <input type="text" name="address" id="" placeholder="Address..."
                    class="block w-full border-[1px] border-solid border-[#dddddd] outline-none text-base px-4 py-2 rounded-full focus:border-red-500"
                    value={{ old('address') }}    
                >
                @error('address')
                    <p class="text-red-500 text-xs leading-6 ml-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-4">
                <input type="password" name="password" id="" placeholder="Password..."
                    class="block w-full border-[1px] border-solid border-[#dddddd] outline-none text-base px-4 py-2 rounded-full focus:border-red-500">
                @error('password')
                    <p class="text-red-500 text-xs leading-6 ml-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-4">
                <input type="password" name="password_confirmation" id="" placeholder="Confirm password..."
                    class="block w-full border-[1px] border-solid border-[#dddddd] outline-none text-base px-4 py-2 rounded-full focus:border-red-500">
            </div>
            <button type="submit" class="bg-red-500 py-2 rounded-full text-white w-full">Đăng ký</button>
        </form>
        <p class="text-sm text-right">Nếu bạn đã có tài khoản,<a href="/login"
                class="transition-all ease-linear hover:underline hover:text-red-500"> đăng nhập tại đây!</a></p>
    </div>
</x-layout>
