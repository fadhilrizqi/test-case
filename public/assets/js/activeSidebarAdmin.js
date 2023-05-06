var currentLocation = location.pathname;

var buttonDashboard = document.getElementById('dashboard');
var buttonDashboardMo = document.getElementById('dashboard-mo');

var buttonCustomer = document.getElementById('customer');
var buttonCustomerMo = document.getElementById('customer-mo');


if ('/dashboard-admin' == currentLocation) 
{
    buttonDashboard.className = 'flex items-center gap-3 p-3 text-sm text-white bg-[#A72121] rounded-lg';
    buttonDashboardMo.className = 'flex items-center gap-3 p-3 text-sm text-white bg-[#A72121] rounded-lg';
} 
else if ('' == currentLocation ) {
    buttonCustomer.className = 'flex items-center gap-3 p-3 text-sm text-white bg-[#A72121] rounded-lg';
    buttonCustomerMo.className = 'flex items-center gap-3 p-3 text-sm text-white bg-[#A72121] rounded-lg';
}
else {

}