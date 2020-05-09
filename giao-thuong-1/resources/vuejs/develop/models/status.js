/**
 * Status class definition
 */

import Model from '../libs/model';

/**
 * Status constructor
 */
class Status extends Model
{
    constructor(data)
    {
        super();
        this.name = null;
        this.color = null;
        this.totalItems = 0;
        this.bind(data);
    }

    typeOfNumber()
    {
        return [];
    }
}

export {Status as default}