<?php
echo "confirmation";


echo form_open('item/create');
echo form_submit('submit', 'Confirm');
echo form_close();



echo "<p>" . anchor('candystore/index','Back') . "</p>";
