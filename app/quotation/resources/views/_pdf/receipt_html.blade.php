<?php include 'db_mapping.php'; ?>

<html>

<head>
    <title>Document</title>
    <style>
        @page {
            margin:10;
        }
        /* * { padding: 0; margin: 0; } */
        @font-face {
            font-family: "source_sans_proregular";
            src: local("Source Sans Pro"), url("fonts/sourcesans/sourcesanspro-regular-webfont.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;

        }
        body{
            font-family: "source_sans_proregular", Calibri,Candara,Segoe,Segoe UI,Optima,Arial,sans-serif;
        }
        html
        {
            font-family: arial;
        }
        table
        {
            width: 100%;
            border-collapse: collapse;
        }
        .receipt_item_header
        {
            background-color:powderblue;
            border-left: 1px solid #000000;
            border-top: 1px solid #000000;
            border-right: 1px solid #000000;
            border-bottom: 1px solid #000000;
            text-align: center;
        }

        .receipt_item_body
        {
            border-left: 1px solid #000000;
            border-right: 1px solid #000000;

        }

        .receipt_item_footer
        {
            border-left: 1px solid #000000;
            border-right: 1px solid #000000;
            border-bottom: 1px solid #000000;
        }
        .receipt_title
        {
            text-align: center;
            font-size: 14pt;
        }

        .subtotal_text
        {
            text-align: right;
        }

        .subtotal_cell
        {
            border-left: 1px solid #000000;
            border-right: 1px solid #000000;
            border-bottom: 1px solid #000000;
        }

        .receipt_company_header
        {
            text-align: center;
            font-size: 14pt;
        }

    </style>
</head>

<body>
    <table>
        <tr>
            <td></td>
            <td colspan="2" class="receipt_company_header">Company Ltd</td>
            <td></td>
        </tr>

        <tr>
            <td>&nbsp;</td>
            <td></td>
            <td></td>
        </tr>


    </table>

    <table>
        <tr>
            <td>
                <table>
                    <tr>
                        <td>Sold to:</td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                    </tr>
                    <tr>
                        <td>sold to table</td>
                    </tr>
                </table>
            </td>
            <td></td>
            <td>
                <table>
                    <tr>
                        <td>Date:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Receipt No:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Sold by:</td>
                        <td></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table>
        <tr style="height: 1px;">
            <td>&nbsp;</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td colspan="2" class="receipt_title">Receipt</td>
            <td></td>
        </tr>
        <tr >
            <td style="line-height: 5px;">&nbsp;</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <table>
        <tr>
            <td class="receipt_item_header" style="width:10%;">Qty</td>
            <td class="receipt_item_header" style="width:70%;">Item</td>
            <td class="receipt_item_header" style="width:10%;">Price/Unit</td>
            <td class="receipt_item_header" style="width:10%;">Total</td>
        </tr>

        <tr>
            <td class="receipt_item_body">&nbsp;</td>
            <td class="receipt_item_body"></td>
            <td class="receipt_item_body"></td>
            <td class="receipt_item_body"></td>
        </tr>
        <tr>
            <td class="receipt_item_body">&nbsp;</td>
            <td class="receipt_item_body"></td>
            <td class="receipt_item_body"></td>
            <td class="receipt_item_body"></td>
        </tr>
        <tr>
            <td class="receipt_item_body">&nbsp;</td>
            <td class="receipt_item_body"></td>
            <td class="receipt_item_body"></td>
            <td class="receipt_item_body"></td>
        </tr>
        <tr>
            <td class="receipt_item_body">&nbsp;</td>
            <td class="receipt_item_body"></td>
            <td class="receipt_item_body"></td>
            <td class="receipt_item_body"></td>
        </tr>
        <tr>
            <td class="receipt_item_body">&nbsp;</td>
            <td class="receipt_item_body"></td>
            <td class="receipt_item_body"></td>
            <td class="receipt_item_body"></td>
        </tr>
        <tr>
            <td class="receipt_item_footer">&nbsp;</td>
            <td class="receipt_item_footer"></td>
            <td class="receipt_item_footer"></td>
            <td class="receipt_item_footer"></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td class="subtotal_text">Subtotal</td>
            <td class="subtotal_cell"></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td class="subtotal_text">Tax</td>
            <td class="subtotal_cell"></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td class="subtotal_text">Shipping</td>
            <td class="subtotal_cell"></td>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td class="subtotal_text">Total</td>
            <td class="subtotal_cell"></td>
        </tr>

    </table>

</body>

</html>
