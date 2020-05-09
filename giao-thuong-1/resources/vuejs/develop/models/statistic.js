/**
 * Statistic class definition
 */

import Model from '../libs/model';
import Collection from '../libs/collection';
import Api from "../libs/api";

/**
 * Product constructor
 */
class Statistic extends Model
{
    constructor(data)
    {
        super();
        this.summary = new Collection(Detail);
        this.cases = null;
        this.deaths = null;
        this.countries = new Collection(Detail);
        this.vn = new Collection(Detail);
        this.time = new Time();
        this.bind(data);
    }

    apiGroup() {
        return 'statistic';
    }

    timeCountdown(updateCallback) {
        let self = this;
        setInterval(function () {
            self.time.second_remain--;
            if (self.time.second_remain === 0) {
                if (self.time.minute_remain === 0) {
                    // update report
                    updateCallback.call(null);
                }
                else {
                    self.time.countdown = `${self.time.minute_remain} phút ${self.time.second_remain} giây`;
                }
            }
            else if (self.time.second_remain < 0) {
                self.time.second_remain = 59;
                self.time.minute_remain--;
                if (self.time.minute_remain < 0) {
                    // update report
                    updateCallback.call(null);
                }
                else {
                    self.time.countdown
                        = `${self.time.minute_remain} phút ${self.time.second_remain} giây`;
                }
            }
            else {
                self.time.countdown = `${self.time.minute_remain} phút ${self.time.second_remain} giây`;
            }
        }, 1e3);
    }

    load(params) {
        // this.reset();
        return Api.get(Api.urls(this.apiGroup())['detail'], params).then(response => {
            if (!response.isSuccess()) {
                throw response.message || 'Exception';
            }

            this.summary = new Collection(Detail);
            // this.cases = 0;
            // this.deaths = 0;
            this.countries = new Collection(Detail);
            this.vn = new Collection(Detail);
            this.time = new Time();

            this.bind(response.data);
            return this;
        });
    }
}

class Detail extends Model
{
    constructor(data)
    {
        super();
        this.cases = null;
        this.deaths = null;
        this.date = null;
        this.country = null;
        this.country_code = null;
        this.region = null;

        this.bind(data);
    }

    typeOfNumber() {
        return ['cases', 'deaths'];
    }
}

class Time extends Model {
    constructor(data)
    {
        super();
        this.last = null;
        this.countdown = null;
        this.minute_remain = null;
        this.second_remain = null;

        this.bind(data);
    }

    typeOfNumber() {
        return ['minute_remain', 'second_remain'];
    }
}

export {Statistic as default}
