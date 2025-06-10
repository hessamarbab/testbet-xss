<?php
    $headers = getallheaders();
    if($headers["Mooji"] !== "hessam") {
        throw new Exception('Nooooooooooooooo!');
    }
?>
<!DOCTYPE html>

    <html>


        <form style="margin: 20px" action="reflector.php"  method="POST">
            attr : <input name="attr" type="text">
                     <hr/>
            encode : <input name="encode" type="text">
                        <hr/>
            trim : <input name="trim" type="text">
                        <hr/>
            ignoreHTML : <input name="ignoreHTML" type="text">
                        <hr/>
            ignoreQoutScript : <input name="ignoreQoutScript" type="text">
                        <hr/>
            ignoreScript : <input name="ignoreScript" type="text">
                        <hr/>
            tag : <input name="tag" type="text">
                        <hr/>
            <input type="submit" value="sub">
            <hr/>
        </form>
<?php
    echo $_REQUEST['attr'] ? "<input value='{$_REQUEST['attr']}'>" : "";
    $encoded = urlencode($_REQUEST['encode']);
    echo $_REQUEST['encode'] ? "<input  value=\"$encoded\">" : "";
    $trimed = trim($_REQUEST['trim'], "\"");
    $decoded = urldecode($trimed);
    echo $_REQUEST['trim'] ? "<input  value=\"$decoded\">" : "";

    $ignored = str_replace('"', '\\"', $_REQUEST['ignoreHTML']);
    echo $_REQUEST['ignoreHTML'] ? "<input  value=\"$ignored\">" : "";

    $ignoredQout = str_replace('"', '\\"', $_REQUEST['ignoreQoutScript']);
    echo $_REQUEST['ignoreQoutScript'] ? "<script>var asghar = \"$ignoredQout\"</script>" : "";

    $ignoreds = str_replace(['\\','"'], ['\\\\', '\\"'], $_REQUEST['ignoreScript']);
    echo $_REQUEST['ignoreScript'] ? "<script>var asghar = \"$ignoreds\"</script>" : "";

    echo $_REQUEST['tag'] ? "<div>{$_REQUEST['tag']}</div>" : "";


?>
</html>


