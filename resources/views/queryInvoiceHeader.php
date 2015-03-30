<h3>查詢發票標頭</h3>

<label for="invNum">發票號碼</label>
<input id="invNum" ng-model="invNum"/><br/>

<label for="invDate">發票時間</label>
<input id="invDate" ng-model="invDate"/><br/>

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


</div>

