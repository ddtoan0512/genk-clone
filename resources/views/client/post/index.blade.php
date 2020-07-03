@extends('layouts.app')

@section('content')

<div class="container-fluid p-0">
    <div class="banner-ads">
        <iframe id="demo_iframe"
            src="//adi.admicro.vn/adt/banners/nam2015/4043/min_html5/luanlethanh/2020_06_26/1160x250-1/1160x250/1160x250_1160_250.html?url=%2F%2Flg1.logging.admicro.vn%2Fadmt%3Fdmn%3Dhttps%253A%252F%252Fgenk.vn%252Fmobile.chn%26rid%3Dcd50f1df-e127-4bd5-9ca0-0c16dd2055cb-5efd90c4%26ctr%3D0.889679715302491%26sspr%3D1.3509%26lsn%3D1593675973074%26ce%3D1%26lc%3D4%26cr%3D1593674511%26ui%3D1836745111984329168%26bi%3D0%26cmpg%3D24132%26items%3D75831%26zid%3D511336%26pr%3D7711276742%26cid%3D-1%26pt%3Dadmt%26tp%3D12%26tpn%3D4%26sspz%3D2013301%26cov%3D1%26re%3Dhttps%253A%252F%252Fwww.sony.com.vn%252Fmicrosite%252FPromotion%252F%253Fcid%253Dscp%253Aa8htvccpm%253Adsp%253Aadmicro%253Avn%253Avideo%2526utm_source%253DAdmicro%2526utm_medium%253DCPM%2526utm_campaign%253DSony_Bravia-NLU_Jun.Aug%2526utm_term%253DA8HTVC%2526utm_content%253DMC2020&amp;admid=adnzone_511336_0_75831"
            width="1060" frameborder="0" scrolling="no" height="250"></iframe>
    </div>
</div>
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-9 col-xs-12">
            <div class="category-title">
                <span>{{ $category->name }}</span>
            </div>
            <section id="featured-news" class="mb-3">
                <div class="row featured-news-item mb-4">
                    <div class="col-lg-8">
                        <div class="card border-0">
                            <a href="{{ route('get.detail.post', [$posts[0]->slug, $posts[0]->id]) }}"><img
                                    class="card-img-top rounded-0"
                                    src="{{ asset('images/upload/thumbnail/'.$posts[0]->thumbnail)  }}"
                                    alt="Card image cap"></a>
                            <div class="card-body px-0">
                                <h4 class="card-title"><a
                                        href="{{ route('get.detail.post', [$posts[0]->slug, $posts[0]->id]) }}"
                                        class="text-dark text-decoration-none"><strong>{{ $posts[0]->title }}</strong></a>
                                </h4>
                                <p class="card-text">{{ $posts[0]->description  }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0 featured-news-right">
                            <img class="card-img-top rounded-0"
                                src="https://genk.mediacdn.vn/zoom/222_289/139269124445442048/2020/6/15/photo1592206901297-15922069014211396764907.jpg"
                                alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><a href="#" class="text-dark text-decoration-none"><strong>Vsmart
                                            Max Pro" lộ
                                            diện với chip Snapdragon 730, RAM 8GB</strong></a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="home-slide">

            </section>
            <section id="news">
                <div class="news-item">
                    <div class="news-thumb">
                        <a href="#"><img
                                src="https://genk.mediacdn.vn/zoom/250_155/139269124445442048/2020/6/16/photo1592299702395-15922997024781439654173.jpg"
                                alt=""></a>
                    </div>
                    <div class="news-info">
                        <div class="news-title">
                            <h4><a href="#">Những bức ảnh có thể trả lời cho câu hỏi: Chuyện gì sẽ xảy ra nếu...</a>
                            </h4>
                        </div>
                        <div class="news-category"><a href="#">Khám phá -</a><span class="text-muted"> 30 phút
                                trước</span></div>
                        <div class="news-desc">Chuyện gì sẽ xảy ra nếu bạn để chai nước ngọt ngoài nắng quá lâu, khử
                            trùng tiền bằng
                            lò vi sóng, hay...
                        </div>
                    </div>
                </div>

                <div class="news-item">
                    <div class="news-thumb">
                        <a href="#"><img
                                src="https://genk.mediacdn.vn/zoom/250_155/139269124445442048/2020/6/16/photo1592258804276-15922588044231637042098.jpg"
                                alt=""></a>
                    </div>
                    <div class="news-info">
                        <div class="news-title">
                            <h4><a href="#">Xiaomi ra mắt máy nước nóng bỏ túi Morfun: Kích thước nhỏ gọn, làm nóng
                                    nhanh, giá 980.000
                                    đồng</a></h4>
                        </div>
                        <div class="news-category"><a href="#">Đồ chơi số</a> - <span class="text-muted">30 phút
                                trước</span>
                        </div>
                        <div class="news-desc">Với kích thước nhỏ gọn, máy nước nóng bỏ túi Morfun của Xiaomi có thể
                            đựng vừa trong
                            túi xách, hoàn...
                        </div>
                    </div>
                </div>

                <div class="news-item">
                    <div class="news-thumb">
                        <a href="#"><img
                                src="https://genk.mediacdn.vn/zoom/250_155/139269124445442048/2020/6/16/photo1592296749560-1592296749689321578425.png"
                                alt=""></a>
                    </div>
                    <div class="news-info">
                        <div class="news-title">
                            <h4><a href="#">AirPods phát nổ trong khi đang gọi điện thoại khiến người dùng phải nhập
                                    viện</a></h4>
                        </div>
                        <div class="news-category"><a href="#">Internet</a> - <span class="text-muted">30 phút
                                trước</span></div>
                        <div class="news-desc">Anh chàng kém may mắn này hiện đang phải đối mặt với chứng giảm thính
                            lực do ảnh
                            hưởng từ vụ nổ.
                        </div>
                    </div>
                </div>

                <div class="news-item">
                    <div class="news-thumb">
                        <a href="#"><img
                                src="https://genk.mediacdn.vn/zoom/250_155/139269124445442048/2020/6/16/photo1592298105370-1592298105497188379950.jpg"
                                alt=""></a>
                    </div>
                    <div class="news-info">
                        <div class="news-title">
                            <h4><a href="#">HTC bất ngờ tái xuất với U20 5G và Desire 20 Pro: Hỗ trợ 5G, 4 camera,
                                    pin khủng</a></h4>
                        </div>
                        <div class="news-category"><a href="#">Mobile</a> - <span class="text-muted">30 phút
                                trước</span></div>
                        <div class="news-desc">Có vẻ như mảng kinh doanh smartphone của HTC hiện giờ chỉ gói gọn tại
                            thị trường quê
                            nhà.
                        </div>
                    </div>
                </div>

                <div class="news-item">
                    <div class="news-thumb">
                        <a href="#"><img
                                src="https://genk.mediacdn.vn/zoom/250_155/139269124445442048/2020/6/16/photo1592299702395-15922997024781439654173.jpg"
                                alt=""></a>
                    </div>
                    <div class="news-info">
                        <div class="news-title">
                            <h4><a href="#">Những bức ảnh có thể trả lời cho câu hỏi: Chuyện gì sẽ xảy ra
                                    nếu...?</a></h4>
                        </div>
                        <div class="news-category"><a href="#">Khám phá</a> - <span class="text-muted">30 phút
                                trước</span></div>
                        <div class="news-desc">Chuyện gì sẽ xảy ra nếu bạn để chai nước ngọt ngoài nắng quá lâu, khử
                            trùng tiền bằng
                            lò vi sóng, hay...
                        </div>
                    </div>
                </div>

                <div class="news-item">
                    <div class="news-thumb">
                        <a href="#"><img
                                src="https://genk.mediacdn.vn/zoom/250_155/139269124445442048/2020/6/16/photo1592258804276-15922588044231637042098.jpg"
                                alt=""></a>
                    </div>
                    <div class="news-info">
                        <div class="news-title">
                            <h4><a href="#">Xiaomi ra mắt máy nước nóng bỏ túi Morfun: Kích thước nhỏ gọn, làm nóng
                                    nhanh, giá 980.000
                                    đồng</a></h4>
                        </div>
                        <div class="news-category"><a href="#">Đồ chơi số</a> - <span class="text-muted">30 phút
                                trước</span>
                        </div>
                        <div class="news-desc">Với kích thước nhỏ gọn, máy nước nóng bỏ túi Morfun của Xiaomi có thể
                            đựng vừa trong
                            túi xách, hoàn...
                        </div>
                    </div>
                </div>

                <div class="news-item">
                    <div class="news-thumb">
                        <a href="#"><img
                                src="https://genk.mediacdn.vn/zoom/250_155/139269124445442048/2020/6/16/photo1592296749560-1592296749689321578425.png"
                                alt=""></a>
                    </div>
                    <div class="news-info">
                        <div class="news-title">
                            <h4><a href="#">AirPods phát nổ trong khi đang gọi điện thoại khiến người dùng phải nhập
                                    viện</a></h4>
                        </div>
                        <div class="news-category"><a href="#">Internet</a> - <span class="text-muted">30 phút
                                trước</span></div>
                        <div class="news-desc">Anh chàng kém may mắn này hiện đang phải đối mặt với chứng giảm thính
                            lực do ảnh
                            hưởng từ vụ nổ.
                        </div>
                    </div>
                </div>

                <div class="news-item">
                    <div class="news-thumb">
                        <a href="#"><img
                                src="https://genk.mediacdn.vn/zoom/250_155/139269124445442048/2020/6/16/photo1592298105370-1592298105497188379950.jpg"
                                alt=""></a>
                    </div>
                    <div class="news-info">
                        <div class="news-title">
                            <h4><a href="#">HTC bất ngờ tái xuất với U20 5G và Desire 20 Pro: Hỗ trợ 5G, 4 camera,
                                    pin khủng</a></h4>
                        </div>
                        <div class="news-category"><a href="#">Mobile</a> - <span class="text-muted">30 phút
                                trước</span></div>
                        <div class="news-desc">Có vẻ như mảng kinh doanh smartphone của HTC hiện giờ chỉ gói gọn tại
                            thị trường quê
                            nhà.
                        </div>
                    </div>
                </div>
            </section>

        </div>
        <div class="col-md-3 p-0 ads-right">
            <iframe
                src="https://adi.admicro.vn/adt/banners/nam2015/4043/min_html5/thuongphamthuy/2020_06_15/300x600_t6-60-7/300x600_t6-60/300x600_t6-60.html?url=%2F%2Flg1.logging.admicro.vn%2Fadn%3Fdmn%3Dhttps%253A%252F%252Fgenk.vn%252Fmobile.chn%26rid%3D76a6b8a0-b91e-44ef-8292-a78df5fe35ed-5efd90c4%26ctr%3D0.740923685953021%26sspr%3D0.3832%26lsn%3D1593675973074%26ce%3D1%26lc%3D4%26cr%3D1593674511%26ui%3D1836745111984329168%26bi%3D0%26cmpg%3D47308%26items%3D184750%26zid%3D511029%26pr%3D18553483621%26cid%3D-1%26tp%3D11%26tpn%3D4%26alg%3D4%26sspz%3D2013302%26adc_cpa%3D1%26cov%3D1%26re%3Dhttp%253A%252F%252Fkienhungluxury.com.vn%252F&amp;admid=adnzone_511029_0_184750&amp;vast=https%3A%2F%2Fsspapi.admicro.vn%2Fssp_request%2Fvideo%3Fu%3Dgenk.vn%252Fmobile.chn%26z%3D511029%26p%3D1%26w%3D650%26h%3D300%26%26lsn%3D922508f56e025c4cbfaa9c14b9e80343%26dgid%3Dc6686afcef28a7d4b01381301d76a946%26l%3D4%26loc%3D4%26i%3D1836745111984329168%26isdetail%3D0%26pid%3D%26tags%3D5%26adstype%3D%26vtype%3D8%26vid%3D%26bannerid%3D184750"
                width="300" height="600" frameborder="0" scrolling="no"></iframe>
            <iframe
                src="https://adi.admicro.vn/adt/banners/nam2015/4043/min_html5/oanhdoankim/2020_06_25/300x600_t6_110_2020bo1/300x600_t6_110_2020bo1/300x600_t6_110_2020bo1.html?url=%2F%2Flg1.logging.admicro.vn%2Fadn%3Fdmn%3Dhttps%253A%252F%252Fgenk.vn%252Fmobile.chn%26rid%3D8a4fbb01-2e8e-4fcf-b4fd-a0b3663a4419-5efd90c4%26ctr%3D0.7499062339775264%26sspr%3D0.252%26lsn%3D1593675973074%26ce%3D1%26lc%3D4%26cr%3D1593674511%26ui%3D1836745111984329168%26bi%3D0%26cmpg%3D47355%26items%3D184927%26zid%3D511032%26pr%3D18565953452%26cid%3D-1%26tp%3D11%26tpn%3D4%26alg%3D4%26sspz%3D2013306%26cov%3D1%26re%3Dhttps%253A%252F%252Fnattoenzym.dhgpharma.com.vn%252F%253Futm_source%253DAdmicro%2526utm_medium%253DADX_PC%2526utm_campaign%253DNattoEnzym2020%2526utm_content%253DNorth&amp;admid=adnzone_511032_0_184927&amp;vast=https%3A%2F%2Fsspapi.admicro.vn%2Fssp_request%2Fvideo%3Fu%3Dgenk.vn%252Fmobile.chn%26z%3D511032%26p%3D1%26w%3D650%26h%3D300%26%26lsn%3D922508f56e025c4cbfaa9c14b9e80343%26dgid%3Dc6686afcef28a7d4b01381301d76a946%26l%3D4%26loc%3D4%26i%3D1836745111984329168%26isdetail%3D0%26pid%3D%26tags%3D5%26adstype%3D%26vtype%3D8%26vid%3D%26bannerid%3D184927"
                width="300" height="600" frameborder="0" scrolling="no"></iframe>
            <iframe
                src="https://adi.admicro.vn/adt/banners/nam2015/4043/min_html5/nguyentuquynh02/2020_05_06/300x250_t5_12-2/300x250_t5_12/300x250_t5_12.html?url=%2F%2Flg1.logging.admicro.vn%2Fadn%3Fdmn%3Dhttps%253A%252F%252Fgenk.vn%252F%26rid%3D2dd7a07a-fe86-430e-93d4-68c7b02b0c85-5ee86c68%26ctr%3D0.32599837868474424%26sspr%3D0.084%26lsn%3D1592290402648%26ce%3D1%26lc%3D4%26cr%3D1591502688%26ui%3D1715026883075569895%26bi%3D0%26cmpg%3D45993%26items%3D179111%26zid%3D511016%26pr%3D17981834490%26cid%3D-1%26tp%3D11%26tpn%3D4%26alg%3D10%26sspz%3D2013169%26adc_cpa%3D1%26cov%3D1%26re%3Dhttps%253A%252F%252Fwww.viethomedecor.vn%252Fthiet-ke-noi-that-dep%252F%253Futm_source%253Dadmicro_adx%2526utm_campaign%253Dadx%2526utm_content%253Dgenk.vn&amp;admid=adnzone_511016_0_179111"
                width="100%" height="250" frameborder="0" scrolling="no"></iframe>
            <iframe
                src="https://adi.admicro.vn/adt/banners/nam2015/4043/min_html5/thuongnguyenhoai/2020_06_02/300x600_terra-1/300x600_terra/300x600_terra.html?url=%2F%2Flg1.logging.admicro.vn%2Fadn%3Fdmn%3Dhttps%253A%252F%252Fgenk.vn%252F%26rid%3D208ccb0d-dff7-4f92-adf1-10611c47f295-5ee73186%26ctr%3D0.17418568313587457%26sspr%3D0.1081%26lsn%3D1592209789447%26ce%3D1%26lc%3D4%26cr%3D1591502688%26ui%3D1715026883075569895%26bi%3D0%26cmpg%3D46809%26items%3D182511%26zid%3D511017%26pr%3D18325316546%26cid%3D-1%26tp%3D11%26tpn%3D4%26alg%3D4%26sspz%3D2013170%26adc_cpa%3D1%26cov%3D1%26re%3Dhttp%253A%252F%252Fterravanphu.vn%252Fan-hung%252Fmo-ban-toa-view-ho-v1%252F%253Futm_source%253Dadmicro_adx%2526utm_campaign%253Dadx%2526utm_content%253Dgenk.vn&amp;admid=adnzone_511017_0_182511"
                width="100%" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
    </div>
</div>

<script src="{{ asset('js/carouselCustom.js') }}"></script>


@endsection
