@component('master.index2')
    <div class="col-4 mx-auto  mb-5">
        <div class="card" >
            <div class="card-header">ورود به سایت</div>
            <div class="card-body">
                <div class="text-center col-12" >
                    <a href="/">
                        <img src="/assets/images/logo-small.png" class="img-fluid " />
                    </a>
                </div>
                <form method="POST" action="{{ route('password.update') }}">
                    {{csrf_field()}}

                    <!-- Password Reset Token -->
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">


                    <div class="form-group">
                        <label for="email">پست الکترونیکی:</label>
                        <input type="email" class="form-control" id="email"  name="email" value="{{old('email',$request->email)}}" required autofocus />
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


                    <div class="form-group">
                        <label for="password_confirmation">تکرار رمز عبور:</label>
                        <input type="password_confirmation" class="form-control" id="password_confirmation" name="password_confirmation"  required autocomplete="current-password" />
                        @error('password_confirmation')
                        <p class="text-danger" >
                            <strong>{{ $message }}</strong>
                        </p>
                        @enderror
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button class="btn btn-outline-success" type="submit">ریست رمز عبور</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endcomponent
