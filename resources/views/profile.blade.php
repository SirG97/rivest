<x-app-layout>

    <div class="row">

        <div class="col-sm-10">
            <div class="element-wrapper">
                <div class="element-box">
                    <form>
                        <h5 class="form-header">
                            Account Details
                        </h5>
                        <div class="form-desc">
                            If you feel that you have a weaker strength password, then please change it. We recommend to change your password in every 45 days to make it secure.
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="bank_name"> User Full Name:</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="bank" placeholder="Bruce Lee" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="name">Email ID</label>
                            <div class="col-sm-8">
                                <input class="form-control" placeholder="Email@example.com" type="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">Phone Number</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="account_number" placeholder="Phone" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">Address</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="account_number" placeholder="12 Washington" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">City / State</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="account_number" placeholder="Ohio" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">Zip Code</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="zip" placeholder="Ohio" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">Account Number</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="Account_number" placeholder="21093844922" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">Account Balance</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="account_balance" placeholder="2109,000.00" type="text" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">Account Pin</label>
                            <div class="col-sm-8">
                                <input class="form-control" name="Account_pin" placeholder="2109" type="text">
                            </div>
                        </div>
                        <div class="form-buttons-w">
{{--                            <button class="btn btn-primary" type="submit" disabled> Submit</button>--}}
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--    <x-slot name="header">--}}
    {{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
    {{--            {{ __('Dashboard') }}--}}
    {{--        </h2>--}}
    {{--    </x-slot>--}}

    {{--    <div class="py-12">--}}
    {{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
    {{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
    {{--                <div class="p-6 bg-white border-b border-gray-200">--}}
    {{--                    You're logged in!--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</x-app-layout>
