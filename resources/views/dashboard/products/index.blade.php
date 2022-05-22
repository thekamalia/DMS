@extends('dashboard.layouts.main')

@section('container')
    <div class="bg-white flex-1 p-6">

        <div class="grid  lg:grid-cols-1 gap-10 mt-10">
            <div class="card">
                <div class="card-body">
                    <div class="flex flex-row justify-between items-center">
                        <h1 class="font-extrabold text-lg">Product</h1>
                        <a href="{{ route('products.create') }}" class="btn-gray text-sm">Add New Product</a>
                    </div>

                    @if (session()->get('success'))
                        <div class="alert alert-success">
                            {{ session()->get('success') }}
                        </div><br />
                    @endif

                    <table class="table-auto w-full mt-5 text-center">

                        <thead>
                            <tr>
                                <td class="py-8 font-extrabold text-sm text-left">
                                    Image
                                </td>
                                <td class="py-8 font-extrabold text-sm text-center">Name</td>
                                <td class="py-8 font-extrabold text-sm text-center">descripstion</td>
                                <td class="py-8 font-extrabold text-sm">Stock</td>
                                <td class="py-8 font-extrabold text-sm">Market Price</td>
                                <td class="py-8 font-extrabold text-sm text-center">Dropship Price</td>
                                <td class="px-8 mx-2 font-extrabold text-sm text-left">Action</td>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($products as $product)
                                <!-- item -->
                                <tr class="">
                                    <td class="py-4 text-sm text-gray-600 flex flex-row items-center text-left">
                                        <img src="/image/{{ $product->imageproduct }}" width="100px">
                                    </td>
                                    <td class="py-8 text-xs text-gray-600 text-center">{{ $product->name }}</td>
                                    <td class="py-8 text-xs text-gray-600 text-center">{{ $product->description }}
                                    </td>
                                    <td class="py-8 text-xs text-gray-600 ">{{ $product->stock }}</td>
                                    <td class="py-8 text-xs text-gray-600"> {{ $product->marketprice }}</td>
                                    <td class="py-8 text-xs text-gray-600 text-center"> {{ $product->dsprice }}</td>
                                    <td class="px-8 mx-2 text-gray-600 center">


                                        <a class="btn btn-info"
                                            href="{{ route('products.show', $product->id) }}">Show</a>

                                        <a class="btn btn-primary"
                                            href="{{ route('products.edit', $product->id) }}">Edit</a>

                                        @csrf
                                        @method('DELETE')
                                        {{-- <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                                            <button type="submit" class="btn btn-danger w-1/2">Delete</button>
                                        </form> --}}

                                    </td>
                                </tr>
                                <!-- end item -->
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
