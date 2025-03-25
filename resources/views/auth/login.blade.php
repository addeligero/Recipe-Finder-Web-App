<x-layout>
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="col-md-5">
            <div class="card shadow-lg border-0 rounded">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">Login</h3>
                </div>
                <div class="card-body p-4">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
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
                        <button type="submit" class="btn btn-primary w-100 mt-3">Login</button>
                        <a href="{{ route('register') }}" class="btn btn-outline-danger w-100 mt-2">Register</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
