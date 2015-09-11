<?php

/*
 * @script author: zura kiziria. no framework
 * @murk up, design: oto kiziria
 * @script lang: php5
 * @create date: 2015.07
 * @for company: binuli @website: binuli.ge
 */

class ForForms {

    public function register($post) {

        if (isset($post['post'])) {
            if (empty($post['name']) || empty($post['password']) || empty($post['confirm']) || empty($post['mail']) || empty($post['address']) || empty($post['number']) || empty($post['phone'])) {
                $text = lText('sheavset yvela veli!');

                //messaage type error
                $mtype = 1;
            } else {
                if (strlen($post['password']) > 20 || strlen($post['password']) <= 5) {
                    $text = lText('parolis zoma ar unda agematebodes 20 da ar iyos naklebi 5 simboloze');
                    //messaage type error
                    $mtype = 1;
                } else {
                    if (strlen($post['name']) > 30) {
                        $text = lText('saxeli dzalian didia');
                        $mtype = 1;
                    } else {

                        if (!preg_match('#^[A-z0-9-\._]+@[A-z0-9]{2,}\.[A-z]{2,4}$#ui', $post['mail'])) {
                            $text = lText('maili arasworia');
                            $mtype = 1;
                        } else {
                            if (strlen($post['address']) > 200) {
                                $text = lText('misamarti dzalian didia');
                                $mtype = 1;
                            } else {
                                if (strlen($post['phone']) > 9) {
                                    $text = lText('telefoni dzalian didia max 9 ricxvi');
                                    $mtype = 1;
                                } else {
                                    $sql = 'SELECT * FROM `users` WHERE `mail` = "' . mysql_real_escape_string($post['mail']) . '"';
                                    $result = getOnedb($sql);
                                    if ($result) {
                                        $text = lText('aseti mailit ukve daregistrirdnen, scadet sxva');
                                        $mtype = 1;
                                    } else {
                                        if ($post['password'] != $post['confirm']) {
                                            $text = lText('parolis dadastureba ver moxerxda');
                                            $mtype = 1;
                                        } else {
                                            if ($post['type'] != 1 && $post['type'] != 2) {
                                                $text = lText('airchie momxmareblis tipi');
                                                $mtype = 1;
                                            } else {

                                                $ins = "INSERT INTO `users` (`mail`,`password`,`name`,`number`,`address`,`phone`,`type`)VALUES('" . dbstring($post['mail']) . "','" . md5($post['password']) . ""
                                                        . "','" . dbstring($post['name']) . "','" . (int) $post['number'] . "','" . dbstring($post['address']) . "','" . (int) $post['phone'] . "','" . (int) $post['type'] . "')";
                                                insert($ins);
                                                $text = lText('registracia dasrulebulia');
                                                //message type success
                                                $mtype = 2;
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }

        sendText($text, $mtype);
        if ($mtype != 2) {
            $link = getLink('?mp=register');
        } else {
            $link = getLink('?');
        }
        redirect($link);

        return true;
    }

    public function login($post) {

        if (isset($post['post'])) {
            $sql = 'SELECT * FROM `users` WHERE `mail`="' . dbstring($post['adminmail']) . '" AND `password` = "' . md5($post['password']) . '" AND `user_type`="1" ORDER BY `id` DESC LIMIT 1';
            $res = getOnedb($sql);

            if (isset($res->id)) {
                $text = lText('tqven warmatebit gaiaret avtorizacia!');
                //message type success
                $mtype = 2;

                $_SESSION['adminmail'] = $post['adminmail'];
            } else {
                $text = lText('paroli da maili sheusabamoa!');
                $mtype = 1;
            }
        }
        sendText($text, $mtype);
        if ($mtype != 2) {
            $link = getLink('?mp=login');
        } else {
            $link = getLink('?');
        }
        redirect($link);
        return true;
    }

    public function pages($post) {

        if (!empty($post)) {
            if (isset($post['postbut'])) {
                if (!empty($post['post'])) {
                    $output = mysql_real_escape_string($post['post']);
                    // $output = htmlspecialchars($output);
                    if (!empty($post['page_title'])) {
                        if (strlen($post['page_title']) < 500) {
                            if (isset($post['id']) && $post['id'] > 0 || isset($_GET['id']) && $_GET['id'] > 0) {
                                if (isset($post['id'])) {
                                    $id = $post['id'];
                                } elseif (isset($_GET['id'])) {
                                    $id = $_GET['id'];
                                }
                                $sqld = 'DELETE FROM `Pages_list` WHERE `id`="' . (int) dbstring($id) . '"';
                                delete($sqld);
                            }
                            if (!isset($post['delete'])) {
                                $addsqln = '';
                                $addsqlv = '';
                                if (isset($post['id']) && $post['id'] > 0) {
                                    $addsqln = '`id`,';
                                    $addsqlv = '"' . (int) dbstring($post['id']) . '",';
                                    $sqli = 'INSERT INTO `Pages_list` (' . $addsqln . '`title`,`output`)VALUES(' . $addsqlv . '"' . dbstring($post['page_title']) . '","' . $output . '")';
                                } else {
                                    $sqli = 'INSERT INTO `Pages_list` (`title`,`output`)VALUES("' . dbstring($post['page_title']) . '","' . $output . '")';
                                }

                                insert($sqli);
                                $text = lText('operacia warmatebit ganxorcielda!');
                            } else {
                                $text = lText('gverdi warmatebit waishala!');
                            }
                            //message type success
                            $mtype = 2;
                        } else {
                            $text = lText('satauri dzalian didia');
                            $mtype = 1;
                        }
                    } else {
                        $text = lText('satauri carielia');
                        $mtype = 1;
                    }
                } else {
                    $text = lText('teqsti carielia');
                    $mtype = 1;
                }
            }
        } else {
            return false;
        }
        sendText($text, $mtype);
        if ($mtype != 2) {
            $link = getLink('?mp=pages');
        } else {
            $link = getLink('?mp=pages');
        }
        redirect($link);
        return true;
    }

    public function navigation($post) {

        if (isset($post['post'])) {
            $dropdown = implode(",", $post['dropdown']);

            if (empty($post['id'])) {
                $text = lText('shecdomaa menus archevashi');
                $mtype = 1;
            } else {
                $sqld = 'DELETE FROM `navigation` WHERE `page_id`="' . (int) $post['id'] . '"';
                delete($sqld);
                if (!isset($post['delete'])) {
                    $sqli = 'INSERT INTO `navigation`(`page_id`,`menuid`,`dropdown`)VALUES("' . (int) $post['id'] . '","' . (int) $post['menuid'] . '","' . dbstring($dropdown) . '")';
                    insert($sqli);
                }
                $text = lText('menu warmatebit daemata navigacias');
                //message type success
                $mtype = 2;
            }
        }
        sendText($text, $mtype);
        if ($mtype != 2) {
            $link = getLink('?mp=navigation');
        } else {
            $link = getLink('?mp=navigation');
        }
        redirect($link);
        return true;
    }

    public function addcategory($post) {
        if (isset($post['post'])) {
            if (isset($post['title']) && !empty($post['title'])) {
                if (strlen($post['title']) < 500) {
                    $sqld = 'DELETE FROM `category` WHERE `id`="' . (int) $post['id'] . '"';
                    delete($sqld);

                    if (!isset($post['delete'])) {
                        $sqli = 'INSERT INTO `category` (`title`,`image`)VALUES("' . dbstring($post['title']) . '","base_url/images/defaultlogo.png")';
                        insert($sqli);
                        
                    }
                    $text = lText('categoria warmatebit sheiqmna');
                    //message type success
                    $mtype = 2;
                } else {
                    $text = lText('satauri dzalian didia');
                    $mtype = 1;
                }
            } else {
                $text = lText('satauri carielia');
                $mtype = 1;
            }
        }
                sendText($text, $mtype);
        if ($mtype != 2) {
            $link = getLink('?mp=addcategory');
        } else {
            $link = getLink('?mp=addcategory');
        }
        redirect($link);
        return true;
    }
    
    public function items($post){

        if (isset($post['post'])){

        if (!empty($post['title'])){
            if (strlen($post['title']) < 600){
                if (!empty($post['price'])){
                    
                    $mdtime = md5(time());
$allowedExts = array("gif", "jpeg", "jpg", "png", "GIF", "JPEG", "JPG", "PNG");

                $were = 'SELECT * FROM `items` WHERE `id`='.(int)$post['id'];
                $vnaxot = getOnedb($were);
         if ($post['id']> 0){
             $imgn = ",`image`";
             $imgv = ',"'.$vnaxot->image.'"';
         }

if (isset($_FILES["img"]["name"]) && !empty($_FILES["img"]["name"])){
 echo'<pre>';
 print_r("test");
 echo'</pre>';
 $tmp = explode('.', $_FILES["img"]["name"]);
$extension = end($tmp);
if ($post['id'] <= 0){
             
             $imgn = ",`image`";
             $imgv = ',"/images/origin/'.$mdtime.$_FILES['img']['name'].'"';
                     move_uploaded_file($_FILES["img"]["tmp_name"],"../images/origin/" . $mdtime.$_FILES["img"]["name"]);
         
         }
 if ((($_FILES["img"]["type"] == "image/gif")
 || ($_FILES["img"]["type"] == "image/jpeg")
 || ($_FILES["img"]["type"] == "image/jpg")
|| ($_FILES["img"]["type"] == "image/pjpeg")
|| ($_FILES["img"]["type"] == "image/x-png")
 || ($_FILES["img"]["type"] == "image/png"))
 && ($_FILES["img"]["size"] < 5 * 1024 * 1024)
 && in_array($extension, $allowedExts))
   {
                     if ($_FILES["img"]["error"] > 0)
     {
     
                               $text = lText('suratis shecdoma');

                    $mtype = 1;
                    return false;
     }  
         
        }else{
                          $text = lText('suratis zoma an formati arasworia');
                          

                    $mtype = 1; 
                    return false;
   }
}
         if (isset($post['id'])){
                    $sqld = 'DELETE FROM `items` WHERE `id`="' . (int) $post['id'] . '"';
                    delete($sqld);
         }
         

                    if (!isset($post['delete'])) {
                        $sqli = 'INSERT INTO `items` (`title`,`cat_id`,`price`'.$imgn.',`up_date`)VALUES("' . dbstring($post['title']) . '","'.(int)$post['catid'].'","'.dbstring($post['price']).'"'.$imgv.',"'.time().'")';
                        insert($sqli);
                        
                    }
                    $text = lText('operacia warmatebit ganxorcielda!');

                    //message type success
                    $mtype = 2;
                    
     

                
                }else{
                    $text = lText('fasi carielia!');
                    

                    $mtype = 1;     
                }
            }else{
                    $text = lText('satauri dzalian didia');

                    $mtype = 1;  
            }
            
            
        }else{
                    $text = lText('satauri carielia');

                    $mtype = 1;
                    
        }
        
        
        }

                 //   $text = lText('satauri carielia');

                 //   $mtype = 1;
        
          sendText($text, $mtype);
        if ($mtype != 2) {
            $link = getLink('?mp=items');
        } else {
            $link = getLink('?mp=items');
        }
        redirect($link);
        return true;
    }

}
