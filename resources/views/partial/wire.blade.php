<div id="bank_form" class="row px-3"
    style="">
    <form method="post" action="/payment/save" class="row px-3">
        @csrf
        <input type="hidden" name="payment_type" value="wire">
        @foreach($fields as $field)
        <div class="{{ $field->style }} form-group position-engagement ">
            <label class="col-form-label">{{ $field->label }}:</label>
            @if($field->type == 'select')
            <select name="{{ $field->name }}" id="{{ $field->name }}" class="form-control">
                @foreach($field->options as $option)
                <option value="{{ $option }}"
                    {{ isset($data->{$field->name}) && $data->{$field->name} == $option ? 'selected' : '' }}>{{ $option }}</option>
                @endforeach
            </select>
            @else
            <input type="{{ $field->type }}" class="form-control" name="{{ $field->name }}"
                value="{{ isset($data->{$field->name}) ? $data->{$field->name} : '' }}" />
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