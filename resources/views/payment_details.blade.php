@extends('main')
@section('content')
<div class="dashboard-content-inner generic-table">
            <div class="col-xl-9 generic-table-inner">
                <div class="dashboard-headline">
                    <h3 class="title">Account settings</h3>
                    @if(session('error'))
                        <div class="alert alert-danger">
                            {{ session('error') }}
                        </div>
                    @endif
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                </div>
                <div id="response"></div>

                <div class="tabs-filter">
                    <div class="dashboard-box">
                        <div class="content">
                            <ul class="dashboard-box-list tab-selects">
                                <li>
                                    <p class="active"><a href="#payment" data-tab="1">Payment Details</a></p>
                                    <p class=""><a href="#online-presence" data-tab="3">Signature</a></p>
                                    <p class=""><a href="#notifications" data-tab="2">Notifications</a></p>
                                    <p><a href="#login-settings" data-tab="5">Email Settings</a></p>
                                    <p class=""><a href="#deactivation" data-tab="4">Account Deactivation</a></p>
                                </li>
                            </ul>
                            <ul class="dashboard-box-list tab-contents">
                                <li class="p-4 tab-content-wrap" id="tab-1" style="display: block;">
                                    <div class="container p-0 payment-settings-wrap">
    <div class="row">

        <div class="form-wrap p-0">
                        <div class="row col-xl-12 px-0 mx-0 justify-content-between mb-3">
    <div class="col-md-6">
        <div class="payment-option-selector form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type" id="payoneer_option" value="1"
                {{ $type == 'payoneer' ? 'checked' : '' }} onclick="window.location = '/payment?payment_type=payoneer'; return">
            <label class="form-check-label" for="payoneer_option">Payoneer</label>
        </div>
    </div>

    <div class="col-md-6">
        <div class="payment-option-selector form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type" id="wire_option" value="1"
            {{ $type == 'wire' ? 'checked' : '' }} onclick="window.location = '/payment?payment_type=wire'; return">
            <label class="form-check-label" for="wire_option">Wire Transfer</label>
        </div>
    </div>

    <div class="col-md-6">
        <div class="payment-option-selector form-check form-check-inline">
            <input class="form-check-input" type="radio" name="type" id="wise_option" value="1"
            {{ $type == 'wise' ? 'checked' : '' }} onclick="window.location = '/payment?payment_type=wise'; return">
            <label class="form-check-label" for="wise_option">Wise</label>
        </div>
    </div>
</div>

<div id="selected_payment"></div>
    <div id="bank_form" class="row px-3"
        style="">
        <form method="post" action="/payment/save" class="row px-3" autocomplete="off">
            @csrf
            <input type="hidden" name="payment_type" value="{{ $type }}">
            <input type="hidden" autocomplete="false">
            @foreach($fields as $field)
            <div class="{{ $field->style }} form-group position-engagement ">
                <label class="col-form-label">{{ $field->label }}:</label>
                @if($field->type == 'select')
                <select name="{{ $field->name }}" id="{{ $field->name }}" class="form-control"  autocomplete="false">
                    @foreach($field->options as $option)
                    <option value="{{ $option }}"
                        {{ isset($data->{$field->name}) && $data->{$field->name} == $option ? 'selected' : '' }}>{{ $option }}</option>
                    @endforeach
                </select>
                @else
                <input type="{{ $field->type }}" class="form-control" name="{{ $field->name }}"
                    value="{{ isset($data->{$field->name}) ? $data->{$field->name} : '' }}"  autocomplete="false" />
                @endif
            </div>
            @endforeach
            <div class="col-xl-12">
                <div class="switch-container">
                    <label class="switch">
                        <input type="checkbox" name="preferred" value="1" checked>
                        <span class="switch-button"></span>
                        Set this as my preferred payment option
                    </label>
                </div>
            </div>
            <div class="col-xl-12">
                <input type="submit" class="btn-action btn-text btn-green margin-0 right" value="Submit" name="bank_payment">
            </div>
        </form>
    </div>
            
        </div>
    </div>
@endsection