/*!
 * 
 * Premium Stock Market Widgets
 * -----------------------------
 * Version 4.4.0, built on Friday, November 17, 2023
 * Copyright (c) Financial apps and plugins <info@financialplugins.com>. All rights reserved
 * Demo: https://stockmarketwidgets.financialplugins.com/
 * Purchase (WordPress version): https://1.envato.market/az97R
 * Purchase (PHP version): https://1.envato.market/AQ17o
 * Like: https://www.facebook.com/financialplugins/
 *
 */
(self.psmw59847=self.psmw59847||[]).push([[6403],{31929:(t,e,s)=>{var r={"./template.vue":34241};function a(t){var e=l(t);return s(e)}function l(t){if(!s.o(r,t)){var e=new Error("Cannot find module '"+t+"'");throw e.code="MODULE_NOT_FOUND",e}return r[t]}a.keys=function(){return Object.keys(r)},a.resolve=l,t.exports=a,a.id=31929},34241:(t,e,s)=>{"use strict";s.r(e),s.d(e,{default:()=>o});var r=s(5166);var a=s(61600);const l={components:{AssetDropdown:s(58992).Z},mixins:[a.Z],data:()=>({symbol:null}),computed:{selectedSymbol(){return this.symbol||this.asset}},methods:{updateSymbol(t){this.symbol=t.symbol}}};const o=(0,s(83744).Z)(l,[["render",function(t,e,s,a,l,o){var n=(0,r.up)("asset-dropdown"),c=(0,r.up)("stock-market-widget");return(0,r.wg)(),(0,r.iD)("div",{class:(0,r.C_)(t.classes)},[(0,r.Wm)(n,{color:t.attrs.color,"allowed-types":t.attrs.allowed_types,"allowed-markets":t.attrs.allowed_markets,class:"smw-mb-3",onSelect:o.updateSymbol},null,8,["color","allowed-types","allowed-markets","onSelect"]),o.selectedSymbol?((0,r.wg)(),(0,r.j4)(c,{key:0,type:"card",template:t.attrs.template,color:t.attrs.color,assets:o.selectedSymbol,chart_range:t.attrs.chart_range,chart_interval:t.attrs.chart_interval,api:t.attrs.api},null,8,["template","color","assets","chart_range","chart_interval","api"])):(0,r.kq)("v-if",!0)],2)}]])},15632:(t,e,s)=>{"use strict";s.r(e),s.d(e,{default:()=>l});var r=s(5166),a=s(55048);const l={__name:"type",setup:t=>(t,e)=>((0,r.wg)(),(0,r.j4)((0,r.LL)((0,r.SU)(a.y)(s(31929))),(0,r.vs)((0,r.F4)((0,r.l1)())),null,16))}}}]);