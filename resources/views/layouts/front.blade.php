<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roots & Goods</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,600;0,700;1,500&family=Lato:wght@400;700&family=Cinzel:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="store-theme m-0 p-0 box-border overflow-x-hidden leading-relaxed">

    <!-- ─── TOP NAVBAR ─── -->
    <nav class="flex flex-col md:flex-row justify-between items-center py-4 px-10 border-b border-[#c9b9a1]/50 bg-[#e9dec9]/90 backdrop-blur-sm z-50 relative shadow-sm">
        <div class="flex items-center gap-3">
            <i class="fas fa-tree text-2xl text-[#3e2a14]"></i>
            <div style="font-family: 'Cinzel', serif;" class="text-2xl font-bold leading-none flex flex-col text-[#3e2a14]">
                <span>Roots</span>
                <span>& Goods</span>
            </div>
        </div>

        <ul class="flex flex-wrap justify-center items-center gap-6 text-[14px] font-bold tracking-wide text-[#3e2a14]">
            <li><a href="/" class="hover:text-[#8b2318] transition-colors">Home</a></li>
            <li class="text-[8px] opacity-40">●</li>
            <li><a href="/about" class="hover:text-[#8b2318] transition-colors">About Us</a></li>
            <li class="text-[8px] opacity-40">●</li>
            <li><a href="#" class="hover:text-[#8b2318] transition-colors">Cooperatives</a></li>
            <li class="text-[8px] opacity-40">●</li>
            <li><a href="#" class="hover:text-[#8b2318] transition-colors">Shop</a></li>
            <li class="text-[8px] opacity-40">●</li>
            <li><a href="#" class="hover:text-[#8b2318] transition-colors">Contact</a></li>
        </ul>

        <div class="flex items-center gap-5 text-lg text-[#3e2a14]">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-[14px] font-bold text-[#8b2318] hover:opacity-70">Dashboard</a>
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

    <!-- ─── PAGE CONTENT ─── -->
    <main>
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