<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use LaravelDaily\Invoices\Invoice;
use App\Http\Controllers\Controller;
use LaravelDaily\Invoices\Classes\Buyer;
use LaravelDaily\Invoices\Classes\Party;
use LaravelDaily\Invoices\Classes\InvoiceItem;

class InvoiceController extends Controller
{
    public function makeInvoice()
    {
        $client = new Party([
            'name'          => 'Roosevelt Lloyd',
            'phone'         => '(520) 318-9486',
            'custom_fields' => [
                'note'        => 'IDDQD',
                'business id' => '365#GG',
            ],
        ]);

        $customer = new Party([
            'name'          => 'Ashley Medina',
            'phone'         => '(520) 318-9486',
            'address'       => 'The Green Street 12, London, UK',
            'order_id'      => '#654321',
        ]);

        $data = 5;
        $items = [];

        for($i = 0; $i <= $data; $i++)
        {
            $title = 'Service' . $i+1;
            $orders = (new InvoiceItem())
            ->title($title)
            // ->description('Your product or service description')
            ->pricePerUnit(47.79)
            ->quantity(2)
            ->discount(10);

            $items[$i] = $orders;
        }

        $notes = [
            'your multiline',
            'additional notes',
            'in regards of delivery or something else',
        ];
        $notes = implode("<br>", $notes);

        $invoice = Invoice::make('Invoice')
            ->series('BIG')
            ->status(__('invoices::invoice.paid'))
            ->sequence(667)
            ->serialNumberFormat('{SEQUENCE}')
            ->seller($client)
            ->buyer($customer)
            ->date(now())
            ->dateFormat('m/d/Y')
            ->payUntilDays(14)
            ->currencySymbol('RS ')
            ->currencyCode('INR')
            ->currencyFormat('{SYMBOL}{VALUE}')
            ->currencyThousandsSeparator('.')
            ->currencyDecimalPoint('.')
            ->taxRate(18)
            ->shipping(80)
            ->filename('KFIN' . $customer->order_id)
            ->addItems($items)
            ->notes($notes)
            ->logo(public_path('/images/favicon.png'))
            ->save('invoice');

        $link = '/invoices/KFIN' . $customer->order_id . '.pdf';
        // $link = $invoice->url();
        // Then send email to party with link

        // And return invoice itself to browser or have a different view
        // dd($link);
        return $invoice->stream();
    }

    
}
