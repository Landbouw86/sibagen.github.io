<x-guest-layout>
    <header class="panel-heading text-center">
        <strong>Forgot Password</strong>
    </header>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}" class="panel-body wrapper-lg">
        @csrf
        <div class="control-label">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>
        <br>
        <!-- Email Address -->
        <div class="form-group mt-4">
            <x-input-label for="email" :value="__('Email')" class="control-lable" />
            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button class="btn btn-secondary btn-block">
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
