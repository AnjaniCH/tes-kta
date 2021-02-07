var global_url = "http://efield.id/app/core/api/";

//region
var api_region_list = global_url+"api_region.php?action=get_list";
var api_region_list_parent = global_url+"api_region.php?action=get_list_parent";
var api_address_list_user = global_url+"api_region.php?action=get_address_by_user";


// warranty duration
var api_inventory_list = global_url+"api_inventory.php?action=get_list";

//product
var api_product_autocomplete = global_url+"api_product.php?action=autocomplete";

//product category
var api_product_category_autocomplete = global_url+"api_product.php?action=autocomplete-product-category";

//product color
var api_product_color_autocomplete = global_url+"api_product.php?action=autocomplete-color";

// branch
var api_product_branch_autocomplete = global_url+"api_region.php?action=autocomplete-branch";

// customer
var api_customer_autocomplete = global_url+"api_customer.php?action=autocomplete";
var api_customer_detail  = global_url+"api_customer.php?action=get_detail";
var api_customer_check_email  = global_url+"api_customer.php?action=check_email";
var api_customer_check_phone  = global_url+"api_customer.php?action=check_phone";

//component
var api_component_autocomplete = global_url+"api_component.php?action=autocomplete";
var api_component_getlist = global_url+"api_component.php?action=get_list";

// register warranty
var api_product_list = global_url+"api_inventory.php?action=get_product";
var api_product_detail  = global_url+"api_product.php?action=get_detail";
var api_product_color_list  = global_url+"api_product.php?action=get_color";
var api_check_serial = global_url+"api_product.php?action=check_barcode";

var api_product_list_user = global_url+"api_product.php?action=get_list_by_user";


// Area
var api_region_area = global_url+"api_region.php?action=get_branch";
var api_get_branch = global_url+"api_region.php?action=get_list_branch";


// service ticket
var api_schedule_technician = global_url+"api_service.php?action=get_technician";
var api_schedule_list = global_url+"api_service.php?action=get_technician_day";

// serviceFee
var api_get_serviceBranch  = global_url+"api_masterService.php?action=get_serviceByBrand";

// admin
var api_admin_check_email  = global_url+"api_admin.php?action=check_email";

// technician
var api_technician_check_email  = global_url+"api_technician.php?action=check_email";
var api_technician_check_phone  = global_url+"api_technician.php?action=check_phone";
