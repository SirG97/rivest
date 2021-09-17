<x-app-layout>

            <div class="element-wrapper compact pt-4">
                <div class="element-actions">
                    Account no: <a class="btn btn-success btn-sm" href="#"><i class="os-icon os-icon-grid-10"></i><span>0182734594</span></a>
                </div>
                <h6 class="element-header">
                    Account summary
                </h6>
                <div class="element-box-tp">
{{--                    <div class="row">--}}
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="element-wrapper">
                                    <div class="element-content">
                                        <div class="row">
                                            <div class="col-sm-4 col-xxxl-3">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">
                                                        Current Balance(USD)
                                                    </div>
                                                    <div class="value">
                                                        $5,702,821,100
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-sm-4 col-xxxl-3">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">
                                                        Available Balance(USD)
                                                    </div>
                                                    <div class="value">
                                                        $5,702,821,100
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-sm-4 col-xxxl-3">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">
                                                        Uncleared Balance
                                                    </div>
                                                    <div class="value">
                                                        $0
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="d-none d-xxxl-block col-xxxl-3">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">
                                                        Refunds Processed
                                                    </div>
                                                    <div class="value">
                                                        $294
                                                    </div>
                                                    <div class="trending trending-up-basic">
                                                        <span>12%</span><i class="os-icon os-icon-arrow-up2"></i>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-xxl-6">
                    <!--START - CHART-->
                    <div class="element-wrapper">
                        <div class="element-box">
                            <div class="element-actions">
                                <div class="form-group">
                                    <select class="form-control form-control-sm">
                                        <option selected="true">
                                            Last 30 days
                                        </option>
                                        <option>
                                            This Week
                                        </option>
                                        <option>
                                            This Month
                                        </option>
                                        <option>
                                            Today
                                        </option>
                                    </select>
                                </div>
                            </div>
                            <h5 class="element-box-header">
                                Balance History
                            </h5>
                            <div class="el-chart-w">
                                <canvas data-chart-data="13,28,19,24,43,49,40,35,42,46" height="90" id="liteLineChartV2" width="300"></canvas>
                            </div>
                        </div>
                    </div>
                    <!--END - CHART-->
                </div>
                <div class="col-lg-5 col-xxl-6">
                    <!--START - Money Withdraw Form-->
                    <div class="element-wrapper">
                        <div class="element-box">
                            <form>
                                <h5 class="element-box-header">
                                    Withdraw Money
                                </h5>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <div class="form-group">
                                            <label class="lighter" for="">Select Amount</label>
                                            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                                                <input class="form-control" placeholder="Enter Amount..." type="text" value="0">
                                                <div class="input-group-append">
                                                    <div class="input-group-text">
                                                        USD
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="form-group">
                                            <label class="lighter" for="">Transfer to</label><select class="form-control">
                                                <option value="">
                                                    Citibank *6382
                                                </option>
                                                <option value="">
                                                    Chase *8372
                                                </option>
                                                <option value="">
                                                    Bank of America *7363
                                                </option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-buttons-w text-right compact">
                                    <a class="btn btn-primary" href="#"><span>Transfer</span><i class="os-icon os-icon-grid-18"></i></a>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--END - Money Withdraw Form-->
                </div>
            </div>
            <!--START - Transactions Table-->
            <div class="element-wrapper">
                <h6 class="element-header">
                    Recent Transactions
                </h6>
                <div class="element-box-tp">
                    <div class="table-responsive">
                        <table class="table table-padded">
                            <thead>
                            <tr>
                                <th>
                                    Status
                                </th>
                                <th>
                                    Date
                                </th>
                                <th>
                                    Description
                                </th>
                                <th class="text-center">
                                    Category
                                </th>
                                <th class="text-right">
                                    Amount
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="nowrap">
                                    <span class="status-pill smaller green"></span><span>Complete</span>
                                </td>
                                <td>
                                    <span>Today</span><span class="smaller lighter">1:52am</span>
                                </td>
                                <td class="cell-with-media">
                                    <img alt="" src="img/company1.png" style="height: 25px;"><span>Banana Shakes LLC</span>
                                </td>
                                <td class="text-center">
                                    <a class="badge badge-success" href="">Shopping</a>
                                </td>
                                <td class="text-right bolder nowrap">
                                    <span class="text-success">+ 1,250 USD</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="nowrap">
                                    <span class="status-pill smaller red"></span><span>Declined</span>
                                </td>
                                <td>
                                    <span>Jan 19th</span><span class="smaller lighter">3:22pm</span>
                                </td>
                                <td class="cell-with-media">
                                    <img alt="" src="img/company2.png" style="height: 25px;"><span>Stripe Payment Processing</span>
                                </td>
                                <td class="text-center">
                                    <a class="badge badge-danger" href="">Cafe</a>
                                </td>
                                <td class="text-right bolder nowrap">
                                    <span class="text-success">+ 952.23 USD</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="nowrap">
                                    <span class="status-pill smaller yellow"></span><span>Pending</span>
                                </td>
                                <td>
                                    <span>Yesterday</span><span class="smaller lighter">7:45am</span>
                                </td>
                                <td class="cell-with-media">
                                    <img alt="" src="img/company3.png" style="height: 25px;"><span>MailChimp Services</span>
                                </td>
                                <td class="text-center">
                                    <a class="badge badge-warning" href="">Restaurants</a>
                                </td>
                                <td class="text-right bolder nowrap">
                                    <span class="text-danger">- 320 USD</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="nowrap">
                                    <span class="status-pill smaller yellow"></span><span>Pending</span>
                                </td>
                                <td>
                                    <span>Jan 23rd</span><span class="smaller lighter">2:12pm</span>
                                </td>
                                <td class="cell-with-media">
                                    <img alt="" src="img/company1.png" style="height: 25px;"><span>Starbucks Cafe</span>
                                </td>
                                <td class="text-center">
                                    <a class="badge badge-primary" href="">Shopping</a>
                                </td>
                                <td class="text-right bolder nowrap">
                                    <span class="text-success">+ 17.99 USD</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="nowrap">
                                    <span class="status-pill smaller green"></span><span>Complete</span>
                                </td>
                                <td>
                                    <span>Jan 12th</span><span class="smaller lighter">9:51am</span>
                                </td>
                                <td class="cell-with-media">
                                    <img alt="" src="img/company4.png" style="height: 25px;"><span>Ebay Marketplace</span>
                                </td>
                                <td class="text-center">
                                    <a class="badge badge-danger" href="">Groceries</a>
                                </td>
                                <td class="text-right bolder nowrap">
                                    <span class="text-danger">- 244 USD</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="nowrap">
                                    <span class="status-pill smaller yellow"></span><span>Pending</span>
                                </td>
                                <td>
                                    <span>Jan 9th</span><span class="smaller lighter">12:45pm</span>
                                </td>
                                <td class="cell-with-media">
                                    <img alt="" src="img/company2.png" style="height: 25px;"><span>Envato Templates Inc</span>
                                </td>
                                <td class="text-center">
                                    <a class="badge badge-primary" href="">Business</a>
                                </td>
                                <td class="text-right bolder nowrap">
                                    <span class="text-success">+ 340 USD</span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--END - Transactions Table--><!--------------------
              START - Color Scheme Toggler
              -------------------->
            <div class="floated-colors-btn second-floated-btn">
                <div class="os-toggler-w">
                    <div class="os-toggler-i">
                        <div class="os-toggler-pill"></div>
                    </div>
                </div>
                <span>Dark </span><span>Colors</span>
            </div>
            <!--------------------
            END - Color Scheme Toggler
            --------------------><!--------------------
              START - Demo Customizer
              -------------------->
            <div class="floated-customizer-btn third-floated-btn">
                <div class="icon-w">
                    <i class="os-icon os-icon-ui-46"></i>
                </div>
                <span>Customizer</span>
            </div>
            <div class="floated-customizer-panel">
                <div class="fcp-content">
                    <div class="close-customizer-btn">
                        <i class="os-icon os-icon-x"></i>
                    </div>
                    <div class="fcp-group">
                        <div class="fcp-group-header">
                            Menu Settings
                        </div>
                        <div class="fcp-group-contents">
                            <div class="fcp-field">
                                <label for="">Menu Position</label><select class="menu-position-selector">
                                    <option value="left">
                                        Left
                                    </option>
                                    <option value="right">
                                        Right
                                    </option>
                                    <option value="top">
                                        Top
                                    </option>
                                </select>
                            </div>
                            <div class="fcp-field">
                                <label for="">Menu Style</label><select class="menu-layout-selector">
                                    <option value="compact">
                                        Compact
                                    </option>
                                    <option value="full">
                                        Full
                                    </option>
                                    <option value="mini">
                                        Mini
                                    </option>
                                </select>
                            </div>
                            <div class="fcp-field with-image-selector-w">
                                <label for="">With Image</label><select class="with-image-selector">
                                    <option value="yes">
                                        Yes
                                    </option>
                                    <option value="no">
                                        No
                                    </option>
                                </select>
                            </div>
                            <div class="fcp-field">
                                <label for="">Menu Color</label>
                                <div class="fcp-colors menu-color-selector">
                                    <div class="color-selector menu-color-selector color-bright selected"></div>
                                    <div class="color-selector menu-color-selector color-dark"></div>
                                    <div class="color-selector menu-color-selector color-light"></div>
                                    <div class="color-selector menu-color-selector color-transparent"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fcp-group">
                        <div class="fcp-group-header">
                            Sub Menu
                        </div>
                        <div class="fcp-group-contents">
                            <div class="fcp-field">
                                <label for="">Sub Menu Style</label><select class="sub-menu-style-selector">
                                    <option value="flyout">
                                        Flyout
                                    </option>
                                    <option value="inside">
                                        Inside/Click
                                    </option>
                                    <option value="over">
                                        Over
                                    </option>
                                </select>
                            </div>
                            <div class="fcp-field">
                                <label for="">Sub Menu Color</label>
                                <div class="fcp-colors">
                                    <div class="color-selector sub-menu-color-selector color-bright selected"></div>
                                    <div class="color-selector sub-menu-color-selector color-dark"></div>
                                    <div class="color-selector sub-menu-color-selector color-light"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="fcp-group">
                        <div class="fcp-group-header">
                            Other Settings
                        </div>
                        <div class="fcp-group-contents">
                            <div class="fcp-field">
                                <label for="">Full Screen?</label><select class="full-screen-selector">
                                    <option value="yes">
                                        Yes
                                    </option>
                                    <option value="no">
                                        No
                                    </option>
                                </select>
                            </div>
                            <div class="fcp-field">
                                <label for="">Show Top Bar</label><select class="top-bar-visibility-selector">
                                    <option value="yes">
                                        Yes
                                    </option>
                                    <option value="no">
                                        No
                                    </option>
                                </select>
                            </div>
                            <div class="fcp-field">
                                <label for="">Above Menu?</label><select class="top-bar-above-menu-selector">
                                    <option value="yes">
                                        Yes
                                    </option>
                                    <option value="no">
                                        No
                                    </option>
                                </select>
                            </div>
                            <div class="fcp-field">
                                <label for="">Top Bar Color</label>
                                <div class="fcp-colors">
                                    <div class="color-selector top-bar-color-selector color-bright selected"></div>
                                    <div class="color-selector top-bar-color-selector color-dark"></div>
                                    <div class="color-selector top-bar-color-selector color-light"></div>
                                    <div class="color-selector top-bar-color-selector color-transparent"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--------------------
            END - Demo Customizer
            --------------------><!--------------------
              START - Chat Popup Box
              -------------------->
            <div class="floated-chat-btn">
                <i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span>
            </div>
            <div class="floated-chat-w">
                <div class="floated-chat-i">
                    <div class="chat-close">
                        <i class="os-icon os-icon-close"></i>
                    </div>
                    <div class="chat-head">
                        <div class="user-w with-status status-green">
                            <div class="user-avatar-w">
                                <div class="user-avatar">
                                    <img alt="" src="img/avatar1.jpg">
                                </div>
                            </div>
                            <div class="user-name">
                                <h6 class="user-title">
                                    John Mayers
                                </h6>
                                <div class="user-role">
                                    Account Manager
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="chat-messages">
                        <div class="message">
                            <div class="message-content">
                                Hi, how can I help you?
                            </div>
                        </div>
                        <div class="date-break">
                            Mon 10:20am
                        </div>
                        <div class="message">
                            <div class="message-content">
                                Hi, my name is Mike, I will be happy to assist you
                            </div>
                        </div>
                        <div class="message self">
                            <div class="message-content">
                                Hi, I tried ordering this product and it keeps showing me error code.
                            </div>
                        </div>
                    </div>
                    <div class="chat-controls">
                        <input class="message-input" placeholder="Type your message here..." type="text">
                        <div class="chat-extra">
                            <a href="#"><span class="extra-tooltip">Attach Document</span><i class="os-icon os-icon-documents-07"></i></a><a href="#"><span class="extra-tooltip">Insert Photo</span><i class="os-icon os-icon-others-29"></i></a><a href="#"><span class="extra-tooltip">Upload Video</span><i class="os-icon os-icon-ui-51"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--------------------
            END - Chat Popup Box
            -------------------->

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
