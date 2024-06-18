<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Input String Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php
        $states = $symbols = $stsymbols = $istate = $istack = $astates = $nt = "";
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $states = $_POST['states'];
            $symbols = $_POST['symbols'];
            $stsymbols = $_POST['stsymbols'];
            $istate = $_POST['istate'];
            $istack = $_POST['istack'];
            $astates = $_POST['astates'];
            $nt = $_POST['nt'];
         
        }
    ?>
    <form method="post" action='<?php echo $_SERVER['PHP_SELF']; ?>'>
        Enter States:<br>
        <input type="text" name="states" required value='<?php echo $states; ?>'>
        <p>
        Enter Input Symbols:<br>
        <input type="text" name="symbols" required value='<?php echo $symbols; ?>'>
        <p>
        Enter Stack Symbols:<br>
        <input type="text" name="stsymbols" required value='<?php echo $stsymbols; ?>'>
        <p>
        Enter Initial State:<br>
        <input type="text" name="istate" required value='<?php echo $istate; ?>'> 
        <p>
        Enter Initial Stack Symbol:<br>
        <input type="text" name="istack" required value='<?php echo $istack; ?>'>
        <p>
        Enter Accepting States:<br>
        <input type="text" name="astates" required value='<?php echo $astates; ?>'>
        <p>
        Enter Number of Transitions:<br>
        <input type="number" name="nt" required value='<?php echo $nt; ?>'>
        <p>
        <input type="submit" name="first">
    </form>

    <form action='<?php echo $_SERVER['PHP_SELF']; ?>' method="post">
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['first'])){
                echo "<input type='hidden' name='states' required value='$states'>
                <input type='hidden' name='symbols' required value='$symbols'>
                <input type='hidden' name='stsymbols' required value='$stsymbols'>
                <input type='hidden' name='istate' required value='$istate'> 
                <input type='hidden' name='istack' required value='$istack'>
                <input type='hidden' name='astates' required value='$astates'>
                <input type='hidden' name='nt' required value='$nt'>";
                
                

                echo "<table class='table table-striped-columns'>
                        <tr>
                            <th>State</th>
                            <th>Input</th>
                            <th>Stack Top</th>
                            <th>Next State</th>
                            <th>Stack Update</th>
                        </tr>
                    ";

                for($i=0; $i<$nt; $i++){
                    echo 
                    "<tr>
                    <td><input type='text' name='statearr[]'></td>
                    <td><input type='text' name='inputarr[]'></td>
                    <td><input type='text' name='stackarr[]'></td>
                    <td><input type='text' name='nextarr[]'></td>
                    <td><input type='text' name='oparr[]'></td>
                    </tr>
                    ";
                }
                echo "</table>";
                echo '<input type="submit" name="second">';
            }
            else if($_SERVER['REQUEST_METHOD']=="POST" && (isset($_POST['second']) || isset($_POST['third']))){
                echo "<input type='hidden' name='states' required value='$states'>
                <input type='hidden' name='symbols' required value='$symbols'>
                <input type='hidden' name='stsymbols' required value='$stsymbols'>
                <input type='hidden' name='istate' required value='$istate'> 
                <input type='hidden' name='istack' required value='$istack'>
                <input type='hidden' name='astates' required value='$astates'>
                <input type='hidden' name='nt' required value='$nt'>";
                
                $statearr = $_POST['statearr'];
                $inputarr = $_POST['inputarr'];
                $stackarr = $_POST['stackarr'];
                $nextarr = $_POST['nextarr'];
                $oparr = $_POST['oparr'];

                echo "<table class='table table-striped-columns'>
                        <tr>
                            <th>State</th>
                            <th>Input</th>
                            <th>Stack Top</th>
                            <th>Next State</th>
                            <th>Stack Update</th>
                        </tr>
                    ";

                for($i=0; $i<$nt; $i++){
                    echo 
                    "<tr>
                    <td><input type='text' name='statearr[]' value='$statearr[$i]'></td>
                    <td><input type='text' name='inputarr[]' value='$inputarr[$i]'></td>
                    <td><input type='text' name='stackarr[]' value='$stackarr[$i]'></td>
                    <td><input type='text' name='nextarr[]' value='$nextarr[$i]'></td>
                    <td><input type='text' name='oparr[]' value='$oparr[$i]'></td>
                    </tr>
                    ";
                }
                echo "</table>";
                echo '<input type="submit" name="second">';
            }
        ?>
    </form>

    <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="post">
        <?php
            if($_SERVER['REQUEST_METHOD']=="POST" && (isset($_POST['second'])|| isset($_POST['third']))){
                echo "<input type='hidden' name='states' required value='$states'>
                <input type='hidden' name='symbols' required value='$symbols'>
                <input type='hidden' name='stsymbols' required value='$stsymbols'>
                <input type='hidden' name='istate' required value='$istate'> 
                <input type='hidden' name='istack' required value='$istack'>
                <input type='hidden' name='astates' required value='$astates'>
                <input type='hidden' name='nt' required value='$nt'>";
                
                $statearr = $_POST['statearr'];
                $inputarr = $_POST['inputarr'];
                $stackarr = $_POST['stackarr'];
                $nextarr = $_POST['nextarr'];
                $oparr = $_POST['oparr'];

                for($i=0; $i<$nt; $i++){
                    echo 
                    "
                    <input type='hidden' name='statearr[]' value='$statearr[$i]'>
                    <input type='hidden' name='inputarr[]' value='$inputarr[$i]'>
                    <input type='hidden' name='stackarr[]' value='$stackarr[$i]'>
                    <input type='hidden' name='nextarr[]' value='$nextarr[$i]'>
                    <input type='hidden' name='oparr[]' value='$oparr[$i]'>
                    
                    ";
                }
            }
            echo '<label for="inputString">Enter input string:</label>
            <input type="text" id="inputString" name="inputString" required>
            <input type="submit" name="third">';
        ?>
    </form>
<?php

function readFileContent($filename) {
    $lines = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    return $lines;
}

function tokenize($s, $delimiter = ' ') {
    return explode($delimiter, $s);
}

class State {
    public $q;
    public $st;
    public $ind;

    public function __construct($qq, $ss, $i) {
        $this->q = $qq;
        $this->st = $ss;
        $this->ind = $i;
    }

    public function __toString(){
        return $this->q."<br>".implode(" ",$this->st)."<br>".$this->ind."<br>";
    }
}

function check(&$output, $curr, &$inputString, &$productions, &$flag, &$finalStates, &$n) {
    if ($flag) {
        return;
    }

    if ($curr->ind == $n) {
        foreach ($finalStates as $x) {
            if ($curr->q == $x) {
                $flag = true;
                return;
            }
        }
    }

    foreach ($productions as $p) {
        // echo $curr->ind."<br>";
        if ($curr->q == $p[0] && $curr->st[count($curr->st) - 1] == $p[2]) {
            
            if ($p[1] == '^') {
                $a = new State($p[3], $curr->st, $curr->ind);
                array_pop($a->st);
                if ($p[4] != '^') {
                    for ($i = strlen($p[4]) - 1; $i >= 0; $i--) {
                        array_push($a->st, $p[4][$i]);
                    }
                }
                check($output, $a, $inputString, $productions, $flag, $finalStates, $n);
                if ($flag) {
                    $x = implode('', $a->st);
                    array_push($output, "{$curr->q}\t^\t{$curr->st[count($curr->st) - 1]}\t{$x}\t{$a->q}");
                    return;
                }
            } else if ($curr->ind<$n && $inputString[$curr->ind] == $p[1][0]) {
                $a = new State($p[3], $curr->st, $curr->ind + 1);
                array_pop($a->st);
                if ($p[4] != '^') {
                    for ($i = strlen($p[4]) - 1; $i >= 0; $i--) {
                        array_push($a->st, $p[4][$i]);
                    }
                }
                check($output, $a, $inputString, $productions, $flag, $finalStates, $n);
                if ($flag) {
                    $x = implode('', $a->st);
                    array_push($output, "{$curr->q}\t{$p[1][0]}\t{$curr->st[count($curr->st) - 1]}\t{$x}\t{$a->q}");
                    return;
                }
            }
        }
    }
}

// Verify the input string from POST data
if (isset($_POST['inputString'])) {
    $inputString = $_POST['inputString'];
} else {
    die("No input string provided");
}

$lines = readFileContent('EVEN.txt');
$states = tokenize($lines[0]);
$symbols = tokenize($lines[1]);
$stackSymbols = tokenize($lines[2]);
$initialState = $lines[3];
$initialStack = $lines[4];
$finalStates = tokenize($lines[5]);

// $productions = [];
// for ($i = 6; $i < count($lines); $i++) {
//     $productions[] = tokenize($lines[$i]);
// }
$productions = [];
for ($i = 0; $i < $nt; $i++) {
    $productions[] = [$statearr[$i], $inputarr[$i], $stackarr[$i], $nextarr[$i], $oparr[$i]];
}
// print_r($productions);

$q = new State($initialState, [$initialStack], 0);

$flag = false;
$output = [];
$n = strlen($inputString);

check($output, $q, $inputString, $productions, $flag, $finalStates, $n);

if ($flag) {
    echo "Accepted:<br>";
    echo "<table class='table table-striped-columns'>
            <tr>
                <th>State</th>
                <th>Input</th>
                <th>Stack Top</th>
                <th>Stack content after transition</th>
                <th>Next State</th>
            </tr>
          ";

    
    for ($i = count($output) - 1; $i >= 0; $i--) {
        $arr = explode("\t",$output[$i]);
        // print_r($arr);
        echo "
        <tr>
            <td>".$arr[0]."</td>
            <td>".$arr[1]."</td>
            <td>".$arr[2]."</td>
            <td>".$arr[3]."</td>
            <td>".$arr[4]."</td>
        </tr>
    ";
        // echo nl2br($output[$i] . "\n");
    }
    echo "</table>";
} else {
    echo "Rejected: NA<br>";
}

?>
</body>
</html>


