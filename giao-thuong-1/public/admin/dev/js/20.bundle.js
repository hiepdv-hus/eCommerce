(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[20],{

/***/ "./develop/admin/views/event/list.vue":
/*!********************************************!*\
  !*** ./develop/admin/views/event/list.vue ***!
  \********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _list_vue_vue_type_template_id_20739418___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./list.vue?vue&type=template&id=20739418& */ "./develop/admin/views/event/list.vue?vue&type=template&id=20739418&");
/* harmony import */ var _list_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./list.vue?vue&type=script&lang=js& */ "./develop/admin/views/event/list.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport *//* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");





/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_2__["default"])(
  _list_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_1__["default"],
  _list_vue_vue_type_template_id_20739418___WEBPACK_IMPORTED_MODULE_0__["render"],
  _list_vue_vue_type_template_id_20739418___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "develop/admin/views/event/list.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./develop/admin/views/event/list.vue?vue&type=script&lang=js&":
/*!*********************************************************************!*\
  !*** ./develop/admin/views/event/list.vue?vue&type=script&lang=js& ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_list_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib??ref--4-0!../../../../node_modules/vue-loader/lib??vue-loader-options!./list.vue?vue&type=script&lang=js& */ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./develop/admin/views/event/list.vue?vue&type=script&lang=js&");
/* empty/unused harmony star reexport */ /* harmony default export */ __webpack_exports__["default"] = (_node_modules_babel_loader_lib_index_js_ref_4_0_node_modules_vue_loader_lib_index_js_vue_loader_options_list_vue_vue_type_script_lang_js___WEBPACK_IMPORTED_MODULE_0__["default"]); 

/***/ }),

/***/ "./develop/admin/views/event/list.vue?vue&type=template&id=20739418&":
/*!***************************************************************************!*\
  !*** ./develop/admin/views/event/list.vue?vue&type=template&id=20739418& ***!
  \***************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_list_vue_vue_type_template_id_20739418___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../../node_modules/vue-loader/lib??vue-loader-options!./list.vue?vue&type=template&id=20739418& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./develop/admin/views/event/list.vue?vue&type=template&id=20739418&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_list_vue_vue_type_template_id_20739418___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_list_vue_vue_type_template_id_20739418___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ }),

/***/ "./develop/models/event.js":
/*!*********************************!*\
  !*** ./develop/models/event.js ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Event; });
/* harmony import */ var _libs_model__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../libs/model */ "./develop/libs/model.js");
/* harmony import */ var _libs_collection__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../libs/collection */ "./develop/libs/collection.js");
/* harmony import */ var _libs_api__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../libs/api */ "./develop/libs/api.js");
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
 * Event class definition
 */



/**
 * Eventconstructor
 */

var Event =
/*#__PURE__*/
function (_Model) {
  _inherits(Event, _Model);

  function Event(data) {
    var _this;

    _classCallCheck(this, Event);

    _this = _possibleConstructorReturn(this, _getPrototypeOf(Event).call(this));
    _this.title = null;
    _this.slug = null;
    _this.description = null;
    _this.detail = null;
    _this.media_id = null;
    _this.category_id = null;
    _this.user_create_id = null;
    _this.user_update_id = null;
    _this.is_deleted = null;

    _this.bind(data);

    return _this;
  }

  _createClass(Event, [{
    key: "typeOfNumber",
    value: function typeOfNumber() {
      return ['id'];
    }
  }, {
    key: "apiGroup",
    value: function apiGroup() {
      return 'event';
    }
  }]);

  return Event;
}(_libs_model__WEBPACK_IMPORTED_MODULE_0__["default"]);



/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js?!./node_modules/vue-loader/lib/index.js?!./develop/admin/views/event/list.vue?vue&type=script&lang=js&":
/*!*****************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib??ref--4-0!./node_modules/vue-loader/lib??vue-loader-options!./develop/admin/views/event/list.vue?vue&type=script&lang=js& ***!
  \*****************************************************************************************************************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _models_event__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../../../models/event */ "./develop/models/event.js");
/* harmony import */ var _libs_collection__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../libs/collection */ "./develop/libs/collection.js");
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
  name: 'EventList',
  props: [],
  data: function data() {
    return {
      events: new _libs_collection__WEBPACK_IMPORTED_MODULE_1__["default"](_models_event__WEBPACK_IMPORTED_MODULE_0__["default"])
    };
  },
  created: function created() {
    var _this = this;

    var event = new _models_event__WEBPACK_IMPORTED_MODULE_0__["default"]();
    event.loadCollection().then(function (collection) {
      _this.events.addRange(collection);
    });
  },
  mounted: function mounted() {},
  methods: {
    myFunction: function myFunction(event, systemUsers) {
      var _this2 = this;

      event.preventDefault();
      var result = confirm('Bạn có chắc chắn muốn xóa không ?');

      if (result == true) {
        var self = this;

        try {
          systemUsers["delete"]().then(function (response) {
            if (response.isSuccess()) {
              _this2.$helper.messageSuccess(response.message);

              setTimeout(function () {
                self.$helper.redirect('system-user/list');
              }, 500);
            } else {
              _this2.$helper.messageError(response.message);
            }
          });
        } catch (e) {
          this.$helper.messageError(e);
        }
      }
    }
  },
  watch: {},
  computed: {}
});

/***/ }),

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./develop/admin/views/event/list.vue?vue&type=template&id=20739418&":
/*!*********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./develop/admin/views/event/list.vue?vue&type=template&id=20739418& ***!
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
    _c("div", { staticClass: "row" }, [
      _c("div", { staticClass: "col-12" }, [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-body" }, [
            _vm._m(1),
            _vm._v(" "),
            _c("div", { staticClass: "table-responsive" }, [
              _c(
                "table",
                {
                  staticClass: "table table-centered table-striped",
                  attrs: { id: "products-datatable" }
                },
                [
                  _vm._m(2),
                  _vm._v(" "),
                  _c(
                    "tbody",
                    _vm._l(_vm.events, function(event) {
                      return _c("tr", [
                        _vm._m(3, true),
                        _vm._v(" "),
                        _c("td", { staticClass: "table-user" }, [
                          _c(
                            "a",
                            { staticClass: "text-body font-weight-semibold" },
                            [
                              _vm._v(
                                "\n                                        " +
                                  _vm._s(event.title) +
                                  "\n                                    "
                              )
                            ]
                          )
                        ]),
                        _vm._v(" "),
                        _c("td", [
                          _vm._v(
                            "\n                                    " +
                              _vm._s(event.slug) +
                              "\n                                "
                          )
                        ]),
                        _vm._v(" "),
                        _c("td", [
                          _vm._v(
                            "\n                                    " +
                              _vm._s(event.description) +
                              "\n                                "
                          )
                        ]),
                        _vm._v(" "),
                        _c("td", [
                          _vm._v(
                            "\n                                    " +
                              _vm._s(event.detail) +
                              "\n                                "
                          )
                        ]),
                        _vm._v(" "),
                        _c("td", { staticClass: "table-user" }, [
                          _c("img", {
                            staticClass: "mr-2 rounded-circle",
                            attrs: { src: event.media_id, alt: "table-user" }
                          })
                        ]),
                        _vm._v(" "),
                        _vm._m(4, true),
                        _vm._v(" "),
                        _c("td", [
                          _c(
                            "a",
                            {
                              staticClass: "action-icon",
                              attrs: {
                                href: "/gen-admin/event/edit/" + event.id
                              }
                            },
                            [
                              _c("i", {
                                staticClass: "mdi mdi-square-edit-outline"
                              })
                            ]
                          ),
                          _vm._v(" "),
                          _c(
                            "a",
                            {
                              staticClass: "action-icon",
                              on: {
                                click: function($event) {
                                  return _vm.myFunction($event, event)
                                }
                              }
                            },
                            [_c("i", { staticClass: "mdi mdi-delete" })]
                          )
                        ])
                      ])
                    }),
                    0
                  )
                ]
              )
            ]),
            _vm._v(" "),
            _vm._m(5)
          ])
        ])
      ])
    ])
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
                  _c("b", [_vm._v("Tin tức")])
                ])
              ]),
              _vm._v(" "),
              _c("li", { staticClass: "breadcrumb-item" }, [
                _c("a", { attrs: { href: "javascript: void(0);" } }, [
                  _vm._v("Danh sách")
                ])
              ])
            ])
          ]),
          _vm._v(" "),
          _c("h4", { staticClass: "page-title" }, [_vm._v("Tin tức")])
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("div", { staticClass: "row mb-2" }, [
      _c("div", { staticClass: "col-sm-4" }, [
        _c(
          "a",
          {
            staticClass: "btn btn-danger waves-effect waves-light",
            attrs: {
              href: "/gen-admin/event/add",
              "data-animation": "fadein",
              "data-plugin": "custommodal",
              "data-overlaycolor": "#38414a"
            }
          },
          [
            _c("i", { staticClass: "mdi mdi-plus-circle mr-1" }),
            _vm._v(
              "\n                                Thêm tin mới\n                            "
            )
          ]
        )
      ]),
      _vm._v(" "),
      _c("div", { staticClass: "col-sm-8" }, [
        _c("div", { staticClass: "text-sm-right" }, [
          _c(
            "button",
            {
              staticClass: "btn btn-success mb-2 mr-1",
              attrs: { type: "button" }
            },
            [_c("i", { staticClass: "mdi mdi-settings" })]
          ),
          _vm._v(" "),
          _c(
            "button",
            {
              staticClass: "btn btn-light mb-2 mr-1",
              attrs: { type: "button" }
            },
            [_vm._v("Import")]
          ),
          _vm._v(" "),
          _c(
            "button",
            { staticClass: "btn btn-light mb-2", attrs: { type: "button" } },
            [_vm._v("Export")]
          )
        ])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("thead", [
      _c("tr", [
        _c("th", { staticStyle: { width: "20px" } }, [
          _c("div", { staticClass: "custom-control custom-checkbox" }, [
            _c("input", {
              staticClass: "custom-control-input",
              attrs: { type: "checkbox", id: "customCheck1" }
            }),
            _vm._v(" "),
            _c(
              "label",
              {
                staticClass: "custom-control-label",
                attrs: { for: "customCheck1" }
              },
              [_vm._v(" ")]
            )
          ])
        ]),
        _vm._v(" "),
        _c("th", [_vm._v("Title")]),
        _vm._v(" "),
        _c("th", [_vm._v("Slug")]),
        _vm._v(" "),
        _c("th", [_vm._v("Description")]),
        _vm._v(" "),
        _c("th", [_vm._v("Detail")]),
        _vm._v(" "),
        _c("th", [_vm._v("Media_Id")]),
        _vm._v(" "),
        _c("th", [_vm._v("Status")]),
        _vm._v(" "),
        _c("th", { staticStyle: { width: "85px" } }, [_vm._v("Action")])
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c("div", { staticClass: "custom-control custom-checkbox" }, [
        _c("input", {
          staticClass: "custom-control-input",
          attrs: { type: "checkbox", id: "customCheck2" }
        }),
        _vm._v(" "),
        _c(
          "label",
          {
            staticClass: "custom-control-label",
            attrs: { for: "customCheck2" }
          },
          [_vm._v(" ")]
        )
      ])
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("td", [
      _c(
        "span",
        { staticClass: "badge bg-soft-success text-success shadow-none" },
        [_vm._v("Active")]
      )
    ])
  },
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c(
      "ul",
      { staticClass: "pagination pagination-rounded justify-content-end mb-0" },
      [
        _c("li", { staticClass: "page-item" }, [
          _c(
            "a",
            {
              staticClass: "page-link",
              attrs: { href: "javascript: void(0);", "aria-label": "Previous" }
            },
            [
              _c("span", { attrs: { "aria-hidden": "true" } }, [_vm._v("«")]),
              _vm._v(" "),
              _c("span", { staticClass: "sr-only" }, [_vm._v("Previous")])
            ]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "page-item active" }, [
          _c(
            "a",
            {
              staticClass: "page-link",
              attrs: { href: "javascript: void(0);" }
            },
            [_vm._v("1")]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "page-item" }, [
          _c(
            "a",
            {
              staticClass: "page-link",
              attrs: { href: "javascript: void(0);" }
            },
            [_vm._v("2")]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "page-item" }, [
          _c(
            "a",
            {
              staticClass: "page-link",
              attrs: { href: "javascript: void(0);" }
            },
            [_vm._v("3")]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "page-item" }, [
          _c(
            "a",
            {
              staticClass: "page-link",
              attrs: { href: "javascript: void(0);" }
            },
            [_vm._v("4")]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "page-item" }, [
          _c(
            "a",
            {
              staticClass: "page-link",
              attrs: { href: "javascript: void(0);" }
            },
            [_vm._v("5")]
          )
        ]),
        _vm._v(" "),
        _c("li", { staticClass: "page-item" }, [
          _c(
            "a",
            {
              staticClass: "page-link",
              attrs: { href: "javascript: void(0);", "aria-label": "Next" }
            },
            [
              _c("span", { attrs: { "aria-hidden": "true" } }, [_vm._v("»")]),
              _vm._v(" "),
              _c("span", { staticClass: "sr-only" }, [_vm._v("Next")])
            ]
          )
        ])
      ]
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