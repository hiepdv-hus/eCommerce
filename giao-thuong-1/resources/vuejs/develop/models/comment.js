/**
 * Comment class definition
 */

import Model from '../libs/model';

/**
 * Comment constructor
 */
class Comment extends Model
{
    constructor(data)
    {
        super();
        this.uid = null;
        this.supportUid = null;
        this.comment = null;
        this.creatorName = null;
        this.curatorName = null;
        this.createdTime = null;
        this.bind(data);
    }

    typeOfNumber()
    {
        return ['uid', 'supportUid'];
    }
}

export {Comment as default}