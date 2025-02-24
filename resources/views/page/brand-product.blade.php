<x-app.layout>
    <x-slot:title>{{ $titlePage }}</x-slot:title>
    <h1>Это страница записей определенного бренда</h1>
    <livewire:product-list :products="$products" />
</x-app.layout>
