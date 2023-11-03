@include('Layout.header')
<main class="profile">
    <div class="profile-userInfo">
        <h1>{{$user->name}}</h1>
        <address>22 New Pines Trail, Brampton</address>
        <a href="{{route('user-Update')}}" class="edit-btn">Edit Profile <img src="/settings.ico" width="20px" alt=""></a>
    </div>
    <hr>
    <div class="profile-favorites">
        <h2>Favorites</h2>
        <div class="portolio-container">

            @foreach ($favorites as $tile)

                <div class="card" style="background-image: url({{$tile->image1}}); background-size: 100% auto; width:150px; height:300px">
                    <div class="card-content">
                        <p><Strong>Budget:</Strong>${{$tile->cost}}</p>
                        <a href="{{route('contentDetails',$tile->id)}}" class="card-btn">View Details</a>
                    </div>
                </div>

            @endforeach
            </div>
    </div>
</main>
@include('Layout.footer')
