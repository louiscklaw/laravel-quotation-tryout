<?php include 'db_mapping.php'; ?>

<html>

<head>
    <title>Document</title>

    <style>

        table {
            border-collapse: collapse;
            border-spacing: 0;
            empty-cells: show
        }

        td,
        th {
            vertical-align: top;
            font-size: 10pt;
        }

        .receipt_title
        {
            color: #7f7f7f;
            font-family: Roboto;
            vertical-align: middle;
            border-style: none;
            text-align: left ! important;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 24pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .logo
        {
            color: #000000;
            font-family: Roboto;
            vertical-align: middle;
            text-align: center ! important;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 11pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .ce11 {
            color: #333f4f;
            font-family: Roboto;
            vertical-align: middle;
            text-align: left ! important;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 11pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .receipt_left_right_margin
        {
            width: 1%,
        }
        .receipt_center_spacing
        {
            width: 1%,
        }

        .my_company_name_plate
        {
            text-align: left;

            color: #333f4f;
            font-family: Roboto;
            vertical-align: middle;
            text-align: left ! important;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 11pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .bill_to_title
        {
            text-align: left;

            color: #1f3864;
            font-family: Roboto;
            vertical-align: middle;
            border-bottom-width: 0.0261cm;
            border-bottom-style: solid;
            border-bottom-color: #bfbfbf;
            border-left-style: none;
            border-right-style: none;
            border-top-style: none;
            text-align: left ! important;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 9pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .bill_to_plate
        {
            text-align: left;

        }

        .ship_to_title
        {
            text-align: left;

            color: #1f3864;
            font-family: Roboto;
            vertical-align: middle;
            border-bottom-width: 0.0261cm;
            border-bottom-style: solid;
            border-bottom-color: #bfbfbf;
            border-left-style: none;
            border-right-style: none;
            border-top-style: none;
            text-align: left ! important;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 9pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .ship_to_plate
        {
            text-align: left;

            color: #000000;
            font-family: Roboto;
            vertical-align: middle;
            text-align: left ! important;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 10pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .payment_date_text
        {
            text-align: left;

            color: #1f3864;
            font-family: Roboto;
            vertical-align: middle;
            border-bottom-width: 0.0261cm;
            border-bottom-style: solid;
            border-bottom-color: #bfbfbf;
            border-left-style: none;
            border-right-style: none;
            border-top-style: none;
            text-align: center ! important;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 9pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .receipt_num_text
        {
            text-align: left;

            color: #1f3864;
            font-family: Roboto;
            vertical-align: middle;
            border-bottom-width: 0.0261cm;
            border-bottom-style: solid;
            border-bottom-color: #bfbfbf;
            border-left-style: none;
            border-right-style: none;
            border-top-style: none;
            text-align: center ! important;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 9pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .subtotal_plate_text
        {
            text-align:right;

            color: #333f4f;
            font-family: Roboto;
            vertical-align: middle;
            text-align: right ! important;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 8pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .paid_plate_text
        {
            color: #333f4f;
            font-family: Roboto;
            vertical-align: middle;
            border-bottom-style: none;
            border-left-style: none;
            border-right-style: none;
            border-top-width: 0.0261cm;
            border-top-style: solid;
            border-top-color: #000000;
            text-align: right ! important;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 12pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .remarks_plate_text
        {
            text-align: left;
        }

        .receipt_item_col
        {
            color: #ffffff;
            font-family: Roboto;
            vertical-align: middle;
            border-bottom-width: 0.0261cm;
            border-bottom-style: solid;
            border-bottom-color: #bfbfbf;
            background-color: #cc0000;
            border-left-style: none;
            border-right-style: none;
            border-top-style: none;
            text-align: center ! important;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 9pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .remarks_plate_title
        {
            text-align: left;

            color: #1f3864;
            font-family: Roboto;
            vertical-align: middle;
            border-bottom-width: 0.0261cm;
            border-bottom-style: solid;
            border-bottom-color: #bfbfbf;
            border-left-style: none;
            border-right-style: none;
            border-top-style: none;
            text-align: left ! important;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 9pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: bold;
        }

        .remarks_plate_text
        {
            color: #000000;
            font-family: Roboto;
            vertical-align: middle;
            border-style: none;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 9pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }

        .receipt_item_body
        {
            color: #000000;
            font-family: Roboto;
            vertical-align: middle;
            border-bottom-width: 0.0261cm;
            border-bottom-style: solid;
            border-bottom-color: #bfbfbf;
            border-left-width: 0.0261cm;
            border-left-style: solid;
            border-left-color: #bfbfbf;
            border-right-width: 0.0261cm;
            border-right-style: solid;
            border-right-color: #bfbfbf;
            border-top-style: none;
            text-align: right ! important;
            margin-left: 0mm;
            writing-mode: page;
            font-size: 9pt;
            font-style: normal;
            text-shadow: none;
            text-decoration: none ! important;
            font-weight: normal;
        }



    </style>

</head>



<body>
    <table style="width:100%;" border="0">

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td class="receipt_left_right_margin"></td>
            <td style="width:48%" class="receipt_title">Receipt</td>
            <td class="receipt_center_spacing"></td>
            <td class="receipt_center_spacing"></td>
            <td style="width:48%" class="logo">Logo</td>
            <td class="receipt_left_right_margin"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td>
                <table>
                    <tr>
                        <td class="my_company_name_plate">Your Company Name</td>
                    </tr>
                    <tr>
                        <td class="my_company_name_plate">address</td>
                    </tr>
                    <tr>
                        <td class="my_company_name_plate">state city</td>
                    </tr>
                    <tr>
                        <td class="my_company_name_plate">phone</td>
                    </tr>
                    <tr>
                        <td class="my_company_name_plate">email</td>
                    </tr>
                </table>
            </td>
            <td></td>
            <td></td>
            <td>
                <table>
                    <tr>
                        <td class="payment_date_text">Payment date</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td class="receipt_num_text">Receipt No</td>
                        <td></td>
                    </tr>
                </table>
            </td>
            <td></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <table>
                    <tr>
                        <td class="bill_to_title">Bill to</td>
                    </tr>
                    <tr>
                        <td class="bill_to_plate">contact name</td>
                    </tr>
                    <tr>
                        <td class="bill_to_plate">client company name</td>
                    </tr>
                    <tr>
                        <td class="bill_to_plate">address</td>
                    </tr>
                    <tr>
                        <td class="bill_to_plate">phone</td>
                    </tr>
                    <tr>
                        <td class="bill_to_plate">email</td>
                    </tr>
                </table>


            </td>
            <td></td>
            <td></td>
            <td>
                <table>
                    <tr>
                        <td class="ship_to_title">Ship to</td>
                    </tr>
                    <tr>
                        <td class="ship_to_plate">Name/Dept</td>
                    </tr>
                    <tr>
                        <td class="ship_to_plate">company name</td>
                    </tr>
                    <tr>
                        <td class="ship_to_plate">address</td>
                    </tr>
                    <tr>
                        <td class="ship_to_plate">phone</td>
                    </tr>
                    <tr>
                        <td class="ship_to_plate"></td>
                    </tr>
                </table>


            </td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="4">
                <table style="width:100%;">
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="receipt_item_col" style="width=70%;">Description</td>
                        <td class="receipt_item_col" ></td>
                        <td class="receipt_item_col" style="width:10%;">QTY</td>
                        <td class="receipt_item_col" ></td>
                        <td class="receipt_item_col" style="width:10%;">Unit price</td>
                        <td class="receipt_item_col" ></td>
                        <td class="receipt_item_col" style="width:10%;">TOTAL</td>
                        <td class="receipt_item_col" ></td>
                    </tr>

                    <tr>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body">0.00</td>
                        <td class="receipt_item_body"></td>
                    </tr>
                    <tr>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body">0.00</td>
                        <td class="receipt_item_body"></td>
                    </tr>
                    <tr>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body"></td>
                        <td class="receipt_item_body">0.00</td>
                        <td class="receipt_item_body"></td>
                    </tr>

                </table>
            </td>
            <td></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        <tr>
            <td></td>
            <td>
                <table>
                    <tr>
                        <td class="remarks_plate_title">Remarks</td>
                    </tr>
                    <tr>
                        <td class="remarks_plate_text">Remarks body</td>
                    </tr>
                </table>


            </td>
            <td></td>
            <td colspan="2">
                <table>
                    <tr>
                        <td class="subtotal_plate_text">Subtotal</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="subtotal_plate_text">Discount</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="subtotal_plate_text">Subtotal less discount</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="subtotal_plate_text">Tax Rate</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="subtotal_plate_text">Total Tax</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="subtotal_plate_text">shipping/handling</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td class="paid_plate_text">Paid</td>
                        <td></td>
                    </tr>
                </table>


            </td>


            <td></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

    </table>


</body>

</html>
