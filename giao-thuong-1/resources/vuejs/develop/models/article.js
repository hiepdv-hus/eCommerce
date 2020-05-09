/**
 * Article class definition
 */

import Model from '../libs/model';
import Media from './media';
import Collection from '../libs/collection';
import Category from './category';

/**
 * Article constructor
 */
class Article extends Model
{
    constructor(data)
    {
        super();
        this.title = null;
        this.slug = null;
        this.description = null;
        this.detail = null;
        this.isPublished = 0;
        this.mediaId = 0;
        this.featuredImage = new Media();
        this.link = null;
        this.is_featured = null;
        this.featured_image = null;
        this.meta_og = null;
        this.category_id = [];
        this.created_time = null;
        this.bind(data);
    }

    typeOfNumber()
    {
        return ['mediaId', 'isPublished'];
    }

    apiGroup() {
        return 'article';
    }
}

export {Article as default}
