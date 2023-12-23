var warning_box= document.getElementById("warning_box")
var close_warning= document.getElementById("close_warning")
var warning_message= document.getElementById("warning_message")


function showorhide_warning(show) {
    if (show==true) {
        warning_box.style.display='flex'
       
    }
    if (show==false) {
        warning_box.style.display='none'
      
    }


}

export {showorhide_warning,warning_message,warning_box}
close_warning.addEventListener("click", (event) => {
    showorhide_warning(false);
    warning_box.style.backgroundColor ="rgba(231, 137, 147, 1)"
    warning_box.style.border="1px solid rgba(218, 0, 22, 1)"
   });




