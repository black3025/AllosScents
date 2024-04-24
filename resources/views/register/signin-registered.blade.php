    <!-- login form -->
    <div style="color:green;">{{session('success')}}</div>
    <h4>Login</h4>
    <div class="row">
        <form action="{{route('signin')}}" method="POST">
            @csrf
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email">
            </div>
            <div>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password">
            </div>
            <button type="submit">Login</button>
        </form>
        <div style="color:red;">{{session('error')}}</div>
    </div>

