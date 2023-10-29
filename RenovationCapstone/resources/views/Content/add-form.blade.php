@include('Layout.header')

<main>
    <h1>New Content</h1>
    <div>
        <form action="{{route('addContent')}}" enctype="multipart/form-data" method="post">
            @csrf
            <div>
                <label for="service_id">Select Service: </label>
                <select name="service_id" id="service_id">
                    <option value="">--choose--</option>
                    {{-- @for () --}}
                    <option value="1">Tiles</option>
                    <option value="2">Washroom</option>
                    {{-- @endfor --}}
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

