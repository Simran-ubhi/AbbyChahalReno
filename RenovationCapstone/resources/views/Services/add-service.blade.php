@include('Layout.header')

<main>

    <div>
        <h1>New Service</h1>
        <div>
            <form action="{{route('addService')}}" method="post">
                @csrf
                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name">
                </div>
                <div>
                    <label for="cost_sqft">Cost/sqft.</label>
                    <input type="text" step="any" name="cost_sqft">
                </div>
                <div>
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" cols="30" rows="10"></textarea>
                </div>
                <input type="submit" value="Add">
            </form>

        </div>
    </div>

</main>

@include('Layout.footer')
