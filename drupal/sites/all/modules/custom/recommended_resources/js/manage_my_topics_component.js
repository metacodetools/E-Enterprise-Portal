function updatingUserTopics(){still_updating++;var a=$(".back-to-lgc-widget a");a.text()!=update_anchor_text&&a.addClass("disabled").html(update_anchor_text+'  <i class="fa fa-spinner fa-spin" aria-hidden="true"></i>')}function handleError(a){console.log(a)}function saveTopic(a){var b=a.val(),c=$(".back-to-lgc-widget a");$.ajax({url:"manage_my_topics/save_topic",data:{tid:b},method:"POST",beforeSend:function(){updatingUserTopics()},success:function(a){still_updating--,a=$.parseJSON(a);var b=a.error;b||0!=still_updating?handleError(a.msg):c.removeClass("disabled").text(anchor_text)},failure:function(a){handleError(a)}})}function removeTopic(a,b){var c,d=$(".back-to-lgc-widget a");c=b?a:a.val(),$.ajax({url:"manage_my_topics/remove_topic",data:{tid:c},method:"POST",beforeSend:function(){updatingUserTopics()},success:function(a){still_updating--,a=$.parseJSON(a);var c=a.error;c||0!=still_updating?handleError(a.msg):(b&&showLGCResourcesView(),d.removeClass("disabled").text(anchor_text))},failure:function(a){handleError(a)}})}var anchor_text="Back",update_anchor_text="Saving changes",still_updating=0;!function(a){a(document).ready(function(){a("body").on("click","#manage-my-topics .term-name-checkboxes, #manage-my-topics-wrapper .term-name-checkboxes",function(){var b=a(this);b.prop("checked")?saveTopic(b):removeTopic(b)})})}(jQuery);
//# sourceMappingURL=src/manage_my_topics_component.js.map