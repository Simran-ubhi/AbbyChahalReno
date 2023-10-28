@include('Layout.header')

<main>

    <div>
        <h1>Update {{$data->name}}</h1>
        <div>
            <form action="{{route('update-services')}}" method="post">
                @csrf
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" value="{{$data->name}}">
                </div>
                <div>
                    <label for="cost_sqft">Cost/sqft.</label>
                    <input type="text" name="cost_sqft" value="{{$data->cost_sqft}}">
                </div>
                <div>
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" cols="30" rows="10">value="{{$data->description}}"</textarea>
                </div>
                <input type="submit" value="Add">
            </form>

        </div>
    </div>

</main>

@include('Layout.footer')
