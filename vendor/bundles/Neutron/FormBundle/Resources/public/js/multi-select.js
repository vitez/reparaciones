/**
 * Initialization of jquery multiselect
 * 
 * @author Nikolay Georgiev
 * @version 1.0
 */
jQuery(document).ready(function(){
    jQuery('.neutron-multi-select').each(function(key, value){ 
        var options = jQuery(this).data('options'); 
        var prototype = jQuery(this).data('prototype');
        var container = jQuery('#neutron-multi-select-form-' + options.id);

        jQuery(this).bind('neutron_datagrid.gridComplete', function(data){
            jQuery.each(container.find(':hidden'), function(k,v){
                jQuery('#' + data.gridId).jqGrid('setSelection', jQuery(v).val());
            });
        });
        
        jQuery(this).bind('neutron_datagrid.beforeRowSelect', function(data){
       
            var html = prototype.replace(/__name__/g, data.id);
            var elm = jQuery(html).val(data.id);
            
            container.find(':hidden[value="'+ data.id +'"]').remove();

            if(data.isChecked){
               container.append(elm);
            }
        });
        
        jQuery(this).bind('neutron_datagrid.onSelectAll', function(data){
            jQuery.each(data.ids, function(k,v){
                container.find(':hidden[value="'+ v +'"]').remove();
                
                if(data.status === true){
                    var html = prototype.replace(/__name__/g, v);
                    var elm = jQuery(html).val(v);
                    container.append(elm);
                }
            });
        
        });
    
    });
});



