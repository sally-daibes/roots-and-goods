<x-guest-layout>
    <div class="flex flex-col-reverse md:flex-row gap-6 items-center">
        
        <div class="w-full md:w-[55%]">
            
            <div class="mb-5 text-[14px] text-text-dark font-headings leading-relaxed opacity-90">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>

            <x-auth-session-status class="mb-4 text-accent-green font-bold font-headings text-sm" :status="session('status')" />

            <form method="POST" action="{{ route('password.email') }}" class="flex flex-col gap-4">
                @csrf

                <div>
                    <x-input-label for="email" :value="__('Email Address')" class="text-[#3e2a14] font-headings font-bold text-[14px] mb-1" />
                    <x-text-input id="email" class="block w-full bg-[#e8d5c4] border-none shadow-inner rounded-sm py-2 focus:ring-2 focus:ring-[#3e2a14] text-text-dark" type="email" name="email" :value="old('email')" required autofocus />
                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
                </div>

                <div class="flex flex-col items-center mt-2 gap-3">
                    <button type="submit" class="w-full py-2.5 text-[13px] font-bold font-headings tracking-widest text-text-light uppercase bg-[#8b211a] hover:bg-[#691712] transition-colors border border-[#4a110e] shadow-[inset_0_0_0_2px_#8b211a,inset_0_0_0_3px_rgba(253,251,247,0.4)] rounded-sm">
                        {{ __('Send Reset Link') }}
                    </button>

                    <a class="underline text-[13px] text-text-dark opacity-80 hover:opacity-100 hover:text-accent-red transition-all" href="{{ route('login') }}">
                        {{ __('Back to login') }}
                    </a>
                </div>
            </form>
        </div>

        <div class="w-full md:w-[45%] flex justify-center md:justify-end">
            <img src="http://roots-and-goods.test/images/ninth.png" alt="Fig Jam" class="w-[200px] h-[200px] object-cover rounded-xl shadow-[0_8px_20px_rgba(59,45,29,0.3)] border-4 border-[#e8d5c4]">
        </div>

    </div>
</x-guest-layout>