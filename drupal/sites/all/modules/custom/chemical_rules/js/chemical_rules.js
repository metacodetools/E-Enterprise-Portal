function showElementOutOfMany($wrapper_to_show,$common_selector){$common_selector.hide(),$wrapper_to_show.show(),resizeModal()}function resizeModal(){jQuery("#chemical-rules-modal").dialog({position:{my:"center",at:"center"}}),jQuery(".chemical-rules-modal").css("top").replace("px","")<1&&jQuery(".chemical-rules-modal").css("top",0)}function checkValues(previous,current,cIndex,keys){var previousKeys=[];return"object"==typeof previous[keys[cIndex]]&&(previousKeys=Object.keys(previous[keys[cIndex]])),previousKeys.indexOf("Value")>-1&&""==previous[keys[cIndex]].Value?delete previous[keys[cIndex]]:["object"].indexOf(typeof previous[keys[cIndex]])>-1&&(previous[keys[cIndex]]=previousKeys.reduce(checkValues,previous[keys[cIndex]]),0==Object.keys(previous[keys[cIndex]]).length&&delete previous[keys[cIndex]]),previous}function resetCRForm(){var $form=$("#cr-search");$form.val("")}var sampleData=function(){};!function($){$("#cr-tabs").tabs();$("#cr-search-chems-btn").click(function(){$("#chemical-rules-modal").dialog({modal:!0,width:"auto",position:{my:"center",at:"center"},dialogClass:"chemical-rules-modal",autoOpen:!0,draggable:!1,create:function(event,ui){$("#cr-modal-toc-icons").tocify({selectors:"h2"}).data("toc-tocify");$(window).resize(function(){resizeModal()})},close:function(event,ui){}}),resizeModal()}),$("#chemical-rules-modal").on("dialogclose",function(){var $form_wrapper=$("#chemical-rules-form-wrapper"),$all_wrappers=$(".chemical-rules-modal-wrapper");showElementOutOfMany($form_wrapper,$all_wrappers),resizeModal()})}(jQuery);
//# sourceMappingURL=src/chemical_rules.js.map