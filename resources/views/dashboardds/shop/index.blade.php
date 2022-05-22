@extends('dashboardds.layoutds.main')

@section('container')
    <div class="h-screen bg-white-100 flex-1 p-6">
        <div class="col-span-10 card flex flex-col">
            <div class="bg-white">
                <div class="max-w-2xl mx-auto py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
                    <h2 class="text-center font-extrabold tracking-tight text-gray-900">SHOP</h2>

                    <div class="mt-6 grid gap-x-8 gap-y-4 grid-cols-3 gap-5 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        @foreach ($shops as $shop)
                            <div>
                                <div
                                    class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                    <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                        alt="Front of men&#039;s Basic Tee in black."
                                        class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                                </div>
                                <div class="mt-4 flex justify-between">
                                    <div>
                                        <h3 class="text-sm text-gray-700">
                                            <a href="{{ route('shops.show', $shop->name) }}">
                                                <span aria-hidden="true" class="absolute inset-0"></span>
                                                {{ $shop->name }}
                                            </a>
                                        </h3>
                                        <p class="mt-1 text-sm text-gray-500">{{ $shop->description }}</p>

                                        <button type="button"
                                            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                            </svg>
                                            Follow
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- More products... -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--  --}}
@endsection
