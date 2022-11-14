<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
            <h4 class="auth-header">
                Login
            </h4>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <x-label for="account_no" :value="__('Account no')" />

                <x-input id="account_no" class="" type="text" name="account_no" :value="old('account_no')" required autofocus />
{{--                <div class="pre-icon os-icon os-icon-email-2-at2"></div>--}}
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
{{--                <div class="pre-icon os-icon os-icon-fingerprint"></div>--}}
            </div>

{{--                <div class="buttons-w">--}}
{{--                    <button class="btn btn-primary">Log me in</button>--}}
{{--                    <div class="form-check-inline">--}}
{{--                        <label class="form-check-label"><input class="form-check-input" type="checkbox">Remember Me</label>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            <!-- Remember Me -->--}}
{{--            <div class="form-check">--}}
{{--                <label for="remember_me" class="inline-flex items-center">--}}
{{--                    <input id="checkbox" type="checkbox" class="form-check-input">--}}
{{--                    <span class="form-check-label">{{ __('Remember me') }}</span>--}}
{{--                </label>--}}
{{--            </div>--}}

            <div class="d-flex justify-content-between">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 align-items-start " href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <x-button class="btn btn-primary align-items-end align-self-end">
                    {{ __('Log in') }}
                </x-button>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>
