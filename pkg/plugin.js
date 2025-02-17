
;(function ( $, window, document, undefined ) {

    var pluginName = 'tabulator',
        _search = '.waxed-tabulator',
        _api = ['setColumns', 'setContent'],
        defaults = {
          height:"330px",
          columns:[
            {title:"Loading", field:"loading"}
          ]
        },
        inited = false
        ;

    function Instance(pluggable,element,dd){
      var that = this;
      this.pluggable = pluggable;
      this.element = element;
      this.o = element;
      this.t = 'tabulator';
      this.dd = dd;
      this.name = '';
      this.cfg = {
      };
      this._rec = {};
      this._inited = false;

      this.setColumns = function(columns) {
        if (typeof columns != 'object') return;

        for (var i=0; i<columns.length; i++ ) {
          if ((typeof (columns[i].sorter) == 'string')&&(columns[i].sorter=='server')) {
            columns[i].sorter = function(a, b, aRow, bRow, column, dir, sorterParams){
              return true;
            };
          };
          if ((typeof (columns[i].formatter) == 'string')&&(columns[i].formatter=='xxx')) {
            columns[i].formatter = function(cell, formatterParams, onRendered){
              //cell - the cell component
              //formatterParams - parameters set for the column
              //onRendered - function to call when the formatter has been rendered

              return cell.getValue(); //return the contents of the cell;

            };
          };
        };
        that.table.setColumns(columns);

      },

      this.setContent = function(data) {

        if (typeof data != 'object') return;
        //console.log('DATA', data);

        that.table.setData(data)
        .then(function(){
            //run code after table has been successfuly updated
            //console.log('DATA.done');
        })
        .catch(function(error){
            //handle error loading data
        });


      },

      this.invalidate = function(RECORD){

      },

      this.setRecord = function(RECORD){
        if (typeof that.dd.name == 'undefined') return;
        var rec = that.pluggable.getvar(that.dd.name, RECORD);
        if (typeof rec != 'object') { return; };

        this._rec = Object.assign(this._rec, rec);
        if (this._inited) {
          this._setRecord();
        };

      },

      this._setRecord = function(){
        
        if (Object.keys(this._rec).length<1) {
          console.log('nothing to do');
          return;
        };

        if (typeof this._rec.settings == 'object') { 
          this._inited = false;
          var cfg = Object.assign(defaults,this._rec.settings);
          delete this._rec.settings;
          this._build(cfg);
          return;
        };

        if (typeof this._rec.columns == 'object') {
          that.setColumns(this._rec.columns);
        };

        if (typeof this._rec.value == 'object') {
          that.setContent(this._rec.value);
        };
        
        this._rec = {};

      },

      this.free = function() {

      },

      this._ajaxRequest = function(url,b,post,d){
        console.log('REQUESTING',url,b,post,d);
        return new Promise(function(resolve, reject){
            //do some async data retrieval then pass the array of row data back into Tabulator

            var data = {
              'data' : [],
              'last_page' : Math.ceil(16/post.size)
            };
            resolve(data);

            //if there is an error call this function and pass the error message or object into it
            //reject();
        });
      },

      this._filter = function(ev) {
        ev.preventDefault();ev.stopPropagation();

        var d = $(ev.currentTarget).serializeArray();
        console.log('filter', d);
        var f = '';
        for (var i=0; i<d.length; i++) {
          if (d[i].name == 'filter') {f = d[i].value; break; }
        };

        console.log(f);
        if (f == '') {
          this.table.clearFilter(true);
          return false;
        };

        var F = [];
        var cols = this.table.getColumnDefinitions();
        console.log(cols);
        F.push({field:'*', type:"like", value:f});
        /*
        for (var i=0; i<cols.length; i++) {
          if (
            (typeof cols[i].searchable == 'boolean')
            && (cols[i].searchable===true)
          ) {
            F.push({field:cols[i].field, type:"like", value:f});
          };
        };
        */

        //var FF = []; FF.push(F);console.log(FF);


        this.table.setFilter(F);

        return false;


      },
      this._build=function(cfg) {
        this.table = new Tabulator(that.element,cfg);
        this.table.on("tableBuilt", () => {
          that._setRecord();
          that._inited = true;
          that.pluggable.setBehavior(that.dd.name + '/download',
          function(o){
            //console.log(o);
            if (typeof(o.type)!='string') o.type = 'csv';
            if (typeof(o.filename)!='string') o.filename = 'data.csv';
            var oo = {
              "bom":true
            };
            if (typeof(o.delimiter)=='string') oo.delimiter = o.delimiter;
            that.table.download(o.type, o.filename, oo);
          });
        });
        this.table.on("cellDblClick", function(e, cell, c){
          //e - the click event object
          //row - row component
          console.log(e,cell,c);
        });        
      },

      this.init=function() {
        
        this._build(defaults);
        
        
        /* {
            height:"311px",
            columns:[
              {title:"Loading", field:"loading", align:"center"}
            ],
            **
            ajaxRequesting:function(url, params){
    //url - the URL of the request
    //params - the parameters passed with the request
              console.log(url, params);
              //return false;
            },
            dataSorting:function(sorters){
              //console.log('sorting', sorters);
              //sorters - an array of the sorters currently applied
              for (var i=0 ; i<sorters.length; i++) {
                console.log(sorters[i].field,sorters[i].dir);
              };
              return true;
            },
            **
            **
            pagination:"local",
            paginationSize:5,
            paginationSizeSelector:[3, 6, 8, 10]
            **
            pagination:"remote", //enable remote pagination
            ajaxURL:that.pluggable._routes.action, //set url for ajax request
            ajaxParams:{
              token:"ABC123"

            }, //set any standard parameters to pass with the request
            paginationSize:5, //optional parameter to request a certain number of rows per page
            ajaxFiltering:true,
            
            ajaxSorting:false,
            
            ajaxRequestFunc:that._ajaxRequest
        });
        */

        //$(that.element).closest('form').submit(function(ev){that._filter(ev);});

        inited = true;
      },
      this._init_();
    }

    $.waxxx(pluginName, _search, Instance, _api);


})( jQuery, window, document );
/*--*/
//# sourceURL: /js/jam/boilerplate/plugin.js
