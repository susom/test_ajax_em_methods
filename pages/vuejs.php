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
<?php print loadJS('vue/vue-factory/dist/js/app.js') ?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<script src="<?php echo $module->getUrl("frontend/dist/test_jsmo_vue.umd.js") ?>"></script>
<div id="test_jsmo_vue"></div>
<script>
    window.module = <?=$module->getJavascriptModuleObjectName()?>;
    window.addEventListener('DOMContentLoaded', function (event) {
        const componentPromise = window.renderVueComponent(test_jsmo_vue, '#test_jsmo_vue')
        componentPromise.then(component => {
            console.log('component is ready')
        })
    })
</script>




