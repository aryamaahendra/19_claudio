<div class="bg-white shadow">
    <header
        class="flex flex-wrap sm:justify-start border-b sm:flex-nowrap z-50 w-full text-sm py-3 sm:py-0 dark:bg-slate-900">
        <nav class="relative max-w-7xl w-full mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8"
            aria-label="Global">
            <div class="flex items-center justify-between">
                <a class="flex-none text-xl font-semibold dark:text-white"
                    href="{{ route('welcome') }}" aria-label="Brand">
                    SPinventory
                </a>

                @include('components.layouts.dashboard.partials.navbar-hamburger')
            </div>
            <div id="navbar-collapse-with-animation"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                <div
                    class="flex flex-col gap-y-4 gap-x-0 mt-5 sm:flex-row sm:items-center sm:justify-end sm:gap-y-0 sm:gap-x-7 sm:mt-0 sm:pl-7">
                    <x-preline.navbar.menu-item
                        href="{{ route('welcome') }}">Landing</x-preline.navbar.menu-item>

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf

                        <button type="submit"
                            class="flex items-center gap-x-2 text-sm font-medium text-gray-500 hover:text-blue-600 sm:border-l sm:border-gray-300 sm:my-6 sm:pl-6 dark:border-gray-700 dark:text-gray-400 dark:hover:text-blue-500">
                            <x-icons.user-circle class="w-5 h-5" />
                            Log out
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Nav -->
    <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div
            class="relative flex flex-row justify-between items-center gap-x-8 py-4 sm:py-0 dark:border-slate-700">
            <div class="flex items-center w-full sm:w-[auto]">
                @include('components.layouts.dashboard.partials.navbar-btn-main-menu-show')
            </div>

            <div id="secondary-nav-toggle"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 absolute top-16 right-0 w-full rounded-md bg-white sm:block sm:static sm:top-0 sm:w-full sm:max-h-full sm:bg-transparent sm:overflow-visible">
                <div
                    class="flex flex-col py-2 sm:flex-row sm:justify-end sm:gap-y-0 sm:gap-x-6 sm:py-0">

                    @include('components.layouts.dashboard.partials.navbar-main-menu')
                </div>
            </div>
        </div>
    </nav>
    <!-- End Nav -->
</div>
