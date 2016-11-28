<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "main";
$route['404_override'] = 'erorr/erorr_404';

$route['/'] = "main/index";
$route['index/page'] = "main/index";


$route['load-total-ticket-pending'] = "main/TotalTicketPending";
$route['load-total-ticket-progress'] = "main/TotalTicketProgress";
$route['load-total-ticket-done'] = "main/TotalTicketDone";

$route['load-data-table-ticket'] = "main/load_table_pending";
$route['load-data-table-ticket/(:any)'] = "main/load_table_pending/$1";
$route['load-data-table-ticket-onProgress'] = "main/load_table_onProgress";
$route['load-data-table-ticket-resolved'] = "main/load_table_resolved";

$route['ticket/add'] = "ticket/formAddTicketProblem";
$route['ticket/create'] = "ticket/createTicketProblem";
$route['ticket/list'] = "ticket/ListTicketResolved";

$route['login'] = "user_auth/index";
$route['auth'] = "user_auth/check_auth";
$route['auth/logout'] = "user_auth/auth_logout";

$route['dashboard'] = "user_main/index";
$route['user/total-notif'] = "notification/getTotalNotification";
$route['user/list-notif'] = "notification/getListNotification";
$route['user/load-total-ticket-pending'] = "user_main/TotalTicketPending";
$route['user/load-total-ticket-progress'] = "user_main/TotalTicketProgress";
$route['user/load-total-ticket-done'] = "user_main/TotalTicketDone";
$route['user/load-data-table-ticket-progress'] = "user_main/LoadDataTicketProgress";

$route['user/ticket'] = "user_ticket/index";
$route['user/load-data-table-ticket-for-accept'] = "user_ticket/LoadDataTicketForAccept";
$route['user/ticket/accept/(:num)'] = "user_ticket/UserAcceptTicket/$1";
$route['user/ticket/resolved/(:num)'] = "user_ticket/UserTicketResolved/$1";
$route['user/ticket/load-ticket-resolved'] = "user_ticket/LoadTicketResolved/$1";
$route['user/ticket/list'] = "user_ticket/ListTicketResolved";
/**
*
* Route For User Report
*
*/
$route['user/report'] = "user_report/index";
$route['user/report/branch-office'] = "user_report/byBranchOffice";
$route['user/report/month'] = "user_report/byMonth";

$route['cms/logout'] = "user_auth/admin_logout";
$route['cms'] = "cms/index";
$route['cms/setting'] = "cms/setting";

$route['cms/account'] = "cms/AccountManagement/index";
$route['cms/account/create'] = "cms/AccountManagement/create";
$route['cms/account/update/(:num)'] = "cms/AccountManagement/update/$1";
$route['cms/account/delete/(:num)'] = "cms/AccountManagement/delete/$1";

/* End of file routes.php */
/* Location: ./application/config/routes.php */