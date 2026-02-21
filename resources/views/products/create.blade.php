@extends('layouts.app')

@section('content')
<a href="{{ route('products.index') }}" class="flex items-center gap-2 text-gray-600 mb-6 font-semibold">
    <i data-lucide="arrow-left" class="w-4 h-4"></i> Back to Products
</a>

<div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100">
    <div class="flex items-center gap-4 mb-8">
        <div class="p-3 bg-indigo-600 rounded-2xl text-white">
            <i data-lucide="package-plus"></i>
        </div>
        <div>
            <h2 class="text-2xl font-bold">Add New Product</h2>
            <p class="text-gray-400">Fill in the details to add a new product</p>
        </div>
    </div>

    <form action="{{ route('products.store') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label class="flex items-center gap-2 font-semibold mb-2"><i data-lucide="shopping-bag" class="w-4 h-4 text-indigo-500"></i> Product Name *</label>
            <input type="text" name="name" placeholder="Enter product name" class="w-full p-3 bg-gray-50 rounded-xl border-none focus:ring-2 focus:ring-indigo-400">
        </div>

        <div>
            <label class="flex items-center gap-2 font-semibold mb-2"><i data-lucide="tag" class="w-4 h-4 text-indigo-500"></i> Category *</label>
            <input type="text" name="category" placeholder="e.g., Electronics, Clothing" class="w-full p-3 bg-gray-50 rounded-xl border-none focus:ring-2 focus:ring-indigo-400">
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="flex items-center gap-2 font-semibold mb-2"><i data-lucide="dollar-sign" class="w-4 h-4 text-indigo-500"></i> Price *</label>
                <input type="number" step="0.01" name="price" placeholder="0.00" class="w-full p-3 bg-gray-50 rounded-xl border-none focus:ring-2 focus:ring-indigo-400">
            </div>
            <div>
                <label class="flex items-center gap-2 font-semibold mb-2"><i data-lucide="hash" class="w-4 h-4 text-indigo-500"></i> Quantity *</label>
                <input type="number" name="quantity" placeholder="0" class="w-full p-3 bg-gray-50 rounded-xl border-none focus:ring-2 focus:ring-indigo-400">
            </div>
        </div>

        <div class="flex gap-4 pt-4">
            <button type="submit" class="flex-1 bg-indigo-600 text-white py-3 rounded-xl font-bold flex items-center justify-center gap-2">
                <i data-lucide="package-plus" class="w-5 h-5"></i> Add Product
            </button>
            <a href="{{ route('products.index') }}" class="px-8 py-3 bg-gray-100 rounded-xl font-bold text-gray-600">Cancel</a>
        </div>
    </form>
</div>
@endsection