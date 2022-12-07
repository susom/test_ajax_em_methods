// Playing around with best methods to extend JSMO with custom functions

Object.assign(ExternalModules.Stanford.TestAjaxEMMethods, {
   "assinged": "object",
    InitFunction: function(){
       console.log("Init")
    }
});

