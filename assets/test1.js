// Playing around with a standard methods to extend JSMO with custom functions
;{
    // Define the jsmo in IIFE so we can reference object in our new function methods
    const jsmo = ExternalModules.Stanford.TestAjaxEMMethods;

    // Extend the official JSMO with new methods
    Object.assign(jsmo, {
        "exampleProperty": "exampleValue",

        InitFunction: function () {
            console.log("Example Init Function");

            // Note use of jsmo to call methods
            jsmo.ajax('MyAction', this.data).then(function (response) {
                // Process response
                console.log("Ajax Result: ", response);
            }).catch(function (err) {
                // Handle error
                console.log(err);
            });
        },

        SurveyAjax: function () {
            console.log("Example SurveyAjax Function");
            jsmo.ajax('MyAction', this.data).then(function (response) {
                // Process response
                console.log("Survey Ajax Result: ", response);
            }).catch(function (err) {
                // Handle error
                console.log(err);
            });
        }
    });
}
