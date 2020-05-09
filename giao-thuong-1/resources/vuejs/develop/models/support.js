/**
 * Support class definition
 */

import Model from '../libs/model';
import Collection from '../libs/collection';
import Comment from './comment';
import Attachment from './attachment';

/**
 * Support constructor
 */
class Support extends Model
{
    constructor(data)
    {
        super();
        this.title = null;
        this.statusName = null;
        this.statusColor = null;
        this.description = null;
        this.lastModifiedTime = null;
        this.curatorName = null;
        this.curatorPhone = null;
        this.totalOfComments = 0;
        this.comments = new Collection(Comment);
        this.attach = new Attachment();
        this.typeUid = null;
        this.feedbackType = null;
        this.isClosed = 0;
        this.bind(data);
    }

    typeOfNumber()
    {
        return ['totalOfComments'];
    }
}

export {Support as default}