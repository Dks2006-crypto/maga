<x-app.layout>
    <x-slot:title>{{ $titlePage }}</x-slot:title>
    <h1 style="text-align: center">Продукты</h1>
    <livewire:product-list :products='$products'/>
</x-app.layout>
