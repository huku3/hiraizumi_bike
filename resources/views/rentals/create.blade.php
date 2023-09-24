<x-app-layout>
    <div class="container lg:w-1/2 md:w-4/5 w-11/12 mx-auto mt-8 px-8 bg-white shadow-md">
        <h2 class="text-center text-lg font-bold pt-6 tracking-widest">{{ $customer->name }}さんのレンタル申込み画面</h2>
        <form action="{{ route('customers.rentals.store', $customer) }}" method="POST" 
            class="rounded pt-3 pb-8 mb-4">
            @csrf
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2">
                    利用台数{{ $customer->unit_count }}
                </label>
                @if ($customer->unit_count >= 1 && $customer->unit_count <= 6)
                    <fieldset>
                        <legend>自転車選択:</legend>
                        @for ($i = 1; $i <= $customer->unit_count; $i++)
                            <div class="mb-4">
                                <label for="bike_ids">自転車 {{ $i }}台目</label>
                                <select id="bike_id_{{ $i }}" name="bike_ids[]">
                                    @foreach ($bikes as $bike)
                                        <option value="{{ $bike->id }}">{{ $bike->type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        @endfor 
                    </fieldset>
                @else
                    <select name="unit_count" disabled>
                        <option value="1">1台</option>
                    </select>
                @endif 
            </div>
            @for ($i = 1; $i <= $customer->unit_count; $i++)
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm mb-2" for="course_{{ $i }}">
                        レンタルコース (自転車 {{ $i }}台目)
                    </label>
                    <select name="courses[]" id="course_{{ $i }}">
                        <option value="半日コース">半日コース</option>
                        <option value="1日コース">1日コース</option>
                    </select>
                </div>
            @endfor
            <div class="mb-4">
                <label class="block text-gray-700 text-sm mb-2" for="start_time">
                    レンタル開始時間
                </label>
                <input type="time" name="start_time"
                    class="rounded-md shadow-sm border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 w-full py-2 px-3"
                    placeholder="利用時間" value="{{ old('rental_start_time') }}">
            </div>
            <input type="submit" value="レンタル開始する"
                class="w-full bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
        </form>
    </div>
</x-app-layout>
