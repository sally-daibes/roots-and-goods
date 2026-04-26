@extends('layouts.front')

@section('content')
<div x-data="{ showSellerPopup: false }">

    <section class="relative h-screen flex items-center">

        <div class="absolute inset-0 bg-[url('http://roots-and-goods.test/images/main.png')] bg-cover bg-center"></div>

        <div class="absolute inset-0 bg-black/40"></div>

        <div class="relative z-10 px-10 md:px-[10%] text-white flex flex-col items-start">
            
            @auth
                @if(auth()->user()->role !== 'customer')
                    <button @click="showSellerPopup = true" class="stitched-banner mt-12 ml-16 px-5 py-2 text-[14px] font-bold font-headings tracking-wide cursor-pointer hover:bg-accent-red-hover transition-all inline-block text-center">
                        <span class="opacity-70 text-[10px] mr-1">❖</span> 
                        Explore Our Market 
                        <span class="opacity-70 text-[10px] ml-1">❖</span>
                    </button>
                @else
                    <a href="{{ route('market') }}" class="stitched-banner mt-12 ml-16 px-5 py-2 text-[14px] font-bold font-headings tracking-wide cursor-pointer hover:bg-accent-red-hover transition-all inline-block text-center">
                        <span class="opacity-70 text-[10px] mr-1">❖</span> 
                        Explore Our Market 
                        <span class="opacity-70 text-[10px] ml-1">❖</span>
                    </a>
                @endif
            @else
                <a href="{{ route('market') }}" class="stitched-banner mt-12 ml-16 px-5 py-2 text-[14px] font-bold font-headings tracking-wide cursor-pointer hover:bg-accent-red-hover transition-all inline-block text-center">
                    <span class="opacity-70 text-[10px] mr-1">❖</span> 
                    Explore Our Market 
                    <span class="opacity-70 text-[10px] ml-1">❖</span>
                </a>
            @endauth

        </div>

    </section>

    <div class="max-w-[1100px] mx-auto px-5">
        
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 my-16">
            
            <div class="flex flex-col items-center">
                <div class="arch-frame" >
                    <img src="http://roots-and-goods.test/images/second.png" alt="Olive Oil">
                </div>
                <div class="stitched-banner w-[105%] -mt-4 py-2 text-center z-10">
                    <h3 class="font-headings font-bold text-[16px] tracking-wide">Olive Oil</h3>
                </div>
            </div>

            <div class="flex flex-col items-center">
                <div class="arch-frame">
                    <img src="http://roots-and-goods.test/images/third.png" alt="Handicrafts">
                </div>
                <div class="stitched-banner w-[105%] -mt-4 py-2 text-center z-10">
                    <h3 class="font-headings font-bold text-[16px] tracking-wide">Handicrafts</h3>
                </div>
            </div>

            <div class="flex flex-col items-center">
                <div class="arch-frame">
                    <img src="http://roots-and-goods.test/images/fourth.png" alt="Herbs & Honey">
                </div>
                <div class="stitched-banner w-[105%] -mt-4 py-2 text-center z-10">
                    <h3 class="font-headings font-bold text-[16px] tracking-wide">Herbs & Honey</h3>
                </div>
            </div>

            <div class="flex flex-col items-center">
                <div class="arch-frame">
                    <img src="http://roots-and-goods.test/images/fifth.png" alt="Traditional Foods">
                </div>
                <div class="stitched-banner w-[105%] -mt-4 py-2 text-center z-10">
                    <h3 class="font-headings font-bold text-[16px] tracking-wide">Traditional Foods</h3>
                </div>
            </div>

        </div>

        <div class="flex flex-col md:flex-row items-center justify-between mb-8 gap-4 border-b border-border-tan pb-4">
            <div class="flex items-center gap-3">
                <span class="text-accent-green text-xl">❖</span>
                <h2 class="font-headings text-[30px] font-bold text-text-dark tracking-wide">Featured Products</h2>
                <span class="text-accent-red text-xl">❖</span>
            </div>
            <button class="bg-accent-red text-text-light px-5 py-1.5 font-headings font-bold rounded-sm shadow-md border border-[#5c1610] hover:bg-accent-red-hover transition-colors">View All ></button>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-5 mb-20">
            
            <div class="polaroid-card flex flex-col items-center">
                <img src="http://roots-and-goods.test/images/sixth.png" alt="Organic Olive Oil" class="w-full h-[200px] object-cover border border-[#c9b9a1] mb-4">
                <h4 class="font-headings font-bold text-[18px] text-text-dark text-center">Organic Olive Oil</h4>
                <div class="w-full h-[1px] bg-border-tan my-2"></div>
                <span class="font-headings font-bold text-[20px] text-accent-red">100 NIS</span>
            </div>

            <div class="polaroid-card flex flex-col items-center">
                <img src="http://roots-and-goods.test/images/seventh.png" alt="Handwoven Basket" class="w-full h-[200px] object-cover border border-[#c9b9a1] mb-4">
                <h4 class="font-headings font-bold text-[18px] text-text-dark text-center">Handwoven Basket</h4>
                <div class="w-full h-[1px] bg-border-tan my-2"></div>
                <span class="font-headings font-bold text-[20px] text-accent-red">60 NIS</span>
            </div>

            <div class="polaroid-card flex flex-col items-center">
                <img src="http://roots-and-goods.test/images/eigth.png" alt="Za'atar Mix" class="w-full h-[200px] object-cover border border-[#c9b9a1] mb-4">
                <h4 class="font-headings font-bold text-[18px] text-text-dark text-center">Za'atar Mix</h4>
                <div class="w-full h-[1px] bg-border-tan my-2"></div>
                <span class="font-headings font-bold text-[20px] text-accent-red">35 NIS</span>
            </div>

            <div class="polaroid-card flex flex-col items-center">
                <img src="http://roots-and-goods.test/images/ninth.png" alt="Fig Jam" class="w-full h-[200px] object-cover border border-[#c9b9a1] mb-4">
                <h4 class="font-headings font-bold text-[18px] text-text-dark text-center">Fig Jam</h4>
                <div class="w-full h-[1px] bg-border-tan my-2"></div>
                <span class="font-headings font-bold text-[20px] text-accent-red">25 NIS</span>
            </div>

        </div>

        <div class="text-center mb-8">
            <div class="flex items-center justify-center gap-4 mb-2 before:flex-1 before:border-b before:border-dashed before:border-[#8b7355] after:flex-1 after:border-b after:border-dashed after:border-[#8b7355]">
                <h2 class="font-headings text-[32px] font-bold text-text-dark tracking-wide flex items-center gap-2">
                    <span class="text-sm opacity-60">❖</span> Meet Our Cooperatives <span class="text-sm opacity-60">❖</span>
                </h2>
            </div>
            <p class="font-headings text-[18px] text-text-dark font-semibold italic mb-4">Empowering Palestinian Communities</p>
            <button class="stitched-banner px-6 py-2 text-[14px] font-bold font-headings tracking-wide cursor-pointer hover:bg-accent-red-hover">Learn More ></button>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            
            <div class="relative bg-[#fdfaf6] border-[4px] border-[#e9dec9] p-1.5 shadow-[0_5px_15px_rgba(0,0,0,0.15)]">
                <img src="http://roots-and-goods.test/images/tenth.png" class="w-full h-[220px] object-cover">
                
                <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 w-[85%] stitched-banner py-2 text-center">
                    <span class="font-headings font-bold text-[15px] tracking-wide">Olive Harvest</span>
                </div>
            </div>

            <div class="relative bg-[#fdfaf6] border-[4px] border-[#e9dec9] p-1.5 shadow-[0_5px_15px_rgba(0,0,0,0.15)]">
                <img src="http://roots-and-goods.test/images/eleven.png" class="w-full h-[220px] object-cover">
                
                <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 w-[85%] stitched-banner py-2 text-center">
                    <span class="font-headings font-bold text-[15px] tracking-wide">Women's Craft Collective</span>
                </div>
            </div>

            <div class="relative bg-[#fdfaf6] border-[4px] border-[#e9dec9] p-1.5 shadow-[0_5px_15px_rgba(0,0,0,0.15)]">
                <img src="http://roots-and-goods.test/images/twelve.png" class="w-full h-[220px] object-cover">
                
                <div class="absolute -bottom-6 left-1/2 transform -translate-x-1/2 w-[85%] stitched-banner py-2 text-center">
                    <span class="font-headings font-bold text-[15px] tracking-wide">Herbal Cooperative</span>
                </div>
            </div>

        </div>

    </div>

    <div x-show="showSellerPopup" 
         style="display: none;" 
         class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 backdrop-blur-sm">
        <div @click.away="showSellerPopup = false" class="bg-[#fdfaf6] border border-[#c9b9a1] shadow-xl p-8 rounded-sm max-w-sm w-full text-center relative">
            
            <button @click="showSellerPopup = false" class="absolute top-3 right-4 text-[#3e2a14] opacity-50 hover:opacity-100 text-xl font-bold">&times;</button>
            
            <div class="text-[#8b2318] text-4xl mb-4"><i class="fas fa-store-slash"></i></div>
            <h3 class="font-headings font-bold text-2xl text-[#3e2a14] mb-2">Access Restricted</h3>
            <p class="text-[#3e2a14] opacity-80 mb-6 font-headings">You must be logged in as a Customer to shop. Cooperative accounts are for selling products only.</p>
            
            <div class="flex flex-col gap-3">
                <button @click="showSellerPopup = false" class="stitched-banner py-2 font-bold font-headings tracking-wide w-full block">Got it</button>
            </div>
        </div>
    </div>

</div> @endsection