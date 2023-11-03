@include('Layout.header')
<main>
    <div>
        <h1>Update {{$data->name}}</h1>
        @if (session()->has('Success'))
            <p class="success">{{session('Success')}}</p>
        @endif
        <div>
            <form action="{{route('user-Updating', $data->id)}}" method="post">
                @csrf

                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="{{$data->name}}">
                </div>

                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" disabled id="email" value="{{$data->email}}">
                </div>

                <div>
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone" value="{{$data->phone}}">
                </div>

                <div>
                    <label for="address">Address:</label>
                    <textarea name="address" id="address" cols="30" rows="10">{{$data->address}}</textarea>
                </div>

                <input type="Submit" value="Save">
            </form>

        </div>
    </div>
</main>
@include('Layout.footer')
