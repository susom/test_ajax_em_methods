// Playing around with best methods to extend JSMO with custom functions

Object.assign(ExternalModules.Stanford.TestAjaxEMMethods, {
   "assinged": "object",
    InitFunction: function(){
       console.log("Init");

       let $this = ExternalModules.Stanford.TestAjaxEMMethods;
       $this.ajax('MyAction', this.data).then(function(response) {
            // Process response
            console.log("Result: ", response);
        }).catch(function(err) {
            // Handle error
            console.log(err);
        });


    },
    SurveyAjax: function(){
        parent.ajax('survey', this.data).then(function(response) {
            // Process response
            console.log("Result: ", response);
        }).catch(function(err) {
            // Handle error
            console.log(err);
        });

    }
});

