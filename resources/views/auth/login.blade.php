@component('master.index')
    <div class="col-4 mx-auto text-right mb-5">
        <div class="card" >
            <div class="card-header">ورود به سایت</div>
            <div class="card-body">
                <div class="text-center col-12" >
                    <a href="/">
                        <img src="/assets/images/logo-small.png" class="img-fluid " />
                    </a>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="email">پست الکترونیکی:</label>
                        <input type="email" class="form-control" id="email"  name="email" value="{{old('email')}}" required autofocus />
                        @error('email')
                        <p class="text-danger" >
                            <strong>{{ $message }}</strong>
                        </p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="password">رمز عبور:</label>
                        <input type="password" class="form-control" id="password" name="password"  required autocomplete="current-password" />
                        @error('password')
                        <p class="text-danger" >
                            <strong>{{ $message }}</strong>
                        </p>
                        @enderror
                    </div>



                    <div class="flex items-center justify-end mt-4">
                        <button class="btn btn-outline-success" type="submit">ورود</button>
                        <a href="{{route('register')}}">ثبت نام</a>
                        @if (Route::has('password.request'))
                            <a class="alert-link d-block" href="{{ route('password.request') }}">
                                {{ __('رمز عبور خود را فراموش کرده اید؟') }}
                            </a>
                        @endif

                    </div>
                </form>
            </div>
        </div>
    </div>
@endcomponent
