<?php

?>

<div id = "demp-reply-container">
   <div id = "demp-mugshot">
      <img src = "http://mini-ipo.com/wp-content/uploads/s1.jpg" />
   </div>
   <div id = "demp-contact">
      <div id = "form-left" style = "width: 45%">
         <form action = "/thank-you" method = "post">
	    <h2>Request a Call Back</h2>
            <input type = "text" name = "demp-name" id = "demp-name" placeholder = "Your Name" /><br />
            <input type = "text" name = "demp-email" id = "demp-email" placeholder = "Your Email" /><br />
            <input type = "text" name = "demp-phone" id = "demp-phone" placeholder = "Your Phone" /><br />
            <input type = "submit" name = "submit" id = "submit-demp" value = "Submit" /><br />
         </form>
      </div>
   </div>
</div>
<style>
   #demp-demp-reply-container{float:left;width:100%}
   #demp-mugshot{float:left;width:48%}
   #demp-contact{float:left;min-width:48%;}
</style>
