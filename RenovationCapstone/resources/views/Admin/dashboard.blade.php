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
                        <tr>
                            <td>John Doe</td>
                            <td>johndoe@example.com</td>
                            <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Jane Smith</td>
                            <td>janesmith@example.com</td>
                            <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                        </tr>
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
                        <tr>
                            <td>Web Design</td>
                            <td>$500</td>
                            <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Graphic Design</td>
                            <td>$400</td>
                            <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                        </tr>
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
                            <th>Title</th>
                            <th>Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Blog Post 1</td>
                            <td>2023-01-15</td>
                            <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <td>Blog Post 2</td>
                            <td>2023-02-20</td>
                            <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                        </tr>
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
                            <th>Estimate ID</th>
                            <th>Client Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Client A</td>
                            <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Client B</td>
                            <td><a href="#">Edit</a> | <a href="#">Delete</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>



@include('Layout.footer')
