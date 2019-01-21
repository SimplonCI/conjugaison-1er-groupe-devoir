<?php include 'views/index.views.php';?>

<?php
    // quand le formulaire est soumis
    if($_POST['conjuger']){
        $verbe = addslashes($_POST['verbe']);
        $temps = addslashes($_POST['temps']);

        // verifier si c'est un verbe du premier groupe
        $position = strrpos($verbe,"er");

        // les verbes dont la terminaison est éter
        $verbeSpecial = strrpos($verbe,"éter");

        // les verbes dont la terminaison est éder
        $verbeSpecial2 = strrpos($verbe,"éder");

        // les verbes dont la terminaison est éder
        $verbeSpecial3 = strrpos($verbe,"érer");


        if($verbe != 'aller'){
            if($verbeSpecial !== false){
                if($temps == 'present'){
                    echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au présent</center></u></h4>";

                    echo "<center>";
                    echo "Je ".lreplace("éter","<font color='red'>ète</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("éter","<font color='red'>ètes</font>",$verbe)."<br/>";
                    echo "Il ".lreplace("éter","<font color='red'>ète</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("éter","<font color='red'>étons</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("éter","<font color='red'>étez</font>",$verbe)."<br/>";
                    echo "Ils ".lreplace("éter","<font color='red'>ètent</font>",$verbe)."<br/>";
                    echo "</center>";
                } elseif($temps == 'futur'){
                    echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au futur</center></u></h4>";

                    echo "<center>";
                    echo "Je ".lreplace("éter","<font color='red'>éterai</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("éter","<font color='red'>éteras</font>",$verbe)."<br/>";
                    echo "Il ".lreplace("éter","<font color='red'>ète</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("éter","<font color='red'>étons</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("éter","<font color='red'>étez</font>",$verbe)."<br/>";
                    echo "Ils ".lreplace("éter","<font color='red'>étent</font>",$verbe)."<br/>";
                    echo "</center>";
                }elseif($temps == 'passe'){
                    echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au passé</center></u></h4>";

                    echo "<center>";
                    echo "Je ".lreplace("éter","<font color='red'>étai</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("éter","<font color='red'>étas</font>",$verbe)."<br/>";
                    echo "Il ".lreplace("éter","<font color='red'>éta</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("éter","<font color='red'>étâmes</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("éter","<font color='red'>étâtes</font>",$verbe)."<br/>";
                    echo "Ils ".lreplace("éter","<font color='red'>étèrent</font>",$verbe)."<br/>";
                    echo "</center>";
                } else{
                    echo "<center>";
                        echo "temps inconnu";
                    echo "</center>";
                }
            }elseif($verbeSpecial2 !== false){
                if($temps == 'present'){
                    echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au présent</center></u></h4>";

                    echo "<center>";
                    echo "Je ".lreplace("éder","<font color='red'>ède</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("éder","<font color='red'>èdes</font>",$verbe)."<br/>";
                    echo "Il ".lreplace("éder","<font color='red'>ède</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("éder","<font color='red'>édons</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("éder","<font color='red'>édez</font>",$verbe)."<br/>";
                    echo "Ils ".lreplace("éder","<font color='red'>èdent</font>",$verbe)."<br/>";
                } elseif($temps == 'futur'){
                    echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au futur</center></u></h4>";

                    echo "<center>";
                    echo "Je ".lreplace("éder","<font color='red'>éderai</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("éder","<font color='red'>éderas</font>",$verbe)."<br/>";
                    echo "Il ".lreplace("éder","<font color='red'>èdera</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("éder","<font color='red'>éderons</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("éder","<font color='red'>éderez</font>",$verbe)."<br/>";
                    echo "Ils ".lreplace("éder","<font color='red'>éderont</font>",$verbe)."<br/>";
                }elseif($temps == 'passe'){
                    echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au passé</center></u></h4>";

                    echo "<center>";
                    echo "Je ".lreplace("éder","<font color='red'>édai</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("éder","<font color='red'>édas</font>",$verbe)."<br/>";
                    echo "Il ".lreplace("éder","<font color='red'>éda</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("éder","<font color='red'>édâmes</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("éder","<font color='red'>édâtes</font>",$verbe)."<br/>";
                    echo "Ils ".lreplace("éder","<font color='red'>édèrent</font>",$verbe)."<br/>";
                } else{
                    echo "<center>";
                        echo "temps inconnu";
                    echo "</center>";
                }
            }elseif($verbeSpecial3 !== false){
                if($temps == 'present'){
                    echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au présent</center></u></h4>";

                    echo "<center>";
                    echo "Je ".lreplace("érer","<font color='red'>ère</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("érer","<font color='red'>ères</font>",$verbe)."<br/>";
                    echo "Il ".lreplace("érer","<font color='red'>ère</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("érer","<font color='red'>érons</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("érer","<font color='red'>érez</font>",$verbe)."<br/>";
                    echo "Ils ".lreplace("érer","<font color='red'>èrent</font>",$verbe)."<br/>";
                } elseif($temps == 'futur'){
                    echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au Futur</center></u></h4>";

                    echo "<center>";
                    echo "Je ".lreplace("érer","<font color='red'>érerai</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("érer","<font color='red'>éreras</font>",$verbe)."<br/>";
                    echo "Il ".lreplace("érer","<font color='red'>érera</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("érer","<font color='red'>érerons</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("érer","<font color='red'>érerez</font>",$verbe)."<br/>";
                    echo "Ils ".lreplace("érer","<font color='red'>éreront</font>",$verbe)."<br/>";
                }elseif($temps == 'passe'){
                    echo "<br>";
                    echo "<br>";
                    echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au passé</center></u></h4>";

                    echo "<center>";
                    echo "Je ".lreplace("érer","<font color='red'>érerais</font>",$verbe)."<br/>";
                    echo "Tu ".lreplace("érer","<font color='red'>érerais</font>",$verbe)."<br/>";
                    echo "Il ".lreplace("érer","<font color='red'>érerait</font>",$verbe)."<br/>";
                    echo "Nous ".lreplace("érer","<font color='red'>érerions</font>",$verbe)."<br/>";
                    echo "Vous ".lreplace("érer","<font color='red'>éreriez</font>",$verbe)."<br/>";
                    echo "Ils ".lreplace("érer","<font color='red'>éreraient</font>",$verbe)."<br/>";
                } else{
                    echo "<center>";
                        echo "temps inconnu";
                    echo "</center>";
                }
            } else{
                if($position !== false ){
                    if($temps == 'present'){
    
                        echo "<br>";
                        echo "<br>";
                        echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au présent</center></u></h4>";
    
                        echo "<center>";
                        echo "Je ".lreplace("er","<font color='red'>e</font>",$verbe)."<br/>";
                        echo "Tu ".lreplace("er","<font color='red'>es</font>",$verbe)."<br/>";
                        echo "Il ".lreplace("er","<font color='red'>e</font>",$verbe)."<br/>";
                        echo "Nous ".lreplace("er","<font color='red'>ons</font>",$verbe)."<br/>";
                        echo "Vous ".lreplace("er","<font color='red'>ez</font>",$verbe)."<br/>";
                        echo "Ils ".lreplace("er","<font color='red'>ent</font>",$verbe)."<br/>";
                        echo "</center>";
    
    
                    }elseif($temps == 'futur'){
                        echo "<br>";
                        echo "<br>";
                        echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au futur</center></u></h4>";
                        
                        echo "<center>";
                        echo "Je ".lreplace("er","<font color='red'>erai</font>",$verbe)."<br/>";
                        echo "Tu ".lreplace("er","<font color='red'>eras</font>",$verbe)."<br/>";
                        echo "Il ".lreplace("er","<font color='red'>era</font>",$verbe)."<br/>";
                        echo "Nous ".lreplace("er","<font color='red'>erons</font>",$verbe)."<br/>";
                        echo "Vous ".lreplace("er","<font color='red'>erez</font>",$verbe)."<br/>";
                        echo "Ils ".lreplace("er","<font color='red'>eront</font>",$verbe)."<br/>";
                        echo "</center>";
                    }elseif($temps == 'passe'){
                        echo "<br>";
                        echo "<br>";
                        echo "<h4><u><center>Le verbe <font color='red'>$verbe</font> au passé</center></u></h4>";
                        echo "<br>";
                        
                        echo "<center>";
                        echo "Je ".lreplace("er","<font color='red'>ai</font>",$verbe)."<br/>";
                        echo "Tu ".lreplace("er","<font color='red'>as</font>",$verbe)."<br/>";
                        echo "Il ".lreplace("er","<font color='red'>a</font>",$verbe)."<br/>";
                        echo "Nous ".lreplace("er","<font color='red'>âmes</font>",$verbe)."<br/>";
                        echo "Vous ".lreplace("er","<font color='red'>âtes</font>",$verbe)."<br/>";
                        echo "Ils ".lreplace("er","<font color='red'>èrent</font>",$verbe)."<br/>";
                        echo "</center>";
                    }else{
                        echo "<center>";
                            echo "temps inconnu";
                        echo "</center>";
                    }
                } else{
                    echo "<br>";
                    echo "<br>";
                    echo "<center>";
                        echo "Le verbe <font color='red'>$verbe</font> n'est pas un verbe du 1er groupe";
                    echo "</center>";
                }
            } 
            
        } else {
            echo "<br>";
            echo "<br>";
            echo "<center>";
                 echo "Le verbe <font color='red'>Aller</font> n'est pas un verbe du 1er groupe";
            echo "</center>";
        }
       
    }

    function lreplace($terminaison,$replace,$verbe){
        $pos = strrpos($verbe,$terminaison);
        if($pos !== false ){
            $subject = substr_replace($verbe, $replace, $pos, strlen($terminaison));
        }

        return $subject;
    }
?>

