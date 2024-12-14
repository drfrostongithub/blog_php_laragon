<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <h3 class="text-xl font-bold">This is Contact Page</h3>
    <div class="navbar-info">
        <div>Email: {{ $email }}</div>
        <div>Instagram: {{ $instagram }}</div>
        <div>Facebook: {{ $facebook }}</div>
    </div>
</x-layout>
