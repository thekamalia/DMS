@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-gray-100 flex-1 p-6">

        @if (Auth::user()->hasRole('seller'))
            <div>{{ __('Seller Dashboard') }}</div>
        @elseif(Auth::user()->hasRole('dropship'))
            <div>{{ __('Dropship Dashboard') }}</div>
        @endif

        <!-- status -->
        <div class="grid grid-cols-5 gap-5 mt-5 lg:grid-cols-2">

            <!-- status -->
            <div class="card col-span-1">
                <div class="card-body">
                    <h5 class="uppercase text-xs tracking-wider font-extrabold">tonigth</h5>
                    <h1 class="capitalize text-lg mt-1 mb-1">$<span class="num-3"></span> <span
                            class="text-xs tracking-widest font-extrabold"> / <span class="num-2"></span>
                            orders</span></h1>
                    <p class="capitalize text-xs text-gray-500">( $<span class="num-2"></span> in the last year )
                    </p>
                </div>
            </div>
            <!-- status -->

            <!-- status -->
            <div class="card col-span-1">
                <div class="card-body">
                    <h5 class="uppercase text-xs tracking-wider font-extrabold">yesterday</h5>
                    <h1 class="capitalize text-lg mt-1 mb-1">$<span class="num-3"></span> <span
                            class="text-xs tracking-widest font-extrabold"> / <span class="num-2"></span>
                            orders</span></h1>
                    <p class="capitalize text-xs text-gray-500">( $<span class="num-2"></span> in the last year )
                    </p>
                </div>
            </div>
            <!-- status -->

            <!-- status -->
            <div class="card col-span-1">
                <div class="card-body">
                    <h5 class="uppercase text-xs tracking-wider font-extrabold">last week</h5>
                    <h1 class="capitalize text-lg mt-1 mb-1">$<span class="num-3"></span> <span
                            class="text-xs tracking-widest font-extrabold"> / <span class="num-2"></span>
                            orders</span></h1>
                    <p class="capitalize text-xs text-gray-500">( $<span class="num-2"></span> in the last year )
                    </p>
                </div>
            </div>
            <!-- status -->

            <!-- status -->
            <div class="card col-span-1">
                <div class="card-body">
                    <h5 class="uppercase text-xs tracking-wider font-extrabold">last month</h5>
                    <h1 class="capitalize text-lg mt-1 mb-1">$<span class="num-3"></span> <span
                            class="text-xs tracking-widest font-extrabold"> / <span class="num-2"></span>
                            orders</span></h1>
                    <p class="capitalize text-xs text-gray-500">( $<span class="num-2"></span> in the last year )
                    </p>
                </div>
            </div>
            <!-- status -->

            <!-- status -->
            <div class="card col-span-1 lg:col-span-2">
                <div class="card-body">
                    <h5 class="uppercase text-xs tracking-wider font-extrabold">last 90-days</h5>
                    <h1 class="capitalize text-lg mt-1 mb-1">$<span class="num-3"></span> <span
                            class="text-xs tracking-widest font-extrabold"> / <span class="num-2"></span>
                            orders</span></h1>
                    <p class="capitalize text-xs text-gray-500">( $<span class="num-2"></span> in the last year )
                    </p>
                </div>
            </div>
            <!-- status -->


        </div>
        <!-- end status -->

        <!-- best seller & traffic -->
        <div class="grid grid-cols-2 lg:grid-cols-1 gap-5 mt-5">
            <div class="card">

                <div class="card-body">
                    <div class="flex flex-row justify-between items-center">
                        <h1 class="font-extrabold text-lg">best Dropship</h1>
                        <a href="#" class="btn-gray text-sm">view all</a>
                    </div>

                    <table class="table-auto w-full mt-5 text-right">

                        <thead>
                            <tr>
                                <td class="py-4 font-extrabold text-sm text-left">product</td>
                                <td class="py-4 font-extrabold text-sm">price</td>
                                <td class="py-4 font-extrabold text-sm">sold</td>
                                <td class="py-4 font-extrabold text-sm">profit</td>
                            </tr>
                        </thead>

                        <tbody>

                            <!-- item -->
                            <tr class="">
                                <td class="py-4 text-sm text-gray-600 flex flex-row items-center text-left">
                                    <div class="w-8 h-8 overflow-hidden mr-3">
                                        <img src="img/sneakers.svg" class="object-cover">
                                    </div>
                                    Sneakers and Tennis
                                </td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                                <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                            </tr>
                            <!-- end item -->

                            <!-- item -->
                            <tr class="">
                                <td class="py-4 text-sm text-gray-600 flex flex-row items-center">
                                    <div class="w-8 h-8 overflow-hidden mr-3">
                                        <img src="img/socks.svg" class="object-cover">
                                    </div>
                                    Crazy Socks & Graphic Socks for Men
                                </td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                                <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                            </tr>
                            <!-- end item -->

                            <!-- item -->
                            <tr class="">
                                <td class="py-4 text-sm text-gray-600 flex flex-row items-center">
                                    <div class="w-8 h-8 overflow-hidden mr-3">
                                        <img src="img/soccer.svg" class="object-cover">
                                    </div>
                                    Adidas Soccer Ball
                                </td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                                <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                            </tr>
                            <!-- end item -->

                            <!-- item -->
                            <tr class="">
                                <td class="py-4 text-sm text-gray-600 flex flex-row items-center">
                                    <div class="w-8 h-8 overflow-hidden mr-3">
                                        <img src="img/food.svg" class="object-cover">
                                    </div>
                                    Best Chocolate Chip Cookies
                                </td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-2"></span></td>
                                <td class="py-4 text-xs text-gray-600"><span class="num-3"></span></td>
                                <td class="py-4 text-xs text-gray-600">$ <span class="num-4"></span></td>
                            </tr>
                            <!-- end item -->

                        </tbody>

                    </table>

                </div>
            </div>
            <div class="card">

                <div class="card-body">
                    <h2 class="font-bold text-lg mb-10">Recent Orders</h2>

                    <!-- start a table -->
                    <table class="table-fixed w-full">

                        <!-- table head -->
                        <thead class="text-left">
                            <tr>
                                <th class="w-1/2 pb-10 text-sm font-extrabold tracking-wide">customer</th>
                                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Product</th>
                                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">Invoice</th>
                                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">price</th>
                                <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-right">status</th>
                            </tr>
                        </thead>
                        <!-- end table head -->

                        <!-- table body -->
                        <tbody class="text-left text-gray-600">

                            <!-- item -->
                            <tr>
                                <!-- name -->
                                <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center">
                                    <div class="w-8 h-8 overflow-hidden rounded-full">
                                        <img src="img/user2.jpg" class="object-cover">
                                    </div>
                                    <p class="ml-3 name-1">user name</p>
                                </th>
                                <!-- name -->

                                <!-- product -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport</th>
                                <!-- product -->

                                <!-- invoice -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                        class="num-4"></span>
                                </th>
                                <!-- invoice -->

                                <!-- price -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                        class="num-2"></span>
                                </th>
                                <!-- price -->

                                <!-- status -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                <!-- status -->

                            </tr>
                            <!-- item -->


                            <!-- item -->
                            <tr>
                                <!-- name -->
                                <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center ">
                                    <div class="w-8 h-8 overflow-hidden rounded-full">
                                        <img src="img/user3.jpg" class="object-cover">
                                    </div>
                                    <p class="ml-3 name-1">user name</p>
                                </th>
                                <!-- name -->

                                <!-- product -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport</th>
                                <!-- product -->

                                <!-- invoice -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                        class="num-4"></span>
                                </th>
                                <!-- invoice -->

                                <!-- price -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                        class="num-2"></span>
                                </th>
                                <!-- price -->

                                <!-- status -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                <!-- status -->

                            </tr>
                            <!-- item -->


                            <!-- item -->
                            <tr>
                                <!-- name -->
                                <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center">
                                    <div class="w-8 h-8 overflow-hidden rounded-full">
                                        <img src="img/user2.jpg" class="object-cover">
                                    </div>
                                    <p class="ml-3 name-1">user name</p>
                                </th>
                                <!-- name -->

                                <!-- product -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport</th>
                                <!-- product -->

                                <!-- invoice -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                        class="num-4"></span>
                                </th>
                                <!-- invoice -->

                                <!-- price -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                        class="num-2"></span>
                                </th>
                                <!-- price -->

                                <!-- status -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                <!-- status -->

                            </tr>
                            <!-- item -->

                            <!-- item -->
                            <tr>
                                <!-- name -->
                                <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center">
                                    <div class="w-8 h-8 overflow-hidden rounded-full">
                                        <img src="img/user1.jpg" class="object-cover">
                                    </div>
                                    <p class="ml-3 name-1">user name</p>
                                </th>
                                <!-- name -->

                                <!-- product -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport</th>
                                <!-- product -->

                                <!-- invoice -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                        class="num-4"></span>
                                </th>
                                <!-- invoice -->

                                <!-- price -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                        class="num-2"></span>
                                </th>
                                <!-- price -->

                                <!-- status -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                <!-- status -->

                            </tr>
                            <!-- item -->

                            <!-- item -->
                            <tr>
                                <!-- name -->
                                <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center">
                                    <div class="w-8 h-8 overflow-hidden rounded-full">
                                        <img src="img/user3.jpg" class="object-cover">
                                    </div>
                                    <p class="ml-3 name-1">user name</p>
                                </th>
                                <!-- name -->

                                <!-- product -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">Nike Sport</th>
                                <!-- product -->

                                <!-- invoice -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">#<span
                                        class="num-4"></span>
                                </th>
                                <!-- invoice -->

                                <!-- price -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">$<span
                                        class="num-2"></span>
                                </th>
                                <!-- price -->

                                <!-- status -->
                                <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-right">shipped</th>
                                <!-- status -->

                            </tr>
                            <!-- item -->




                        </tbody>
                        <!-- end table body -->

                    </table>
                    <!-- end a table -->
                </div>

            </div>

        </div>
        <!-- end best seller & traffic -->


    </div>
@endsection
