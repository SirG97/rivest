<x-app-layout>
    <div class="element-wrapper">
        @include('includes.feedback')
        <h6 class="element-header">
           Statement
        </h6>
        <div class="element-box">
            <h5 class="form-header">
                Account Statement
            </h5>
            <div class="form-desc">
                View list of all credit/ debit / fund transfer transaction summary by this user.
            </div>

            <div class="table-responsive">
                <!--------------------
                START - Basic Table
                -------------------->
                <table class="table table-lightborder">
                    <thead>
                    <tr>
                        <th>
                            Date
                        </th>
                        <th>
                            Ref.No
                        </th>
                        <th>
                            Transaction Details
                        </th>
                        <th>
                            Debit
                        </th>
                        <th>
                            Credit
                        </th>
                        <th class="text-center">
                            Status
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    @foreach($transactions as $transaction)
                        <tr>
                            <td>{{$transaction['updated_at'] }}</td>
                            <td>
                                {{$transaction['txn_ref'] }}
                            </td>
                            <td>
                                {{ $transaction['description'] }}
                            </td>
                            <td>
                                @if($transaction['txn_type'] == 'debit')
                                    ${{ $transaction['amount'] }}
                                @endif
                            </td>
                            <td class="text-right">
                                @if($transaction['txn_type'] == 'credit')
                                    ${{ $transaction['amount'] }}
                                @endif
                            </td>
                            <td class="text-center">
                                @if($transaction['status'] == 'success')
                                    <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                                @elseif($transaction['status'] == 'pending')
                                    <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip"></div>
                                @elseif($transaction['status'] == 'failed')
                                    <div class="status-pill green" data-title="Failed" data-toggle="tooltip"></div>
                                @endif
                            </td>

                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <!--------------------
                END - Basic Table
                -------------------->
            </div>
        </div>
    </div>
</x-app-layout>
