@php
    $short_url = request()->getSchemeAndHttpHost(). "/$link->short_url";
@endphp
<x-layout>
    <section class="text-center max-w-md w-full mx-auto space-y-3 text-white py-20">
        <div class="bg-gray-800 rounded-md p-3 text-lg">
            Your Shortal URL is:
            <a href="{{ $short_url }}"
               class="underline block text-base bg-gray-900 rounded-md p-2" target="__blank">
                {{ $short_url }}
            </a>
        </div>
        <div class="bg-gray-800 rounded-md p-3 text-lg">
            The Base URL Is:
            <a href="{{ $link->url }}"
               class="underline block text-base bg-gray-900 rounded-md p-2" target="__blank">
                {{ $link->url }}
            </a>
        </div>
    </section>
</x-layout>
