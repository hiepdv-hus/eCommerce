/**
 * Attachment class definition
 */
import Model from '../libs/model';

/**
 * Attachment constructor
 */
class Attachment extends Model
{
    constructor(data)
    {
        super();
        this.name = null;
        this.size = null;
        this.data = null;
        this.bind(data);
    }
}

export {Attachment as default}