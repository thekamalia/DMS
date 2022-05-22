@extends('dashboardds.layoutds.main')

@section('container')

    <script src="https://cdn.tailwindcss.com"></script>

    <div class="container">
        @if (session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="bg-gray-100 flex-1 p-6">

        <div class="bg-white">
            <div class="pt-6">
                <nav aria-label="Breadcrumb">
                    <ol role="list" class="max-w-2xl mx-auto px-4 flex items-center space-x-2 sm:px-6 lg:max-w-7xl lg:px-8">
                        <li>
                            <div class="flex items-center">
                                <a href="#" class="mr-2 text-sm font-medium text-gray-900"> Shop </a>
                                <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor"
                                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="w-4 h-5 text-gray-300">
                                    <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
                                </svg>
                            </div>
                        </li>

                        <li>
                            <div class="flex items-center">
                                <a href="#" class="mr-2 text-sm font-medium text-gray-900"> Details </a>
                            </div>
                        </li>

                    </ol>
                </nav>

                <!-- Image gallery -->
                <div class="mt-6 max-w-2xl mx-auto sm:px-6 lg:max-w-7xl lg:px-8 lg:grid lg:grid-cols-3 lg:gap-x-8">
                    <div class="hidden aspect-w-3 aspect-h-4 rounded-lg overflow-hidden lg:block">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-secondary-product-shot.jpg"
                            alt="Two each of gray, white, and black shirts laying flat."
                            class="w-full h-full object-center object-cover">
                    </div>
                    <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                        <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-01.jpg"
                                alt="Model wearing plain black basic tee." class="w-full h-full object-center object-cover">
                        </div>
                        <div class="aspect-w-3 aspect-h-2 rounded-lg overflow-hidden">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-tertiary-product-shot-02.jpg"
                                alt="Model wearing plain gray basic tee." class="w-full h-full object-center object-cover">
                        </div>
                    </div>
                    <div class="aspect-w-4 aspect-h-5 sm:rounded-lg sm:overflow-hidden lg:aspect-w-3 lg:aspect-h-4">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-02-featured-product-shot.jpg"
                            alt="Model wearing plain white basic tee." class="w-full h-full object-center object-cover">
                    </div>
                </div>

                <!-- Product info -->
                <div
                    class="max-w-2xl mx-auto pt-10 pb-16 px-4 sm:px-6 lg:max-w-7xl lg:pt-16 lg:pb-24 lg:px-8 lg:grid lg:grid-cols-3 lg:grid-rows-[auto,auto,1fr] lg:gap-x-8">
                    <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                        <h1 class="text-2xl font-extrabold tracking-tight text-gray-900 sm:text-3xl">{{ $shop->name }}
                        </h1>
                    </div>

                    <!-- Options -->
                    <div class="mt-4 lg:mt-0 lg:row-span-3">
                        <h2 class="sr-only">Product information</h2>
                        <p class="text-3xl text-gray-900">Shop review</p>

                        <!-- Reviews -->
                        <div class="mt-6">
                            <h3 class="sr-only">Reviews</h3>
                            <div class="flex items-center">
                                <div class="flex items-center">
                                    <!--
                              Heroicon name: solid/star

                              Active: "text-gray-900", Default: "text-gray-200"
                            -->
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <!-- Heroicon name: solid/star -->
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <!-- Heroicon name: solid/star -->
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <!-- Heroicon name: solid/star -->
                                    <svg class="text-gray-900 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>

                                    <!-- Heroicon name: solid/star -->
                                    <svg class="text-gray-200 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                    </svg>
                                </div>
                                <p class="sr-only">4 out of 5 stars</p>
                                <a href="#" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500">117
                                    reviews</a>
                            </div>
                        </div>

                        <form class="mt-10">

                            <!-- Sizes -->


                            <button type="submit"
                                class="mt-10 w-full bg-indigo-600 border border-transparent rounded-md py-3 px-8 flex items-center justify-center text-base font-medium text-white
                                hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Follow</button>
                        </form>
                    </div>

                    <div class="py-10 lg:pt-6 lg:pb-16 lg:col-start-1 lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                        <!-- Description and details -->
                        <div>
                            <h3 class="sr-only">Description</h3>

                            <div class="space-y-6">
                                <p class="text-base text-gray-900">{{ $shop->description }}</p>
                            </div>
                        </div>

                        <div class="mt-10">
                            <h3 class="text-sm font-medium text-gray-900">Highlights</h3>

                            <div class="mt-4">
                                <ul role="list" class="pl-4 list-disc text-sm space-y-2">
                                    <li class="text-gray-400"><span class="text-gray-600">Hand cut and sewn
                                            locally</span></li>

                                    <li class="text-gray-400"><span class="text-gray-600">Dyed with our proprietary
                                            colors</span></li>

                                    <li class="text-gray-400"><span class="text-gray-600">Pre-washed &amp;
                                            pre-shrunk</span></li>

                                    <li class="text-gray-400"><span class="text-gray-600">Ultra-soft 100% cotton</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- <div class="mt-10">
                            <h2 class="text-sm font-medium text-gray-900">Details</h2>

                            <div class="mt-4 space-y-6">
                                <p class="text-sm text-gray-600">The 6-Pack includes two black, two white, and two heather
                                    gray Basic Tees. Sign up for our subscription service and be the first to get new,
                                    exciting colors, like our upcoming &quot;Charcoal Gray&quot; limited release.</p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>

        {{-- <div class="col-span-10 card flex flex-col">
            <div class="bg-white">
                <div class="max-w-2xl  py-20 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-10 place-content-center h-auto self-auto">
                    <h2 class="text-2xl font-extrabold tracking-tight text-gray-900">Customers also purchased</h2>
                    <div class="mt-6 grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
                        <div class="">
                            <div
                                class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                                <img src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"
                                    alt="Front of men&#039;s Basic Tee in black."
                                    class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                            </div>
                            <div class="mt-4 flex justify-between">
                                <div>
                                    <h3 class="text-sm text-gray-700">
                                        <a href="#">
                                            <span aria-hidden="true" class="absolute inset-0"></span>
                                            {{ $shop->name }}
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-500">{{ $shop->description }}</p>
                                </div>
                                <button type="button"
                                    class="focus:outline-none text-white bg-purple-700 hover:bg-purple-800 focus:ring-4
                                    focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">Follow</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
