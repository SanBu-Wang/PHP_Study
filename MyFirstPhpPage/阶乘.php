<form action='' method='post'>
    <label>文本框:<input type='text' name='text' value="10"></label><br/>
    <input type='submit' value='提交' name='sub'>
</form>
<?php
if (!empty($_POST['sub'])) {
    $inputText = $_POST['text'];
}
//echo $inputText;
//n!=n×(n-1)!

function factorial($inputText)
{
    if ($inputText == 1 || $inputText == 0) {
        return 1;
    } else {
        return $inputText * factorial($inputText - 1);
    }
}

echo factorial($inputText);