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
<body class="font-body text-text-dark leading-relaxed overflow-x-hidden m-0 p-0 box-border">

    <!-- ─── TOP NAVBAR ─── -->
    <nav class="flex flex-col md:flex-row justify-between items-center py-4 px-10 border-b border-border-tan/50 bg-[#e9dec9]/90 backdrop-blur-sm z-50 relative shadow-sm">
        <div class="flex items-center gap-3">
            <i class="fas fa-tree text-2xl text-text-dark"></i>
            <div class="font-headings text-2xl font-bold leading-none flex flex-col">
                <span>Roots</span>
                <span>& Goods</span>
            </div>
        </div>

        <ul class="flex flex-wrap justify-center items-center gap-6 text-[14px] font-bold tracking-wide">
            <li><a href="/" class="hover:text-accent-red transition-colors">Home</a></li>
            <li class="text-[8px] opacity-40">●</li>
            <li><a href="/about" class="hover:text-accent-red transition-colors">About Us</a></li>
            <li class="text-[8px] opacity-40">●</li>
            <li><a href="#" class="hover:text-accent-red transition-colors">Cooperatives</a></li>
            <li class="text-[8px] opacity-40">●</li>
            <li><a href="#" class="hover:text-accent-red transition-colors">Shop</a></li>
            <li class="text-[8px] opacity-40">●</li>
            <li><a href="#" class="hover:text-accent-red transition-colors">Contact</a></li>
        </ul>

        <div class="flex items-center gap-5 text-lg">
            <a href="#" class="hover:text-accent-red transition-colors"><i class="fas fa-search"></i></a>
            <a href="#" class="hover:text-accent-red transition-colors"><i class="fas fa-shopping-basket"></i></a>
            <div class="flex items-center gap-2 text-[14px] font-bold cursor-pointer border-l border-border-tan pl-4">
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
    <section class="bg-footer pt-12 pb-8 border-t-[6px] border-double border-[#5c4e3a] relative mt-16 shadow-[inset_0_10px_20px_rgba(0,0,0,0.8)]">
        
        <div class="max-w-[600px] mx-auto text-center px-5">
            <div class="flex items-center justify-center gap-4 mb-2 before:flex-1 before:border-b before:border-dashed before:border-[#8b7355] after:flex-1 after:border-b after:border-dashed after:border-[#8b7355]">
                <h3 class="font-headings text-2xl font-bold tracking-wider flex items-center gap-2 text-[#e9dec9]">
                    <span class="text-xs opacity-70">❖</span> Join Our Newsletter <span class="text-xs opacity-70">❖</span>
                </h3>
            </div>
            <p class="text-sm mb-6 text-[#c9b9a1]">Get the latest updates and special offers.</p>
            
            <form class="flex h-10 shadow-[0_4px_10px_rgba(0,0,0,0.5)] max-w-[400px] mx-auto" onsubmit="event.preventDefault();">
                <input type="email" class="flex-1 border-none px-4 bg-[#fdfaf6] text-text-dark font-body outline-none" placeholder="Enter your email..." required>
                <button type="submit" class="bg-accent-red text-text-light border-none px-6 font-headings font-bold tracking-wide text-[15px] cursor-pointer hover:bg-accent-red-hover transition-colors shadow-[inset_0_0_10px_rgba(0,0,0,0.2)]">Subscribe</button>
            </form>
        </div>
    </section>

</body>
</html>