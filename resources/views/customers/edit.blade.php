<x-app-layout>

    <div class="container lg:w-1/2 md:w-4/5 w-11/12 mx-auto mt-8 px-8 bg-white shadow-md">
        <h2 class="text-center text-lg font-bold pt-6 tracking-widest">平泉スワローツアーレンタサイクル利用申込書</h2>

        @if ($errors->any())
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 my-2" role="alert">
                <p>
                    <b>{{ count($errors) }}件のエラーがあります。</b>
                </p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('customers.update', $customer) }}" method="POST" enctype="multipart/form-data"
            class="rounded pt-3 pb-8 mb-4">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="unit_count">
                    利用台数（一度の申込で最大5台までレンタル可能です）
                </label>
                <select name="unit_count"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3">
                    <option value="1台" {{ old('unit_count') == '1' ? 'selected' : '' }}>1台</option>
                    <option value="2台" {{ old('unit_count') == '2' ? 'selected' : '' }}>2台</option>
                    <option value="3台" {{ old('unit_count') == '3' ? 'selected' : '' }}>3台</option>
                    <option value="4台" {{ old('unit_count') == '4' ? 'selected' : '' }}>4台</option>
                    <option value="5台" {{ old('unit_count') == '5' ? 'selected' : '' }}>5台</option>
                </select>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="start_time">
                    利用開始時間
                </label>
                <input type="time" name="start_time"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    placeholder="利用時間" value="{{ old('start_time', $customer->start_time) }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="name">
                    氏名（代表者氏名）
                </label>
                <input type="text" name="name"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    placeholder="例平泉 太郎" value="{{ old('name', $customer->name) }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="name_kana">
                    氏名（代表者氏名カタカナ）
                </label>
                <input type="text" name="name_kana"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    placeholder="例ヒライズミ タロウ" value="{{ old('name_kana', $customer->name_kana) }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="tel_number">
                    電話番号
                </label>
                <input type="tel" name="tel_number"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    placeholder="090-xxxx-xxxx" value="{{ old('tel_number', $customer->tel_number) }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="email">
                    メールアドレス
                </label>
                <input type="email" name="email"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    placeholder="例xxxxxx@yyyy.co.jp" value="{{ old('email', $customer->email) }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="post_code">
                    郵便番号
                </label>
                <input type="text" id="post_code" name="post_code"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required placeholder="郵便番号" value="{{ old('post_code', $customer->post_code) }}">
                <button id="lookupButton">郵便番号検索</button>
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="address_1">
                    都道府県
                </label>
                <input type="text" id="address_1" name="address_1"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required placeholder="都道府県" value="{{ old('address_1', $customer->address_1) }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="address_2">
                    市区町村
                </label>
                <input type="text" id="address_2" name="address_2"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required placeholder="市町村" value="{{ old('address_2', $customer->address_2) }}">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="address_3">
                    番地・建物名・部屋番号
                </label>
                <input type="text" id="address_3" name="address_3"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    required placeholder="xxx番地yyy号zzzマンション2F" value="{{ old('address_3', $customer->address_3) }}">
            </div>
            <script>
                $(document).ready(function() {
                    // 郵便番号検索ボタンがクリックされたときの処理
                    $("#lookupButton").click(function() {
                        const postCode = $("#post_code").val();

                        // 郵便番号APIを呼び出して住所を取得
                        $.ajax({
                            url: `https://zipcloud.ibsnet.co.jp/api/search?zipcode=${postCode}`,
                            type: "GET",
                            dataType: "json",
                            success: function(data) {
                                if (data.results) {
                                    const result = data.results[0];
                                    $("#address_1").val(result.address1); // 都道府県
                                    $("#address_2").val(result.address2); // 市区町村
                                    $("#address_3").val(result.address3); // 番地など
                                }
                            }
                        });
                    });
                });
            </script>
            <input type="submit" value="更新する"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </form>
    </div>
</x-app-layout>
