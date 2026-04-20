@extends('layouts.front')

@section('content')
    <div class="relative py-24 bg-black/60 flex items-center justify-center border-b-[4px] border-accent-green shadow-inner">
        <div class="absolute inset-0 bg-[url('http://roots-and-goods.test/images/about.png')] bg-cover bg-center -z-10"></div>
        
        <div class="text-center z-10 px-5">
            <h1 class="font-headings text-[48px] font-bold text-text-light tracking-wide flex items-center justify-center gap-3 drop-shadow-lg">
                <span class="text-xl opacity-80 text-[#e9dec9]">❖</span> 
                Our Story 
                <span class="text-xl opacity-80 text-[#e9dec9]">❖</span>
            </h1>
            <p class="mt-4 text-[20px] text-[#fdfaf6] font-headings italic max-w-2xl mx-auto drop-shadow-md">
                Connecting you to the rich heritage and resilient spirit of Palestinian cooperatives.
            </p>
        </div>
    </div>

    <div class="tatreez-divider w-full shadow-md"></div>

    <div class="max-w-[1100px] mx-auto px-5 py-16">
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center mb-24">
            
            <div class="polaroid-card rotate-[-2deg] mx-auto md:mx-0 w-full max-w-[450px]">
                <img src="http://roots-and-goods.test/images/tenth.png" alt="Palestinian Farmers" class="w-full h-[350px] object-cover border border-border-tan mb-4">
                <h4 class="font-headings font-bold text-[18px] text-text-dark text-center">Rooted in Tradition</h4>
            </div>
            
            <div>
                <div class="flex items-center gap-3 mb-4">
                    <span class="text-accent-green text-xl">❖</span>
                    <h2 class="font-headings text-[32px] font-bold text-text-dark tracking-wide">Who We Are</h2>
                </div>
                <p class="font-headings text-[18px] text-text-dark leading-relaxed mb-6 opacity-90">
                    Roots & Goods was founded with a simple yet powerful mission: to bring the authentic flavors, crafts, and culture of Palestine directly to your home. We bypass traditional middlemen to work hand-in-hand with local farming cooperatives, women's artisan collectives, and independent creators.
                </p>
                <p class="font-headings text-[18px] text-text-dark leading-relaxed mb-8 opacity-90">
                    Every jar of olive oil, every handwoven basket, and every packet of za'atar carries the story of the land and the proud hands that nurtured it. By choosing our marketplace, you are actively preserving centuries-old traditions and empowering local economies.
                </p>
                
                <div class="flex gap-4">
                    <div class="bg-[#fdfaf6] border border-border-tan p-4 text-center w-full shadow-[0_4px_10px_rgba(59,45,29,0.05)]">
                        <h3 class="font-headings text-accent-red font-bold text-[24px]">100%</h3>
                        <p class="font-headings text-[15px] text-text-dark font-semibold">Authentic</p>
                    </div>
                    <div class="bg-[#fdfaf6] border border-border-tan p-4 text-center w-full shadow-[0_4px_10px_rgba(59,45,29,0.05)]">
                        <h3 class="font-headings text-accent-red font-bold text-[24px]">50+</h3>
                        <p class="font-headings text-[15px] text-text-dark font-semibold">Cooperatives</p>
                    </div>
                    <div class="bg-[#fdfaf6] border border-border-tan p-4 text-center w-full shadow-[0_4px_10px_rgba(59,45,29,0.05)]">
                        <h3 class="font-headings text-accent-red font-bold text-[24px]">Fair</h3>
                        <p class="font-headings text-[15px] text-text-dark font-semibold">Trade</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="text-center mb-12">
            <div class="flex items-center justify-center gap-4 mb-2 before:flex-1 before:border-b before:border-dashed before:border-[#8b7355] after:flex-1 after:border-b after:border-dashed after:border-[#8b7355]">
                <h2 class="font-headings text-[32px] font-bold text-text-dark tracking-wide flex items-center gap-2">
                    <span class="text-sm opacity-60">❖</span> Our Core Values <span class="text-sm opacity-60">❖</span>
                </h2>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            
            <div class="flex flex-col items-center text-center">
                <div class="arch-frame w-[80%] mb-4">
                    <img src="http://roots-and-goods.test/images/eleven.png" alt="Empowerment">
                </div>
                <h3 class="font-headings font-bold text-accent-red text-[22px] mb-2">Empowerment</h3>
                <p class="font-headings text-[16px] text-text-dark opacity-90 px-4 leading-relaxed">
                    We provide a sustainable platform for women and families to achieve financial independence through their traditional skills.
                </p>
            </div>

            <div class="flex flex-col items-center text-center">
                <div class="arch-frame w-[80%] mb-4">
                    <img src="http://roots-and-goods.test/images/twelve.png" alt="Sustainability">
                </div>
                <h3 class="font-headings font-bold text-accent-red text-[22px] mb-2">Sustainability</h3>
                <p class="font-headings text-[16px] text-text-dark opacity-90 px-4 leading-relaxed">
                    Our farmers use generational, eco-friendly practices that respect the earth and preserve it for tomorrow.
                </p>
            </div>

            <div class="flex flex-col items-center text-center">
                <div class="arch-frame w-[80%] mb-4">
                    <img src="http://roots-and-goods.test/images/second.png" alt="Heritage">
                </div>
                <h3 class="font-headings font-bold text-accent-red text-[22px] mb-2">Heritage</h3>
                <p class="font-headings text-[16px] text-text-dark opacity-90 px-4 leading-relaxed">
                    We are dedicated to keeping Palestinian culture alive by sharing its rich, historical products with the world.
                </p>
            </div>

        </div>

    </div>
@endsection