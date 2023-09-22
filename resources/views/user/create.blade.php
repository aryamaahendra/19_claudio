@extends('components.layouts.dashboard')

@section('content')
    <form action="{{ route('dshb.user.store') }}" method="POST">
        @csrf

        <x-preline.card class="shadow overflow-hidden !w-full !max-w-lg !mx-auto">
            <div class="w-full mb-4">
                <x-preline.form.label>Nama Lengkap</x-preline.form.label>
                <x-preline.form.input type="text" name="name" placeholder="Nama ..."
                    value="{{ old('name') }}" />
                @error('name')
                    <x-preline.form.error-message :message="$message" />
                @enderror
            </div>

            <div class="w-full mb-4">
                <x-preline.form.label>Username</x-preline.form.label>
                <x-preline.form.input type="text" name="username" placeholder="Username ..."
                    value="{{ old('username') }}" />
                @error('username')
                    <x-preline.form.error-message :message="$message" />
                @enderror
            </div>

            <div class="w-full mb-4">
                <x-preline.form.label>Email</x-preline.form.label>
                <x-preline.form.input type="email" name="email" placeholder="Email ..."
                    value="{{ old('email') }}" />
                @error('email')
                    <x-preline.form.error-message :message="$message" />
                @enderror
            </div>

            <div class="mb-4">
                <div class="flex gap-4">
                    <div class="w-full">
                        <x-preline.form.label>Password</x-preline.form.label>
                        <x-preline.form.input type="password" name="password" placeholder="***"
                            value="{{ old('password') }}" />
                    </div>

                    <div class="w-full">
                        <x-preline.form.label>Confirm Password</x-preline.form.label>
                        <x-preline.form.input type="password" name="password_confirmation"
                            placeholder="***" value="{{ old('password_confirmation') }}" />
                    </div>
                </div>
                @error('password')
                    <x-preline.form.error-message :message="$message" />
                @enderror
            </div>

            <div class="flex justify-end">
                <x-preline.button.primary type="submit">
                    Simpan
                </x-preline.button.primary>
            </div>

        </x-preline.card>
    </form>
@endsection
