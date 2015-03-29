<!DOCTYPE html>
<html ng-app="einvoiceApp">
    <head>
        <title>Laravel</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <script src="//code.jquery.com/jquery-2.1.3.min.js"/>
        <!-- Latest compiled and minified JavaScript -->
        <script src="/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
        <script src="/js/app.js"></script>
        <script src="/js/controllers.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular-route.js"></script>
        <script src="//code.angularjs.org/1.3.15/angular-cookies.js"></script>
        <link href='//fonts.googleapis.com/css?family=Lato:100' rel='stylesheet' type='text/css'>

        <style>
            body {
                margin: 0;
                padding: 0;
                width: 100%;
                height: 100%;
                color: #050dc5;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                /*display: table-cell;*/
                vertical-align: middle;
            }

            .content {
                /*text-align: center;*/
                /*display: inline-block;*/
            }

            .title {
                font-size: 96px;
                margin-bottom: 40px;
            }

            .quote {
                font-size: 24px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <header >
                <h1 class="title">電子發票PHP SDK 示範站</h1>
            </header>
            <div>
                <ul style="list-style-type: none;">
                    <li>Ｑ：為什麼那個有密碼？</li>
                    <li>A：拿悠遊卡到iBon設定就有了。 連結-&gt; <a target="_blank" href="https://www.einvoice.nat.gov.tw/home/Article!showArticleDetail?articleId=F1354768&CSRT=15916142259000470854">點我</a></li>
                    <li></li>
                </ul>
            </div>
            <div class="content">
                <div class="col-md-2">
                    <ul>
                        <li><a href="#/queryCarrierInvoice">查詢載具發票</a></li>
                        <li><a href="#/queryWinningList">查詢發票號碼</a></li>
                        
                    </ul>
                </div>
                <div class="col-md-10">
                    <div ng-view></div>
                    <?php /*

 */?>
                </div>
            </div>
        </div>
    </body>
</html>
