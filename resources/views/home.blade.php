<x-app-layout title="Home Page">
    @section('hero')
        <div class="w-full py-32 text-center">
        <h1 class="text-4xl font-bold text-center text-gray-700 md:text-4xl lg:text-6xl">
    {{ __('home.hero.title') }}
    <span class="block mt-4 text-gray-500 text-xl md:text-2xl lg:text-3xl">
        Legislative Measures Voting System
    </span>
</h1>


        </div>
    @endsection

</x-app-layout>
