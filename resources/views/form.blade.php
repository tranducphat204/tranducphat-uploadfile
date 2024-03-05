<form action="{{ 'upload' }}" method="POST" enctype="multipart/form-data">
    {{--<form action="/post?id=1" method="POST"> --}}
    @csrf
    <h1>Form Upload file PHP</h1>
    <label for="image">Tên File: </label>
    <input type="file" name="image">
    <input type="submit" value="Upload File">
    <p><b>Ghi Chú: </b>Chỉ cho phép định dạng .jpg, jpeg, .gif và kích thước tệp tin là 5MB.</p>


    <!-- <p>Name</p>
    <div>
        <input type="text" name="name">
    </div>

    <p>Username</p>
    <div>
        <input type="text" name="username">
    </div>

    <p>Password</p>
    <div>
        <input type="password" name="password">
    </div>

    <br>

    <div>
        <button type="submit">Submit</button>
    </div>-->
    <!-- <div>
        <button type="submit">Submit</button>
    </div> -->
</form>