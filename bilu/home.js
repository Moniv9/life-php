
$(document).ready(function() {
  var Search_Item, Search_View, obj;
  Search_Item = Backbone.Model.extend({
    url: 'index.php/welcome/search',
    initialize: function() {}
  });
  Search_View = Backbone.View.extend({
    initialize: function() {
      return this.render();
    },
    el: '#search_template',
    render: function() {
      var output;
     
      output = "<input id='query' type='text' />&nbsp";
      output = output + "<input type='button' value='Search' />";
      output = output + "<div id='result'></div>";
      return $(this.el).html(output);
    },
    events: {
      'click input[type=button]': 'dosearch'
    },
    dosearch: function(event) {
      var id, items, str;
      id = document.getElementById('query');
     
      items = new Search_Item({
        search_item: id.value
      });
      str = '';
      
      return items.save(items, {
        success: function(data) {
          $.each(data.toJSON(), function(i, val) {
            if (i !== 'search_item') {
              str = str + val.title + "<br/>";
              str = str + val.url + "<br/>";
              return str = str + val.tags + "<br/><br/>";
            }
          });
          return document.getElementById('result').innerHTML = str;
        }
      });
    }
  });
  return obj = new Search_View({});
});

