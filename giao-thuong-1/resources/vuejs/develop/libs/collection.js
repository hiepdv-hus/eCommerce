/**
 * Collection class definition
 */

import stdClass from './stdClass';
import Model from './model';

class Collection extends Array
{
    /**
     * Collection constructor
     * @param itemType
     * @param items
     */
    constructor(itemType, ...items)
    {
        super();
        this.__proto__ = Array.prototype;

        /**
         * Item type
         */
        this.itemType = itemType;
        this.name = 'Collection';
        this.recordsTotal = 0;
        this.selected = null;
        this.matched = null;

        /**
         * Add item
         * @param item
         * @returns {*}
         */
        this.__proto__.add = function(item)
        {
            if (!this) return;
            if(!this.contains(item))
            {
                if(!(item instanceof this.itemType)){
                    item = new this.itemType(item);
                }
                this.push(item);
            }
            return this;
        };

        /**
         * Add list of items
         * @param items
         * @returns {*}
         */
        this.__proto__.addRange = function(items)
        {
            if (!this) return;
            if (!(items instanceof Array)) return this;
            if(this != null){
                items.forEach((item) => {
                    this.add(item);
                });
            }
            return this;
        };

        /**
         * Add item to beginning
         * @param item
         * @returns {*}
         */
        this.__proto__.addTop = function(item)
        {
            if (!this) return;
            if(!this.contains(item))
            {
                if(!(item instanceof this.itemType)){
                    item = new this.itemType(item);
                }
                this.unshift(item);
            }
            return this;
        };

        /**
         * Add list of items to beginning
         * @param items
         * @returns {*}
         */
        this.__proto__.addTopRange = function(items)
        {
            if (!this) return;
            if (!(items instanceof Array)) return this;
            if(this != null){
                items.forEach((item) => {
                    this.addTop(item);
                });
            }
            return this;
        };

        /**
         * Add list of items
         * @returns {*}
         * @param recordsTotal
         */
        this.__proto__.setRecordsTotal = function(recordsTotal)
        {
            if (!this) return;
            this.recordsTotal = Number(recordsTotal);
            return this;
        };

        /**
         * Find item by id
         * @param id
         * @returns {*}
         */
        this.__proto__.findById = function(id)
        {
            if (!this) return;
            return this.filter(i => i.id === id)[0];
        };

        /**
         * Find item by uid
         * @param uid
         * @returns {*}
         */
        this.__proto__.findByUid = function(uid)
        {
            if (!this) return;
            return this.filter(i => i.uid === uid)[0];
        };

        this.__proto__.contains = function (item)
        {
            if (!this) return;
            return item instanceof this.itemType && typeof this.findById(item.id) !== 'undefined';
        };

        /**
         * Pluck new array with values of specified property
         * @returns {*}
         * @param property
         */
        this.__proto__.pluck = function(property)
        {
            if (!this) return;
            let arr = [];
            this.forEach(i => {
                if(i.hasOwnProperty(property))
                {
                    if (!i[property] instanceof Array){
                        arr.push(i[property]);
                    }
                    else {
                        arr.concat(i[property]);
                    }
                }
            });
            return arr;
        };

        /**
         * Count items
         * @returns {*}
         */
        this.__proto__.count = function () {
            if (!this) return;
            return this.length;
        };

        /**
         * Check if has any of item
         * @returns {*}
         */
        this.__proto__.any = function () {
            if (!this) return;
            return this.length > 0;
        };

        /**
         * Remove item
         * @param item
         * @returns {*}
         */
        this.__proto__.remove = function (item) {
            if (!this) return;
            let index = -1;
            if(this.contains(item))
            {
                for (const i in this)
                {
                    if (this[i].id === item.id)
                    {
                        index = i;
                        break;
                    }
                }
            }
            if(index !== -1)
            {
                this.removeIndex(index);
            }
            return this;
        };

        /**
         * Remove item
         * @param fn
         */
        this.__proto__.removeWhere = function (fn) {
            if (!this) return;
            if (typeof fn === "function") {
                let items = this.filter(fn);
                for(let i in items) {
                    this.remove(items[i]);
                }
            }
        };

        /**
         * Remove item by uid
         * @param uid
         * @returns {*}
         */
        this.__proto__.removeUid = function (uid) {
            if (!this) return;
            let item = this.findByUid(uid);
            if(typeof item !== 'undefined')
            {
                this.remove(item);
            }
            return this;
        };

        /**
         * Remove item by id
         * @param id
         * @returns {*}
         */
        this.__proto__.removeId = function (id) {
            if (!this) return;
            this.removeUid(id);
            return this;
        };

        /**
         * Remove item by index
         * @param index
         * @returns {*}
         */
        this.__proto__.removeIndex = function (index) {
            if (!this) return;
            if(typeof this[index] !== 'undefined')
            {
                this.splice(index, 1);
            }
            return this;
        };

        /**
         * Clear collection
         * @returns {*}
         */
        this.__proto__.clear = function()
        {
            if (!this) return;
            this.splice(0, this.length);
            this.selected === null || this.selected.clear();
            this.matched === null || this.matched.clear();
            return this;
        };

        /**
         * Get instance
         * @returns {*}
         */
        this.__proto__.instance = function(items)
        {
            if (!this) return;
            return new Collection(this.itemType, items);
        };

        /**
         * Clear collection
         * @returns {*}
         */
        this.__proto__.clone = function()
        {
            if (!this) return;
            let clone = this.instance();
            this.forEach(e => {
                if (e instanceof stdClass) {
                    let eClone = e.clone();
                    if (typeof e.collection !== 'undefined' && e.collection instanceof Array) {
                        if (e.collection.name === 'Collection') {
                            eClone.collection.addRange(e.collection.clone());
                        }
                        else {
                            eClone.collection = _.cloneDeep(e.collection);
                        }
                    }
                    clone.add(eClone);
                } else {
                    clone.add(_.cloneDeep(e));
                }
            });
            return clone;
        };

        /**
         * Get selected items
         * @returns {this}
         */
        this.__proto__.getSelected = function ()
        {
            if (!this) return;
            if(this.selected === null){
                this.selected = this.instance();
            }
            return this.selected;
        };

        /**
         * Get matched items
         * @returns {this}
         */
        this.__proto__.getMatched = function ()
        {
            if (!this) return;
            if(this.matched === null){
                this.matched = this.instance();
            }
            return this.matched;
        };

        this.__proto__.toArray = function ()
        {
            if (!this) return;
            return this.slice(0, this.length);
        };

        this.__proto__.reduces = function () {
            if (!this) return;
            return this.toArray().map(e => {
                if (e instanceof Model) {
                    return e.reduces();
                }
                return e;
            });
        };

        this.__proto__.first = function () {
            if (!this) return;
            return this.length > 0 ? this[0] : null;
        };

        this.__proto__.last = function () {
            if (this == null) return;
            return this.length > 0 ? this[this.length-1] : null;
        };

        /**
         * Add items by default if provided
         */
        if(typeof items[0] !== 'undefined') {
            this.addRange(items[0]);
        }
    }
}

export {Collection as default}
