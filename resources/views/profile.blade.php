<x-app-layout>

    <div class="row">

        <div class="col-sm-10">
            <div class="element-wrapper">
                <div class="element-box">
                    <form>
                        <h5 class="form-header">
                            Account Details
                        </h5>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="bank_name"> User Full Name:</label>
                            <div class="col-sm-8">
                                <input class="form-control" value="{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}" placeholder="Bruce Lee" type="text" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="name">Email ID</label>
                            <div class="col-sm-8">
                                <input class="form-control" value="{{ auth()->user()->email}}" placeholder="" type="Email" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">Phone Number</label>
                            <div class="col-sm-8">
                                <input class="form-control" value="{{ auth()->user()->phone}}"  placeholder="Phone" type="text" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">Address</label>
                            <div class="col-sm-8">
                                <input class="form-control" value="{{ auth()->user()->address }}" placeholder="12 Washington" type="text" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">City</label>
                            <div class="col-sm-8">
                                <input class="form-control" value="{{ auth()->user()->city }}" placeholder="Ohio" type="text" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">State</label>
                            <div class="col-sm-8">
                                <input class="form-control" value="{{ auth()->user()->state }}" placeholder="Ohio" type="text" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">Country</label>
                            <div class="col-sm-8">
                                <input class="form-control" value="{{ auth()->user()->country }}" placeholder="Ohio" type="text" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">Zip Code</label>
                            <div class="col-sm-8">
                                <input class="form-control" value="{{ auth()->user()->zip }}" placeholder="Ohio" type="text" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">Account Number</label>
                            <div class="col-sm-8">
                                <input class="form-control" value={{$account->account_number}} name="Account_number"  type="text" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-form-label col-sm-4" for="">Account Balance</label>
                            <div class="col-sm-8">
                                <input class="form-control" value="{{ '$'. number_format($account->balance, '2', '.', ',') }}" name="account_balance"  type="text" disabled>
                            </div>
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
