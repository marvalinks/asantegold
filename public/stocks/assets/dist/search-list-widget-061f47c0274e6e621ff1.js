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
(self.psmw59847=self.psmw59847||[]).push([[2686],{95128:(e,t,s)=>{var l={"./template.vue":81151};function o(e){var t=r(e);return s(t)}function r(e){if(!s.o(l,e)){var t=new Error("Cannot find module '"+e+"'");throw t.code="MODULE_NOT_FOUND",t}return l[e]}o.keys=function(){return Object.keys(l)},o.resolve=r,e.exports=o,o.id=95128},81151:(e,t,s)=>{"use strict";s.r(t),s.d(t,{default:()=>a});var l=s(5166);var o=s(61600);const r={components:{AssetDropdown:s(58992).Z},mixins:[o.Z],data:()=>({symbol:null}),computed:{selectedSymbol(){return this.symbol||this.asset}},methods:{updateSymbol(e){this.symbol=e.symbol}}};const a=(0,s(83744).Z)(r,[["render",function(e,t,s,o,r,a){var n=(0,l.up)("asset-dropdown"),d=(0,l.up)("stock-market-widget");return(0,l.wg)(),(0,l.iD)("div",{class:(0,l.C_)(e.classes)},[(0,l.Wm)(n,{color:e.attrs.color,"allowed-types":e.attrs.allowed_types,"allowed-markets":e.attrs.allowed_markets,class:"smw-mb-3",onSelect:a.updateSymbol},null,8,["color","allowed-types","allowed-markets","onSelect"]),a.selectedSymbol?((0,l.wg)(),(0,l.j4)(d,{key:0,type:"list",template:e.attrs.template,color:e.attrs.color,assets:a.selectedSymbol,fields:e.attrs.fields,api:e.attrs.api},null,8,["template","color","assets","fields","api"])):(0,l.kq)("v-if",!0)],2)}]])},19534:(e,t,s)=>{"use strict";s.r(t),s.d(t,{default:()=>r});var l=s(5166),o=s(55048);const r={__name:"type",setup:e=>(e,t)=>((0,l.wg)(),(0,l.j4)((0,l.LL)((0,l.SU)(o.y)(s(95128))),(0,l.vs)((0,l.F4)((0,l.l1)())),null,16))}}}]);