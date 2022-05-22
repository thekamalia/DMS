@extends('dashboard.layouts.main')

@section('container')
    <div class="card">
        <div class="card-body">
            <h2 class="font-bold text-lg mb-10">Recent Orders</h2>

            <!-- start a table -->
            <table class="table-fixed w-full">

                <!-- table head -->
                <thead class="text-left">
                    <tr>
                        <th class="w-1/2 pb-10 text-sm font-extrabold tracking-wide text-left">Customer</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-left">Product</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-left">Address</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-center">Dropship ID</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-left">Status</th>

                    </tr>
                </thead>
                <!-- end table head -->

                <!-- table body -->
                <tbody class="text-left text-gray-600">

                    <!-- item -->
                    <tr>
                        <!-- Order ID -->
                        <th class="w-1/3 mb-4 text-xs font-bold tracking-wider inline-grid grid-cols-1 gap-2">
                            <span><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" href="" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                Nor Azizah Iliyas</span>
                            <span>norazizahiliyas@yahoo.com</span>
                        </th>
                        <!-- Order ID -->

                        <!-- Product -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-left">Baju Tidur</th>
                        <!-- Product -->

                        <!-- Customer -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-left">62-64-66 Jalan TA Rahman

                            Kuala Lumpur

                            Wilayah Persekutuan



                            50100

                            Malaysia</th>
                        <!-- Customer -->

                        <!-- invoice -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-center">122
                        </th>
                        <!-- invoice -->


                        <!-- status -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-left">Delivered</th>
                        <!-- status -->

                    </tr>
                    <!-- item -->

                </tbody>
                <!-- end table body -->

            </table>
            <!-- end a table -->
        </div>

    </div>
@endsection
