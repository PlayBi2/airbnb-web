<x-layout>
    <div class="max-w-container mx-auto py-10">
        <div class="flex items-center justify-between py-10">
            <h1 class="text-lg font-medium">Danh sách người dùng</h1>
            <a href="/admin/add-user" class="flex items-center border-[1px] border-solid border-sky-500 text-sky-500 px-4 py-2 rounded-md transition-all ease-linear hover:text-white hover:bg-sky-500">
                <span><i class="fa-solid fa-user-plus"></i></span>
                <span class="text-sm ml-1">Thêm người dùng</span>
            </a>
        </div>
        <div class="">
            <div class="flex font-bold">
                <div class="w-1/12 px-4 py-1 text-sm border-[1px] border-solid border-[#ccc]">id</div>
                <div class="flex-1 px-4 py-1 text-sm border-[1px] border-solid border-[#ccc]">fullname</div>
                <div class="flex-1 px-4 py-1 text-sm border-[1px] border-solid border-[#ccc]">email</div>
                <div class="flex-1 px-4 py-1 text-sm border-[1px] border-solid border-[#ccc]">phone</div>
                <div class="flex-1 px-4 py-1 text-sm border-[1px] border-solid border-[#ccc]">address</div>
                <div class="flex-1 px-4 py-1 text-sm border-[1px] border-solid border-[#ccc]">
                    role
                </div>
                <div class="flex-1 px-4 py-1 text-sm border-[1px] border-solid border-[#ccc]">
                    Status
                </div>
                <div class="flex-1 px-4 py-1 text-sm border-[1px] border-solid border-[#ccc]">
                    Sửa trạng thái
                </div>
            </div>
            @foreach ($users as $user)
                @if ($user->id != auth()->user()->id)
                    <livewire:user-item :user="$user" />
                @endif
            @endforeach
        </div>
    </div>

</x-layout>
