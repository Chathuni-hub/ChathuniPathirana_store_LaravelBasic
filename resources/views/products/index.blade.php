@extends('layouts.app')

@section('content')
<div class="flex justify-between items-center mb-6">
    <div>
        <h1 class="text-4xl font-bold text-blue-700">Product Inventory</h1>
        <p class="text-gray-600">Manage your store products</p>
    </div>
    <a href="{{ route('products.create') }}" class="bg-indigo-600 text-white px-6 py-2 rounded-lg flex items-center gap-2 hover:bg-indigo-700 shadow-lg">
        <i data-lucide="plus"></i> Add Product
    </a>
</div>

<div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
    <div class="flex items-center gap-2 mb-4">
        <div class="p-2 bg-indigo-100 rounded-lg text-indigo-600">
            <i data-lucide="box" class="w-5 h-5"></i>
        </div>
        <div>
            <h2 class="font-bold text-gray-800">Product List</h2>
            <p class="text-sm text-gray-400">View and manage all products in your inventory</p>
        </div>
    </div>

    @if($products->isEmpty())
    <div class="flex flex-col items-center justify-center py-20">
        <div class="w-24 h-24 bg-indigo-50 rounded-full flex items-center justify-center mb-4">
            <i data-lucide="box" class="w-12 h-12 text-indigo-500"></i>
        </div>
        <h3 class="text-xl font-bold text-gray-800">No products yet</h3>
        <p class="text-gray-500">Get started by adding your first product to your inventory</p>
    </div>
    @else
    <table class="w-full mt-4">
        <tr class="text-left border-b">
            <th class="pb-3">Name</th>
            <th class="pb-3">Category</th>
            <th class="pb-3">Price</th>
            <th class="pb-3">Qty</th>
        </tr>
        @foreach($products as $product)
        <tr class="border-b last:border-0">
            <td class="py-3">{{ $product->name }}</td>
            <td class="py-3">{{ $product->category }}</td>
            <td class="py-3">${{ $product->price }}</td>
            <td class="py-3">{{ $product->quantity }}</td>
        </tr>
        @endforeach
    </table>
    @endif
</div>
@endsection