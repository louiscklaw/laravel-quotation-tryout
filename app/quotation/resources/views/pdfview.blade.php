<style>
    * {
        font-family: sans-serif;
        font-size: 10pt;
    }

    @page {
        margin: 180px 50px;
    }

    #header {
        position: fixed;
        left: 0px;
        top: -180px;
        right: 0px;
        height: 100px;
        /* background-color: lightblue; */
        text-align: center;
    }

    #footer {
        position: fixed;
        left: 0px;
        bottom: -180px;
        right: 0px;
        height: 200px;
        /* background-color: lightblue; */
    }

    #footer .page:after {
        content: counter(page, upper-roman);
    }

    .customer_table_name {
        width: 15%;
        padding: 5px;
    }

    .customer_table_value {
        width: 35%;
        padding: 5px;
    }

    table {
        width: 100%;
    }

    .workdescription_title {
        font-family: sans-serif;
        font-size: 14pt;
        text-align: center;
        padding: 15px;
    }

    .description_item_name {
        width: 55%;
        padding-left: 15px;
        padding-top: 5px;
        padding-bottom: 5px;
    }

    .unitprice_item_name,
    .quantity_item_name,
    .subtotal_item_name {
        width: 15%;
        padding: 5px;
    }

    .description_item_value {
        width: 55%;
        padding: 15px;
    }

    .unitprice_item_value,
    .quantity_item_value,
    .subtotal_item_value {
        width: 15%;
        padding: 5px;
    }



    .head_row {
        border-bottom: 1px solid;
        border-top: 1px solid;
    }

    .body_row {
        border: none;
    }

    .left_row {
        border-left: 1px solid;
    }

    .right_row {
        border-right: 1px solid;
    }

    .bottom_row {
        border-bottom: 1px solid;
    }
</style>

<div id="header">
    <table border="0">
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td style="width: 25%;">
                <img src="data:image/png;base64,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"  style="width: 100px;" alt="" /></td>
            <td style="width: 40%;"></td>
            <td style="width: 35%;">香港九龍九龍灣 宏照道11號 寶隆中心A座2字樓201室</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Phone: 2755 6376</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</div>

<div id="footer">

    <!-- signature -->
    <style>
        .footer_left{
            text-align: left;
        }
        .footer_right{
            text-align: right;
        }
    </style>

    <table border="0">
        <tr>
            <td>
                <img src="data:image/png;base64,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"  style="width: 100px;" alt="" /></td>
            <td></td>
            <td class="footer_right" style="width:10%; height: 80px; text-align:bottom">CLIENT:</td>
            <td class="footer_right" style="width:30%; height: 80px; text-align:left; border-bottom: 1px solid;"></td>
            <td style="width: 5px;">&nbsp;</td>
            <td class="footer_right" style="width:10%; height: 80px; text-align:bottom">CONTRACTOR:</td>
            <td class="footer_right" style="width:30%; height: 80px; text-align:left; border-bottom: 1px solid;"></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td style="text-align: right;" colspan="6">Address: Unit 2104, Saxon Tower, 7 Cheung Shun Street, <br>Cheung Sha Wan, Kowloon</td>
            <td></td>
        </tr>
        <tr>
        <td></td>
            <td class="footer_right" colspan="6">Tel. +852 2808 0092 | Fax. +852 2580 3202 | www.v8-global.com</td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td class="footer_right" colspan="6">Page <?php $PAGE_NUM ?> of 13</td>
            <td></td>
        </tr>
    </table>

    <!-- signature -->

</div>

<div class="content">
    <table cellspacing="0" cellpadding="1" border="0">
        <tr>
            <div class="workdescription_title" style="padding-bottom: 10px text-align:center;">Quotation</td>
        </tr>
    </table>

    <table cellspacing="0" cellpadding="1" border="0" style="padding-top:10px;">
        <tr>
            <td class="head_row left_row item_name customer_table_name">Name</td>
            <td class="head_row item_value customer_table_value">{{ $client_record->client_name }}</td>
            <td class="head_row item_name customer_table_name">Date:</td>
            <td class="head_row right_row item_value customer_table_value">&&quotation_date&&</td>
        </tr>
        <tr>
            <td class="left_row item_name customer_table_name">Addr</td>
            <td class="item_value customer_table_value">&&client_addr&&</td>
            <td class="item_name customer_table_name">Quotation #</td>
            <td class="right_row item_value customer_table_value">&&quotation_number&&</td>
        </tr>


        <tr>
            <td class="bottom_row"></td>
            <td class="bottom_row"></td>
            <td class="bottom_row"></td>
            <td class="bottom_row"></td>
        </tr>

    </table>

    <table cellspacing="0" cellpadding="1" border="0" style="padding-top:10px;">
        <tr>
            <td colspan="4">
                <div class="workdescription_title" style="padding-bottom: 10px">Work Description</div>
            </td>
        </tr>
        <tr>
            <td class="left_row head_row description_item_name">Description</td>
            <td class="head_row unitprice_item_name">Unit Price</td>
            <td class="head_row quantity_item_name">Quantity</td>
            <td class="right_row head_row subtotal_item_name">Subtotal</td>

        </tr>
        <tr>
            <td class="left_row description_item_value">
                <table cellspacing="0" cellpadding="1" border="0">
                    <tr>
                        <td style="width: 5px;" colspan="2">&&Description&&</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align: justify; text-justify: inter-word;">123123123123123123</td>
                    </tr>
                </table>
            </td>

            <td class="unitprice_item_value">&&Unit Price&&</td>
            <td class="quantity_item_value">&&Quantity&&</td>
            <td class="right_row subtotal_item_value">&&Subtotal&&</td>

        </tr>
        <tr>
            <td class="left_row description_item_value">
                <table cellspacing="0" cellpadding="1" border="0">
                    <tr>
                        <td style="width: 5px;" colspan="2">&&Description&&</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align: justify; text-justify: inter-word;">123123123123123123</td>
                    </tr>
                </table>
            </td>
            <td class="unitprice_item_value">&&Unit Price&&</td>
            <td class="quantity_item_value">&&Quantity&&</td>
            <td class="right_row subtotal_item_value">&&Subtotal&&</td>

        </tr>
        <tr>
            <td class="left_row description_item_value">
                <table cellspacing="0" cellpadding="1" border="0">
                    <tr>
                        <td style="width: 5px;" colspan="2">&&Description&&</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align: justify; text-justify: inter-word;">123123123123123123</td>
                    </tr>
                </table>
            </td>
            <td class="unitprice_item_value">&&Unit Price&&</td>
            <td class="quantity_item_value">&&Quantity&&</td>
            <td class="right_row subtotal_item_value">&&Subtotal&&</td>
        </tr>
        <tr>
            <td class="left_row description_item_value">
                <table cellspacing="0" cellpadding="1" border="0">
                    <tr>
                        <td style="width: 5px;" colspan="2">&&Description&&</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align: justify; text-justify: inter-word;">123123123123123123</td>
                    </tr>
                </table>
            </td>
            <td class="unitprice_item_value">&&Unit Price&&</td>
            <td class="quantity_item_value">&&Quantity&&</td>
            <td class="right_row subtotal_item_value">&&Subtotal&&</td>
        </tr>
        <tr>
            <td class="left_row description_item_value">
                <table cellspacing="0" cellpadding="1" border="0">
                    <tr>
                        <td style="width: 5px;" colspan="2">&&Description&&</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style="text-align: justify; text-justify: inter-word;">123123123123123123</td>
                    </tr>
                </table>
            </td>
            <td class="unitprice_item_value">&&Unit Price&&</td>
            <td class="quantity_item_value">&&Quantity&&</td>
            <td class="right_row subtotal_item_value">&&Subtotal&&</td>
        </tr>

        <tr>
            <td style="border-bottom: 1px solid;"></td>
            <td style="border-bottom: 1px solid;"></td>
            <td style="border-bottom: 1px solid;"></td>
            <td style="border-bottom: 1px solid;"></td>
        </tr>

    </table>


    <table style="padding-top: 20px;">
        <tr>
            <td>2.</td>
            <td>Leasing will be extended automatically until we have received your formal notice . Collection could
                be make at least 1 day before.</td>
        </tr>
        <tr>
            <td></td>
            <td>租賃將會自動續期、直至我司收到貴客戶之正式通知、回收至少要一天前安排。</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Our quotation will be the final statement, if any arguments raised.</td>
        </tr>
        <tr>
            <td></td>
            <td>如有任何爭議,以本公司之報價單為準。</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>We will delivery you the above components and you agree to pay the above listed price, if
                component(s) is (are) lost , damaged or cleaning.</td>
        </tr>
        <tr>
            <td></td>
            <td>本公司將運送以上之部件給貴司, 如有損壞,遺失及需要清潔, 照價賠償。</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Our company reserves the right to adjust the price, the price list will be used the latest version.</td>
        </tr>
        <tr>
            <td></td>
            <td>本公司保有調整價格之權利,有關價格如有調整則以新價目表為準。</td>
        </tr>

        <tr>
            <td colspan=2 style="text-align: center; padding-top:20px;">If you have any query, please feel free to
                contact WELLTECH AERIAL ENGINEERING CO., LTD. at 2388 8116.</td>
        </tr>
    </table>

</div>
