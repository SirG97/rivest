<x-app-layout>

            <div class="element-wrapper compact pt-4">
                <div class="element-actions">
                    Account no: <a class="btn btn-success btn-sm" href="#"><i class="os-icon os-icon-grid-10"></i><span>{{ $account->account_number }}</span></a>
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
                                                        Balance(USD)
                                                    </div>
                                                    <div class="value">
                                                        ${{ number_format($account->balance, '2', '.', ',') }}
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-sm-4 col-xxxl-3">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">
                                                        Fixed Deposit(USD)
                                                    </div>
                                                    <div class="value">
                                                        ${{ number_format($fixedDeposit? $fixedDeposit->amount_earned : 0 , '2', '.', ',') }}
                                                    </div>

                                                </a>
                                            </div>
                                            <div class="col-sm-4 col-xxxl-3">
                                                <a class="element-box el-tablo" href="#">
                                                    <div class="label">
                                                        Loan
                                                    </div>
                                                    <div class="value">
                                                        ${{ number_format($loan ? $loan->amount : 0 , '2', '.', ',') }}
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
                <div class="col-lg-12">
                    <div class="row mb-xl-2 mb-xxl-3">
                        <div class="col-6 col-md-3">
                            <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                <div class="value">
                                    <div class="icon-w">
                                        <div class="os-icon os-icon-wallet-loaded"></div>
                                    </div>
                                </div>
                                <div class="label">
                                    Transfer Funds
                                </div>
                            </a>
                        </div>
                        <div class="col-6 col-md-3">
                            <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                <div class="value">
                                    <div class="icon-w">
                                        <div class="os-icon os-icon-file-text"></div>
                                    </div>
                                </div>
                                <div class="label">
                                    Statement
                                </div>

                            </a>
                        </div>
                        <div class="col-6 col-md-3">
                            <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                <div class="value">
                                    <div class="icon-w">
                                        <div class="os-icon os-icon-finance-29"></div>
                                    </div>
                                </div>
                                <div class="label">
                                    Request Loan
                                </div>

                            </a>
                        </div>
                        <div class="col-6 col-md-3">
                            <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                <div class="value">
                                    <div class="icon-w">
                                        <div class="os-icon os-icon-coins-4"></div>
                                    </div>
                                </div>
                                <div class="label">
                                    Fixed Deposit
                                </div>

                            </a>
                        </div>
                        <div class="col-6 col-md-3">
                            <a class="element-box el-tablo centered trend-in-corner padded bold-label" href="apps_support_index.html">
                                <div class="value">
                                    <div class="icon-w">
                                        <div class="os-icon os-icon-credit-card"></div>
                                    </div>
                                </div>
                                <div class="label">
                                    ATM Request
                                </div>

                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <!--START - Transactions Table-->

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
