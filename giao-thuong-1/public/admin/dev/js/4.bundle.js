(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[4],{

/***/ "./develop/models/article.js":
/*!***********************************!*\
  !*** ./develop/models/article.js ***!
  \***********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Article; });
/* harmony import */ var _libs_model__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../libs/model */ "./develop/libs/model.js");
/* harmony import */ var _media__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./media */ "./develop/models/media.js");
/* harmony import */ var _libs_collection__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../libs/collection */ "./develop/libs/collection.js");
/* harmony import */ var _category__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./category */ "./develop/models/category.js");
function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

/**
 * Article class definition
 */




/**
 * Article constructor
 */

var Article =
/*#__PURE__*/
function (_Model) {
  _inherits(Article, _Model);

  function Article(data) {
    var _this;

    _classCallCheck(this, Article);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Article).call(this));
    _this.title = null;
    _this.slug = null;
    _this.description = null;
    _this.detail = null;
    _this.isPublished = 0;
    _this.mediaId = 0;
    _this.featuredImage = new _media__WEBPACK_IMPORTED_MODULE_1__["default"]();
    _this.link = null;
    _this.is_featured = null;
    _this.featured_image = null;
    _this.meta_og = null;
    _this.category_id = [];
    _this.created_time = null;

    _this.bind(data);

    return _this;
  }

  _createClass(Article, [{
    key: "typeOfNumber",
    value: function typeOfNumber() {
      return ['mediaId', 'isPublished'];
    }
  }, {
    key: "apiGroup",
    value: function apiGroup() {
      return 'article';
    }
  }]);

  return Article;
}(_libs_model__WEBPACK_IMPORTED_MODULE_0__["default"]);



/***/ }),

/***/ "./develop/models/category.js":
/*!************************************!*\
  !*** ./develop/models/category.js ***!
  \************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Category; });
/* harmony import */ var _libs_model__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../libs/model */ "./develop/libs/model.js");
/* harmony import */ var _article__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./article */ "./develop/models/article.js");
/* harmony import */ var _libs_collection__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../libs/collection */ "./develop/libs/collection.js");
/* harmony import */ var _libs_api__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../libs/api */ "./develop/libs/api.js");
function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

/**
 * Category class definition
 */




/**
 * Category constructor
 */

var Category =
/*#__PURE__*/
function (_Model) {
  _inherits(Category, _Model);

  function Category(data) {
    var _this;

    _classCallCheck(this, Category);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Category).call(this));
    _this.id = null;
    _this.name = null;
    _this.slug = null;
    _this.type = null;
    _this.description = null;
    _this.parent_id = null;
    _this.meta_data = null;
    _this.is_active = null;
    _this.articles = new _libs_collection__WEBPACK_IMPORTED_MODULE_2__["default"](_article__WEBPACK_IMPORTED_MODULE_1__["default"]);
    _this.total = null;
    _this.user_create_id = null;
    _this.user_update_id = null;
    _this.is_deleted = null;

    _this.bind(data);

    return _this;
  }

  _createClass(Category, [{
    key: "typeOfNumber",
    value: function typeOfNumber() {
      return ['id'];
    }
  }, {
    key: "apiGroup",
    value: function apiGroup() {
      return 'category';
    }
  }]);

  return Category;
}(_libs_model__WEBPACK_IMPORTED_MODULE_0__["default"]);



/***/ }),

/***/ "./develop/models/media.js":
/*!*********************************!*\
  !*** ./develop/models/media.js ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Media; });
/* harmony import */ var _libs_model__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../libs/model */ "./develop/libs/model.js");
/* harmony import */ var _libs_collection__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../libs/collection */ "./develop/libs/collection.js");
/* harmony import */ var _mediaThumbnail__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./mediaThumbnail */ "./develop/models/mediaThumbnail.js");
function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

/**
 * Media class definition
 */



/**
 * Media constructor
 */

var Media =
/*#__PURE__*/
function (_Model) {
  _inherits(Media, _Model);

  function Media(data) {
    var _this;

    _classCallCheck(this, Media);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Media).call(this));
    _this.mime_type = null;
    _this.name = null;
    _this.size = null;
    _this.url = null;
    _this.user_created_id = null;
    _this.user_update_id = null;
    _this.is_deleted = null;

    _this.bind(data);

    return _this;
  }
  /*getThumbnail(dimension = 300)
  {
      dimension = Number(dimension);
      let thumbnail = this.mediaThumbnails.find(i => {
          return i.dimension === dimension;
      });
      return thumbnail ? thumbnail.url : this.url;
  }
   setDefaultUrl(){
      this.mediaThumbnails = new Collection(Thumbnail);
      this.url = '/cms/images/no-image.png';
      return this;
  }*/


  _createClass(Media, [{
    key: "typeOfNumber",
    value: function typeOfNumber() {
      return ['id'];
    }
  }, {
    key: "apiGroup",
    value: function apiGroup() {
      return 'media';
    }
  }]);

  return Media;
}(_libs_model__WEBPACK_IMPORTED_MODULE_0__["default"]);



/***/ }),

/***/ "./develop/models/mediaThumbnail.js":
/*!******************************************!*\
  !*** ./develop/models/mediaThumbnail.js ***!
  \******************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Thumbnail; });
/* harmony import */ var _libs_model__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../libs/model */ "./develop/libs/model.js");
function _typeof(obj) { if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }

function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }

function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }

function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }

function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }

/**
 * MediaThumbnail class definition
 */

/**
 * MediaThumbnail constructor
 */

var Thumbnail =
/*#__PURE__*/
function (_Model) {
  _inherits(Thumbnail, _Model);

  function Thumbnail(data) {
    var _this;

    _classCallCheck(this, Thumbnail);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Thumbnail).call(this));
    _this.dimension = 0;
    _this.width = 0;
    _this.height = 0;
    _this.url = null;

    _this.bind(data);

    return _this;
  }

  _createClass(Thumbnail, [{
    key: "typeOfNumber",
    value: function typeOfNumber() {
      return ['dimension', 'width', 'height'];
    }
  }]);

  return Thumbnail;
}(_libs_model__WEBPACK_IMPORTED_MODULE_0__["default"]);



/***/ })

}]);