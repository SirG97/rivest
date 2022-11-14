<x-app-layout>

    <div class="col-lg-10">
        <div class="element-wrapper">
            @include('includes.feedback')

            <div class="element-box">
                <form method="POST" action="{{ route('otp.email.verify') }}">
                    @csrf
                    <h5 class="form-header">
                       Email Verification
                    </h5>
                    <div class="form-desc">
                        Discharge best employed redesigns. Never a turned interfaces among asking
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4" for=""> OTP</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="otp" placeholder="Enter email" type="text">
                        </div>
                    </div>
                    <div class="form-buttons-w">
                        <button class="btn btn-primary" type="submit"> Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
