<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <h4 class="auth-header">
            Validate Pin
        </h4>
        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('pin.validate') }}">
        @csrf

            <!-- Password -->
            <div class="form-group">
                <x-label for="password" :value="__('Pin')" />

                <x-input id="pin" class="form-control" type="password" name="pin" required autocomplete="pin" />

            </div>


            <div class="d-flex justify-content-between">
                <x-button class="btn btn-primary align-items-end align-self-end">
                    {{ __('Validate Pin') }}
                </x-button>
            </div>

        </form>
    </x-auth-card>
</x-guest-layout>
