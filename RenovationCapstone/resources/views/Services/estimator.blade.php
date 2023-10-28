@include('Layout.header')


<main>
    <h1>Estimator</h1>
    <div>
        <form action="{{route('sendEstimate')}}">
        @csrf
        <div>
            <label for="client_name">Client Name:</label>
            <input type="text" name="client_name">
        </div>

        <div>
            <label for="address">Address</label>
            <textarea name="address" id="address" cols="30" rows="10"></textarea>
        </div>

        <div>
            <label for="service_id">Service:</label>
            <select name="service_id" id="">
                <option value="">--choose--</option>

                @foreach ($services as $service)
                    <option value="{{$service->id}}">{{$service->name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="length">Length:</label>
            <input type="text" name="length">
        </div>

        <div>
            <label for="width">Width:</label>
            <input type="text" name="length">
        </div>

        <div>
            <label for="material_cost">Material Cost(optional):</label>
            <input type="text" name="material_cost">
        </div>

        <div>
            <label for="estimated_cost">Estimate:</label>
            <input type="text" name="estimated_cost">
        </div>

        <div>
            <label for="notes">Comments:</label>
            <textarea name="notes" id="notes" cols="30" rows="10"></textarea>
        </div>


        <input type="submit" value="Save">
        </form>
    </div>
</main>

@include('Layout.footer')
