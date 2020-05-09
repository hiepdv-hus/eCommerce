/**
 * Helpers
 */

import Vue from 'vue';
import {DEV_MODE} from "../constants";

const Helper = {
    install: (Vue) => {
        Vue.prototype.$helper = Helper;
    },
    /**
     * Get internal url
     * @param {string} path
     */
    url(path = '') {
        let url = window.location.origin;
        if (typeof window.ENTRY !== 'undefined') {
            url += '/' + window.ENTRY;
        }
        return url + '/' + path.replace(/^[\/\\]+|[\/\\]+$/g, '');
    },
    /**
     * Redirect to internal url
     * @param {string} path
     */
    redirect(path = '') {
        let url = window.location.origin;
        if (typeof window.ENTRY !== 'undefined') {
            url += '/' + window.ENTRY;
        }
        window.location.href = url + '/' + path.replace(/^[\/\\]+|[\/\\]+$/g, '');
    },
    /**
     * Format number to string
     * @param number
     * @param splitter
     * @returns {string}
     */
    formatNumberToString (number, splitter=',') {
        if(number === null || number === '')
        {
            return '';
        }

        let temp_number_string = String(Number(number));
        let temp_number_array = [];
        temp_number_string = temp_number_string.replace(/\./g, '');
        temp_number_string = temp_number_string.split('');
        temp_number_string.reverse();
        temp_number_string.forEach(function (item, key) {
            temp_number_array.push(item);
            if ((key + 1) % 3 === 0 && temp_number_string[key + 1]) {
                temp_number_array.push(splitter);
            }
        });
        temp_number_array.reverse();
        return String(temp_number_array.join(''));
    },
    stringToPrice(string) {
        let price = string.replace(/[^\d]+/ig, '');
        return Number(price);
    },
    /**
     * Convert to number
     * @param number
     * @returns {number}
     */
    number(number)
    {
        return Number(number);
    },
    /**
     * Show toasted message - success
     * @param message
     */
    messageSuccess (message)
    {
        Vue.toasted.success(message, {
            position: 'top-right',
            icon: 'check-all',
            iconPack: 'mdi',
            theme: 'outline',
            action : {
                // text : 'Đóng',
                onClick : (e, toastObject) => {
                    toastObject.goAway(0);
                }
            }
        }).goAway(3e3);
    },
    /**
     * Show toasted message - error
     * @param message
     */
    messageError (message)
    {
        Vue.toasted.error(message, {
            position: 'top-right',
            icon: 'alert-outline',
            iconPack: 'mdi',
            theme: 'outline',
            action : {
                // text : 'Đóng',
                onClick : (e, toastObject) => {
                    toastObject.goAway(0);
                }
            },
        }).goAway(3e3);
    },
    /**
     * Set timeout function, wait for every change event
     * @param fn
     * @param time
     */
    timeoutWaitChange: function (fn, time) {
        if(this.timeoutSet){
            clearTimeout(this.timeoutSet);
        }
        this.timeoutSet = setTimeout(fn, time != null ? time : 5e2);
    },
    /**
     * @param event
     */
    moveFocusElement ( event) {
        let element = event.target;
        let keyCode = event.keyCode || event.which;

        switch(keyCode) {
            case 38:
                if (element.previousSibling && element.previousSibling.nodeName === element.nodeName) {
                    $(element.previousSibling).focus();
                }
                break;
            case 40:
                if (element.nextSibling && element.nextSibling.nodeName === element.nodeName) {
                    element.nextSibling.focus();
                }
                break;
            case 13:
                element.click();
                break;
        }
    },

    toDateString(date, format='d/m/Y')
    {
        if((typeof date === 'string' && (!date || date === '0000-00-00 00:00:00')) || !date)
        {
            return '';
        }

        if(!format || format.trim().length < 1)
        {
            format = 'Y-m-d';
        }

        let d = new Date(date);
        let dDetail = {
            Y: d.getFullYear(),
            m: d.getMonth() + 1,
            d: d.getDate(),
            H: d.getHours(),
            i: d.getMinutes(),
            s: d.getSeconds()
        };
        let dateString = '';

        for(let i in format)
        {
            dateString += (typeof dDetail[format[i]] !== 'undefined') ? dDetail[format[i]] : format[i];
        }

        return dateString;
    },
    /**
     * Check if string is empty
     * @param str
     * @returns {boolean}
     */
    isEmpty(str)
    {
        return str === null || str.trim().length === 0;
    },
    /**
     * Start loading spinner
     * @param vue
     */
    startLoading(vue)
    {
        $('#page-loading').fadeIn(100);
    },
    /**
     * Stop loading spinner
     * @param vue
     */
    stopLoading(vue)
    {
        $('#page-loading').fadeOut(100);
    },
    handleRequestError(vue, error, message = "Error !!!"){
        vue.isBusy = false;
        // this.messageError(message);

        if (DEV_MODE === 1) {
            console.log(error);
        }

        if(error.response){
            if(error.response.status === 401){
                vue.$modal.show('dialog', {
                    title: 'Session expired!',
                    text: 'Vui lòng đăng nhập.',
                    clickToClose: false,
                    buttons: [
                        {
                            title: 'Đăng nhập lại',
                            handler: () => {
                                this.redirect('auth/login');
                            }
                        }
                    ]
                });
            }
        }
    },
    getBase64(file){
        return new Promise((resolve, reject) => {
            const reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = () => resolve(reader.result);
            reader.onerror = error => reject(error);
        });
    },
    getFileExtension (fileName) {
        return fileName.split('.').pop();
    },

    emojiUnicode (emoji) {
        var comp;
        if (emoji.length === 1) {
            comp = emoji.charCodeAt(0);
        }
        comp = (
            (emoji.charCodeAt(0) - 0xD800) * 0x400
            + (emoji.charCodeAt(1) - 0xDC00) + 0x10000
        );
        if (comp < 0) {
            comp = emoji.charCodeAt(0);
        }
        return comp.toString("16");
    },

    isValidPhone(phone) {
        if (phone == null) return false;
        phone = phone.trim();
        let regex = /^\(?([0-9]{3})\)?[-.●]?([0-9]{3})[-.●]?([0-9]{4,5})$/;
        return regex.test(phone);
    },

    isValidEmail(email) {
        if (email == null) return false;
        email = email.trim();
        let regex = /^(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?)$/;
        return regex.test(email);
    }
};

export default Helper;
