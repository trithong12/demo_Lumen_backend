<?php

class OrganizationRESTfulApiCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        /**GET / 取得所有單位 */
        $I->sendGET('/organizations');
        $I->seeResponseCodeIs(200); // 200
        $I->seeResponseIsJson();
        $I->seeResponseMatchesJsonType([
            'org_id' => 'integer',
            'org_name' => 'string',
            'org_addr' => 'string',
            'created_at' => 'string:date',
            'updated_at' => 'string:date',
        ]);

        /**POST / 新增單位 */
        $I->sendPOST('/organizations', [
            'org_name' => '市立美術館',
            'org_addr' => '捷運圓山站'
        ]);
        $I->seeResponseCodeIs(201);
        $I->seeResponseIsJson();
        $I->seeResponseContains('org_id');
        $orgId = $I->grabDataFromResponseByJsonPath('$..org_id')[0]; // 獲得剛剛新增的單位

        /**GET /{id} 獲得剛剛新增的單位 */
        $I->sendGET('/organizations/' . $orgId);
        $I->seeResponseCodeIs(200); // 200
        $I->seeResponseIsJson();
        $I->seeResponseMatchesJsonType([
            'org_id' => 'integer',
            'org_name' => 'string',
            'org_addr' => 'string',
            'created_at' => 'string:date',
            'updated_at' => 'string:date',
        ]);
        $orgId = $I->grabDataFromResponseByJsonPath('$..org_id')[0]; // 獲得剛剛新增的單位

        /**PUT /{id} 修改剛剛新增的單位 */
        $I->sendPUT('/organizations/' . $orgId, array(
            'org_name' => '榴蓮樂園',
            'org_addr' => '東南亞'
        ));
        $I->seeResponseCodeIs(200); // 200
        $I->seeResponseIsJson();
        $I->seeResponseContains('org_id');
        $orgId = $I->grabDataFromResponseByJsonPath('$..org_id')[0]; // 獲得剛剛新增的單位

        /**DELETE /{id} 刪除剛剛新增的單位 */
        $I->sendDELETE('/organizations/' . $orgId);
        $I->seeResponseCodeIs(200); // 200
    }
}
