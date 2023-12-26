<x-layout>
    <div class=" min-h-screen mx-auto flex flex-col items-center">
        <div class="w-full  h-72  flex flex-row  items-center justify-center bg-orange-600 p-10">
            <div class="max-w-container grid-cols-3 grid-row grid gap-20">
                <div
                    class=" shadow-xl block min-w-lg p-6 bg-white border border-gray-200 rounded-lg  flex flex-row justify-between ">
                    <a href="#" class=" mr-10 ">
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-red-500 ">Số phòng cho thuê</h5>
                        <p class="font-normal text-gray-700 text-2xl dark:text-gray-400">0 / 0</p>
                    </a>
                    <div class="flex items-end">
                        <button type="button"
                            class="text-white bg-red-500  font-medium rounded-lg text-xs px-4 py-1.5 me-2 mb-2 shadow-lg focus:outline-none dark:focus:ring-blue-800">Chi
                            tiết</button>
                    </div>
                </div>
                <div
                    class=" shadow-xl block min-w-lg p-6 bg-white border border-gray-200 rounded-lg  flex flex-row justify-between ">
                    <a href="#" class=" mr-10 ">
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-red-500 ">Doanh thu theo năm</h5>
                        <p class="font-normal text-gray-700 text-2xl dark:text-gray-400">0 / 0</p>
                    </a>
                    <div class="flex items-end">
                        <button type="button"
                            class="text-white bg-red-500  font-medium rounded-lg text-xs px-4 py-1.5 me-2 mb-2 shadow-lg focus:outline-none dark:focus:ring-blue-800">Chi
                            tiết</button>
                    </div>
                </div>
                <div
                    class=" shadow-xl block min-w-lg p-6 bg-white border border-gray-200 rounded-lg  flex flex-row justify-between ">
                    <a href="#" class=" mr-10 ">
                        <h5 class="mb-2 text-lg font-bold tracking-tight text-red-500 ">Tổng tiền cọc nhà</h5>
                        <p class="font-normal text-gray-700 text-2xl dark:text-gray-400">0 / 0</p>
                    </a>
                    {{-- <div class="flex items-end">
                        <button type="button"
                            class="text-white bg-red-500  font-medium rounded-lg text-xs px-4 py-1.5 me-2 mb-2 shadow-lg focus:outline-none dark:focus:ring-blue-800">Chi
                            tiết</button>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="w-full   flex flex-row  items-center justify-center  p-10">
            <div class="max-w-container mx-auto ">
                <div class=" rounded flex flex-row items-center justify-between bg-white shadow-lg p-10 my-3">
                    <form action="" method="post"
                        class="flex w-1/3  text-center shadow-searchForm p-2 border-solid border-[1px] border-[#DDDDDD] rounded-full overflow-hidden">
                        <input type="text" placeholder="Nhập tên phòng bất kì..." name="" id=""
                            class="w-full px-2 py-1 outline-none text-sm">
                        <button class="px-2 py-1 bg-red-500 text-white rounded-full"><i
                                class="fa-solid fa-magnifying-glass"></i></button>
                    </form>
                    <button type="button" onclick="window.location.href=`/for-renter/new-product`"
                        class="text-white bg-red-500 flex flex-row items-center justify-content-center  font-medium rounded-lg text-sm px-5 py-2.5 shadow-lg focus:outline-none dark:focus:ring-blue-800">
                        <p class="text-3xl">+</p>
                        <p class="mx-2  my-2">Đăng tin thuê nhà</p>
                    </button>
                </div>

                <div class=" rounded flex flex-row items-center justify-between bg-white shadow-lg p-10 my-3">
                    <div class="flex flex-row items-center justify-between gap-3">
                        <div class="flex flex-row items-center justify-between">
                            <label for="countries_disabled"
                                class="block  text-sm font-medium text-gray-900 dark:text-white">Select an
                                option</label>
                            <select id="countries_disabled"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option selected>Sắp xếp theo</option>
                                <option value="US">Giá từ cao đến thấp</option>
                                <option value="CA">Giá từ thấp đến cao</option>
                                <option value="FR">Giá thuê từ thấp đến cao</option>
                                <option value="US">Giá thuê từ cao đến thấp</option>
                                <option value="DE">Diện tích to</option>
                                <option value="DE">Diện tích nhỏ</option>
                            </select>
                        </div>
                        <div class="flex flex-row items-center justify-between">
                            <label for="countries_disabled"
                                class="block  text-sm font-medium text-gray-900 dark:text-white">Select an
                                option</label>
                            <select id="countries_disabled"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                <option selected>Trạng thái</option>
                                <option value="true">Đã thuê</option>
                                <option value="false">Chưa thuê</option>
                            </select>
                        </div>
                    </div>
                    <button type="button"
                        class="text-white bg-red-500  items-center justify-content-center  font-medium rounded-lg text-sm px-5 py-2.5 shadow-lg focus:outline-none dark:focus:ring-blue-800">
                        Lọc tin
                    </button>
                </div>

                <div class=" rounded bg-white shadow-lg p-10 my-3">
                    <div class="relative overflow-x-auto ">
                        <table class="w-full text-sm text-left rtl:text-right ">
                            <thead class="text-xs text-gray-700 uppercase bg-red-500 ">
                                <tr class="text-white">
                                    <th scope="col" class="px-6 py-3">
                                        STT
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ảnh
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tên phòng
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Loại phòng
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Diện tích
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Trạng thái
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Giá phòng
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Tiền cọc
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>

                                @isset($productModel)

                                    @foreach ($productModel as $temp)
                                        <tr class="border-solid border-b border-3 border-red-500">
                                            <td class="px-6 py-4 text-center">
                                                {{ $temp->id }}
                                            </td>
                                            <td class="px-6 py-4 text-center">
                                                <img src="" width="150px" height="130px" alt=""
                                                    class="rounded-xl" />
                                            </td>
                                            <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap ">
                                                {{ $temp->name }}
                                            </th>
                                            <td class="px-6 py-4">
                                                White
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $temp->area }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-end">
                                                    <div
                                                        class="text-white bg-red-500  font-medium rounded-lg text-sm px-4 py-1.5 me-2 mb-2 shadow-lg focus:outline-none dark:focus:ring-blue-800">
                                                        {{ $temp->rented }}</div>
                                                </div>
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $temp->price_per_month }}
                                            </td>
                                            <td class="px-6 py-4">
                                                {{ $temp->price }}
                                            </td>
                                            <td class="px-6 py-4">
                                                <div class="flex items-end">
                                                    <button type="button"
                                                        class="text-white bg-red-500  font-medium rounded-lg text-xs px-4 py-1.5 me-2 mb-2 shadow-lg focus:outline-none dark:focus:ring-blue-800">Chi
                                                        tiết</button>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>No product data available.</tr>
                                @endisset

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>

    </div>


</x-layout>
