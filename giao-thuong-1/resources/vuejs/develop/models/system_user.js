/**
 * SystemUser class definition
 */

import Model from '../libs/model';
import Collection from '../libs/collection';
import Api from '../libs/api';

/**
 * SystemUser constructor
 */
class SystemUser extends Model
{
    constructor(data)
    {
        super();
        this.username = null;
        this.password = null;
        this.passwordRetype = null;
        this.first_name = null;
        this.last_name = null;
        this.email = null;
        this.phone_number = null;
        this.address = null;
        this.gender = null;
        this.avatar = null;
        this.date_of_birth = null;
        this.facebook_id = null;
        this.google_id = null;
        this.zalo_id = null;
        this.is_active = null;

        this.bind(data);
    }

    typeOfNumber()
    {
        return ['id'];
    }

    apiGroup(){
        return 'system-user';
    }
}

export {SystemUser as default}
