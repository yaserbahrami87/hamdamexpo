@component('master.index')
    <div class="col-md-6 mx-auto text-right mb-5">
        <div class="card">
        <div class="card-header">ثبت نام</div>
            <div class="card-body">

                <form method="POST" action="{{ route('register') }}">
                    {{csrf_field()}}
                    <div class="text-center col-12" >
                        <img src="/assets/images/logo-small.png" class="img-fluid " />
                    </div>

                    <div class="form-group">
                        <label for="fname">نام:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="fname"  name="fname" value="{{old('fname')}}" required autofocus />
                        @error('fname')
                                <p class="text-danger" >
                                    <strong>{{ $message }}</strong>
                                </p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="lname">نام خانوادگی:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="lname"  name="lname" value="{{old('lname')}}" required autofocus />
                        @error('lname')
                                <p class="text-danger" >
                                    <strong>{{ $message }}</strong>
                                </p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="tel">تلفن:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="tel"  name="tel" value="{{old('tel')}}" required autofocus />
                        @error('tel')
                                <p class="text-danger" >
                                    <strong>{{ $message }}</strong>
                                </p>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="email">پست الکترونیکی:<span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="email"  name="email" value="{{old('email')}}" required autofocus />
                        @error('email')
                                <p class="text-danger" >
                                    <strong>{{ $message }}</strong>
                                </p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="form-group">
                        <label for="password" >رمز عبور:<span class="text-danger">*</span></label>
                        <input type="password" class="form-control" id="password"  name="password"  required autofocus />
                        @error('password')
                                <p class="text-danger" >
                                        <strong>{{ $message }}</strong>
                                </p>
                        @enderror
                    </div>

                    <!-- Confirm Password -->
                    <div class="mt-4">
                        <label for="password_confirmation" >تکرار رمز عبور:<span class="text-danger">*</span></label>
                        <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required />
                    </div>

                    <div class="flex items-center justify-end mt-4">

                        <button class="btn btn-success">
                            ثبت نام
                        </button>
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                            {{ __('قبلا ثبت نام کرده ای؟') }}
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endcomponent
