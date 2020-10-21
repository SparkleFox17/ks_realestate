

<!--First Name starts MDL-->
<form id="contact-form" action="#">
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="sample1">
    <label class="mdl-textfield__label" for="sample1">First Name</label>
  </div>
<!--First Name ends-->


<!--Phone Number starts MDL--><form action="#">
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample2">
    <label class="mdl-textfield__label" for="sample2">Phone Number</label>
    <span class="mdl-textfield__error">Input is not a number!</span>
  </div>
<!--Phone Number ends-->

<!--Emailstarts MDL-->
  <div class="mdl-textfield mdl-js-textfield">
    <input class="mdl-textfield__input" type="text" id="sample1">
    <label class="mdl-textfield__label" for="sample1">Email</label>
  </div>
<!--Email ends-->

<?php
  if ($form === 'buy') {
  ?>
    <div class="mdl-textfield mdl-js-textfield">
      Are you a first time buyer?<br/>
      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
        <span class="mdl-radio__label">Yes</span>
      </label>
      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
        <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
        <span class="mdl-radio__label">No</span>
      </label>
    </div>
  <?php
  } else if ($form === 'sell') {
    ?>
    <div class="mdl-textfield mdl-js-textfield">
      Is this your first time selling?<br/>
      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
        <span class="mdl-radio__label">Yes</span>
      </label>
      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
        <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
        <span class="mdl-radio__label">No</span>
      </label>
    </div>
    <?php
  } else if ($form === 'invest') {
    ?>
    <div class="mdl-textfield mdl-js-textfield">
      Have you ever invested before?<br/>
      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-1">
        <input type="radio" id="option-1" class="mdl-radio__button" name="options" value="1" checked>
        <span class="mdl-radio__label">Yes</span>
      </label>
      <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="option-2">
        <input type="radio" id="option-2" class="mdl-radio__button" name="options" value="2">
        <span class="mdl-radio__label">No</span>
      </label>
    </div>
    <?php
  }
?>

<!--Leave a msg starts-->

  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" ></textarea>
    <label class="mdl-textfield__label" for="sample5">Text lines...</label>
  </div>

  <a href="<?php echo SITEPATH; ?>/contact/submit/<?php echo $service; ?>">
      <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
          Send
      </button>
  </a>
</form>
<!--Leave a msg ends-->




