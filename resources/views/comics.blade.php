@extends("layout.main")

@section("content")
    <main>
        <section class="jumbotron"></section>
        <section class="container">
            <div class="topTag">current series</div>
            <ul>
                @foreach ($cardsInfo as $cardInfo)
                    <li>
                        <div class="card">
                            <div class="thumb">
                                <img src="{{$cardInfo->image}}" alt="{{$cardInfo->type}}">
                            </div>
                            <h4>{{strtoupper($cardInfo->title)}}</h4>
                        </div>
                    </li>
                @endforeach
            </ul>
            <button><h3>load more</h3></button>
        </section>
    </main>
    <section class="shop">
        <ul class="container">
            @foreach ($shopMenu as $shopMenuItem)
                <li>
                    <img src="{{$shopMenuItem["src"]}}" alt="{{$shopMenuItem["name"]}}">
                    <a href="{{$shopMenuItem["href"]}}">{{$shopMenuItem["name"]}}</a>
                </li>
            @endforeach
            {{-- <li v-for="(item, index) in menu" :key="`menu-${index}`">
              <img :src="item.src" :alt="item.name">
              <a :href="item.href">{{item.name.toUpperCase()}}</a>
            </li> --}}
        </ul>
    </section>
@endsection
