<?php

namespace App\Http\Controllers;

use App\Models\DistrictGHNModel;
use App\Models\OrderItemModel;
use App\Models\ProductAttributesModel;
use App\Models\ProductsModel;
use App\Models\ProvinceGHNModel;
use App\Models\WardGHNModel;
use Illuminate\Http\Request;

class ShippingUnitController extends Controller
{
    /**
     * Tạo đơn hàng giao hàng nhanh
     */
   

    /**
     * Huỷ đơn hàng giao hàng nhanh
     */


    /**
     * Tính phí vận chuyển giao hàng nhanh
     */
    public function feeShippingGHN($_address_shipping, $total_money_product)
    {
        try {
            $district = DistrictGHNModel::where('DistrictID', '1493')->first();
            $district_customer = DistrictGHNModel::where('DistrictID', $_address_shipping['district_id_ghn'])->first();
            $ward_customer = WardGHNModel::where('WardCode', $_address_shipping['ward_id_ghn'])->first();
            $__weight = 1 * 100;
            $__value = $total_money_product;
            $__service = $this->serviceGHN($district->DistrictID, $district_customer->DistrictID);

            $data = '{
                    "from_district_id":' . $district->DistrictID . ',
                    "service_id":' . $__service . ',
                    "service_type_id":null,
                    "to_district_id":' . $district_customer->DistrictID . ',
                    "to_ward_code":"' . $ward_customer->WardCode . '",
                    "height":0,
                    "length":0,
                    "weight":' . $__weight . ',
                    "width":0,
                    "insurance_value":' . $__value . ',
                    "coupon": null
                    }';
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/fee',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => $data,
                CURLOPT_HTTPHEADER => array(
                    'Content-Type: application/json',
                    'ShopId: 4404387',
                    'token: cdb73e69-2ea8-11ee-96dc-de6f804954c9'
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            $response = json_decode($response);

            if ($response->code == 200) {
                return $response->data->total;
            } else {
                return 0;
            }

        } catch (\Exception $exception) {

        }
    }

    /**
     * Tính giá cho tất cả các dịch vụ phù hợp
     */
    protected function serviceGHN($district, $district_customer)
    {
        try {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'https://online-gateway.ghn.vn/shiip/public-api/v2/shipping-order/available-services',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => '{
                    "shop_id":4404387,
                    "from_district": ' . $district . ',
                    "to_district": ' . $district_customer . '
                }',
                CURLOPT_HTTPHEADER => array(
                    'token: cdb73e69-2ea8-11ee-96dc-de6f804954c9',
                    'Content-Type: application/json'
                ),
            ));

            $response = curl_exec($curl);

            curl_close($curl);
            $response = json_decode($response);
            if ($response->code) {
                return $response->data[0]->service_id;
            } else {
                return 53320;
            }
        } catch (\Exception $exception) {

        }
    }
}
