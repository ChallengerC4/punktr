<pre>
<?php
require_once("notes_definition.php");

// anything here is done by server
echo "this is a test <BR>";

// global variables here
$key="C";

$notes=array();

$notes  = array(newc4(), newd4(), newe4(), newc4(), newc4(), newa3(), newb3(), newc4());
$notes2 = array();
foreach ($notes as $n) {
    $n=$n->downsixth();
    array_push($notes2, $n);
}
echo "notes2:";
print_r($notes2);
die();
?>





</pre>

<!-- All html below -->


<html>
    <head>
        <title>Welcome to composition</title>
    </head>    
    <body>
        <form>
            <?php
            for ($i=0;$i<10;$i=$i+1) {
                ?>
                <input type="button" value="Button <?php echo $i; ?>">
                <?php
            }
            ?>
            <input type="submit" value="I am a button." />
        </form>
        
    </body>

<!-- this is out of the server -->

</html>
















