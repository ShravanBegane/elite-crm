include_once 'modules/Vtiger/CRMEntity.php';
class Store extends Vtiger_CRMEntity {
        var $table_name = 'vtiger_store';
        var $table_index= 'storeid';

        var $customFieldTable = Array('vtiger_storecf', 'storeid');

        var $tab_name = Array('vtiger_crmentity', 'vtiger_store', 'vtiger_storecf');

        var $tab_name_index = Array(
                'vtiger_crmentity' => 'crmid',
                'vtiger_store' => 'storeid',
                'vtiger_storecf'=>'storeid');

        var $list_fields = Array (
                /* Format: Field Label => Array(tablename, columnname) */
                // tablename should not have prefix 'vtiger_'
                'Organization Name' => Array('store', 'organization_name'),
                'Assigned To' => Array('crmentity','smownerid')
        );
        var $list_fields_name = Array (
                /* Format: Field Label => fieldname */
                'Organization Name' => 'organization_name',
                'Assigned To' => 'assigned_user_id',
        );

        // Make the field link to detail view
        var $list_link_field = 'organization_name';

        // For Popup listview and UI type support
        var $search_fields = Array(
                /* Format: Field Label => Array(tablename, columnname) */
                // tablename should not have prefix 'vtiger_'
                'Organization Name' => Array('store', 'organization_name'),
                'Assigned To' => Array('vtiger_crmentity','assigned_user_id'),
        );
        var $search_fields_name = Array (
                /* Format: Field Label => fieldname */
                'Organization Name' => 'organization_name',
                'Assigned To' => 'assigned_user_id',
        );

        // For Popup window record selection
        var $popup_fields = Array ('organization_name');

        // For Alphabetical search
        var $def_basicsearch_col = 'organization_name';

        // Column value to use on detail view record text display
        var $def_detailview_recname = 'organization_name';

        // Used when enabling/disabling the mandatory fields for the module.
        // Refers to vtiger_field.fieldname values.
        var $mandatory_fields = Array('organization_name','assigned_user_id');

        var $default_order_by = 'organization_name';
        var $default_sort_order='ASC';
}