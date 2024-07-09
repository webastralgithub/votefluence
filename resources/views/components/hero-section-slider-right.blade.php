<div class="hero__right w-1/2 fixed top-0 right-0 gap-5 px-3 hidden md:flex">
    <div class="influencers-slider-row-1 w-1/3">
        @foreach($avatars as $avatar)
            <x-slide-influencer avatar="{{ $avatar }}" />
        @endforeach
    </div>

    <div class="influencers-slider-row-2 w-1/3">
        @foreach($avatars as $avatar)
            <x-slide-influencer avatar="{{ $avatar }}" />
        @endforeach
    </div>

    <div class="influencers-slider-row-3 w-1/3">
        @foreach($avatars as $avatar)
            <x-slide-influencer avatar="{{ $avatar }}" />
        @endforeach
    </div>
</div>