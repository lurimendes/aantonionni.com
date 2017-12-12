//@TODO: Organize, cleanup code and comment. Add structure also? prototype
$(document).ready(function() {
  $('.menu-icon').click(function() {
    console.log('clicked');
    $('.menu-items').toggle('slow');
  });
});

var simpleTween = TweenMax.to('.logo img', 0.5, {
  position: 'fixed',
  width: '105px',
  top:'42%',
  left: '12%',
  ease: Linear.easeNone
});

var scrollTextTween = TweenMax.to('.scroll-text', 0.5, {
  bottom: '250px',
  opacity: '0',
  ease: Linear.easeNone
});
var scrollMouseIconTween = TweenMax.to('.scroll .mouse-icon', 0.5, {
  bottom: '200px',
  opacity: '0',
  ease: Linear.easeNone
});
var scrollLineTween = TweenMax.to('.scroll .scroll-line', 0.5, {
  bottom: '20px',
  opacity: '0',
  ease: Linear.easeNone
});

// init controller
var controller = new ScrollMagic.Controller();

// create a scene
var testScene = new ScrollMagic.Scene({
  offset: 20        // start this scene after scrolling for 50px
})
.setTween(simpleTween);// pins the element for the the scene's duration

var scrollTextScene = new ScrollMagic.Scene({
  offset: 20        // start this scene after scrolling for 50px
})
.setTween(scrollTextTween);// pins the element for the the scene's duration
var scrollMouseIconScene = new ScrollMagic.Scene({
  offset: 20        // start this scene after scrolling for 50px
})
.setTween(scrollMouseIconTween);// pins the element for the the scene's duration
var scrollLineScene = new ScrollMagic.Scene({
  offset: 20        // start this scene after scrolling for 50px
})
.setTween(scrollLineTween);// pins the element for the the scene's duration

controller.addScene([testScene, scrollTextScene, scrollMouseIconScene, scrollLineScene]);
