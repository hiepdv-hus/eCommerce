/**
 * Response Json
 */

import stdClass from "./stdClass";

class ResponseJson extends stdClass{
    constructor(data) {
        super();
        this.success = 0;
        this.errorCode = 0;
        this.data = null;
        this.exception = null;
        this.message = null;
        this.recordsTotal = null;
        this.bind(data);
    }

    isSuccess() {
        return this.success === 1;
    }
}

export {ResponseJson as default}
