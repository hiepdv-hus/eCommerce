/**
 * Media class definition
 */

import Model from '../libs/model';
import Collection from '../libs/collection';
import Thumbnail from './mediaThumbnail';

/**
 * Media constructor
 */
class Media extends Model
{
    constructor(data)
    {
        super();
        this.mime_type = null;
        this.name = null;
        this.size = null;
        this.url = null;
        this.user_created_id = null;
        this.user_update_id = null;
        this.is_deleted = null;

        this.bind(data);
    }

    /*getThumbnail(dimension = 300)
    {
        dimension = Number(dimension);
        let thumbnail = this.mediaThumbnails.find(i => {
            return i.dimension === dimension;
        });
        return thumbnail ? thumbnail.url : this.url;
    }

    setDefaultUrl(){
        this.mediaThumbnails = new Collection(Thumbnail);
        this.url = '/cms/images/no-image.png';
        return this;
    }*/

    typeOfNumber()
    {
        return ['id'];
    }

    apiGroup(){
        return 'media';
    }
}

export {Media as default}
