<x-layout>
    <div class="py-8 max-w-container mx-auto  items-center">
        <div class="w-full rounded-lg h-96 my-8 flex flex-col items-start justify-center bg-orange-600 p-10">
          <div class="h-full flex flex-col items-start justify-center ">
            <h1 class="text-white uppercase font-bold text-3xl my-5">
              Sale sập sàn, mua hàng thả ga tại Soixam
            </h1>
            <div class=" flex flex-col my-5 ">
              <form
                action=""
                method="post"
                class="flex border-[1px] border-solid border-[#DDDDDD] shadow-searchForm overflow-hidden rounded-full transition-all ease-linear hover:shadow-searchFormHover"
              >
                <input
                  type="text"
                  name=""
                  id=""
                  placeholder="Dán link sản phẩm vào đây..."
                  class="py-2 px-4 w-96  outline-none text-md text-baseColor"
                />
                <button
                  type="submit"
                  class="px-7 uppercase text-sm bg-sky-500 text-white rounded-sm font-bold "
                >
                  get link
                </button>
              </form>
            </div>
          </div>
        </div>
        <div class="my-5">
          <p class="text-xl font-bold uppercase mb-8">
            Có thể bạn cũng thích
          </p>
          <div class="grid grid-cols-6 gap-3">
            @for ($i = 0 ; $i <= 5; $i++)
                <x-card />
           @endfor
          </div>
        </div>
        <div class="my-5">
          <p class="text-xl font-bold uppercase mb-8">
            Có thể bạn cũng thích
          </p>
          <div class="grid grid-cols-6 gap-3">
             @for ($i = 0 ; $i <= 5; $i++)
                <x-card />
           @endfor
          </div>
        </div>
        <div class="my-5">
          <p class="text-xl font-bold uppercase mb-8">
            Có thể bạn cũng thích
          </p>
          <div class="w-full rounded-lg h-96 my-8 bg-slate-700"></div>
        </div>
      </div>
</x-layout>
