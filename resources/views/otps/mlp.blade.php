<x-app-layout>

    <div class="col-lg-10">
        <div class="element-wrapper">
            @include('includes.feedback')

            <div class="element-box">
                <form method="POST" action="{{ route('otp.mlp.verify') }}">
                    @csrf
                    <h5 class="form-header">
                        Money Laundering Prevention Code
                    </h5>
                    <div class="form-desc">
                        Discharge best employed redesigns. Never a turned interfaces among asking
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4" for="mlp"> Code</label>
                        <div class="col-sm-8">
                            <input class="form-control" id="mlp" name="mlp" placeholder="MLP Code" type="text">
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
