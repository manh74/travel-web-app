<?php

use Illuminate\Database\Seeder;

class ToursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tours')->insert([
            'title' => "Đà Nẵng",
            'summarize' => "Khám phá thành phố 'đáng sống' này nhé!",
            'content' => "
            <b>Đến với Đà Nẵng là đến với những trải nghiệm thú vị không đâu có được.
            <br>1. Thành phố của những cây cầu</b><br>
            Đà Nẵng không chỉ được biết đến như một thành phố xanh, sạch đẹp, văn minh, thân thiện và đáng sống, mà Đà Nẵng còn có sông Hàn thơ mộng chạy trong lòng thành phố và cả những chiếc cầu độc đáo bắc qua dòng sông này.
            Tiêu biểu nhất phải kể đến là cầu quay sông Hàn, đến nay vẫn là cây cầu quay duy nhất tại Việt Nam, đem lại sự tò mò cho người dân và du khách đến Đà Nẵng. Mới mẻ hơn, du khách có thể bách bộ tại cầu Trần Thị Lý với những sợi cáp hình cánh buồm được thắp đèn led đổi màu độc đáo. Cách đó không xa là cầu Rồng với thiết kế đặc biệt như một con rồng uốn lượn giữa sông Hàn, có thể phun nước và phun lửa chắc chắn đem lại sự phấn khích cho du khách. Hay một ngày yên bình, du khách có thể ghé thăm cầu Thuận Phước bắc ngang qua biển ngắm nhìn nơi giao thoa giữa sông Hàn và vịnh Đà Nẵng, và cảm nhận sự hùng vĩ của thiên nhiên.
            <br><br>
            <b>2. Bãi biển đẹp nhất hành tinh</b></br>
            Biển Đà Nẵng kéo dài gần 60km với nhiều bãi tắm liên hoàn đẹp tuyệt vời kéo dài từ chân đèo Hải Vân đến Non Nước được du khách thập phương biết đến là một trong những điểm nghỉ ngơi, thư giãn, tắm biển lý tưởng nhất khu vực Châu Á. Tạp chí Forbes – Mỹ đã bình chọn Biển Đà Nẵng là một trong 6 bãi biển quyến rũ nhất hành tinh cùng với bãi biển Bahia – Brazil, Bondi – Úc, Castelo – Bồ Đào Nha, Las Minitas – Dominia, và Wailea thuộc bang Hawai của Mỹ.
            <br><br>
            <b>3. Tuyến cáp treo nhiều kỷ lục thế giới</b></br>
            Cáp treo Bà Nà được xây dựng nhằm thay thế tuyến đường bộ vốn dĩ hiểm trở. Tuyến cáp mới với 86 cabin được thiết kế hở, vận tốc 6m/s giúp du khách trải nghiệm thời tiết bên ngoài ở độ cao hơn 1.000 m trong thời gian cáp vận hành. Từ chân núi, du khách có thể lên đến đỉnh Bà Nà chỉ trong 30 phút và tận hưởng các dịch vụ vui chơi giải trí cũng như nghỉ dưỡng tại Khu du lịch Bà Nà Hills.
            Tuyến cáp này đạt 4 kỷ lục thế giới, gồm: Dài nhất: 5.801m; Độ chênh lớn nhất: 1.368m; Tổng chiều dài cáp dài nhất: 11.587m; Sợi cáp nặng nhất: 141,24 tấn.
            <br><br>
            <b>4. Cung đường di sản Đà Nẵng – Hội An – Mỹ Sơn – Huế - Động Phong Nha</b></br>
            Đà Nẵng với vị trí trung tâm của miền Trung đã trở thành cầu nối các di sản văn hóa thế giới thành một thể. Chỉ cách Đà Nẵng 30km, phố cổ Hội An sẵn sàng đón tiếp du khách từ khắp mọi nơi. Và cũng chỉ cần khoảng cách bấy nhiêu để di chuyển từ Hội An đến thánh địa Mỹ Sơn trầm mặc, huyền bí. Vươn xa hơn ra phía Bắc chỉ khoảng 100km, du khách đã có thể đến được với kinh thành và nhã nhạc cung đình Huế, và xa hơn nữa là khám phá động Phong Nha kỳ bí, hùng vĩ. Không chỉ là tâm điểm của 3 di sản thế giới, thành phố Đà Nẵng còn có nhiều danh thắng tuyệt đẹp đến nỗi du khách khó có thể nào quên được sau khi đã đến thăm thành phố này.
            <br>
            Với sân bay quốc tế Đà Nẵng, tuyến đường sắt Bắc Nam, và vô vàn các công ty lữ hành, du khách hoàn toàn có thể tìm được những dịch vụ tốt nhất cho chuyến đi của mình.
            <b>5. Thời trang du lịch</b><br>
            Đối với những cô gái muốn du lịch đến Đà Nẵng, việc chuẩn bị cả khăn len và bikini là điều hết sức bình thường. Đồ tắm khi đi biển Mỹ Khê; váy Maxi cho sông Hàn lộng gió; và còn cả áo dài khi thăm đền chùa và phố cổ Hội An… Đó là chưa kể còn có cả áo khoác và khăn len nếu đến với đỉnh núi Bà Nà mờ sương.
            <br>
            Chưa khi nào mà việc du lịch đến một thành phố lại phải chuẩn bị nhiều phong cách thời trang đối lập đến vậy. Tuy nhiên, đó lại là một điều hết sức thú vị và đáng để chúng ta khám phá.
            ",
            'image' => "images/places/danang.jpg",
            'id_type' => 1,
            'price' => "3000000",
            'on_sale' => 0,
            'schedule' => "7N6D"
        ]);

        DB::table('tours')->insert([
            'title' => "Hội An",
            'summarize' => "Thú vị một số trải nghiệm khi du lịch Hội An!",
            'content' => "
            <b>Đến với Đà Nẵng là đến với những trải nghiệm thú vị không đâu có được.
            <br>1.  Đi dạo Phố Cổ về đêm</b><br>
            Một trải nghiệm rất đơn giản, du khách chỉ cần bước ra ngoài phố và ngắm nhìn những ngôi nhà cổ, những con phố đèn lồng rực rỡ về đêm. Bạn sẽ ngỡ như mình lạc vào buổi dạ tiệc của ánh sáng, một bức tranh kết hợp giữa sự bình lặng của kiến trúc cổ xưa với hình ảnh dân dã và sự nhộn nhịp của cuộc sống hiện đại. Có lẽ đẹp nhất vẫn là đôi bờ sông Hoài, nơi những vệt màu sáng lấp lánh trên mặt nước. Hội An còn đẹp hơn nữa khi không còn du khách và những hàng quán, khi ấy phố cổ mới thật sự mang một dáng hình xưa cũ, trầm mặc.
            <br><br>
            <b>2. Thả đèn hoa đăng</b></br>
            Vẫn là khi đêm về, bên cạnh việc chỉ ngắm nhìn, du khách còn có thể hòa mình vào cùng trang trí cho bữa tiệc ánh sáng trên bờ sông. Một trải nghiệm vô cùng thú vị mà rất nhiều khách thích làm là thả hoa đăng trên sông Hoài. Chính tay bạn sẽ được thả những chiếc đèn nhỏ lấp lánh xuống sông, với hy vọng những chiếc đèn sẽ mang lại may mắn, bình an cho người thân, bạn bè. Bên cạnh đèn lồng, hoa đăng cũng đã dần trở thành nét đặc trưng của <b>du lịch Hội An.</b>
            <br><br>
            <b>3. Thưởng thức đặc sản Cao Lầu Hội An</b></br>
            Cao Lầu là món ăn đặc sản Hội An mà bất cứ ai khi tới đây cũng nên thử. Nguồn gốc tên gọi của món ăn này khá thú vị. Xưa kia khi thương nhân tới Hội An buôn bán, phải thưởng thức món này ở trên “lầu cao” để có thể trông coi hàng. Từ đó, món ăn này mang tên Cao Lầu.
            <br>
            Một bát Cao Lầu Hội An chứa đủ vị ngon, với cảm giác sựt sựt của sợi mì, vị chua, ngọt, cay, chát của rau sống, hương thơm của mắm, nước thịt, nước tương,… và miếng tóp mỡ giòn tan trong miệng.
            <br>
            Du khách có thể thưởng thức món ăn này ở quán Bà Bé nằm ở đầu ngõ 69 Phan Châu Trinh, hay quán Hát ở ngã tư Trần Phú giao với Hoàng Diệu. Ngoài ra, các nhà hàng cho khách nước ngoài ở dọc phố Bạch Đằng cũng phục vụ món Cao Lầu.
            <br><br>
            <b>4. Đi thuyền trên sông Hoài vào buổi tối</b></br>
            Đi thuyền ngắm nhìn Phố Cổ vào ban đêm và thả hoa đăng là thú vui được rất nhiều cặp đôi yêu thích, đặc biệt là những người đến Hội An để chụp đám cưới. Tuy nhiên nếu du khách không có đôi thì vẫn có thể đi cùng gia đình, bạn bè.
            <br><br>
            <b>5. Chụp ảnh kỷ niệm ở Hội An</b><br>
            Website BuzzFeed Travel từng xếp hạng Hội An ở vị trí thứ 3 trong danh sách những địa điểm chụp ảnh selfie tuyệt nhất thế giới. Vì thế đến Hội An, bạn đừng quên chụp selfie tại các địa danh nổi tiếng như: cầu An Hội, cầu Nhật, bức tường huyền thoại ở Hoàng Văn Thụ, hẻm ngõ giếng, bờ sông Hoài…
            <img src='images/places/trainghiemhoian.jpg' alt='Hội An'>
            ",
            'image' => "images/places/hoian.jpg",
            'id_type' => 1,
            'price' => "3000000",
            'on_sale' => 0,
            'schedule' => "7N6D"
        ]);

        DB::table('tours')->insert([
            'title' => "Hà Nội",
            'summarize' => "Một Vài Cẩm Nang Khi Đi Du Lịch Ở Hà Nội",
            'content' => "
            <b><i>Hà Nội góp nhặt từng mảnh ghép, vẽ lên cho mình một dáng hình nhẹ nhàng mà quyến rũ, đằm thắm mà kiêu sa. Hà Nội, có vô vàn những vần thơ được viết, những bài hát cứ thế tuôn trào, bởi người ta ấy, yêu lắm, thương lắm một Hà Nội trong tim. Đã đôi lần về Hà Nội, là để du lịch hay vì một lý do nào khác ngang bước qua Thủ đô, đều lỡ nhịp không nỡ rời đi. Từ con phố rụng rơi đầy hoa sữa đến góc tường vàng phai bạc màu thời gian, từ bờ hồ dịu mát đến một thoáng bình yên trong hẻm vắng, mọi thứ đều khắc nhớ vào tim, lâu thật lâu, như một ký ức đẹp tươi, xoa dịu tâm hồn đang mệt nhoài với cuộc sống bon chen ngoài kia. Hà Nội, hai tiếng gọi giản đơn, mà mỗi lần cất lên lại cảm thấy thương yêu ngập tràn cả lối về.</i>
            <br>1. Thời điểm du lịch Hà Nội lý tưởng</b><br>
            Khí hậu Hà Nội còn được chia thành bốn mùa khá rõ rệt, mỗi mùa lại có một vẻ đẹp riêng nên bạn có thể du lịch đến đây vào bất kỳ thời điểm nào trong năm. Tuy nhiên, theo các kinh nghiệm du lịch Hà Nội thì thành phố nổi tiếng nhất là vào các mùa hoa và đặc biệt là mùa thu Hà Nội.
            <br>
            <ul>
                <li><b>Mùa hoa</b>: Hà Nội quanh năm ngập tràn trong các mùa hoa như hoa đào (tháng 1), hoa ban (tháng 2), hoa sưa (tháng 3), hoa sen (mùa hè), hoa sữa (tháng 9 – 10), cúc họa mi (tháng 10 – 12)…</li>
                <li><b>Mùa thu – đầu đông</b>: Luôn được đi vào thơ ca với biết bao lãng mạn, Hà Nội lúc thu về cho đến đầu đông là thời gian đẹp nhất của thành phố. Tiết trời lúc này đã bớt nóng, nắng nhẹ, trong cái se lạnh, có thêm hương hoa sữa trải rộng khắp các con phố.</li>
            </ul>
            <br><br>
            <b>2.  Phương tiện di chuyển ở Hà Nội</b></br>
            <b>Xe máy</b>: Thuê xe máy tại Hà Nội rất đơn giản. Bạn có thể liên hệ với khách sạn hoặc gọi trực tiếp dịch vụ cho thuê xe. Giá một chiếc xe khoảng 100.000 – 150.000 VND/ ngày.
            <br>
            <b>Taxi</b>: Cho một chuyến du lịch thoải mái, bạn có thể chọn di chuyển bằng taxi. Các hãng taxi phổ biến ở Hà Nội là Mai Linh (SĐT: 024.38.222.666), Taxi Group (SĐT: 024.38.26.26.26), V20 (SĐT: 024.38.20.20.20)
            <br>
            <b>Xích lô</b>: Một hình ảnh đặc trưng của phố cổ chính là chiếc xích lô vẫn còn được giữ lại để phục vụ du lịch. Bạn có thể dễ dàng bắt xích lô khi ở phố cổ, dạo vòng quanh những con phố nhỏ trong lúc nghe những câu chuyện thú vị từ bác xích lô.
            <br>
            <b>Xe điện</b>: Một hình thức thú vị để tham qua phố cổ khác là xe điện. Vé xe được bán tại khu vực bờ hồ Hoàn Kiếm với giá 15.000 VND/ chuyến 15 phút.
            <br><br>
            <b>3. Thưởng thức đặc sản Cao Lầu Hội An</b></br>
            Cao Lầu là món ăn đặc sản Hội An mà bất cứ ai khi tới đây cũng nên thử. Nguồn gốc tên gọi của món ăn này khá thú vị. Xưa kia khi thương nhân tới Hội An buôn bán, phải thưởng thức món này ở trên “lầu cao” để có thể trông coi hàng. Từ đó, món ăn này mang tên Cao Lầu.
            <br>
            Một bát Cao Lầu Hội An chứa đủ vị ngon, với cảm giác sựt sựt của sợi mì, vị chua, ngọt, cay, chát của rau sống, hương thơm của mắm, nước thịt, nước tương,… và miếng tóp mỡ giòn tan trong miệng.
            <br>
            Du khách có thể thưởng thức món ăn này ở quán Bà Bé nằm ở đầu ngõ 69 Phan Châu Trinh, hay quán Hát ở ngã tư Trần Phú giao với Hoàng Diệu. Ngoài ra, các nhà hàng cho khách nước ngoài ở dọc phố Bạch Đằng cũng phục vụ món Cao Lầu.
            <br><br>
            <b>4.  Địa điểm du lịch ở Hà Nội</b></br>
            <b>Hồ Hoàn Kiếm</b>
            <br>
            Nằm ngay trung tâm thủ đô chính là hồ Hoàn Kiếm – hồ nước gắn liền với câu chuyện lịch sử quan trọng của thủ đô. Xung quanh hồ Hoàn Kiếm còn là một quần thể kiến trúc lịch sử đa dạng, trở thành một địa điểm không thể bỏ qua cho bất kỳ ai đến du lịch Hà Nội.
            <br>
            Những di tích trong khu vực hồ Hoàn Kiếm: Tháp Rùa, Đền Ngọc Sơn, Cầu Thê Húc, Tháp Bút, Đài Nghiên, Tháp Hòa Phong…
            <br>
            Địa chỉ: Ngay giữa phố cổ, thuộc địa bàn quận Hoàn Kiếm
            <br>

            <b>Khu vực Phố Cổ</b>

            <br>Có thể nói “36 phố phường” là điều đã làm nên danh tiếng của Hà Nội. Khởi đầu là một khu dân cư nằm bên ngoài hoàng thành, khu phố đã nhộn nhịp trong suốt vài trăm năm với các hoạt động thủ công nghiệp và buôn bán.
            <br>Đến phố cổ ngày nay, bạn vẫn còn được tận hưởng không gian cổ kính, nhuốm màu thời gian của những ngôi nhà kiểu thấp, mái ngói, tường rêu. Tham khảo thêm bí kíp khám phá phố cổ trong một ngày để không bỏ lỡ những trải nghiệm tuyệt vời nhất tại đây nhé!
            <br>Những địa điểm tham quan trong khu phố cổ: đền Bạch Mã, nhà cổ 87 Mã Mây, Ô Quan Chưởng, và tất nhiên là không thể thiếu một “kho tàng” ẩm thực tại đây.
            <br>
            ...
            <br><br>
            <b>5. “Càn quét” món ngon Hà Nội</b><br>
            <b>Phở Hà Nội <br>
            <b>Chả cá Lã Vọng Bún thang Bún đậu mắm tôm<b>
            <br>
            <b>Cháo sườn<b>
            <br>
            Ăn vặt đường phố
            </b>
            <img src='images/places/trainghiemhanoi2.jpg' alt='Hà Nội'>
            ",
            'image' => "images/places/trainghiemhanoi.jpg",
            'id_type' => 3,
            'price' => "3000000",
            'on_sale' => 0,
            'schedule' => "7N6D"
        ]);
    }
}
