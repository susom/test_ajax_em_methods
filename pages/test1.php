<?php
namespace Stanford\TestAjaxEMMethods;

/** @var TestAjaxEMMethods $module */

require APP_PATH_DOCROOT . "ProjectGeneral/header.php";


$name = $module->getJavascriptModuleObjectName();

// Replace this with your module code
echo "Hello from $name";



echo $module->initializeJavascriptModuleObject();

$data = ["foo" => "bar"];

?>

<script>
    console.log("Part1");
</script>

<script>
    $(function() {

        console.log("Foo");
        const module = <?=$module->getJavascriptModuleObjectName()?>;

        // enable-ajax-logging must be set to true
        // module.log('Hello from JavaScript!', { "record": 4, "foo":"bar" }).then(function(logId) {
        //    // Do stuff with the logId
        //     console.log(logId);
        // }).catch(function(err) {
        //    // Report error
        //     alert(err);
        // });

        //
        //const data = {
        //    greeting: "Hello Action"
        //};
        const data = <?=json_encode($data)?>;
        module.ajax('MyAction', data).then(function(response) {
           // Do stuff with response
            console.log("ajax complete", response);
        }).catch(function(err) {
           // Report error
            console.log("error")
        });
    })
</script>




