@include('Layout.header')

    <main>
        <div class="delete-container">
            <h1>Are You Sure You want to Delete?</h1>
            <div class="delete-btns">
                <a href="{{route('deleting-service', $data->id)}}">Delete</a>
                <a href="{{route('dashboard')}}">Cancel</a>
            </div>
        </div>
    </main>

@include('Layout.footer')
