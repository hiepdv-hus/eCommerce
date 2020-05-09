/**
 * News class definition
 */

import Model from '../libs/model';
import Collection from '../libs/collection';
import Api from '../libs/api';

/**
 * Customerconstructor
 */
class News extends Model
{
    constructor(data)
    {
        super();
        this.title = null;
        this.slug = null;
        this.description = null;
        this.detail = null;
        this.category_id = null;
        this.media_id = null;
        this.user_create_id = null;
        this.user_update_id = null;
        this.is_deleted = null;
        this.category_name = null;

        this.bind(data);
    }

    typeOfNumber()
    {
        return ['id'];
    }

    apiGroup(){
        return 'news';
    }
}

export {News as default}
