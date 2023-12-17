<x-layout>
    <div class="max-w-container mx-auto py-10">
        <h1 class="text-lg font-medium py-10">Danh sách người dùng</h1>
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
                <livewire:user-item :user="$user" />
            @endforeach
        </div>
    </div>

</x-layout>
