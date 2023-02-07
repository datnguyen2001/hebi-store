<div class="mt-3 border-bottom data-variant pb-3">
    <div class="row m-0">
        <div class="col-lg-2 p-1">
            <select class="form-select color" name="variant[{{$count}}][color]" required>
                <option value="">Màu sắc</option>
                @foreach($color as $value)
                    <option style="background: {{$value->code}}; color: #ffffff" value="{{$value->id}}">{{$value->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-lg-2 p-1">
            <button type="button" class="btn btn-success btn-add-size form-control"><i class="bi bi-plus-lg"></i> Thêm Size Số</button>
        </div>
        <div class="col-lg-2 p-1">
            <button type="button" class="btn btn-primary btn-add-color form-control"><i class="bi bi-plus-lg"></i> Thêm Màu</button>
        </div>
        <div class="col-lg-2 p-1">
            <button type="button" class="btn btn-danger btn-clear-color">
                <i class="bi bi-trash"></i> Xóa</button>
        </div>
    </div>
    <div class="list-size">
        <div class="row m-0">
            <div class="col-lg-2 p-1">
                <select class="form-select size" name="variant[{{$count}}][data][0][size]" required>
                    <option value="">Size số</option>
                    @foreach($size as $value)
                        <option value="{{$value->id}}">{{$value->name}}</option>
                    @endforeach
                </select>
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
        </div>
    </div>
</div>
