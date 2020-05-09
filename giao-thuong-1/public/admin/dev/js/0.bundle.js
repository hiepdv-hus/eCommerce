(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./develop/libs/collection.js":
/*!************************************!*\
  !*** ./develop/libs/collection.js ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Collection; });
/* harmony import */ var _stdClass__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./stdClass */ "./develop/libs/stdClass.js");
/* harmony import */ var _model__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./model */ "./develop/libs/model.js");
function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _wrapNativeSuper(Class) { var _cache = typeof Map === "function" ? new Map() : undefined; _wrapNativeSuper = function _wrapNativeSuper(Class) { if (Class === null || !_isNativeFunction(Class)) return Class; if (typeof Class !== "function") { throw new TypeError("Super expression must either be null or a function"); } if (typeof _cache !== "undefined") { if (_cache.has(Class)) return _cache.get(Class); _cache.set(Class, Wrapper); } function Wrapper() { return _construct(Class, arguments, _getPrototypeOf(this).constructor); } Wrapper.prototype = Object.create(Class.prototype, { constructor: { value: Wrapper, enumerable: false, writable: true, configurable: true } }); return _setPrototypeOf(Wrapper, Class); }; return _wrapNativeSuper(Class); }

function isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }

function _construct(Parent, args, Class) { if (isNativeReflectConstruct()) { _construct = Reflect.construct; } else { _construct = function _construct(Parent, args, Class) { var a = [null]; a.push.apply(a, args); var Constructor = Function.bind.apply(Parent, a); var instance = new Constructor(); if (Class) _setPrototypeOf(instance, Class.prototype); return instance; }; } return _construct.apply(null, arguments); }

function _isNativeFunction(fn) { return Function.toString.call(fn).indexOf("[native code]") !== -1; }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

/**
 * Collection class definition
 */



var Collection =
/*#__PURE__*/
function (_Array) {
  _inherits(Collection, _Array);

  /**
   * Collection constructor
   * @param itemType
   * @param items
   */
  function Collection(itemType) {
    var _this;

    _classCallCheck(this, Collection);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Collection).call(this));
    _this.__proto__ = Array.prototype;
    /**
     * Item type
     */

    _this.itemType = itemType;
    _this.name = 'Collection';
    _this.recordsTotal = 0;
    _this.selected = null;
    _this.matched = null;
    /**
     * Add item
     * @param item
     * @returns {*}
     */

    _this.__proto__.add = function (item) {
      if (!this) return;

      if (!this.contains(item)) {
        if (!(item instanceof this.itemType)) {
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


    _this.__proto__.addRange = function (items) {
      var _this2 = this;

      if (!this) return;
      if (!(items instanceof Array)) return this;

      if (this != null) {
        items.forEach(function (item) {
          _this2.add(item);
        });
      }

      return this;
    };
    /**
     * Add item to beginning
     * @param item
     * @returns {*}
     */


    _this.__proto__.addTop = function (item) {
      if (!this) return;

      if (!this.contains(item)) {
        if (!(item instanceof this.itemType)) {
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


    _this.__proto__.addTopRange = function (items) {
      var _this3 = this;

      if (!this) return;
      if (!(items instanceof Array)) return this;

      if (this != null) {
        items.forEach(function (item) {
          _this3.addTop(item);
        });
      }

      return this;
    };
    /**
     * Add list of items
     * @returns {*}
     * @param recordsTotal
     */


    _this.__proto__.setRecordsTotal = function (recordsTotal) {
      if (!this) return;
      this.recordsTotal = Number(recordsTotal);
      return this;
    };
    /**
     * Find item by id
     * @param id
     * @returns {*}
     */


    _this.__proto__.findById = function (id) {
      if (!this) return;
      return this.filter(function (i) {
        return i.id === id;
      })[0];
    };
    /**
     * Find item by uid
     * @param uid
     * @returns {*}
     */


    _this.__proto__.findByUid = function (uid) {
      if (!this) return;
      return this.filter(function (i) {
        return i.uid === uid;
      })[0];
    };

    _this.__proto__.contains = function (item) {
      if (!this) return;
      return item instanceof this.itemType && typeof this.findById(item.id) !== 'undefined';
    };
    /**
     * Pluck new array with values of specified property
     * @returns {*}
     * @param property
     */


    _this.__proto__.pluck = function (property) {
      if (!this) return;
      var arr = [];
      this.forEach(function (i) {
        if (i.hasOwnProperty(property)) {
          if (!i[property] instanceof Array) {
            arr.push(i[property]);
          } else {
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


    _this.__proto__.count = function () {
      if (!this) return;
      return this.length;
    };
    /**
     * Check if has any of item
     * @returns {*}
     */


    _this.__proto__.any = function () {
      if (!this) return;
      return this.length > 0;
    };
    /**
     * Remove item
     * @param item
     * @returns {*}
     */


    _this.__proto__.remove = function (item) {
      if (!this) return;
      var index = -1;

      if (this.contains(item)) {
        for (var i in this) {
          if (this[i].id === item.id) {
            index = i;
            break;
          }
        }
      }

      if (index !== -1) {
        this.removeIndex(index);
      }

      return this;
    };
    /**
     * Remove item
     * @param fn
     */


    _this.__proto__.removeWhere = function (fn) {
      if (!this) return;

      if (typeof fn === "function") {
        var items = this.filter(fn);

        for (var i in items) {
          this.remove(items[i]);
        }
      }
    };
    /**
     * Remove item by uid
     * @param uid
     * @returns {*}
     */


    _this.__proto__.removeUid = function (uid) {
      if (!this) return;
      var item = this.findByUid(uid);

      if (typeof item !== 'undefined') {
        this.remove(item);
      }

      return this;
    };
    /**
     * Remove item by id
     * @param id
     * @returns {*}
     */


    _this.__proto__.removeId = function (id) {
      if (!this) return;
      this.removeUid(id);
      return this;
    };
    /**
     * Remove item by index
     * @param index
     * @returns {*}
     */


    _this.__proto__.removeIndex = function (index) {
      if (!this) return;

      if (typeof this[index] !== 'undefined') {
        this.splice(index, 1);
      }

      return this;
    };
    /**
     * Clear collection
     * @returns {*}
     */


    _this.__proto__.clear = function () {
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


    _this.__proto__.instance = function (items) {
      if (!this) return;
      return new Collection(this.itemType, items);
    };
    /**
     * Clear collection
     * @returns {*}
     */


    _this.__proto__.clone = function () {
      if (!this) return;
      var clone = this.instance();
      this.forEach(function (e) {
        if (e instanceof _stdClass__WEBPACK_IMPORTED_MODULE_0__["default"]) {
          var eClone = e.clone();

          if (typeof e.collection !== 'undefined' && e.collection instanceof Array) {
            if (e.collection.name === 'Collection') {
              eClone.collection.addRange(e.collection.clone());
            } else {
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


    _this.__proto__.getSelected = function () {
      if (!this) return;

      if (this.selected === null) {
        this.selected = this.instance();
      }

      return this.selected;
    };
    /**
     * Get matched items
     * @returns {this}
     */


    _this.__proto__.getMatched = function () {
      if (!this) return;

      if (this.matched === null) {
        this.matched = this.instance();
      }

      return this.matched;
    };

    _this.__proto__.toArray = function () {
      if (!this) return;
      return this.slice(0, this.length);
    };

    _this.__proto__.reduces = function () {
      if (!this) return;
      return this.toArray().map(function (e) {
        if (e instanceof _model__WEBPACK_IMPORTED_MODULE_1__["default"]) {
          return e.reduces();
        }

        return e;
      });
    };

    _this.__proto__.first = function () {
      if (!this) return;
      return this.length > 0 ? this[0] : null;
    };

    _this.__proto__.last = function () {
      if (this == null) return;
      return this.length > 0 ? this[this.length - 1] : null;
    };
    /**
     * Add items by default if provided
     */


    if (typeof (arguments.length <= 1 ? undefined : arguments[1]) !== 'undefined') {
      _this.addRange(arguments.length <= 1 ? undefined : arguments[1]);
    }

    return _this;
  }

  return Collection;
}(_wrapNativeSuper(Array));



/***/ }),

/***/ "./develop/libs/model.js":
/*!*******************************!*\
  !*** ./develop/libs/model.js ***!
  \*******************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Model; });
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _stdClass__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./stdClass */ "./develop/libs/stdClass.js");
/* harmony import */ var _collection__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./collection */ "./develop/libs/collection.js");
/* harmony import */ var _api__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./api */ "./develop/libs/api.js");
/* harmony import */ var _helper__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./helper */ "./develop/libs/helper.js");


function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

/**
 * Model class definition
 */




/**
 * Model constructor
 */

var Model =
/*#__PURE__*/
function (_stdClass) {
  _inherits(Model, _stdClass);

  function Model() {
    var _this;

    _classCallCheck(this, Model);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Model).call(this));
    _this.createdTime = null;
    _this.modifiedTime = null;
    _this.collection = new _collection__WEBPACK_IMPORTED_MODULE_2__["default"](_this.constructor);
    _this.originData = null;
    _this._changedData = null;
    return _this;
  }

  _createClass(Model, [{
    key: "apiGroup",
    value: function apiGroup() {
      return '';
    }
  }, {
    key: "cacheOrigin",
    value: function cacheOrigin() {
      this.originData = this.clone();
    }
  }, {
    key: "reduces",
    value: function reduces() {
      var ret = {};
      var regex = new RegExp(/[^\d]+/);

      for (var i in this) {
        var propValue = this[i];

        if (propValue != null) {
          if (propValue instanceof _stdClass__WEBPACK_IMPORTED_MODULE_1__["default"]
          /*(propValue instanceof Model && propValue.id != 0)*/
          || propValue instanceof Array && propValue.name === 'Collection' && propValue.length > 0) {
            ret[i] = propValue.reduces();
          } else if (typeof propValue === 'string' || typeof propValue === 'number') {
            ret[i] = propValue;

            if (i === 'id' && regex.test(ret[i])) {
              delete ret[i];
            }
          }
        }
      }

      return ret;
    }
  }, {
    key: "watchChanges",
    value: function watchChanges(prop, handler) {
      if (!this.hasOwnProperty(prop)) {
        return;
      }

      this.originData = this.clone();
      this._changedData = {};

      if (this[prop] instanceof _stdClass__WEBPACK_IMPORTED_MODULE_1__["default"]) {
        // this[prop].watchChangesAll();
        return;
      }

      var self = this;
      this.watch(prop, function (id, oldVal, newVal) {
        if (self.originData[prop] !== newVal) {
          self._changedData[prop] = newVal;
        } else {
          delete self._changedData[prop];
        }

        typeof handler !== 'function' || handler.call(null, oldVal, newVal);
        return newVal;
      });
    }
  }, {
    key: "watchChangesAll",
    value: function watchChangesAll(handler) {
      for (var prop in this) {
        prop === '_changedData' || this.watchChanges(prop, handler);
      }
    }
  }, {
    key: "getChanges",
    value: function getChanges() {
      var dataChanged = {};

      for (var i in this) {
        var propValue = this[i];
        var propValueOrigin = this.originData[i];

        if (typeof propValue === 'string' || typeof propValue === 'number') {
          if (propValue !== this.originData[i]) {
            dataChanged[i] = propValue;
          }
        }
      }

      return dataChanged;
    }
  }, {
    key: "load",
    value: function load(params) {
      var _this2 = this;

      this.reset();
      return _api__WEBPACK_IMPORTED_MODULE_3__["default"].get(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['detail'], params).then(function (response) {
        if (!response.isSuccess()) {
          throw response.message || 'Exception';
        }

        _this2.bind(response.data);

        return _this2;
      });
    }
  }, {
    key: "loadById",
    value: function loadById(id) {
      var _this3 = this;

      this.reset();
      return _api__WEBPACK_IMPORTED_MODULE_3__["default"].get(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['detail'], {
        id: id
      }).then(function (response) {
        if (!response.isSuccess()) {
          throw response.message || 'Exception';
        }

        _this3.bind(response.data);

        return _this3;
      });
    }
  }, {
    key: "loadCollection",
    value: function loadCollection(params, callback) {
      var _this4 = this;

      return _api__WEBPACK_IMPORTED_MODULE_3__["default"].get(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['list'], params).then(function (response) {
        if (!response.isSuccess()) {
          throw response.message || 'Exception';
        }

        _this4.collection.clear();

        _this4.collection.addRange(response.data);

        console.log(response.recordsTotal, Number(response.recordsTotal));

        _this4.collection.setRecordsTotal(Number(response.recordsTotal) || 0);

        !(typeof callback === 'function') || callback.call(null, response.data);
        return _this4.collection;
      });
    }
  }, {
    key: "loadCollectionMore",
    value: function loadCollectionMore(params, callback) {
      var _this5 = this;

      return _api__WEBPACK_IMPORTED_MODULE_3__["default"].get(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['list'], params).then(function (response) {
        if (!response.isSuccess()) {
          throw response.message || 'Exception';
        }

        _this5.collection.addRange(response.data);

        _this5.collection.setRecordsTotal(response.recordsTotal + Number(_this5.collection.recordsTotal));

        !(typeof callback === 'function') || callback.call(null, response.data);
        return _this5.collection;
      });
    }
  }, {
    key: "getList",
    value: function getList(params, callback) {
      var _this6 = this;

      return _api__WEBPACK_IMPORTED_MODULE_3__["default"].get(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['list'], params).then(function (response) {
        if (!response.isSuccess()) {
          throw response.message || 'Exception';
        }

        !(typeof callback === 'function') || callback.call(null, response.data);
        return new _collection__WEBPACK_IMPORTED_MODULE_2__["default"](_this6.constructor, response.data).setRecordsTotal(response.data.recordsTotal);
      });
    }
  }, {
    key: "add",
    value: function add() {
      return _api__WEBPACK_IMPORTED_MODULE_3__["default"].post(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['add'], this.reduces()).then(function (response) {
        if (!response.isSuccess()) {
          throw response.message || 'Exception';
        }

        return response;
      });
    }
  }, {
    key: "update",
    value: function update(data) {
      return _api__WEBPACK_IMPORTED_MODULE_3__["default"].put(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['update'], data ? data : this.reduces()).then(function (response) {
        if (!response.isSuccess()) {
          throw response.message || 'Exception';
        }

        return response;
      });
    }
  }, {
    key: "delete",
    value: function _delete() {
      return _api__WEBPACK_IMPORTED_MODULE_3__["default"]["delete"](_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['delete'], {
        id: this.getId()
      }).then(function (response) {
        if (!response.isSuccess()) {
          throw response.message || 'Exception';
        }

        return response;
      });
    }
  }, {
    key: "loadAsync",
    value: function () {
      var _loadAsync = _asyncToGenerator(
      /*#__PURE__*/
      _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee(params) {
        var response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                this.reset();
                _context.next = 3;
                return _api__WEBPACK_IMPORTED_MODULE_3__["default"].getAsync(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['detail'], params);

              case 3:
                response = _context.sent;

                if (response.isSuccess()) {
                  _context.next = 6;
                  break;
                }

                throw response.message || 'Exception';

              case 6:
                this.bind(response.data);
                return _context.abrupt("return", this);

              case 8:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this);
      }));

      function loadAsync(_x) {
        return _loadAsync.apply(this, arguments);
      }

      return loadAsync;
    }()
  }, {
    key: "loadByIdAsync",
    value: function () {
      var _loadByIdAsync = _asyncToGenerator(
      /*#__PURE__*/
      _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee2(id) {
        var response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee2$(_context2) {
          while (1) {
            switch (_context2.prev = _context2.next) {
              case 0:
                this.reset();
                _context2.next = 3;
                return _api__WEBPACK_IMPORTED_MODULE_3__["default"].getAsync(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['detail'], {
                  id: id
                });

              case 3:
                response = _context2.sent;

                if (response.isSuccess()) {
                  _context2.next = 6;
                  break;
                }

                throw response.message || 'Exception';

              case 6:
                this.bind(response.data);
                return _context2.abrupt("return", this);

              case 8:
              case "end":
                return _context2.stop();
            }
          }
        }, _callee2, this);
      }));

      function loadByIdAsync(_x2) {
        return _loadByIdAsync.apply(this, arguments);
      }

      return loadByIdAsync;
    }()
  }, {
    key: "loadCollectionAsync",
    value: function () {
      var _loadCollectionAsync = _asyncToGenerator(
      /*#__PURE__*/
      _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee3(params, callback) {
        var response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee3$(_context3) {
          while (1) {
            switch (_context3.prev = _context3.next) {
              case 0:
                _context3.next = 2;
                return _api__WEBPACK_IMPORTED_MODULE_3__["default"].getAsync(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['list'], params);

              case 2:
                response = _context3.sent;

                if (response.isSuccess()) {
                  _context3.next = 5;
                  break;
                }

                throw response.message || 'Exception';

              case 5:
                this.collection.clear();
                this.collection.addRange(response.data);
                this.collection.setRecordsTotal(Number(response.recordsTotal) || 0);
                !(typeof callback === 'function') || callback.call(null, response.data);
                return _context3.abrupt("return", this.collection);

              case 10:
              case "end":
                return _context3.stop();
            }
          }
        }, _callee3, this);
      }));

      function loadCollectionAsync(_x3, _x4) {
        return _loadCollectionAsync.apply(this, arguments);
      }

      return loadCollectionAsync;
    }()
  }, {
    key: "loadCollectionMoreAsync",
    value: function () {
      var _loadCollectionMoreAsync = _asyncToGenerator(
      /*#__PURE__*/
      _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee4(params, callback) {
        var response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee4$(_context4) {
          while (1) {
            switch (_context4.prev = _context4.next) {
              case 0:
                _context4.next = 2;
                return _api__WEBPACK_IMPORTED_MODULE_3__["default"].getAsync(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['list'], params);

              case 2:
                response = _context4.sent;

                if (response.isSuccess()) {
                  _context4.next = 5;
                  break;
                }

                throw response.message || 'Exception';

              case 5:
                this.collection.addRange(response.data);
                this.collection.setRecordsTotal(response.recordsTotal + Number(this.collection.recordsTotal));
                !(typeof callback === 'function') || callback.call(null, response.data);
                return _context4.abrupt("return", this.collection);

              case 9:
              case "end":
                return _context4.stop();
            }
          }
        }, _callee4, this);
      }));

      function loadCollectionMoreAsync(_x5, _x6) {
        return _loadCollectionMoreAsync.apply(this, arguments);
      }

      return loadCollectionMoreAsync;
    }()
  }, {
    key: "getListAsync",
    value: function () {
      var _getListAsync = _asyncToGenerator(
      /*#__PURE__*/
      _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee5(params, callback) {
        var response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee5$(_context5) {
          while (1) {
            switch (_context5.prev = _context5.next) {
              case 0:
                _context5.next = 2;
                return _api__WEBPACK_IMPORTED_MODULE_3__["default"].getAsync(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['list'], params);

              case 2:
                response = _context5.sent;

                if (response.isSuccess()) {
                  _context5.next = 5;
                  break;
                }

                throw response.message || 'Exception';

              case 5:
                !(typeof callback === 'function') || callback.call(null, response.data);
                return _context5.abrupt("return", new _collection__WEBPACK_IMPORTED_MODULE_2__["default"](this.constructor, response.data).setRecordsTotal(response.data.recordsTotal));

              case 7:
              case "end":
                return _context5.stop();
            }
          }
        }, _callee5, this);
      }));

      function getListAsync(_x7, _x8) {
        return _getListAsync.apply(this, arguments);
      }

      return getListAsync;
    }()
  }, {
    key: "addAsync",
    value: function () {
      var _addAsync = _asyncToGenerator(
      /*#__PURE__*/
      _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee6() {
        var response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee6$(_context6) {
          while (1) {
            switch (_context6.prev = _context6.next) {
              case 0:
                _context6.next = 2;
                return _api__WEBPACK_IMPORTED_MODULE_3__["default"].postAsync(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['add'], this.reduces());

              case 2:
                response = _context6.sent;

                if (response.isSuccess()) {
                  _context6.next = 5;
                  break;
                }

                throw response.message || 'Exception';

              case 5:
                return _context6.abrupt("return", this);

              case 6:
              case "end":
                return _context6.stop();
            }
          }
        }, _callee6, this);
      }));

      function addAsync() {
        return _addAsync.apply(this, arguments);
      }

      return addAsync;
    }()
  }, {
    key: "updateAsync",
    value: function () {
      var _updateAsync = _asyncToGenerator(
      /*#__PURE__*/
      _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee7(data) {
        var response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee7$(_context7) {
          while (1) {
            switch (_context7.prev = _context7.next) {
              case 0:
                _context7.next = 2;
                return _api__WEBPACK_IMPORTED_MODULE_3__["default"].putAsync(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['update'], data ? data : this.reduces());

              case 2:
                response = _context7.sent;

                if (response.isSuccess()) {
                  _context7.next = 5;
                  break;
                }

                throw response.message || 'Exception';

              case 5:
                return _context7.abrupt("return", this);

              case 6:
              case "end":
                return _context7.stop();
            }
          }
        }, _callee7, this);
      }));

      function updateAsync(_x9) {
        return _updateAsync.apply(this, arguments);
      }

      return updateAsync;
    }()
  }, {
    key: "deleteAsync",
    value: function () {
      var _deleteAsync = _asyncToGenerator(
      /*#__PURE__*/
      _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee8() {
        var response;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee8$(_context8) {
          while (1) {
            switch (_context8.prev = _context8.next) {
              case 0:
                _context8.next = 2;
                return _api__WEBPACK_IMPORTED_MODULE_3__["default"].deleteAsync(_api__WEBPACK_IMPORTED_MODULE_3__["default"].urls(this.apiGroup())['delete'], {
                  id: this.getId()
                });

              case 2:
                response = _context8.sent;

                if (response.isSuccess()) {
                  _context8.next = 5;
                  break;
                }

                throw response.message || 'Exception';

              case 5:
                return _context8.abrupt("return", this);

              case 6:
              case "end":
                return _context8.stop();
            }
          }
        }, _callee8, this);
      }));

      function deleteAsync() {
        return _deleteAsync.apply(this, arguments);
      }

      return deleteAsync;
    }()
  }, {
    key: "exists",
    value: function exists() {
      return Number(this.getId()) > 0;
    }
  }, {
    key: "lastModifiedTime",
    value: function lastModifiedTime() {
      return _helper__WEBPACK_IMPORTED_MODULE_4__["default"].toDateString(this.modifiedTime || this.createdTime);
    }
  }]);

  return Model;
}(_stdClass__WEBPACK_IMPORTED_MODULE_1__["default"]);



/***/ })

}]);