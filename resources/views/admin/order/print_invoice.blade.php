<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phiếu In A5</title>
    <style type="text/css">
        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        body {
            font-family: "Arial";
        }

        @media print {
            @page {
                size: a5 portrait;
                margin-top: 1rem;
                margin-right: 1rem;
                margin-bottom: 0;
                margin-left: 0;
                min-height: auto;
            }
            html,
            .content {
                width: 148mm;
                height: 205mm;
                content: ".";
            }
        }
        .content.page-break {
            display: block;
            page-break-after: always;
        }
        .content {
            width: 150mm;
            height: 205mm;
            background-color: white;
            position: relative;
            margin: 10px;
        }
        .row {
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        .col-1,
        .col-2,
        .col-3,
        .col-4,
        .col-5,
        .col-6,
        .col-7,
        .col-8,
        .col-9,
        .col-10,
        .col-11,
        .col-12 {
            position: relative;
            width: 100%;
            min-height: 1px;
        }
        .col-1 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 8.3333333333%;
            flex: 0 0 8.3333333333%;
            max-width: 8.3333333333%;
        }

        .col-2 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 16.6666666667%;
            flex: 0 0 16.6666666667%;
            max-width: 16.6666666667%;
        }
        .col-3 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 25%;
            flex: 0 0 25%;
            max-width: 25%;
        }
        .col-4 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 33.3333333333%;
            flex: 0 0 33.3333333333%;
            max-width: 33.3333333333%;
        }

        .col-5 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 41.6666666667%;
            flex: 0 0 41.6666666667%;
            max-width: 41.6666666667%;
        }

        .col-6 {
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }
        .col-7 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 58.3333333333%;
            flex: 0 0 58.3333333333%;
            max-width: 58.3333333333%;
        }
        .col-8 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 66.6666666667%;
            flex: 0 0 66.6666666667%;
            max-width: 66.6666666667%;
        }
        .col-9 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 75%;
            flex: 0 0 75%;
            max-width: 75%;
        }
        .col-10 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 83.3333333333%;
            flex: 0 0 83.3333333333%;
            max-width: 83.3333333333%;
        }
        .col-11 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 91.666666666%;
            flex: 0 0 91.666666666%;
            max-width: 91.666666666%;
        }
        .col-12 {
            -webkit-box-flex: 0;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }
        .height-50 {
            height: 50%;
        }
        .height-100 {
            height: 100%;
        }
        .height-97 {
            height: 97%;
        }
        .height-60 {
            height: 60%;
        }
        .height-40 {
            height: 40%;
        }
        .height-35 {
            height: 35%;
        }
        .height-65 {
            height: 65%;
        }
        .height-70 {
            height: 70%;
        }
        .height-30 {
            height: 30%;
        }
        .height-75 {
            height: 75%;
        }
        .border-bottom-none {
            border-bottom: none !important;
        }
        .width-100 {
            width: 100%;
        }
        .border {
            border: 1px solid black;
        }
        .border-right {
            border-right: 1px solid black;
        }
        .border-radius {
            border-radius: 8px;
            border: 1px solid black;
        }
        .margin-3px {
            margin: 3px;
        }
        .margin-6px {
            margin: 6px;
        }
        .padding-6px {
            padding: 6px;
        }
        .padding-3px {
            padding: 3px;
        }
        .padding-left-6px {
            padding-left: 6px;
        }
        .margin-bottom-3px {
            margin-bottom: 3px;
        }
        .margin-bottom-6px {
            margin-bottom: 6px;
        }
        .margin-top-3px {
            margin-top: 3px;
        }
        .line-clamp-1 {
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
        }
        .line-clamp-2 {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            max-height: 40px;
        }
        .line-clamp-3 {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            max-height: 60px;
        }
        .line-clamp-4 {
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical;
        }
        .line-clamp-5 {
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            max-height: 91px;
        }
        .line-clamp-10 {
            display: -webkit-box;
            -webkit-line-clamp: 10;
            -webkit-box-orient: vertical;
        }
        .module {
            overflow: hidden;
        }
        .line {
            line-height: 21px;
        }
        .font-size-10px {
            font-size: 10px;
        }
        .font-size-11px {
            font-size: 11px;
        }
        .font-size-12px {
            font-size: 12px;
        }
        .font-size-20px {
            font-size: 20px;
        }
        .font-size-30px {
            font-size: 30px;
        }
        .font-size-13px {
            font-size: 13px;
        }
        .font-size-36px {
            font-size: 36px;
        }
        .border-bottom {
            border-bottom: 1px solid black;
        }
        .border-box {
            border: 3px solid black;
            padding: 4px;
            width: fit-content;
        }
        .text-aline-center {
            text-align: center;
        }
        .display-flex {
            display: flex;
        }
        .justify-content-between {
            justify-content: space-between;
        }
        .align-items-center {
            align-items: center;
        }
        .text-align-right {
            text-align: right;
        }
        .padding-0-20px {
            padding: 0 20px;
        }
        .b-t-none {
            border-top: none;
        }
        .b-rs-tl-tr {
            border-radius: 8px 8px 0 0;
        }
        .b-rs-bl-br {
            border-radius: 0 0 8px 8px;
        }
        .tracking-number {
            position: absolute;
            bottom: 6px;
            right: 12px;
        }
        .padding-bottom-12px {
            padding-bottom: 12px;
        }
        .padding-top-6px {
            padding-top: 6px;
        }
        #process-bar {
            margin: auto;
            position: fixed;
            z-index: 1000;
            width: 98%;
            height: 8px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .w3-light-grey,
        .w3-hover-light-grey:hover,
        .w3-light-gray,
        .w3-hover-light-gray:hover {
            color: #000 !important;
            background-color: #f1f1f1 !important;
        }
        .w3-round,
        .w3-round-medium {
            border-radius: 4px;
        }
        .w3-round-large {
            border-radius: 8px;
        }
        .w3-green,
        .w3-hover-green:hover {
            color: #ff8328 !important;
            background-color: #ff8328 !important;
            height: 8px;
            font-size: 1px;
        }
        .qr-code canvas{
            width: 80px !important;
            height: 80px !important;
        }
        .demo.style-barcode{
            height: auto !important;
            overflow: hidden !important;
        }
    </style>
</head>

<body>

<script>
    function processBar(stt, total) {
        elem = document.getElementById("myBar");
        value = document.getElementById("value-percent");
        if (elem) {
            if (stt == parseInt(total)) {
                elem.style.width = 100 + "%";
                value.innerHTML = "Đã tải " + 100 + "%";
                document.getElementById("process-bar").remove();

                window.print()
            } else {
                width = ((stt / total) * 100).toFixed(0);
                elem.style.width = width + "%";
                value.innerHTML = "Đang tải " + width * 1 + "%"
            }
        }
    }
</script>
<div class="content page-break">
    <input type="hidden" name="order_code" value="{{$order->order_code}}">
    <div class="margin-3px">
        <div style="border: 1px solid; border-radius: 8px; margin-bottom: 6px" class="display-flex align-items-center">
            <div style="line-height: 22px; width: 100%; padding: 4px 8px">
                <div class="font-size-13px">
                    <div style="font-weight: 600">Bên gửi</div>
                </div>
                <div style="font-size: 16px"><b>Hebi Store</b></div>
                <div class="module line-clamp-2" style="font-size: 16px">
                    <b>Nhà số 1, Ngõ 37, Tả Thanh Oai, Thanh Trì Hà Nội</b>
                </div>
            </div>

        </div>
        <div style="
                max-height: 48%;
                border: 1px solid;
                border-radius: 8px;
                margin-bottom: 6px;
                padding: 2px 8px;
                line-height: 19px;
            ">
            <div class="font-size-13px" style="font-weight: 600">Bên nhận</div>
            <div class="display-flex align-items-center" style="font-size: 13px">
                <div>
                    <div style="font-size: 16px">
                        <b>{{$order->name}}</b>
                    </div>
                </div>
            </div>
            <div style="font-size: 16px" class="module line-clamp-1">
                <b>{{$order->full_address}} - {{$order->phone}}</b>
            </div>
            <div style="font-size: 16px" class="module line-clamp-1">
                <b>{{$order->transport_name}}</b>
            </div>
            <div class="module line-clamp-2" style="font-size: 16px">
                <div style="font-size: 13px; line-height: 16px;font-weight: 600">Thu tiền người nhận</div>
                <div style="font-size: 22px;">
                    <b>@if($order->fee_shipping == 0){{number_format($order->total_money_product)}} VNĐ @else {{number_format($order->total_money_order)}} VNĐ @endif</b>
                </div>
            </div>

            <div class="display-flex align-items-center justify-content-between" style="font-size: 16px">
                <b>Không cho xem hàng</b>
                <div><b>Tạo đơn: {{ date_format(date_create($order->created_at), 'd/m/Y  H:i') }}</b></div>
            </div>
        </div>
    </div>
    <div class="margin-3px">
        <div>
            <div class="text-aline-center" style="line-height: 18px; padding: 0 16px; width: 100%;display: flex;justify-content: center">
                <div class="demo style-barcode"></div>
            </div>
        </div>
        <div style="padding-left: 16px">
            <div style="display: flex; justify-content: end">
                <div class="qr-code"></div>
            </div>
        </div>

        <div class="b-rs-tl-tr" style="
                line-height: 18px;
                border-top: 1px solid;
                border-left: 1px solid;
                border-right: 1px solid;
                border-bottom: 0px;
                position: relative;
            ">
            <div class="row border-bottom font-size-13px">
                <div class="col-11 border-right text-aline-center" style="font-weight: 600">Nội dung đơn hàng</div>
                <div class="col-1 text-aline-center"><b>SL</b></div>
            </div>
            @foreach($order_item as $k => $item)
            <div class="row border-bottom display-flex ">
                <div class="col-11 border-right module line-clamp-3" style="padding: 2px 8px; font-size: 16px; word-break: break-all;">
                    <b>{{$item->product_name}} ({{$item->name_attribute}})</b>
                </div>
                <div class="col-1 text-aline-center text-aline-center" style="font-size: 16px; margin: auto 0;">
                    <b>{{$item->quantity}}</b>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class=" text-aline-center margin-3px b-rs-bl-br " style="padding: 0 12px; height: 32px; border-bottom: 1px solid; border-left: 1px solid; border-right: 1px solid; margin-top: -8px; line-height: 32px;">
        <div class="font-size-13px" style="float: left; width: 25%;font-weight: 600">Ký tên</div>

        <div class="font-size-13px" style="float: left; width: 50%;font-weight: 600">Xác nhận nhận hàng nguyên vẹn</div>
        <div class="font-size-13px" style="float: left; width: 25%;font-weight: 600">Hebi Store</div>
    </div>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="http://code.jquery.com/jquery-latest.min.js"></script>
<script src='https://cdn.rawgit.com/lrsjng/jquery-qrcode/v0.9.5/dist/jquery.qrcode.min.js'></script>
</html>
