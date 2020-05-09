/** API **/
import Helper from './helper';
import axios from 'axios';
const API_URL = require(typeof ENTRY !== 'undefined'
    ? '../admin/resources/api-urls.json' : '../resources/api-urls.json');
import ResponseJson from './response';

const Api = {
    install: (Vue) => {
        Vue.prototype.$api = Api;
    },

    urls(group) {
        return API_URL[group];
    },

    get(url, params, config = {}) {
        let queryString = params ? '?' + $.param(params) : '';
        return axios.get(Helper.url(url) + queryString, config)
            .then(response => new ResponseJson(response.data))
            .catch(error => {
                throw error;
            });
    },

    post(url, data, config = {}) {
        return axios.post(Helper.url(url), data, config)
            .then(response => new ResponseJson(response.data))
            .catch(error => {
                throw error;
            });
    },

    put(url, data, config = {}) {
        return axios.put(Helper.url(url), data, config)
            .then(response => new ResponseJson(response.data))
            .catch(error => {
                throw error;
            });
    },

    patch(url, data, config = {}) {
        return axios.patch(Helper.url(url), data, config)
            .then(response => new ResponseJson(response.data))
            .catch(error => {
                throw error;
            });
    },

    delete(url, params, config = {}) {
        let queryString = params ? '?' + $.param(params) : '';
        return axios.delete(Helper.url(url) + queryString, config)
            .then(response => new ResponseJson(response.data))
            .catch(error => {
                throw error;
            });
    },

    async getAsync(url, params, config = {}) {
        let queryString = params ? '?' + $.param(params) : '';
        return await axios.get(Helper.url(url) + queryString, config)
            .then(response => new ResponseJson(response.data))
            .catch(error => {
                throw error;
            });
    },

    async postAsync(url, data, config = {}) {
        return await axios.post(Helper.url(url), data, config)
            .then(response => new ResponseJson(response.data))
            .catch(error => {
                throw error;
            });
    },

    async putAsync(url, data, config = {}) {
        return await axios.put(Helper.url(url), data, config)
            .then(response => new ResponseJson(response.data))
            .catch(error => {
                throw error;
            });
    },

    async patchAsync(url, data, config = {}) {
        return await axios.patch(Helper.url(url), data, config)
            .then(response => new ResponseJson(response.data))
            .catch(error => {
                throw error;
            });
    },

    async deleteAsync(url, params, config = {}) {
        let queryString = params ? '?' + $.param(params) : '';
        return await axios.delete(Helper.url(url) + queryString, config)
            .then(response => new ResponseJson(response.data))
            .catch(error => {
                throw error;
            });
    },

    //== Account ==
    /**
     * Login
     * @param params
     */
    async login(params) {
        return await this.postAsync(API_URL['auth']['login'], params);
    },
    /**
     * Logout
     */
    async logout () {
        try {
            let ret = await this.postAsync(API_URL['auth']['logout']);
            if (!ret.isSuccess()) {
                throw 'Exception';
            }
            Helper.redirect();
        } catch (e) {
            Helper.messageError('Có lỗi xảy ra, vui lòng thử lại');
        }
    }
};

export default Api;
