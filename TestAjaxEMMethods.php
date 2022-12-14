<?php
namespace Stanford\TestAjaxEMMethods;

class TestAjaxEMMethods extends \ExternalModules\AbstractExternalModule {
	public function __construct() {
		parent::__construct();
		// Other code to run when object is instantiated
	}

	public function redcap_every_page_before_render( int $project_id ) {

	}

    public function redcap_data_entry_form_top($project_id, $record = NULL, $instrument, $event_id, $group_id = NULL, $survey_hash, $response_id, $repeat_instance = 1) {
        echo $this->initializeJavascriptModuleObject();
        // Data to add to object
        $data = [ "Survey" => "Test"];
        ?>
        <script src="<?=$this->getUrl("assets/test1.js",true)?>"></script>
        <script>
            $(function() {
                const module = <?=$this->getJavascriptModuleObjectName()?>;
                module.data = <?=json_encode($data)?>;
                module.afterRender(<?=$this->getJavascriptModuleObjectName()?>.InitFunction);
            })
        </script>
        <?php
    }


    public function redcap_survey_page_top($project_id, $record = NULL, $instrument, $event_id, $group_id = NULL, $repeat_instance = 1) {
        echo $this->initializeJavascriptModuleObject();
        // Data to add to object
        $data = [ "Foo" => "Bar"];
        ?>
        <script src="<?=$this->getUrl("assets/test1.js",true)?>"></script>
        <script>
            $(function() {
                const module = <?=$this->getJavascriptModuleObjectName()?>;
                module.data = <?=json_encode($data)?>;
                module.afterRender(<?=$this->getJavascriptModuleObjectName()?>.InitFunction);
                // module.ajax("Survey", module.data)
            })
        </script>
        <?php
    }


    public function redcap_module_ajax($action, $payload, $project_id, $record, $instrument, $event_id, $repeat_instance,
        $survey_hash, $response_id, $survey_queue_hash, $page, $page_full, $user_id, $group_id)
    {
        \Plugin::log(func_get_args());

        // Return is left as php object, is converted automatically
        return ["success"=>true];
    }



}
