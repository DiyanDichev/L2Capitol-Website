<div class="sidebar-left">


<div class="bar_box"><span class="style-1">STATUS SERVER</span></div>
<div class="pt_box">

<span class="style-2">Loginserver :</span><?php print $loginserver ? '<img src="imgs/error.png"/>' : '<img src="imgs/check.png"/>'; ?>
<span class="style-2">Gameserver : </span><?php print $gameserver ? '<img src="imgs/error.png"/>' : '<img src="imgs/check.png"/>'; ?>
<div align="center" style="padding:10px 0;"><img src="imgs/line.png" width="172" height="2" alt="line" /></div>
<span class="style-3">Players Online :  </span> <span class="style-4"><?php print(mysql_num_rows($seleciona_valores)+$online_add); ?></span>
<span class="style-3">DDOS : </span> <span class="style-4"><?php echo $ddos; ?></span>
<span class="style-3">GUARD : </span> <span class="style-4"><?php echo $guard; ?></span>

</div>

<div class="bar_box4"><span class="style-1" style="padding:0 71px;">VOTE TOP</span></div>
<div>


<div style="width:192px; height:44px; margin:0 auto; padding-top:4px;" class="top1"><a href="<?php echo $itopz ;?>"><img src="imgs/itopz.png" width="194" height="47" alt="iTopz" /></a></div>
<div style="width:192px; height:44px; margin:0 auto; margin-top:5px;" class="top1"><a href="<?php echo $hopzone ;?>"><img src="imgs/hopzone.png" width="194" height="47" alt="Hopzone" /></a></div>
<div style="width:192px; height:44px; margin:0 auto; margin-top:4px;" class="top1"><a href="<?php echo $network ;?>"><img src="imgs/network.png" width="194" height="47" alt="Network" /></a></div>
<div style="width:192px; height:44px; margin:0 auto; margin-top:4px;" class="top1"><a href="<?php echo $l2topgs ;?>"><img src="imgs/l2topgs.png" width="194" height="47" alt="L2TopGS" /></a></div>
<div style="width:192px; height:44px; margin:0 auto; margin-top:4px;" class="top1"><a href="<?php echo $l2tops ;?>"><img src="imgs/l2tops.png" width="194" height="47" alt="L2TopS" /></a></div>
<div style="width:192px; height:44px; margin:0 auto; margin-top:4px;" class="top1"><a href="<?php echo $l2votes ;?>"><img src="imgs/l2votes.png" width="194" height="47" alt="L2Votes" /></a></div>




</div>

<div class="bar_box" style="padding:0 19px;"><span class="style-1">UPDATES</span></div>
<div class="pt_box">

<div class="style-5"><?php echo $update1; ?></div>
<div class="style-5"><?php echo $update2; ?></div>
<div class="style-5"><?php echo $update3; ?></div>
<div class="style-5"><?php echo $update4; ?></div>
<div class="style-5"><?php echo $update5; ?></div>
<div class="style-5"><?php echo $update6; ?></div>
<div class="style-5"><?php echo $update7; ?></div>


</div>


<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="102174408648505">
      </div>










</div>