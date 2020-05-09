/**
 * Customer class definition
 */

import Model from '../libs/model';
import Collection from '../libs/collection';
import Api from '../libs/api';

/**
 * Customerconstructor
 */
class Customer extends Model
{
    constructor(data)
    {
        super();
        this.first_name = null;
        this.last_name = null;
        this.full_name = null;
        this.phone_number = null;
        this.gender = null;
        this.email = null;
        this.company = null;
        this.address = null;
        this.tax_code = null;
        this.avatar = null;
        this.date_of_birth = null;
        this.facebook_id = null;
        this.google_id = null;
        this.zalo_id = null;
        this.is_active = null;
        this.is_delete = null;
        this.rank_id = null;
        this.user_create_id = null;
        this.user_update_id = null;
        this.is_active = null;
        this.company_address = null;
        this.created_time = null;

        this.bind(data);
    }

    typeOfNumber()
    {
        return ['id'];
    }

    apiGroup(){
        return 'customer';
    }
}

export {Customer as default}
