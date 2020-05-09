/**
 * Model class definition
 */

import stdClass from './stdClass';
import Collection from './collection';
import Api from "./api";
import Helper from "./helper";

/**
 * Model constructor
 */
class Model extends stdClass
{
    constructor()
    {
        super();
        this.createdTime = null;
        this.modifiedTime = null;
        this.collection = new Collection(this.constructor);
        this.originData = null;
        this._changedData = null;
    }

    apiGroup(){
        return '';
    }

    cacheOrigin() {
        this.originData = this.clone();
    }

    reduces(){
        let ret = {};
        let regex = new RegExp(/[^\d]+/);
        for(let i in this){
            let propValue = this[i];
            if (propValue != null){
                if (propValue instanceof stdClass /*(propValue instanceof Model && propValue.id != 0)*/ ||
                    (propValue instanceof Array && propValue.name === 'Collection' && propValue.length > 0)){
                    ret[i] = propValue.reduces();
                }
                else if (typeof propValue === 'string' || typeof propValue === 'number'){
                    ret[i] = propValue;
                    if (i === 'id' && regex.test(ret[i])) {
                        delete ret[i];
                    }
                }
            }
        }
        return ret;
    }

    watchChanges(prop, handler) {
        if (!this.hasOwnProperty(prop)) {
            return;
        }

        this.originData = this.clone();
        this._changedData = {};

        if (this[prop] instanceof stdClass) {
            // this[prop].watchChangesAll();
            return;
        }

        let self = this;
        this.watch(prop, function (id, oldVal, newVal) {
            if (self.originData[prop] !== newVal) {
                self._changedData[prop] = newVal;
            }
            else {
                delete self._changedData[prop];
            }

            typeof handler !== 'function' || handler.call(null, oldVal, newVal);
            return newVal;
        });
    }

    watchChangesAll(handler) {
        for (let prop in this) {
            prop === '_changedData' || this.watchChanges(prop, handler);
        }
    }

    getChanges() {
        let dataChanged = {};
        for(let i in this){
            let propValue = this[i];
            let propValueOrigin = this.originData[i];
            if (typeof propValue === 'string' || typeof propValue === 'number') {
                if (propValue !== this.originData[i]) {
                    dataChanged[i] = propValue;
                }
            }
        }
        return dataChanged;
    }

    load(params) {
        this.reset();
        return Api.get(Api.urls(this.apiGroup())['detail'], params).then(response => {
            if (!response.isSuccess()) {
                throw response.message || 'Exception';
            }

            this.bind(response.data);
            return this;
        });
    }

    loadById(id) {
        this.reset();
        return Api.get(Api.urls(this.apiGroup())['detail'], {id: id}).then(response => {
            if (!response.isSuccess()) {
                throw response.message || 'Exception';
            }

            this.bind(response.data);
            return this;
        });
    }

    loadCollection(params, callback) {
        return Api.get(Api.urls(this.apiGroup())['list'], params).then(response => {
            if (!response.isSuccess()) {
                throw response.message || 'Exception';
            }
            this.collection.clear();
            this.collection.addRange(response.data);
            console.log(response.recordsTotal, Number(response.recordsTotal))
            this.collection.setRecordsTotal(Number(response.recordsTotal) ||0);

            !(typeof callback === 'function') || callback.call(null, response.data);
            return this.collection;
        });
    }

    loadCollectionMore(params, callback) {
        return Api.get(Api.urls(this.apiGroup())['list'], params).then(response => {
            if (!response.isSuccess()) {
                throw response.message || 'Exception';
            }

            this.collection.addRange(response.data);
            this.collection.setRecordsTotal(response.recordsTotal + (Number(this.collection.recordsTotal)));

            !(typeof callback === 'function') || callback.call(null, response.data);
            return this.collection;
        });
    }

    getList(params, callback) {
        return Api.get(Api.urls(this.apiGroup())['list'], params).then(response => {
            if (!response.isSuccess()) {
                throw response.message || 'Exception';
            }

            !(typeof callback === 'function') || callback.call(null, response.data);

            return new Collection(this.constructor, response.data)
                .setRecordsTotal(response.data.recordsTotal);
        });
    }

    add() {
        return Api.post(Api.urls(this.apiGroup())['add'], this.reduces()).then(response => {
            if (!response.isSuccess()) {
                throw response.message || 'Exception';
            }
            return response;
        });
    }

    update(data) {
        return Api.put(Api.urls(this.apiGroup())['update'], data ? data : this.reduces()).then(response => {
            if (!response.isSuccess()) {
                throw response.message || 'Exception';
            }
            return response;
        });
    }

    delete() {
        return Api.delete(Api.urls(this.apiGroup())['delete'], {id: this.getId()}).then(response => {
            if (!response.isSuccess()) {
                throw response.message || 'Exception';
            }
            return response;
        });
    }

    async loadAsync(params) {
        this.reset();
        let response = await Api.getAsync(Api.urls(this.apiGroup())['detail'], params);
        if (!response.isSuccess()) {
            throw response.message || 'Exception';
        }

        this.bind(response.data);
        return this;
    }

    async loadByIdAsync(id) {
        this.reset();
        let response = await Api.getAsync(Api.urls(this.apiGroup())['detail'], {id: id});
        if (!response.isSuccess()) {
            throw response.message || 'Exception';
        }

        this.bind(response.data);
        return this;
    }

    async loadCollectionAsync(params, callback) {
        let response = await Api.getAsync(Api.urls(this.apiGroup())['list'], params);
        if (!response.isSuccess()) {
            throw response.message || 'Exception';
        }
        this.collection.clear();
        this.collection.addRange(response.data);
        this.collection.setRecordsTotal(Number(response.recordsTotal) || 0);

        !(typeof callback === 'function') || callback.call(null, response.data);

        return this.collection;
    }

    async loadCollectionMoreAsync(params, callback) {
        let response = await Api.getAsync(Api.urls(this.apiGroup())['list'], params);
        if (!response.isSuccess()) {
            throw response.message || 'Exception';
        }

        this.collection.addRange(response.data);
        this.collection.setRecordsTotal(response.recordsTotal + (Number(this.collection.recordsTotal)));

        !(typeof callback === 'function') || callback.call(null, response.data);

        return this.collection;
    }

    async getListAsync(params, callback) {
        let response = await Api.getAsync(Api.urls(this.apiGroup())['list'], params);
        if (!response.isSuccess()) {
            throw response.message || 'Exception';
        }

        !(typeof callback === 'function') || callback.call(null, response.data);

        return new Collection(this.constructor, response.data).setRecordsTotal(response.data.recordsTotal);
    }

    async addAsync() {
        let response = await Api.postAsync(Api.urls(this.apiGroup())['add'], this.reduces());
        if (!response.isSuccess()) {
            throw response.message || 'Exception';
        }
        return this;
    }

    async updateAsync(data) {
        let response = await Api.putAsync(Api.urls(this.apiGroup())['update'], data ? data : this.reduces());
        if (!response.isSuccess()) {
            throw response.message || 'Exception';
        }
        return this;
    }

    async deleteAsync() {
        let response = await Api.deleteAsync(Api.urls(this.apiGroup())['delete'], {id: this.getId()});
        if (!response.isSuccess()) {
            throw response.message || 'Exception';
        }
        return this;
    }

    exists() {
        return Number(this.getId()) > 0;
    }

    lastModifiedTime()
    {
        return Helper.toDateString(this.modifiedTime || this.createdTime);
    }
}

export {Model as default}
