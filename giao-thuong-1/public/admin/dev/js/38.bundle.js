(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[38],{

/***/ "./develop/admin/views/media/list.vue":
/*!********************************************!*\
  !*** ./develop/admin/views/media/list.vue ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _list_vue_vue_type_template_id_16648bea___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./list.vue?vue&type=template&id=16648bea& */ "./develop/admin/views/media/list.vue?vue&type=template&id=16648bea&");
/* harmony import */ var _list_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./list.vue?vue&type=script&lang=js& */ "./develop/admin/views/media/list.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _list_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _list_vue_vue_type_template_id_16648bea___WEBPACK_IMPORTED_MODULE_0__["render"],
  _list_vue_vue_type_template_id_16648bea___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "develop/admin/views/media/list.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./develop/admin/views/media/list.vue?vue&type=script&lang=js&":
/*!*********************************************************************!*\
  !*** ./develop/admin/views/media/list.vue?vue&type=script&lang=js& ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_list_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./list.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./develop/admin/views/media/list.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_list_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./develop/admin/views/media/list.vue?vue&type=template&id=16648bea&":
/*!***************************************************************************!*\
  !*** ./develop/admin/views/media/list.vue?vue&type=template&id=16648bea& ***!
  \***************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_list_vue_vue_type_template_id_16648bea___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./list.vue?vue&type=template&id=16648bea& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./develop/admin/views/media/list.vue?vue&type=template&id=16648bea&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_list_vue_vue_type_template_id_16648bea___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_list_vue_vue_type_template_id_16648bea___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



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



/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./develop/admin/views/media/list.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./develop/admin/views/media/list.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/regenerator */ "./node_modules/@babel/runtime/regenerator/index.js");
/* harmony import */ var _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _models_media__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../models/media */ "./develop/models/media.js");
/* harmony import */ var _libs_collection__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../libs/collection */ "./develop/libs/collection.js");


function asyncGeneratorStep(gen, resolve, reject, _next, _throw, key, arg) { try { var info = gen[key](arg); var value = info.value; } catch (error) { reject(error); return; } if (info.done) { resolve(value); } else { Promise.resolve(value).then(_next, _throw); } }

function _asyncToGenerator(fn) { return function () { var self = this, args = arguments; return new Promise(function (resolve, reject) { var gen = fn.apply(self, args); function _next(value) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "next", value); } function _throw(err) { asyncGeneratorStep(gen, resolve, reject, _next, _throw, "throw", err); } _next(undefined); }); }; }

//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//


/* harmony default export */ __webpack_exports__["default"] = ({
  name: 'mediaList',
  props: [],
  data: function data() {
    return {
      medias: new _libs_collection__WEBPACK_IMPORTED_MODULE_2__["default"](_models_media__WEBPACK_IMPORTED_MODULE_1__["default"]),
      avatarBase64: null,
      file: null,
      loadMore: true
    };
  },
  created: function created() {
    var _this = this;

    var media = new _models_media__WEBPACK_IMPORTED_MODULE_1__["default"]();
    media.loadCollection({
      skip: this.medias.length
    }).then(function (collection) {
      _this.medias.addRange(collection);

      console.log(_this.medias);
    });
  },
  methods: {
    setGender: function setGender(event) {
      this.medias.gender = event.target.value;
    },
    myFunction: function myFunction() {
      var _this2 = this;

      var media = new _models_media__WEBPACK_IMPORTED_MODULE_1__["default"]();
      media.loadCollection({
        skip: this.medias.length
      }).then(function (collection) {
        _this2.medias.addRange(collection);

        _this2.loadMore = _this2.medias.length < collection.recordsTotal;
      });
    },
    GetImage: function GetImage(e) {
      var _this3 = this;

      var image = e.target.files[0];
      var data = new FormData();
      this.file = image;
      data.append('image', image[0]);
      var reader = new FileReader();
      reader.readAsDataURL(image);

      reader.onload = function (e) {
        _this3.avatarBase64 = e.target.result;
      };
    },
    upload: function () {
      var _upload = _asyncToGenerator(
      /*#__PURE__*/
      _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.mark(function _callee(event) {
        var self, formData, token;
        return _babel_runtime_regenerator__WEBPACK_IMPORTED_MODULE_0___default.a.wrap(function _callee$(_context) {
          while (1) {
            switch (_context.prev = _context.next) {
              case 0:
                self = this;

                try {
                  formData = new FormData();
                  token = document.head.querySelector('meta[name="csrf-token"]').content;
                  formData.append('_token', token);
                  formData.append('file', this.file);
                  $.ajax({
                    url: this.$helper.url('media/upload'),
                    dataType: 'json',
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: formData,
                    type: 'post',
                    success: function success(response) {
                      if (response.success === 1) {
                        self.medias.addTop(response.data);
                        self.$helper.messageSuccess('Thêm mới thành công');
                        self.avatarBase64 = null;
                        $('input[type="file"]').val(null);
                      } else {
                        self.$helper.messageSuccess(response.message);
                      }
                    },
                    error: function error(err) {
                      this.$helper.messageError('Lỗi kết nối api');
                    }
                  });
                } catch (e) {
                  this.$helper.messageError(e);
                }

              case 2:
              case "end":
                return _context.stop();
            }
          }
        }, _callee, this);
      }));

      function upload(_x) {
        return _upload.apply(this, arguments);
      }

      return upload;
    }()
  },
  computed: {},
  watch: {},
  mounted: function mounted() {
    var self = this;
    this.$nextTick(function () {// Code that will run only after the
      // entire view has been rendered
    });
  },
  validations: {}
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./develop/admin/views/media/list.vue?vue&type=template&id=16648bea&":
/*!*********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./develop/admin/views/media/list.vue?vue&type=template&id=16648bea& ***!
  \*********************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _c("div", [
    _vm._m(0),
    _vm._v(" "),
    _c(
      "div",
      {
        staticClass: "col col-sm-12 text-center mt-3",
        attrs: { id: "loadmore-btn" }
      },
      [
        _c("input", {
          attrs: { type: "file", name: "avatar" },
          on: { change: _vm.GetImage }
        }),
        _vm._v(" "),
        _c("img", { attrs: { type: "image", src: _vm.avatarBase64 } }),
        _vm._v(" "),
        _c(
          "button",
          {
            staticClass: "btn w-sm btn-success waves-effect waves-light",
            attrs: { type: "submit" },
            on: {
              click: function($event) {
                $event.preventDefault()
                return _vm.upload($event)
              }
            }
          },
          [_vm._v("\n            Upload")]
        )
      ]
    ),
    _vm._v(" "),
    _c(
      "div",
      { staticClass: "row" },
      _vm._l(_vm.medias, function(media) {
        return _c(
          "div",
          { staticClass: "col-sm-6 col-xl-3 filter-item all web illustrator" },
          [
            _c("div", { staticClass: "gal-box" }, [
              _c(
                "a",
                {
                  staticClass: "image-popup",
                  attrs: { href: media.url, title: "Screenshot-1" }
                },
                [
                  _c("img", {
                    staticClass: "img-fluid",
                    attrs: { src: media.url, alt: "work-thumbnail" }
                  })
                ]
              ),
              _vm._v(" "),
              _c("div", { staticClass: "gall-info" }, [
                _c("h4", { staticClass: "font-16 mt-0" }, [
                  _vm._v(_vm._s(media.name))
                ]),
                _vm._v(" "),
                _vm._m(1, true),
                _vm._v(" "),
                _vm._m(2, true),
                _vm._v(" "),
                _vm._m(3, true)
              ])
            ])
          ]
        )
      }),
      0
    ),
    _vm._v(" "),
    _c(
      "div",
      {
        directives: [
          {
            name: "show",
            rawName: "v-show",
            value: _vm.loadMore,
            expression: "loadMore"
          }
        ],
        staticClass: "col-12 text-center"
      },
      [
        _c(
          "button",
          { staticClass: "btn btn-danger", on: { click: _vm.myFunction } },
          [_vm._v("\n            Xem thêm\n        ")]
        )
      ]
    )
  ])
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-12" }, [
        _c("div", { staticClass: "page-title-box" }, [
          _c("div", { staticClass: "page-title-right" }, [
            _c("ol", { staticClass: "breadcrumb m-0" }, [
              _c("li", { staticClass: "breadcrumb-item" }, [
                _c("a", { attrs: { href: "javascript: void(0);" } }, [
                  _c("b", [_vm._v("Thư viện Media")])
                ])
              ]),
              _vm._v(" "),
              _c("li", { staticClass: "breadcrumb-item" }, [
                _c("a", { attrs: { href: "javascript: void(0);" } }, [
                  _vm._v("Kho ảnh")
                ])
              ])
            ])
          ]),
          _vm._v(" "),
          _c("h4", { staticClass: "page-title" }, [_vm._v("Thư viện Media")])
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("a", { attrs: { href: "javascript: void(0);" } }, [
      _c("span", { staticClass: "text-muted ml-1" }, [_vm._v("Diamond")])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("a", { staticClass: "action-icon" }, [
      _c("i", { staticClass: "mdi mdi-delete" })
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "a",
      { staticClass: "gal-like-btn", attrs: { href: "javascript: void(0);" } },
      [_c("i", { staticClass: "mdi mdi-heart-outline text-danger" })]
    )
  }
]
render._withStripped = true



/***/ }),

/***/ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js":
/*!********************************************************************!*\
  !*** ./node_modules/vue-loader/lib/runtime/componentNormalizer.js ***!
  \********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return normalizeComponent; });
/* globals __VUE_SSR_CONTEXT__ */

// IMPORTANT: Do NOT use ES2015 features in this file (except for modules).
// This module is a runtime utility for cleaner component module output and will
// be included in the final webpack user bundle.

function normalizeComponent (
  scriptExports,
  render,
  staticRenderFns,
  functionalTemplate,
  injectStyles,
  scopeId,
  moduleIdentifier, /* server only */
  shadowMode /* vue-cli only */
) {
  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (render) {
    options.render = render
    options.staticRenderFns = staticRenderFns
    options._compiled = true
  }

  // functional template
  if (functionalTemplate) {
    options.functional = true
  }

  // scopedId
  if (scopeId) {
    options._scopeId = 'data-v-' + scopeId
  }

  var hook
  if (moduleIdentifier) { // server build
    hook = function (context) {
      // 2.3 injection
      context =
        context || // cached call
        (this.$vnode && this.$vnode.ssrContext) || // stateful
        (this.parent && this.parent.$vnode && this.parent.$vnode.ssrContext) // functional
      // 2.2 with runInNewContext: true
      if (!context && typeof __VUE_SSR_CONTEXT__ !== 'undefined') {
        context = __VUE_SSR_CONTEXT__
      }
      // inject component styles
      if (injectStyles) {
        injectStyles.call(this, context)
      }
      // register component module identifier for async chunk inferrence
      if (context && context._registeredComponents) {
        context._registeredComponents.add(moduleIdentifier)
      }
    }
    // used by ssr in case component is cached and beforeCreate
    // never gets called
    options._ssrRegister = hook
  } else if (injectStyles) {
    hook = shadowMode
      ? function () { injectStyles.call(this, this.$root.$options.shadowRoot) }
      : injectStyles
  }

  if (hook) {
    if (options.functional) {
      // for template-only hot-reload because in that case the render fn doesn't
      // go through the normalizer
      options._injectStyles = hook
      // register for functioal component in vue file
      var originalRender = options.render
      options.render = function renderWithStyleInjection (h, context) {
        hook.call(context)
        return originalRender(h, context)
      }
    } else {
      // inject component registration as beforeCreate hook
      var existing = options.beforeCreate
      options.beforeCreate = existing
        ? [].concat(existing, hook)
        : [hook]
    }
  }

  return {
    exports: scriptExports,
    options: options
  }
}


/***/ })

}]);