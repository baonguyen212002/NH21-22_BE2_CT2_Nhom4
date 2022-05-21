<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'name' => 'Áo Khoác Bò',
            'description' => 'Size 32 = XS. Chất dày dặn rất đẹp nhé ạ',
            'image' => 'aokhoacbo.jpg',
            'price' => '550000',
            'quantity' => '10',
            'type_id' => '1',
        ]);
        DB::table('products')->insert([
            'name' => 'Áo Hoodies BUBLLE TT11',
            'description' => 'Áo chất nỉ in chữ BUBLLE có màu trắng
Sản phẩm nữ Free size dưới 1m62, 40-56kg tùy chiều cao
Sản phẩm nam free size dưới 1m72,55-65kg  vừa nha bạn!',
            'image' => 'aohoodies_bublle_tt11.jpgg',
            'price' => '70000',
            'quantity' => '50',
            'type_id' => '4',
        ]);
        DB::table('products')->insert([
            'name'=>'Quần DirtyCoins Big Logo Shorts',
            'description' => '• Chất liệu: vải dù polyester
• Dáng regular fit
• Cạp chun có dây rút
• Cạp cao vừa
• Túi hộp bên trái
• Mềm mại và thoáng khí
• Màu sản phẩm: Black/White',
            'image' => 'quan_dirtycoin.jpg',
            'price' => '400000',
            'quantity' => '100',
            'type_id' => '2',
        ]);
        DB::table('products')->insert([
            'name' => 'Áo Hoodie Basic Old Sailor - O.S.L HOODIE BASIC - WHITE - HDGA884271- trắng - big size upto 5XL',
            'description' => 'Dù bạn ở đâu, dù thời tiết có nắng hay là mưa thì áo khoác chất liệu nỉ của Old Sailor, the Big size cũng sẽ mang lại cho bạn cảm giác dễ chịu nhất, bởi ngoài kiểu cách thời trang chúng tôi còn muốn khách hàng cảm nhận được sự thoải mái từ bên trong.
Cho nên sẽ là một lựa chọn hợp lý nếu bạn chọn sản phẩm áo khoác nam bên chúng tôi để tung tăng trong những ngày dài sắp tới, bất chấp trời nắng lẫn trời mưa.
Chất liệu áo khoác:  nỉ 

Kiểu form: Basic

Size M -> 5XL

Màu: trắng
Sản phẩm của chúng tôi có đủ size từ M -> 5XL, luôn luôn đầy đủ size cho tất cả mọi người vì Big size có nghĩa là size nào cũng có.',
            'image' => 'hoodiebasic_white.jpg',
            'price' => '395000',
            'quantity' => '100',
            'type_id' => '1'
        ]);
        DB::table('products')->insert([
            'name' => 'OSL MINI BAG MBDE20005',
            'description' => '',
            'image' => 'mbde20005.jpg',
            'price' => '245000',
            'quantity' => '100',
            'type_id' => '3',
        ]);
        DB::table('products')->insert([
            'name' => 'Giày Old Sailor 01204',
            'description' => '',
            'image' => 'giay01204.jpg',
            'price' => '450000',
            'quantity' => '100',
            'type_id' => '3',
        ]);
        DB::table('products')->insert([
            'name' => 'Giày Old Sailor 01202',
            'description' => '',
            'image' => 'giay01202.jpg',
            'price' => '450000',
            'quantity' => '100',
            'type_id' => '3',
        ]);
        DB::table('products')->insert([
            'name' => 'O.S.L SNEAKER - BLACK',
            'description' => '',
            'image' => 'osl_sneaker_black.jpg',
            'price' => '560000',
            'quantity' => '100',
            'type_id' => '3',
        ]);
        DB::table('products')->insert([
            'name' => 'Giày Old Sailor 01201',
            'description' => '',
            'image' => 'giay01201.jpg',
            'price' => '450000',
            'quantity' => '100',
            'type_id' => '3',
        ]);
        DB::table('products')->insert([
            'name' => 'Giày Old Sailor 01203',
            'description' => '',
            'image' => 'giay01203.jpg',
            'price' => '450000',
            'quantity' => '100',
            'type_id' => '3',
        ]);
        DB::table('products')->insert([
            'name' => 'Áo thun TSUN Embroidered Basic Tee - Thêu - Trắng - Unisex',
            'description' => 'TSUN -  Embroidered Basic Tee - Trắng

Áo thun Unisex TSUN tay ngắn
Chất liệu: Vải Cotton 2 chiều cao cấp
Màu Sắc: Trắng
Form áo: Châu Âu 
Thiết kế: Thêu logo TS

Gồm 4 size S M L XL:
▪Size S:   Từ   1m50  -> 1m60 - Dưới 55kg
▪Size M:   Từ   1m60  -> 1m75  - Từ 55kg -> 70kg
▪Size L :   Trên 1m70 - Từ 70kg -> 80kg
▪Size XL: Trên 1m70 - Từ 80kg ->105kg',
            'image' => 'TSUN_Embroidered_white.jpg',
            'price' => '320000',
            'quantity' => '100',
            'type_id' => '2',
        ]);
        DB::table('products')->insert([
            'name' => 'Túi chéo TSUN Minibag Heart Pattern - White',
            'description' => 'TSUN - Minibag Heart Pattern Trắng

Túi đeo chéo TSUN có túi trong suốt
▪ Cao: 16cm
▪ Ngang: 12cm
▪ Rộng: 4cm
▪ Chất liệu: Canvas 100% cotton.
▪ Số ngăn: 2 ngăn',
            'image' => 'tuicheominibag.jpg',
            'price' => '350000',
            'quantity' => '100',
            'type_id' => '2',
        ]);
    }
}
