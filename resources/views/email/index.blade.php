<div style="width: 700px;margin: 0 auto;padding: 15px;font-size: 16px;">
    <p style="margin:0 0 10px 0">Xin chào Anh/Chị.</p>
    <p style="margin:0 0 10px 0">Cảm ơn anh chị đã đặt hàng tại Hebi Store!</p>
    <p style="margin:0 0 10px 0">Đơn hàng của Anh/Chị đã được tiếp nhận, chúng tôi sẽ nhanh chóng liên hệ với
        Anh/chị.</p>
    <div style="border-bottom: 2px solid #cccccc;margin-bottom: 16px"></div>
    <h2 style="margin:0 0 10px 0;font-size: 18px">Thông tin mua hàng</h2>
    <p style="margin:0 0 10px 0">Họ và tên: {{$order->name}}</p>
    <p style="margin:0 0 10px 0">Số điện thoại: {{$order->phone}}</p>
    <p style="margin:0 0 10px 0">Email: {{$order->email}}</p>
    <p style="margin:0 0 10px 0">Địa chỉ: {{$order->full_address}}</p>
    <h2 style="margin:0 0 10px 0;font-size: 18px">Phương thức thanh toán</h2>
    <p style="margin:0 0 10px 0">{{$order->type_payment == 1?'Thanh toán khi nhận hàng':'Thanh toán chuyển khoản'}}</p>
    <h2 style="margin:0 0 10px 0;font-size: 18px">Phương thức vận chuyển</h2>
    <p style="margin:0 0 10px 0">{{$order->delivery_address}}</p>
    <h2 style="margin:0 0 10px 0;font-size: 18px">Thông tin đơn hàng</h2>
    <div style="display: flex; justify-content: space-between; align-items: center;width: 100%">
        <p style="margin:0;width: 50%">Mã đơn hàng: {{$order->order_code}}</p>
        <p style="margin:0;width: 50%;">Ngày đặt hàng: {{ date('d.m.Y H:i', strtotime($order->created_at)) }}</p>
    </div>
    @foreach($order_item as $item)
        <div style="border-bottom: 2px solid #cccccc;margin-top: 10px">
            <div>
                {{--                <div class="image-product">--}}
                {{--                    <img src="{{$item->product_image->image}}" alt="" class="image-product-order">--}}
                {{--                </div>--}}
                <div>
                    <div>{{$item->product_name}}</div>
                    <div>
                        Màu {{$item->product_attribute_name}}
                    </div>
                    <div>Số lượng: {{$item->quantity}}</div>
                </div>
            </div>
            <div>
                <p style="margin: 0 0 10px 0"><span>{{number_format($item->promotional_price)}}đ</span> <span
                        style="color: red">{{number_format($item->total_money)}}đ</span></p>
            </div>
        </div>
    @endforeach
    <div style="margin-top: 10px">
        <div style="display: flex;justify-content: space-between;align-items: center"><span
                style="font-weight: 700">Tổng tiền hàng:</span>
            <p style="width: 265px;margin: 0;text-align: right">{{number_format($order->total_money_product)}}đ</p>
        </div>
        <div style="display: flex;justify-content: space-between;align-items: center"><span
                style="font-weight: 700">Phí vận chuyển:</span>
            <p style="width: 265px;margin: 0;text-align: right">{{number_format($order->fee_shipping)}}đ</p>
        </div>
        <div style="display: flex;justify-content: space-between;align-items: center"><span
                style="font-weight: 700">Thành tiền:</span>
            <p style="width: 301px;margin: 0;text-align: right;color: red">{{number_format($order->total_money_order)}}
                đ</p></div>
    </div>
</div>
