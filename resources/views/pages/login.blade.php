<x-layout>
    <div class="w-2/5 mx-auto py-10">
        <h2 class="text-center font-medium text-2xl uppercase">Đăng nhập</h2>
        <p class="text-center text-red-300 text-sm font-medium">Chào mừng bạn đến với Airbnb!</p>
        <form action="/login" method="post" class="block py-5">
            @csrf
            <div class="my-4">
                <input type="email" name="email" id="" placeholder="Email..."
                    class="block w-full border-[1px] border-solid border-[#dddddd] outline-none text-base px-4 py-2 rounded-full">
                @error('email')
                    <p class="text-red-500 text-xs leading-6 ml-2">{{ $message }}</p>
                @enderror
            </div>
            <div class="my-4">
                <input type="password" name="password" id="" placeholder="Password..."
                class="block w-full border-[1px] border-solid border-[#dddddd] outline-none text-base px-4 py-2 rounded-full">
                @error('password')
                    <p class="text-red-500 text-xs leading-6 ml-2">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="bg-red-500 py-2 rounded-full text-white w-full">Đăng nhập</button>
        </form>
        <p class="text-sm text-right">Nếu bạn chưa có tài khoản,<a href="/register"
                class="transition-all ease-linear hover:underline hover:text-red-500"> đăng ký tại đây!</a></p>
    </div>
</x-layout>
