@extends('web.layout.master')
@section('title','Hebi Mobile')
{{--meta--}}
@section('meta')
    <meta name="description" content=""/>
    <meta name="keywords" content="Hebi Mobile">
@stop
@section('style_page')
    <link rel="stylesheet" href="dist/news/news.css">
@stop
{{--content of page--}}
@section('content')
    <div class="headerCategory">
        <div class="container">
            <div class="breadcrumb">
                <a href="{{url('/')}}">
                    <span class="name">Trang chủ</span>
                </a>
                <div class="breadcrumbs_sepa"></div>
                <a href="{{url('tin-tuc/trang-chu')}}">
                    <span class="name">Tin tức</span>
                </a>
                <div class="breadcrumbs_sepa"></div>
                <span class="name">chi tiết</span>
                <div class="breadcrumbs_sepa"></div>
                <span class="name">{{$data->title}}</span>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="main-news">
            <div class="main-menu">
                <ul class="menu-news">
                    <li>
                        <a href="{{url('tin-tuc/trang-chu')}}" title="Trang chủ">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M1.61669 19.5627C1.82033 20.8049 2.45989 21.9337 3.42057 22.7469C4.3813 23.5602 5.60028 24.0045 6.85899 24H17.1692C18.4279 24.0045 19.6469 23.5601 20.6076 22.7469C21.5683 21.9337 22.2078 20.8049 22.4115 19.5627L23.6211 12.3022C23.9243 10.5127 23.2882 8.69275 21.9363 7.48157L14.8191 1.07975C14.0502 0.3848 13.0506 0 12.014 0C10.9775 0 9.97787 0.384809 9.20899 1.07975L2.09516 7.48157C0.743261 8.69289 0.107104 10.5129 0.410305 12.3022L1.61669 19.5627ZM3.2177 8.7283L10.3373 2.32648C10.7985 1.90929 11.398 1.67834 12.0199 1.67834C12.6417 1.67834 13.2413 1.9093 13.7025 2.32648L20.8106 8.7283C21.7359 9.5565 22.1716 10.8017 21.9644 12.0263L20.7536 19.2935C20.6144 20.1429 20.1772 20.9147 19.5202 21.471C18.8635 22.0272 18.03 22.3314 17.1693 22.3287H6.85909C5.99811 22.3313 5.16469 22.027 4.50774 21.4706C3.85098 20.9141 3.41376 20.1419 3.27472 19.2923L2.06392 12.0266C1.85673 10.802 2.29245 9.55679 3.21779 8.72859L3.2177 8.7283Z" fill="currentColor"/><path d="M8.66076 19.5282H15.3688C15.6684 19.5282 15.9452 19.3684 16.095 19.1089C16.2447 18.8495 16.2447 18.5298 16.095 18.2704C15.9452 18.011 15.6684 17.8512 15.3688 17.8512H8.66076C8.3611 17.8512 8.0843 18.011 7.93456 18.2704C7.78483 18.5299 7.78483 18.8495 7.93456 19.1089C8.0843 19.3684 8.36111 19.5282 8.66076 19.5282Z" fill="currentColor"/></svg>
                            Trang chủ
                        </a>
                    </li>
                    <li>
                        <a class="{{$data->type == 1 ? 'active': ''}}" href="{{url('tin-tuc/tin-moi')}}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M20.1126 0H3.88736C1.74657 0 0 1.74642 0 3.88736V20.1126C0 22.2534 1.74642 24 3.88736 24H20.1126C22.2534 24 24 22.2536 24 20.1126V3.88736C24 1.74657 22.2536 0.000201096 20.1128 0.000201096L20.1126 0ZM3.88736 1.40844H20.1126C21.4647 1.40844 22.5633 2.50703 22.5633 3.85909V10.3943L1.40895 10.3941V3.88706C1.40895 2.535 2.5356 1.40835 3.88766 1.40835L3.88736 1.40844ZM20.1126 22.5915H3.88736C2.5353 22.5915 1.43671 21.4929 1.43671 20.1408V11.831H22.5916V20.1126C22.5916 21.4647 21.4649 22.5914 20.1128 22.5914L20.1126 22.5915Z" fill="currentColor" fill-opacity="0.87"/><path d="M8.67586 5.99992C8.67586 7.40012 7.54076 8.53522 6.14057 8.53522C4.74037 8.53522 3.60547 7.40012 3.60547 5.99992C3.60547 4.59993 4.74037 3.46483 6.14057 3.46483C7.54076 3.46483 8.67586 4.59993 8.67586 5.99992" fill="currentColor" fill-opacity="0.87"/><path d="M11.3527 4.98584H19.916C20.3104 4.98584 20.6202 4.67597 20.6202 4.28161C20.6202 3.88726 20.3104 3.57739 19.916 3.57739H11.3527C10.9583 3.57739 10.6484 3.88726 10.6484 4.28161C10.6484 4.67597 10.9864 4.98584 11.3527 4.98584Z" fill="currentColor" fill-opacity="0.87"/><path d="M11.3527 8.59146H19.916C20.3104 8.59146 20.6202 8.28159 20.6202 7.88724C20.6202 7.49288 20.3104 7.18301 19.916 7.18301H11.3527C10.9583 7.18301 10.6484 7.49288 10.6484 7.88724C10.6484 8.25349 10.9864 8.59146 11.3527 8.59146Z" fill="currentColor" fill-opacity="0.87"/></svg>                            Tin mới                        </a>
                    </li>
                    <li>
                        <a class="{{$data->type == 2 ? 'active': ''}}" href="{{url('tin-tuc/khuyen-mai')}}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M1.96085 15.0266C2.19721 15.0866 2.38844 15.2593 2.47231 15.4883C2.56463 15.734 2.65694 15.975 2.76863 16.2132V16.213C2.87023 16.4365 2.85436 16.6955 2.72618 16.9047C2.42677 17.3996 2.30148 17.9805 2.3703 18.5549C2.43934 19.1291 2.69857 19.664 3.10658 20.0737L3.87088 20.843C4.2791 21.2544 4.813 21.5169 5.38796 21.5891C5.96271 21.6613 6.54506 21.5388 7.04205 21.241C7.25162 21.1165 7.50879 21.1035 7.7299 21.2059C7.96708 21.3158 8.20818 21.4164 8.45547 21.5087C8.68379 21.5955 8.85442 21.7893 8.9115 22.0267C9.04956 22.5888 9.37186 23.0884 9.82667 23.446C10.2817 23.8036 10.8432 23.9986 11.4216 24H12.5148C13.0924 24.0005 13.6538 23.8075 14.1094 23.4522C14.565 23.0968 14.8889 22.5993 15.0295 22.0388C15.0899 21.8028 15.2625 21.6118 15.4911 21.5281C15.7375 21.4357 15.9803 21.3378 16.2176 21.2298C16.4412 21.128 16.7007 21.1439 16.91 21.2723C17.4048 21.5728 17.9859 21.6985 18.5606 21.6295C19.1352 21.5602 19.6699 21.3003 20.0794 20.891L20.8484 20.1273C21.2597 19.719 21.5222 19.1845 21.5942 18.6094C21.6663 18.0342 21.5433 17.4517 21.2453 16.9545C21.1212 16.7455 21.1078 16.4891 21.2092 16.2684C21.3195 16.032 21.4196 15.7906 21.5101 15.5445H21.5103C21.596 15.313 21.7918 15.1399 22.0319 15.0828C22.5912 14.9441 23.0884 14.6231 23.4449 14.1701C23.8014 13.7173 23.9967 13.1585 24 12.5822V11.499C24.002 10.919 23.8098 10.3551 23.4539 9.89733C23.098 9.43955 22.5989 9.11429 22.0363 8.97351C21.8006 8.91312 21.6096 8.7406 21.5259 8.51181C21.4336 8.26529 21.3367 8.02331 21.2286 7.78791C21.127 7.56428 21.1432 7.30457 21.272 7.09536C21.5719 6.60048 21.6972 6.0192 21.6283 5.4448C21.5593 4.87012 21.3001 4.33529 20.8916 3.9253L20.1281 3.15708C19.7203 2.74526 19.186 2.48205 18.6108 2.40992C18.0357 2.33779 17.4532 2.46062 16.9561 2.75908C16.7463 2.88378 16.4887 2.89697 16.2674 2.79412C16.0317 2.68508 15.791 2.58491 15.5455 2.49319C15.3143 2.40745 15.1412 2.21205 15.0839 1.97233C14.9455 1.41027 14.6232 0.910844 14.168 0.553408C13.713 0.195799 13.1514 0.00100321 12.5728 6.58648e-07H11.4889C10.9105 -0.000411601 10.3487 0.192717 9.89268 0.548501C9.43666 0.904465 9.11272 1.40267 8.9724 1.96389C8.91202 2.1999 8.73933 2.39097 8.51081 2.47465C8.26435 2.56699 8.02345 2.66386 7.78608 2.77104C7.5629 2.87266 7.30388 2.85658 7.09474 2.72858C6.59997 2.42766 6.01868 2.30172 5.44372 2.37077C4.86897 2.43961 4.33384 2.69973 3.92436 3.10907L3.15633 3.87275C2.7446 4.28086 2.48187 4.81551 2.40976 5.39098C2.33784 5.96623 2.46087 6.54914 2.75946 7.0463C2.88351 7.25571 2.8965 7.51253 2.79449 7.73346C2.68548 7.96988 2.58533 8.21083 2.49363 8.45651L2.49342 8.45631C2.40791 8.68736 2.21317 8.8605 1.97372 8.91801C1.41158 9.0559 0.911844 9.37806 0.554122 9.83318C0.196391 10.2881 0.00126608 10.85 0 11.4287V12.5137C0.000824273 13.091 0.194117 13.6516 0.549164 14.1067C0.904427 14.5618 1.40103 14.8855 1.96074 15.0264L1.96085 15.0266ZM1.84731 11.4254C1.84895 11.0797 2.08655 10.78 2.42242 10.6994C3.25266 10.4956 3.92796 9.89352 4.22554 9.0919C4.29931 8.89053 4.38132 8.69389 4.47117 8.50177H4.47096C4.83014 7.72553 4.78212 6.82171 4.34279 6.08795C4.16701 5.79279 4.21482 5.4156 4.45901 5.17383L5.22989 4.41015C5.47615 4.16549 5.85777 4.12159 6.15308 4.304C6.88113 4.74385 7.77915 4.79641 8.55336 4.44437C8.74624 4.35203 8.9449 4.27453 9.14521 4.20156C9.95154 3.90826 10.5598 3.23405 10.769 2.40177C10.8531 2.07013 11.1517 1.83802 11.4937 1.83845H12.5777H12.5775C12.9232 1.83968 13.2231 2.07754 13.3032 2.4137C13.5068 3.24355 14.1079 3.91858 14.9085 4.21618C15.1099 4.28997 15.3064 4.37324 15.4993 4.46187H15.4995C16.2754 4.82113 17.1788 4.77351 17.9126 4.33449C18.2072 4.15805 18.5841 4.20587 18.8257 4.44991L19.5892 5.21813C19.8319 5.4634 19.8758 5.84288 19.6953 6.13699C19.2541 6.86769 19.202 7.76925 19.556 8.54607C19.6483 8.73899 19.725 8.93666 19.7979 9.13699H19.7977C20.092 9.94146 20.7654 10.5481 21.5961 10.7566C21.9291 10.8407 22.1618 11.1408 22.1603 11.4842V12.5674C22.159 12.9132 21.9212 13.2131 21.5852 13.2933C20.7559 13.4982 20.0815 14.0994 19.7831 14.9C19.7083 15.0995 19.6271 15.2961 19.5366 15.4901C19.1775 16.2663 19.2255 17.17 19.6648 17.9037C19.8404 18.1987 19.7928 18.5751 19.5494 18.817L18.7814 19.5807C18.5364 19.8239 18.157 19.868 17.8627 19.6879C17.1316 19.2462 16.2294 19.1942 15.4524 19.5494C15.2572 19.6392 15.0592 19.7209 14.8578 19.794C14.0566 20.0888 13.4529 20.7603 13.2441 21.5881C13.1607 21.9203 12.8619 22.153 12.5194 22.1524H11.4365C11.092 22.151 10.793 21.9148 10.7118 21.5798C10.5078 20.752 9.90894 20.078 9.11104 19.7783C8.9091 19.7033 8.71127 19.6204 8.51735 19.53C7.7413 19.1692 6.83689 19.2162 6.10246 19.6555C5.80758 19.8321 5.43048 19.7849 5.18835 19.5409L4.41577 18.769C4.17055 18.5231 4.12666 18.1407 4.30944 17.8456C4.74919 17.1173 4.80174 16.2191 4.44978 15.4447C4.35746 15.2508 4.27997 15.0523 4.20703 14.8509C3.91256 14.0468 3.2391 13.4406 2.40866 13.2322C2.07565 13.1481 1.84261 12.848 1.84362 12.5047L1.84731 11.4254Z" fill="currentColor" fill-opacity="0.87"/><path d="M9.23452 11.0655C9.72414 11.0673 10.1946 10.8742 10.542 10.5292C10.8894 10.1839 11.0856 9.7148 11.0873 9.22487C11.0889 8.73514 10.8958 8.26459 10.5507 7.91707C10.2055 7.56956 9.73647 7.37353 9.24666 7.3719C8.75704 7.37045 8.28681 7.56358 7.93938 7.90884C7.59195 8.25429 7.39596 8.72344 7.39454 9.21315C7.3931 9.70288 7.58618 10.173 7.93115 10.5203C8.27611 10.8678 8.74492 11.0639 9.23452 11.0655V11.0655Z" fill="currentColor" fill-opacity="0.87"/><path d="M12.916 14.7713C12.9146 15.261 13.1077 15.7313 13.4528 16.0786C13.7982 16.4259 14.2673 16.622 14.7569 16.6234C15.2465 16.625 15.7167 16.4317 16.0642 16.0864C16.4114 15.7412 16.6074 15.2721 16.6088 14.7821C16.6102 14.2924 16.4171 13.822 16.072 13.4747C15.7266 13.1272 15.2576 12.9314 14.7679 12.9298C14.2783 12.9283 13.8081 13.1215 13.4607 13.4669C13.1134 13.8122 12.9174 14.2813 12.916 14.7713V14.7713Z" fill="currentColor" fill-opacity="0.87"/><path d="M8.56722 15.4103C8.74053 15.5836 8.97544 15.6811 9.22047 15.6811C9.46549 15.6811 9.7004 15.5836 9.87351 15.4103L15.43 9.88725H15.4302C15.6087 9.71555 15.7109 9.47954 15.7136 9.23179C15.7165 8.98424 15.6198 8.74597 15.4451 8.57037C15.2705 8.39476 15.0327 8.29664 14.7852 8.29788C14.5375 8.29932 14.301 8.40032 14.1285 8.57779L8.57198 14.0997V14.0999C8.39682 14.2727 8.29791 14.5081 8.29688 14.7541C8.29606 15 8.39332 15.2362 8.56724 15.4102L8.56722 15.4103Z" fill="currentColor" fill-opacity="0.87"/></svg>                            Khuyến mãi                        </a>
                    </li>
                    <li>
                        <a class="{{$data->type == 3 ? 'active': ''}}" href="{{url('tin-tuc/meo-hay')}}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M11.9999 0.000239336C5.38252 0.000239336 0 5.38276 0 12.0002C0 14.5123 0.795991 16.8301 2.11907 18.7586C1.81968 19.356 1.49107 20.0285 1.22092 20.5639C0.660294 21.6733 0.0959795 22.7789 0.0959795 22.7789C-0.0615044 23.0815 -0.00894496 23.4803 0.221535 23.7316C0.45221 23.9829 0.844853 24.0697 1.1598 23.9387L5.52023 22.1422C7.39407 23.3195 9.65079 23.9998 12.0001 23.9998C18.6175 23.9998 24 18.6173 24 11.9999C24 5.38252 18.6175 0 12.0001 0L11.9999 0.000239336ZM11.9999 1.67475C17.7123 1.67475 22.3254 6.28764 22.3254 12.0003C22.3254 17.7129 17.7125 22.3258 11.9999 22.3258C9.8193 22.3258 7.71209 21.659 6.06075 20.5204C5.83086 20.3595 5.51767 20.3254 5.25833 20.4332L2.60724 21.5233C2.88619 20.9882 3.20564 20.3328 3.47933 19.7792C3.5971 19.5467 3.71487 19.3106 3.8194 19.0903C3.96364 18.7728 3.91439 18.4085 3.74095 18.1921C2.44159 16.4645 1.67421 14.3326 1.67421 12.0003C1.67421 6.28789 6.2871 1.6748 11.9997 1.6748L11.9999 1.67475ZM11.9999 3.34925C8.77319 3.34925 6.13949 5.98305 6.13949 9.20967C6.13949 10.4822 6.5586 11.6614 7.24714 12.6196C7.25921 12.6365 7.26972 12.6552 7.28198 12.6719C7.88951 13.6349 8.37209 14.2312 8.37209 15.6281C8.37209 16.0665 8.77096 16.4653 9.20935 16.4653H14.7907C15.2291 16.4653 15.628 16.0665 15.628 15.6281C15.628 14.2314 16.1105 13.6351 16.7181 12.6717C16.7303 12.655 16.7408 12.6363 16.7529 12.6194C17.4412 11.6612 17.8606 10.482 17.8606 9.20947C17.8606 5.98275 15.2268 3.34905 12.0001 3.34905L11.9999 3.34925ZM11.9999 5.02376C14.3217 5.02376 16.1859 6.88803 16.1859 9.20977C16.1859 10.1375 15.8867 10.981 15.375 11.6777C15.3627 11.6946 15.351 11.7121 15.3401 11.73C14.865 12.4894 14.2494 13.4224 14.0496 14.7911H9.95075C9.75083 13.4224 9.13512 12.4896 8.66016 11.73C8.64926 11.7121 8.63758 11.6948 8.62531 11.6777C8.11318 10.9808 7.81397 10.1373 7.81397 9.20957C7.81397 6.88783 9.67825 5.02356 12 5.02356L11.9999 5.02376ZM13.5872 6.68949C13.4274 6.70974 13.274 6.77728 13.1512 6.88143L10.3605 9.11402C10.1238 9.3081 10.0082 9.63882 10.0728 9.93802C10.1372 10.2372 10.379 10.4911 10.6745 10.5703L11.4769 10.7796L10.57 11.6865C10.2285 11.9892 10.2116 12.5858 10.5355 12.9074C10.8592 13.2288 11.4561 13.2076 11.756 12.8638L13.6834 10.9364C13.8917 10.7299 13.9787 10.4091 13.903 10.1257C13.8272 9.8422 13.5919 9.60749 13.3085 9.53234L12.7155 9.37544L14.1981 8.18935C14.4913 7.96938 14.6092 7.54366 14.471 7.20399C14.3324 6.86431 13.9507 6.64202 13.5873 6.68931L13.5872 6.68949ZM9.40119 16.7444C8.96281 16.7672 8.58457 17.1869 8.60735 17.6253C8.63012 18.0637 9.04981 18.4417 9.4884 18.4189H14.5116C14.9539 18.4251 15.3607 18.0241 15.3607 17.5817C15.3607 17.1394 14.9539 16.7382 14.5116 16.7444H9.40119ZM10.5174 18.977C10.079 18.9998 9.70074 19.4195 9.72352 19.8579C9.74649 20.2962 10.1662 20.6743 10.6046 20.6515H13.3953C13.8375 20.6577 14.2444 20.2567 14.2444 19.8142C14.2444 19.372 13.8375 18.9708 13.3953 18.977H10.5174Z" fill="currentColor" fill-opacity="0.87"/></svg>                            Mẹo hay                        </a>
                    </li>
                    <li>
                        <a class="{{$data->type == 4 ? 'active': ''}}" href="{{url('tin-tuc/tin-tuyen-dung')}}">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"> <g clip-path="url(#clip0_1764_7803)"> <path d="M8.42144 1.58573C8.22356 1.5864 8.03389 1.66542 7.89409 1.80537C7.75413 1.94533 7.67511 2.13484 7.67428 2.33273V4.9681H0.752848C0.727067 4.96676 0.70112 4.96676 0.675337 4.9681C0.489847 4.98651 0.317917 5.07357 0.193194 5.21185C0.068304 5.3503 -0.000498707 5.53026 2.72157e-06 5.71658V21.6719C0.000839764 21.8707 0.0805269 22.0611 0.221823 22.2012C0.362951 22.3414 0.553965 22.4197 0.752865 22.4189H23.2529C23.4509 22.4182 23.6404 22.3392 23.7804 22.1992C23.9204 22.0593 23.9992 21.8698 24 21.6719V5.71658C23.9997 5.51837 23.9209 5.32852 23.7809 5.18824C23.6409 5.04795 23.4511 4.96876 23.2529 4.9681H16.3332V2.33272C16.3325 2.13484 16.2535 1.94533 16.1135 1.80537C15.9736 1.66541 15.7841 1.58639 15.5862 1.58572L8.42144 1.58573ZM9.17427 3.08573H14.8314V4.9681H9.17427V3.08573ZM1.49984 6.46356H8.34199C8.36827 6.4669 8.39472 6.46891 8.42118 6.46958H15.5856C15.6136 6.46908 15.6414 6.46707 15.6691 6.46356H22.4997V9.91171L14.6277 12.0122V11.9831C14.6285 11.7832 14.5495 11.5912 14.4081 11.4499C14.2668 11.3086 14.0748 11.2294 13.8749 11.2303H10.1323C9.93237 11.2294 9.74035 11.3086 9.59907 11.4499C9.45761 11.5912 9.37859 11.7832 9.37926 11.9831V12.0139L1.49997 9.91039L1.49984 6.46356ZM1.49984 11.4633L9.37913 13.5668V14.8954C9.37846 15.0952 9.45748 15.2873 9.59894 15.4285C9.74024 15.57 9.93225 15.649 10.1321 15.6484H13.8748C14.0746 15.649 14.2667 15.57 14.4079 15.4285C14.5494 15.2872 14.6284 15.0952 14.6276 14.8954V13.5668L22.4996 11.4691V20.9187H1.49958L1.49984 11.4633ZM10.8791 12.7304H13.1261V12.934H13.1263C13.1228 12.9755 13.1228 13.017 13.1263 13.0585V14.1484H10.8791V13.0511C10.8825 13.0101 10.8825 12.9691 10.8791 12.9281L10.8791 12.7304Z" fill="black" fill-opacity="0.87"/> </g> <defs> <clipPath id="clip0_1764_7803"> <rect width="24" height="24" fill="white"/> </clipPath> </defs> </svg>                            Tin tuyển dụng                        </a>
                    </li>

                </ul>
            </div>
            <div class="main-content">

                <div class="news_detail row-content ">
                    <div id="DivIdToPrint">
                        <div class="news-top">
                            <time>
                                {{$data->created_at->format('d/m/Y')}}<span></span>
                                <p class="hot mb-0">
                                    @if($data->type == 1) Tin mới @elseif($data->type == 2)
                                        Khuyễn mãi @elseif($data->type == 3) Mẹo hay @else Tin tuyển
                                    dụng @endif</p>
                            </time>
                            <div class="share">
                                <span>Chia sẻ:</span>
                                <a onclick="share_click(600, 600, 'fb')">
                                    <svg width="9" height="16" viewBox="0 0 9 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.30769 0.115385V2.65385H6.79808C6.2468 2.65385 5.875 2.76923 5.68269 3C5.49039 3.23077 5.39423 3.57692 5.39423 4.03846V5.85577H8.21154L7.83654 8.70192H5.39423V16H2.45192V8.70192H0V5.85577H2.45192V3.75962C2.45192 2.56731 2.78526 1.64263 3.45192 0.985577C4.11859 0.328526 5.00641 0 6.11539 0C7.05769 0 7.78846 0.0384615 8.30769 0.115385Z" fill="currentColor"></path>
                                    </svg>
                                </a>
                                <a onclick="share_click(600, 600, 'tw')">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M16 3.54036C15.41 3.80104 14.7794 3.97708 14.1149 4.05833C14.793 3.65208 15.3151 3.00885 15.5592 2.24375C14.9252 2.61953 14.2234 2.89375 13.474 3.03932C12.8739 2.39948 12.0195 2 11.0769 2C9.26298 2 7.79487 3.46927 7.79487 5.28047C7.79487 5.53776 7.822 5.78828 7.87963 6.02865C5.15024 5.89323 2.72939 4.58646 1.1121 2.59922C0.830685 3.08333 0.667938 3.6487 0.667938 4.24792C0.667938 5.38542 1.25111 6.39089 2.13266 6.97995C1.59017 6.96641 1.08159 6.81745 0.640814 6.57031V6.61094C0.640814 8.20208 1.77326 9.52578 3.27527 9.82708C3.00064 9.90156 2.70905 9.94219 2.41068 9.94219C2.20047 9.94219 1.99364 9.92188 1.7936 9.88125C2.21064 11.1846 3.42445 12.1326 4.86205 12.1596C3.73978 13.0398 2.32253 13.5646 0.783217 13.5646C0.518754 13.5646 0.257682 13.5477 0 13.5172C1.44776 14.4583 3.17355 15 5.02479 15C11.0701 15 14.3725 9.99974 14.3725 5.66302C14.3725 5.52083 14.3691 5.37865 14.3624 5.23984C15.0032 4.77604 15.5592 4.20052 16 3.54036Z" fill="currentColor"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>

                        <h1 class="news-title">{{$data->title}}</h1>
                        <div class='description'>{!! $data->content !!}</div>
                    </div>
                    <h4 class="title-module-related">
                        <span>Bài viết liên quan</span>
                    </h4>
                    <div class="news-related">
                        @foreach($data_more as $item)
                        <a class="item-related" href="{{url('chi-tiet-tin-tuc/'.$item->slug)}}">
                            <img src="{{$item->image}}" class="img-responsive">
                            <span class="custom-content-3-line">{{$item->title}}</span>
                        </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"
        integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@section('script_page')

@stop
