<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Roots & Goods') }}</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-text-dark antialiased bg-[#eae0cd] bg-[url('data:image/svg+xml,%3Csvg viewBox=\'0 0 200 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cfilter id=\'noiseFilter\'%3E%3CfeTurbulence type=\'fractalNoise\' baseFrequency=\'0.75\' numOctaves=\'3\' stitchTiles=\'stitch\'/%3E%3C/filter%3E%3Crect width=\'100%25\' height=\'100%25\' filter=\'url(%23noiseFilter)\' opacity=\'0.06\'/%3E%3C/svg%3E')] flex flex-col min-h-screen">

    <nav class="w-full bg-[#f4ecd8] border-b border-[#c9b9a1] shadow-sm px-8 py-4 flex justify-between items-center z-50 relative">
        
        <a href="/" class="flex items-center gap-3">
            <i class="fas fa-tree text-3xl text-[#3e2a14]"></i>
            <div style="font-family: 'Cinzel', serif;" class="text-2xl font-bold leading-none flex flex-col text-[#3e2a14]">
                <span>Roots</span>
                <span>& Goods</span>
            </div>
        </a>

        <div class="hidden md:flex items-center gap-6 font-headings font-bold text-[15px] text-[#3e2a14]">
            <a href="/" class="hover:text-[#8b2318] transition-colors">Home</a>
            <span class="text-[#c9b9a1] text-[10px]">●</span>
            <a href="{{ route('about') }}" class="hover:text-[#8b2318] transition-colors">About Us</a>
            <span class="text-[#c9b9a1] text-[10px]">●</span>
            <a href="#" class="hover:text-[#8b2318] transition-colors">Cooperatives</a>
            <span class="text-[#c9b9a1] text-[10px]">●</span>
            <a href="{{ route('market') }}" class="hover:text-[#8b2318] transition-colors">Shop</a>
            <span class="text-[#c9b9a1] text-[10px]">●</span>
            <a href="#" class="hover:text-[#8b2318] transition-colors">Contact</a>
        </div>

        <div class="flex items-center gap-5 text-lg text-[#3e2a14]">
            
            @auth
                @if(auth()->user()->role === 'customer')
                    <a href="{{ route('wishlist.index') }}" class="hover:text-[#8b2318] transition-colors relative" title="My Wishlist">
    <i class="far fa-heart text-xl"></i>
    <span class="absolute -top-1.5 -right-2 bg-[#8b2318] text-[#fdfaf6] text-[10px] font-bold rounded-full h-4 w-4 flex items-center justify-center shadow-sm">0</span>
</a>

<a href="{{ route('cart.index') }}" class="hover:text-[#8b2318] transition-colors relative mr-3" title="My Basket">
    <i class="fas fa-shopping-basket text-xl"></i>
    <span class="absolute -top-1.5 -right-2 bg-[#8b2318] text-[#fdfaf6] text-[10px] font-bold rounded-full h-4 w-4 flex items-center justify-center shadow-sm">0</span>
</a>
                    
                    
                    
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="text-[14px] font-bold text-[#8b2318] hover:opacity-70">Log Out</button>
                    </form>

                @else
                    <a href="{{ url('/dashboard') }}" class="text-[14px] font-bold text-[#8b2318] hover:opacity-70">Seller Dashboard</a>
                    <form method="POST" action="{{ route('logout') }}" class="inline ml-3">
                        @csrf
                        <button type="submit" class="text-[14px] font-bold text-text-dark hover:text-[#8b2318]">Log Out</button>
                    </form>
                @endif
                
            @else
                <a href="{{ route('login') }}" class="text-[14px] font-bold hover:text-[#8b2318]">Login</a>
                <a href="{{ route('register') }}" class="text-[14px] font-bold hover:text-[#8b2318]">Sign Up</a>
            @endauth

            <div class="flex items-center gap-2 text-[14px] font-bold cursor-pointer border-l border-[#c9b9a1] pl-4">
                <span>EN</span>
                <img src="https://flagcdn.com/w20/ps.png" alt="PS" class="w-5 h-auto border border-black/20">
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <!-- ─── FOOTER SECTION ─── -->
    <footer class="relative mt-16 py-12 bg-[url('/images/footer.jpeg')] bg-cover bg-center border-t-[4px] border-accent-green shadow-inner">
        <div class="absolute inset-0 bg-black/40"></div>
        <!-- Background from internet -->
    <div class="absolute inset-0 bg-[url('http://roots-and-goods.test/images/footer.jpeg')] bg-cover bg-center"></div>

        <div class="relative z-10 max-w-[1100px] mx-auto px-5 md:px-10">
            
            <div class="w-full md:w-3/4 lg:w-2/3">
                
                <div class="flex items-center justify-start gap-4 mb-6 after:flex-1 after:border-b after:border-dashed after:border-white/40">
                    <h2 class="font-headings text-[32px] font-bold text-white tracking-wide flex items-center gap-2">
                        <span class="text-sm text-[#e9dec9] opacity-80">❖</span> 
                        Join Our Newsletter 
                        <span class="text-sm text-[#e9dec9] opacity-80">❖</span>
                    </h2>
                </div>

                <div class="flex flex-col xl:flex-row items-start xl:items-center justify-start gap-6 mt-4">
                    
                    <p class="font-headings text-[18px] text-white tracking-wide drop-shadow-md">
                        Get the latest updates and special offers.
                    </p>

                    <form action="#" method="POST" class="flex items-stretch shadow-[0_4px_10px_rgba(0,0,0,0.5)]">
                        <input type="email" placeholder="Enter your email..." required 
                               class="bg-[#fdfaf6] text-text-dark font-headings px-4 py-2.5 w-[260px] focus:outline-none focus:ring-0 border-none placeholder:text-gray-500 placeholder:italic">
                        
                        <button type="submit" class="stitched-banner px-6 font-headings font-bold text-white text-[15px] tracking-wide hover:bg-accent-red-hover transition-colors flex items-center justify-center">
                            Subscribe
                        </button>
                    </form>

                </div>
            </div>

        </div>
    </footer>

</body>
</html>