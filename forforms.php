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
            $sql = 'SELECT * FROM `users` WHERE `mail`="' . dbstring($post['mail']) . '" AND `password` = "' . md5($post['password']) . '" ORDER BY `id` DESC LIMIT 1';
            $res = getOnedb($sql);
   
            if (isset($res->id)) {
                $text = lText('tqven warmatebit gaiaret avtorizacia!');
                //message type success
                $mtype = 2;

                $_SESSION['mail'] = $post['mail'];
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

}
