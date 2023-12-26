@props(['user'])

<form class="flex" action="/admin/update-status" method="POST">
    @csrf
    <input class="w-1/12 block px-4 overflow-hidden py-1 text-sm border-[1px] border-solid border-[#ccc] hidden" value="{{ $user->id }}" name="idUser" hidden/>
    <div class="w-1/12 px-4 overflow-hidden py-1 text-sm border-[1px] border-solid border-[#ccc]">{{ $user->id }}</div>
    <div class="flex-1 px-4 overflow-hidden py-1 text-sm border-[1px] border-solid border-[#ccc]">{{ $user->fullname }}</div>
    <div class="flex-1 px-4 overflow-hidden py-1 text-sm border-[1px] border-solid border-[#ccc]">{{ $user->email }}</div>
    <div class="flex-1 px-4 overflow-hidden py-1 text-sm border-[1px] border-solid border-[#ccc]">{{ $user->phone }}</div>
    <div class="flex-1 px-4 overflow-hidden py-1 text-sm border-[1px] border-solid border-[#ccc]">{{ $user->address }}</div>
    <div class="flex-1 px-4 overflow-hidden py-1 text-sm border-[1px] border-solid border-[#ccc]">
        {{ $user->role }}
    </div>

    @if ($user->status == '1')
        <div class="flex-1 px-4 overflow-hidden py-1 text-sm border-[1px] border-solid border-[#ccc]">
            Được đăng nhập
        </div>
    @else
        <div class="flex-1 px-4 overflow-hidden py-1 text-sm border-[1px] border-solid border-[#ccc]">
            Vô hiệu hóa
        </div>
    @endif

    <div class="flex-1 flex px-4 overflow-hidden py-1 text-sm border-[1px] border-solid border-[#ccc]">
        @if ($user->status == '1')
            <input type="submit" value="Inactive" name="inactive"
                class="border-solid border-[1px] border-red-500 text-red-500 cursor-pointer px-2">
        @else
            <input type="submit" value="Active" name="active"
                class="border-solid border-[1px] border-green-500 text-green-500 cursor-pointer px-2">
        @endif
    </div>
</form>
