<x-layout>
    <div class="max-w-container mx-auto py-10 px-40">
        <h1 class="text-3xl font-medium">Thông tin cá nhân</h1>
        <div class="grid grid-cols-8_4">
            <div class="w-2/3">
                <div class="py-5 border-b-[1px] border-solid border-[rgb(235, 235, 235)]">
                    <h2>Họ tên</h2>
                    <p class="text-sm text-[#717171] pt-1">{{ auth()->user()->fullname }}</p>
                </div>
                <div class="py-5 border-b-[1px] border-solid border-[rgb(235, 235, 235)]">
                    <h2>Địa chỉ email</h2>
                    <p class="text-sm text-[#717171] pt-1">{{ auth()->user()->email }}</p>
                </div>
                <div class="py-5 border-b-[1px] border-solid border-[rgb(235, 235, 235)]">
                    <h2>Số điện thoại</h2>
                    <p class="text-sm text-[#717171] pt-1">{{ auth()->user()->phone }}</p>
                </div>
                <div class="py-5 border-b-[1px] border-solid border-[rgb(235, 235, 235)]">
                    <h2>Địa chỉ</h2>
                    <p class="text-sm text-[#717171] pt-1">{{ auth()->user()->address }}</p>
                </div>
                <div class="flex items-center py-5 text-sm">
                    <a href="/user/change-infor"
                        class="block py-2 mr-5 px-4 border-[1px] border-solid border-red-500 text-red-500 rounded-md">Chỉnh
                        sửa thông tin</a>
                    <a href="/user/detail-account"
                        class="block py-2 mr-5 px-4 border-[1px] border-solid border-red-500 text-white bg-red-500 rounded-md">Quay
                        lại</a>
                </div>
            </div>
            <div class="border-[1px] border-solid border-[#DDDDDD] p-5 rounded-2xl overflow-hidden">
                <div class="border-b-[1px] border-solid border-[#ddddd] pb-4">
                    <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"
                        style="display:block;height:48px;width:48px;fill:#E31C5F;stroke:currentColor" aria-hidden="true"
                        role="presentation" focusable="false">
                        <g stroke="none">
                            <path d="m39 15.999v28.001h-30v-28.001z" fill-opacity=".2"></path>
                            <path
                                d="m24 0c5.4292399 0 9.8479317 4.32667079 9.9961582 9.72009516l.0038418.27990484v2h7c1.0543618 0 1.9181651.8158778 1.9945143 1.8507377l.0054857.1492623v32c0 1.0543618-.8158778 1.9181651-1.8507377 1.9945143l-.1492623.0054857h-34c-1.0543618 0-1.91816512-.8158778-1.99451426-1.8507377l-.00548574-.1492623v-32c0-1.0543618.81587779-1.9181651 1.85073766-1.9945143l.14926234-.0054857h7v-2c0-5.5228475 4.4771525-10 10-10zm17 14h-34v32h34zm-17 14c1.6568542 0 3 1.3431458 3 3s-1.3431458 3-3 3-3-1.3431458-3-3 1.3431458-3 3-3zm0 2c-.5522847 0-1 .4477153-1 1s.4477153 1 1 1 1-.4477153 1-1-.4477153-1-1-1zm0-28c-4.3349143 0-7.8645429 3.44783777-7.9961932 7.75082067l-.0038068.24917933v2h16v-2c0-4.418278-3.581722-8-8-8z">
                            </path>
                        </g>
                    </svg>
                    <h2 class="text-xl font-bold py-3">Bạn có thể chỉnh sửa những thông tin nào?</h2>
                    <p class="py-4 text-[#717171]">Bạn có thể chỉnh sửa thông tin liên hệ và thông tin cá nhân. Nếu sử
                        dụng thông tin này để xác
                        minh danh tính, bạn sẽ cần phải xác minh lần nữa vào lần đặt tiếp theo, hoặc để tiếp tục đón
                        tiếp khách.</p>
                </div>
                <div class="border-b-[1px] border-solid border-[#ddddd] pt-4 mt-4">
                    <svg viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"
                        style="display:block;height:48px;width:48px;fill:#E31C5F;stroke:currentColor" aria-hidden="true"
                        role="presentation" focusable="false">
                        <g stroke="none">
                            <path
                                d="M24 9C14.946 9 7.125 15.065 4.74 23.591L4.63 24l.013.054c2.235 8.596 9.968 14.78 18.99 14.943L24 39c9.053 0 16.875-6.064 19.26-14.59l.11-.411-.013-.052c-2.234-8.597-9.968-14.78-18.99-14.944L24 9z"
                                fill-opacity=".2"></path>
                            <path
                                d="M24 5c11.18 0 20.794 7.705 23.346 18.413l.133.587-.133.587C44.794 35.295 35.181 43 24 43 12.82 43 3.206 35.295.654 24.588l-.133-.587.048-.216C2.985 12.884 12.69 5 24 5zm0 2C13.88 7 5.16 13.887 2.691 23.509l-.12.492.032.14c2.288 9.564 10.728 16.513 20.65 16.846l.377.01L24 41c10.243 0 19.052-7.056 21.397-16.861l.031-.14-.031-.138c-2.288-9.566-10.728-16.515-20.65-16.848l-.377-.01L24 7zm0 10a7 7 0 1 1 0 14 7 7 0 0 1 0-14zm0 2a5 5 0 1 0 0 10 5 5 0 0 0 0-10z">
                            </path>
                        </g>
                    </svg>
                    <h2 class="text-xl font-bold py-3">Thông tin nào được chia sẻ với người khác?</h2>
                    <p class="py-4 text-[#717171]">Airbnb chỉ tiết lộ thông tin liên lạc cho Chủ nhà/Người tổ chức và
                        khách sau khi đặt phòng/đặt chỗ được xác nhận.
                    </p>
                </div>
            </div>
        </div>

    </div>
</x-layout>
