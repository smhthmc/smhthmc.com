/* (function() {
  tinymce.create("tinymce.plugins.toc", {
    init: function(ed, url) {
      ed.addButton("toc", {
        title: "TOC",
        icon: false,
        onclick: function() {
          var posts = prompt("Number of posts", "1");
          var text = prompt("List Heading", "This is the heading text");

          if (text != null) {
            if (posts != null)
              ed.execCommand(
                "mceInsertContent",
                false,
                '[recent-posts posts="' +
                  posts +
                  '"]' +
                  text +
                  "[/recent-posts]"
              );
            else
              ed.execCommand(
                "mceInsertContent",
                false,
                "[recent-posts]" + text + "[/recent-posts]"
              );
          } else {
            if (posts != null)
              ed.execCommand(
                "mceInsertContent",
                false,
                '[recent-posts posts="' + posts + '"]'
              );
            else ed.execCommand("mceInsertContent", false, "[recent-posts]");
          }
        }
      });
    },
    createControl: function(n, cm) {
      return null;
    },
    getInfo: function() {
      return {
        longname: "Recent Posts",
        author: "Konstantinos Kouratoras",
        authorurl: "http://www.kouratoras.gr",
        version: "1.0"
      };
    }
  });
  tinymce.PluginManager.add("recentposts", tinymce.plugins.recentposts);
})();
 */
