    <!-- login form -->
    <h4>Login</h4>
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div style="color: green;">{{ session('success') }}</div>
            <h4>Login</h4>
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('signin') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password:</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <div style="color: red;">{{ session('error') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>

