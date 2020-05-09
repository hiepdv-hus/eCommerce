/**
 * MediaThumbnail class definition
 */

import Model from '../libs/model';

/**
 * MediaThumbnail constructor
 */
class Thumbnail extends Model
{
    constructor(data)
    {
        super();
        this.dimension = 0;
        this.width = 0;
        this.height = 0;
        this.url = null;
        this.bind(data);
    }

    typeOfNumber(){
        return ['dimension', 'width', 'height'];
    }
}

export {Thumbnail as default}