<!DOCTYPE html>
<!-- CONTACT MODAL -->
<div id="modal1" class="modal modal-fixed-footer">
<div class="modal-content">
  <div class="titleText center-align" style="padding: 10vh 0px;">
    <span class="bold-font">Kontakta oss</span>
  </div>
  <!-- For large and med-->
  <div class="x-small-box container center-align breadText hide-on-small-only">
    Om ni har någon som helst fråga, hör gärna av er!
    <br><br>
    E-mail: <span class="bold-font">elliot.berthold@outlook</span>
    <br>
    Telefon: <span class="bold-font">0707716601</span>
  </div>

  <?php require('includes/form/contact-form.php') ?>

  <!-- <div class="row">
   <form class="col s12" action="../includes/php/mailer.php" method="post">
     <div class="row">
       <div class="input-field col s12">
         <i class="material-icons prefix">account_circle</i>
         <input name="name" id="icon_prefix" type="text" class="validate">
         <label for="name">Namn</label>
       </div>
       <div class="input-field col s12">
         <i class="material-icons prefix">phone</i>
         <input name="number" id="icon_telephone" type="tel" class="validate">
         <label for="number">Telefon</label>
       </div>
       <div class="input-field col s12">
         <i class="material-icons prefix">email</i>
         <input name="email" id="email" type="email" class="validate">
         <label for="email">Email</label>
       </div>
       <div class="input-field col s12">
         <i class="material-icons prefix">map</i>
         <input name="adress" id="adress" type="text" class="validate">
         <label for="adress">Adress</label>
       </div>
       <div class="input-field col s12">
         <i class="material-icons prefix">assignment</i>
         <input name="subject" id="subject" type="text" class="validate">
         <label for="subject">Ämne</label>
       </div>
        <div class="input-field col s12">
          <i class="material-icons prefix">message</i>
          <input name="message" id="message" type="text" class="validate">
          <label for="message">Meddelande</label>
        </div>

      <div class="container center-align">
        <button class="btn waves-effect waves-light elliot-blue" type="submit" name="action">
          Skicka
          <i class="material-icons right">send</i>
        </button>
      </div>
     </div>
   </form>
 </div> -->
</div>
<div class="modal-footer">
</div>
</div>
