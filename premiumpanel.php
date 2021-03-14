<?php session_start();?>
<?php if($_COOKIE["is_premium"] == "d0d02e6eb7f00fba332e877a75fdda60" || $_SESSION["is_premium"] == "d0d02e6eb7f00fba332e877a75fdda60"):?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=0">
	<title>פאנל משתמש פרמיום - Cougar.co.il</title>
	<link href="fonts/_style.css" type="text/css" rel="stylesheet" />
<link href="fonts/public/_style.css" type="text/css" rel="stylesheet" />



	<script>
			window.addEventListener('load', () => document.querySelector('.code-container').appendChild(document.createTextNode(document.querySelector('.source-code').innerText)));
		</script>
		<script class="source-code">
			
			
			window.addEventListener('load', () => {
				// noinspection JSUnresolvedVariable
				let audioCtx = new (window.AudioContext || window.webkitAudioContext)();
				let xhr = new XMLHttpRequest();
				xhr.open('GET', '50.wav');
				xhr.responseType = 'arraybuffer';
				xhr.addEventListener('load', () => {
					let playsound = (audioBuffer) => {
						let source = audioCtx.createBufferSource();
						source.buffer = audioBuffer;
						source.connect(audioCtx.destination);
						source.loop = false;
						source.start();

						setTimeout(function () {
							let t = document.createElement('p');
							t.appendChild(document.createTextNode((new Date()).toLocaleString() + ': Sound played'));
							document.querySelector('.output').appendChild(t);
							playsound(audioBuffer);
						}, 1000 + Math.random()*2500);
					};

					audioCtx.decodeAudioData(xhr.response).then(playsound);
				});
				xhr.send();
			});
			
			
		</script>


	
					<style>
					html,body { height: 100%; }
					body { direction: ltr; min-height: 100%;  }
					body { margin: 0px; padding: 0px; }
					vgsfuiform { display: inline; }
					a { color: blue; text-decoration: none; }
					a:hover { text-decoration: underline; }
					img { border: none; vertical-align: middle; border: none; }
					input { vertical-align: middle; }
					body , table , td , input , select , textarea { color: #444444; font-family: Alef,  arial; font-size: 14px; margin: -9px 0px; }	
					input,select,textarea { vertical-align: middle; -moz-box-sizing: border-box; -ms-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; }
					table { border-collapse: collapse; }
					table td, table th { padding: 0; }
					.ltr { direction: ltr; }
					.ui-autocomplete { z-index:99999 !important; direction: rtl; }				
					
					.ui-state-error { border-color: red !important;  }
					img { max-width: 100%; }
					.block { margin: 5px 5px 0px 5px; }
					.block { margin-left: px; }
					.block { margin-right: px; }
					.block { margin-top: px; }
					
					.block-group { width: 100%; table-layout:fixed; }
					.block-group > tbody > tr > td { vertical-align:top; }
					body { background-position: center top; background-repeat: repeat; background-image: none; background-color: rgba(0,0,0,1); }
					div[class^=ErrorBubble_]{direction:rtl; text-align:left;}
					input,button { border-radius: 0; -webkit-appearance:none;  }
					select { border-radius: 0;  }
					input[type="checkbox"] { -webkit-appearance: checkbox; } 
					input[type="radio"] { -webkit-appearance: radio; } 					
					</style>
				
<link href="js/ui-lightness/jquery-ui-1.10.4.custom.min.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="js/jquery-1.9.0.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.10.0.custom.min.js"></script>
	<script type="text/javascript" src="js/jquery.simpleplaceholder.js"></script>
	<script type="text/javascript" src="js/jquery.h5validate.js"></script>
	<link href="js/code.photoswipe-3.0.5/photoswipe.css" type="text/css" rel="stylesheet" />
	<script type="text/javascript" src="js/code.photoswipe-3.0.5/lib/klass.min.js"></script>
	<script type="text/javascript" src="js/code.photoswipe-3.0.5/code.photoswipe-3.0.5.js"></script>
</head>
<body class="landing-mobile">

			<script>
			function GetCustomQueryParamter(name,encode) {
				var input = $('input[name="_'+name+'"]');
				if (input.size()<1) return "";
				var val = decodeURIComponent(input.val());
				if (encode===true) val = encodeURIComponent(val);
				return val;
				}	

			function GetElementByFieldName(name) {
				return $('*[placeholder="'+name+'"]');
				}				
			</script>
			
<table cellpadding="0" cellspacing="0" style="direction: rtl; width:100%;min-height: 100%;"><tr><td style="vertical-align: top;">

				<div>
					<table class="block-group" cellpadding="0" cellspacing="0">
						<tr>
							<td>
				<div class="block">
					
			<div style="width: 100%; margin-left: auto; margin-right: auto;">
			<div style="text-align:center;"><img alt="" src="2.gif" /></div>
			</div>
			<div style="clear: both; height: 0px;"></div>
			
				</div>
				</td>
						</tr>
					</table>
				</div>
				

				<div>
					<table class="block-group" cellpadding="0" cellspacing="0">
						<tr>
							<td>
				<div class="block">
					
			<div style="width: 100%; margin-left: auto; margin-right: auto;">
			
			<div style="background-color: rgba(224,25,82,1); background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.278431) 0%, rgba(0, 0, 0, 0.278431) 100%); background-position: center center; background-repeat: repeat; border-radius: 0px; -moz-border-radius: 0px; ">
				<p style="text-align: center;">
	<span style="text-align: center;"><span style="font-family: rubik;"><span style="font-size:16px;"><strong style="color: rgb(255, 255, 255);">דף משתמשים:&nbsp;&nbsp;</strong></span></span></span><span style="text-align: center; font-size: 14px;"><u style="color: rgb(255, 215, 0); font-family: rubik; font-size: 18px;">⭐</u><span style="font-family: rubik;"><font color="#ffd700">פרימיום</font></span><u style="color: rgb(255, 215, 0); font-family: rubik; font-size: 18px;">⭐</u></span><span style="text-align: center;">&nbsp;&nbsp;</span><span style="text-align: center; font-size: 16px;"><span style="font-family: alef; color: rgb(255, 255, 255);"><strong>אונליין בצא'ט: <span id="foo"></span> </strong></span></span></p>
<script>
window.onload = function ()
{
    var output = document.getElementById('foo');

    setInterval(function ()
    {
        output.innerHTML = Math.floor(Math.random() * 56);
    }, 15000);
};

</script>
			</div>
			
			</div>
			<div style="clear: both; height: 0px;"></div>
			
				</div>
				</td>
						</tr>
					</table>
				</div>
				

				<div>
<table class="block-group" cellpadding="0" cellspacing="0">
						<tbody><tr>
							<td>
				<div class="block">
					
			<div style="width: 100%;margin-left: auto;margin-right: auto;">
			
			<div style="background-color: rgb(197 197 197);/* background-image: -webkit-linear-gradient(top, rgba(255, 255, 255, 0.278431) 0%, rgba(0, 0, 0, 0.278431) 100%); */background-position: center center;background-repeat: repeat;/* border-radius: 8px; */-moz-border-radius: 8px;/* color: #d41111; */">
				<p style="text-align: center;">
	<a href="https://emojipedia.org/warning/" ping="/url?sa=t&amp;source=web&amp;rct=j&amp;url=https://emojipedia.org/warning/&amp;ved=2ahUKEwi7h9mcn7HqAhXOM5oKHTD7BZQQFjAAegQIAhAB" style="color: rgb(102, 0, 153); cursor: pointer; text-decoration-line: none; font-family: arial, sans-serif; font-size: small; text-align: right;"><span dir="ltr" style="unicode-bidi: isolate;">❤️</span></a><b style="font-size: 16px; color: rgb(255, 255, 255); font-family: rubik; text-align: center;">המנוי שלך כעת פעיל גלישה נעימה</b><a href="https://emojipedia.org/warning/" ping="/url?sa=t&amp;source=web&amp;rct=j&amp;url=https://emojipedia.org/warning/&amp;ved=2ahUKEwi7h9mcn7HqAhXOM5oKHTD7BZQQFjAAegQIAhAB" style="color: rgb(102, 0, 153); cursor: pointer; text-decoration-line: none; font-family: arial, sans-serif; font-size: small; text-align: right;"><span dir="ltr" style="unicode-bidi: isolate;">❤️️</span></a></p>

			</div>
			
			</div>
			<div style="clear: both; height: 0px;"></div>
			
				</div>
				</td>
						</tr>
					</tbody></table>
				</div>
				

				<div>
					<table class="block-group" cellpadding="0" cellspacing="0">
						<tr>
							<td>
				<div class="block">
					
                                <div style="width: 100%; margin-left: auto; margin-right: auto; text-align:center;">
                                <script type="text/javascript">
                    function cat_enlarge(src){
                        if ($("#if-preview").length>0) return;
                        if (src===0){
                            $(".catalog-large-img").remove();
                            return false;
                        }
                        $("body").prepend("<div class='catalog-large-img' ><img alt='Click to enlarge' onclick='return cat_enlarge(0)'><a onclick='return cat_enlarge(0)' href='#'>חזור</div>");
                        $(".catalog-large-img img").attr("src",src);
                         
                         return false;
                    }
               </script>
               <style>
               .catalog-large-img {position:fixed; width:100%; bottom:0px; width:100%; height:100%; top:0px; text-align:center; background:#fff;}
               .catalog-large-img img { display: block;
                                            max-width:100%;
                                            max-height:100%;
                                            width: auto;
                                            margin: 0 auto;
                                            border:8px solid transparent;
                                            box-sizing:border-box;
                                            height: auto;}
               .catalog-large-img img.vertical { width:auto; height:100%;}
               .catalog-large-img + * {display:none !important;}
               </style>
               <style>#UQ0144161927021540 .tdbox-spacer {width:2%;}
#UQ0144161927021540 .prod-title label {font-size:16px; color:rgba(228,56,105,1);}
#UQ0144161927021540 .prod-title label {font-weight:bold;}
#UQ0144161927021540 .prod-description  {font-size:14px;   color:rgba(0,0,0,1);}
#UQ0144161927021540 .prod-details  {font-size:13px; color:rgba(25,25,25,1);}
#UQ0144161927021540 .prod-details {font-weight:bold;}
#UQ0144161927021540 .price-a  {    display: inline-block;font-size:16px; color:rgba(251,2,0,1);}
#UQ0144161927021540 .price-prev  {     display: inline-block;margin:0px 6px; font-size:12px; color:rgba(251,2,0,1);}
#UQ0144161927021540 .prod-discprice  {display: xblock;     display: inline-block;font-size:12px; color:rgba(251,2,0,1);}
#UQ0144161927021540 .price-prprice {display: xblock;     display: inline-block;font-size:14px; color:rgba(247,166,0,1);}
#UQ0144161927021540 .prod-price {font-weight:bold;}
#UQ0144161927021540 .paypal_button img  {cursor:pointer; max-width:100%; width:90px; height:35px;}
#UQ0144161927021540 .prod-contact label { cursor:pointer; }
#UQ0144161927021540 .tdbox>div.item>div {margin-top:10px;}
#UQ0144161927021540 .tdbox>div.item>div>.nfloat {margin-top:10px;}
#UQ0144161927021540 .tdbox>div.item , #UQ0144161927021540 .tdbox .prod-price {margin-bottom:10px;}
#UQ0144161927021540 tr.sep td {border-top:10px solid transparent;}
#UQ0144161927021540 .prod-item img {width:100%;}
#UQ0144161927021540 .tdbox>div.item .prod-lnk a { overflow:hidden; display:block; margin:0 auto; cursor:pointer; text-decoration:none;;height:25px;line-height:25px;background-color:rgb(218 114 114);color:rgba(255,255,255,1);font-weight:bold ;font-size:13px }
#UQ0144161927021540 .tdbox>div.item .prod-lnk a:hover { opacity:0.85;}
#UQ0144161927021540 .tdbox>div.item .prod-lnk a:active { opacity:0.87;}
#UQ0144161927021540 .tdbox>div.item .prod-lnk a label {cursor:pointer;} 
#UQ0144161927021540 .tdbox>div.item .prod-contact a { display:block; margin:0 auto; cursor:pointer;  text-decoration:none;;overflow:hidden; width:100%; max-width:100%;;height:25px;line-height:25px;background-color:rgba(1,94,190,1) ;color:rgba(255,255,255,1);font-weight:bold ;font-size:13px }
#UQ0144161927021540 .tdbox>div.item .prod-quantity select { background-color:rgba(255,255,255,1);color:rgba(68,68,68,1);font-size:13px;border:1px solid rgba(17,137,193,1);border-radius:1px;-webkit-border-radius:1px;-moz-border-radius:1px; }
#UQ0144161927021540 .tdbox>div.item .prod-quantity span { color:rgba(68,68,68,1);;font-size:13px }
#UQ0144161927021540 .tdbox>div.item .prod-nav a { overflow:hidden; display:block; margin:0 auto; cursor:pointer; text-decoration:none;;width:100%; max-width:100%;;height:25px;line-height:25px;background-color:rgba(0,192,95,1) ;color:rgba(255,255,255,1);font-weight:bold ;font-size:13px }
#UQ0144161927021540 {     border-collapse: separate;background-color:rgb(225 226 223);font-family: Heebo ;;word-break:break-word;  min-width:auto; width:100%; display:table; border-right:2px solid transparent ; border-left:2px solid transparent;  }
#UQ0144161927021540 td , #UQ0144161927021540 a , #UQ0144161927021540 table { font-family: Heebo ; }
#UQ0144161927021540 .tdbox {vertical-align:top; width:49%;;background-color:rgba(255,255,255,1);border:3px solid rgba(204,204,204,1);  }
#UQ0144161927021540 .tdbox>div.item { width:90%; height:100%;} 
#UQ0144161927021540 .tdbox>div.item a { max-width:100%;} 
#UQ0144161927021540.catalog_items_1 .prod-item.last-prod-item { float:none;}</style> <table width="100%" id="UQ0144161927021540" class="catalog_items_2">
                        <tbody>
                           <tr><td align="center" class="tdbox"><div class="item"><div class="prod-title">
                <label>לימוררר</label>
                </div><div class="prod-item">
                    
<img alt="סטטוס: 🇮🇱" src="https://123date.me/photos/40/3840/5698840/tb_r3y3a9axie.jpg"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_14" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">לימור 36, מרמת גן</div>
<div class="prod-details">ממתינה שתשלח הודעה ותפתיע אותי תיהיה צעיר פרוע ומדליק אוהבת סטלות ולהנות מהחיים!</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td><td align="center" class="tdbox-spacer"></td><td align="center" class="tdbox"><div class="item"><div class="prod-title">
                <label>רחל</label>
                </div><div class="prod-item">
<img alt="סטטוס: 🇮🇱" src="https://i.imgur.com/av7swDe.png"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_2" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">חגית 43, חיפה</div><div class="prod-details">מחפשת קשר רציני עם חייל מתוק! אפנק אותך ואהיה רק שלך אם יצוץ איזה ניצוץ...</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td></tr><tr class="sep"><td colspan="3"></td></tr><tr><td align="center" class="tdbox"><div class="item"><div class="prod-title">
                <label>כרמלה</label>
                </div><div class="prod-item">
<img alt="כרמלה" src="https://123date.me/photos/143/3743/6243743/tb_wh4e5jz76f.jpg"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_3" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">כרמלה 48, באר שבע</div><div class="prod-details">אין לי כל כך מה לרשום! פשוט תפתיע ותרים טלפון (;</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td><td align="center" class="tdbox-spacer"></td><td align="center" class="tdbox"><div class="item"><div class="prod-title">
                <label>ימית</label>
                </div><div class="prod-item">
<img alt="ימית" src="https://123date.me/photos/139/3939/6118939/tb_yi5kh4x3gf.jpg"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_4" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">ימית 46, רחובות</div><div class="prod-details">לומדת תואר שני למדעי ההתנהגות, חברותית ומשפחתית מאוד! (גרושה ובודדה)אוהבת טיולים וגם ימים רגועים. מחפשת את הדבר האמיתי</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td></tr><tr class="sep"><td colspan="3"></td></tr><tr><td align="center" class="tdbox"><div class="item"><div class="prod-title">
                <label>מארי</label>
                </div><div class="prod-item">
<img alt="סטטוס: 🇮🇱" src="https://123date.me/photos/20/20/6150020/tb_ylzrqmk0f3.jpg"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_5" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">מארי 37, ראשון לציון</div><div class="prod-details">היי אני מארי, יהודייה שגרה בברזיל נמצאת כאן בארץ לתקופה של חצי שנה אוהבת מתוקים קטנים ועסיסיים על מדים!</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td><td align="center" class="tdbox-spacer"></td><td align="center" class="tdbox"><div class="item"><div class="prod-title">
                <label>Ortal_987</label>
                </div><div class="prod-item">
<img alt="Ortal_987" src="https://123date.me/photos/118/718/5980718/tb_z56qhnupv3.jpg"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_6" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">אורטל 41, גבעת אולגה</div><div class="prod-details">מחפשת מישהו שידע לתת לי את מה שאני צריכה!</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td></tr><tr class="sep"><td colspan="3"></td></tr><tr><td align="center" class="tdbox"><div class="item"><div class="prod-title">
                <label>אינה אוהבת חתולים</label>
                </div><div class="prod-item">
<img alt="אינה אוהבת חתולים" src="https://123date.me/photos/166/2566/3107566/tb_3gmzt5acpp.jpg"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_7" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">אינה 53, קריית אונו</div><div class="prod-details">יש בי רצונות כמו שיש להרבה בנות בגיל שלי מחפשת מישהו שיעריך אותי ואני אתן לו בחזרה עולם ומלואו!</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td><td align="center" class="tdbox-spacer"></td><td align="center" class="tdbox"><div class="item"><div class="prod-title">
                 <label>שרה היפה</label>
                </div><div class="prod-item">
<img alt="שרה היפה" src="https://123date.me/photos/179/4379/1999379/tb_8hlz5p1ruz.jpg"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_8" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">שרה 42, אשדוד</div><div class="prod-details">צעיר ושובב דבר איתי אין לי מה להוסיף (: (:</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td></tr><tr class="sep"><td colspan="3"></td></tr><tr><td align="center" class="tdbox"><div class="item"><div class="prod-title">
               <label>אולגה</label>
                </div><div class="prod-item">
<img alt="אולגה" src="https://i.imgur.com/av7swDe.png"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_9" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">אולגה 51, אשדוד</div><div class="prod-details">מתוקה כמו סוכריה אוהבת את החיים ומחפשת ריגוש וניצוץ חדש</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td><td align="center" class="tdbox-spacer"></td><td align="center" class="tdbox"><div class="item"><div class="prod-title">
                 <label>ליאנושש</label>
                </div><div class="prod-item">
<img alt="ליאנושש" src="https://123date.me/photos/70/470/6590470/tb_uam1x8lq82.jpg"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_10" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">ליאן 48, בני ברק</div><div class="prod-details">אין טקסט!</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td></tr><tr class="sep"><td colspan="3"></td></tr><tr><td align="center" class="tdbox"><div class="item"><div class="prod-title">
              <label>גנההה</label>
                </div><div class="prod-item">
<img alt="גנההה" src="https://i.imgur.com/av7swDe.png"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_11" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">ג'נה 37, גבעתיים</div><div class="prod-details">אין תמונה כי אני נשואה לבעל זקן ללא שום חשק וריגושים!!! מחפשת מישהו חמוד וטרי שידע לתת לי את זה.</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td><td align="center" class="tdbox-spacer"></td><td align="center" class="tdbox"><div class="item"><div class="prod-title">
             <label>נויה</label>
                </div><div class="prod-item">
<img alt="נויה" src="https://123date.me/photos/103/4503/6589503/tb_li80yru8qj.jpg"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_15" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">נויה 44, תל אביב</div><div class="prod-details">בודדה וחמודה בת 44, גרושה + 2 תמונות שולחת רק בוואצפ!!!צעיר וסקסי? שלח הודעה בוואצפ או תתקשר!</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td></tr><tr class="sep"><td colspan="3"></td></tr><tr><td align="center" class="tdbox"><div class="item"><div class="prod-title">
<label>חסויה ונשואה</label>
                </div><div class="prod-item">
<img alt="חסויה ונשואה" src="https://i.imgur.com/av7swDe.png"  
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_16" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">הנסיכה 46, קרית אתא</div><div class="prod-details">נשואה ומחפשת משהו חדש מהצד!</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td><td align="center" class="tdbox-spacer"></td><td align="center" class="tdbox"><div class="item"><div class="prod-title">
                <label>אדלדל</label>
                </div><div class="prod-item">
<img alt="אדלדל" src="https://i.imgur.com/av7swDe.png"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_19" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">אדל 44, טבריה</div><div class="prod-details">לא יודעת מה לרשום ממש 😃</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td></tr><tr class="sep"><td colspan="3"></td></tr><tr><td align="center" class="tdbox"><div class="item"><div class="prod-title">
                <label>רחל</label>
                </div><div class="prod-item">
<img alt="רחל" src="https://i.imgur.com/av7swDe.png"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_17" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">רחלה 59, ראש העין</div><div class="prod-details">היי קוראים לי רחל אוהבת שקוראים לי רחלה יודעת לתת מעצמי הרבה גם תמיכה כספית מקווה שתיתן גם אתה הרבה בשבילי ילדון ולא כספית אם הבנת!?!</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td><td align="center" class="tdbox-spacer"></td><td align="center" class="tdbox"><div class="item"><div class="prod-title">
<label>דיאנה</label>
                </div><div class="prod-item">
<img alt="דיאנה" src="https://123date.me/photos/134/734/6595734/tb_qbpp4hw7nd.jpg"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_11" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">דיאנה 67, עפולה</div><div class="prod-details">אין טקסט!</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td></tr><tr class="sep"><td colspan="3"></td></tr><tr><td align="center" class="tdbox"><div class="item"><div class="prod-title">
                <label>ברבי</label>
                </div><div class="prod-item">
<img alt="סטטוס: ⭐" src="https://i.imgur.com/av7swDe.png"  />
<!-- LikeBtn.com BEGIN -->
<span class="likebtn-wrapper" data-theme="disk" data-i18n_like="לייק" data-white_label="true" data-identifier="item_13" data-popup_disabled="true" data-site_id="5fc6bb50943ec91b6c28eacd"></span>
<script>(function(d,e,s){if(d.getElementById("likebtn_wjs"))return;a=d.createElement(e);m=d.getElementsByTagName(e)[0];a.async=1;a.id="likebtn_wjs";a.src=s;m.parentNode.insertBefore(a, m)})(document,"script","//w.likebtn.com/js/w/widget.js");</script>
<!-- LikeBtn.com END -->
</div><div class="prod-description">Barbie, 42</div><div class="prod-details">אין טקסט!</div><div class="prod-lnk">
                        <a href="https://cougar.co.il/signup/Premium-Users-chat/ChatUser-IDhidden-"><label>שלח הודעה</label></a>
                </div></div></td><td align="center" class="tdbox-spacer"></td></tr>
                        </tbody>
                </table><script>
        
var cat_rsUQ0144161927021540 = function(){
      $("#UQ0144161927021540 tr img").load(function(){
                        var td = $(this).parent().parent().parent().parent().parent();
                         thgt = td.height();
                        
                        if (parseInt(td.parent().attr("thgt")) <= thgt){ 
                            td.parent().attr("thgt",thgt);
                            td.parent().find("td").height(thgt);
                        }
                       });
                       
                 $("#UQ0144161927021540.catalog_items_1 .prod-item").each(function(){
                        var ind = $(this).parent().index();
                         
                        if ($(this).parent().parent().children().length == ind+1 && $(this).next().length==0)  $(this).addClass("last-prod-item");
                });
    
     return;
     $("#UQ0144161927021540").css("borderSpacing", ( $("#UQ0144161927021540").width() / 18) +"px");                  
};
            $(document).ready(function(){
                

                     cat_rsUQ0144161927021540();
                    $(window).resize(function() {cat_rsUQ0144161927021540();});  
                    $("#UQ0144161927021540 tr").last().css("borderBottom","none"); 
                    

                    /* handle last row */
                    
                    if (2 == 2 && $("#UQ0144161927021540 tr:last td").length==1){
                                $("#UQ0144161927021540 tr:last td").attr("colspan","2");
                        }
                    if (2 == 1){
                         var set_single_column_float = function(){
                            $("#UQ0144161927021540 .prod-item").each(function(){
                                
                                var simg = new Image();
                                simg.src = $(this).find("img").attr("src");
                                var $this = $(this);
                                
                                simg.onload = function(){
                                   $this.parent().find(".nfloat").removeClass("nfloat");
                                   $this.parent().find(".cleaner").removeClass("cleaner");
                                    var next_elem = $this.next();
                                    var img_hgt = $this.height()+35;
                                    var float_hgt = next_elem.height();
                                    while (next_elem.length==1){
                                        next_elem.addClass("nfloat");
                                        next_elem= next_elem.next();
                                        float_hgt += next_elem.height();
                                         
                                    }
                                    next_elem.addClass("nfloat");
                                    if (next_elem.next()) next_elem.next().addClass("cleaner");
                                  };;
                            });     
                         };
                         set_single_column_float();
                         $(window).resize(set_single_column_float);
                    }
                    });
                </script>
                                </div>
                                <div style="clear: both; height: 0px;"></div>
                                
				</div>
				</td>
						</tr>
					</table>
				</div>
				

				<div>
					<table class="block-group" cellpadding="0" cellspacing="0">
						<tr>
							<td>
				<div class="block">
					
			<div style="width: 100%; margin-left: auto; margin-right: auto;">
			
			
			
			</div>
			<div style="clear: both; height: 0px;"></div>
			
				</div>
				</td>
						</tr>
					</table>
				</div>
				

				<div>
					<table class="block-group" cellpadding="0" cellspacing="0">
						<tr>
							<td>
				<div class="block">
					
					<div style="width: 100%; margin-left: auto; margin-right: auto;">
					
			<script>


			
				function ValidateIdentityNumber(str) { 
var IDnum = String(str);
if ((IDnum.length > 9) || (IDnum.length < 5)) return false; 
if (isNaN(IDnum)) return false; 
if (IDnum.length < 9) while(IDnum.length < 9) IDnum = "0" + IDnum;
var mone = 0, incNum;
for (var i=0; i < 9; i++) {
incNum = Number(IDnum.charAt(i));
incNum *= (i%2)+1;
if (incNum > 9) incNum -= 9;
mone += incNum;
}
if (mone%10 == 0) return true;
return false;
}
			


			$(document).on("ready",function(){
				$("[placeholder]").each(function(){
					var el = $(this);
					el.attr("aria-label",el.attr("placeholder"));
					el.attr("aria-placeholder",el.attr("placeholder"));
					});
				});

			var ErrorBubbles_9199305 = [];
			
			function ClearErrorBubble_9199305() {
				
				for(var i=0; i<ErrorBubbles_9199305.length; i++) {
					ErrorBubbles_9199305[i].ele.removeAttr("aria-invalid");
					ErrorBubbles_9199305[i].ele.removeAttr("aria-describedby");
					ErrorBubbles_9199305[i].box.remove();
					}
				
				ErrorBubbles_9199305 = [];
				
				}
				
			var ErrorBubbleIds_9199305 = 0;	
			function ErrorBubble_9199305(ele,str) {
				
				ErrorBubbleIds_9199305++;
				var id = "ErrorBubbleId_9199305_"+ErrorBubbleIds_9199305;
				ele.attr("aria-invalid","true");
				ele.attr("aria-describedby",id);
				
				var box = $("<div></div>").appendTo("body");
				box.attr("id",id);
				box.addClass("ErrorBubble_9199305");
				box.html(str);
				box.css({
					top:		(ele.offset().top+ele.outerHeight())+"px",
					left:		(ele.offset().left)+"px",
					width:		(ele.outerWidth())+"px",
					});
					
				ErrorBubbles_9199305.push({ele:ele,str:str,box:box});		
					
				return box;
                                }			
			
			function validate_email_9199305(email) {
                                email = email.replace(/^\s+|\s+$/g, "");
                                email = email.replace("@ ","@").replace("@ ","@").replace(" @ ","@").replace(" @","@")
                                email = email.replace(". ",".").replace(". ",".");
                                email = email.replace(" .",".").replace(" .",".");
				var re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				return ( re.test(email) ? true : "כתובת מייל שגויה" );
				}
	
			function validate_phone_9199305(str) {
				var PhoneFieldValidationRegex = {"text":"^05[0,1,2,3,4,5,7,8][1,2,3,4,5,6,7,8,9][0-9]{6}$|^07[0-9]{8}$|^0[1,2,3,4,8,9][0-9]{7}$"}.text;
				var re = new RegExp(PhoneFieldValidationRegex, "i");
				var valid = re.test(str);				
				return ( valid ? true : "מספר הטלפון אינו תקין (אין להשתמש במקף)" );
			}
                                

                        function validate_file_9199305(ev_files,item) {
                             
                            //$(".ErrorBubble_9199305").remove();
							ClearErrorBubble_9199305();
							
                            /* validate size and extension */
                            var exts = item.val().split('.');
                            var ext = exts[exts.length-1].toLowerCase();
                            item.css({"margin-bottom":"0px"})
                            if ($.inArray(ext,["jpg","jpeg","png","pdf","gif"])<0){
                            
                                if (item.data("required")=="1"){
                                    if (item.val().length>0) ErrorBubble_9199305(item.css({"margin-bottom":"10px"}),"יש להעלות קובץ עם סיומת jpg/png/gif/pdf");
                                    if (ev_files===false && item.val().length==0) ErrorBubble_9199305(item,"שדה חובה");
                                     return true; 

                                }else{
                                    if (item.val().length>0) ErrorBubble_9199305(item.css({"margin-bottom":"10px"}),"יש להעלות קובץ עם סיומת jpg/png/gif/pdf");
                                    item.val("");
                                }
                            }
                           

                            if (ev_files!==false){
                                     if (!ev_files[0]) return true;
                                     if (ev_files[0].size >= 5242880){
                                        
                                        ErrorBubble_9199305(item.css({"margin-bottom":"10px"}),"ניתן להעלות קובץ עד 5 מגה");
                                        return true;
                                     }        
                            }
                            return false;

                        }
			
			function validate_form_9199305(form,validateOnly) {
				if (validateOnly!==true) validateOnly = false;	
			
				//$(".ErrorBubble_9199305").remove();
				ClearErrorBubble_9199305();
			
				var items = $("#form_9199305 [data-type]");
				var haveErrors = false;

				var validate_username_val = null;
				var validate_password_val = null;				
				
				for(var i=0; i<items.size(); i++) {
						
					var item = 	$(items.get(i));
					
					if (item.attr("data-validate")=="username") validate_username_val = item.val();
					if (item.attr("data-validate")=="password") validate_password_val = item.val();
					
					switch( item.data("type") ) {
                                                case "survey_multidrag":
                                                case "survey_drag":
                                                        
                                                       var rangeval = item.find(".ionrange").val();
                                                       var rval = item.find("input#sind"+item.find(".ionrange").val()).val();
                                                       item.find("input#sind_hidden").val(rval);
                                                       break; 
                                                       

                                                case "survey_matrix":
                                                       if (item.data("required")=="1"){

                                                            var avalue=true;
                                                            item.find("select").each(function() { if (!$(this).val() || $(this).val().length==0 || $(this).val()=="0") avalue=false ; });
                                                          if (!avalue){
                                                                haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
                                                            }
                                                        }
                                                        break;
                                                case "survey_multirate":            
                                                case "survey_rate":
                                                        if (item.data("required")=="1"){
                                                            if (item.find("input:checked").length!=1){
                                                                haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
                                                            }
                                                        }
                                                        break;
                                                 
						case "CAPTCHA":
						
							var container = item.parents(".WrapperCAPTCHA").find(".ContainerCAPTCHA");
							if (item.val()=="") {	
								container.addClass("form_error");
								haveErrors = true;
								ErrorBubble_9199305(container,"שדה חובה");
								} else {
								container.removeClass("form_error");
								}
							
							break;
							
						case "checkbox":
						case "checkboxChecked":
							if (!item.prop("checked") && item.data("required")=="1") {
								haveErrors = true;
								item.parent().addClass("form_9199305_error");
								ErrorBubble_9199305(item.parent(),"שדה חובה");
								} else {
								item.parent().removeClass("form_9199305_error");
								}
							break;
							
						case "radio":
							item.removeClass("form_9199305_error");
							if (item.data("required")=="1") {
								if ($('input[type="radio"][name="'+item.data("name")+'"]:checked').size()!=1) {
									haveErrors = true;
									item.addClass("form_9199305_error");
									ErrorBubble_9199305(item,"שדה חובה");
									}
								}
							break;
						case "date":
                                                        
							item.parent().parent().find("select").removeClass("form_9199305_error"); 
                                                            
							if ( item.data("required")=="1") {
								
								var date_par = item.parent().parent();
								
								var s_year = parseInt(item.parent().parent().find("select.syear").val());
								var s_month = parseInt(item.parent().parent().find("select.smonth").val());
								var s_day = parseInt(item.parent().parent().find("select.sday").val());
								var d = new Date(s_year,s_month-1,s_day);
								var v = d && (d.getMonth() + 1) == s_month;									
								
								if (!v){
									haveErrors = true;
									item.parent().parent().children().addClass("form_9199305_error");
									var date_err =  ErrorBubble_9199305(date_par,"תאריך לא חוקי");  
									date_err.css({width:date_par.width()+"px",marginTop:(item.parent().height()+3)+"px"});									
									} else {
									item.parent().parent().children().removeClass("form_9199305_error");
									}								
								
								}

							break;
						case "fileupload":
                                                        if ( item.val() == "" && item.data("required")=="1") {
                                                                haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
								} else {
								item.removeClass("form_9199305_error");
								}
                                                        
                                                          $("#form_9199305").attr("enctype","multipart/form-data"); 
                                                          var file_errs = validate_file_9199305(false,item);   
                                                          if (file_errs) haveErrors = true;
                                                        
                                                    
                                                
                                                        break;
                                                
                                                case "survey_multicheckbox":
                                                        if ( item.find("input:checked").length==0 && item.data("required")=="1") {
								haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
								} else {
								item.removeClass("form_9199305_error");
								}								
							break;

                                                case "survey_multibuttons":
                                                        if ( item.find("button.selected").length==0 && item.data("required")=="1") {
								haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
								} else {
								item.removeClass("form_9199305_error");
								}								
							break;


                        case "name":
						case "select":
						case "area":
						case "city":
						case "text":
							if ( item.val() == "" && item.data("required")=="1") {
								haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
								} else if ( item.val() != "" && item.attr("data-IdentityNumber")=="1" && !ValidateIdentityNumber(item.val()) ) {
								haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"תעודת זהות לא תקינה");									
								} else {
								item.removeClass("form_9199305_error");
								}								
							break;
							
						case "phone":
							if ( item.val() == "" && item.data("required")=="1") {
                                                                 
								haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
								} else if ( item.val() != "" && validate_phone_9199305(item.val())!==true) {
								haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,validate_phone_9199305(item.val()));								
								} else {
								item.removeClass("form_9199305_error");
								}								
							break;							
							
						case "email":
							if ( item.val() == "" && item.data("required")=="1") {
								haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
								} else if ( item.val() != "" && validate_email_9199305(item.val())!==true) {
								haveErrors = true;
								item.addClass("form_9199305_error");	
								ErrorBubble_9199305(item,validate_email_9199305(item.val()));									
								} else {
								item.removeClass("form_9199305_error");
								}								
							break;							
							
						}
					}
					
				if (validateOnly) return haveErrors;	
					
				if (haveErrors) return false;
				if (form_submitted_9199305) return false;
				form_submitted_9199305 = true;
				LoadingAnimation_9199305();	
				// return false;
				
				if (!haveErrors && validate_username_val!=null && validate_password_val!=null && last_validate != validate_username_val+":"+validate_password_val) {
					haveErrors = true;
				
					$.ajax({
						dataType: "json",
						url: "index.php",
						data: {
							page: "landing.validate",
							id: "350573",
							token: "642563560b43218dd570122c006f785d",
							username: validate_username_val,
							password: validate_password_val,
							},
						success: function(data) {
							if (data.success) {
								form_submitted_9199305 = false;
								last_validate = validate_username_val+":"+validate_password_val;
								$("#form_9199305").submit();
								} else {
								ErrorBubble_9199305($(".PageSubmitButton"),data.error);
								form_submitted_9199305 = false;								
								}
							}
						});				
					return false;
					}
					
				//	
			
				var formdata = new FormData($(form).get(0));
				formdata.append("output","json");
				
				$.ajax({
					
					cache: false,
					contentType: false,
					processData: false,
					method: "POST",					
					
					type: "POST",
					dataType: "json",
					url: $(form).attr("action"),
					data: formdata,
					success: function(data) {
						
						if (data.success) {
							window.location.href = data.data;							
							} else {
								
							form_submitted_9199305 = false;	
								
							$("#global-popup-error-text").text(data.error);
							$("#global-popup-error").show();
							}
							
						// console.log("data",data);
						}
					});					
					
				// return true;				
				return false;				

				}	
		
			var last_validate = null;	
			
			var form_submitted_9199305 = false;				
			
			var LoadingAnimationInterval_9199305 = null;
			function LoadingAnimation_9199305()	{
				if (LoadingAnimationInterval_9199305!=null) return;
				if (!form_submitted_9199305) return;
				var el = $("<div></div>").appendTo("body");
				el.css({
					"position":"fixed",
					"left":"0px",
					"top":"0px",
					"right":"0px",
					"bottom":"0px",
					"z-index":"9999999",
					"background":"rgba(255,255,255,0.85) url(images/loading_mobile.gif) center 100px no-repeat",
					});
				el.hide();
				setTimeout(function(){
					if (el) el.show();
					},2000);
				LoadingAnimationInterval_9199305 = setInterval(function(){
					if (form_submitted_9199305)	return;	
					el.remove();
					clearInterval(LoadingAnimationInterval_9199305);
					LoadingAnimationInterval_9199305 = null;
					},1000);
				}			
			window["LoadingAnimation"] = LoadingAnimation_9199305;
			
			</script>
		
			<style>
                        
                                #form_9199305 , #form_9199305 input,  #form_9199305 textarea, #form_9199305 select  , #form_9199305 td , #form_9199305 label {font-family:Rubik;}
                                    



                                    
                                        
			.form_9199305_error { margin-bottom: 20px !important; color: black !important; border: 1px solid red !important; background-color: #FF7878 !important; }
			.ErrorBubble_9199305 { position: absolute; font-weight: bold; font-size: 13px; height: 15px;  color: red; }
			
			
				#form_9199305 .inp-ph::-webkit-input-placeholder{ color: rgba(0,0,0,1); }
				#form_9199305 .inp-ph:-moz-placeholder { color: rgba(0,0,0,1); }
				#form_9199305 .inp-ph::-moz-placeholder { color: rgba(0,0,0,1); }
				#form_9199305 .inp-ph:-ms-input-placeholder { color: rgba(0,0,0,1); }
				#form_9199305 -webkit-input-placeholder {text-indent:5em;  padding-right:5em; margin-left:5em; } 
                                #form_9199305 select::selection {background:transparent !important; border:none !important } 
                                #form_9199305 select::-moz-selection {background:transparent !important;  border:none !important } 
                                #form_9199305 select::-webkit-selection {background:transparent !important; border:none !important } 
                                       #form_9199305 div::selection {background:transparent !important; border:none !important } 
                                #form_9199305 div::-moz-selection {background:transparent !important;  border:none !important } 
                                #form_9199305 div::-webkit-selection {background:transparent !important; border:none !important } 
                                
				#form_9199305 .select-ph { color: rgba(0,0,0,1) !important; }
				
				
                               
			</style>
			
		
				
				
				
				
				<input type="hidden" name="page" value="landing.action" />
				<input type="hidden" name="id" value="350573" />
				<input type="hidden" name="token" value="642563560b43218dd570122c006f785d" />
				<input type="hidden" name="force" value="mobile" />
				<input type="hidden" name="elementId" value="9199305" />
				
				<input type="hidden" name="elementAction" value="submit" />
				
				
				
				
					
					
								
					
				</form>
                                <!--<div style="height:6px;"></div>-->
			</div>
			
			
					</div>
					<div style="clear: both; height: 0px;"></div>
					
				</div>
				</td>
						</tr>
					</table>
				</div>
				

				<div>
					<table class="block-group" cellpadding="0" cellspacing="0">
						<tbody><tr>
							<td>
				<div class="block">
					
					<div style="width: 100%; margin-left: auto; margin-right: auto;">
					
			<script>


			
				function ValidateIdentityNumber(str) { 
var IDnum = String(str);
if ((IDnum.length > 9) || (IDnum.length < 5)) return false; 
if (isNaN(IDnum)) return false; 
if (IDnum.length < 9) while(IDnum.length < 9) IDnum = "0" + IDnum;
var mone = 0, incNum;
for (var i=0; i < 9; i++) {
incNum = Number(IDnum.charAt(i));
incNum *= (i%2)+1;
if (incNum > 9) incNum -= 9;
mone += incNum;
}
if (mone%10 == 0) return true;
return false;
}
			


			$(document).on("ready",function(){
				$("[placeholder]").each(function(){
					var el = $(this);
					el.attr("aria-label",el.attr("placeholder"));
					el.attr("aria-placeholder",el.attr("placeholder"));
					});
				});

			var ErrorBubbles_9199305 = [];
			
			function ClearErrorBubble_9199305() {
				
				for(var i=0; i<ErrorBubbles_9199305.length; i++) {
					ErrorBubbles_9199305[i].ele.removeAttr("aria-invalid");
					ErrorBubbles_9199305[i].ele.removeAttr("aria-describedby");
					ErrorBubbles_9199305[i].box.remove();
					}
				
				ErrorBubbles_9199305 = [];
				
				}
				
			var ErrorBubbleIds_9199305 = 0;	
			function ErrorBubble_9199305(ele,str) {
				
				ErrorBubbleIds_9199305++;
				var id = "ErrorBubbleId_9199305_"+ErrorBubbleIds_9199305;
				ele.attr("aria-invalid","true");
				ele.attr("aria-describedby",id);
				
				var box = $("<div></div>").appendTo("body");
				box.attr("id",id);
				box.addClass("ErrorBubble_9199305");
				box.html(str);
				box.css({
					top:		(ele.offset().top+ele.outerHeight())+"px",
					left:		(ele.offset().left)+"px",
					width:		(ele.outerWidth())+"px",
					});
					
				ErrorBubbles_9199305.push({ele:ele,str:str,box:box});		
					
				return box;
                                }			
			
			function validate_email_9199305(email) {
                                email = email.replace(/^\s+|\s+$/g, "");
                                email = email.replace("@ ","@").replace("@ ","@").replace(" @ ","@").replace(" @","@")
                                email = email.replace(". ",".").replace(". ",".");
                                email = email.replace(" .",".").replace(" .",".");
				var re = /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
				return ( re.test(email) ? true : "כתובת מייל שגויה" );
				}
	
			function validate_phone_9199305(str) {
				var PhoneFieldValidationRegex = {"text":"^05[0,1,2,3,4,5,7,8][1,2,3,4,5,6,7,8,9][0-9]{6}$|^07[0-9]{8}$|^0[1,2,3,4,8,9][0-9]{7}$"}.text;
				var re = new RegExp(PhoneFieldValidationRegex, "i");
				var valid = re.test(str);				
				return ( valid ? true : "מספר הטלפון אינו תקין (אין להשתמש במקף)" );
			}
                                

                        function validate_file_9199305(ev_files,item) {
                             
                            //$(".ErrorBubble_9199305").remove();
							ClearErrorBubble_9199305();
							
                            /* validate size and extension */
                            var exts = item.val().split('.');
                            var ext = exts[exts.length-1].toLowerCase();
                            item.css({"margin-bottom":"0px"})
                            if ($.inArray(ext,["jpg","jpeg","png","pdf","gif"])<0){
                            
                                if (item.data("required")=="1"){
                                    if (item.val().length>0) ErrorBubble_9199305(item.css({"margin-bottom":"10px"}),"יש להעלות קובץ עם סיומת jpg/png/gif/pdf");
                                    if (ev_files===false && item.val().length==0) ErrorBubble_9199305(item,"שדה חובה");
                                     return true; 

                                }else{
                                    if (item.val().length>0) ErrorBubble_9199305(item.css({"margin-bottom":"10px"}),"יש להעלות קובץ עם סיומת jpg/png/gif/pdf");
                                    item.val("");
                                }
                            }
                           

                            if (ev_files!==false){
                                     if (!ev_files[0]) return true;
                                     if (ev_files[0].size >= 5242880){
                                        
                                        ErrorBubble_9199305(item.css({"margin-bottom":"10px"}),"ניתן להעלות קובץ עד 5 מגה");
                                        return true;
                                     }        
                            }
                            return false;

                        }
			
			function validate_form_9199305(form,validateOnly) {
				if (validateOnly!==true) validateOnly = false;	
			
				//$(".ErrorBubble_9199305").remove();
				ClearErrorBubble_9199305();
			
				var items = $("#form_9199305 [data-type]");
				var haveErrors = false;

				var validate_username_val = null;
				var validate_password_val = null;				
				
				for(var i=0; i<items.size(); i++) {
						
					var item = 	$(items.get(i));
					
					if (item.attr("data-validate")=="username") validate_username_val = item.val();
					if (item.attr("data-validate")=="password") validate_password_val = item.val();
					
					switch( item.data("type") ) {
                                                case "survey_multidrag":
                                                case "survey_drag":
                                                        
                                                       var rangeval = item.find(".ionrange").val();
                                                       var rval = item.find("input#sind"+item.find(".ionrange").val()).val();
                                                       item.find("input#sind_hidden").val(rval);
                                                       break; 
                                                       

                                                case "survey_matrix":
                                                       if (item.data("required")=="1"){

                                                            var avalue=true;
                                                            item.find("select").each(function() { if (!$(this).val() || $(this).val().length==0 || $(this).val()=="0") avalue=false ; });
                                                          if (!avalue){
                                                                haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
                                                            }
                                                        }
                                                        break;
                                                case "survey_multirate":            
                                                case "survey_rate":
                                                        if (item.data("required")=="1"){
                                                            if (item.find("input:checked").length!=1){
                                                                haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
                                                            }
                                                        }
                                                        break;
                                                 
						case "CAPTCHA":
						
							var container = item.parents(".WrapperCAPTCHA").find(".ContainerCAPTCHA");
							if (item.val()=="") {	
								container.addClass("form_error");
								haveErrors = true;
								ErrorBubble_9199305(container,"שדה חובה");
								} else {
								container.removeClass("form_error");
								}
							
							break;
							
						case "checkbox":
						case "checkboxChecked":
							if (!item.prop("checked") && item.data("required")=="1") {
								haveErrors = true;
								item.parent().addClass("form_9199305_error");
								ErrorBubble_9199305(item.parent(),"שדה חובה");
								} else {
								item.parent().removeClass("form_9199305_error");
								}
							break;
							
						case "radio":
							item.removeClass("form_9199305_error");
							if (item.data("required")=="1") {
								if ($('input[type="radio"][name="'+item.data("name")+'"]:checked').size()!=1) {
									haveErrors = true;
									item.addClass("form_9199305_error");
									ErrorBubble_9199305(item,"שדה חובה");
									}
								}
							break;
						case "date":
                                                        
							item.parent().parent().find("select").removeClass("form_9199305_error"); 
                                                            
							if ( item.data("required")=="1") {
								
								var date_par = item.parent().parent();
								
								var s_year = parseInt(item.parent().parent().find("select.syear").val());
								var s_month = parseInt(item.parent().parent().find("select.smonth").val());
								var s_day = parseInt(item.parent().parent().find("select.sday").val());
								var d = new Date(s_year,s_month-1,s_day);
								var v = d && (d.getMonth() + 1) == s_month;									
								
								if (!v){
									haveErrors = true;
									item.parent().parent().children().addClass("form_9199305_error");
									var date_err =  ErrorBubble_9199305(date_par,"תאריך לא חוקי");  
									date_err.css({width:date_par.width()+"px",marginTop:(item.parent().height()+3)+"px"});									
									} else {
									item.parent().parent().children().removeClass("form_9199305_error");
									}								
								
								}

							break;
						case "fileupload":
                                                        if ( item.val() == "" && item.data("required")=="1") {
                                                                haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
								} else {
								item.removeClass("form_9199305_error");
								}
                                                        
                                                          $("#form_9199305").attr("enctype","multipart/form-data"); 
                                                          var file_errs = validate_file_9199305(false,item);   
                                                          if (file_errs) haveErrors = true;
                                                        
                                                    
                                                
                                                        break;
                                                
                                                case "survey_multicheckbox":
                                                        if ( item.find("input:checked").length==0 && item.data("required")=="1") {
								haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
								} else {
								item.removeClass("form_9199305_error");
								}								
							break;

                                                case "survey_multibuttons":
                                                        if ( item.find("button.selected").length==0 && item.data("required")=="1") {
								haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
								} else {
								item.removeClass("form_9199305_error");
								}								
							break;


                        case "name":
						case "select":
						case "area":
						case "city":
						case "text":
							if ( item.val() == "" && item.data("required")=="1") {
								haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
								} else if ( item.val() != "" && item.attr("data-IdentityNumber")=="1" && !ValidateIdentityNumber(item.val()) ) {
								haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"תעודת זהות לא תקינה");									
								} else {
								item.removeClass("form_9199305_error");
								}								
							break;
							
						case "phone":
							if ( item.val() == "" && item.data("required")=="1") {
                                                                 
								haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
								} else if ( item.val() != "" && validate_phone_9199305(item.val())!==true) {
								haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,validate_phone_9199305(item.val()));								
								} else {
								item.removeClass("form_9199305_error");
								}								
							break;							
							
						case "email":
							if ( item.val() == "" && item.data("required")=="1") {
								haveErrors = true;
								item.addClass("form_9199305_error");
								ErrorBubble_9199305(item,"שדה חובה");
								} else if ( item.val() != "" && validate_email_9199305(item.val())!==true) {
								haveErrors = true;
								item.addClass("form_9199305_error");	
								ErrorBubble_9199305(item,validate_email_9199305(item.val()));									
								} else {
								item.removeClass("form_9199305_error");
								}								
							break;							
							
						}
					}
					
				if (validateOnly) return haveErrors;	
					
				if (haveErrors) return false;
				if (form_submitted_9199305) return false;
				form_submitted_9199305 = true;
				LoadingAnimation_9199305();	
				// return false;
				
				if (!haveErrors && validate_username_val!=null && validate_password_val!=null && last_validate != validate_username_val+":"+validate_password_val) {
					haveErrors = true;
				
					$.ajax({
						dataType: "json",
						url: "index.php",
						data: {
							page: "landing.validate",
							id: "350573",
							token: "642563560b43218dd570122c006f785d",
							username: validate_username_val,
							password: validate_password_val,
							},
						success: function(data) {
							if (data.success) {
								form_submitted_9199305 = false;
								last_validate = validate_username_val+":"+validate_password_val;
								$("#form_9199305").submit();
								} else {
								ErrorBubble_9199305($(".PageSubmitButton"),data.error);
								form_submitted_9199305 = false;								
								}
							}
						});				
					return false;
					}
					
				//	
			
				var formdata = new FormData($(form).get(0));
				formdata.append("output","json");
				
				$.ajax({
					
					cache: false,
					contentType: false,
					processData: false,
					method: "POST",					
					
					type: "POST",
					dataType: "json",
					url: $(form).attr("action"),
					data: formdata,
					success: function(data) {
						
						if (data.success) {
							window.location.href = data.data;							
							} else {
								
							form_submitted_9199305 = false;	
								
							$("#global-popup-error-text").text(data.error);
							$("#global-popup-error").show();
							}
							
						// console.log("data",data);
						}
					});					
					
				// return true;				
				return false;				

				}	
		
			var last_validate = null;	
			
			var form_submitted_9199305 = false;				
			
			var LoadingAnimationInterval_9199305 = null;
			function LoadingAnimation_9199305()	{
				if (LoadingAnimationInterval_9199305!=null) return;
				if (!form_submitted_9199305) return;
				var el = $("<div></div>").appendTo("body");
				el.css({
					"position":"fixed",
					"left":"0px",
					"top":"0px",
					"right":"0px",
					"bottom":"0px",
					"z-index":"9999999",
					"background":"rgba(255,255,255,0.85) url(images/loading_mobile.gif) center 100px no-repeat",
					});
				el.hide();
				setTimeout(function(){
					if (el) el.show();
					},2000);
				LoadingAnimationInterval_9199305 = setInterval(function(){
					if (form_submitted_9199305)	return;	
					el.remove();
					clearInterval(LoadingAnimationInterval_9199305);
					LoadingAnimationInterval_9199305 = null;
					},1000);
				}			
			window["LoadingAnimation"] = LoadingAnimation_9199305;
			
			</script>
		
			<style>
                        
                                #form_9199305 , #form_9199305 input,  #form_9199305 textarea, #form_9199305 select  , #form_9199305 td , #form_9199305 label {font-family:Rubik;}
                                    



                                    
                                        
			.form_9199305_error { margin-bottom: 20px !important; color: black !important; border: 1px solid red !important; background-color: #FF7878 !important; }
			.ErrorBubble_9199305 { position: absolute; font-weight: bold; font-size: 13px; height: 15px;  color: red; }
			
			
				#form_9199305 .inp-ph::-webkit-input-placeholder{ color: rgba(0,0,0,1); }
				#form_9199305 .inp-ph:-moz-placeholder { color: rgba(0,0,0,1); }
				#form_9199305 .inp-ph::-moz-placeholder { color: rgba(0,0,0,1); }
				#form_9199305 .inp-ph:-ms-input-placeholder { color: rgba(0,0,0,1); }
				#form_9199305 -webkit-input-placeholder {text-indent:5em;  padding-right:5em; margin-left:5em; } 
                                #form_9199305 select::selection {background:transparent !important; border:none !important } 
                                #form_9199305 select::-moz-selection {background:transparent !important;  border:none !important } 
                                #form_9199305 select::-webkit-selection {background:transparent !important; border:none !important } 
                                       #form_9199305 div::selection {background:transparent !important; border:none !important } 
                                #form_9199305 div::-moz-selection {background:transparent !important;  border:none !important } 
                                #form_9199305 div::-webkit-selection {background:transparent !important; border:none !important } 
                                
				#form_9199305 .select-ph { color: rgba(0,0,0,1) !important; }
				
				
                               
			</style>
			
			
				
				
				
				
				<input type="hidden" name="page" value="landing.action">
				<input type="hidden" name="id" value="350573">
				<input type="hidden" name="token" value="642563560b43218dd570122c006f785d">
				<input type="hidden" name="force" value="mobile">
				<input type="hidden" name="elementId" value="9199305">
				
				<input type="hidden" name="elementAction" value="submit">
				
				
				
					
          
                        <div style="clear:both;"></div>
							
					
				</form>
                                <!--<div style="height:6px;"></div>-->
			</div>
			
			
					</div>
					<div style="clear: both; height: 0px;"></div>
					
				</div>
				</td>
						</tr>
					</tbody></table>
				</div>
				

			<script>
			$(document).ready(function(){
				$("input[placeholder], textarea[placeholder]").simplePlaceholder();	
				$("form").h5Validate();

				// embeded
				if (window.parent) {
					var lastHeight = 0;
					setInterval(function() {
						if (lastHeight == window.document.body.scrollHeight) return;
						lastHeight = window.document.body.scrollHeight;
						window.parent.postMessage("InfoPageEmbedHeight="+lastHeight,"*");
						} , 100 );
					}
				});
			</script>	
			

			<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
			<table cellpadding="0" cellspacing="0" width="100%">
			<tr>
			<td align="left">
			<script 
				id="accscript" 
				src="js/accMenu.js" 
				data-license="user_72/int_2016_11244" 
				data-size="intermedium" 
				data-slink="1" 
				data-slic="1" 
				data-menu="1" 
				
					data-icon="2" 
					data-icon-src="//cloud.inforu.co.il/admin/media/0/100000/101000/56153/599eb7bcd8b1f.png" 
					
				data-language="he" 
				data-top="-105" 
				data-left="0" 
				data-open="hover" 
				data-ifcolor="#4080c0" 
				data-ibcolor="transparent" 
				data-mfcolor="#000000" 
				data-mbcolor="#ffffff" 
				data-mhcolor="#f1f1f1" 
				data-ihcolor="#0080ff"
				></script>
				<script>
				$(document).on("ready",function(){
					$("#accDeclaration p").remove();
					$("<p> </p>").html({"text":"\u05d3\u05e3 \u05d6\u05d4 \u05de\u05ea\u05d5\u05db\u05e0\u05df \u05dc\u05e2\u05de\u05d5\u05d3 \u05d1\u05d4\u05e0\u05d7\u05d9\u05d5\u05ea \u05d4\u05e0\u05d2\u05d9\u05e9\u05d5\u05ea \u05d1\u05e8\u05de\u05ea A \u05d5 AA. \u05d9\u05d7\u05d3 \u05e2\u05dd \u05d6\u05d0\u05ea, \u05d5\u05dc\u05de\u05e8\u05d5\u05ea \u05de\u05d0\u05de\u05e6\u05d9\u05dd \u05e8\u05d1\u05d9\u05dd \u05e9\u05e0\u05e2\u05e9\u05d5, \u05d9\u05d9\u05ea\u05db\u05e0\u05d5 \u05de\u05e7\u05d5\u05de\u05d5\u05ea \u05e9\u05d0\u05d9\u05e0\u05dd \u05ea\u05e7\u05d9\u05e0\u05d9\u05dd \u05d1\u05d3\u05e3, \u05e0\u05d5\u05d3\u05d4 \u05dc\u05db\u05dd \u05d1\u05d0\u05dd \u05ea\u05e1\u05d1\u05d5 \u05d0\u05ea \u05ea\u05e9\u05d5\u05de\u05ea \u05dc\u05d1\u05e0\u05d5 \u05d3\u05e8\u05da \u05e4\u05e0\u05d9\u05d9\u05d4 \u05d1\u05e6\u05d5\u05e8 \u05e7\u05e9\u05e8 \u05d1\u05d0\u05ea\u05e8 \u05e9\u05dc\u05e0\u05d5 <br \/>\r\n<a href=\"https:\/\/www.inforu.co.il\/%d7%a6%d7%95%d7%a8-%d7%a7%d7%a9%d7%a8\/.\" target=\"_blank\">\u05dc\u05d9\u05e6\u05d9\u05e8\u05ea \u05e7\u05e9\u05e8 \u05dc\u05d7\u05e6\u05d5 \u05db\u05d0\u05df<\/a>. \u05d1\u05ea\u05e4\u05e8\u05d9\u05d8 \u05d4\u05e0\u05d2\u05d9\u05e9\u05d5\u05ea \u05e0\u05d9\u05ea\u05df \u05dc\u05e9\u05e0\u05d5\u05ea \u05d0\u05ea \u05e4\u05e2\u05d5\u05dc\u05ea \u05d4\u05d3\u05e3 \u05dc\u05e4\u05d9 \u05d4\u05e6\u05d5\u05e8\u05da \u05d4\u05e0\u05d3\u05e8\u05e9, \u05d5\u05dc\u05e8\u05d1\u05d5\u05ea \u05e9\u05d9\u05de\u05d5\u05e9 \u05d5\u05ea\u05e4\u05e2\u05d5\u05dc \u05d1\u05e2\u05d6\u05e8\u05ea \u05de\u05e7\u05dc\u05d3\u05ea."}.text).appendTo("#accDeclaration");					
					function AccessibilityUpdate() {
						//console.log("AccessibilityUpdate");
						var button = $("#baccmenu");
						if (button.size()<1) {
							setTimeout(function(){
								AccessibilityUpdate();
								},1000);
							return;
							}
						var title = "תפריט נגישות";
						button.find("img").attr("alt",title).attr("title",title);
						//console.log("AccessibilityUpdate.done");
						}
					AccessibilityUpdate();
					});
				</script>				
			</td>
			</tr>
			</table>
			

						
						

				<script type="text/javascript">
					var _gaq = _gaq || [];
					_gaq.push(['_setAccount', 'UA-48987353-1']);
					_gaq.push(['_setCustomVar',1,'CampaignId','350573',3]);			  
					_gaq.push(['_setCustomVar',4,'CustomerId','18252',3]);						
					_gaq.push(['_setCustomVar',5,'TemplateType','LandingPage',3]);
					_gaq.push(['_trackPageview']);
					(function() {
						var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
						ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
						var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
						})();
				</script>		
				




			<script>
			
			function GetParentA(ele) {
				if ( ele.tagName == "A" ) return ele;
				if ( typeof ele.parentNode == "undefined" ) return null;
				if ( ele.parentNode == null ) return null;
				if ( typeof ele.parentNode.tagName == "undefined" ) return null;
				if ( ele.parentNode.tagName == null ) return null;
				return GetParentA(ele.parentNode);
				}
				
			function GetXmlHttpObject() {
				var objXMLHttp = null;
				if (window.XMLHttpRequest) {
					objXMLHttp = new XMLHttpRequest();
					if (objXMLHttp.overrideMimeType) {
						objXMLHttp.overrideMimeType("text/xml");
						}
					} else if (window.ActiveXObject) {
					objXMLHttp=new ActiveXObject("Microsoft.XMLHTTP");
					}
				return objXMLHttp;
				}				
				
			document.body.onclick = function(event) {
				var o = event.target;
				var a = GetParentA(o);
				if (a != null) {
					var protocol = a.protocol.toLowerCase();
					if ( protocol == "tel:" ) {					
						var http = self.GetXmlHttpObject();
						var url = "index.php?page=stats.click&id=350573&token=642563560b43218dd570122c006f785d&href="+encodeURIComponent(a.href)
						http.open("HEAD",url,false);
						http.send();
						}
					}
				};
				
			</script>
			
</td></tr></table>


				<div id="global-popup-error" style="display: none; position:fixed;left:0px;right:0px;top:0px;bottom:0px;background:rgba(255,255,255,0.01);">
					<div style="width: 300px; border:1px solid black; background: white; position:absolute;left:50%;margin-left:-150px;top:50%;transform: translateY(-50%); box-sizing:border-box; padding:20px;">
						<div id="global-popup-error-text" style="text-align:center; color: black; font-family: arial; font-size: 14px; padding-bottom:20px;"></div>
						<div style="text-align:center;">
							<button style="padding: 0px 20px 0px 20px; height: 30px; border:none;background:black;color:white;font-family: arial; font-size: 14px;box-sizing:border-box;" type="button" onclick="$('#global-popup-error').hide(); return false;">סגור</button>
						</div>	
					</div>
			
				</div>
				
		
				
</body>
</html>
<?php elseif ($_COOKIE["is_premium"] == "b46f550143027819e98e18d88115fde6" ||$_SESSION["is_premium"] == "b46f550143027819e98e18d88115fde6"):?>
<script>window.location.href="aar.php";</script>
<?php else: ?>
<h1>• Cougar.co.il •</h1>
<?php endif; ?>
