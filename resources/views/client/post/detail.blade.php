@extends('layouts.app')
@section('content')
<div class="container-fluid bg-light">
    <div class="container">
        <div class="row">
            <div class="col-9 bg-white mt-4 mx-auto">
                <div class="post-title">
                    <h2 class="font-weight-bold">{{ $post->title }}</h2>
                </div>
                <div class="post-title-border"></div>
                <div class="post-content mt-3 ">
                    {!! $post->content !!}
                </div>

                <div class="comment">

                </div>
            </div>
            <div class="col-md-3 mt-4 p-0 ads-right">
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
        <div class="row bootstrap snippets">
            <div class="col-9 bg-white mt-4 ">
                <div class="comment-wrapper">
                    <div class="panel panel-info">
                        <h2>
                            Bình luận
                        </h2>
                        <div class="panel-body">
                            <form action="" method="POST">
                                @csrf
                                <input type="hidden" name="post_id" id="post_id" value="{{ $post->id }}">
                                <textarea class="form-control" name="content" id="content"
                                    placeholder="Nhập bình luận..." rows="3"></textarea>
                                <br>
                                @if (Auth::check())
                                <button type="button" id="btnPostComment" class="btn btn-info pull-right">Đăng</button>
                                @else
                                <button type="submit" class="btn btn-info pull-right">Đăng nhập để bình luận</button>
                                @endif
                            </form>
                            <div class="clearfix"></div>
                            <hr>
                            <ul class="media-list">
                                @foreach ($post->comments as $comment)
                                <li class="media" id="{{ $comment->id }}">
                                    <a class="pull-left">
                                        <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                                    </a>
                                    <div class="media-body ml-3">
                                        <strong class="text-success">{{ $comment->user->name }}</strong>
                                        <p>{{ $comment->content }}</p>
                                        @if (Auth::user()->id === $comment->user_id)
                                        <button type="button" data-id='{{ $comment->id }}' class="btn btn-danger pull-right btn-delete-comment">Xoá</button>
                                        @endif
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@section('script')
<script>
    document.getElementById("genk-title").textContent = "{{ $post->title }}";
    $(function () {

        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        //     }
        // })

        $('#btnPostComment').click(function (e) {
            e.preventDefault();
            var post_id = $('#post_id').val();
            var content = $('#content').val();

            $.ajax({
                url: '{{ route('post.comment', [$post->slug, $post->id]) }}',
                type: 'POST',
                dataType: 'json',
                data: {
                    post_id: post_id,
                    content: content,
                    _token: '{{csrf_token()}}'
                },
                success: function (res) {
                    if (res.status) {

                        var html =
                            '<li class="media"> <a class="pull-left"> <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle"></a>';
                        html += '<div class="media-body ml-3">';
                        html += '<strong class="text-success">' + res.user.name + '</strong>';
                        html += '<p>' + res.comment.content + '</p>';
                        html += '<button type="button" data-id="' + res.comment.id +'" class="btn btn-danger pull-right btn-delete-comment">Xoá</button>'
                        html += '</div></li>';

                        $('.media-list').prepend(html);
                    }
                }
            })
        })

        $('.btn-delete-comment').click(function(){
            var id = $(this).data('id');

            $.ajax({
                url: '{{ route('remove.comment') }}',
                type: 'POST',
                data: {
                    id: id,
                    _token: '{{csrf_token()}}' 
                },
                success: function(res){
                    if(res.status){
                        $('li#' + id + '').remove();
                    }
                }
            })
        })
    })

</script>
@endsection

@endsection
