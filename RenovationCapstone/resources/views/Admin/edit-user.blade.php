@include('Layout.header')
<main>
    <div>
        <h1>Update {{$data->name}}</h1>
        <div>
            <form action="{{route('editingUser', $data->id)}}" method="post">
                @csrf

                <div>
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" value="{{$data->name}}">
                </div>

                <div>
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" value="{{$data->email}}">
                </div>

                <div>
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone" value="{{$data->phone}}">
                </div>

                <div>
                    <label for="role">Role:</label>
                    <select name="role" id="role">
                        <option value="{{$data->role}}">{{$data->role}}</option>
                        <option value="User">User</option>
                        <option value="Employee">Employee</option>
                        <option value="Admin">Admin</option>
                    </select>
                </div>

                <div>
                    <label for="address">Address:</label>
                    <textarea name="address" id="address" cols="30" rows="10">{{$data->address}}</textarea>
                </div>

                <input type="Submit" value="Save">
            </form>

        </div>
    </div>
</main>
@include('Layout.footer')
