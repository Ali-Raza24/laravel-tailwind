@extends('layouts.master')

@section('content')
	<section class="header relative py-24 px-4">
		<div class="relative text-white container mx-auto mt-12 lg:mt-60 z-20 lg:w-1/3 md:w-2/3 text-center">
			<h1 class="mb-4 text-5xl font-bold">Delivering Purpose Driven Data</h1>
			<p class="leading-normal my-12 lg:my-24">Transaction 360&deg; (T360&deg;) is bringing to the market a revolutionary
				approach to address major industry data issues.</p>
			<div class="mb-12">
				<a href="#"
				   class="inline-block px-10 mx-4 bg-white text-black no-underline hover:bg-gray-800 hover:text-white mt-4 p-4 rounded">Get
					Started</a>
				<a href="#"
				   class="inline-block px-10 mx-4 bg-transparent border text-white no-underline hover:bg-blue-800 mt-4 p-4 rounded">Learn
					More</a>
			</div>
		</div>
		<div class="absolute inset-0 h-auto z-10">
			<img src="{{ asset('img/header-background.png') }}" alt="" class="h-full w-full header__image">
		</div>
	</section>
@endsection
