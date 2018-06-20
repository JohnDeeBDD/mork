<?php
   ?>
<style>
   .mork-input{
   float: left;
   min-width:  95% !important;
   padding: 12px 20px;
   margin: 8px 0;
   border-radius: 4px;
   }
   input[type=text] {
   width: 100%;
   padding: 12px 20px;
   margin: 8px 0;
   font-size:125%;
   }
   input[type=submit] {
   width: 100%;
   padding: 12px 20px;
   margin: 8px 0;
   }
	.demp-image{width:100%;clear:none;}
   	#demp-demp-reply-container{float:left;width:100%;min-width: 100%;clear:none;}
   	#demp-mugshot{float:left;min-width: 42%;max-width:42%;position: relative; display: inline-block;clear:none;}
   	#demp-contact{float:left; min-width: 100%;float:left;position: relative; display: inline-block;clear:none;}
	#side-by-side-container{margin:20px;float:left;position: relative; display: inline-block;clear:none;}
</style>

<div id = "demp-reply-container">
   <h2>Request a Call Back</h2>
   <div id = "side-by-side-container">
      <div id = "demp-mugshot">
         <img class = "demp-image" src = "http://mini-ipo.com/wp-content/uploads/s1.jpg" />
      </div>
      <!-- demp-mugshot -->
      <div id = "demp-contact">
         <div id = "form-left" style = "width: 45%;">
            <form action = "/thank-you" method = "post">
               <input class = "mork-input" type = "text" name = "demp-time" id = "demp-time" placeholder = "Best Time to Call" /><br />
               <input class = "mork-input" type = "text" name = "demp-name" id = "demp-name" placeholder = "Your Name" /><br />
               <input class = "mork-input" type = "text" name = "demp-email" id = "demp-email" placeholder = "Your Email" /><br />
               <input class = "mork-input" type = "text" name = "demp-phone" id = "demp-phone" placeholder = "Your Phone" /><br />
               <textarea class = "mork-input" name="textahoy" cols="40" rows="10" class="" placeholder="Message" style=""></textarea>
               <input class = "mork-input" type = "submit" name = "submit" id = "submit-demp" value = "Submit" /><br />
            </form>
         </div>
         <!-- form-left -->
      </div>
      <!-- demp-contact -->
   </div>
   <!-- side-by-side-container -->
</div>
<!-- demp-reply-container -->