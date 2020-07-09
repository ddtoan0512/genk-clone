<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('posts')->truncate();

        $titles = [
            'Trải nghiệm chèo thuyền SUP - "nhún nhảy" mặt nước Hồ Tây giữa ngày Hà Nội 39 độ',
            'Smartphone Vsmart được cập nhật VOS 3.0 chính thức: Giao diện lột xác, thêm nhiều tính năng mới',
            'Gojek xóa sổ thương hiệu GoViet, hợp nhất với công ty mẹ',
            'Người dùng tức điên với Microsoft, vì bị ép buộc cài đặt trình duyệt Edge thông qua cập nhật tự động của Windows 10',
            'Phát hiện lỗ đen siêu khổng lồ nặng gấp 34 tỷ lần Mặt Trời, háu ăn đến mức mỗi ngày đều "nuốt chửng" một ngôi sao',
            '"Dở khóc dở cười" với loạt tin nhắn lầy lội của các tài xế công nghệ: Người xin phép hủy chuyến vì game, kẻ bận hóng hớt ẩu đả trên đường',
            'Lasso, ứng dụng nhái TikTok của Facebook, sắp đóng cửa',
            'Samsung Galaxy Watch 3 sẽ có giá bán khá đắt',
            'Hacker lợi dụng lỗ hổng đã được vá từ nhiều năm trước trong Microsoft Office để phá đám doanh nghiệp',
            'Facebook sẽ tuyệt chủng như loài khủng long',
            'Vì sao Xiaomi tự tin tuyên bố chỉ lấy lãi 5% trên mỗi sản phẩm - Điều không hãng smartphone nào dám công bố',
            'Bạn có thực sự biết cách dùng tủ lạnh không? Trả lời những câu hỏi này để biết sự thật',
            'Sau các ứng dụng Trung Quốc, đến lượt Xiaomi và Vivo trở thành nạn nhân của phong trào tẩy chay tại Ấn Độ, nhờ đó Samsung hưởng lợi',
            'Thủ tướng Ấn Độ "nghỉ chơi" mạng xã hội Weibo của Trung Quốc',
            'Tại sao kích thước cảm biến camera trên smartphone lại quan trọng hơn số "chấm"?',
            'Những món đồ kỳ lạ mà người sở hữu phải mang lên mạng để hỏi cách dùng',
            'Ngoài kỹ năng "bắn chưởng" để săn mồi, sinh vật nhỏ bé này còn sở hữu đôi mắt nhanh nhất hành tinh',
            'CEO Mark Zuckerberg phản pháo lại chiến dịch tẩy chay Facebook: "Chúng tôi sẽ không thay đổi"',
            'CEO Airbnb: ‘Chúng tôi dành 12 năm để xây dựng công ty nhưng mất gần như tất cả chỉ trong 6 tuần’',
            'Thêm một ứng dụng gọi xe công nghệ ‘Made in Vietnam’ gia nhập thị trường',
            'Điện lực Đà Nẵng phát triển hệ thống tra cứu chỉ số điện theo ngày, khách hàng có thể tự theo dõi, kiểm tra tiền điện của mình',
            'Hàng trăm con voi gục chết bí ẩn, thảm họa bảo tồn chưa từng thấy khiến khoa học hoảng loạn không hiểu tại sao',
            'Đây là Galaxy Z Flip 5G phiên bản màu Đồng Huyền Bí',
            'Bằng chứng cho thấy Apple vẫn chưa "đoạn tuyệt" hoàn toàn với Intel',
            'Samsung Galaxy Watch 3 sẽ có giá bán khá đắt',
            'Hacker lợi dụng lỗ hổng đã được vá từ nhiều năm trước trong Microsoft Office để phá đám doanh nghiệp',
            'Facebook sẽ tuyệt chủng như loài khủng long',
            'Vì sao Xiaomi tự tin tuyên bố chỉ lấy lãi 5% trên mỗi sản phẩm - Điều không hãng smartphone nào dám công bố',
            'Bạn có thực sự biết cách dùng tủ lạnh không? Trả lời những câu hỏi này để biết sự thật',
            'Sau các ứng dụng Trung Quốc, đến lượt Xiaomi và Vivo trở thành nạn nhân của phong trào tẩy chay tại Ấn Độ, nhờ đó Samsung hưởng lợi',
            'Thủ tướng Ấn Độ "nghỉ chơi" mạng xã hội Weibo của Trung Quốc',
            'Tại sao kích thước cảm biến camera trên smartphone lại quan trọng hơn số "chấm"?',
            'CEO Airbnb: ‘Chúng tôi dành 12 năm để xây dựng công ty nhưng mất gần như tất cả chỉ trong 6 tuần’',
            'Thêm một ứng dụng gọi xe công nghệ ‘Made in Vietnam’ gia nhập thị trường',
            'Điện lực Đà Nẵng phát triển hệ thống tra cứu chỉ số điện theo ngày, khách hàng có thể tự theo dõi, kiểm tra tiền điện của mình',
            'Hàng trăm con voi gục chết bí ẩn, thảm họa bảo tồn chưa từng thấy khiến khoa học hoảng loạn không hiểu tại sao',
            'Đây là Galaxy Z Flip 5G phiên bản màu Đồng Huyền Bí',
            'Bằng chứng cho thấy Apple vẫn chưa "đoạn tuyệt" hoàn toàn với Intel',
            'Samsung Galaxy Watch 3 sẽ có giá bán khá đắt',
            'Người dùng tức điên với Microsoft, vì bị ép buộc cài đặt trình duyệt Edge thông qua cập nhật tự động của Windows 10',
            'Phát hiện lỗ đen siêu khổng lồ nặng gấp 34 tỷ lần Mặt Trời, háu ăn đến mức mỗi ngày đều "nuốt chửng" một ngôi sao',
            '"Dở khóc dở cười" với loạt tin nhắn lầy lội của các tài xế công nghệ: Người xin phép hủy chuyến vì game, kẻ bận hóng hớt ẩu đả trên đường',
            'Lasso, ứng dụng nhái TikTok của Facebook, sắp đóng cửa',
            'Samsung Galaxy Watch 3 sẽ có giá bán khá đắt',
            'Hacker lợi dụng lỗ hổng đã được vá từ nhiều năm trước trong Microsoft Office để phá đám doanh nghiệp',
            'Facebook sẽ tuyệt chủng như loài khủng long',
            'Vì sao Xiaomi tự tin tuyên bố chỉ lấy lãi 5% trên mỗi sản phẩm - Điều không hãng smartphone nào dám công bố',
        ];

        foreach($titles as $title){
            \App\Post::create([
                'title'       => $title,
                'slug'        => Str::slug($title, '-'),
                'thumbnail'   => '1593764586.jpg',
                'description' => 'Nắng nóng thế này,không mua điều hòa Nhật thì nên chọn hãng nào?',
                'user_id'     => 1,
                'category_id' => 1,
                'hot'         => 0,
                'status'      => 1,
                'content'     => '<h2><span style="font-size:20px"><strong>Ai cũng m&ecirc; h&agrave;ng Nhật rồi, nhưng ngo&agrave;i những Daikin, Mitsubishi hay Panasonic ra th&igrave; c&ograve;n thương hiệu điều h&ograve;a n&agrave;o đ&aacute;ng c&acirc;n nhắc nữa?</strong></span></h2>
    
                <ul>
                    <li><a href="https://genk.vn/may-dieu-hoa-nao-dang-duoc-cac-tech-blogger-danh-gia-cao-mua-he-nay-20200602194720483.chn" title="Máy điều hòa nào đang được các Tech blogger đánh giá cao mùa hè này?">M&aacute;y điều h&ograve;a n&agrave;o đang được c&aacute;c Tech blogger đ&aacute;nh gi&aacute; cao m&ugrave;a h&egrave; n&agrave;y?</a></li>
                    <li><a href="https://genk.vn/luu-y-can-thuoc-nam-long-de-su-dung-dieu-hoa-an-toan-sau-mua-dich-20200530213413687.chn" title="Lưu ý cần thuộc nằm lòng để sử dụng điều hòa an toàn sau mùa dịch">Lưu &yacute; cần thuộc nằm l&ograve;ng để sử dụng điều h&ograve;a an to&agrave;n sau m&ugrave;a dịch</a></li>
                    <li><a href="https://genk.vn/loat-san-pham-gan-mac-dieu-hoa-nguoi-tieu-dung-de-dang-bi-moc-tui-trong-nhung-ngay-nang-nong-gay-gat-20200509111256732.chn" title="Loạt sản phẩm gán mác &quot;điều hòa&quot;, người tiêu dùng dễ dàng bị móc túi trong những ngày nắng nóng gay gắt">Loạt sản phẩm g&aacute;n m&aacute;c &quot;điều h&ograve;a&quot;, người ti&ecirc;u d&ugrave;ng dễ d&agrave;ng bị m&oacute;c t&uacute;i trong những ng&agrave;y nắng n&oacute;ng gay gắt</a></li>
                </ul>
                
                <p><strong>Electrolux</strong></p>
                
                <p>Thương hiệu đến từ Thụy Điển l&agrave; một c&aacute;i t&ecirc;n quen thuộc với người ti&ecirc;u d&ugrave;ng Việt. Nhắc đến Electrolux l&agrave; người ta nghĩ ngay đến m&aacute;y h&uacute;t bụi, m&aacute;y giặt, b&agrave;n ủi, nồi cơm điện hay l&ograve; vi s&oacute;ng&hellip;</p>
                
                <p>&nbsp;</p>
                
                <p style="text-align:center"><a href="https://genk.mediacdn.vn/139269124445442048/2020/6/15/ubtrn45n-15921546374042069555395.jpg" target="_blank" title=""><img alt="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 1." id="img_196673602985828352" src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2020/6/15/ubtrn45n-15921546374042069555395.jpg" title="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 1." /></a></p>
                
                <p>Thế nhưng, điều h&ograve;a Electrolux cũng l&agrave; một lựa chọn tốt với khả năng l&agrave;m lạnh nhanh, nhiều chế độ l&agrave;m m&aacute;t th&ocirc;ng minh, hoạt động &ecirc;m &aacute;i, c&ocirc;ng nghệ m&aacute;y n&eacute;n Inverter tiết kiệm điện&hellip; C&aacute;c d&ograve;ng m&aacute;y lạnh cao cấp của thương hiệu n&agrave;y c&ograve;n c&oacute; th&ecirc;m những t&iacute;nh năng như cảm biến iFeel tự động nhận diện th&acirc;n nhiệt người d&ugrave;ng, m&agrave;ng lọc bụi bẩn, kh&aacute;ng khuẩn, khử m&ugrave;i&hellip;</p>
                
                <p>Hầu hết c&aacute;c sản phẩm m&aacute;y lạnh Electrolux đều c&oacute; thời hạn bảo h&agrave;nh khoảng 2 năm, gi&aacute; cả dao động trong khoảng 6 đến 16 triệu đồng.</p>
                
                <p><strong>LG</strong></p>
                
                <p>Thương hiệu đến từ H&agrave;n Quốc n&agrave;y cũng đ&atilde; được tin d&ugrave;ng với c&aacute;c sản phẩm điều h&ograve;a, m&aacute;y lạnh từ nhiều năm nay. Hầu hết c&aacute;c sản phẩm của LG đều được đ&aacute;nh gi&aacute; cao về số lượng t&iacute;nh năng đi k&egrave;m, v&iacute; dụ như chế độ l&agrave;m lạnh nhanh Jet Cool, tiết kiệm điện bằng c&aacute;ch điều chỉnh mức c&ocirc;ng suất ph&ugrave; hợp, m&aacute;y n&eacute;n Inverter V hoặc Dual Inverter t&ugrave;y d&ograve;ng, khả năng kh&aacute;ng khuẩn, khử m&ugrave;i với bộ lọc Ion Plasmaster v&agrave; thậm ch&iacute; l&agrave; cả t&iacute;nh năng đuổi muỗi Mosquito Away.</p>
                
                <p>&nbsp;</p>
                
                <p style="text-align:center"><a href="https://genk.mediacdn.vn/139269124445442048/2020/6/15/utnu4nt-1592154637415928175461.jpg" target="_blank" title=""><img alt="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 2." id="img_196673602972790784" src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2020/6/15/utnu4nt-1592154637415928175461.jpg" title="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 2." /></a></p>
                
                <p>Mức gi&aacute; của c&aacute;c d&ograve;ng m&aacute;y lạnh LG thực ra hơi cao so với mặt bằng chung, kh&ocirc;ng hợp với ai đang cần tiết kiệm chi ph&iacute;, nhưng đổi lại bạn sẽ nhận được sự y&ecirc;n t&acirc;m về mặt thương hiệu v&agrave; thời gian bảo h&agrave;nh l&ecirc;n tới 5 năm. Cụ thể, loại điều h&ograve;a rẻ nhất của LG gi&aacute; rơi v&agrave;o khoảng 8 triệu đồng, v&agrave; c&aacute;c d&ograve;ng cao cấp c&oacute; thể l&ecirc;n tới 30 triệu đồng.</p>
                
                <p><strong>Samsung</strong></p>
                
                <p>Nhắc đến LG rồi th&igrave; kh&ocirc;ng thể bỏ qua người đồng hương Samsung. Những d&ograve;ng m&aacute;y lạnh của h&atilde;ng được đ&aacute;nh gi&aacute; cao về vẻ ngo&agrave;i cao cấp, sang trọng, điển h&igrave;nh l&agrave; thiết kế tam diện ra mắt khoảng năm 2017. Ngo&agrave;i ra, h&atilde;ng cũng lu&ocirc;n cố gắng để nới rộng diện t&iacute;ch h&uacute;t/thổi gi&oacute;, k&iacute;ch thước c&aacute;nh quạt để tăng khả năng tỏa hơi lạnh.</p>
                
                <p>&nbsp;</p>
                
                <p style="text-align:center"><a href="https://genk.mediacdn.vn/139269124445442048/2020/6/15/qebr-15921546374971537188783.jpg" target="_blank" title=""><img alt="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 3." id="img_196673603455135744" src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2020/6/15/qebr-15921546374971537188783.jpg" title="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 3." /></a></p>
                
                <p>Tất nhi&ecirc;n, những t&iacute;nh năng quan trọng kh&aacute;c cũng được t&iacute;ch hợp, v&iacute; dụ như m&aacute;y n&eacute;n Inverter tiết kiệm điện, nhiều chế độ l&agrave;m lạnh th&ocirc;ng minh&hellip; V&agrave;i d&ograve;ng cao cấp, đời mới hiện tại c&ograve;n c&oacute; th&ecirc;m bộ lọc bụi mịn, m&ugrave;i h&ocirc;i c&ugrave;ng chế độ Wind-free, lan tỏa hơi lạnh đều khắp chứ kh&ocirc;ng thổi trực tiếp v&agrave;o người, cho cảm gi&aacute;c dễ chịu hơn.</p>
                
                <p>Gi&aacute; c&aacute;c loại m&aacute;y lạnh Samsung cũng ở mức vừa phải, dao động từ gần 8 triệu đồng cho tới gần 20 triệu đồng. Hầu hết đều hỗ trợ bảo h&agrave;nh 2 năm cho cục lạnh v&agrave; l&ecirc;n tới 10 năm cho cục n&oacute;ng.</p>
                
                <p><strong>Midea</strong></p>
                
                <p>Nếu nhắc đến h&agrave;ng gia dụng Trung Quốc th&igrave; kh&ocirc;ng thể bỏ qua Midea. Thương hiệu n&agrave;y xuất hiện muộn m&agrave;ng nhưng lại cực k&igrave; nhanh ch&oacute;ng ra mắt c&aacute;c sản phẩm để theo kịp những &ocirc;ng lớn trong ng&agrave;nh.</p>
                
                <p>&nbsp;</p>
                
                <p style="text-align:center"><a href="https://genk.mediacdn.vn/139269124445442048/2020/6/15/qruq34eb-1592154637290720971085.jpg" target="_blank" title=""><img alt="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 4." id="img_196673603484946432" src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2020/6/15/qruq34eb-1592154637290720971085.jpg" title="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 4." /></a></p>
                
                <p>Điểm cộng đầu ti&ecirc;n của m&aacute;y lạnh Midea, cũng như bao thương hiệu Trung Quốc kh&aacute;c, l&agrave; mức gi&aacute; rẻ hơn rất nhiều so với đồ Nhật hay H&agrave;n. V&iacute; dụ, d&ograve;ng m&aacute;y lạnh 9000 BTU rẻ nhất hiện nay của h&atilde;ng c&oacute; gi&aacute; chỉ khoảng 6.5 triệu đồng, v&agrave; d&ograve;ng m&aacute;y 17500 BTU gi&aacute; cũng chỉ hơn 13 triệu đồng th&ocirc;i. C&aacute; biệt c&oacute; model điều h&ograve;a đứng si&ecirc;u cấp 24000 BTU gi&aacute; l&ecirc;n tới 40 triệu đồng.</p>
                
                <p>Chất lượng v&agrave; số lượng t&iacute;nh năng của m&aacute;y lạnh Midea tất nhi&ecirc;n vẫn kh&ocirc;ng hề thua k&eacute;m c&aacute;c đối thủ kh&aacute;c. Bạn vẫn được trải nghiệm h&agrave;ng loạt c&ocirc;ng nghệ ti&ecirc;u chuẩn như m&aacute;y n&eacute;n Inverter, chế độ l&agrave;m lạnh nhanh, tiết kiệm năng lượng&hellip; Gi&aacute; rẻ vậy n&ecirc;n thời gian bảo h&agrave;nh của điều h&ograve;a Midea chỉ ở mức 1 - 2 năm t&ugrave;y d&ograve;ng m&aacute;y.</p>
                
                <p><strong>Gree</strong></p>
                
                <p>Nếu kh&ocirc;ng t&igrave;m hiểu để mua m&aacute;y lạnh th&igrave; hẳn &iacute;t ai biết tới thương hiệu Gree. Cũng l&agrave; một c&aacute;i t&ecirc;n đến từ Trung Quốc, nhưng c&aacute;c sản phẩm từ Gree được đ&aacute;nh gi&aacute; rất tốt v&igrave; c&ocirc;ng ty n&agrave;y chỉ tập trung v&agrave;o sản xuất điều h&ograve;a, m&aacute;y lạnh m&agrave; th&ocirc;i.</p>
                
                <p>&nbsp;</p>
                
                <p style="text-align:center"><a href="https://genk.mediacdn.vn/139269124445442048/2020/6/15/uebubr-15921546374601106601827.png" target="_blank" title=""><img alt="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 5." id="img_196673603017187328" src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2020/6/15/uebubr-15921546374601106601827.png" title="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 5." /></a></p>
                
                <p>Những d&ograve;ng điều h&ograve;a của Gree hiện đều được trang bị những c&ocirc;ng nghệ ti&ecirc;u chuẩn như m&aacute;y n&eacute;n Inverter tiết kiệm điện, hoạt động &ecirc;m &aacute;i, &iacute;t ồn, khả năng l&agrave;m lạnh nhanh, nhiều chế độ để lựa chọn. Một số model cao cấp c&oacute; th&ecirc;m cảm biến iFeel nhận diện th&acirc;n nhiệt người d&ugrave;ng, m&agrave;ng lọc kh&aacute;ng khuẩn, bụi mịn hay chế độ tự động l&agrave;m sạch X-Fan.</p>
                
                <p>Cũng như Midea, c&aacute;c d&ograve;ng điều h&ograve;a Gree c&oacute; ưu điểm nữa l&agrave; mức gi&aacute; cực k&igrave; rẻ, chỉ từ 6.5 triệu đồng cho một chiếc 9000 BTU v&agrave; trải đều l&ecirc;n tới gần 16 triệu đồng cho model 16000 BTU. C&aacute; biệt c&oacute; d&ograve;ng điều h&ograve;a hai chiều 24000 BTU dạng đứng, thiết kế rất đẹp mắt v&agrave; gi&aacute; l&ecirc;n tới 57 triệu đồng.</p>'
            ]);
        }

     
        for($i=7; $i<23; $i++){
            \App\Post::create([
                'title'       => $titles[$i],
                'slug'        => Str::slug($titles[$i], '-'),
                'thumbnail'   => '1593764586.jpg',
                'description' => 'Nắng nóng thế này,không mua điều hòa Nhật thì nên chọn hãng nào?',
                'user_id'     => 1,
                'category_id' => 1,
                'hot'         => 1,
                'status'      => 1,
                'content'     => '<h2><span style="font-size:20px"><strong>Ai cũng m&ecirc; h&agrave;ng Nhật rồi, nhưng ngo&agrave;i những Daikin, Mitsubishi hay Panasonic ra th&igrave; c&ograve;n thương hiệu điều h&ograve;a n&agrave;o đ&aacute;ng c&acirc;n nhắc nữa?</strong></span></h2>
    
                <ul>
                    <li><a href="https://genk.vn/may-dieu-hoa-nao-dang-duoc-cac-tech-blogger-danh-gia-cao-mua-he-nay-20200602194720483.chn" title="Máy điều hòa nào đang được các Tech blogger đánh giá cao mùa hè này?">M&aacute;y điều h&ograve;a n&agrave;o đang được c&aacute;c Tech blogger đ&aacute;nh gi&aacute; cao m&ugrave;a h&egrave; n&agrave;y?</a></li>
                    <li><a href="https://genk.vn/luu-y-can-thuoc-nam-long-de-su-dung-dieu-hoa-an-toan-sau-mua-dich-20200530213413687.chn" title="Lưu ý cần thuộc nằm lòng để sử dụng điều hòa an toàn sau mùa dịch">Lưu &yacute; cần thuộc nằm l&ograve;ng để sử dụng điều h&ograve;a an to&agrave;n sau m&ugrave;a dịch</a></li>
                    <li><a href="https://genk.vn/loat-san-pham-gan-mac-dieu-hoa-nguoi-tieu-dung-de-dang-bi-moc-tui-trong-nhung-ngay-nang-nong-gay-gat-20200509111256732.chn" title="Loạt sản phẩm gán mác &quot;điều hòa&quot;, người tiêu dùng dễ dàng bị móc túi trong những ngày nắng nóng gay gắt">Loạt sản phẩm g&aacute;n m&aacute;c &quot;điều h&ograve;a&quot;, người ti&ecirc;u d&ugrave;ng dễ d&agrave;ng bị m&oacute;c t&uacute;i trong những ng&agrave;y nắng n&oacute;ng gay gắt</a></li>
                </ul>
                
                <p><strong>Electrolux</strong></p>
                
                <p>Thương hiệu đến từ Thụy Điển l&agrave; một c&aacute;i t&ecirc;n quen thuộc với người ti&ecirc;u d&ugrave;ng Việt. Nhắc đến Electrolux l&agrave; người ta nghĩ ngay đến m&aacute;y h&uacute;t bụi, m&aacute;y giặt, b&agrave;n ủi, nồi cơm điện hay l&ograve; vi s&oacute;ng&hellip;</p>
                
                <p>&nbsp;</p>
                
                <p style="text-align:center"><a href="https://genk.mediacdn.vn/139269124445442048/2020/6/15/ubtrn45n-15921546374042069555395.jpg" target="_blank" title=""><img alt="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 1." id="img_196673602985828352" src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2020/6/15/ubtrn45n-15921546374042069555395.jpg" title="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 1." /></a></p>
                
                <p>Thế nhưng, điều h&ograve;a Electrolux cũng l&agrave; một lựa chọn tốt với khả năng l&agrave;m lạnh nhanh, nhiều chế độ l&agrave;m m&aacute;t th&ocirc;ng minh, hoạt động &ecirc;m &aacute;i, c&ocirc;ng nghệ m&aacute;y n&eacute;n Inverter tiết kiệm điện&hellip; C&aacute;c d&ograve;ng m&aacute;y lạnh cao cấp của thương hiệu n&agrave;y c&ograve;n c&oacute; th&ecirc;m những t&iacute;nh năng như cảm biến iFeel tự động nhận diện th&acirc;n nhiệt người d&ugrave;ng, m&agrave;ng lọc bụi bẩn, kh&aacute;ng khuẩn, khử m&ugrave;i&hellip;</p>
                
                <p>Hầu hết c&aacute;c sản phẩm m&aacute;y lạnh Electrolux đều c&oacute; thời hạn bảo h&agrave;nh khoảng 2 năm, gi&aacute; cả dao động trong khoảng 6 đến 16 triệu đồng.</p>
                
                <p><strong>LG</strong></p>
                
                <p>Thương hiệu đến từ H&agrave;n Quốc n&agrave;y cũng đ&atilde; được tin d&ugrave;ng với c&aacute;c sản phẩm điều h&ograve;a, m&aacute;y lạnh từ nhiều năm nay. Hầu hết c&aacute;c sản phẩm của LG đều được đ&aacute;nh gi&aacute; cao về số lượng t&iacute;nh năng đi k&egrave;m, v&iacute; dụ như chế độ l&agrave;m lạnh nhanh Jet Cool, tiết kiệm điện bằng c&aacute;ch điều chỉnh mức c&ocirc;ng suất ph&ugrave; hợp, m&aacute;y n&eacute;n Inverter V hoặc Dual Inverter t&ugrave;y d&ograve;ng, khả năng kh&aacute;ng khuẩn, khử m&ugrave;i với bộ lọc Ion Plasmaster v&agrave; thậm ch&iacute; l&agrave; cả t&iacute;nh năng đuổi muỗi Mosquito Away.</p>
                
                <p>&nbsp;</p>
                
                <p style="text-align:center"><a href="https://genk.mediacdn.vn/139269124445442048/2020/6/15/utnu4nt-1592154637415928175461.jpg" target="_blank" title=""><img alt="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 2." id="img_196673602972790784" src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2020/6/15/utnu4nt-1592154637415928175461.jpg" title="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 2." /></a></p>
                
                <p>Mức gi&aacute; của c&aacute;c d&ograve;ng m&aacute;y lạnh LG thực ra hơi cao so với mặt bằng chung, kh&ocirc;ng hợp với ai đang cần tiết kiệm chi ph&iacute;, nhưng đổi lại bạn sẽ nhận được sự y&ecirc;n t&acirc;m về mặt thương hiệu v&agrave; thời gian bảo h&agrave;nh l&ecirc;n tới 5 năm. Cụ thể, loại điều h&ograve;a rẻ nhất của LG gi&aacute; rơi v&agrave;o khoảng 8 triệu đồng, v&agrave; c&aacute;c d&ograve;ng cao cấp c&oacute; thể l&ecirc;n tới 30 triệu đồng.</p>
                
                <p><strong>Samsung</strong></p>
                
                <p>Nhắc đến LG rồi th&igrave; kh&ocirc;ng thể bỏ qua người đồng hương Samsung. Những d&ograve;ng m&aacute;y lạnh của h&atilde;ng được đ&aacute;nh gi&aacute; cao về vẻ ngo&agrave;i cao cấp, sang trọng, điển h&igrave;nh l&agrave; thiết kế tam diện ra mắt khoảng năm 2017. Ngo&agrave;i ra, h&atilde;ng cũng lu&ocirc;n cố gắng để nới rộng diện t&iacute;ch h&uacute;t/thổi gi&oacute;, k&iacute;ch thước c&aacute;nh quạt để tăng khả năng tỏa hơi lạnh.</p>
                
                <p>&nbsp;</p>
                
                <p style="text-align:center"><a href="https://genk.mediacdn.vn/139269124445442048/2020/6/15/qebr-15921546374971537188783.jpg" target="_blank" title=""><img alt="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 3." id="img_196673603455135744" src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2020/6/15/qebr-15921546374971537188783.jpg" title="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 3." /></a></p>
                
                <p>Tất nhi&ecirc;n, những t&iacute;nh năng quan trọng kh&aacute;c cũng được t&iacute;ch hợp, v&iacute; dụ như m&aacute;y n&eacute;n Inverter tiết kiệm điện, nhiều chế độ l&agrave;m lạnh th&ocirc;ng minh&hellip; V&agrave;i d&ograve;ng cao cấp, đời mới hiện tại c&ograve;n c&oacute; th&ecirc;m bộ lọc bụi mịn, m&ugrave;i h&ocirc;i c&ugrave;ng chế độ Wind-free, lan tỏa hơi lạnh đều khắp chứ kh&ocirc;ng thổi trực tiếp v&agrave;o người, cho cảm gi&aacute;c dễ chịu hơn.</p>
                
                <p>Gi&aacute; c&aacute;c loại m&aacute;y lạnh Samsung cũng ở mức vừa phải, dao động từ gần 8 triệu đồng cho tới gần 20 triệu đồng. Hầu hết đều hỗ trợ bảo h&agrave;nh 2 năm cho cục lạnh v&agrave; l&ecirc;n tới 10 năm cho cục n&oacute;ng.</p>
                
                <p><strong>Midea</strong></p>
                
                <p>Nếu nhắc đến h&agrave;ng gia dụng Trung Quốc th&igrave; kh&ocirc;ng thể bỏ qua Midea. Thương hiệu n&agrave;y xuất hiện muộn m&agrave;ng nhưng lại cực k&igrave; nhanh ch&oacute;ng ra mắt c&aacute;c sản phẩm để theo kịp những &ocirc;ng lớn trong ng&agrave;nh.</p>
                
                <p>&nbsp;</p>
                
                <p style="text-align:center"><a href="https://genk.mediacdn.vn/139269124445442048/2020/6/15/qruq34eb-1592154637290720971085.jpg" target="_blank" title=""><img alt="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 4." id="img_196673603484946432" src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2020/6/15/qruq34eb-1592154637290720971085.jpg" title="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 4." /></a></p>
                
                <p>Điểm cộng đầu ti&ecirc;n của m&aacute;y lạnh Midea, cũng như bao thương hiệu Trung Quốc kh&aacute;c, l&agrave; mức gi&aacute; rẻ hơn rất nhiều so với đồ Nhật hay H&agrave;n. V&iacute; dụ, d&ograve;ng m&aacute;y lạnh 9000 BTU rẻ nhất hiện nay của h&atilde;ng c&oacute; gi&aacute; chỉ khoảng 6.5 triệu đồng, v&agrave; d&ograve;ng m&aacute;y 17500 BTU gi&aacute; cũng chỉ hơn 13 triệu đồng th&ocirc;i. C&aacute; biệt c&oacute; model điều h&ograve;a đứng si&ecirc;u cấp 24000 BTU gi&aacute; l&ecirc;n tới 40 triệu đồng.</p>
                
                <p>Chất lượng v&agrave; số lượng t&iacute;nh năng của m&aacute;y lạnh Midea tất nhi&ecirc;n vẫn kh&ocirc;ng hề thua k&eacute;m c&aacute;c đối thủ kh&aacute;c. Bạn vẫn được trải nghiệm h&agrave;ng loạt c&ocirc;ng nghệ ti&ecirc;u chuẩn như m&aacute;y n&eacute;n Inverter, chế độ l&agrave;m lạnh nhanh, tiết kiệm năng lượng&hellip; Gi&aacute; rẻ vậy n&ecirc;n thời gian bảo h&agrave;nh của điều h&ograve;a Midea chỉ ở mức 1 - 2 năm t&ugrave;y d&ograve;ng m&aacute;y.</p>
                
                <p><strong>Gree</strong></p>
                
                <p>Nếu kh&ocirc;ng t&igrave;m hiểu để mua m&aacute;y lạnh th&igrave; hẳn &iacute;t ai biết tới thương hiệu Gree. Cũng l&agrave; một c&aacute;i t&ecirc;n đến từ Trung Quốc, nhưng c&aacute;c sản phẩm từ Gree được đ&aacute;nh gi&aacute; rất tốt v&igrave; c&ocirc;ng ty n&agrave;y chỉ tập trung v&agrave;o sản xuất điều h&ograve;a, m&aacute;y lạnh m&agrave; th&ocirc;i.</p>
                
                <p>&nbsp;</p>
                
                <p style="text-align:center"><a href="https://genk.mediacdn.vn/139269124445442048/2020/6/15/uebubr-15921546374601106601827.png" target="_blank" title=""><img alt="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 5." id="img_196673603017187328" src="https://genk.mediacdn.vn/thumb_w/660/139269124445442048/2020/6/15/uebubr-15921546374601106601827.png" title="Nắng nóng thế này, không mua điều hòa Nhật thì nên chọn hãng nào? - Ảnh 5." /></a></p>
                
                <p>Những d&ograve;ng điều h&ograve;a của Gree hiện đều được trang bị những c&ocirc;ng nghệ ti&ecirc;u chuẩn như m&aacute;y n&eacute;n Inverter tiết kiệm điện, hoạt động &ecirc;m &aacute;i, &iacute;t ồn, khả năng l&agrave;m lạnh nhanh, nhiều chế độ để lựa chọn. Một số model cao cấp c&oacute; th&ecirc;m cảm biến iFeel nhận diện th&acirc;n nhiệt người d&ugrave;ng, m&agrave;ng lọc kh&aacute;ng khuẩn, bụi mịn hay chế độ tự động l&agrave;m sạch X-Fan.</p>
                
                <p>Cũng như Midea, c&aacute;c d&ograve;ng điều h&ograve;a Gree c&oacute; ưu điểm nữa l&agrave; mức gi&aacute; cực k&igrave; rẻ, chỉ từ 6.5 triệu đồng cho một chiếc 9000 BTU v&agrave; trải đều l&ecirc;n tới gần 16 triệu đồng cho model 16000 BTU. C&aacute; biệt c&oacute; d&ograve;ng điều h&ograve;a hai chiều 24000 BTU dạng đứng, thiết kế rất đẹp mắt v&agrave; gi&aacute; l&ecirc;n tới 57 triệu đồng.</p>'
            ]);
        }
    }
}
