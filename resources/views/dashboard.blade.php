@extends('layouts.front')

@section('content')
<div class="max-w-[1100px] mx-auto px-5 py-16 min-h-[60vh]">
    
    <div class="flex justify-between items-center mb-8 border-b border-[#c9b9a1] pb-4">
        <h1 class="text-4xl font-headings font-bold text-[#3e2a14]">
            <i class="fas fa-store text-[#8b2318] mr-3"></i> Seller Dashboard
        </h1>
        
        <a href="#" class="bg-[#8b2318] text-[#fdfaf6] px-6 py-2 font-bold font-headings tracking-wide hover:opacity-90 transition-opacity rounded-sm shadow-sm">
            <i class="fas fa-plus mr-2"></i> Add New Product
        </a>
    </div>

    <div class="bg-[#fdfaf6] border border-[#c9b9a1] p-12 text-center rounded-sm shadow-sm mt-8">
        <div class="text-[#8b2318] text-6xl mb-6 opacity-80"><i class="fas fa-box-open"></i></div>
        <h3 class="text-3xl font-headings font-bold text-[#3e2a14] mb-3">Welcome to your Cooperative Hub!</h3>
        <p class="text-lg text-text-dark opacity-70 mb-8 max-w-xl mx-auto font-headings">
            You haven't listed any products in the marketplace yet. Click the button above to start selling your authentic goods to the world.
        </p>
    </div>

</div>
@endsection