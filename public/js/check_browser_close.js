/**
 * This javascript file checks for the brower/browser tab action.
 * It is based on the file menstioned by Daniel Melo.
 * Reference: http://stackoverflow.com/questions/1921941/close-kill-the-session-when-the-browser-or-tab-is-closed
 */
var validNavigation = false;
 
function wireUpEvents() {
  /**
   * For a list of events that triggers onbeforeunload on IE
   * check http://msdn.microsoft.com/en-us/library/ms536907(VS.85).aspx
   *
   * onbeforeunload for IE and chrome
   * check http://stackoverflow.com/questions/1802930/setting-onbeforeunload-on-body-element-in-chrome-and-ie-using-jquery
   */
  var dont_confirm_leave = 0; //set dont_confirm_leave to 1 when you want the user to be able to leave withou confirmation
  var leave_message = '¿Estas seguro que deseas salir sin cerrar sesion?'
  function goodbye(e) {
    if (!validNavigation) {
      if (dont_confirm_leave!==1) {
        if(!e) e = window.event;
        //e.cancelBubble is supported by IE - this will kill the bubbling process.
        e.cancelBubble = true;
        e.returnValue = leave_message;
        //e.stopPropagation works in Firefox.
        if (e.stopPropagation) {
          e.stopPropagation();
          e.preventDefault();
        }
        //return works for Chrome and Safari
        return leave_message;
      }
    }
  }
  window.onbeforeunload=goodbye;
 
  // Attach the event keypress to exclude the F5 refresh
  $(document).bind('keypress', function(e) {
    if (e.keyCode == 116){
      validNavigation = true;
    }
  });
  
 
  // Attach the event click for all links in the page
  $(document).on('click','a', function() {
     validNavigation = true;
  });
  
   // Attach the event click for all links in the page
  $(document).on('click','button', function() {
     validNavigation = true;
  });
  
   // Attach the event click for all links in the page
  $(document).on('submit','form', function() {
     validNavigation = true;
  });
  
   // Attach the event click for all links in the page
  $(document).on('click','input[type=submit]', function() {
     validNavigation = true;
  });
   

 
}
 
// Wire up the events as soon as the DOM tree is ready
$(document).ready(function() {
  wireUpEvents();
});