!function(a){function b(){a("#reload_favorite_links").trigger("click")}function c(b){a("#load_more").hide(),a.ajax({url:Drupal.settings.basePath+"load_links",method:"GET",async:b,data:{json:!0},success:function(b){var b=a.parseJSON(b);"false"!=b.url_data&&(favorite_urls=b.urls,favorite_url_mapping=b.url_mapping,id_label_mapping=b.label_mapping)}})}function d(){var b=[".pane-views-cdx-facility-management-block",".pane-views-progress-tracker-block-1",".pane-views-to-do-block-1"];a(".panel-pane:not("+b.join(",")+") img").each(function(){if("#"!=a(this).closest("a").attr("href")&&""!=a(this).closest("a").attr("href")&&!a(this).closest("a").hasClass("processed-favorite")){var b=new FavoriteLink(a(this));b.addFavoriteButton()}}),a(".panel-pane:not("+b.join(",")+") a:not(.favorites-ignore, .menu-link, .skip-link, .paginate_button,[href^=mailto], [href^=javascript])").each(function(){if(a(this).text().length>0&&"#"!=a(this).attr("href")&&"/"!=a(this).attr("href")&&"#close"!=a(this).attr("href")&&!a(this).hasClass("processed-favorite")&&""!=a(this).attr("href")){var b=new FavoriteLink(a(this));b.setUrl(a(this).attr("href")),b.setTitle(a(this).text()),b.qtip_postion={my:"left center",at:"right center",target:a(this)},b.addFavoriteButton()}})}function e(b,c){try{if(1==c)return a(b).trigger("mouseover"),j="#"+a(b).attr("aria-describedby");a(b).trigger("mouseout")}catch(a){}}function f(b){""!=b?a("#favorite_links-ajax-wrapper").find(b).focus():a("#favorite_links-ajax-wrapper").find(".favorites-ignore").focus()}function g(d,e,g,i){var j,k,l=!1;a.isNumeric(g)?(j=g,l=!0,k="id"):k=encodeURIComponent(g),a.ajax({url:Drupal.settings.basePath+"process_favorite_link",type:"POST",async:!1,data:{url:k,action:e,title:i,id:j},success:function(k){if(d.unbind("click"),"add"==e)b(),c(!1),d.removeClass("add_link").removeClass("new_link").removeClass("old_link").removeClass("filled").removeClass("empty").attr("title","Remove favorite").addClass("remove_link old_link filled").attr("id",favorite_url_mapping[g]+"__favorite_link"),d.next(".sr-only").text("Favorited. Press Ctrl + D to unfavorite");else{if(d.hasClass("in-widget")){g=a(d).closest("tr").find("a").attr("href");var l=a(d).closest("tr"),m=l[0].rowIndex-1,n=a("#favorite_links-ajax-wrapper").find("table").find("tbody").children("tr").length-1;if(m<n){var o=l.next().find("a");h="#"+o[0].id}else if(m==n&&1!=n){var p=l.prev().find("a");h="#"+p[0].id}else h="";a(d).closest("tr").remove()}else{var q=a('*[id="'+j+'__favorite_link"].in-widget');g=a(q).closest("tr").find(".favorites-link").attr("href")}d=a('*[id="'+j+'__favorite_link"]'),i=id_label_mapping[j],b(),d.attr("id",g+"__"+i),d.removeClass("remove_link").removeClass("new_link").removeClass("old_link").removeClass("filled").removeClass("empty"),d.attr("title","Add favorite"),d.addClass("add_link new_link empty "),d.next(".sr-only").text("Press Ctrl + D to favorite this link.")}f(h)}})}var h,i,j;a(document).ready(function(){a(document.body).on("click",".old_link",function(){var b,d=a(this).attr("id").split("__"),e=d[0],f=a(this);b=f.hasClass("add_link")?"add":"remove",g(f,b,e,""),f.hasClass(".in-widget")&&c(!0)}),a(document.body).on("click",".new_link",function(){var b,d=a(this).attr("id").split("__"),e=d[0],f=d[1],h=a(this);b=h.hasClass("add_link")?"add":"remove",g(h,b,e,f),h.hasClass(".in-widget")&&c(!0)}),a(document).ajaxSuccess(function(a,b,c){"favorite_sites-ajax/ajax"==c.url?f(h):d()}),a(document).on("ee:new_links_to_process",function(){d()}),a("a").not(".menu-link",".ctools-use-modal",".skip-link",".favorites-ignore",".paginate_button","[href^=mailto]","[href^=javascript]").focus(function(){a("a").not(".menu-link",".ctools-use-modal",".skip-link",".favorites-ignore",".paginate_button","[href^=mailto]","[href^=javascript]").keydown(function(b){try{if(16===b.which){if(9===b.which)return b.stopImmediatePropagation(),!1;var c=a(this).attr("data-hasqtip"),d=a(this).find("img").attr("data-hasqtip");return c>0?(b.stopImmediatePropagation(),i=a(this),e(i,!0)):d>0&&(b.stopImmediatePropagation(),i=a(this).find("img"),e(i,!0)),!1}if(68===b.which&&b.ctrlKey){b.stopImmediatePropagation();var c=a(this).attr("data-hasqtip");i=c>0?a(this):a(this).find("img"),e(i,!0);var f=j+" .favorite_hover";return a(f).trigger("click"),e(i,!0),a(this).unbind("click"),!1}}catch(a){}})})})}(jQuery);
//# sourceMappingURL=favorite_links.js.map