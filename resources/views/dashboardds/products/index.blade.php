@extends('dashboardds.layoutds.main')

@section('container')
    <div class="bg-white flex-1 p-6">

        <div class="bg-white">
            <div class="pt-6">
                <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                    <h2 class="text-center font-extrabold tracking-tight text-gray-900">Products</h2>

                    <div class="mt-6 grid gap-x-8 gap-y-4 grid-cols-3 gap-5 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        @foreach ($products as $product)
                            <div class="group relative">
                                <div
                                    class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            <a href="{{ route('shops.show', $product->name) }}">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                {{ $product->name }}
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">{{ $product->description }}</p>

                                    </div>


                                </div>
                            </div>
                        @endforeach
                        <!-- More products... -->
                    </div>
                </div>
            </div>
        </div>
    @endsection
