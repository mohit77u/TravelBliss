<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $invoice->name }}</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

        
    </head>

    <body style="font-family: 'Montserrat', sans-serif;font-weight: 400;line-height: 1.1;color: #212529;text-align: left;background-color: #fff;font-size: 10px;margin: 36pt;">
        {{-- Header --}}
        <table class="table" style="border-collapse: collapse;line-height: 1.1;width: 100%;margin-bottom: 20px;color: #212529;">
            <tbody>
                <tr style="line-height: 1.1;">
                    <td class="border-0 pl-0" width="70%" style="line-height: 1.1;padding: 0.75rem;vertical-align: top;padding-left: 0 !important;border: none !important;">
                        @if($invoice->logo)
                            <img src="{{ $invoice->getLogo() }}" alt="logo" style="max-width: 60px;vertical-align: middle;border-style: none;">
                        @endif
                    </td>
                    <td class="border-0 pl-0" style="line-height: 1.1;padding: 0.75rem;vertical-align: top;padding-left: 0 !important;border: none !important;">
                        <h4 class="text-uppercase" style="color: #5b5b5b; margin-top: 0;margin-bottom: 0.5rem;font-weight: 500;line-height: 1.1;font-size: 1.5rem;text-transform: uppercase !important;">
                            <strong style="font-weight: bolder;">{{ $invoice->name }}</strong>
                        </h4>
                    </td>
                </tr>
            </tbody>
        </table>

        <table class="table" style="border-collapse: collapse;line-height: 1.1;width: 100%;margin-bottom: 20px;color: #212529;">
            <tbody>
                <tr style="line-height: 1.1;">
                    <td class="border-0 pl-0" width="70%" style="line-height: 1.1;padding: 0.75rem;vertical-align: top;padding-left: 0 !important;border: none !important;">
                        @if($invoice->buyer->name)
                            <p style="color: #5b5b5b; margin: 5px 0;font-size: 14px;margin-top: 0;line-height: 1.1;" class="seller-name">
                                Hello, {{ $invoice->buyer->name }}.
                                <br>
                                Thank you for shopping from our store and for your order.
                            </p>
                        @endif
                    </td>
                    <td class="border-0 pl-0" style="line-height: 1.1;padding: 0.75rem;vertical-align: top;padding-left: 0 !important;border: none !important;">
                        <!-- @if($invoice->status)
                            <h4 class="text-uppercase cool-gray">
                                <strong>{{ $invoice->status }}</strong>
                            </h4>
                        @endif -->
                        <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;line-height: 1.1;">Order Id: <strong style="font-weight: bolder;">{{ $invoice->buyer->order_id }}</strong></p>
                        <p style="color: #5b5b5b;margin: 0;font-size: 14px;margin-top: 0;line-height: 1.1;">{{ __('invoices::invoice.date') }}: <strong style="font-weight: bolder;">{{ $invoice->getDate() }}</strong></p>
                    </td>
                </tr>
            </tbody>
        </table>

        {{-- Main Table Data --}}
        <table class="table table-items" style="border-collapse: collapse;line-height: 1.1;width: 100%;margin-bottom: 20px;color: #212529;">
            <thead>
                <tr style="line-height: 1.1;">
                    <th scope="col" style="font-size: 14px;font-weight: 400;text-align: inherit;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-bottom: 2px solid #dee2e6;padding-left: 0 !important;border: none !important;" class="border-0 pl-0">{{ __('invoices::invoice.description') }}</th>
                    @if($invoice->hasItemUnits)
                        <th scope="col" style="font-size: 14px;font-weight: 400;text-align: center !important;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-bottom: 2px solid #dee2e6;border: none !important;" class="text-center border-0">{{ __('invoices::invoice.units') }}</th>
                    @endif
                    <th scope="col" style="font-size: 14px;font-weight: 400;text-align: center !important;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-bottom: 2px solid #dee2e6;border: none !important;" class="text-center border-0">{{ __('invoices::invoice.quantity') }}</th>
                    <th scope="col" style="font-size: 14px;font-weight: 400;text-align: right !important;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-bottom: 2px solid #dee2e6;border: none !important;" class="text-right border-0">{{ __('invoices::invoice.price') }}</th>
                    @if($invoice->hasItemDiscount)
                        <th scope="col" style="font-size: 14px;font-weight: 400;text-align: right !important;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-bottom: 2px solid #dee2e6;border: none !important;" class="text-right border-0">{{ __('invoices::invoice.discount') }}</th>
                    @endif
                    @if($invoice->hasItemTax)
                        <th scope="col" style="font-size: 14px;font-weight: 400;text-align: right !important;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-bottom: 2px solid #dee2e6;border: none !important;" class="text-right border-0">{{ __('invoices::invoice.tax') }}</th>
                    @endif
                    <th scope="col" style="font-size: 14px;font-weight: 400;text-align: right !important;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-bottom: 2px solid #dee2e6;padding-right: 0 !important;border: none !important;" class="text-right border-0 pr-0">{{ __('invoices::invoice.sub_total') }}</th>
                </tr>
            </thead>
            <tbody>
                {{-- Items --}}
                @foreach($invoice->items as $item)
                <tr style="line-height: 1.1;">
                    <td class="pl-0" style="font-size: 13px;color: #5b5b5b;border-top: 1px solid #dee2e6;line-height: 1.1;padding: 0.75rem;vertical-align: top;padding-left: 0 !important;">
                        {{ $item->title }}

                        @if($item->description)
                            <p style="margin: 5px 0;font-size: 15px;color: #5b5b5b;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;" class="cool-gray">{{ $item->description }}</p>
                        @endif
                    </td>
                    @if($invoice->hasItemUnits)
                        <td style="font-size: 13px;color: #5b5b5b;border-top: 1px solid #dee2e6;line-height: 1.1;padding: 0.75rem;vertical-align: top;text-align: center !important;" class="text-center">{{ $item->units }}</td>
                    @endif
                    <td style="font-size: 13px;color: #5b5b5b;border-top: 1px solid #dee2e6;line-height: 1.1;padding: 0.75rem;vertical-align: top;text-align: center !important;" class="text-center">{{ $item->quantity }}</td>
                    <td style="font-size: 13px;color: #5b5b5b;border-top: 1px solid #dee2e6;line-height: 1.1;padding: 0.75rem;vertical-align: top;text-align: right !important;" class="text-right">
                        {{ $invoice->formatCurrency($item->price_per_unit) }}
                    </td>
                    @if($invoice->hasItemDiscount)
                        <td style="font-size: 13px;color: #5b5b5b;border-top: 1px solid #dee2e6;line-height: 1.1;padding: 0.75rem;vertical-align: top;text-align: right !important;" class="text-right">
                            {{ $invoice->formatCurrency($item->discount) }}
                        </td>
                    @endif
                    @if($invoice->hasItemTax)
                        <td style="font-size: 13px;color: #5b5b5b;border-top: 1px solid #dee2e6;line-height: 1.1;padding: 0.75rem;vertical-align: top;text-align: right !important;" class="text-right">
                            {{ $invoice->formatCurrency($item->tax) }}
                        </td>
                    @endif

                    <td style="font-size: 13px;color: #5b5b5b;border-top: 1px solid #dee2e6;line-height: 1.1;padding: 0.75rem;vertical-align: top;padding-right: 0 !important;text-align: right !important;" class="text-right pr-0">
                        {{ $invoice->formatCurrency($item->sub_total_price) }}
                    </td>
                </tr>
                @endforeach
                {{-- Summary --}}
                @if($invoice->hasItemOrInvoiceDiscount())
                    <tr style="line-height: 1.1;">
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;border: none !important;" colspan="{{ $invoice->table_columns - 2 }}" class="border-0"></td>
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;padding-left: 0 !important;text-align: right !important;" class="text-right pl-0">{{ __('invoices::invoice.total_discount') }}</td>
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;padding-right: 0 !important;text-align: right !important;" class="text-right pr-0">
                            {{ $invoice->formatCurrency($invoice->total_discount) }}
                        </td>
                    </tr>
                @endif
                @if($invoice->taxable_amount)
                    <tr style="line-height: 1.1;">
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;border: none !important;" colspan="{{ $invoice->table_columns - 2 }}" class="border-0"></td>
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;padding-left: 0 !important;text-align: right !important;" class="text-right pl-0">{{ __('invoices::invoice.taxable_amount') }}</td>
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;padding-right: 0 !important;text-align: right !important;" class="text-right pr-0">
                            {{ $invoice->formatCurrency($invoice->taxable_amount) }}
                        </td>
                    </tr>
                @endif
                @if($invoice->tax_rate)
                    <tr style="line-height: 1.1;">
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;border: none !important;" colspan="{{ $invoice->table_columns - 2 }}" class="border-0"></td>
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;padding-left: 0 !important;text-align: right !important;" class="text-right pl-0">{{ __('invoices::invoice.tax_rate') }}</td>
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;padding-right: 0 !important;text-align: right !important;" class="text-right pr-0">
                            {{ $invoice->tax_rate }}%
                        </td>
                    </tr>
                @endif
                @if($invoice->hasItemOrInvoiceTax())
                    <tr style="line-height: 1.1;">
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;border: none !important;" colspan="{{ $invoice->table_columns - 2 }}" class="border-0"></td>
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;padding-left: 0 !important;text-align: right !important;" class="text-right pl-0">{{ __('invoices::invoice.total_taxes') }}</td>
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;padding-right: 0 !important;text-align: right !important;" class="text-right pr-0">
                            {{ $invoice->formatCurrency($invoice->total_taxes) }}
                        </td>
                    </tr>
                @endif
                @if($invoice->shipping_amount)
                    <tr style="line-height: 1.1;">
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;border: none !important;" colspan="{{ $invoice->table_columns - 2 }}" class="border-0"></td>
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;padding-left: 0 !important;text-align: right !important;" class="text-right pl-0">{{ __('invoices::invoice.shipping') }}</td>
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;padding-right: 0 !important;text-align: right !important;" class="text-right pr-0">
                            {{ $invoice->formatCurrency($invoice->shipping_amount) }}
                        </td>
                    </tr>
                @endif
                    <tr style="line-height: 1.1;">
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;border: none !important;" colspan="{{ $invoice->table_columns - 2 }}" class="border-0"></td>
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;padding-left: 0 !important;text-align: right !important;" class="text-right pl-0">{{ __('invoices::invoice.total_amount') }}</td>
                        <td style="font-size: 13px;color: #5b5b5b;line-height: 1.1;font-weight: 700;padding: 0.75rem;vertical-align: top;border-top: 1px solid #dee2e6;padding-right: 0 !important;text-align: right !important;" class="text-right pr-0 total-amount">
                            {{ $invoice->formatCurrency($invoice->total_amount) }}
                        </td>
                    </tr>
            </tbody>
        </table>

        {{-- Billing -Shipping --}}
        <table class="table mt-5" style="border-collapse: collapse;line-height: 1.1;width: 100%;color: #212529;margin-top: 25px !important;">
            <tbody>
                <tr style="line-height: 1.1;">
                    <td class="px-0" style="line-height: 1.1;padding: 0.75rem;vertical-align: top;padding-right: 0 !important;padding-left: 0 !important;">
                        <h4 class="border-0 pl-0 party-header" width="60%" style="font-size: 19px;text-align: inherit;line-height: 1.1;font-weight: 400;padding: 0.75rem;vertical-align: top;border-bottom: 2px solid #dee2e6;padding-left: 0 !important;border: none !important; margin-bottom: 10px;">
                            Billing Information
                        </h4>
                        @if($invoice->buyer->name)
                            <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;" class="buyer-name">
                                <strong style="font-weight: bolder;">{{ $invoice->buyer->name }}</strong>
                            </p>
                        @endif

                        @if($invoice->buyer->address)
                            <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;" class="buyer-address">
                                {{ $invoice->buyer->address }}
                            </p>
                        @endif

                        @if($invoice->buyer->phone)
                            <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;" class="buyer-phone">
                                {{ __('invoices::invoice.phone') }}: {{ $invoice->buyer->phone }}
                            </p>
                        @endif

                        @if($invoice->buyer->order_id)
                            <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;" class="buyer-phone">
                                Order Id: {{ $invoice->buyer->order_id }}
                            </p>
                        @endif

                    </td>
                    <td class="border-0" style="line-height: 1.1;padding: 0.75rem;vertical-align: top;border: none !important;"></td>
                    <td class="px-0" style="line-height: 1.1;padding: 0.75rem;vertical-align: top;padding-right: 0 !important;padding-left: 0 !important;">
                        <h4 class="border-0 pl-0 party-header" width="60%" style="font-size: 19px;text-align: inherit;line-height: 1.1;font-weight: 400;padding: 0.75rem;vertical-align: top;border-bottom: 2px solid #dee2e6;padding-left: 0 !important;border: none !important; margin-bottom: 10px;">
                            Shipping Information
                        </h4>
                        @if($invoice->buyer->name)
                            <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;" class="buyer-name">
                                <strong style="font-weight: bolder;">{{ $invoice->buyer->name }}</strong>
                            </p>
                        @endif

                        @if($invoice->buyer->address)
                            <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;" class="buyer-address">
                                {{ $invoice->buyer->address }}
                            </p>
                        @endif

                        @if($invoice->buyer->phone)
                            <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;" class="buyer-phone">
                                {{ __('invoices::invoice.phone') }}: {{ $invoice->buyer->phone }}
                            </p>
                        @endif

                        @if($invoice->buyer->order_id)
                            <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;" class="buyer-phone">
                                Order Id: {{ $invoice->buyer->order_id }}
                            </p>
                        @endif

                    </td>
                </tr>
            </tbody>
        </table>

        {{-- Payment --}}
        <table class="table" style="border-collapse: collapse;line-height: 1.1;width: 100%;margin-bottom: 20px;color: #212529;">
            
            <tbody>
                <tr style="line-height: 1.1;">
                    <td class="px-0" style="line-height: 1.1;padding: 0.75rem;vertical-align: top;padding-right: 0 !important;padding-left: 0 !important;">
                        <h4 class="border-0 pl-0 party-header" width="60%" style="font-size: 19px;text-align: inherit;line-height: 1.1;font-weight: 400;padding: 0.75rem;vertical-align: top;border-bottom: 2px solid #dee2e6;padding-left: 0 !important;border: none !important; margin-bottom: 10px;">
                            Payment Information
                        </h4>
                        @if($invoice->buyer->name)
                            <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;" class="buyer-name">
                                <strong style="font-weight: bolder;">{{ $invoice->buyer->name }}</strong>
                            </p>
                        @endif

                        @if($invoice->buyer->address)
                            <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;" class="buyer-address">
                                {{ $invoice->buyer->address }}
                            </p>
                        @endif

                        @if($invoice->buyer->phone)
                            <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;" class="buyer-phone">
                                {{ __('invoices::invoice.phone') }}: {{ $invoice->buyer->phone }}
                            </p>
                        @endif

                        @if($invoice->buyer->order_id)
                            <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;" class="buyer-phone">
                                Order Id: {{ $invoice->buyer->order_id }}
                            </p>
                        @endif

                        <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;" class="buyer-phone">
                            Payment Status: Paid
                        </p>

                    </td>
                    <td class="border-0" style="line-height: 1.1;padding: 0.75rem;vertical-align: top;border: none !important;"></td>
                    <td class="px-0" style="line-height: 1.1;padding: 0.75rem;vertical-align: top;padding-right: 0 !important;padding-left: 0 !important;">
                        
                    </td>
                </tr>
            </tbody>
        </table>

        <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-top: 0;margin-bottom: 1rem;line-height: 1.1;">
            {{ trans('invoices::invoice.amount_in_words') }}: {{ $invoice->getTotalAmountInWords() }}
        </p>

        <p style="color: #5b5b5b;margin: 5px 0;font-size: 14px;margin-bottom: 1rem;line-height: 1.1;">
            Have a nice day.
        </p>

        <script type="text/php">
            if (isset($pdf) && $PAGE_COUNT > 1) {
                $text = "Page {PAGE_NUM} / {PAGE_COUNT}";
                $size = 10;
                $font = $fontMetrics->getFont("Verdana");
                $width = $fontMetrics->get_text_width($text, $font, $size) / 2;
                $x = ($pdf->get_width() - $width);
                $y = $pdf->get_height() - 35;
                $pdf->page_text($x, $y, $text, $font, $size);
            }
        </script>
    </body>
</html>
