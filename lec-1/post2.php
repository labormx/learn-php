

名前：<?php print($_POST['name']); ?>
<br />
好きな食べ物：<?php print_r($_POST['food']); ?>
<br />
<!--  セキュリティ -->
名前：<?php print(htmlspecialchars($_POST['name'])); ?>