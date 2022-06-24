<header>
  <div class="container">
    <div class="logo">
      <img src="img/dc-logo.png" alt="Logo">
    </div>
    <ul>
        @foreach ($headerMenu as $headerLink)
            <li>
                <a href="{{route($headerLink)}}" class="{{Route::currentRouteName() === $headerLink ? 'active' : ''}}">{{strtoupper($headerLink)}}</a>
            </li>
        @endforeach
    </ul>
  </div>
</header>
