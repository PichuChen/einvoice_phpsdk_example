<h3>查詢發票細節</h3>

<label for="invNum">發票號碼</label>
<input id="invNum" ng-model="invNum"/><br/>


<label for="invTerm">發票期間</label>
<select ng-options="term for term in terms" ng-model="selectedTerm" ng-change="queryList()">
    <!--        <option ng-repeat="term in terms">{{ term }}</option>-->
</select><br/>

<label for="invDate">發票時間</label>
<input id="invDate" ng-model="invDate"/><br/>

<label for="randomNumber">隨機碼</label>
<input id="randomNumber" ng-model="randomNumber"/><br/>

<button ng-click="query()" type="button">查詢</button>
<hr/>
<table class="table">
    <tbody>
    <tr>
        <td>{{ invNum }}</td>
        <td>{{ invDate }}</td>
        <td>{{ sellerName }}</td>
        <td>{{ status }}</td>
        <td>{{ period }}</td>
    </tr>
    </tbody>
    <thead>
    <tr>
        <th>發票號碼</th>
        <th>發票日期</th>
        <th>賣方</th>
        <th>狀態</th>
        <th>發票期間</th>
    </tr>
    </thead>
</table>

<hr/>
<h4>細節</h4>
<table class="table">
    <tbody>
    <tr ng-repeat="item in details">
        <td>{{ item.rowNum }}</td>
        <td>{{ item.description }}</td>
        <td>{{ item.unitPrice }}</td>
        <td>{{ item.quantity }}</td>
        <td>{{ item.amount }}</td>
    </tr>
    </tbody>
    <thead>
    <tr>
        <th></th>
        <th>品名</th>
        <th>單價</th>
        <th>數量</th>
        <th>總價</th>
    </tr>
    </thead>
</table>


</div>

