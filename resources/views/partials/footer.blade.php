<footer>
  <div class="top">
    <div class="container">
      <div class="lists-container">
        @foreach ($footerMenu["footerLinks"] as $footerLink)
            <h3>{{strtoupper($footerLink["listName"])}}</h3>
            <ul>
                @foreach ($footerLink["options"] as $option)
                    <li>
                        <a href="{{$option["href"]}}">{{$option["optName"]}}</a>
                    </li>
                @endforeach
            </ul>
        @endforeach
      </div>
      <div class="logo-container">
        <img src="img/dc-logo-bg.png" alt="DC Logo Background">
      </div>
    </div>
  </div>
  <div class="bottom">
    <div class="container">
      <button><h3>SIGN-UP NOW!</h3></button>
      <div class="socials-container">
        <h3>FOLLOW US</h3>
        <ul>
            @foreach ($footerMenu["socials"] as $social)
                <li>
                    <a href="{{$social["href"]}}"><img src="{{$social["src"]}}" alt="{{$social["name"]}}"></a>
                </li>
            @endforeach
        </ul>
      </div>
    </div>
  </div>
</footer>
