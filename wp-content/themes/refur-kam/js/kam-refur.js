(function ($) {
  'use strict';

  var model = {
    headlines: [],
  }

  var postHeadlineController = {
    addPostToHeadline: function (post) {
      model.headlines.push(post);
    },

    displayPostsHeadline: function() {
      postHeadlineView.init();
    },

  }

  var postHeadlineView = {
    init: function() {
      $('.header-showcase_btn').before('<div id="animated-headline-holder" class="posts-headline-animated"></div>');
      var container = $('#animated-headline-holder');
      container.append('<span id="animated-headline"><div class="loading"></div></span>');
      this.animateHeadline();
    },

    animateHeadline: function() {
      var headline = document.getElementById("animated-headline");
      var cursor = 0;

      var changeText = function(element, tween) {
        element.textContent = model.headlines[cursor++].title.rendered;
        if(cursor === model.headlines.length) {
          cursor = 0;
        }
      };
      var tl = new TimelineMax({repeat: -1, repeatDelay: 1.5, onRepeat: changeText, onRepeatParams:[headline, "{self}"]});
      tl.to(headline, 1.5, {opacity:1, top: 0});
      tl.to(headline, 1.5, {opacity:0, top: 50, delay: 5});
      tl.repeat();
    }
  }

  $(function(){
    $.getJSON('/kam-wp/wp-json/wp/v2/posts?per_page=5&orderby=date', function(data) {
      data.forEach(function (post) {
        postHeadlineController.addPostToHeadline(post);
      });
      postHeadlineController.displayPostsHeadline();
      console.log(model.headlines);
    });
  });

}( jQuery));
