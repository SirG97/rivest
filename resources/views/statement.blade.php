<x-app-layout>
    <div class="element-wrapper">
        <h6 class="element-header">
            Tables Examples
        </h6>
        <div class="element-box">
            <h5 class="form-header">
                Table in white box
            </h5>
            <div class="form-desc">You can put a table tag inside an <code>.element-box</code> class wrapper and add <code>.table</code> class to it to get something like this:
            </div>
            <!--------------------
            START - Controls Above Table
            -------------------->
            <div class="controls-above-table">
                <div class="row">
                    <div class="col-sm-6">
                        <a class="btn btn-sm btn-secondary" href="#">Download CSV</a><a class="btn btn-sm btn-secondary" href="#">Archive</a><a class="btn btn-sm btn-danger" href="#">Delete</a>
                    </div>
                    <div class="col-sm-6">
                        <form class="form-inline justify-content-sm-end">
                            <input class="form-control form-control-sm rounded bright" placeholder="Search" type="text"><select class="form-control form-control-sm rounded bright">
                                <option selected="selected" value="">
                                    Select Status
                                </option>
                                <option value="Pending">
                                    Pending
                                </option>
                                <option value="Active">
                                    Active
                                </option>
                                <option value="Cancelled">
                                    Cancelled
                                </option>
                            </select>
                        </form>
                    </div>
                </div>
            </div>
            <!--------------------
            END - Controls Above Table
            -------------------->
            <div class="table-responsive">
                <!--------------------
                START - Basic Table
                -------------------->
                <table class="table table-lightborder">
                    <thead>
                    <tr>
                        <th>
                            Customer Name
                        </th>
                        <th>
                            Orders
                        </th>
                        <th>
                            Location
                        </th>
                        <th class="text-center">
                            Status
                        </th>
                        <th class="text-right">
                            Order Total
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            John Mayers
                        </td>
                        <td>
                            12
                        </td>
                        <td>
                            <img alt="" src="img/flags-icons/us.png" width="25px">
                        </td>
                        <td class="text-center">
                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                        </td>
                        <td class="text-right">
                            $354
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Kelly Brans
                        </td>
                        <td>
                            45
                        </td>
                        <td>
                            <img alt="" src="img/flags-icons/ca.png" width="25px">
                        </td>
                        <td class="text-center">
                            <div class="status-pill red" data-title="Cancelled" data-toggle="tooltip"></div>
                        </td>
                        <td class="text-right">
                            $94
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tim Howard
                        </td>
                        <td>
                            112
                        </td>
                        <td>
                            <img alt="" src="img/flags-icons/uk.png" width="25px">
                        </td>
                        <td class="text-center">
                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                        </td>
                        <td class="text-right">
                            $156
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Joe Trulli
                        </td>
                        <td>
                            1,256
                        </td>
                        <td>
                            <img alt="" src="img/flags-icons/es.png" width="25px">
                        </td>
                        <td class="text-center">
                            <div class="status-pill yellow" data-title="Pending" data-toggle="tooltip"></div>
                        </td>
                        <td class="text-right">
                            $1,120
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Fred Kolton
                        </td>
                        <td>
                            74
                        </td>
                        <td>
                            <img alt="" src="img/flags-icons/fr.png" width="25px">
                        </td>
                        <td class="text-center">
                            <div class="status-pill green" data-title="Complete" data-toggle="tooltip"></div>
                        </td>
                        <td class="text-right">
                            $74
                        </td>
                    </tr>
                    </tbody>
                </table>
                <!--------------------
                END - Basic Table
                -------------------->
            </div>
        </div>
    </div>
</x-app-layout>
