/**
 * Category class definition
 */

import Model from '../libs/model';
import Article from './article';
import Collection from '../libs/collection';
import Api from "../libs/api";

/**
 * Category constructor
 */
class Category extends Model {
    constructor(data) {
        super();
        this.id = null;
        this.name = null;
        this.slug = null;
        this.type = null;
        this.description = null;
        this.parent_id = null;
        this.meta_data = null;
        this.is_active = null;
        this.articles = new Collection(Article);
        this.total = null;
        this.user_create_id = null;
        this.user_update_id = null;
        this.is_deleted = null;
        this.bind(data);
    }

    typeOfNumber()
    {
        return ['id'];
    }

    apiGroup() {
        return 'category';
    }

}
export {Category as default}
