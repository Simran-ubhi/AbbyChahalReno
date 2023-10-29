@include('Layout.header')
<main class="portolio-container">
    @foreach ($content as $tile)

        <div class="card" style="background-image: url(https://images.rawpixel.com/image_800/cHJpdmF0ZS9sci9pbWFnZXMvd2Vic2l0ZS8yMDIzLTAzL3JtNTk3ZGVzaWduLWMtY2hvbmctMDAxLmpwZw.jpg); background-size:cover; background-repeat:no-repeat; width:250px; height:400px;">
            <div class="card-content">
                <p><Strong>Budget:</Strong>${{$tile->cost}}</p>
                <a href="" class="card-btn">View Details</a>
            </div>
        </div>

    @endforeach
</main>
@include('Layout.footer')
