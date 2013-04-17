(function() {
   tinymce.create('tinymce.plugins.bootstrapbuttons', {
      init : function(ed, url) {
        ed.addCommand('bootstrapWindow', function() {
            ed.windowManager.open({
                file : url + '/bootstrap.php', //This line
                width : 450 + parseInt(ed.getLang('example.delta_width', 0)),
                height : 350 + parseInt(ed.getLang('example.delta_height', 0)),
                inline : 1
            }, {
                plugin_url : url
            });
        });
        ed.addButton('bootstrapbuttons', {
            title : 'Insert Bootstrap Element',
            image : url+'/bootstrap.png',
            cmd : 'bootstrapWindow'
        });
      },
      createControl : function(n, cm) {
         return null;
      },
      getInfo : function() {
         return {
            longname : "Bootstrap MCE Elements",
            author : 'Daniel Nice',
            authorurl : 'http://danielnice.com',
            infourl : 'http://parachuteapplications.com',
            version : "1.0"
         };
      }
   });
   tinymce.PluginManager.add('bootstrapbuttons', tinymce.plugins.bootstrapbuttons);
})();