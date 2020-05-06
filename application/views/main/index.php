<h1>Main page</h1>
<p>My name is 
  <b>
    <?php echo $name; ?>
  </b>
</p>

<?php foreach ($email as $val): ?>
<p>
<?php echo $val['email']; ?>
</p>

<?php endforeach; ?>