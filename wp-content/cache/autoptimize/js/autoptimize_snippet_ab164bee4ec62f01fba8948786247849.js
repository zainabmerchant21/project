(function($){var containerPrefix=et_modules_wrapper.builderCssContainerPrefix;var layoutPrefix=et_modules_wrapper.builderCssLayoutPrefix;$divi_modules_outside_main_content=$('.et_pb_module:not('+layoutPrefix+' .et_pb_module, .et_pb_section .et_pb_module), .et_pb_row:not('+layoutPrefix+' .et_pb_row, .et_pb_section .et_pb_row), .et_pb_section:not('+layoutPrefix+' .et_pb_section)');if($divi_modules_outside_main_content.length>0){$divi_modules_outside_main_content.each(function(){var $module=$(this);if(0===$module.closest('#et-boc').length){$module.wrap('<div id="et-boc"></div>');}
if(0===$module.closest('.et-l').length){$module.wrap('<div class="et-l"></div>');}})}})(jQuery);