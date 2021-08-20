window.addEventListener('load', function() {
  const container = document.querySelector('[data-parallax]');
  const childNodes = container.children;
  for (let n = 0; n < childNodes.length; n++) {
    childNodes[n].setAttribute('data-index', n + 1);
  }
  container.addEventListener('mousemove',
      function(e) {
        let elms = this.children;
        for (let c = 0; c < elms.length; c++) {
          let motion = parseInt(elms[c].getAttribute('data-index')) / 10;
          let x = ((e.clientX) * motion) + 'px';
          let y = ((e.clientY) * motion) + 'px';
          elms[c].style.backgroundPosition = x +
              ' ' + y;
        }
      });
});
