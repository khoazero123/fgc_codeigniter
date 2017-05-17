<form method="post" enctype="multipart/form-data" action="cart" onsubmit="return check_field()">

    <div id="guide_cart">
        <i class="bg icon_large_cart"></i>
        <h1>Chi tiết giỏ hàng</h1>
        <p>Để xóa sản phẩm khỏi giỏ hàng, bấm <img src="public/images/icon_del.png" alt="">, để mua thêm bấm <b>"Mua tiếp"</b>. Để sang bước đặt hàng tiếp theo, bấm <b>"Thanh toán"</b></p>
    </div>
    <!--guide_cart-->
    <!--Buoc 1 : gio hang-->
    <span style="display: none;"></span><span style="display: none;">
      </span>
      <?php 
      if(isset($items)) {
        ?>
    <table cellpadding="5" border="1" bordercolor="#CCCCCC" style="border-collapse:collapse; width:100%; " id="tbl_list_cart">
        <tbody>
            <tr style="background-color:#f5f5f5; font-weight:bold; text-transform:uppercase;">
                <td>STT</td>
                <td>Tên sản phẩm</td>
                <td>Số lượng</td>
                <td>Đơn giá</td>
                <td>Thành tiền</td>
                <td>Xóa</td>
            </tr>
            <?php 
            $i=0;
            foreach ($items as $item) {
                $i++;
                echo '<tr id="product-'.$item['id'].'" data-product-id="'.$item['id'].'">
                    <td>'.$i.'</td>
                    <td class="product_cart">
                        <img src="'.$item['thumb'].'" style="vertical-align: middle; margin-right: 10px; float:left; width:100px;">
                        <div style="margin-left:120px;">
                            <a href="snapham/'.$item['id'].'" style="text-decoration:none; padding-top:10px; display:block;"><b>'.$item['name'].'</b></a>
                            <p class="red">Mã sản phẩm: '.$item['id'].'</p>
                            <p></p>
                            </p>
                        </div>
                    </td>
                    <td>
                        <input type="number" name="quantity-'.$item['id'].'" id="quantity-'.$item['id'].'" value="'.$item['quantity'].'" onchange="updateQuantity('.$item['id'].',this.value)" style="width:70px">
                    </td>
                    <td class="product_cart"><span id="price-product-'.$item['id'].'" value="'.$item['price'].'">'.$item['price'].'</span></td>

                    <td class="product_cart"><b><span id="price-product-total-'.$item['id'].'">'.$item['price'].'</span></b></td>
                    <td><a href="javascript:deleteItem('.$item['id'].')"><img src="public/images/icon_del.png"></a></td>
                </tr>';
            }
            ?>
            <tr>
                <td colspan="2">
                </td>
                <td colspan="4" style="text-align:center; line-height:22px; color:#555">
                    <b>Tổng tiền:</b>
                    <b style="color:red; font-size:18px;"><span class="sub1" id="total_value" value="" style="color: red; font-weight: bold;">0 đ</span></b><br>
                    <b>Chưa bao gồm phí vận chuyển</b>
                </td>
            </tr>
            
        </tbody>
    </table>
    <div class="clear space2"></div>
    <div align="right">
        <button type="button" class="btn btn-primary btn-update-cart" onclick="saveCart();" style="display: none;">Cập nhập</button> <button type="button" class="btn btn-primary btn-shopping" onclick="location.href = 'sanpham';">Mua tiếp</button> <button type="button" class="btn btn-success btn-payment" onclick="payment();">Thanh toán</button>
    </div>
    <?php 
            } else {
                echo '<h1>Giỏ hàng trống</h1>';
                echo '<center><a href="sanpham" class="btn btn-primary">Mua sắm</a></center>';
            }
            ?>
    <div class="clear space2"></div>
</form>
<script type="text/javascript">
    var products = {};
    $(window).load(function () {
        updateCart();
    });
    function updateQuantity(id,quantity) {
        $('.btn-update-cart').show();
        updateCart();
    }
    function deleteItem(id) {
        $('tr#product-'+id).remove();
        $('.btn-update-cart').show();
        updateCart();
        //$.post('cart', {type:'deleteProduct',product_id:id}, function(data) {});
    }
    function updateCart() {
        products = {};
        var total_orders_price = 0;
        $('tr[id^="product-"]').each(function(i, obj) {
            //var product_id = obj.id.match(/(\d+)+/)[1];
            var product_id = $(this).data('product-id');
            var price = $('#price-product-'+product_id).attr('value').replace( /\D+/g, '');
            var quantity = $('#quantity-'+product_id).val();
            var price_total = price*quantity;
            $('#price-product-total-'+product_id).text(format_curency(price_total));
            total_orders_price += price_total;
            products[product_id] = quantity;
        });
        $('#total_value').text(format_curency(total_orders_price));
        $('#total_value').attr('value',total_orders_price);
        $('span#count_shopping_cart_store').text($('tr[id^="product-"]').length);
    }
    function saveCart() {
        $.post('cart', {type:'updateCart',products:products}, function(data) {});
    }

    function payment() {
        console.log(products);
        if(jQuery.isEmptyObject(products)) return alert('Giỏ hàng trống');
        //$.post('cart', param, function(data) {});
    }
</script>