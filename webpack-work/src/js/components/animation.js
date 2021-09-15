import Typed from 'typed.js';

const typedString = document.getElementById('typed-strings');

if (typedString !== null) {
  function typed() {
    new Typed('#typed', {
      stringsElement: '#typed-strings',
      typeSpeed: 100,
      startDelay: 500,
      backSpeed: 50,
      loop: true,
    });
  }

  if (document.readyState == 'loading') {
    document.addEventListener('DOMContentLoaded', typed);
  } else {
    typed();
  }
}
