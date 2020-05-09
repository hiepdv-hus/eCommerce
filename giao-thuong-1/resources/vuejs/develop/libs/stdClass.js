/**
 * stdClass
 * @param data
 */

import Helper from "./helper";
const uuidv1 = require('uuid/v1');

class stdClass {
    /**
     * stdClass constructor
     * @param data
     */
    constructor(data = null)
    {
        this.id = null;
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
                    if (this.hasOwnProperty(p))
                    {
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

                // let typeOfNumber = this.typeOfNumber();
                // if (typeOfNumber.length > 0) {
                //     for (let i in typeOfNumber) {
                //         console.log(typeOfNumber[i]);
                //         if (this.hasOwnProperty(typeOfNumber[i])) {
                //             this[typeOfNumber[i]] = this[typeOfNumber[i]] !== null ? Number(this[typeOfNumber[i]]) : 0;
                //         }
                //     }
                // }
            }
            catch (e)
            {
                console.log(e)
            }
        }

        this.id = this.id || uuidv1();
        return this;
    }

    typeOfNumber()
    {
        return [];
    }

    valueStringOrDefault(number)
    {
        if(number === null)
        {
            return '';
        }
        return Helper.priceToString(number);
    }

    set(key, value)
    {
        if(this.hasOwnProperty(key))
        {
            this[key] = value;
        }
    }

    getId()
    {
        return (this.id || 0);
    }

    newInstance(data = null)
    {
        let instance = new this.constructor();
        !data || instance.bind(data);
        return instance;
    }

    clone()
    {
        let instance = this.newInstance();
        instance.bind(this, true);
        return instance;
    }

    cloneWith(data = null)
    {
        let clone = this.clone();
        clone.bind(data);
        return clone;
    }

    cloneWithNewId() {
        return this.cloneWith({id: uuidv1()});
    }

    reset()
    {
        return this.bind(this.newInstance());
    }

    reduces() {
        let ret = {};
        for(let i in this) {
            let propValue = this[i];
            if (propValue != null) {
                ret[i] = propValue;
            }
        }
        return ret;
    }

    watch(prop, handler){
        let
            oldval = this[prop]
            , newval = oldval
            , getter = function () {
                return newval;
            }
            , setter = function (val) {
                oldval = newval;
                return newval = handler.call(this, prop, oldval, val);
            }
        ;

        if (delete this[prop]) { // can't watch constants
            Object.defineProperty(this, prop, {
                get: getter
                , set: setter
                , enumerable: true
                , configurable: true
            });
        }
    }

    unWatch(prop) {
        let val = this[prop];
        delete this[prop]; // remove accessors
        this[prop] = val;
    }

    reduces(){
        let ret = {};
        for(let i in this){
            let propValue = this[i];
            if (propValue != null){
                ret[i] = propValue;
            }
        }
        return ret;
    }
}

export {stdClass as default}
