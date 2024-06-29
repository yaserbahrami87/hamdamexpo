@component('master.index2')
        <div class="col-5 mx-auto   mb-5">
            <div class="card ">
                <div class="card-header">فراموشی رمز عبور</div>
                <div class="card-body">
                    <div class="text-center col-12" >
                        <a href="/">
                            <img src="/assets/images/logo-small.png" class="img-fluid " />
                        </a>
                    </div>
                    <form method="POST" action="{{ route('password.email') }}">
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

                        <button type="submit" class="btn btn-outline-success">
                            {{ __('ارسال لینک فراموشی رمز') }}
                        </button>

                    </form>
                </div>
                </div>
        </div>
@endcomponent
