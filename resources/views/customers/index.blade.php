<x-app-layout>
    <x-flash-message :message="session('notice')" />
    <h1 class="text-center text-5xl font-semibold mb-4">受付一覧</h1>
    <div class="container mx-auto px-4 md:px-12 flex justify-center">
        <div class="overflow-x-auto">
            <table class="min-w-full table-auto">
                <thead>
                    <tr>
                        <th class="px-4 py-2">代表者氏名</th>
                        <th class="px-4 py-2">利用開始予定時間</th>
                        <th class="px-4 py-2">利用希望台数</th>
                        <th class="px-4 py-2">申込み日時</th>
                        <th class="px-4 py-2">予定料金</th>
                        <th class="px-4 py-2">利用状況</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <td class="border px-4 py-2"><a
                                    href="/customers/{{ $customer->id }}">{{ $customer->name }}</a></td>
                            <td class="border px-4 py-2">{{ $customer->start_time }}</td>
                            <td class="border px-4 py-2">{{ $customer->unit_count }}</td>
                            <td class="border px-4 py-2">
                                @if (date('Y-m-d H:i:s', strtotime('-1 day')) < $customer->created_at)
                                    <span class="text-red-400 font-bold">NEW</span>
                                @endif
                                {{ $customer->created_at }}
                            <td class="border px-4 py-2">{{ number_format($customer->price) }}円</td>
                            <td class="border px-4 py-2">
                                @if ($customer->price > 0)
                                    貸出中
                                @else
                                    仮受付中
                                @endif
                            </td>
                            </td>
                        </tr>
                    @endforeach

            </table>
        </div>
    </div>
</x-app-layout>
