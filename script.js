// "use strict";

let copyvalue=document.querySelector('#disabledTextInput');
let copybtn=document.querySelector('#copy');
function nusxa(event)
{
    copyvalue.select();
    copyvalue.setSelectionRange(0,99999);

    navigator.clipboard.writeText(copyvalue.value);
    Swal.fire(
        'Nusxalandi',
        '',
        'success'
      );
}
  
// }element.addeventlistener('click' function(event) )
copybtn.addEventListener("click",nusxa);
// copyvalue.addEventListener()
console.log(copyvalue);