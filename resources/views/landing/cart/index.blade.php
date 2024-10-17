@extends('layouts.frontend.app', ['title' => 'Cart'])

@section('content')
    <div class="w-full p-2 md:p-16 bg-[#252422]">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
                <!-- Cart Items Section -->
                <div class="col-span-12 lg:col-span-8">
                    <div class="p-6 bg-[#FFFCF2] rounded-lg shadow-lg">
                        <x-landing.cart-table :carts="$carts" :total="$total" />
                    </div>
                </div>
                <!-- Checkout Form Section -->
                <div class="col-span-12 lg:col-span-4">
                    <div class="p-6 bg-[#FFFCF2] rounded-lg shadow-lg">
                        <x-landing.cart-form :user="$user" :total="$total" />
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
