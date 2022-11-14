<x-app-layout>

    <div class="col-lg-10">
        <div class="element-wrapper">
            @include('includes.feedback')
            <h6 class="element-header">
                Inter-bank Transfer
            </h6>
            <div class="element-box">
                <div>
                    <p class="font-weight-bold text-right">Balance: ${{ number_format($account->balance, '2', '.', ',') }}</p>
                </div>
                <form method="POST" action="{{ route('transfer.interbank.store') }}">
                    @csrf
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4" for="account_type"> Account type</label>
                        <div class="col-sm-8">
                            <select class="form-control" name="account_type">
                                <option value="savings account" selected>Savings Account</option>
                                <option value="current account">Current Account</option>
                                <option value="checking account">Checking account</option>
                                <option value="fixed deposit account">Fixed Deposit Account</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4" for="bank_name">Bank Name</label>
                        <div class="col-sm-8">
                            <input class="form-control" placeholder="name" id="bank_name" name="bank_name"  type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4" for="account_no">Beneficiary Account Number</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="account_no" placeholder="Account no" id="account_no" type="text" required  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4" for="account_name"> Beneficiary Name:</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="account_name" placeholder="Name"  required type="text">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4" for="amount"> Amount:</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="amount" id="amount" placeholder="" type="text" required oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-sm-4" for="description"> Description:</label>
                        <div class="col-sm-8">
                            <input class="form-control" name="description" id="description" placeholder="Description"  required type="text">
                        </div>
                    </div>

                    <div aria-hidden="true" aria-labelledby="exampleModalLabel" class="modal fade" id="exampleModal1" role="dialog" tabindex="-1">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Transaction Pin
                                    </h5>
                                    <button aria-label="Close" class="close" data-dismiss="modal" type="button"><span aria-hidden="true"> &times;</span></button>
                                </div>
                                <div class="modal-body">
                                    <form>
                                        <div class="form-group">
                                            <label for="">4-digit transaction pin</label>
                                            <input class="form-control" id="pin" name="pin" pattern="\d*" required placeholder="Pin" type="text" onkeyup="" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                        </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" data-dismiss="modal" type="button"> Close</button>
                                    <button class="btn btn-primary" type="submit">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-buttons-w">
                        <button class="btn btn-primary" data-target="#exampleModal1"  data-toggle="modal" id="domestic_btn" type="button">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>
