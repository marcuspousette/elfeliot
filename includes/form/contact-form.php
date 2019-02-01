<!DOCTYPE html>
<div class="row">
 <form class="col s12" action="./includes/php/mailer.php" method="post">
   <div class="row">
     <div class="input-field col s12">
       <i class="material-icons prefix">account_circle</i>
       <input placeholder="Namn" name="name" id="icon_prefix" type="text" class="validate">
     </div>
     <div class="input-field col s12">
       <i class="material-icons prefix">phone</i>
       <input placeholder="Numer" name="number" id="icon_telephone" type="tel" class="validate">
     </div>
     <div class="input-field col s12">
       <i class="material-icons prefix">email</i>
       <input placeholder="Email" name="email" id="email" type="email" class="validate">
     </div>
     <div class="input-field col s12">
       <i class="material-icons prefix">map</i>
       <input placeholder="Adress" name="adress" id="adress" type="text" class="validate">
     </div>
     <div class="input-field col s12">
       <i class="material-icons prefix">assignment</i>
       <input placeholder="Ämne" name="subject" id="subject" type="text" class="validate">
     </div>
      <div class="input-field col s12">
        <i class="material-icons prefix">message</i>
        <input placeholder="Meddelande" name="message" id="message" type="text" class="validate">
      </div>

    <div class="container center-align">
      <button class="btn waves-effect waves-light elliot-blue" type="submit" name="action">
        Skicka
        <i class="material-icons right">send</i>
      </button>
    </div>
   </div>
 </form>
</div>
