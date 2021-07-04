
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
?>


<?php
    function bsValidForm($form_data) {
        global $form_deff;
        global $fields;
    ?>
        <div class="card">
            <div class="card-header">
                <h4><?php echo $form_deff['title'] ?><a class="btn btn-outline-primary float-right" href="profile.php">Back to Profile</a></h4>
            </div>

            <div class="card-body">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                    <div class="row">
    <?php
        $isValidForm = true;
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
            if($valid['msg'] != "") {
                $isValidForm = false;
            }
            echo $valid['msg'];
            echo "</div>\n";
        }

        if ($_SERVER['REQUEST_METHOD'] == "POST" && $isValidForm) {
            $set_string = [];
            foreach($form_data as $k=>$v) {
                $set_string[] = $k . " = '" . $conn->real_escape_string($v) . "'";
            }

            $sql = "UPDATE users_data
                    SET " . implode(", ", $set_string) .
                    " WHERE {$form_deff['table_id_col']}={$form_deff['id']};";           

            if($conn->query($sql)) {
                echo "<div class='container alert alert-success' role='alert'>
                        Change Profile: Success.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
            } else {
                echo "<div class='container alert alert-danger' role='alert'>
                        Change Profile: Error - $conn->error.
                        <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                            <span aria-hidden='true'>&times;</span>
                        </button>
                    </div>";
            }
        }            
    ?>

                    <input type="submit" value="<?php echo $form_deff['subnit_text'] ?>" class="btn btn-primary form-control">

                    </div>
                </form>
            </div>
        </div>        
    <?php 
    }
?>

<?php
    function drawTable($form_data) {

        $tableName = $_GET['menu'];
        if($form_data->num_rows > 0) {
            echo "<div id='$tableName' class='tblDiv'>";
            echo "<a href='?menu=$tableName&crud=c' class='btn btn-outline-primary'>Add New</a>";
            echo "<table class='display compact'>";
            
            $col = array_keys($form_data->fetch_assoc());
            $zaglavlje = implode("</th><th>", $col);
            echo "\n\t<thead><tr><th>Action</th><th>$zaglavlje</th></tr></thead>";

            echo "\n\t<tbody>";
            foreach($form_data as $row) {
                $actions = "<td>";
                $actions .= "<a href='?menu=$tableName&crud=c&id=".$row["id"]."' class='btn btn-outline-primary'>R</a>";
                $actions .= "<a href='?menu=$tableName&crud=u' class='btn btn-outline-primary'>U</a>";
                $actions .= "<a href='?menu=$tableName&crud=d' class='btn btn-outline-primary'>D</a>";
                $actions .= "</td>";
                echo "<tr>$actions<td>" . implode("</td><td>", $row) . "</td></tr>\n";
            }
            echo "</tbody>";
            
            //echo "<tfoot><tr><th></th></tr></tfoot>";
            echo "</table>";
            echo "</div>";
        } else {
            echo  "<h2>Nema podataka u tabeli!<h2>";
        }
    }

    function crudForms($form_deff, $fields) {

        $action = isset($_GET['crud']) ? $_GET['crud'] : "a";

        $tableColumns = isset($form_deff['tableColumns']) && $action == "a" ? $form_deff['tableColumns'] : "*";
        $form_deff['id'] = isset($_GET['id']) ? $_GET['id'] : 0;
        $where_id = isset($_GET['id']) ? " WHERE {$form_deff['table_id_col']}={$_GET['id']}" : "";
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $form_data = $_POST;   
        } else {
            require_once "../db/conn.php";
            $sql = "SELECT $tableColumns FROM {$form_deff['table']}$where_id;";
            $form_data = $conn->query($sql);
        }
        
        switch($action) {
            case "a":
                drawTable($form_data);
                break;
            case "c":
                bsValidForm($form_data->fetch_assoc());
                break;
            case "r":
    
                break;
            case "u":
    
                break;
            case "d":
    
                break;                                                                        
            default:
                echo "Action error page";
        }
    }
?>