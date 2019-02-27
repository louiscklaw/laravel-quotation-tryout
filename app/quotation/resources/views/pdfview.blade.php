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
        height: 150px;
        background-color: orange;
        text-align: center;
    }

    #footer {
        position: fixed;
        left: 0px;
        bottom: -180px;
        right: 0px;
        height: 150px;
        background-color: lightblue;
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
        padding: 5px;
    }

    .unitprice_item_name,
    .quantity_item_name,
    .subtotal_item_name {
        width: 15%;
        padding: 5px;
    }

    .description_item_value {
        width: 55%;
        padding: 5px;
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
    <h1>Widgets Express</h1>
</div>
<div id="footer">
    <p class="page">Page
        <?php $PAGE_NUM ?>
    </p>
</div>

<div class="content">

    <table cellspacing="0" cellpadding="1" border="0">
        <tr>
            <td class="head_row left_row item_name customer_table_name">Name</td>
            <td class="head_row item_value customer_table_value">&&client_name&&</td>
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

    <br><br><br>

    <table cellspacing="0" cellpadding="1" border="0">
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
            <td class="left_row description_item_value">&&Description&&</td>
            <td class="unitprice_item_value">&&Unit Price&&</td>
            <td class="quantity_item_value">&&Quantity&&</td>
            <td class="right_row subtotal_item_value">&&Subtotal&&</td>

        </tr>
        <tr>
            <td class="left_row description_item_value">&&Description&&</td>
            <td class="unitprice_item_value">&&Unit Price&&</td>
            <td class="quantity_item_value">&&Quantity&&</td>
            <td class="right_row subtotal_item_value">&&Subtotal&&</td>

        </tr>
        <tr>
            <td class="left_row description_item_value">&&Description&&</td>
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


<br>
<br>
<br>
<br>
<br>

<table cellspacing="0" cellpadding="1" border="0">
    <tr>
        <td class="head_row" style="border: 1px solid;">1</td>
        <td class="head_row" style="border: 1px solid;">2</td>
        <td class="head_row" style="border: 1px solid;">3</td>
    </tr>
    <tr>
        <td style="border-left: 1px solid;">

            <table cellspacing="0" cellpadding="1" border="0">
                <tr>
                    <td class="head_row" style="border: 1px solid;">1</td>
                    <td class="head_row" style="border: 1px solid;">2</td>
                    <td class="head_row" style="border: 1px solid;">3</td>
                </tr>
                <tr>
                    <td style="border-left: 1px solid;">4</td>
                    <td style="border: none;">5</td>
                    <td style="border-right: 1px solid; border-left: none;">6</td>
                </tr>
                <tr>
                    <td style="border-top: none; border-bottom: 1px solid;border-left: 1px solid;">1</td>
                    <td style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid;">2</td>
                    <td style="border-top: none; border-bottom: 1px solid; border-right: 1px solid; border-left: none;">3</td>
                </tr>
            </table>


        </td>
        <td style="border: none;">5</td>
        <td style="border-right: 1px solid; border-left: none;">6</td>
    </tr>
    <tr>
        <td style="border-top: none; border-bottom: 1px solid;border-left: 1px solid;">1</td>
        <td style="border-top: none; border-left: none; border-right: none; border-bottom: 1px solid;">2</td>
        <td style="border-top: none; border-bottom: 1px solid; border-right: 1px solid; border-left: none;">3</td>
    </tr>
</table>

</div>


<style>
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

<br>
<br>
<br>
<br>
<br>
