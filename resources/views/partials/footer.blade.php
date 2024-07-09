<footer>
    <!-- Your footer content here -->
    <!-- <p class="text-center text-sm italic">&copy; 2024 votefluence</p> -->


    <!-- CDN common stylesheets -->
    @foreach (config('cdn.__common.scripts') as $style)
        <link href="{{ $style }}" rel="stylesheet">
    @endforeach

    <!-- CDN common stylesheets -->
    @foreach (config('cdn.page__index.scripts') as $style)
        <link href="{{ $style }}" rel="stylesheet">
    @endforeach

    <!-- Adding more custom scripts -->
    @yield('scripts')
</footer>
