/**
 * Created by pichu on 西元15/3/25.
 */
'use strict';
//
//einvoiceApp.controller('PhoneListCtrl', function ($scope, $http) {
//
//});

var einvoiceControllers = angular.module('einvoiceControllers', []);

einvoiceControllers.controller('einvoiceCtrl',['$scope','$http', '$cookies', function ($scope, $http, $cookies) {
    if(typeof($cookies.cardNo != 'undefined')){
        $scope.cardNo = $cookies.cardNo;
    }
    $scope.endDate = new Date()  ;
    var d = new Date();
    d.setDate($scope.endDate.getDate() -7);
    $scope.startDate = d;

    $scope.mainTableSize = 12;
    $scope.subTableSize = 6;
    $scope.showMainTable = false;
    $scope.showSubTable = false;

    $scope.queryCardInfo = function() {

        var param = "cardNo=" + $scope.cardNo +
            "&cardEncrypt=" + $scope.cardEncrypt +
            "&startDate=" + formateDate($scope.startDate) +
            "&endDate=" + formateDate($scope.endDate);

        $http.get('/test/?' + param).success(function (data) {
            console.log(data);
            $scope.invoices = data['data'];
            $scope.mainTableSize = 12;
            $scope.showMainTable = true;
            $scope.showSubTable = false;

        });
    }

    $scope.showDetail = function(invNum,date){
        //console.log(data);

        var invDate = new Date(date);
        invDate = invDate.getFullYear() + '/' + (invDate.getMonth()+1) + '/' + invDate.getDate();

        var param = "cardNo=" + $scope.cardNo +
            "&cardEncrypt=" + $scope.cardEncrypt +
            "&invNum=" + invNum +
            "&invDate=" + invDate;

        $http.get('/carrierInvoiceDetail?'+param).success(function(data){
            $scope.mainTableSize = 4;
            $scope.subTableSize = 8;
            $scope.showMainTable = true;
            $scope.showSubTable = true;

            $scope.invoiceDetail= data['data'];

        });
    }

    $scope.rememberMe = function (){
        $cookies.cardNo = $scope.cardNo;
    }

    function formateDate(input){
        var year = input.getFullYear();
        var month = input.getMonth()+1;
        var day = input.getDate();
        if(month < 10) month = '0' + month;
        if(day < 10) day = '0' + day;


        return year + '/' + month + '/' + day;
    }

}]);

var getTermList = function(thisPeriod ){
    if(typeof(thisPeriod) === 'undefined'){
        thisPeriod = false;
    }

    var terms = ["10008","10010","10012"];
    var monthList = ["02","04","06","08","10","12"];
    var thisYear = ( new Date()).getYear() - 11;
    var thisMonth = ( new Date()).getMonth()+1;
    if(thisPeriod === true){
        thisMonth += 2;
        if(thisMonth > 12){
            thisMonth -= 12;
            thisYear += 1;
        }
    }
    for(var year = 101;year < thisYear; ++year){
        for(var monthn in monthList){
            terms.push(""+year+monthList[monthn]);
        }
    }

    for(var monthn in monthList){
        if(monthList[monthn] > thisMonth)break;
        terms.push(""+thisYear+monthList[monthn]);
    }
    return terms;

}

einvoiceControllers.controller('queryWinningListCtrl',['$scope','$http', function ($scope, $http) {

    var terms = getTermList();
    $scope.terms = terms;
    $scope.selectedTerm =  terms[terms.length-1];

    $scope.queryList = function(){
        $http.get('/queryWinningList?invTerm=' + $scope.selectedTerm).success(function(data){
            data = data['data'];
            $scope.superPrizeNoList = data['superPrizeNoList'];
            $scope.spcPrizeNoList = data['spcPrizeNoList'];
            $scope.firstPrizeNoList = data['firstPrizeNoList'];
            $scope.sixthPrizeNoList = data['sixthPrizeNoList'];
        });
    };

    $scope.queryList();

}]);

einvoiceControllers.controller('queryInvoiceHeaderCtrl',['$scope','$http', function ($scope, $http) {
    $scope.query = function(){
        $http.get('/queryInvoiceHeader?invNum=' + $scope.invNum + '&invDate=' + $scope.invDate).success(function(data){
            console.log(data);
            data = data['data'];
            $scope.invNum = data['number'];
            $scope.invDate = data['date'];
            $scope.sellerName = data['sellerName'];
            $scope.status = data['status'];
            $scope.period = data['period'];
        });
    }

}]);


einvoiceControllers.controller('queryInvoiceDetailCtrl',['$scope','$http', function ($scope, $http) {
    var terms = getTermList(true);
    $scope.terms = terms;
    $scope.query = function(){

        var param = 'invNum=' + $scope.invNum +
            '&invDate=' + $scope.invDate +
            '&invTerm=' + $scope.selectedTerm +
            "&randomNumber=" + $scope.randomNumber;

        $http.get('/queryInvoiceDetail?'+param).success(function(data){
            console.log(data);
            data = data['data'];
            $scope.invNum = data['number'];
            $scope.invDate = data['date'];
            $scope.sellerName = data['sellerName'];
            $scope.status = data['status'];
            $scope.period = data['period'];

            $scope.details = data['details'];
        });
    }

}]);