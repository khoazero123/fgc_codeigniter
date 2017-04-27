<section id="section-top-contact" class="bg-cover">
    <div class="contact-us">
        <h1 class="h-title">Liên hệ chúng tôi</h1>
    </div>
</section>
<section id="section-main">
    <div class="wrapper">
        <div class="space20"></div>
        <h1 class="h-title center"></h1>
        <div class="row">          
          	<div class="col-xs-12 col-sm-6">
                <form method="post" autocomplete="off">
                    <h3>Gửi thông tin yêu cầu</h3>
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <label id="label_user_name">Tên của bạn</label>
                        </div>
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <input type="text" name="info[user_name]" id="info_user_name" class="form-control" value="">
                        </div>
                    </div>
                    <div class="space10"></div>
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <label id="label_user_email">Email</label>
                        </div>
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <input type="text" name="info[user_email]" id="info_user_email" class="form-control" value="">
                        </div>
                    </div>
                    <div class="space10"></div>
                    <div class="row">
                        <div class="col-md-3 col-sm-4 col-xs-12">
                            <label id="label_tel">Số điện thoại</label>
                        </div>
                        <div class="col-md-6 col-sm-8 col-xs-12">
                            <input type="text" name="info[user_mobile]" id="info_user_mobile" class="form-control" value="">
                        </div>
                    </div>
                    <div class="space10"></div>
                    <div class="row">
                        <div class="col-md-3 col-xs-12">
                            <label id="label_form_data_content">Nội dung cần liên hệ</label>
                        </div>
                        <div class="col-md-9 col-xs-12">
                            <textarea rows="6" name="info[form_data][content]" id="info_form_data_content" class="form-control" style="height: 134px; overflow: hidden; word-wrap: break-word; resize: horizontal;"></textarea>
                        </div>
                    </div>
                    <div class="space10"></div>
                  
                  <div class="row">
                        <div class="col-xs-3">
                            
                        </div>
                        <div class="col-xs-9">
                          <div class="space5"></div>
                          
                            <div class="form_status_notify"></div>
                    <div id="form_status_success" style=""><input type="button" class="btn btn-red" onclick="Form.submitForm.call(this, '', validate_rule , sendSuccess )" value="Gửi cho chúng tôi"></div>
                        </div>
                    </div>

                    <input type="hidden" name="_xstore_module" value="page">
                    <input type="hidden" name="_xstore_view" value="contact_us">

                    

                </form>
	        </div>
            <div class="col-xs-12 col-sm-6">
	            <div class="ctu-item">
	                <h3>Thông tin liên hệ</h3>
	                <div>
	                    P618, Chung cư Tân Phúc<br>
	                    Đống Đa<br>
	                    Hà nội
	                </div>
	               <br>
	               <table>
	                      
	                      <tbody><tr>
	                        <td>Hotline:</td>
	                        <td>0999.999.999</td>
	                    </tr>
	                    <tr>
	                        <td>Điện thoại:</td>
	                        <td>0383.888.888</td>
	                    </tr>
	                    <tr>
	                        <td>Email:</td>
	                        <td><a href="mailto:hotro@fgc.com" class="blue">hotro@fgc.com</a></td>
	                    </tr>
	                </tbody></table>
				</div>
            </div>
        </div>
        <div class="space40"></div>
    </div>
</section>
<div class="space20"></div>
<h3>Bản đồ đường đi:</h3>
<div id="map" style="width:100%;height:500px"></div>

<script>
function myMap() {
  var myCenter = new google.maps.LatLng(51.508742,-0.120850);
  var mapCanvas = document.getElementById("map");
  var mapOptions = {center: myCenter, zoom: 5};
  var map = new google.maps.Map(mapCanvas, mapOptions);
  var marker = new google.maps.Marker({position:myCenter});
  marker.setMap(map);

  // Zoom to 9 when clicking on marker
  google.maps.event.addListener(marker,'click',function() {
    map.setZoom(9);
    map.setCenter(marker.getPosition());
  });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>