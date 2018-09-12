Splitting();


document.body.innerHTML += '<div style="position: absolute; top: 0; left: 0; right: 0; padding: .5em; font-size: 12px; font-family: monospace; text-align: center; pointer-event: none; ">ASPIRE FARTHER</div>';

var lr = document.querySelector('[data-splitting]');
window.addEventListener('click',()=>{
  var newone = lr.cloneNode(true);
  lr.parentNode.replaceChild(newone, lr);
  lr = newone;
});