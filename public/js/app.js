/**
 * Created by pichu on 西元15/3/29.
 */

var einvoiceApp = angular.module('einvoiceApp',[
    'ngRoute',
    'einvoiceControllers',
    'ngCookies'
  //  'einvoiceController'
]);


einvoiceApp.config(['$routeProvider',
    function($routeProvider) {
        $routeProvider.
            when('/queryCarrierInvoice', {
                templateUrl: 'queryCarrierInvoice.html',
                controller: 'einvoiceCtrl'
            }).
            when('/queryWinningList',{
                templateUrl: 'queryWinningList.html',
                controller: 'queryWinningListCtrl'
            }).
            when('/queryInvoiceHeader',{
                templateUrl: 'queryInvoiceHeader.html',
                controller: 'queryInvoiceHeaderCtrl'
            }).
            when('/queryInvoiceDetail',{
                templateUrl: 'queryInvoiceDetail.html',
                controller: 'queryInvoiceDetailCtrl'
            }).
            //when('/phones/:phoneId', {
            //    templateUrl: 'partials/phone-detail.html',
            //    controller: 'PhoneDetailCtrl'
            //}).
            otherwise({
                redirectTo: '/queryCarrierInvoice'
            });
    }]);
