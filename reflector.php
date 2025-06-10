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
    echo $_POST['attr'] ? "<input value=\"{$_POST['attr']}\">" : "";
    $encoded = urlencode($_POST['encode']);
    echo $_POST['encode'] ? "<input  value=\"$encoded\">" : "";
    $trimed = trim($_POST['trim'], "\"");
    $decoded = urldecode($trimed);
    echo $_POST['trim'] ? "<input  value=\"$decoded\">" : "";

    $ignored = str_replace('"', '\\"', $_POST['ignoreHTML']);
    echo $_POST['ignoreHTML'] ? "<input  value=\"$ignored\">" : "";

    $ignoredQout = str_replace('"', '\\"', $_POST['ignoreQoutScript']);
    echo $_POST['ignoreQoutScript'] ? "<script>var asghar = \"$ignoredQout\"</script>" : "";

    $ignoreds = str_replace(['\\','"'], ['\\\\', '\\"'], $_POST['ignoreScript']);
    echo $_POST['ignoreScript'] ? "<script>var asghar = \"$ignoreds\"</script>" : "";

    echo $_POST['tag'] ? "<div>{$_POST['tag']}</div>" : "";


?>
</html>


