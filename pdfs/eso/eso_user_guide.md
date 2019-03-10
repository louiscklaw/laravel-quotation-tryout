# Quotation ESO

## Edit:
* 報價:
    * 報價日期: (預設今日)
* 客戶:
    * 客戶簡稱:
        * 由 customer > client 度攞
        * 可以用 client id, site id, site 名去搵
    * 地盤簡稱:
        * 由 site > Site(DeliveryContact) 度攞
        * 可以用 client id, site id, site 名去搵
* Period:
    * 開始日:
        ＊ (預設今日)
    * 結束日:
        ＊ (預設係空)

### Period 組合方式:
|組合 | edit 果頁入 |  pdf 會出現  |
|---|---|---|---|---|
|只有開始日|![/home/logic/_workspace/laravel-quotation-tryout/pdfs/eso/screencapture/period_start_date_only.png](/home/logic/_workspace/laravel-quotation-tryout/pdfs/eso/screencapture/period_start_date_only.png)|![/home/logic/_workspace/laravel-quotation-tryout/pdfs/eso/screencapture/pdf_start_date_only.png](/home/logic/_workspace/laravel-quotation-tryout/pdfs/eso/screencapture/pdf_start_date_only.png)|
|開始結束日入晒|![/home/logic/_workspace/laravel-quotation-tryout/pdfs/eso/screencapture/period_start_end_date.png](/home/logic/_workspace/laravel-quotation-tryout/pdfs/eso/screencapture/period_start_end_date.png)|![/home/logic/_workspace/laravel-quotation-tryout/pdfs/eso/screencapture/pdf_start_end_date.png](/home/logic/_workspace/laravel-quotation-tryout/pdfs/eso/screencapture/pdf_start_end_date.png)|


### WORK DESCRIPTION/service item table:p
|Type |  Description | UnitPrice (每期租金) | QTY(Set) | comment (appears in subtotal column)  |
|---|---|---|---|---|
| Delivery | Handling Are Responsibility Of The Lessee 車邊交收 不包搬運及搭拆（預設） | empty  | empty  |   |
| Setup |  | empty  | empty  |   |
| Form5 | form 5 lssuance will be included 2 times per morth. HKD 500 for the 3rd time or above（預設） |   |   |   |
| Labor |  | empty  | empty  |   |
| extra1 |  | empty  | empty  |   |
| extra2 |  | empty  | empty  |   |
| extra3 |  | empty  | empty  |   |


### Discount:
|Type |  Description | Discount | Discount comment  |
|---|---|---|---|
| 合約拆扣  | empty | empty | empty |

### 其他
* 宏達聯絡人:
* default to the current editing user

### Remarks:
* default remarks
    1. Validity: Within 15 days from the date of this offer.
    2. Generally, delivery will be arranged on the next working day within working hours.
    3. Clients are responsible for carpark fee incurred with receipt attached.

### 內部參考:
* status:

### 備註
* status:

### 擁有人:
* default to the current editing user

### 相關 DNCN

### 相關 Deposit

## View:


### PDF:
* using link with timestamp as parameter to prevent browser's caching.


### concerns/update/ideas
* adding company_id / company_name to the table
    * to let the users from accounting can trace the record by company instead of people contact.



### ESO, order flow
* sales, create order
* operation, following order
* accounting, chase money

@startuml
Sales -[#red]> Accounting : hello
Accounting -[#0000FF]->Operation : ok
@enduml

@startuml

[*] --> Quotation
Quotation : from sales

Quotation --> Order
Order: to operation

Order --> [*]

@enduml
