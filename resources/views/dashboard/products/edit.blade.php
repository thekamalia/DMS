@extends('dashboard.layouts.main')

@section('container')

    <div class="min-h-screen bg-gray-100 w-full p-6 justify-center ">
        <div class="relative py-3 sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex items-center space-x-5">
                        <div
                            class="h-14 w-14 bg-pink-200 rounded-full flex flex-shrink-0 justify-center items-center text-pink-500 text-2xl font-mono">
                            DMS</div>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Edit Product</h2>

                        </div>
                    </div>
                    <div class="divide-y divide-gray-200">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div><br />
                        @endif
                        <form method="POST" action="{{ route('products.update', $product->id) }}"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                                <div class="flex flex-col">
                                    <label class="leading-loose" for="imageproduct">Image</label>
                                    <input type="file" accept="image/*" id="imageproduct"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        name="imageproduct" for="imageproduct">
                                    <img src="/image/{{ $product->imageproduct }}" width="300px">
                                </div>

                                <div class="flex flex-col">
                                    <label class="leading-loose" for="name">Name</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        name="name" value="{{ $product->name }}">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose" for="description">Descripstion</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        name="description" value="{{ $product->description }}">
                                </div>

                                <div class="flex flex-col">
                                    <label class="leading-loose" for="stock">Stock</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        name="stock" value="{{ $product->stock }}">
                                </div>

                                <div class="flex flex-col">
                                    <label class="leading-loose" for="marketprice">Market Price</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        name="marketprice" value="{{ $product->marketprice }}">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose" for="dsprice">Dropship Price</label>
                                    <input type="text"
                                        class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600"
                                        name="dsprice" value="{{ $product->dsprice }}">
                                </div>
                            </div>
                            <div class="pt-4 flex items-center space-x-4">
                                <button type="submit" class="btn btn-block btn-danger">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
