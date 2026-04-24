@extends('layouts.front')

@section('content')
    <div class="bg-[#f4ecd8] border-b border-border-tan py-12 shadow-sm">
        <div class="max-w-[1100px] mx-auto px-5 text-center">
            <h1 class="font-headings text-[42px] font-bold text-accent-red tracking-wide flex items-center justify-center gap-3">
                <span class="text-xl opacity-60">❖</span> 
                The Marketplace 
                <span class="text-xl opacity-60">❖</span>
            </h1>
            <p class="mt-3 text-[18px] text-text-dark font-headings italic max-w-2xl mx-auto opacity-90">
                Discover authentic products directly from Palestinian cooperatives.
            </p>
        </div>
    </div>

    <div x-data="{ showLoginPopup: false }" class="max-w-[1100px] mx-auto px-5 py-16 min-h-screen relative">
        
        <div class="flex flex-wrap justify-center gap-8">
            
            @forelse($products as $product)
                <div class="polaroid-card w-full max-w-[280px] flex flex-col h-full relative cursor-pointer group">
                    <div class="absolute top-4 right-4 bg-accent-green text-white text-xs font-bold px-2 py-1 z-10 shadow-md">
                        {{ $product->category }}
                    </div>
                    
                    @php
                        $images = is_string($product->images) ? json_decode($product->images, true) : $product->images;
                        $mainImage = !empty($images) ? $images[0] : 'http://roots-and-goods.test/images/second.png';
                    @endphp
                    
                    <img src="{{ $mainImage }}" alt="{{ $product->title }}" class="w-full h-[220px] object-cover border border-[#c9b9a1] mb-4 group-hover:opacity-90 transition-opacity">
                    
                    <h4 class="font-headings font-bold text-[18px] text-text-dark text-center leading-tight">{{ $product->title }}</h4>
                    <p class="text-center text-[13px] text-text-dark opacity-70 mt-1 mb-2">{{ $product->cooperative->name ?? 'Independent Artisan' }}</p>
                    
                    <div class="mt-auto">
                        <div class="w-full h-[1px] bg-border-tan my-3"></div>
                        <div class="flex justify-between items-center">
                            <span class="font-headings font-bold text-[20px] text-accent-red">{{ $product->price }} NIS</span>
                            
                            <div class="flex gap-2">
                                @auth
                                    @if(auth()->user()->role === 'customer')
                                        <button class="text-accent-red hover:text-accent-red-hover p-1 transition-colors" title="Save to Wishlist">
                                            <i class="far fa-heart text-xl"></i>
                                        </button>
                                        <button class="bg-[#f4ecd8] border border-border-tan hover:bg-accent-green hover:text-white hover:border-accent-green text-text-dark p-2 transition-colors rounded-sm shadow-sm" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                        </button>
                                    @endif
                                @else
                                    <button @click="showLoginPopup = true" class="text-accent-red hover:text-accent-red-hover p-1 transition-colors" title="Save to Wishlist">
                                        <i class="far fa-heart text-xl"></i>
                                    </button>
                                    <button @click="showLoginPopup = true" class="bg-[#f4ecd8] border border-border-tan hover:bg-accent-green hover:text-white hover:border-accent-green text-text-dark p-2 transition-colors rounded-sm shadow-sm" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                    </button>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="polaroid-card w-full max-w-[280px] flex flex-col h-full relative cursor-pointer group">
                    <div class="absolute top-4 right-4 bg-accent-green text-white text-xs font-bold px-2 py-1 z-10 shadow-md">Olive Oil</div>
                    <img src="http://roots-and-goods.test/images/sixth.png" class="w-full h-[220px] object-cover border border-[#c9b9a1] mb-4 group-hover:opacity-90 transition-opacity">
                    <h4 class="font-headings font-bold text-[18px] text-text-dark text-center leading-tight">Extra Virgin Olive Oil</h4>
                    <p class="text-center text-[13px] text-text-dark opacity-70 mt-1 mb-2">Jenin Farmers Cooperative</p>
                    <div class="mt-auto">
                        <div class="w-full h-[1px] bg-border-tan my-3"></div>
                        <div class="flex justify-between items-center">
                            <span class="font-headings font-bold text-[20px] text-accent-red">120.00 NIS</span>
                            <div class="flex gap-2">
                                @auth
                                    @if(auth()->user()->role === 'customer')
                                        <button class="text-accent-red hover:text-accent-red-hover p-1 transition-colors" title="Save to Wishlist">
                                            <i class="far fa-heart text-xl"></i>
                                        </button>
                                        <button class="bg-[#f4ecd8] border border-border-tan hover:bg-accent-green hover:text-white hover:border-accent-green text-text-dark p-2 transition-colors rounded-sm shadow-sm" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                        </button>
                                    @endif
                                @else
                                    <button @click="showLoginPopup = true" class="text-accent-red hover:text-accent-red-hover p-1 transition-colors" title="Save to Wishlist">
                                        <i class="far fa-heart text-xl"></i>
                                    </button>
                                    <button @click="showLoginPopup = true" class="bg-[#f4ecd8] border border-border-tan hover:bg-accent-green hover:text-white hover:border-accent-green text-text-dark p-2 transition-colors rounded-sm shadow-sm" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                    </button>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>

                <div class="polaroid-card w-full max-w-[280px] flex flex-col h-full relative cursor-pointer group">
                    <div class="absolute top-4 right-4 bg-accent-green text-white text-xs font-bold px-2 py-1 z-10 shadow-md">Handicrafts</div>
                    <img src="http://roots-and-goods.test/images/seventh.png" class="w-full h-[220px] object-cover border border-[#c9b9a1] mb-4 group-hover:opacity-90 transition-opacity">
                    <h4 class="font-headings font-bold text-[18px] text-text-dark text-center leading-tight">Traditional Straw Basket</h4>
                    <p class="text-center text-[13px] text-text-dark opacity-70 mt-1 mb-2">Women's Craft Collective</p>
                    <div class="mt-auto">
                        <div class="w-full h-[1px] bg-border-tan my-3"></div>
                        <div class="flex justify-between items-center">
                            <span class="font-headings font-bold text-[20px] text-accent-red">65.00 NIS</span>
                            <div class="flex gap-2">
                                @auth
                                    @if(auth()->user()->role === 'customer')
                                        <button class="text-accent-red hover:text-accent-red-hover p-1 transition-colors" title="Save to Wishlist">
                                            <i class="far fa-heart text-xl"></i>
                                        </button>
                                        <button class="bg-[#f4ecd8] border border-border-tan hover:bg-accent-green hover:text-white hover:border-accent-green text-text-dark p-2 transition-colors rounded-sm shadow-sm" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                        </button>
                                    @endif
                                @else
                                    <button @click="showLoginPopup = true" class="text-accent-red hover:text-accent-red-hover p-1 transition-colors" title="Save to Wishlist">
                                        <i class="far fa-heart text-xl"></i>
                                    </button>
                                    <button @click="showLoginPopup = true" class="bg-[#f4ecd8] border border-border-tan hover:bg-accent-green hover:text-white hover:border-accent-green text-text-dark p-2 transition-colors rounded-sm shadow-sm" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                    </button>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="polaroid-card w-full max-w-[280px] flex flex-col h-full relative cursor-pointer group">
                    <div class="absolute top-4 right-4 bg-accent-green text-white text-xs font-bold px-2 py-1 z-10 shadow-md">Herbs & Spices</div>
                    <img src="http://roots-and-goods.test/images/eigth.png" class="w-full h-[220px] object-cover border border-[#c9b9a1] mb-4 group-hover:opacity-90 transition-opacity">
                    <h4 class="font-headings font-bold text-[18px] text-text-dark text-center leading-tight">Premium Za'atar Blend</h4>
                    <p class="text-center text-[13px] text-text-dark opacity-70 mt-1 mb-2">Hebron Spice Artisans</p>
                    <div class="mt-auto">
                        <div class="w-full h-[1px] bg-border-tan my-3"></div>
                        <div class="flex justify-between items-center">
                            <span class="font-headings font-bold text-[20px] text-accent-red">35.00 NIS</span>
                            <div class="flex gap-2">
                                @auth
                                    @if(auth()->user()->role === 'customer')
                                        <button class="text-accent-red hover:text-accent-red-hover p-1 transition-colors" title="Save to Wishlist">
                                            <i class="far fa-heart text-xl"></i>
                                        </button>
                                        <button class="bg-[#f4ecd8] border border-border-tan hover:bg-accent-green hover:text-white hover:border-accent-green text-text-dark p-2 transition-colors rounded-sm shadow-sm" title="Add to Cart">
                                            <i class="fas fa-shopping-basket"></i>
                                        </button>
                                    @endif
                                @else
                                    <button @click="showLoginPopup = true" class="text-accent-red hover:text-accent-red-hover p-1 transition-colors" title="Save to Wishlist">
                                        <i class="far fa-heart text-xl"></i>
                                    </button>
                                    <button @click="showLoginPopup = true" class="bg-[#f4ecd8] border border-border-tan hover:bg-accent-green hover:text-white hover:border-accent-green text-text-dark p-2 transition-colors rounded-sm shadow-sm" title="Add to Cart">
                                        <i class="fas fa-shopping-basket"></i>
                                    </button>
                                @endauth
                            </div>
                        </div>
                    </div>
                </div>

            @endforelse

        </div>

        <div x-show="showLoginPopup" 
             style="display: none;" 
             class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 backdrop-blur-sm">
            <div @click.away="showLoginPopup = false" class="bg-[#fdfaf6] border border-border-tan shadow-xl p-8 rounded-sm max-w-sm w-full text-center relative">
                
                <button @click="showLoginPopup = false" class="absolute top-3 right-4 text-text-dark opacity-50 hover:opacity-100 text-xl font-bold">&times;</button>
                
                <div class="text-accent-red text-4xl mb-4"><i class="fas fa-lock"></i></div>
                <h3 class="font-headings font-bold text-2xl text-text-dark mb-2">Wait a moment!</h3>
                <p class="text-text-dark opacity-80 mb-6 font-headings">You must sign in so you can save items to your wishlist and basket.</p>
                
                <div class="flex flex-col gap-3">
                    <a href="{{ route('login') }}" class="stitched-banner py-2 font-bold font-headings tracking-wide w-full block">Log In</a>
                    <a href="{{ route('register') }}" class="underline text-sm text-text-dark hover:text-accent-red">Create a Customer Account</a>
                </div>
            </div>
        </div>

    </div>
@endsection