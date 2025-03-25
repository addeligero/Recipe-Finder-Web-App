<x-layout>
    <div class="d-flex justify-content-center align-items-center vh-100 bg-light">
        <div class="col-md-6 col-sm-8 col-10">
            <div class="card shadow border-0 rounded-4">
                <div class="card-header text-white text-center" style="background: #008080;">
                    <h3 class="mb-0">Create an Account</h3>
                    <p class="mb-0 small">Join us and discover amazing recipes!</p>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" class="form-control rounded-3" id="first_name" name="first_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" class="form-control rounded-3" id="last_name" name="last_name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control rounded-3" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-3" id="password" name="password" required>
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control rounded-3" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <button type="submit" class="btn w-100 mt-3 text-white" style="background: #008080;">
                            Register
                        </button>
                        <p class="text-center mt-3">Already have an account? 
                            <a href="{{ route('login') }}" class="text-primary text-decoration-none">
                                Login here
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
