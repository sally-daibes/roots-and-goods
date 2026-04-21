<x-guest-layout>
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <div class="flex flex-col-reverse md:flex-row gap-6 items-center">
        
        <div class="w-full md:w-[55%]">
            <form method="POST" action="{{ route('login') }}" class="flex flex-col gap-4">
                @csrf

                <div>
                    <x-input-label for="email" :value="__('Email')" class="text-[#3e2a14] font-headings font-bold text-[14px] mb-1" />
                    <x-text-input id="email" class="block w-full bg-[#e8d5c4] border-none shadow-inner rounded-sm py-2 focus:ring-2 focus:ring-[#3e2a14] text-text-dark" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </div>

                <div>
                    <x-input-label for="password" :value="__('Password')" class="text-[#3e2a14] font-headings font-bold text-[14px] mb-1" />
                    <x-text-input id="password" class="block w-full bg-[#e8d5c4] border-none shadow-inner rounded-sm py-2 focus:ring-2 focus:ring-[#3e2a14] text-text-dark"
                                    type="password"
                                    name="password"
                                    required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                </div>

                <div class="block mt-1">
                    <label for="remember_me" class="inline-flex items-center cursor-pointer">
                        <input id="remember_me" type="checkbox" class="rounded-sm border-none bg-[#e8d5c4] text-[#3e2a14] shadow-inner focus:ring-[#3e2a14] h-4 w-4" name="remember">
                        <span class="ms-2 text-[15px] text-[#3e2a14] font-headings font-bold">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <div class="flex flex-col items-center mt-2 gap-3">
                    <button type="submit" class="w-full py-2.5 text-[15px] font-bold font-headings tracking-widest text-text-light uppercase bg-[#8b211a] hover:bg-[#691712] transition-colors border border-[#4a110e] shadow-[inset_0_0_0_2px_#8b211a,inset_0_0_0_3px_rgba(253,251,247,0.4)] rounded-sm">
                        {{ __('Log in') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="underline text-[14px] text-text-dark opacity-80 hover:opacity-100 hover:text-accent-red transition-all" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>

        <div class="w-full md:w-[45%] flex justify-center md:justify-end">
            <img src="http://roots-and-goods.test/images/eigth.png" alt="Za'atar Jar" class="w-[200px] h-[200px] object-cover rounded-xl shadow-[0_8px_20px_rgba(59,45,29,0.3)] border-4 border-[#e8d5c4]">
        </div>

    </div>
</x-guest-layout>