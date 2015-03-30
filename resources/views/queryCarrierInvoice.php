<div>
    <div>
        <ul style="list-style-type: none;">
            <li>Ｑ：為什麼那個有密碼？</li>
            <li>A：拿悠遊卡到iBon設定就有了。 連結-&gt; <a target="_blank" href="https://www.einvoice.nat.gov.tw/home/Article!showArticleDetail?articleId=F1354768&CSRT=15916142259000470854">點我</a></li>
            <li></li>
        </ul>
    </div>
    <form ng-submit="queryCardInfo()">
        請輸入悠遊卡號碼：<input type="text" ng-model="cardNo"/><button type="button" ng-click="rememberMe()">記得我</button><br>
        請輸入密碼：<input type="password" ng-model="cardEncrypt"><br>
        請輸入期間：<input type="date" ng-model="startDate"> ~ <input type="date" ng-model="endDate"></br>
        <button>送出</button>
    </form>
    <div class="col-md-{{ mainTableSize }}" style="margin-top: 50px" ng-show="showMainTable">
        <table class="table">
            <tbody>
            <tr ng-repeat="invoice in invoices">
                <td>{{ invoice.number }} </td>
                <td>{{ invoice.date }}</td>
                <td>{{ invoice.amount }}</td>
                <td><button ng-click="showDetail( invoice.number, invoice.date)">Details</button></td>
            </tr>
            </tbody>
            <thead>
            <tr>
                <th>發票號碼</th>
                <th>發票日期</th>
                <th>消費金額</th>
                <th>詳細希望</th>
            </tr>
            </thead>
        </table>
    </div>

    <div class="col-md-{{ subTableSize }}" ng-show="showSubTable">
        <div>
            {{ invoiceDetail.number }}  {{ invoiceDetail.period }} </br>
            {{ invoiceDetail.sellerName }}  {{ invoiceDetail.date }} </br>
        </div>
        <hr/>
        <ul style="list-style-type: none;">
            <li>
                <span class="col-md-2">編號</span>
                <span class="col-md-4">品項</span>
                <span class="col-md-2">數量</span>
                <span class="col-md-2">單價</span>
                <span class="col-md-2">總價</span>
            </li>
            <li ng-repeat="item in invoiceDetail.details">
                <span class="col-md-2">#{{ item.rowNum }}</span>
                <span class="col-md-4">{{ item.description }}</span>
                <span class="col-md-2">{{ item.quantity }}</span>
                <span class="col-md-2">{{ item.unitPrice }}</span>
                <span class="col-md-2">{{ item.amount }}</span>
            </li>

        </ul>

    </div>
</div>