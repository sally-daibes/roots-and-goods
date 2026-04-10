@extends('layouts.app')

@section('content')
    <!-- ─── HERO SECTION (Left Aligned exactly like the design) ─── -->
    <section class="relative h-[550px] bg-hero flex flex-col justify-center text-[#fdfaf6] shadow-[inset_0_-20px_20px_rgba(0,0,0,0.5)]">
        <div class="bg-black/20 w-full h-full absolute top-0 left-0"></div> <!-- Overlay -->
        
        <!-- Content pushed to the left -->
        <div class="relative z-10 px-10 md:px-[10%] flex flex-col items-start text-left">
            
            <h1 class="font-headings text-[55px] md:text-[65px] font-bold mb-2 drop-shadow-[2px_4px_6px_rgba(0,0,0,0.8)] leading-[1.1] text-[#fdfaf6]">
                <span class="italic font-medium text-[45px] md:text-[55px]">Authentic</span><br>Palestinian Products
            </h1>
            
            <!-- Thin divider line -->
            <div class="h-[2px] w-[350px] bg-[#c9b9a1] opacity-70 my-3"></div>

            <p class="font-headings text-[20px] md:text-[24px] mb-8 text-[#e9dec9] drop-shadow-md">
                Directly from Our Cooperatives
            </p>
            
            <!-- Button under the text -->
            <button class="stitched-banner px-8 py-3 text-[16px] font-bold font-headings tracking-wide cursor-pointer hover:bg-accent-red-hover transition-all">
                <span class="opacity-70 text-xs mr-2">❖</span> Explore Our Market <span class="opacity-70 text-xs ml-2">❖</span>
            </button>
            
        </div>
    </section>

    <!-- ─── TATREEZ SEPARATOR ─── -->
    <div class="h-[25px] tatreez-strip border-y-[3px] border-[#3e2a14] shadow-md relative z-20"></div>

    <div class="max-w-[1100px] mx-auto px-5">
        
        <!-- ─── CATEGORIES (THE ARCHES) ─── -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 my-16">
            
            <div class="flex flex-col items-center">
                <div class="arch-frame">
                    <img src="/images/second.png" alt="Olive Oil">
                </div>
                <div class="stitched-banner w-[105%] -mt-4 py-2 text-center z-10">
                    <h3 class="font-headings font-bold text-[16px] tracking-wide">Olive Oil</h3>
                </div>
            </div>

            <div class="flex flex-col items-center">
                <div class="arch-frame">
                    <img src="/images/third.png" alt="Handicrafts">
                </div>
                <div class="stitched-banner w-[105%] -mt-4 py-2 text-center z-10">
                    <h3 class="font-headings font-bold text-[16px] tracking-wide">Handicrafts</h3>
                </div>
            </div>

            <div class="flex flex-col items-center">
                <div class="arch-frame">
                    <img src="/images/fourth.png" alt="Herbs & Honey">
                </div>
                <div class="stitched-banner w-[105%] -mt-4 py-2 text-center z-10">
                    <h3 class="font-headings font-bold text-[16px] tracking-wide">Herbs & Honey</h3>
                </div>
            </div>

            <div class="flex flex-col items-center">
                <div class="arch-frame">
                    <img src="/images/fifth.png" alt="Traditional Foods">
                </div>
                <div class="stitched-banner w-[105%] -mt-4 py-2 text-center z-10">
                    <h3 class="font-headings font-bold text-[16px] tracking-wide">Traditional Foods</h3>
                </div>
            </div>

        </div>

        <!-- ─── FEATURED PRODUCTS TITLE ─── -->
        <div class="flex flex-col md:flex-row items-center justify-between mb-8 gap-4 border-b border-border-tan pb-4">
            <div class="flex items-center gap-3">
                <span class="text-accent-green text-xl">❖</span>
                <h2 class="font-headings text-[30px] font-bold text-text-dark tracking-wide">Featured Products</h2>
                <span class="text-accent-red text-xl">❖</span>
            </div>
            <button class="bg-accent-red text-text-light px-5 py-1.5 font-headings font-bold rounded-sm shadow-md border border-[#5c1610] hover:bg-accent-red-hover transition-colors">View All ></button>
        </div>

        <!-- ─── FEATURED PRODUCTS ITEMS ─── -->
        <div class="grid grid-cols-2 md:grid-cols-4 gap-5 mb-20">
            
            <div class="polaroid-card flex flex-col items-center">
                <img src="/images/sixth.png" alt="Organic Olive Oil" class="w-full h-[200px] object-cover border border-[#c9b9a1] mb-4">
                <h4 class="font-headings font-bold text-[18px] text-text-dark text-center">Organic Olive Oil</h4>
                <div class="w-full h-[1px] bg-border-tan my-2"></div>
                <span class="font-headings font-bold text-[20px] text-accent-red">100 NIS</span>
            </div>

            <div class="polaroid-card flex flex-col items-center">
                <img src="/images/seventh.png" alt="Handwoven Basket" class="w-full h-[200px] object-cover border border-[#c9b9a1] mb-4">
                <h4 class="font-headings font-bold text-[18px] text-text-dark text-center">Handwoven Basket</h4>
                <div class="w-full h-[1px] bg-border-tan my-2"></div>
                <span class="font-headings font-bold text-[20px] text-accent-red">60 NIS</span>
            </div>

            <div class="polaroid-card flex flex-col items-center">
                <img src="/images/eigth.png" alt="Za'atar Mix" class="w-full h-[200px] object-cover border border-[#c9b9a1] mb-4">
                <h4 class="font-headings font-bold text-[18px] text-text-dark text-center">Za'atar Mix</h4>
                <div class="w-full h-[1px] bg-border-tan my-2"></div>
                <span class="font-headings font-bold text-[20px] text-accent-red">35 NIS</span>
            </div>

            <div class="polaroid-card flex flex-col items-center">
                <img src="/images/ninth.png" alt="Fig Jam" class="w-full h-[200px] object-cover border border-[#c9b9a1] mb-4">
                <h4 class="font-headings font-bold text-[18px] text-text-dark text-center">Fig Jam</h4>
                <div class="w-full h-[1px] bg-border-tan my-2"></div>
                <span class="font-headings font-bold text-[20px] text-accent-red">25 NIS</span>
            </div>

        </div>

        <!-- ─── MEET OUR COOPERATIVES TITLE ─── -->
        <div class="text-center mb-8">
            <div class="flex items-center justify-center gap-4 mb-2 before:flex-1 before:border-b before:border-dashed before:border-[#8b7355] after:flex-1 after:border-b after:border-dashed after:border-[#8b7355]">
                <h2 class="font-headings text-[32px] font-bold text-text-dark tracking-wide flex items-center gap-2">
                    <span class="text-sm opacity-60">❖</span> Meet Our Cooperatives <span class="text-sm opacity-60">❖</span>
                </h2>
            </div>
            <p class="font-headings text-[18px] text-text-dark font-semibold italic mb-4">Empowering Palestinian Communities</p>
            <button class="stitched-banner px-6 py-2 text-[14px] font-bold font-headings tracking-wide cursor-pointer hover:bg-accent-red-hover">Learn More ></button>
        </div>

        <!-- ─── COOPERATIVES ITEMS ─── -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-16">
            
            <div class="relative bg-[#fdfaf6] border-[4px] border-[#e9dec9] p-1.5 shadow-[0_5px_15px_rgba(0,0,0,0.15)]">
                <img src="/images/tenth.png" alt="Olive Harvest" class="w-full h-[220px] object-cover">
                <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 w-[85%] stitched-banner py-2 text-center">
                    <span class="font-headings font-bold text-[15px] tracking-wide">Olive Harvest</span>
                </div>
            </div>

            <div class="relative bg-[#fdfaf6] border-[4px] border-[#e9dec9] p-1.5 shadow-[0_5px_15px_rgba(0,0,0,0.15)]">
                <img src="/images/eleven.png" alt="Women's Craft Collective" class="w-full h-[220px] object-cover">
                <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 w-[85%] stitched-banner py-2 text-center">
                    <span class="font-headings font-bold text-[15px] tracking-wide">Women's Craft Collective</span>
                </div>
            </div>

            <div class="relative bg-[#fdfaf6] border-[4px] border-[#e9dec9] p-1.5 shadow-[0_5px_15px_rgba(0,0,0,0.15)]">
                <img src="/images/twelve.png" alt="Herbal Cooperative" class="w-full h-[220px] object-cover">
                <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 w-[85%] stitched-banner py-2 text-center">
                    <span class="font-headings font-bold text-[15px] tracking-wide">Herbal Cooperative</span>
                </div>
            </div>

        </div>
    </div>
@endsection