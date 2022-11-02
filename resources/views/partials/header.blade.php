<header>
   {{-- HEADER-TOP --}}
   <div class="header-top pad-y-05">
    <div class="container-max flex-row justify-end gap-3">
        <div class="ht-item">dc power<sup>sm</sup> visa®</div>
        <div class="ht-item">additional dc sites <span class="ht-triangle">▼</span></div>
    </div>
   </div>
   {{-- /HEADER-TOP --}}
   <div class="header-nav pad-y-1">
    <div class="container-max flex-row justify-between align-center">
        <div class="logo-header"><img class="adapt" src="{{ asset('img/dc-logo.png') }}" alt=""></div>
        <div class="flex-row">
            @foreach ( $links as $link )
              <a href="">{{ $link['label'] }}</a>
            @endforeach
          </div>
        <input type="text" class="my-input-tx" placeholder="Search 🔍">
    </div>
   </div>

   {{-- HEADER-NAV --}}


   {{-- /HEADER-NAV --}}

</header>
