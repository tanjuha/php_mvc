<h1>Main page</h1>
<p>My name is 
  <b>
    <?php echo $name; ?>
  </b>
</p>

<h5>List emails</h5>
<ul>
    <?php foreach ($email as $val): ?>
      <li>
        <?php echo $val['email']; ?>
      </li>
    <?php endforeach; ?>
</ul>
