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
                        <th class="w-1/2 pb-10 text-sm font-extrabold tracking-wide">Name</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-center">Username</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-center">No Phone</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-center">Address</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-center">Email</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-center">Sales</th>
                        <th class="w-1/4 pb-10 text-sm font-extrabold tracking-wide text-center">Status</th>

                    </tr>
                </thead>
                <!-- end table head -->

                <!-- table body -->
                <tbody class="text-left text-gray-600">

                    <!-- item -->
                    <tr>
                        <!-- name
                        <th class="w-1/2 mb-4 text-xs font-extrabold tracking-wider flex flex-row items-center ">
                            <div class="w-8 h-8 overflow-hidden rounded-full">
                                <img src="img/user2.jpg" class="object-cover">
                            </div>
                            <p class="ml-3 name-1">user name</p>
                        </th>
                        name -->

                        <!-- name -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider">Kamalia</th>
                        <!-- name -->

                        <!-- Username -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-center">Theayish</th>
                        <!-- Username -->

                        <!-- No Phone -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-center">011-23938292</th>
                        <!-- No Phone -->

                        <!-- Address -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-center">121 Taman Sayang Jalan Okk Daud 06011</th>
                        <!-- Address -->

                        <!-- Email -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-center">kamaliaayish58@gmail.com</th>
                        <!-- Email -->

                        <!-- Sales -->
                        <th class="w-1/4 mb-4 text-xs font-extrabold tracking-wider text-center">Rm 1,000</th>
                        <!-- Sales -->

                        <!-- status -->
                        <th class=" px-4 py-2">

                            <button
                                class="bg-blue-500 px-5 py-2 text-sm shadow-sm font-small tracking-wider
                            text-blue-100 rounded-lg hover:shadow-2xl hover:bg-blue-600">Edit User</button>

                            <button
                                class="bg-red-500 px-5 py-2 text-sm shadow-sm font-small tracking-wider
                            text-blue-100 rounded-lg hover:shadow-2xl hover:bg-red-600">Disable</button>

                        </th>
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
