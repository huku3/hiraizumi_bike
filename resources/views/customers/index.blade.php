<x-app-layout>
<h1>受付一覧</h1>
    <div class="container max-w-7xl mx-auto px-4 md:px-12 pb-3 mt-3">
        <div class="flex flex-wrap -mx-1 lg:-mx-4 mb-4">
            @foreach ($customers as $customer)
                <article class="w-full px-4 md:w-1/2 text-xl text-gray-800 leading-normal">
                    <a href="{{ route('customers.show', $customer) }}">
                        <h2
                            class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl break-words">
                            {{ $customer->name }}</h2>
                        <h3>{{ $customer->start_time }}</h3>
                        <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                            <span
                                class="text-red-400 font-bold">{{ date('Y-m-d H:i:s', strtotime('-1 day')) < $customer->created_at ? 'NEW' : '' }}</span>
                            {{ $customer->created_at }}
                        </p>
                    </a>
                </article>
            @endforeach
        </div>
    </div>
</x-app-layout>
