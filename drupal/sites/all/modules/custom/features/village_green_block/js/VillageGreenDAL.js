!function(a){var b=STI.namespace("VillageGreen");b.VillageGreenDAL=function(){return{getDataForCurrentMinuteWelcomePage:function(a,b){jQuery.ajax({url:VG.config.baseUrl+"/village_green_block/api/getDataForCurrentMinute?siteID="+a,complete:b,dataType:"json",type:"POST"})}}}()}(jQuery);
//# sourceMappingURL=VillageGreenDAL.js.map