<x-layout>
    <div class="d-flex justify-content-center align-items-center vh-100" 
        style="background: linear-gradient(135deg, #e0f7fa, #ffffff);">
        <div class="col-md-5">
            <div class="card shadow-lg border-0 rounded-4">
                <div class="card-header text-white text-center" style="background: #008080;">
                    <h3 class="mb-0">Login</h3>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control rounded-3" id="email" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control rounded-3" id="password" name="password" required>
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="remember" name="remember">
                            <label class="form-check-label" for="remember">Remember Me</label>
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
                            Login
                        </button>
                        <p class="text-center mt-3">Don't have an account? 
                            <a href="{{ route('register') }}" class="text-primary text-decoration-none">
                                Register here
                            </a>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
