<h3>查詢發票開獎號碼</h3>

<span>
    第
    <select ng-options="term for term in terms" ng-model="selectedTerm" ng-change="queryList()">
<!--        <option ng-repeat="term in terms">{{ term }}</option>-->
    </select>
    期
</span>

<div>
    <div>
        <ul style="list-style-type: none;">
            <li><span class="col-md-2">獎別</span><span class="col-md-10">中獎號碼</span></li>
            <li><span class="col-md-2">特別獎</span><span class="col-md-10">{{ superPrizeNoList }}</span></li>
            <li><span class="col-md-12">同期統一發票收執聯8位數號碼與上列號碼相同者獎金1,000 萬元</li>
            <li><span class="col-md-2">特獎</span><span class="col-md-10">{{ spcPrizeNoList }}</span></li>
            <li><span class="col-md-12">同期統一發票收執聯8位數號碼與上列號碼相同者獎金200 萬元</li>
            <li><span class="col-md-2">頭獎</span><span class="col-md-10">{{ firstPrizeNoList }}</span></li>
            <li><span class="col-md-12">二獎	同期統一發票收執聯末7 位數號碼與頭獎中獎號碼末7 位相同者各得獎金4 萬元</li>
            <li><span class="col-md-12">三獎	同期統一發票收執聯末6 位數號碼與頭獎中獎號碼末6 位相同者各得獎金1 萬元</li>
            <li><span class="col-md-12">四獎	同期統一發票收執聯末5 位數號碼與頭獎中獎號碼末5 位相同者各得獎金4 千元</li>
            <li><span class="col-md-12">五獎	同期統一發票收執聯末4 位數號碼與頭獎中獎號碼末4 位相同者各得獎金1 千元</li>
            <li><span class="col-md-12">六獎	同期統一發票收執聯末3 位數號碼與頭獎中獎號碼末3 位相同者各得獎金2 百元</li>
            <li><span class="col-md-2">增開六獎</span><span class="col-md-10">{{ sixthPrizeNoList }}</span></li>
            <li><span class="col-md-12">同期統一發票收執聯末3 位數號碼與上列號碼相同者各得獎金2 百元</li>
        </ul>
    </div>

    <div ng-repeat="item in items">


    </div>




</div>

