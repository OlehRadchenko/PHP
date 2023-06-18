<?php
echo '
<form action="16a.php" method="post">
    <select id="lista" name="list">
        <option value="0">-- rozwiń --</option>';

        for ($i=1;$i<=10;$i++) echo '<option>'.$i.'</option>';
        
        echo '
    </select>
	<br>
	<input type="submit" value="Dalej" id="przycisk">
</form>
';
?>



