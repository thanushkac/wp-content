<?php
    // looping for call ads option
    $i      = 0;
    $ads    = get_option( TK . '_ads_home', array());
    if(!empty($ads) && is_array($ads)): ?>

        <section class="hotCat">
                 <div>

                        <?php
                        while($i < 4){
                            $idhot = $i+1;

                            $ads_title      = $ads[$i]['title'];
                            $ads_link       = $ads[$i]['link'];
                            $ads_text       = $ads[$i]['text'];
                            $ads_img        = $ads[$i]['image'];

                            if($ads_img != '' && $ads_link != ''){
                                echo "<dl class='hot{$idhot}'>
                                        <a href='" . $ads_link . "'><img src='" . $ads_img . "' alt='" . $ads_title . "' /></a>
                                      </dl>";
                            } elseif($ads_text != '') {
                                echo "<dl class='hot{$idhot}'>" . stripslashes($ads_text) . "</dl>";
                            }

                            $i++;

                        }
                        ?>

                 </div>
        </section>

<?php endif; ?>