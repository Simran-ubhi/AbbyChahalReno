@include('Layout.header')

<main>
    <h1>New Content</h1>

    @if (session()->has('Success'))
        <p class="success">{{session('Success')}}</p>
    @endif

    @if ($errors->any())
    <div class="fail">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div>
        <form action="{{route('addContent')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div>
                <label for="service_id">Select Service: </label>
                <select name="service_id" id="service_id">
                    <option value="">--choose--</option>
                    @foreach ($data as $item)

                        <option value="{{$item->id}}">{{$item->name}}</option>

                    @endforeach ()
                </select>
            </div>

            <div>
                <label for="image1">Image1: *</label>
                <input type="file" name="image1" required>
            </div>

            <div>
                <label for="image2">Image2: *</label>
                <input type="file" name="image2" required>
            </div>

            <div>
                <label for="image3">Image3:</label>
                <input type="file" name="image3">
            </div>

            <div>
                <label for="image4">Image4:</label>
                <input type="file" name="image4">
            </div>

            <div>
                <label for="description">Description:</label>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>

            <div>
                <label for="cost">Cost:</label>
                <input type="text" name="cost">
            </div>

            <input type="Submit" value="Add">
        </form>
    </div>
</main>

@include('Layout.footer')

