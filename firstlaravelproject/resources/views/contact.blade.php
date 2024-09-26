@extends('layouts.app')
@section('title','Contact')
@section('page-title','The contact page')
@section('content')
    <h1>hello from contact page </h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita vero atque ut? Illum quod blanditiis vel adipisci similique minus tempora, voluptatem illo ratione eius temporibus nisi est nesciunt aut quam.</p>
<form>
<div class="space-y-12">
    <div class="border-b border-gray-900/10 pb-12">
        <!-- Name input -->
        <div class="sm:col-span-4">
            <label for="username" class="block text-sm font-medium leading-6 text-gray-900">Name</label>
            <input type="text" name="username" id="username" required class="block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>

        <!-- Message textarea -->
        <div class="col-span-full mt-4">
            <label for="message" class="block text-sm font-medium leading-6 text-gray-900">Message</label>
            <textarea id="message" name="message" rows="4" required class="block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
        </div>

        <!-- Email input -->
        <div class="sm:col-span-4 mt-4">
            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email Address</label>
            <input type="email" name="email" id="email" required class="block w-full py-2 px-3 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
    </div>

    <!-- Buttons -->
    <div class="mt-6 flex items-center justify-end gap-x-6">
        <button type="button" class="text-sm font-semibold leading-6 text-gray-900">Cancel</button>
        <button type="submit" class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Submit</button>
    </div>
</div>

</form>

@endsection