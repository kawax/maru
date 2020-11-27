<x-guest-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <div class="p-6 sm:px-20 bg-white border-b border-gray-200">
                    <div class="mt-8 text-2xl">
                        maru
                    </div>

                    <div class="mt-6 text-gray-500">
                        画像を丸く切り抜き。
                    </div>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1">
                    <div class="p-6 border-b border-gray-200">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">1. 画像をアップロード</div>
                        </div>

                        <div class="ml-6">
                            <div class="mt-2 text-sm text-gray-500">
                                <livewire:upload/>
                            </div>
                        </div>
                    </div>

                    <div class="p-6">
                        <div class="flex items-center">
                            <div class="ml-4 text-lg text-gray-600 leading-7 font-semibold">2. 画像をダウンロード</div>
                        </div>

                        <div class="ml-6">
                            <div class="mt-2 text-sm text-gray-500">
                                <livewire:download/>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-6 sm:px-20 bg-white border-t border-gray-200">
                    <div class="text-gray-500 text-sm">
                        <ul class="list-disc">
                            <li>画像の中心で切り抜きます。</li>
                            <li>ファイル名はランダムです。</li>
                            <li>ダウンロードは一度のみ可能です。</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-guest-layout>
