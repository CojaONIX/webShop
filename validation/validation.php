
<?php
    function validText($data, $minLen, $maxLen, $reg) {
        $msg = "";
        $original = $data;

        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = preg_replace('/\s+/', ' ', $data);

        if($data != $original) {
            $msg .= "<span class='maybe'>Izbaceni su nepozeljni karakteri</span>";
        }

        if (strlen($data) < $minLen || strlen($data) > $maxLen) {
            $msg .= "<span class='error'>Polje mora sadrzati $minLen-$maxLen karaktera</span>";
        }

        if (!preg_match("/^[$reg]*$/", $data)) {
            $msg .= "<span class='error'>Dozvoljeni karakteri: $reg</span>";
            $izbaci = preg_replace("/[$reg]/", '', $data);
            $msg .= "<span class='maybe'>Nedozvoljeni karakteri: $izbaci</span>";
            $data = preg_replace("/[^$reg]/", '', $data);
        }            

        if(empty($msg)) {
            //$msg = "<span class='success'>OK</span>";
        } else {
            $isValidForm = false;
        }

        return ['msg'=>$msg, 'valid_value'=>$data];
    }

    function validDate($data, $od, $do) {
        if($data != "") {
            if($data < $od || $data > $do) {
                $isValidForm = false;
                $msg =  "<span class='error'>Datum mora biti izmedju $od i $do</span>";
            } else {
                $msg = "<span class='success'>OK</span>";
            }
            $this->setFields($data, $data, $msg);
        } else {
            $msg = "<span class='success'>OK</span>";
            $this->setFields($data, "", $msg);
        }
    }

    function validRadio($data, $in) {
        if (in_array($data, $in)) {
            $msg = "<span class='success'>OK</span>";
        } else {
            $isValidForm = false;
            $msg =  "<span class='error'>Izaberite jednu od opcija.</span>";
        }

        $this->setFields($data, $data, $msg);
    }

    function validRetype($rpass, $pass) {
        if($rpass == $pass) {
            $msg = "<span class='success'>OK</span>";
        } else {
            $isValidForm = false;
            $msg = "<span class='error'>Retype Password!</span>";
        }

        $this->setFields($rpass, $rpass, $msg);
    }

    function validEmail($str) {
        //$except = preg_match('/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', $str);
    }



    function bsValidForm($fields, $form_data) {
        foreach($fields as $k=>$v) {
            $add_class = " col-12";
            if(isset($v['bs_row_class'])) {
                $add_class = " " . $v['bs_row_class'];
            }
            echo '<div class="form-group' . $add_class . '">';
            echo '<label for="' . $k . '">' . $v['label'] . ': <span class="error">* </span></label>';
            $valid = validText($form_data[$k], $fields[$k]['min_len'], $fields[$k]['max_len'], $fields[$k]['valid']);
            switch ($v['type']) {
                case "text" :
                case "number" :
                case "hidden" :
                case "color" :
                    echo '<input type="' . $v['type'] . '" class="form-control" name="' . $k . '" id="' . $k . '" value="' . $valid['valid_value'] . '">';
                    break;
                case "textarea" :
                    echo '<textarea class="form-control" name="' . $k . '" id="' . $k . '">' . $valid['valid_value'] . '</textarea>';
                    break;

                default:
                    echo "<p>Nepoznat tip polja.</p>";
            }
            echo $valid['msg'];
            echo "</div>\n";


        }

    }
?>