<div class="col-xs-9">
<div id="main_center" >
	<div class="row">	

		<div class="product_list col-xs-12">
                <div class="tittle-box box-center">
                    <img src="public/themes/images/icon.png" alt="" class="icon_tittle">
                    <h3><a href="#"><?=$title?></a></h3>
                </div> <!-- end tittle -->
                <div class="conten_product col-xs-12" style="width=" 500pxfloat:left;="" "="">
                    

                    <div id="gallery_01" class="col-xs-2">
                    <div class="list_img_products"   ">
                        <?php
                        foreach ($product->image as $image) {
                            echo '<a class="elevatezoom-gallery active " href="#" data-update="" data-image="'. $image["url"].'" data-zoom-image="'.$image["url_large"].'">
                            <img src="'.$image['url_thumb'] .'" width="80%">
                        </a>';
                        }
                        ?>

                    </div>
                    </div>
                    <img id="zoom_03f" class="col-xs-10 pull-right" style="text-align: center; border:1px solid #e8e8e6;" src="<?php echo $product->thumb ?>" data-zoom-image="<?php echo $product->thumblarge ?>" >



                    <script type="text/javascript">
                        jQuery(document).ready(function ($) {
                            $("#zoom_03f").elevateZoom({
                                zoomType                : "inner",
                                //cursor: "crosshair"
                                constrainType:"height", 
                                constrainSize:450,
                                //zoomType: "lens", 
                                containLensZoom: true, 
                                gallery:'gallery_01', 
                                cursor: 'pointer', 
                                easing : true,
                                galleryActiveClass: "active"
                            }); 
                        });
                    </script>

                        <div class="col-xs-12 ">                                        
                            <p style="text-align: center; font-weight: bold; font-size: 24px;padding-top: 11px;
    margin-bottom: -3px; color: #ea28ff;"><?php echo $title; ?></p>

                            <div class="col-xs-4 col-xs-push-4" style = "height: auto;padding: 2px;margin: 2px; text-align: center; font-weight: bold; font-size: 29px; color: red; ">
                            <?php
                            echo($product->price);
                            ?>

                        </div>

                        <div class="col-xs-12 ">
                            <span>
                                <?=nl2br($product->description)?>
                            </span>
                        </div>

                    </div>
                </div> <!-- end conten_product -->
            </div> <!-- end conten_product -->
        <!--User Comments -->
        <div class="commnent">
            <h3>Ý kiến đánh giá sản phẩm:</h3>
            <p>Hãy cho chúng tôi biết nhận xét của bạn về sản phẩm này:</p>
            <form>

            <form action="<?=base_url(uri_string());?>" method="POST">
            	<input type="hidden" name="comment[product_id]" value="<?=$product->id ?>">
            	<input type="hidden" name="comment[rate]" value="0">
                <div class="rate-star"><span class="pick-star">Chọn sao:</span><i class="star-off"></i><i class="star-off"></i><i class="star-off"></i><i class="star-off"></i><i class="star-off"></i><span>(<em id="count-star">0</em> sao)</span></div>
                <div class="form-group rate-title">
                    <label for="usr">Tên:</label>
                    <input type="text" class="form-control" id="usr" name="comment[name]">
                    <label for="usr">Tiêu đề đánh giá (Tùy chọn):</label>
                    <input type="text" class="form-control" id="usr" name="comment[title]">
                </div>
                <div class="form-group">
                    <label for="comment">Comment:</label>
                    <textarea class="form-control" rows="5" id="comment" name="comment[content]"></textarea>
                </div>
                <input type="submit" class="btn btn-info" value="Gửi bình luận">
            </form>
            <div class="all-comments">
            <?php
            if(!empty($product->comments)) {
                echo '<h3>Các nhận xét về sản phẩm:</h3>';
                foreach ($product->comments as $comment) {
                    $star = '';
                    for($i=1;$i<=($comment['rate']);$i++) $star .= '<i class="star"></i>';
                    echo '<div class="user-com">
                        <div class="com-title">'.$star .'<div class="title">'.$comment['title'].'</div></div>
                        <div class="by-user"><span>Khách hàng:</span>'.$comment['name'].'</div>
                        <p>'.$comment['content'].'</p>
                    </div>';
                }
                }
            ?>
            </div>
        </div>
        <!--End User Comments -->

	</div> <!-- end row -->
</div> <!-- end main_center -->


</div><!-- end col-xs-9 -->