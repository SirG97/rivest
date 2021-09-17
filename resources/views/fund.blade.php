<x-app-layout>

    <div class="col-lg-10">
        <div class="element-wrapper">
            <h6 class="element-header">
                Fund Transfer
            </h6>
            <div class="element-box">
                <form>
                    <h5 class="form-header">
                        Transfer Funds
                    </h5>
                    <div class="form-desc">
                        Funds transfer is a process of transferring funds from your account to other account in same Bank or other account from another Banks / International Banks.
                        Please make sure that you have enough funds available in your account to transfer. Also don't forgot to validate receiver's account number
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4" for="bank_name"> Receiver's Bank:</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="bank" placeholder="Enter email" type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4" for="name">Reciever's Name</label>
                        <div class="col-sm-8">
                            <input class="form-control" placeholder="name" type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4" for="">Reciever's Account Number</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="account_number" placeholder="Password" type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4" for=""> Regular select</label>
                        <div class="col-sm-8">
                            <select class="form-control">
                                <option>
                                    Select State
                                </option>
                                <option>
                                    New York
                                </option>
                                <option>
                                    California
                                </option>
                                <option>
                                    Boston
                                </option>
                                <option>
                                    Texas
                                </option>
                                <option>
                                    Colorado
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4" for=""> Multiselect</label>
                        <div class="col-sm-8">
                            <select class="form-control select2" multiple="true">
                                <option selected="true">
                                    New York
                                </option>
                                <option selected="true">
                                    California
                                </option>
                                <option>
                                    California
                                </option>
                                <option>
                                    Boston
                                </option>
                                <option>
                                    Texas
                                </option>
                                <option>
                                    Colorado
                                </option>
                            </select>
                        </div>
                    </div>
                    <fieldset class="form-group">
                        <legend><span>Section Example</span></legend>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for=""> First Name</label>
                            <div class="col-sm-8">
                                <input class="form-control" placeholder="First Name" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for=""> Last Name</label>
                            <div class="col-sm-8">
                                <input class="form-control" placeholder="Last Name" type="text">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for="">Username</label>
                            <div class="col-sm-8">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            @
                                        </div>
                                    </div>
                                    <input class="form-control" placeholder="Twitter Username" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label" for=""> Date Picker</label>
                            <div class="col-sm-8">
                                <div class="date-input">
                                    <input class="single-daterange form-control" placeholder="Date of birth" type="text" value="04/12/1978">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-4 col-form-label">Example textarea</label>
                            <div class="col-sm-8">
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </fieldset>
                    <div class="form-group row">
                        <label class="col-sm-4 col-form-label">Radio Buttons</label>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <label class="form-check-label"><input checked="" class="form-check-input" name="optionsRadios" type="radio" value="option1">Option number one</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option2">Here is another radio option</label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label"><input class="form-check-input" name="optionsRadios" type="radio" value="option3">Option three is here</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-buttons-w">
                        <button class="btn btn-primary" type="submit"> Submit</button>
                    </div>
                </form>
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
