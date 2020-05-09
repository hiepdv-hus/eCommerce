<?php

namespace App\Libraries\Facades;


use App\Http\Data\Input\OrderInput;
use App\Http\Data\Input\UserInput;
use App\Libraries\Request\Data\Input;
use App\Libraries\Request\Data\ResponseJson;

/**
 * @method static ResponseJson userRegister(UserInput $input)
 * @method static ResponseJson userLogin(UserInput|array $input)
 * @method static ResponseJson orderGetList(Input $input)
 * @method static ResponseJson orderGetListStatus(Input $input)
 * @method static ResponseJson orderCount()
 * @method static ResponseJson orderIncome()
 * @method static ResponseJson orderCreate(OrderInput $input)
 * @method static ResponseJson orderGetDetail(int $uid)
 * @method static ResponseJson orderCancel(int $id)
 * @method static ResponseJson customerPointRemain()
 * @method static ResponseJson customerPointUsed()
 * @method static ResponseJson supportGetList(Input $input)
 * @method static ResponseJson supportGetListStatus(Input $input)
 * @method static ResponseJson supportGetDetail(int $uid)
 * @method static ResponseJson supportSaveComment(Input $input)
 * @method static ResponseJson supportAdd(Input $input)
 * @method static ResponseJson supportGetListType(Input $input)
 * @method static ResponseJson supportGetListFeedbackType(Input $input)
 * @method static ResponseJson productSearch(Input $input)
 * @method static ResponseJson pointRemain()
 * @method static ResponseJson pointUsed()
 * @method static ResponseJson getSalesByCategory(array $input)
 * @method static ResponseJson getSalesByMonth(array $input = [])
 *
 * @see \App\Libraries\Request\ApiCenter
 */
class ApiCenter extends Api
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'libs.api.center';
    }
}
