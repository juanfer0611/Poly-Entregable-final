window.onload = function() {

  function getScrollTop() {
    if (typeof window.pageYOffset !== 'undefined' ) {
      // Most browsers
      return window.pageYOffset;
    }

    var d = document.documentElement;
    if (d.clientHeight) {
      // IE in standards mode
      return d.scrollTop;
    }

    // IE in quirks mode
    return document.body.scrollTop;
  }

  window.onscroll = function() {
    var box = document.getElementById('box'),
        scroll = getScrollTop();

    if (scroll <= 159 || scroll>= 1200) {
      box.style.top = "159px";
    }
    else {
      box.style.top = (scroll + 10) + "px";
    }
  };

};