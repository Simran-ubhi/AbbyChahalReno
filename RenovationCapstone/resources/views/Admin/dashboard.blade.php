@include('Layout.header')



<main>
    <div class="dashboard">
        <h1>{{$user->name}}'s Dashboard</h1>
        <hr class="hr">

        <div class="tables">
            <div>
                <div class="table-header">
                    <h2>Users Table</h2>
                    <a href="{{route('registerForm')}}">Add</a>
                </div>
                <table class="users-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div>
                <div class="table-header">
                    <h2>Services Table</h2>
                    <a href="{{route('serviceForm')}}">Add</a>
                </div>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Service Name</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($services as $service)
                        <tr>
                            <td>{{$service->name}}</td>
                            <td>{{$service->cost_sqft}}</td>
                            <td><a href="{{route('updateForm-services', $service->id)}}">Edit</a> | <a href="{{route('deletePage', $service->id)}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div>
                <div class="table-header">
                    <h2>Content Table</h2>
                    <a href="{{route('contentForm')}}">Add</a>
                </div>
                <table class="content-table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Cost</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($content as $data)

                        <tr>
                            <td>{{$data->name}}</td>
                            <td><img src="{{$data->image1}}" alt="{{$data->description}}"></td>
                            <td>{{$data->cost}}</td>
                            <td><a href="{{route('updateForm-content', $data->id)}}">Edit</a> | <a href="{{route('content-deletepage', $data->id)}}">Delete</a></td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>

            <div>
                <div class="table-header">
                    <h2>Estimates Table</h2>
                    <a href="{{route('estimator')}}">New</a>
                </div>

                <table class="estimates-table">
                    <thead>
                        <tr>
                            <th>Client Name</th>
                            <th>Service</th>
                            <th>Address</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($estimates as $estimate)
                        <tr>
                            <td>{{$estimate->client_name}}</td>
                            <td>{{$estimate->name}}</td>
                            <td>{{$estimate->address}}</td>
                            <td><a href="#">View</a> | <a href="{{route('deleteEstimatePage',$estimate->id)}}">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>



@include('Layout.footer')
