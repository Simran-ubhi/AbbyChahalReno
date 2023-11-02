@include('Layout.header')
<h1 style="margin: 30px; font-weigth:600; font-size:48px">Our Gallery</h1>
<main class="portolio-container">



    @foreach ($content as $tile)

        <div class="card" style="background-image: url({{$tile->image1}}); background-size: 300px auto; height:400px">
            <div class="card-content">
                <p><Strong>Budget:</Strong>${{$tile->cost}}</p>
                <a href="{{route('contentDetails',$tile->id)}}" class="card-btn">View Details</a>
            </div>
        </div>

    @endforeach
</main>
@include('Layout.footer')
