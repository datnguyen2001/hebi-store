<div class="row m-0">
    <div class="col-lg-2 p-1">
        <input type="text" name="variant[{{$count}}][data][0][color]" required class="form-control" placeholder="Tên màu sản phẩm">
    </div>
    <div class="col-lg-2 p-1">
        <input name="variant[{{$count}}][data][0][price]" type="text" class="form-control price format-currency" placeholder="Gía bán">
    </div>
    <div class="col-lg-2 p-1">
        <input name="variant[{{$count}}][data][0][promotion_price]" type="text" class="form-control promotion_price format-currency" placeholder="Gía KM">
    </div>
    <div class="col-lg-2 p-1">
        <input name="variant[{{$count}}][data][0][quantity]" type="text" class="form-control quantity format-currency" placeholder="Số lượng" required>
    </div>
    <div class="col-lg-2 p-1">
        <input name="variant[{{$count}}][data][0][sku]" type="text" class="form-control sku" placeholder="sku">
    </div>
    <div class="col-lg-2 p-1">
        <button type="button" class="btn btn-danger btn-clear-size">
            <i class="bi bi-trash"></i> Xóa</button>
    </div>
</div>
