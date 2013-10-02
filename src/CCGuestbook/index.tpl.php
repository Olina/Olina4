<h1>Exempel på en gästbok</h1>
<p>En exempel på en gästbok i Olina. Nu med att spara i databasen.</p>

<form action="<?=$form_action?>" method='post'>
  <p>
    <label>Meddelande: <br/>
    <textarea name='newEntry'></textarea></label>
  </p>
  <p>
    <input type='submit' name='doAdd' value='Skicka meddelandet' />
    <input type='submit' name='doClear' value='Ta bort alla meddelanden' />
    <input type='submit' name='doCreate' value='Skapa en databastabell' />
  </p>
</form>

<h2>Current messages</h2>

<?php foreach($entries as $val):?>
<div style='background-color:#f6f6f6;border:1px solid #ccc;margin-bottom:1em;padding:1em;'>
  <p>At: <?=$val['created']?></p>
  <p><?=htmlent($val['entry'])?></p>
</div>
<?php endforeach;?>
