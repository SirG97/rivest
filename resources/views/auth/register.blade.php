<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>
        <h4 class="auth-header">
            Register
        </h4>
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->

            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <x-label for="first_name" :value="__('First Name')" />
                        <x-input id="first_name" class="block mt-1 w-full"  type="text" name="first_name" :value="old('first_name')" required autofocus />
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <x-label for="last_name" :value="__('Last Name')" />
                        <x-input id="last_name" class="block mt-1 w-full"  type="text" name="last_name" :value="old('last_name')" required autofocus />
                    </div>
                </div>
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <x-label for="password" :value="__('Password')" />

                        <x-input id="password" class="block mt-1 w-full"
                                 type="password"
                                 name="password"
                                 required autocomplete="new-password" />
                    </div>

                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="form-group">
                        <x-label for="password_confirmation" :value="__('Confirm Password')" />

                        <x-input id="password_confirmation" class="block mt-1 w-full"
                                 type="password"
                                 name="password_confirmation" required />
                    </div>
                </div>
            </div>

            <!-- Phone & DOB -->
            <div class="row">
                <div class="col-sm-7 ">
                    <div class="form-group">
                        <x-label for="phone" :value="__('Phone')" />

                        <x-input id="phone" class="block mt-1 w-full"
                                 type="text"
                                 name="phone"
                                 :value="old('phone')"
                                 required  />
                    </div>
                </div>
                <div class="col-sm-5 ">
                    <div class="form-group">
                        <x-label for="dob" :value="__('Date of Birth')" />

                        <x-input id="dob" class="block mt-1 w-full"
                                 type="date"
                                 :value="old('dob')"
                                 name="dob" required />
                    </div>
                </div>
            </div>


            <div class="form-group">
                <x-label for="national_id" :value="__('National ID No')" />

                <x-input id="national_id" class="block mt-1 w-full" type="text" name="national_id" :value="old('national_id')" required />
            </div>
            <div class="form-group">
                <x-label for="ssn" :value="__('SSN')" />

                <x-input id="ssn" class="block mt-1 w-full" type="text" name="ssn" :value="old('ssn')" required />
            </div>

            <div class="row">
                <div class="col-sm-5 ">
                    <div class="form-group">
                        <x-label for="gender" :value="__('Gender')" />
                        <select class="form-control"  id="dob" class="block mt-1 w-full" name="gender">
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-7 ">
                    <div class="form-group">
                        <x-label for="occupation" :value="__('Occupation')" />

                        <x-input id="occupation" class="block mt-1 w-full"
                                 type="text"
                                 name="occupation"
                                 :value="old('occupation')"
                                 required  />
                    </div>
                </div>

            </div>
            <fieldset class="">
                <legend><span>Address information</span></legend>
                <!-- Email Address -->
                <div class="form-group">
                    <x-label for="address" :value="__('Address')" />

                    <x-input id="address" class="block mt-1 w-full" type="text" name="address" :value="old('address')" required />
                </div>
                <div class="row">
                    <div class="col-sm-5 ">
                        <div class="form-group">
                            <x-label for="city" :value="__('City')" />

                            <x-input id="city" class="block mt-1 w-full"
                                     type="text"
                                     name="city"
                                     :value="old('city')"
                                     required  />
                        </div>
                    </div>
                    <div class="col-sm-7 ">
                        <div class="form-group">
                            <x-label for="state" :value="__('State')" />

                            <x-input id="state" class="block mt-1 w-full"
                                     type="text"
                                     name="state"
                                     :value="old('state')"
                                     required  />
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-7 ">
                        <div class="form-group">
                            <x-label for="country" :value="__('Country')" />
                            <select class="form-control"  id="country" class="block mt-1 w-full" name="country">
                                <option value="">Select Country</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="Australia">Australia</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="United States">United States</option>
                                <option value="Germany">Germany</option>
                                <option value="Belgium">Belgium</option>
                                <option value="France">France</option>
                                <option value="Italy">Italy</option>
                                <option value="Luxembourg">Luxembourg</option>
                                <option value="Netherlands">Netherlands</option>
                                <option value="Poland">Poland</option>
                                <option value="Portugal">Portugal</option>
                                <option value="Spain">Spain</option>
                                <option value="Norway">Norway</option>
                                <option value="Switzerland">Switzerland</option>
                                <option value="Turkey">Turkey</option>
                                <option value="China">China</option>
                                <option value="Georgia">Georgia</option>
                                <option value="Hong Kong">Hong Kong</option>
                                <option value="India">India</option>
                                <option value="Indonesia">Indonesia</option>
                                <option value="Iran">Iran</option>
                                <option value="Israel">Israel</option>
                                <option value="Japan">Japan</option>
                                <option value="Jordan">Jordan</option>
                                <option value="S. Korea">S. Korea</option>
                                <option value="N. Korea">N. Korea</option>
                                <option value="Lebanon">Lebanon</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Philippines">Philippines</option>
                                <option value="Qatar">Qatar</option>
                                <option value="Russian">Russian </option>
                                <option value="Saudi Arabia">Saudi Arabia</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Sri Lanka">Sri Lanka</option>
                                <option value="Taiwan">Taiwan</option>
                                <option value="Thailand">Thailand</option>
                                <option value="United Arab Emerate">United Arab Emerate</option>
                                <option value="Vietnam">Vietnam</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-5 ">
                        <div class="form-group">
                            <x-label for="zip" :value="__('Zip code')" />

                            <x-input id="occupation" class="block mt-1 w-full"
                                     type="text"
                                     name="zip"
                                     :value="old('zip')"
                                     required  />
                        </div>
                    </div>

                </div>
            </fieldset>
            <fieldset class="">
                <legend><span>Account information</span></legend>
                <!-- Account info -->

                    <div class="form-group">
                        <x-label for="account_type" :value="__('Account type')" />
                        <select class="form-control"  id="account_type" class="block mt-1 w-full" name="account_type">
                            <option value="">Please select Account Type</option>
                            <option value="ChA">Checking Account</option>
                            <option value="Saving Account">Saving Account</option>
                            <option value="FDA">Fixed Deposit Account</option>
                            <option value="Current Account">Current Account</option>
                            <option value="Business Account">Business Account</option>
                        </select>
                    </div>


{{--                <div class="form-group">--}}
{{--                    <x-label for="pin" :value="__('Transaction Pin(4 digits)')" />--}}

{{--                    <x-input id="pin" class="block mt-1 w-full" type="text" name="pin" :value="old('pin')" required />--}}
{{--                </div>--}}
            </fieldset>
            <div class="d-flex justify-content-between">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="btn btn-primary">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
