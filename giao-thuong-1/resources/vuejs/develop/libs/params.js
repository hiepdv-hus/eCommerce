/**
 * Params class definition
 */

import stdClass from './stdClass';
const uuidv1 = require('uuid/v1');

/**
 * Params constructor
 */
class Params extends stdClass
{
    constructor(data)
    {
        super();
        this.skip = 0;
        this.take = 10;
        this.querySearch = null;
        this.time = null;
        this.timeFrom = null;
        this.timeTo = null;
        this.sort = null;
        this.dir = null;
        this.bind(data);
    }

    typeOfNumber()
    {
        return [];
    }

    bind(data, clone = false)
    {
        if(data != null)
        {
            try
            {
                for (let i in data)
                {
                    const p = i.replace(/^\w/, c => c.toLowerCase());
                    let _data = !clone ? data[i] : _.cloneDeep(data[i]);
                    if (this[p] instanceof stdClass)
                    {
                        this[p].bind(_data, clone);
                    }
                    else if (this[p] instanceof Array)
                    {
                        if (this[p].name === 'Collection') {
                            this[p].addRange(_data);
                        }
                        else {
                            this[p] = _data || [];
                        }
                    }
                    else
                    {
                        if (~this.typeOfNumber().indexOf(p))
                        {
                            _data = data[i] !== null ? Number(_data) : 0;
                        }
                        this[p] = _data;
                    }
                }
            }
            catch (e)
            {
                console.log(e)
            }
        }

        this.id = this.id || uuidv1();
        return this;
    }

    reduces() {
        let ret = super.reduces();
        delete ret['id'];
        return ret;
    }
}

export {Params as default}
