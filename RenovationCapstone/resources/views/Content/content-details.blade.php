@include('Layout.header')

<main>
    <div class="details-page-container">
        <a href="/our-portfolio"><img src="/left-arrow.png" width="44px" alt=""></a><h1>{{ $data[0]->name}}</h1>
        <div class="content-images">


            <div class="content-images-1">

                @if ($data[0]->image1)
                    <img src="{{$data[0]->image1}}" alt="image1">
                @endif

                @if ($data[0]->image2)
                    <img class="ndimg" src="{{$data[0]->image2}}" alt="image2">
                @endif

            </div>

            <div class="content-images-2">

                @if ($data[0]->image3)
                    <img src="{{$data[0]->image3}}" alt="image3">
                @endif

                @if ($data[0]->image4)
                    <img src="{{$data[0]->image4}}" alt="image4">
                @endif

            </div>

        </div>
        <hr>
        <div class="content-content">
            <h2>Description</h2>
            <p class="content-desc">{{$data[0]->description}}</p>
            <hr>
            <p class="cost"><strong>Estimated Cost - ${{$data[0]->cost}}</strong></p>
            @if(session('LoggedUser'))
                @if(count($fav)==0)
                    <a href="{{route('favorite',$data[0]->id )}}" class="card-btn" style="margin: 20px auto;">Add to Favourites</a>
                @else
                    <a href="{{route('favorite',$data[0]->id )}}" class="card-btn" style="margin: 20px auto;">Remove From to Favourites</a>
                @endif
            @endif
        </div>

    </div>
</main>

@include('Layout.footer')
