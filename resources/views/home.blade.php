@extends('layouts.app')
@section('content')
<div class="container-fluid p-0">
  <div class="banner-ads">
    <iframe
      src="https://adi.admicro.vn/adt/banners/nam2015/4043/min_html5/oanhdoankim/2020_06_11/980x90_t6_19_2020/980x90_t6_19_2020/980x90_t6_19_2020.html?url=%2F%2Flg1.logging.admicro.vn%2Fadn%3Fdmn%3Dhttps%253A%252F%252Fgenk.vn%252F%26rid%3D6f995c86-a648-4c90-8637-68697e2263af-5ee72e20%26ctr%3D0.1326347846770659%26sspr%3D0.0685%26lsn%3D1592208921271%26ce%3D1%26lc%3D4%26cr%3D1591502688%26ui%3D1715026883075569895%26bi%3D0%26cmpg%3D46876%26items%3D183181%26zid%3D511013%26pr%3D18394953451%26cid%3D-1%26tp%3D11%26tpn%3D4%26alg%3D4%26sspz%3D2013166%26adc_cpa%3D1%26cov%3D1%26re%3Dhttp%253A%252F%252Fthematrixone.vn%252F%253Futm_source%253Dadmicro%2526utm_medium%253Dadx_pc&amp;admid=adnzone_511013_0_183181"
      width="980" height="90" frameborder="0" scrolling="no"></iframe>
  </div>
</div>
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-9 col-xs-12">
      <section id="featured-news" class="mb-3">
        <div class="row featured-news-item mb-4">
          <div class="col-lg-8">
            <div class="card border-0">
              <a href="{{ route('get.detail.post', [$posts[0]->slug, $posts[0]->id]) }}">
              <img class="card-img-top rounded-0"
                src="{{ asset('/images/upload/thumbnail/' . $posts[0]->thumbnail) }}"
                alt="Card image cap"></a>
              <div class="card-body px-0">
              <h4 class="card-title"><a href="{{ route('get.detail.post', [$posts[0]->slug, $posts[0]->id]) }}" class="text-dark text-decoration-none"><strong>{{ $posts[0]->title }}</strong></a></h4>
                <p class="card-text">{{ $posts[0]->description }}</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="card border-0 featured-news-right">
              <a href="{{ route('get.detail.post', [$posts[1]->slug, $posts[1]->id]) }}">
              <img class="card-img-top rounded-0"
                style="object-fit: cover; height: 300px;"
                src="{{asset('/images/upload/thumbnail/'.$posts[1]->thumbnail)}}"
                alt="Card image cap"></a>
              <div class="card-body">
                <h4 class="card-title"><a href="{{ route('get.detail.post', [$posts[1]->slug, $posts[1]->id]) }}" class="text-dark text-decoration-none"><strong>{{ $posts[1]->title }}</strong></a></h4>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section id="home-slide">

      </section>
      <section id="hot-most-news">
        <div class="container p-0">
          <div class="row">
            <div class="col-md-7">
              <div class="hot-news">
                <div class="tab">
                  TIN NỔI BẬT
                </div>
                <div class="first-item pt-3">
                  <div class="card border-0" style="width: 28rem">
                  <a href="{{ route('get.detail.post', [$hotPosts[0]->slug, $hotPosts[0]->id]) }}"><img class="card-img-top pb-2"
                        src="{{ asset('/images/upload/thumbnail/' . $hotPosts[0]->thumbnail) }}"
                        alt="Card image cap"></a>
                    <div class="card-body p-0">
                    <h4 class="card-title news-title"><a href="{{ route('get.detail.post', [$hotPosts[0]->slug, $hotPosts[0]->id]) }}">{{ $hotPosts[0]->title }}</a></h4>
                    </div>
                  </div>
                </div>
                <div class="hot-news-item">
                  <a href="{{ route('get.detail.post', [$hotPosts[1]->slug, $hotPosts[1]->id]) }}">{{ $hotPosts[1]->title }}</a>
                </div>
                <div class="hot-news-item">
                  <a href="{{ route('get.detail.post', [$hotPosts[2]->slug, $hotPosts[2]->id]) }}">{{ $hotPosts[2]->title }}</a>
                </div>
              </div>
            </div>
            <div class="col-md-5">
              <div class="most-view-list">
                {{-- <div class="tab">
                  TIN NỔI BẬT
                </div> --}}
                @for ($i = 3; $i < count($hotPosts); $i++)
                  <div class="most-view-item">
                  <a href="{{ route('get.detail.post', [$hotPosts[$i]->slug, $hotPosts[$i]->id]) }}">{{ $hotPosts[$i]->title }}</a>
                  </div>    
                @endfor
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="news">
        @for ($i = 2; $i < count($posts); $i++)
            
        <div class="news-item">
          <div class="news-thumb">
            <a href="{{ route('get.detail.post', [$posts[$i]->slug, $posts[$i]->id]) }}"><img
                src="{{ asset('/images/upload/thumbnail/' . $posts[$i]->thumbnail) }}" class="news-thumbnail-img"></a>
              </div>
              <div class="news-info">
                <div class="news-title">
                  <h4><a href="{{ route('get.detail.post', [$posts[$i]->slug, $posts[$i]->id]) }}">{{ $posts[$i]->title }}</a></h4>
            </div>
            <div class="news-category"></div>
          <div class="news-desc">{{ $posts[$i]->description }}</div>
            </div>
          </div>
          
          @endfor
      </section>

    </div>
    <div class="col-md-3 p-0 ads-right">
      <button type="button" class="btn btn-danger mb-3 w-100" id="btnReceiveNews" style="font-weight: bold"><i
          class="far fa-bell"></i> ĐĂNG KÝ NHẬN TIN </button>
      <iframe
        src="https://adi.admicro.vn/adt/banners/nam2015/4043/min_html5/anhnguyendoanle/2020_06_10/300x250_T6_54-1/300x250_T6_54/300x250_T6_54.html?url=%2F%2Flg1.logging.admicro.vn%2Fadn%3Fdmn%3Dhttps%253A%252F%252Fgenk.vn%252F%26rid%3Dcae59737-84e2-4be1-8e26-0c3655a9a25b-5ee751f4%26ctr%3D0.5205622292123735%26sspr%3D0.1346%26lsn%3D1592218092634%26ce%3D1%26lc%3D4%26cr%3D1591502688%26ui%3D1715026883075569895%26bi%3D0%26cmpg%3D47041%26items%3D183621%26zid%3D511015%26pr%3D1843314400px%26cid%3D-1%26tp%3D11%26tpn%3D4%26alg%3D4%26sspz%3D2013168%26adc_cpa%3D1%26cov%3D1%26re%3Dhttps%253A%252F%252Fwww.samsung.com%252Fvn%252Fsmartphones%252Fgalaxy-s20%252Fmua-o-dau%252F%253Fcid%253DVN_Paid_DIS_ADMIC_HUBBLE_SS_S20-White-version-PC_PIC_BUY-ALL-CMO-NA-MO-GEN_1X1_20200615_NA_I_02_NA_NA_IM_SMART_NA&amp;admid=adnzone_511015_0_183621"
        width="100%" height="250" frameborder="0" scrolling="no"></iframe>
      <iframe
        src="https://adi.admicro.vn/adt/banners/nam2015/4043/min_html5/thuongnguyenhoai/2020_06_12/300x250_SA-1/300x250_SA/300x250_SA.html?url=%2F%2Flg1.logging.admicro.vn%2Fadn%3Fdmn%3Dhttps%253A%252F%252Fgenk.vn%252F%26rid%3D9aeaa26d-5814-4e1f-845c-972955be8dfc-5ee751f4%26ctr%3D0.21651582210324705%26sspr%3D0.0783%26lsn%3D1592218092634%26ce%3D1%26lc%3D4%26cr%3D1591502688%26ui%3D1715026883075569895%26bi%3D0%26cmpg%3D47099%26items%3D183895%26zid%3D511016%26pr%3D18461686800%26cid%3D-1%26tp%3D11%26tpn%3D4%26alg%3D4%26sspz%3D2013169%26adc_cpa%3D1%26cov%3D1%26re%3Dhttps%253A%252F%252Fhafelehome.com.vn%252F%253Futm_source%253Dada_gg_gdn%2526utm_medium%253Dcpc%2526utm_campaign%253DJune2020_Product-Branding_ADX_CPC_Admicro%2526utm_term%253DHTML5-pc%2526utm_content%253DHA%2526utm_adgroupid%253D%257Badgroupid%257D&amp;admid=adnzone_511016_0_183895"
        width="100%" height="250" frameborder="0" scrolling="no"></iframe>
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

{{-- <script src="{{ asset('js/app.js') }}"></script> --}}
@endsection
