@include('Layout.header')
<main>
    <div>
        <h1>Update {{$data[0]->name}}</h1>
        <div>
            <form action="{{route('updateContent', $data[0]->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="service_id">Select Service: </label>
                    <select name="service_id" id="service_id">
                        <option value="{{$data[0]->service_id}}">{{$data[0]->name}}</option>
                        @foreach ($services as $service)

                            <option value="{{$service->id}}">{{$service->name}}</option>

                        @endforeach()
                    </select>
                </div>

                <div>
                    <label for="image1">Image1: *</label>
                    <input type="file" name="image1">
                </div>

                <div>
                    <label for="image2">Image2: *</label>
                    <input type="file" name="image2">
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
                    <textarea name="description" id="description" cols="30" rows="10">{{$data[0]->description}}</textarea>
                </div>

                <div>
                    <label for="cost">Cost:</label>
                    <input type="text" name="cost" value="{{$data[0]->cost}}">
                </div>

                <input type="Submit" value="Save">
            </form>

        </div>
    </div>
</main>
@include('Layout.footer')
