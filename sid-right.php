<div class="sidebar-right">




<div class="bar_box3"><span class="style-1" style="padding:0 76px;">COMMUNITY</span></div>
<div class="pt_box3">
<div class="rank-pvp">



<div style="width:192px; height:44px; margin:0 auto; padding-top:4px;" class="top1"><a href="<?php echo $forum ;?>"><img src="imgs/forum.png" width="192" height="44" alt="FORUM" /></a></div>
<div align="center" style="padding:10px 0;"><img src="imgs/line.png" width="172" height="2" alt="line" /></div>
<div style="width:192px; height:52px; margin:0 auto; padding-top:4px;" class="top1"><a href="<?php echo $discord ;?>"><img src="imgs/discordweb.png" width="192" height="52" alt="DISCORD" /></a></div>
<div align="center" style="padding:10px 0;"><img src="imgs/line.png" width="172" height="2" alt="line" /></div>
<div style="width:192px; height:48px; margin:0 auto; padding-top:4px;" class="top1"><a href="<?php echo $facebook ;?>"><img src="imgs/facebookweb.png" width="192" height="48" alt="FACEBOOK" /></a></div>
</div>
</div>

<div class="bar_box3"><span class="style-1" style="padding:0 76px;">TOP PVP</span></div>
<div class="pt_box3">
<div class="rank-pvp">
<?php
// Configurações do Script
$accesslevel = "accesslevel" ; // Nome da coluna de accesslevel do seu server (Nos servers mais novos [Gracia +] é accesslevel mesmo .
$ranking = "pvpkills" ; // Tipo do Ranking; Pode ser: pvpkills ; pkkills ; onlinetime ; karma ; level ; maxCP ; maxHP ; maxMP ; fame .
$limite = 10 ; // Limite de chars que aparecem no ranking .
// Fim das configurações

// Querys e valores fixos (Não mexer)
$top = mysql_query("SELECT * FROM characters WHERE $accesslevel=0 ORDER BY $ranking DESC LIMIT 0, ".$limite."");
$fixo = 1;
// Fim das querys

// Script em si
        while($x = mysql_fetch_array($top)){
                echo '<div class="top10"><tr>
                                <span class="pos">'.$fixo.' &deg;</span>
                                <span class="char">'.$x['char_name'].'</span>
                                <span class="quant">'.$x[$ranking].'</span>
                          </tr></div>';
                $fixo++;
                }
                                echo '</table>';
        
                                                        
// Script em si
// Script Desenvolvido por L2ViciO, por favor não remova os créditos daqui!
?>


</div>
</div>



<div class="bar_box3"><span class="style-1" style="padding:0 77px;">TOP PK</span></div>
<div class="pt_box3">
<div class="rank-pvp">
<?php
// Configurações do Script
$accesslevel = "accesslevel" ; // Nome da coluna de accesslevel do seu server (Nos servers mais novos [Gracia +] é accesslevel mesmo .
$ranking = "pkkills" ; // Tipo do Ranking; Pode ser: pvpkills ; pkkills ; onlinetime ; karma ; level ; maxCP ; maxHP ; maxMP ; fame .
$limite = 10 ; // Limite de chars que aparecem no ranking .
// Fim das configurações

// Querys e valores fixos (Não mexer)
$top = mysql_query("SELECT * FROM characters WHERE $accesslevel=0 ORDER BY $ranking DESC LIMIT 0, ".$limite."");
$fixo = 1;
// Fim das querys

// Script em si
        while($x = mysql_fetch_array($top)){
                echo '<div class="top10"><tr>
                                <span class="pos">'.$fixo.' &deg;</span>
                                <span class="char">'.$x['char_name'].'</span>
                                <span class="quant">'.$x[$ranking].'</span>
                          </tr></div>';
                $fixo++;
                }
                                echo '</table>';
        
                                                        
// Script em si
// Script Desenvolvido por L2ViciO, por favor não remova os créditos daqui!
?>


</div>
</div>

<iframe src="https://discordapp.com/widget?id=826706585656361001&theme=dark" width="210" height="500" allowtransparency="true" frameborder="0" sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"></iframe>






</div>
