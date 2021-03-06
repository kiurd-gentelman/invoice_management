<div class="card-form p-5">
    <div class="row no-gutters ">



        <div class="col-md-4">
            <div class="form-group required">
                <label for="invoice_date">{{ __('messages.invoice_date') }}</label>
{{--                @dd(date($invoice->invoice_date))--}}
                <input name="invoice_date" type="text" class="form-control input datepicker" value="{{ date_format (date_create( $invoice->invoice_date), 'Y-m-d') ?? date('Y-m-d') }}"  readonly="readonly" required>
            </div>
            <div class="form-group required">
                <label for="invoice_number">{{ __('messages.invoice_number') }}</label>
                <div class="input-group input-group-merge">
                    <input name="invoice_prefix" type="hidden" value="{{ $invoice->invoice_prefix }}">
                    <input name="invoice_number" type="text" maxlength="6" class="form-control form-control-prepended" value="{{ $invoice->invoice_num }}" autocomplete="off" required>
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            {{ $invoice->invoice_prefix }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-4 offset-md-4">
            <div class="form-group required">
                <label for="due_date">{{ __('messages.due_date') }}</label>
                <input name="due_date" type="text" class="form-control input datepicker" value="{{ date_format (date_create( $invoice->due_date), 'Y-m-d')  ?? date('Y-m-d') }}"  readonly="readonly" required>
            </div>
            <div class="form-group">
                <label for="reference_number">{{ __('messages.reference_number') }}</label>
                <div class="input-group input-group-merge">
                    <input name="reference_number" type="text" maxlength="6" class="form-control form-control-prepended" value="{{ $invoice->reference_number }}" autocomplete="off">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            #
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <h4>Invoice From</h4>
            <hr>
        </div>
        <div class="col-md-5 offset-md-2">
            <h4>Invoice For</h4>
            <hr>
            <div class="">
                <div class="form-group required select-container">
                    <label for="customer">{{ __('messages.customer') }}</label>
                    <div class="input-group">
                        <select id="customer" name="customer_id" data-toggle="" class="form-control select2 " >
                            <option disabled selected>{{ __('messages.select_customer') }}</option>
                            @if($invoice->customer_id)
                                <option value="{{ $invoice->customer_id }}"
                                        selected=""
                                        data-currency="{{ $invoice->customer->currency }}"
                                        data-billing_address="{{$invoice->customer->displayLongAddress('billing')}}"
                                        data-shipping_address="{{$invoice->customer->displayLongAddress('shipping')}}"
                                >
                                    {{ $invoice->customer->display_name }}
                                </option>
                            @endif
                        </select>
                        <div class="input-group-append">
                            <a class="btn btn-primary" href="{{ route('customers.create', ['company_uid' => $currentCompany->uid]) }}"><i class="ft-plus"></i></a>
                        </div>
                    </div>

                </div>
                <div id="address_component" class="form-row d-none">
                    <div class="col-6">
                        <strong>{{ __('messages.bill_to') }}:</strong>
                        <p id="billing_address"></p>
                    </div>
                    <div class="col-6">
                        <strong>{{ __('messages.ship_to') }}:</strong>
                        <p id="shipping_address"></p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 mt-5">
            <div class="table-responsive" data-toggle="lists">
                <table class=" table-xl mb-0 thead-border-top-0 table-striped w-100">
                    <thead>
                        <tr>
                            @if($tax_per_item and $discount_per_item)
                                <th class="w-30">{{ __('messages.product') }}</th>
                                <th class="w-20">{{ __('messages.taxes') }}</th>
                                <th class="w-10">{{ __('messages.quantity') }}</th>
                                <th class="w-15">{{ __('messages.price') }}</th>
                                <th class="w-15">{{ __('messages.discount') }}</th>
                                <th class="text-right w-10">{{ __('messages.amount') }}</th>
                            @elseif($tax_per_item and !$discount_per_item)
                                <th class="w-40">{{ __('messages.product') }}</th>
                                <th class="w-25">{{ __('messages.taxes') }}</th>
                                <th class="w-10">{{ __('messages.quantity') }}</th>
                                <th class="w-15">{{ __('messages.price') }}</th>
                                <th class="text-right w-10">{{ __('messages.amount') }}</th>
                            @elseif(!$tax_per_item and $discount_per_item)
                                <th class="w-40">{{ __('messages.product') }}</th>
                                <th class="w-10">{{ __('messages.quantity') }}</th>
                                <th class="w-20">{{ __('messages.price') }}</th>
                                <th class="w-20">{{ __('messages.discount') }}</th>
                                <th class="text-right w-10">{{ __('messages.amount') }}</th>
                            @elseif(!$tax_per_item and !$discount_per_item)
                                <th class="w-60">{{ __('messages.product') }}</th>
                                <th class="w-10">{{ __('messages.quantity') }}</th>
                                <th class="w-20">{{ __('messages.price') }}</th>
                                <th class="text-right w-10">{{ __('messages.amount') }}</th>
                            @endif
                            <th></th>
                        </tr>
                    </thead>
                    <tbody class="list" id="items">
                        <tr id="product_row_template" class="d-none">
                            <td class="select-container" style="width:30%">
                                <div class="form-group"  >
                                    <div class="input-group">
                                        <select name="product[]" class="form-control priceListener" required >
                                            <option disabled selected>{{ __('messages.select_product') }}</option>
                                        </select>
                                        <div class="input-group-append">
                                            <a href="{{ route('products.create', ['company_uid' => $currentCompany->uid]) }}" target="_blank" class="btn  btn-success"><i class="ft-plus"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            @if($tax_per_item)
                                <td class="select-container">
                                    <select name="taxes[]" multiple class="form-control priceListener select-with-footer">
                                        @foreach(get_tax_types_select2_array($currentCompany->id) as $option)
                                            <option value="{{ $option['id'] }}" data-percent="{{ $option['percent'] }}">{{ $option['text'] }}</option>
                                        @endforeach
                                    </select>
                                    <div class="d-none select-footer">
                                        <a href="{{ route('settings.tax_types.create', ['company_uid' => $currentCompany->uid]) }}" target="_blank" class="font-weight-300">+ {{ __('messages.add_new_tax') }}</a>
                                    </div>
                                </td>
                            @endif
                            <td>
                                <div class="form-group">
                                <input name="quantity[]" type="number" class="form-control priceListener invoice-input" value="1" required>
                                </div>
                            </td>
                            <td>
                                <div class="form-group">
                                <input name="price[]" type="text" class="form-control-plaintext price_input priceListener invoice-input" autocomplete="off" value="0" required>
                                </div>
                            </td>
                            @if($discount_per_item)
                                <td>
                                    <div class="input-group input-group-merge">
                                        <input name="discount[]" type="number" class="form-control form-control-prepended priceListener" value="0">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                                %
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            @endif
                            <td class="text-right">
                                <div class="form-group">
                                    <input type="text" name="total[]" class="form-control price_input price-text amount_price invoice-input" value="0" readonly >
                                </div>
                                <div class="tax_list"></div>
                            </td>
                            <td>
                                <div class="form-group">
                                <a onclick="removeRow(this)" class="btn btn-danger btn-sm text-white">
                                    <i class="ft-trash"></i>
                                </a>
                            </div>
                            </td>
                        </tr>
                        @if($invoice->items->count() > 0)
                            @foreach($invoice->items as $item)
                                <tr>
                                    <td class="select-container" style="width:30%">
                                        <select name="product[]" class="form-control priceListener select-with-footer" required >
                                            <option value="{{ $item->product_id }}" selected="">{{ $item->product->name }}</option>
                                        </select>
                                        <div class="d-none select-footer">
                                            <a href="{{ route('products.create', ['company_uid' => $currentCompany->uid]) }}" target="_blank" class="font-weight-300">+ {{ __('messages.add_new_product') }}</a>
                                        </div>
                                    </td>
                                    @if($tax_per_item)
                                        <td class="select-container">
                                            <select name="taxes[]" multiple class="form-control priceListener select-with-footer">
                                                @foreach(get_tax_types_select2_array($currentCompany->id) as $option)
                                                    <option value="{{ $option['id'] }}" data-percent="{{ $option['percent'] }}" {{ $item->hasTax($option['id']) ? 'selected=""' : '' }}>{{ $option['text'] }}</option>
                                                @endforeach
                                            </select>
                                            <div class="d-none select-footer">
                                                <a href="{{ route('settings.tax_types.create', ['company_uid' => $currentCompany->uid]) }}" target="_blank" class="font-weight-300">+ {{ __('messages.add_new_tax') }}</a>
                                            </div>
                                        </td>
                                    @endif
                                    <td>
                                        <input name="quantity[]" type="number" class="form-control priceListener" value="{{ $item->quantity }}" required>
                                    </td>
                                    <td>
                                        <input name="price[]" type="text" class="form-control price_input priceListener" autocomplete="off" value="{{ $item->price }}" required>
                                    </td>
                                    @if($discount_per_item)
                                        <td>
                                            <div class="input-group input-group-merge">
                                                <input name="discount[]" type="number" class="form-control form-control-prepended priceListener" value="{{ $item->discount_val }}">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        %
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    @endif
                                    <td class="text-right">
                                        <p class="mb-1">
                                            <input type="text" name="total[]" class="form-control price_input price-text amount_price" value="{{ $item->total }}" readonly>
                                        </p>
                                        <div class="tax_list"></div>
                                    </td>
                                    <td>
                                        <a onclick="removeRow(this)" class="btn btn-sm btn-danger text-white">
                                            <i class="ft-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
            <div class="row card-body pagination-light justify-content-center text-center">
                <button id="add_product_row" type="button" class="btn btn-dark btn-sm text-uppercase">
                    <i class="ft-plus"></i> {{ __('messages.add_product') }}
                </button>
            </div>
        </div>

        <div class="col-md-5 mt-5">
            <div class="card card-body">
                <div class="form-group">
                    <label for="notes">{{ __('messages.notes') }}</label>
                    <textarea name="notes" class="form-control" rows="4">{{ $invoice->notes }}</textarea>
                </div>

                <div class="form-group">
                    <label for="private_notes">{{ __('messages.private_notes') }}</label>
                    <textarea name="private_notes" class="form-control" rows="4">{{ $invoice->private_notes }}</textarea>
                </div>
            </div>
        </div>

        <div class="col-md-4 offset-md-3 mt-5">
            <div class="card card-body">

                <div class="d-flex align-items-center mb-3">
                    <div class="h6 mb-0 w-50">
                        <strong class="text-muted">{{ __('messages.sub_total') }}</strong>
                    </div>
                    <div class="ml-auto h6 mb-0">
                        <input id="sub_total" name="sub_total" type="text" class=" form-control price_input price-text w-100 fs-inherit" value="{{ $invoice->sub_total ?? 0 }}" readonly>
                    </div>
                </div>

                @if($tax_per_item == false)
                    <div class="row mb-1">
                        <div class="col-12 h6 mb-1">
                            <strong class="text-muted">{{ __('messages.taxes') }}</strong>
                        </div>
                        <div class="col-12 h6 mb-0">
                            <div class="form-group select-container">
                                <select id="total_taxes" name="total_taxes[]"  multiple class="form-control priceListener select-with-footer select2" >
                                    @foreach(get_tax_types_select2_array($currentCompany->id) as $option)
                                        <option value="{{ $option['id'] }}" data-percent="{{ $option['percent'] }}" {{ $invoice->hasTax($option['id']) ? 'selected=""' : '' }}>{{ $option['text'] }}</option>
                                    @endforeach
                                </select>
                                <div class="d-none select-footer">
                                    <a href="{{ route('settings.tax_types.create', ['company_uid' => $currentCompany->uid]) }}" target="_blank" class="font-weight-300">+ {{ __('messages.add_new_tax') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <div class="total_tax_list"></div>

                @if($discount_per_item == false)
                    <div class="row mt-2 mb-1">
                        <div class="col-12 h6 mb-1">
                            <strong class="text-muted">{{ __('messages.discount') }}</strong>
                        </div>
                        <div class="col-12 h6 mb-0">
                            <div class="form-group">
                                <div class="input-group input-group-merge">
                                    <input id="total_discount" name="total_discount" type="number" class="form-control form-control-prepended priceListener" value="{{ $invoice->discount_val ?? 0 }}">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            %
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif

                <hr>
                <div class="d-flex align-items-center mb-3">
                    <div class="h5 mb-0">
                        <strong class="text-muted">{{ __('messages.total') }}</strong>
                    </div>
                    <div class="ml-auto h5 mb-0">
                        <input id="grand_total" name="grand_total" type="text" class=" form-control price_input price-text w-100 fs-inherit" value="{{ $invoice->total ?? 0 }}" readonly>
                    </div>
                </div>
            </div>
        </div>

        @if($invoice->getCustomFields()->count() > 0)
            <div class="col-12">
                @foreach ($invoice->getCustomFields() as $custom_field)
                    @include('layouts._custom_field', ['model' => $invoice, 'custom_field' => $custom_field])
                @endforeach
            </div>
        @endif

        <div class="col-12 text-center float-right mt-3">
            <button type="button" class="btn btn-primary save_form_button text-uppercase btn-sm btn-block">{{ __('messages.save_invoice') }}</button>
        </div>
    </div>
</div>
