@include('Layout.header')


<main>
    <h1>Estimator</h1>


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
        <form name="new_estimate_form" action="{{route('sendEstimate')}}" method="post">
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
                    <option cost="{{$service->cost_sqft}}" value="{{$service->id}}">{{$service->name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="length">Length:</label>
            <input type="text" step="any" name="length" value="1">
        </div>

        <div>
            <label for="width">Width:</label>
            <input type="text" step="any" name="Width" value="1">
        </div>

        <div>
            <label for="material_cost">Material Cost(optional):</label>
            <input type="text" step="any" name="material_cost" value="0">
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
