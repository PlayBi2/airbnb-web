<x-layout>
    <form action="/for-renter/new-product" class=" max-w-container mx-auto " method="POST" enctype="multipart/form-data">
        @csrf

        <div class="w-full flex shadow-lg p-8 my-3">
            <div class="w-1/2">
                <div class="w-full rounded-lg h-96 bg-slate-700"></div>
            </div>
            <div class="w-1/2 py-1 px-10">
                <div class="p-3 rounded-lg outline outline-2 my-3">
                    <div class="flex flex-row items-center justify-between my-2">
                        <div class="w-full">
                            <p class="text-xl font-bold">Tiêu đề:</p>
                            <input type="text" id="small-input" name="name"
                                class="block font-bold w-full p-2 border border-gray-300 rounded-lg text-lg p-2">
                        </div>

                    </div>

                </div>

                <div class="p-3 rounded-lg outline outline-2 my-3">
                    <div class="flex flex-row items-center justify-between my-2">
                        <div>
                            <p class="text-sm">Giá phòng:</p>
                            <input type="number" id="small-input" name="price_per_month"
                                class="block w-full p-2 border border-gray-300 rounded-lg text-lg p-2">
                        </div>


                    </div>
                    <div class="flex flex-row items-center justify-between my-2">
                        <div>
                            <p class="text-sm">Giá cọc:</p>
                            <input type="number" id="small-input" name="price"
                                class="block w-full p-2 border border-gray-300 rounded-lg text-lg p-2">
                        </div>


                    </div>

                </div>

                <div class="p-3 rounded-lg outline outline-2 my-3">
                    <div class="flex flex-row items-center justify-between my-2">
                        <div class="w-full">
                            <p class="text-sm">Địa chỉ:</p>
                            <input type="text" id="small-input" name="address"
                                class="block  w-full p-2 border border-gray-300 rounded-lg text-md p-1">
                        </div>

                    </div>
                    <div class="flex flex-row items-center justify-between my-2">
                        <div class="w-full">
                            <p class="text-sm">Thông tin liên hệ:</p>
                            <input type="text" id="small-input" name="infor"
                                class="block  w-full p-2 border border-gray-300 rounded-lg text-md p-1">
                        </div>

                    </div>

                </div>
                <div class="p-3 rounded-lg outline outline-2 my-3">
                    <div class="flex flex-row items-center justify-between my-2">
                        <div>
                            <p class="text-sm">Diện tích:</p>
                            <input type="number" id="small-input" name="area"
                                class="block w-full p-2 border border-gray-300 rounded-lg text-lg p-2">
                        </div>

                    </div>

                </div>



            </div>
        </div>

        <div class="flex flex-row">

            <div class="w-full   shadow-lg p-8 my-3 mr-2">
                <div class="mb-1">
                    <p class="text-xl font-bold">MÔ TẢ</p>
                </div>

                <div>

                    <label for="message" class="block mb-2 text-sm font-medium dark:text-white">Your
                        message</label>
                    <textarea id="message" rows="15" name="description"
                        class="block p-2.5 w-full text-sm  rounded-lg border border-gray-300 focus:ring-blue-500   "
                        placeholder="Write your thoughts here..."></textarea>
                </div>

            </div>

        </div>


        <button type="submit" class="w-full text-2xl  text-white rounded-lg p-3 my-5 bg-slate-800  ">
            Đăng tin
        </button>

        {{-- <div class="p-3 rounded-lg outline flex flex-row gap-4 outline-2 my-5">
            <button class="w-full text-2xl  text-white rounded-lg p-3 my-5 bg-red-600  ">
                Xóa tin
            </button>
            <button class="w-full text-2xl  text-white rounded-lg p-3 my-5 bg-yellow-400  ">
                Sửa tin
            </button>
        </div> --}}

    </form>

</x-layout>
