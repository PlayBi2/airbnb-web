<x-layout>
    <div class="max-w-container mx-auto py-10">
        <h1 class="text-4xl font-medium">Tài khoản</h1>
        <div class="py-2 flex items-center">
            <p class="font-medium">{{ auth()->user()->fullname }}</p>, <p class="ml-1">{{ auth()->user()->email }}</p>
        </div>
        <div class="grid grid-cols-3 gap-5 py-10 px-5">
            <a href="/user/detail-user" class="block shadow-itemBox p-5 rounded-lg overflow-hidden">
                <div class="text-3xl pb-4">
                    <i class="fa-regular fa-address-card"></i>
                </div>
                <h2 class="text-base font-medium pt-2 pb-1">Thông tin cá nhân</h2>
                <p class="text-[#717171]">Cung cấp thông tin cá nhân và cách chúng tôi có thể liên hệ với bạn</p>
            </a>
            <a href="/user/room-for-rent" class="block shadow-itemBox p-5 rounded-lg overflow-hidden">
                <div class="text-3xl pb-4">
                    <i class="fa-solid fa-people-roof"></i>
                </div>
                <h2 class="text-base font-medium pt-2 pb-1">Phòng cho thuê</h2>
                <p class="text-[#717171]">Quản lý các phòng đang được cho thuê</p>
            </a>
            <a href="/user/change-password" class="block shadow-itemBox p-5 rounded-lg overflow-hidden">
                <div class="text-3xl pb-4">
                    <i class="fa-solid fa-shield-halved"></i>
                </div>
                <h2 class="text-base font-medium pt-2 pb-1">Đổi mật khẩu</h2>
                <p class="text-[#717171]">Thay đổi mật khẩu để bảo mật tài khoản của bạn</p>
            </a>
        </div>
    </div>
</x-layout>
<x-flash />