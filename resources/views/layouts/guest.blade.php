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
    <body class="font-sans text-text-dark antialiased bg-[#eae0cd] bg-[url('data:image/svg+xml,%3Csvg viewBox=\'0 0 200 200\' xmlns=\'http://www.w3.org/2000/svg\'%3E%3Cfilter id=\'noiseFilter\'%3E%3CfeTurbulence type=\'fractalNoise\' baseFrequency=\'0.75\' numOctaves=\'3\' stitchTiles=\'stitch\'/%3E%3C/filter%3E%3Crect width=\'100%25\' height=\'100%25\' filter=\'url(%23noiseFilter)\' opacity=\'0.06\'/%3E%3C/svg%3E')] flex flex-col justify-center items-center h-screen px-4 overflow-hidden">
        
        <div class="w-full sm:max-w-3xl p-6 md:p-8 bg-[#f4ecd8] border border-border-tan outline outline-2 outline-offset-4 outline-[#c9b9a1]/60 shadow-[0_15px_30px_rgba(59,45,29,0.15)] rounded-sm relative">
            
            <div class="absolute top-2 left-2 text-accent-red opacity-60 text-[10px]">❖</div>
            <div class="absolute top-2 right-2 text-accent-red opacity-60 text-[10px]">❖</div>
            <div class="absolute bottom-2 left-2 text-accent-red opacity-60 text-[10px]">❖</div>
            <div class="absolute bottom-2 right-2 text-accent-red opacity-60 text-[10px]">❖</div>

            <div class="flex justify-center mb-6 text-center">
                <a href="/" class="flex items-center gap-3">
                    <i class="fas fa-tree text-3xl text-[#3e2a14]"></i>
                    <div style="font-family: 'Cinzel', serif;" class="text-2xl font-bold leading-none flex flex-col text-[#3e2a14] text-left">
                        <span>Roots</span>
                        <span>& Goods</span>
                    </div>
                </a>
            </div>

            {{ $slot }}
            
        </div>
    </body>
</html>