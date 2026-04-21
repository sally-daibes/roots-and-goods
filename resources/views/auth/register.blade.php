<x-guest-layout>
    <div class="flex flex-col-reverse md:flex-row gap-6 items-center">
        
        <div class="w-full md:w-[55%]">
            <form method="POST" action="{{ route('register') }}" class="flex flex-col gap-3">
                @csrf

                <div>
                    <x-input-label for="name" :value="__('Name')" class="text-[#3e2a14] font-headings font-bold text-[13px] mb-0.5" />
                    <x-text-input id="name" class="block w-full bg-[#e8d5c4] border-none shadow-inner rounded-sm py-1.5 focus:ring-2 focus:ring-[#3e2a14] text-text-dark text-sm" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-1 text-xs" />
                </div>

                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-[#3e2a14] font-headings font-bold text-[13px] mb-0.5" />
                    <x-text-input id="email" class="block w-full bg-[#e8d5c4] border-none shadow-inner rounded-sm py-1.5 focus:ring-2 focus:ring-[#3e2a14] text-text-dark text-sm" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs" />
                </div>

                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-[#3e2a14] font-headings font-bold text-[13px] mb-0.5" />
                    <x-text-input id="password" class="block w-full bg-[#e8d5c4] border-none shadow-inner rounded-sm py-1.5 focus:ring-2 focus:ring-[#3e2a14] text-text-dark text-sm"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs" />
                </div>

                <div>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-[#3e2a14] font-headings font-bold text-[13px] mb-0.5" />
                    <x-text-input id="password_confirmation" class="block w-full bg-[#e8d5c4] border-none shadow-inner rounded-sm py-1.5 focus:ring-2 focus:ring-[#3e2a14] text-text-dark text-sm"
                                    type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-xs" />
                </div>

                <div class="flex flex-col items-center mt-1 gap-2">
                    <button type="submit" class="w-full py-2.5 text-[15px] font-bold font-headings tracking-widest text-text-light uppercase bg-[#8b211a] hover:bg-[#691712] transition-colors border border-[#4a110e] shadow-[inset_0_0_0_2px_#8b211a,inset_0_0_0_3px_rgba(253,251,247,0.4)] rounded-sm">
                        {{ __('Sign Up') }}
                    </button>

                    <a class="underline text-[13px] text-text-dark opacity-80 hover:opacity-100 hover:text-accent-red transition-all" href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>
                </div>
            </form>
        </div>

        <div class="w-full md:w-[45%] flex justify-center md:justify-end">
            <img src="http://roots-and-goods.test/images/seventh.png" alt="Handwoven Basket" class="w-[200px] h-[200px] object-cover rounded-xl shadow-[0_8px_20px_rgba(59,45,29,0.3)] border-4 border-[#e8d5c4]">
        </div>

    </div>
</x-guest-layout>